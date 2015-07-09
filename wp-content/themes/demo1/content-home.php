<?php
/**
 * The default template for displaying content on the home page only. There is no title .
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  	<div class="hentry entry-content ">

  <?php if ( has_post_thumbnail( ) ) {
    the_post_thumbnail('full', array( 'class' => 'home-feature-img' ));
  } ?>
  		<?php the_content(); ?>
  	</div>


</article>
