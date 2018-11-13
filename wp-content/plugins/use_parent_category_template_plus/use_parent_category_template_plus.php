<?php
/*
Plugin Name: use_parent_category_template_plus
Plugin URI: http://blog.portal.kharkov.ua/
Description: Use parent category template if exists
Author: Yuri 'Bela' Belotitski
Version: 1.1 beta
Author URI: http://blog.portal.kharkov.ua/
*/ 

add_action('template_redirect', 'use_parent_category_template');
function use_parent_category_template() {
	global $cat, $post;
	$current_category = get_the_category();
	
if (is_category()): 

	$category = get_category($cat);
	while ($category->cat_ID) {
        if ( file_exists(TEMPLATEPATH . "/category-" . $category->cat_ID . '.php') ) {
            include(TEMPLATEPATH . "/category-" . $category->cat_ID . '.php');
            exit;
        }
		$category = get_category($category->category_parent);
    }

elseif (is_single() and $current_category[0]->slug != 'news') :

    $categories = get_the_category($post->ID);
    
    if (count($categories)) foreach ( $categories as $category ) {
		while($category->cat_ID){
			if(file_exists(TEMPLATEPATH.'/category-'.$category->slug.'.php')){
				include(TEMPLATEPATH.'/category-'.$category->slug.'.php');
				exit;
				}
			elseif (file_exists(TEMPLATEPATH.'/category-'.$category->cat_ID.'.php') ) {
				include(TEMPLATEPATH.'/category-'.$category->cat_ID.'.php');
				exit;
			}
		$category = get_category($category->category_parent);
		}	
    
    }

endif;

}
?>