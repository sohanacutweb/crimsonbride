<?php if ( have_posts() ) : ?>
<div id="post-list" class="mobwidth">

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="col medium-12 small-12 large-4 authcat" style="float:left;">
	  <div class="col-inner">  
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-inner <?php flatsome_blog_article_classes(); ?>">
		<?php get_template_part('template-parts/posts/partials/entry-header', flatsome_option('blog_posts_header_style') ); ?>
		<?php //get_template_part('template-parts/posts/content', 'default' ); ?>
		<?php get_template_part('template-parts/posts/partials/entry-footer', 'default' ); ?>
			<div class="details">
		<h3 style="text-align: center;">
			<a class="plain" href="<?php echo get_permalink();?>"> <?php  the_title() ;?></a>
		</h3>
		<div class="meta">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author"><?php echo esc_html( get_the_author_meta('nickname',$post->post_author));  ?></a>
		</div>
</div>
	</div><!-- .article-inner -->

</article><!-- #-<?php the_ID(); ?> -->
</div>
</div>
<?php endwhile; ?>

<?php flatsome_posts_pagination(); ?>

</div>

<?php else : ?>

	<?php get_template_part( 'template-parts/posts/content','none'); ?>

<?php endif; ?>