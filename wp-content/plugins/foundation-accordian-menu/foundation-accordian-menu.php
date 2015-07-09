<?php
/**
 * Plugin Name: Foundation Accordian Menu
 * Description: A modular plugin that uses the elegent functionality of Foundation's built in Accordian menu.
 * Version: The plugin's version number. Example: 1.0.0
 * Author: Josh Smith
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */




 // Creating the widget
class foundation_accordian_menu_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'foundation_accordian_menu_widget',

// Widget name will appear in UI
__('Foundation Accordion Menu', 'text_domain'),

// Widget description
array( 'description' => __( 'Foundation Accordion menu that displays custom a custom', 'text_domain' ), )
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
echo __( '<ul class="accordion" data-accordion>
  <li class="accordion-navigation">
    <a href="#panel1a"><img src="img/logo-icon-nav-interior.png" alt="logo-icon-nav-interior" width="24" height="24" />Accordion 1</a>
  </li>
  <li class="accordion-navigation">
    <a href="#panel2a">Accordion 1</a>
  </li>
  <li class="accordion-navigation">
    <a href="#panel3a">Accordion 1</a>
  </li>
  <li class="accordion-navigation">
    <a href="#panel4a">Accordion 1</a>
  </li>
  <li class="accordion-navigation">
    <a href="#panel5a">Accordion 1</a>
  </li>
  <li class="accordion-navigation">
    <a href="#panel6a">Accordion 1</a>
  </li>
</ul>', 'text_domain' );
echo $args['after_widget'];
}

// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'text_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function foundation_accordian_menu_load_widget() {
	register_widget( 'foundation_accordian_menu_widget' );
}
add_action( 'widgets_init', 'foundation_accordian_menu_load_widget' );







?>