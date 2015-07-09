<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');


// Prevents the text widgets from stripping out break tags. Actually, it replaces the shortcode for a breaktag after processsing. -JMS
add_filter ( 'widget_title' , 'my_widget_title' , 10 , 3 ) ;
function my_widget_title ( $title )
{
$title = str_replace ( "[br]" , "<br/>" , $title ) ;
$title = str_replace ( "[span]" , "<span>" , $title ) ;
$title = str_replace ( "[/span]" , "</span>" , $title ) ;
return $title ;
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



function exclude_widget_categories($args){
$exclude = "4"; // The IDs of the excluding categories
$args["exclude"] = $exclude;
return $args;
}
add_filter("widget_categories_args","exclude_widget_categories");


