<?php get_header(); ?>
<div class="featured-tabs-container">
  <div class="row featured-tabs">
    <div class="small-12 columns">
      <?php dynamic_sidebar("featured-tabs"); ?>
    </div>
  </div>
</div>
<div class="introduction-container">
  <div class="row introduction">
    <h2 class="small-12 small-centered columns">Welcome To <?php echo get_bloginfo('name'); ?></h2>
  </div>
</div>



<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php if ( have_posts() ) : ?>

		<?php do_action('foundationPress_before_content'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content-home', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action('foundationPress_before_pagination'); ?>

	<?php endif;?>



	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('foundationPress_after_content'); ?>

	</div><!--  END role="main" -->


  <?php get_sidebar(); ?>
</div><!--  END row that holds get_sidebar -->
<?php get_footer(); ?>
