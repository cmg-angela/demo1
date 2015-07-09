<?php
// Creating the widget 
class CMGForm_Short_Widget extends WP_Widget {

	function __construct() {
		$widget_options = array('description' => 'CMG Short Form Widget');
		parent::__construct('cmgform_short_widget', 'CMG Short Form Widget',	$widget_options);
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget($args,$instance) {
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		echo $args['before_title'].'Contact Us'.$args['after_title'];
		echo do_shortcode('[cmgform short]');
		echo $args['after_widget'];
	}
		
	public function form($instance) {
		// widget backend
	}
	
	public function update($new_instance,$old_instance) {
		// update code
	}
} 


class CMGForm_Appointment_Widget extends WP_Widget {
	
	function __construct() {
		$widget_options = array('description' => 'CMG Appointment Form Widget');
		parent::__construct('cmgform_appointment_widget', 'CMG Appointment Form Widget',	$widget_options);
	}
	
	public function widget($args,$instance) {
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		echo $args['before_title'].'Contact Us'.$args['after_title'];
		echo do_shortcode('[cmgform appointment]');
		echo $args['after_widget'];
	}	
	
	public function form($instance) {
		// widget backend
	}
	
	public function update($new_instance,$old_instance) {
		// update code
	}
}


class CMGForm_Long_Widget extends WP_Widget {
	
	function __construct() {
		$widget_options = array('description' => 'CMG Long Form Widget');
		parent::__construct('cmgform_long_widget', 'CMG Long Form Widget',	$widget_options);
	}
	
	public function widget($args,$instance) {
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		echo $args['before_title'].'Contact Us'.$args['after_title'];
		echo do_shortcode('[cmgform long]');
		echo $args['after_widget'];
	}	
	
	public function form($instance) {
		// widget backend
	}
	
	public function update($new_instance,$old_instance) {
		// update code
	}
}


// Register and load the widget
function cmgform_load_widgets() {
	register_widget('CMGForm_Short_Widget');
	register_widget('CMGForm_Appointment_Widget');
	register_widget('CMGForm_Long_Widget');
}
add_action('widgets_init','cmgform_load_widgets');
?>