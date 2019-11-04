<?php
/**
 * Single Tips-Trends
 *
 * 
 */

get_header();

?>

<div class="page-wrapper-editorial row">
		<div class="col medium-12 small-12 large-8 x-large-6" style="margin:auto;">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="single-titles">
					<h1 class="editorial-title"><?php the_title(); ?></h1> 
					
					<div class="meta-part">By
	<span class="auth"> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author"><?php the_author(); ?></a></span> 			
						. <span class="date"> <time> <?php echo get_the_date('l,j F Y'); ?> </span></time>
					</div>
				</div>
				<?php if ( get_theme_mod( 'blog_share', 1 ) ) {
		// SHARE ICONS
						echo '<div class="edit-blog-share">';
						echo do_shortcode( '[share]' );
						echo '</div>';
					} ?>
						
		
			<div class="highlight content-divider divider"></div>	
				<div class="content-editorial">
					<?php if( get_field('content_below_author_info') ): ?>
					<div class="component-post-content" style="text-align:center;">
							<?php the_field('content_below_author_info'); ?>
					</div>
					<?php endif; ?>
				</div>
				
				<div class="content-editorial-more">
					<?php  if( have_rows('editorial_main_content') ): ?>
									
							<?php while( have_rows('editorial_main_content') ): the_row();?> 
							
							<?php if( get_sub_field('title') ): ?>
								<div class="shortode-similar" style="text-align:center;">
										<h3 class="shortedit-headings"><span style="color:#dc143c;"><?php the_sub_field('title'); ?></span></h3>
								</div>
								<?php endif; ?>
								<?php if( get_sub_field('content') ): ?>
								<div class="component-post-content" >
										<?php echo get_sub_field('content'); ?>
								</div>
								<?php endif; ?>
								
								<?php  if(have_rows('content_images') ): 
												
										 while( have_rows('content_images') ): the_row(); 
											if( get_sub_field('media') ): 
												$image1 = get_sub_field('media');
											endif; 
											?>
						
						<div  class="conedits-img">
							 <div  class="coneditscaptions">
									 <a href="<?php echo $image1['url']; ?>" >
										<img class="slides" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt'] ?>" ></a> 
											
							
								<?php if( have_rows('media_caption_repeate') ): 
									
									while( have_rows('media_caption_repeate') ): the_row(); 
							
											
											if( get_sub_field('media_caption_link') ): 
												$imagecaplink = get_sub_field('media_caption_link'); 
											endif; ?>
											<div class="media-editcaption">
												<div class="credit">
											<?php if($imagecaplink): 
											$link_url = $imagecaplink['url'];
											$link_title = $imagecaplink['title'];
											$link_target = $imagecaplink['target'] ? $imagecaplink['target'] : '_self';
													 endif; 
											if( get_sub_field('media_caption') ){?> 
												
											<p class="caps">
										 	<?php echo get_sub_field('media_caption') ;?> <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p> 
										
											<?php if( get_sub_field('media_credit') ){ ?>
												<span class="creds"> <?php	 echo get_sub_field('media_credit');?></span>
											<?php } 
														}
											else{ ?>
											<p class="caps">
										 	 <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
											
											<?php }?><span class="creds"> <?php if( get_sub_field('media_credit') ): 
												 echo get_sub_field('media_credit');?></span>
										<?php endif; ?>
											
												 
										</div>				

									</div>
								<?php endwhile; ?>	
								<?php endif; ?>
							</div>
							</div>	
							
						<?php endwhile; ?>	
					<?php endif; ?>
					
				
							<?php endwhile; ?>
								
					<?php endif; ?>
				</div>
				
				
			
		</article>
	
			<div class="shortode-similar">
			
							<h3 class="shortedit-headings authortitle"><span style="color:#dc143c;">About The Author</span></h3>
					</div>
					<div class="author-box">
						<div class="medium-2"  style="float:left">
							<div class="author-img">
							
							<a href="<?php  echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author">
								<?php 
								echo get_avatar($post->post_author,100);?></a>
							</div>
						</div>	
						<div class="medium-10" style="float:left">
								<h3 class="author-name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author"><?php echo esc_html( get_the_author_meta('nickname',$post->post_author));  ?></a> </h3>
								<?php $bioexp = esc_textarea(get_the_author_meta( 'description', $post->post_author ));?>
							
							<div id="hiddenexpt" class="hidden-section-content">
									<p class="author-description"><?php echo $bioexp;?></p>
								
							</div>
						</div>
						
				</div>
			<div class="short-editspost">
		
			<?php echo do_shortcode("[moreeditorialspost]");?>	
			</div><!-- #content .page-wrapper -->			
</div>
</div>
			
		
			
			
	

<?php get_footer();
