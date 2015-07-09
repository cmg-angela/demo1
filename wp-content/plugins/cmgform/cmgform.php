<?php
/**
 * Plugin Name: CMG Forms
 * Plugin URI: http://www.ceatus.com
 * Description: Easily add CMG forms to your wordpress site via shortcode and widgets
 * Version: 1000.1
 * Author: Bryce Rutherford
 */

// add widgets
include 'widget.php';

// plugin defaults
DEFINE(CMGFORM_SHORT, "full_name,email,phone,message");
DEFINE(CMGFORM_SHORT_REQUIRED, "full_name,email");
DEFINE(CMGFORM_APPOINTMENT, "full_name,email,phone,app_month,app_day,app_time,message");
DEFINE(CMGFORM_APPOINTMENT_REQUIRED, "full_name,email,app_month,app_day,app_time,message");
DEFINE(CMGFORM_LONG, "full_name,address,city,state,zip,email,phone,interested_in,best_method,message");
DEFINE(CMGFORM_LONG_REQUIRED, "full_name,email,interested_in,message");


function cmgform_handler($attributes) {
	$atts = shortcode_atts(array(
	"name" 		=> "contact-quick",
	"form_name" => get_option('cmgform_form_name'),
	"captcha"	=> "mathcaptcha"
	), $attributes);

	foreach($attributes as $a) {
		switch($a) {
			case "short":
				$atts["fields"] = CMGFORM_SHORT;
				$atts["required"] = CMGFORM_SHORT_REQUIRED;
				break;
			case "appointment":
				$atts["fields"] = CMGFORM_APPOINTMENT;
				$atts["required"] = CMGFORM_APPOINTMENT_REQUIRED;
				break;
			case "long":
				$atts["fields"] = CMGFORM_LONG;
				$atts["required"] = CMGFORM_LONG_REQUIRED;
				break;
		}
	}

	return cmgform_build_form($atts);
}
// register plugin
add_shortcode("cmgform", "cmgform_handler");


function cmgform_scripts() {
	wp_register_style('cmgform_css', plugins_url('css/cmgform.css',__FILE__), array());
	wp_enqueue_style('cmgform_css');


	wp_register_script('cmgform_js', plugins_url('js/cmgform.js',__FILE__), array());
	wp_enqueue_script('cmgform_js');

}
// enqueue scripts
add_action('wp_enqueue_scripts', 'cmgform_scripts');
add_action('admin_enqueue_scripts', 'cmgform_scripts');


function cmgform_admin() {
	include 'cmgform-admin.php';
}


function cmgform_admin_actions() {
	if(current_user_can('manage_options')) {
		add_management_page("CMG Forms", "CMG Forms", 1, "CMGForms", "cmgform_admin");
	}
}
// add admin menu
add_action('admin_menu', 'cmgform_admin_actions');


function cmgform_build_form($attributes) {
	$random_class = "rand_".rand(1000,9999);
	$cmgform_fields = array("full_name" 	=> array("value" => "Full Name", "type" => "text", "required" => array('#q','0')),
									"email"			=> array("value" => "Email Address", "type" => "text", "required" => array('S','2')),
									"phone"			=> array("value" => "Phone Number", "type" => "text", "required" =>	array('#q','0')),
									"message"		=> array("value" => "Comment or Question", "type" => "textarea"),
									"app_month"		=> array("value" => "Preferred Appointment Month", "type" => "text"),
									"app_day"		=> array("value" => "Preferred Appointment Day", "type" => "text"),
									"app_time"		=> array("value" => "Preferred Appointment Time", "type" => "text"),
									"address"		=> array("value" => "Address", "type" => "text"),
									"city"			=> array("value" => "City", "type" => "text"),
									"state"			=> array("value" => "State", "type" => "text"),
									"zip"				=> array("value" => "Zip", "type" => "text"),
									"interested_in"=> array("value" => "Procedure interested in", "type" => "text", "required" => array('#q','0')),
									"best_method"	=> array("value" => "Preferred contact method", "type" => "select", "options" =>array("Preferred contact method" => "","Email" => "Email","Phone" => "Phone")));

	// sanitize attributes
	foreach($attributes as $key => $value) {
		$$key = wp_specialchars_decode($value);
	}
	$name = $name." ".$random_class;
	$fields_html = cmgform_fields($fields,$required,$cmgform_fields);
	$captcha_html = cmgform_captcha($captcha);
	$required_html = cmgform_required($required,$captcha,$cmgform_fields);

	$html_form = <<<HTML
<!-- CMG Form Begin -->
<form name="{$name}" id="{$name}" tabindex="1" autocomplete="off" method="post" action="http://cmgmail.ceatus.com/cmgmail" class="cmgform {$random_class}" onsubmit="clearOptionals('__ADD_OPTIONAL_FIELDS_HERE__');">
<input type="hidden" name="web_form[form_name]" value="{$form_name}">
{$fields_html}
<p class="completion-instructions">Complete the equation before submitting the form</p>
<div class="arrow-down"></div>
{$captcha_html}
<span class="contact_subject"><input type="text" name="web_form[subject]" value="" id="contact_subject" tabindex="2" class="" /></span>
<input type="submit" name="submit" id="contact_submit" value="Submit" tabindex="3" onclick="YY_checkform('{$name}' {$required_html}); return document.MM_returnValue;" />
</form>
<script type="text/javascript">pop_mc(".{$random_class}");</script>
<!-- CMG Form End -->
HTML;

	return $html_form;
}


