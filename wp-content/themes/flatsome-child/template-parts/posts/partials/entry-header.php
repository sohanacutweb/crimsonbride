<?php $url = wp_get_attachment_url( get_post_thumbnail_id(), 'original' ); ?>

<header class="entry-header">
	<div class="entry-header-text entry-header-text-top text-<?php echo get_theme_mod( 'blog_posts_title_align', 'center' ); ?>">
		<?php //get_template_part( 'template-parts/posts/partials/entry', 'title' ); ?>
	</div><!-- .entry-header -->
<div class="vis-hidden">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php if ( ! is_single() || ( is_single() && get_theme_mod( 'blog_single_featured_image', 1 )) ) : ?>
		<a href="<?php the_permalink(); ?>"><div class="item-demo" style="background-image: url(<?php echo $url ; ?>);
									background-position: center; background-size: cover;">
								
									</div>	</a>
			<!-- <div class="entry-image relative">
				<?php //get_template_part( 'template-parts/posts/partials/entry-image', 'default' ); ?>
				<?php //get_template_part( 'template-parts/posts/partials/entry', 'post-date' ); ?>
			</div> .entry-image -->
			</div>
		<?php endif; ?>
	<?php endif; ?>
</header><!-- post-header -->
