<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/foundation.css" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>

	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	<?php do_action('foundationPress_layout_start'); ?>
	<div class="contact-bar-container">
  	<div class="row contact-bar">
<!--       <div class="small-12 columns" > -->
        <img class="small-1 columns show-for-medium-up" src="<?php echo get_stylesheet_directory_uri() ; ?>/img/tooth-logo_transp.png"></img>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="small-11 medium-5 alignleft columns show-for-medium-up"><span class="second-color">Family</span><span class="tertiary-color"> Smiles</span></h1></a>
        <p class="small-12 medium-5 alignright columns"><span class="call-to-action">Schedule your Appointment Today</span> <a href="tel:0000000000"><span class="contact-number">(858) 454-5505</span></a></p>
<!--       </div> -->
    </div><!--  END contact-bar -->
  </div><!--  END contact-bar-container -->
	<nav class="tab-bar show-for-small-only">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section><img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/logo-icon.png" alt="logo-icon-nav-interior" width="24" height="24">
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="second-color">FAMILY</span><span class="tertiary-color"> SMILES</span></a></h1>
	</nav>




	<?php get_template_part('parts/off-canvas-menu'); ?>

	<?php get_template_part('parts/top-bar'); ?>
	<div class="main-img-container">
    <div class="row">
      <div class="small-12 columns main-img">
        <div class="small-10 medium-3 small-offset-1 columns calling-card">
          <h2><br><span class="second-line"></span><span class="third-line"><br></span></h2>
        </div>
      </div><!--  main-img  -->
    </div>
  </div><!--  END main-img-container -->






<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>