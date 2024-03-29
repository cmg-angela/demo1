<?php
if (!function_exists('foundationpress_sidebar_widgets')) :
function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns sidebar-button">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
    'id' => 'sidebar-widgets-interior',
    'name' => __('Sidebar widgets interior', 'FoundationPress'),
    'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
    'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="row"><div class="small-12 columns sidebar-button">',
    'after_widget' => '</div></div></article>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));


    register_sidebar(array(
    'id' => 'sidebar-widgets-contact',
    'name' => __('Sidebar widgets contact', 'FoundationPress'),
    'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
    'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="row"><div class="small-12 columns sidebar-button">',
    'after_widget' => '</div></div></article>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));




    register_sidebar(array(
    'id' => 'sidebar-widgets-blog',
    'name' => __('Sidebar widgets blog', 'FoundationPress'),
    'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
    'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="row"><div class="small-12 columns sidebar-button">',
    'after_widget' => '</div></div></article>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));




  register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
      'id' => 'featured-tabs',
      'name' => __('Featured tabs widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="small-12 medium-6 large-3 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>
