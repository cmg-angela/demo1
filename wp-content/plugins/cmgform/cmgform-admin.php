<?php
if(isset($_POST['submit'])) {
	$options = "";
	foreach($_POST as $key => $value) {
		if($key != 'submit') {
			$$key = 	wp_specialchars_decode($value);
		}
	}
	// update options
	update_option('cmgform_form_name', $form_name);
	
} else {
	$form_name = get_option('cmgform_form_name');		
}
?>
<div class="wrap">
	<h2>CMG Form Options</h2>  
      
   <form name="cmgform_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  
		<p>CERP Form Name: <input type="text" name="form_name" value="<?php echo $form_name; ?>" size="30"><br><br>      
		<input type="submit" name="submit" value="Update Shortcode" /></p> 
	</form> 
   <?php if(!empty($form_name)) : ?>
   <p>&nbsp;</p>
   <p>Basic CMG Form shortcode:</p>
   <div class="cmgform_generated_shortcode">
   	<code>[cmgform short]</code>
   </div>
   <p>Appointment CMG Form shortcode:</p>
   <div class="cmgform_generated_shortcode">
   	<code>[cmgform appointment]</code>
   </div>
   <p>Long CMG Form shortcode:</p>
   <div class="cmgform_generated_shortcode">
   	<code>[cmgform long]</code>
   </div>
   <?php endif; ?>
</div> 