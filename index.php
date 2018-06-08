/*

This file is a collenction of essential functions needed in wp development

*/


// Register text domain:
<?php
	load_theme_text_domain( "textdomain" );
	
	//menu register
 
	register_nav_menus( array(
		'top_menu'    => __( 'Top Menu', 'text_domain' ),
		'footer_menu' => __( 'Footer Menu', 'text_domain' ),
		'social_menu' => __( 'Social Menu', 'text_domain' ),
	) );
	
	// checking post format
    
    $format = get_post_format();
    //check the active sider
    
    is_active_sidebar();
	
	
	//remove bodyclass
	
	function lwhh_bodyclass_remove($classes){
		unset($classes[array_search("single-post",$classes)]);
		return $classes;
	}
	
	add_filter("body_class","lwhh_bodyclass_remove");
	
	
	
	
	

?>


// show limited caracter post content
<?php
	
	
	$shortcontent = get_the_content();
	$blog_content = wp_trim_words( $shortcontent, $num_words = 30, $more = '' );
	echo $blog_content;


?>


// Add social icons in wp

<?php
	function add_to_author_profile( $contactmethods ) {
		
		$contactmethods['rss_url']          = 'RSS URL';
		$contactmethods['google_profile']   = 'Google Profile URL';
		$contactmethods['twitter_profile']  = 'Twitter Profile URL';
		$contactmethods['facebook_profile'] = 'Facebook Profile URL';
		$contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
		
		return $contactmethods;
	}
	
	add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1 );
?>