function cmgform_fields($fields, $required, $default_fields) {
	$fields_html = "";
	$fields_arr = explode(',',$fields);
	$required_arr = explode(',',$required);

	foreach($fields_arr as $f) {
		$rf = (in_array($f,$required_arr) ? " *" : "");
		if(array_key_exists($f,$default_fields)) {
			switch($default_fields[$f]["type"]) {
				case "text":
					$fields_html .= '<input type="text" name="web_form['.$f.']" value="'.$default_fields[$f]["value"].':'.$rf.'" id="contact_'.$f.'" class="" onfocus="removeText(this)" onblur="replaceText(this)" />';
					break;
				case "textarea":
					$fields_html .= '<textarea name="web_form['.$f.']" id="contact_'.$f.'" class="" onfocus="removeText(this)" onblur="replaceText(this)" rows="4" cols="15">'.$default_fields[$f]["value"].':'.$rf.'</textarea>';
					break;
            case 'select':
               foreach($default_fields[$f]["options"] as $key => $value) {
               	$options_html .= '<option value="'.$value.'">'.$key.'</option>';
               }
            	$fields_html .= '<select name="web_form['.$f.']" id="contact_'.$f.'">'.$options_html.'</select>';
               break;
			}
		} else {
			// best guess of form field
			$value = ucfirst(str_replace('_',' ',$f));
			$fields_html .= '<input type="text" name="web_form['.$f.']" value="'.$value.':'.$rf.':" id="contact_'.$f.'" class="" onfocus="removeText(this)" onblur="replaceText(this)" />';
		}
	}
	return $fields_html;
}


function cmgform_required($required,$captcha,$default_required) {
	$required_html = "";
	$required_arr = explode(',',$required);

	foreach($required_arr as $r) {
		$formatted_field = ucfirst(str_replace('_',' ',$r));
		if(array_key_exists($r,$default_required)) {
			$required_html .= ",'web_form[{$r}]', '{$default_required[$r][required][0]}', '{$default_required[$r][required][1]}', '{$default_required[$r]["value"]} is required.'";
		} else {
			// best guess required field
			$required_html .= ",'web_form[{$r}]', '#q', '0', '{$formatted_field} is required.'";
		}
	}
	// handle captcha
	if($captcha == 'mathcaptcha') {
		$required_html .= ", 'mathcaptcha[mc_r]', '#q', '0', 'Please solve the equation.'";
	}

	return $required_html;
}


function cmgform_captcha($captcha) {
	switch($captcha) {
		case "recaptcha":
			$html = <<<HTML
<script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6LfxvAsAAAAAAPHNrsR_bDb94jTysHKDXYdQ2CZ8"></script>
<noscript>
   <iframe src="http://api.recaptcha.net/noscript?k=6LfxvAsAAAAAAPHNrsR_bDb94jTysHKDXYdQ2CZ8" height="300" width="500" frameborder="0"></iframe><br>
   <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
   <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
</noscript>
HTML;
			break;
		case "mathcaptcha":
			$html = <<<HTML
<div id="mc">
   <input type="text" name="mathcaptcha[form_c_1]" id="mc_form_c_1" value="" readonly tabindex="-1">
   <span id="mc_form_op"></span>
   <input type="hidden" name="mathcaptcha[form_c_3]" id="mc_form_c_3" value="">
   <input type="text" name="mathcaptcha[form_c_2]" id="mc_form_c_2" value="" readonly tabindex="-1">
   <span id="mc_form_eq">=</span>
   <input type="text" name="mathcaptcha[mc_r]" id="mc_r" tabindex="4">
</div>
HTML;
			break;
		default:
			$html = "";
	}
	return $html;
}
?>