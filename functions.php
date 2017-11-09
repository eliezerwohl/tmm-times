<?php 
	add_theme_support( 'post-thumbnails' ); 
	if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	
	}
	function add_jquery() {
    wp_enqueue_script( 'jquery' );
  }    
	add_action('init', 'add_jquery');
		require_once('wp-bootstrap-navwalker.php');
	register_nav_menus( array(
	  'primary' => __( 'Primary Menu', 'primary' ),
	) );
	function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function get_excerpt_custom($url){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 200);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a href="'. $url .'">more</a>';
return $excerpt;
}
	// add_action( 'wp_default_scripts', 'move_jquery_into_footer' );

// function move_jquery_into_footer( $wp_scripts ) {

//     if( is_admin() ) {
//         return;
//     }

//     $wp_scripts->add_data( 'jquery', 'group', 1 );
//     $wp_scripts->add_data( 'jquery-core', 'group', 1 );
//     $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
// }

function wpa_45815($arr){
    $arr['block_formats'] = 'Paragraph=p;Heading 3=h3;Heading 4=h4';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'wpa_45815');


?>