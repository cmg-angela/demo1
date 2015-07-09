<?php
/*
Template Name: Contact Page
*/

/* This example is for a child theme of Twenty Thirteen:
*  You'll need to adapt it the HTML structure of your own theme.
*/
?>
<?php get_header(); ?>

<div class="header-container">
  <div class="row">
    <header class="small-12 columns interior-page">
        <h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
    </div>
</div><!--  END header-container -->
<div class="row">
	<div class="small-12 large-8 columns" role="main">

  	<div class="contact-form">
  <form name="contact-quick" id="contact-quick" autocomplete="off" method="post" action="http://cmgmail.ceatus.com/cmgmail" class="" onsubmit="clearOptionals('contact_phone, contact_message');">
    <input type="hidden" name="web_form[form_name]" value="F753_100751_0219161224" />
    <input type="text" name="web_form[full_name]" onclick="return false;" value="Full Name: *" id="contact_full_name" class="input" onfocus="removeText(this)" onblur="replaceText(this)" />
    <input type="text" name="web_form[email]" onclick="return false;" value="Email Address: *" id="contact_email" class="input" onfocus="removeText(this)" onblur="replaceText(this)" />
    <input type="text" name="web_form[phone]" onclick="return false;" value="Phone Number:" id="contact_phone" class="input" onfocus="removeText(this)" onblur="replaceText(this)" />
    <textarea name="web_form[message]" onclick="return false;" id="contact_message" class="textarea" onfocus="removeText(this)" onblur="replaceText(this)" rows="7" cols="10">Comment or Questions:</textarea>
    <p class="completion-instructions">Complete the equation before submitting the form</p>
      <div class="arrow-down"></div>
    <div id="mc">
      <input type="text" tabindex="-1" name="mathcaptcha[form_c_1]" onclick="return false;" id="mc_form_c_1" value="" readonly>
      <span id="mc_form_op"></span>
      <input type="hidden" name="mathcaptcha[form_c_3]" onclick="return false;" id="mc_form_c_3" value="">
      <input type="text" tabindex="-1" name="mathcaptcha[form_c_2]" id="mc_form_c_2" value="" readonly>
      <span id="mc_form_eq">=</span>
      <input type="text" name="mathcaptcha[mc_r]" onclick="return false;" id="mc_r" />
    </div><!--  END mc -->
    <span class="contact_subject">
    <input type="text" name="web_form[subject]" value="" id="contact_subject" class="" />
    </span>
    <input type="submit" name="submit" id="contact_submit" value="Send" onclick="YY_checkform('contact-quick', 'web_form[full_name]', '#q', '0', 'Name is required.', 'web_form[email]', 'S', '2', 'Email address is required.', 'mc_r', '#q', '0', 'Please Solve Equation.');return document.MM_returnValue;" />
  </form>
</div>








	<?php do_action('foundationPress_before_content'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_page_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_page_after_comments'); ?>
		</article>
	<?php endwhile;?>
	<?php do_action('foundationPress_after_content'); ?>
	</div>



<!--
  	<div class="featured-tabs-container-interior show-for-small-only">
      <div class="row featured-tabs">
        <div class="small-12 columns">
          <?php dynamic_sidebar("featured-tabs"); ?>
        </div>
      </div>
    </div>
-->

	<aside id="sidebar" class="small-10 small-centered large-uncentered large-4 columns">

    <?php if(is_front_page() || is_home() || is_single() || is_archive() || is_search()) { ?>
    <?php } else { ?>
      <?php
          if($post->post_parent){
            $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
          }else{
            $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
          }
          if($children){
             echo '<div class="child-pages">
                <div class="row child-pages-header">
                <h6>Interior Navigation</h6>
  </div>
  <ul>';
            echo $children;
echo '                                </ul>
</div>';

          }
      ?>
    <?php } ?>
    <?php dynamic_sidebar("sidebar-widgets-contact"); ?>
	</aside>
</div>
<?php get_footer(); ?>
