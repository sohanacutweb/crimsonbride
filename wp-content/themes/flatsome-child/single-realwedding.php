<?php
/**
 * Single realweddings
 *
 * 
 */

get_header();
global $post;
$taxonomy = 'real_wedding_category';
$category_detail=get_the_terms( $post->ID, $taxonomy );
    $postType = 'realwedding';
	$tagId = $_GET['tags'];
			if(isset($_GET['tags']) and $_GET['tags']!=''){
				$tagId = $_GET['tags'];
			}
?>


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
		<div class="row row-collapse row-full-width" >
			<div class="col medium-12 small-12 large-12 single-realslider" style="float:left;">
				<div class="col-inner">
				<header class="pagetitle">
					 <div class="content_wrapper">
						<div class="content">
						<?php  if( have_rows('post_header_slider_images') ): ?>
						<div id="owl-single" class="owl-carousel owl-theme big-slide">
						
					   <?php while( have_rows('post_header_slider_images') ): the_row();?> 
							<?php $images = get_sub_field('slider_images');
							?>
							   
							<div class="item-single" style="background-image: url(<?php echo $images['url']; ?>);
									background-position: center; background-size: cover;  height: 600px;">
								<!--<img class="slide" src="<?php //echo $images['url']; ?>" alt="<?php// echo $images['alt'] ?>"/>-->
									</div>	
							<?php endwhile; ?>
								</div>
							<?php endif;  ?>
							</div>
							</div>
							    </header>
								</div>
							</div>
							</div>
					<div class="page-wrapper row">
					
					<div class="singlereal-width single-min-width ">
					<div class="realwedding-topdiv">
					<div class="real-subheader-part">
							<div class="single-titles" style="text-align: center;">
								<h1 class="post-title-slider"><?php the_title(); ?></h1><?php if ( get_theme_mod( 'blog_share', 1 ) ) {
								echo '<div class="blog-share">';
								echo do_shortcode( '[share]' );
								echo '</div>';
							} ?><?php if( get_field('couple_name') ): ?>
								<h2 class="coluple-name" style="text-align: center;"><?php the_field('couple_name'); ?></h2>
								<?php endif; ?>
							</div></div>
							<div class="row headersubsec-realwed" >
								<div class=" col medium-6 small-12 large-3 n-space">
									<?php if( get_field('wedding_location') ): ?>
								 <?php /* $location_terms = array();?>
												
										<?php foreach($category_detail as $category_term)
													{
														if($category_term->parent==270)
														{
															array_push($location_terms,$category_term);
														}
													}
													if($location_terms){?>
														<div class="location">
													<span>Location</span><br>
													<?php
														foreach($location_terms as $child)
													{
													?>													
												<span> <a href="http://acutweb.com/thecrimsonbride/realweddings/<?php echo $child->name;?>" class="label label-default"><?php  echo $child->name;?></a></span>
													 <?php 
													} 
													?>
													
												</div>	
													<?php } */?>
											<div class="location">
										
											<span>Location</span><br>
										<span>   
												<a href="<?php echo site_url();?>/realweddings/<?php echo $child->name;?>" class="label label-default"><?php the_field('wedding_location'); ?></a></span>
												
											</div>
									
									<?php endif; ?>
										</div>
													
										<div class=" col medium-6 small-12 large-3 n-space">
										
											
											<?php $setting_terms = array();?>
												
										<?php foreach($category_detail as $category_term)
													{
														if($category_term->parent==216)
														{
															array_push($setting_terms,$category_term);
														}
													}
													if($setting_terms){?>
														<div class="location">
													<span>Setting</span><br>
													<?php
														foreach($setting_terms as $child)
													{
													?>													
												<span> <a href="<?php echo site_url();?>/realweddings/<?php echo $child->name;?>" class="label label-default"><?php  echo $child->name;?></a></span>
													 <?php 
													} 
													?>
													
												</div>	
													<?php }?>
										</div>	
										
										<div class=" col medium-6 small-12 large-3 n-space">
											
											<?php $style_terms = array();
											
											 foreach($category_detail as $category_term)
													{
														if($category_term->parent==268)
														{
															array_push($style_terms,$category_term);
														}
													}
												if($style_terms){?>
													<div class="location">	
													<span>Style</span><br>
																						
											<?php foreach($style_terms as $child)
														{?>
														 <span> <a href="<?php echo site_url();?>/realweddings/<?php echo $child->name;?>" class="label label-default"><?php  echo $child->name;?></a></span>
														 
														  <?php 
														}?>
														</div>
														<?php }										
													?>
											
											
										</div>
										<div class=" col medium-6 small-12 large-3 n-space">
											
										<?php $culture_terms = array();
												
												foreach($category_detail as $category_term)
													{
														if($category_term->parent==276)
														{
															array_push($culture_terms,$category_term);
														}
													}
												if(!empty($culture_terms)){?>
												<div class="location">
													<span>Culture</span><br>									
											<?php foreach($culture_terms as $child)
														{?>
														 <span> <a href="<?php echo site_url();?>/realweddings/<?php echo $child->name;?>" class="label label-default"><?php  echo $child->name;?></a></span>
													 <?php 
												 }?>
											</div>
												<?php }?>
										</div>
							</div>
							
						
					</div>
					<div class="highlight content-divider divider highlightme"></div>
					
					
			<div class="col medium-12 small-12 large-8 x-large-9 ms8-hidden">
				<div class="content-page-real">
				
							<?php if( get_field('snapshot_content') ): ?>
							<h3 class="signle-content-subheadings">Snapshot</h3>
							
							
								<?php the_field('snapshot_content'); ?>
							<?php endif; ?>
							<div class="min_heaight">
							<h3 class="no-marg">About The Couple</h3> 
							
								<div class="highlight content-divider divider" ></div>
								<?php if( get_field('about_the_content') ): ?>
								<div class="about-details ">
									<?php the_field('about_the_content'); ?>
								</div>
								<?php endif; ?>
							
					<div id="hiddencontent" class="hidden-section-content hiddencontentdetail" >
						
								<h3 class="no-marg">The Details</h3>
							<div class="highlight content-divider divider"></div>
						
							<div class="content-wed-more">
								<?php  if( have_rows('more_details_content') ): ?>
									<?php while( have_rows('more_details_content') ): the_row();
										 if( get_sub_field('details_subtitle') ): 
											$detsubtitle= get_sub_field('details_subtitle'); 
									 endif; 									
										 if( get_sub_field('details_text') ): 
											$detailcontent= get_sub_field('details_text'); 
										 endif;?>
										<div class="detailstext">	
											<div class="details-single">
													<h4><?php echo $detsubtitle; ?></h4>
											</div>
											<div class="details-post-content">
													<?php echo $detailcontent ?>
											</div>
										</div>	
										<?php if( get_sub_field('details_image_part') ): 
											$image1 = get_sub_field('details_image_part');?>
										<div class="details-postimg" >
											<a href="<?php echo $image1['url']; ?>" >
											<img class="slide" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt'] ?>" ></a>
											</div>
										<?php endif;?>
											 
									<?php  if(have_rows('image_caption') ): 
												
											while( have_rows('image_caption') ): the_row(); 
											 
											if( get_sub_field('caption_name') ): 
												$imgcaption = get_sub_field('caption_name');
											endif; 
											
											if( get_sub_field('caption_link') ): 
												$imagecaplink = get_sub_field('caption_link'); 
											endif; 
											if( get_sub_field('caption_credits') ): 
												$imagecredits = get_sub_field('caption_credits'); 
											endif; ?>
									
										<?php if( $imagecaplink): ?>
											<div class="medium-6 detailcredit">
												<?php	$link_url = $imagecaplink['url'];
												$link_title = $imagecaplink['title'];
												$link_target = $imagecaplink['target'] ? $imagecaplink['target'] : '_self';
														?>
												<p class="deatilcaps"> 
												<?php echo $imgcaption ;?> <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
												</p>
											</div>
										<?php endif; ?>
									<div class="medium-6 ddcredit">
										<?php echo $imagecredits ;?>
									</div>
										
								
										<?php endwhile; ?>	
									<?php endif; ?>
							<div class="detailmargin"></div>
											
									<?php endwhile; ?>
										
							<?php endif; ?>
							</div>
						</div>
						
							<div id="show" class="text-center" ><a class="btn btn-default" >Show Less</a></div>
						</div>
					<div id="hidden" class="middle-real text-center" ><a class="btn btn-default" >Read Full Story</a></div>
							</div>
						<div class="realwed-gallery">
								<h3 class="signle-content-subheadings">Gallery</h3>
								<div class="is-divider small"></div>
								<?php
								 $id=get_the_ID();
						$post_content = get_post($id);
						$content = $post_content->post_content; 
						echo apply_filters('the_content',$content); ?>
															</div>
			

								
						
			</div>
					<div class="col medium-12 small-12 large-4 x-large-3 ms4-hidden " >
			
			<h3 class="signle-content-subheadings">Featured Pros</h3>
				<?php if(get_field('featured_text')): ?>
					<div class="featured-items">
					<div class="text_hidden">
						<?php while(has_sub_field('featured_text')): ?>
						<div class="row side-feature">
								<div class="col medium-12 small-12 large-6 side-feature"> <h5 class="feature-label"><?php the_sub_field('featured_pro_label'); ?></h5></div> <div class="col medium-12 small-12 large-6 side-feature"><h4 class="anchor-tag"><?php the_sub_field('featured_pro_input'); ?></h4></div>  
							</div>
						<?php endwhile; ?>
					
						</div>
						</div>
						
                     <div class="text-center show_pros" ><a class="btn btn-default" >Show Pros</a></div>
					 <div class="text-center hide_pros" style="display:none;"><a class="btn btn-default" >Hide Pros</a></div>
					<?php endif; ?>
				</div>	
			
		</div>
		
			
		
			<div class="singlereal-width single-min-width ">
						<div class="col medium-12 small-12 large-8 x-large-9 nospace" style="float:left; padding-bottom:0px;">
					
				
			<div class="shortode-similar authorsec">
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
					<?php echo do_shortcode("[morerealweddingspost]");?>	
					</div>	
				</div>
		</div>
		
		
						
	</article>
	
	
	<!-- #content .page-wrapper -->

<script>
jQuery(function($){
	   
$(document).ready(function() {
 
  $("#owl-single").owlCarousel({
		items: 1,
		loop:true,
      navigation : false, // Show next and prev buttons
	  dots:false,
      /* slideSpeed : 3000, */
     //transitionStyle : "fade",
	 animateIn: 'fadeIn',
	animateOut: 'fadeOut',
      singleItem:true,
	 pagination: false,
	 autoplay: true,
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});
});
</script>
<?php get_footer();
