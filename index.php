// show limited caracter post content
   <?php 


  $shortcontent  = get_the_content( );
  $blog_content = wp_trim_words($shortcontent,$num_words=30,$more='');
  echo $blog_content;


   ?>




// Add social icons in wp

<?php
function add_to_author_profile( $contactmethods ) {
	
	$contactmethods['rss_url'] = 'RSS URL';
	$contactmethods['google_profile'] = 'Google Profile URL';
	$contactmethods['twitter_profile'] = 'Twitter Profile URL';
	$contactmethods['facebook_profile'] = 'Facebook Profile URL';
	$contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
	
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
?>



