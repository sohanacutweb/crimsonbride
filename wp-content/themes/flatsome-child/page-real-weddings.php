<?php 
/**
* Template Name: Real Weddings Page Template 
*/
 get_header(); ?>
<?php
   
    $taxonomy = 'real_wedding_category';
    $postType = 'realwedding';
		global $wpdb;
	$terms = get_terms($taxonomy);
$tagId =  get_query_var('tags');
if($tagId!=''){
	$termsData = get_term_by('slug', $tagId, 'real_wedding_category');
	}
$childT = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => $terms->term_id,'terms' => $childT->slug, 'hide_empty' => false]);	
?>
  <div class="x-main full" role="main">
<div class="row row-large row-divided custom-blogpage ">
<div class="col medium-12 small-12 filtermobdiv" >
				<div class="filterbtnto">
				<span>Filter Results </span> <i class="fa fa-filter" ></i>
			  
			</div>
	</div>
	<div class="post-sidebar large-3 col">
				<div id="secondary-mobile-filter" class="widget-areamobile" role="complementary">
				<a href="<?php echo site_url();?>/realweddings/" id="content-filters-clear" class="close-filters mobile-filters-show" >Clear Filters</a>
				<a href="#" id="content-filters-close" class="close-filters mobile-filters-show" >Close Filters</a>
						<div id="content-filters" class="panel-group content-filters">
						<h4 class="content-filters-title">Filter by</h4>
						
							<div class="filter-heading hidden-content-reveal ">
								<a role="button" data-toggle="collapse" class="collap"   href="#"> LOCATION  <i class="fa fa-chevron-up panel-open"></i></a>
							</div>
							
								<div id="Wedding-location" class="hidden-cat">
									
										
											<div class="checkbox-weds" >
													<?php	
											   $terms = get_term_by('slug', 'location', 'real_wedding_category'); 
												$childT = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => $terms->term_id,'terms' => $childT->slug, 'hide_empty' => false]);?>
												<div class="hide-subcat">
												 <?php  foreach($childT as $child)
													{
													    $activeCls=($tagId==$child->slug) ? 'active' :'';?>
													  <label class=""><a href="<?php echo site_url();?>/realweddings/<?php echo $child->slug; ?>" class="<?php echo $activeCls; ?>"> <input type="checkbox" value="<?php echo $child->name;?>" > <?php  echo $child->name;?></a></label>
													  <?php 
													  
													}?>
													</div>
											
													
											</div>

								</div>
							
							<div class="filter-heading hidden-content-reveal">
								<a role="button" data-toggle="collapse" class="collap" href="#"> CULTURE <i class="fa fa-chevron-up panel-open"></i></a>
							</div>
								<div id="Topics" class="hidden-cat" >
									<div class="checkbox-weds">
													<?php	
											  $terms = get_term_by('slug', 'culture', 'real_wedding_category'); 
										
												$childT = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => $terms->term_id,'terms' => $childT->slug, 'hide_empty' => false]);?>
												
												<div class="hide-subcat">
												 <?php
												 foreach($childT as $child)
													{
														$activeCls = ($tagId==$child->slug) ? 'active' :'';
														?>
													  <label class=""><a href="<?php echo site_url();?>/realweddings/<?php echo $child->slug;?>" class="<?php echo $activeCls; ?>"><input type="checkbox" value="<?php  echo $child->name;?>" > <?php  echo $child->name;?></a></label>
													  <?php 
													  
													}?>
													</div>
												
											</div>

								</div>
							
							<div class="filter-heading hidden-content-reveal">
								<a role="button" data-toggle="collapse" class="collap" href=""> STYLE  <i class="fa fa-chevron-up panel-open"></i></a>
							</div>
								<div id="collapse" class="hidden-cat" >
								
											<div class="checkbox-weds">
											<?php	
											  $terms = get_term_by('slug', 'style', 'real_wedding_category'); 
										
												$childT = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => $terms->term_id,'terms' => $childT->slug, 'hide_empty' => false]);?>
												<div class="hide-subcat">
												
												 <?php   foreach($childT as $child)
													{ $activeCls = ($tagId==$child->slug) ? 'active' :'';?>
													  <div> 
												<label class=""><a href="<?php echo site_url();?>/realweddings/<?php  echo $child->slug;?>" class="<?php echo $activeCls; ?>"><input type="checkbox" value="<?php  echo $child->name;?>" > <?php  echo $child->name;?></a></label>													  
													 </div>
													  <?php 
													}?><div>
												
											</div>
									</div>
								</div>
								</div>
							<div class="filter-heading hidden-content-reveal">
								<a role="button" data-toggle="collapse" href="#" class="collap">SETTING  <i class="fa fa-chevron-up panel-open"></i></a>
							</div>
								<div id="collapse-Wedding Topics" class="hidden-cat" >
									
											<div class="checkbox-weds">
										<?php	
											   $terms = get_term_by('slug', 'setting', 'real_wedding_category'); 
												$childT = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => $terms->term_id,'terms' => $childT->slug, 'hide_empty' => false]);?>
											<div class="hide-subcat hidden-cat">
												 <?php   foreach($childT as $child)
													{
													  $activeCls = ($tagId==$child->slug) ? 'active' :'';?>
													 <label class=""><a href="<?php echo site_url();?>/realweddings/<?php echo $child->slug;?>" class="<?php echo $activeCls; ?>"><input type="checkbox" value="<?php  echo $child->name;?>" > <?php  echo $child->name;?></a></label>
													  <?php 
													}?>
												</div>
											</div>
									
								</div>
							
				
					</form>
			</div>	</div>
		</div>
	<div class="large-9 col real-wedrow">
	<?php $titlename=get_the_title();
		
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}

	
	//echo '<pre>'; print_r($termsData);echo'</pre>';
						$termsids=$termsData->term_id;
						 $termsname=$termsData->name;
						 $termsdescription=$termsData->description;
							
						 ?>
			 <div class="custom-component"><div class="heading-wed">
			 <h1> <?php if($tagId!=''){ 
								echo $titlename. ' - ' .$termsname;	
						}	
						else {  
							echo $titlename; 
						} 
								?>
						</h1></div>
			<?php if( get_field('content_below_title') ): ?>

			<div class="subhead-wed"> <h4><?php the_field('content_below_title'); ?></h4> </div>
			   <?php endif; ?>
			<div class="highlight content-divider divider"></div></div>
			 
		<div id="loadcontent">         
			 <?php
			$perPage = 12;
			$page = 1;
			
			$offset = ( $page - 1 ) * $perPage;
		//$tagId = 'tags'=> get_query_var('tags'),
		   
			if($tagId!=''){
				$termData = get_term_by('slug', $tagId, 'real_wedding_category');
				$total_post = $termData->count;
				$totalPage = ceil($total_post/$perPage);
				
				$args = array(
			'post_type' => 'realwedding',
			 'paged' => $page,
			 'posts_per_page' => $perPage,
			 'post_status' => 'publish',
			 'orderby'=> 'date', 
				'order' => 'DESC',
				 'offset' => $offset,
				'tax_query' => array(
			array(
				'taxonomy' => 'real_wedding_category',
				'field' => 'slug',
				'terms' => $tagId,
				
				 )
				 )  
			);
			}
			else{
				$total_posts = wp_count_posts('realwedding');
				$total_post = $total_posts->publish;
				$totalPage = ceil($total_post/$perPage);
				$args = array(
			'post_type' => 'realwedding',
			'post_status' => 'publish',
			 'posts_per_page' => $perPage,
			 'paged' => $page,
			 'orderby'=> 'date', 
			'order' => 'DESC',
			 'offset' => $offset
			);
			} 
			
    $wed_loop = new WP_Query( $args );
// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
   if ( $wed_loop->have_posts() ) :?><?php while ( $wed_loop->have_posts() ) : $wed_loop->the_post();?>
	 <div class="col medium-12 small-12 large-4 realpage recent-short" style="float:left;"><div class="col-inner">  
	 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
   <header class="pagetitle">
					 <?php /* if ( is_singular() )  { ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <?php } 
					else { */ ?>
					 <div class="content_wrapper">
                    <div class="content">
					
						<?php  if( have_rows('post_header_slider_images') ): ?>
					
							<div id="owl-demo" class="owl-carousel owl-theme multi-img">
							
								<?php while( have_rows('post_header_slider_images') ): the_row();?> 
							<?php $images = get_sub_field('slider_images');?>
								<a href="<?php the_permalink(); ?>"><div class="item-demo" style="background-image: url(<?php echo $images['url']; ?>);
									background-position: center; background-size: cover;">
								
									</div>	</a>							
							
							<?php endwhile; ?>
							
								</div>
							
								<div class="details" style="text-align: center;">
									<?php if( get_field('couple_name') ): ?>
										<a href="<?php the_permalink(); ?>">
							 <h3 style="text-align: center;"><?php the_field('couple_name'); ?></h3>
							<?php endif; ?>
							<h4 class="post-title-slider"><?php the_title(); ?></h4>
							<?php if( get_field('wedding_location') ): ?>
							<div class="location">
							<p><?php the_field('wedding_location'); ?></p>
							</div>
					<?php endif; ?></a>
				</div>
		 <?php endif; ?>

				</div>
			</div>
        </header>
              
      </article>
	  </div></div>
	<?php endwhile;
   else : echo '<div class="noposts">No Real Weddings available...</div>';

   endif; wp_reset_postdata(); ?>
	
	</div>
	<?php if($totalPage>1){ ?>
			<div class="more" style="text-align:center;">
			<div class="more-loader"><img src="/thecrimsonbride/wp-content/themes/flatsome-child/assets/img/Ellipsis-2.1s-87px.gif" id="imgloader" style="display:none"/ ></div><a href="" class="clickedbtn loadmore button white is-outline lowercase real-btn" data-nextpage="2" data-lastpage="<?php echo $totalPage;?>">
				<span>See More Real Weddings</span>
			  </a>
			</div>
		<?php } ?>
	</div>
	</div>
	
</div>
</div>

<?php get_footer(); ?>

