<?php get_header(); ?>
<div class="header-container">
  <div class="row">
    <header class="small-12 columns interior-page">
        <h1 class="entry-title">Blog</h1>
			</header>
    </div>
</div><!--  END header-container -->

<div class="row">
	<div class="small-12 large-8 columns archive" role="main">
		<!--  INCLUDE categories in archive page. If you want to incldue/exclude a category, you have get its ID from the Dashboard. 'cat=444' includes it and 'cat=-444' excludes it. NOTICE the '-' sign.  -JMS -->
  <?php query_posts('cat=7');?>
	<?php if ( have_posts() ) : ?>
		<?php do_action('foundationPress_before_content'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
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

	</div><!--  END .archive -->
	<aside id="sidebar" class="small-10 small-centered large-uncentered large-4 columns">

    <?php dynamic_sidebar("sidebar-widgets-blog"); ?>
	</aside>


</div>
<?php get_footer(); ?>
