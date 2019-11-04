<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package flatsome
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="is-divider divider clearfix" style="margin-top:0.5em;margin-bottom:0.5em;max-width:100%;height:2px;"></div>
<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
<div class="col medium-12 small-12 large-4 authcat" style="float:left;">
	  <div class="col-inner">  
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php flatsome_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	
	</header><!-- .entry-header -->
</div>
</div>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php flatsome_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

