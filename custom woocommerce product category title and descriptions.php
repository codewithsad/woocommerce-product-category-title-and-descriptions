add_shortcode('cat_desc', 'cat_desc_shortcode');
function cat_desc_shortcode() {
$url= $_SERVER['REQUEST_URI'];
$parts = explode("/", $url);
$last_slug=$parts[count($parts) - 2];

    if($last_slug){//product_cat
        $cat_id= substr($last_slug, 11);//
        $category = get_term_by( 'slug', $cat_id, 'product_cat' );
        $output='<div class="product-meta-section"><h1  id="shop_title" data-title="'.$category->name.'" class="shop_title entry-title woocommerce-products-header__title page-title">'.$category->name.'</h1>
        <p>'.$category->description.'</p></div>';
    }
    else{
        $output="";
    }
  return $output;
}

add_shortcode('attr_desc', 'attr_desc_shortcode');
function attr_desc_shortcode() {
$url= $_SERVER['REQUEST_URI'];
$parts = explode("/", $url);
$last_slug=$parts[count($parts) - 2];
  if($last_slug){
    $attr_id= substr($last_slug, 11);
        $label_name = wc_attribute_label($attr_id);
         $output='<div class="product-meta-section"><h1  id="shop_label" data-label="'.$label_name.'" class="shop_title entry-title woocommerce-products-header__title page-title">'.$label_name.'</h1></div>';
    }else{
        $output="";
    }
  return $output;
}
