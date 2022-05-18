add_action( 'woocommerce_before_shop_loop', 'show_vendors_in_search' );
function show_vendors_in_search() {
  $search = get_query_var( 's' );
  if(is_search()) {
    if(!empty($shortcode)){
      // display only 2 vendor
      echo do_shortcode('[wcfm_stores has_category="no" has_country="no" has_state="no" has_search="no" has_orderby="no" has_zip="no" has_radius="no" per_page="1" per_row="2" theme="simple" orderby="rating_desc" has_map="no" search_term="'.$search.'"]');
      // button directed to WCFM list of all vendors based on search keyword
      echo '<a href="'.site_url().'/store-listing/?wcfmmp_store_search='.$search.'">View all store</a>';
    }
  }
}
