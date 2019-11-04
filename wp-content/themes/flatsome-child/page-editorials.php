<?php 
/**
* Template Name: Editorials Page Template 
*/
 get_header(); 
$taxonomy = 'editorialauthor_category';
$terms = get_terms($taxonomy);
$tagId =  get_query_var('tags');
$category_detail=get_the_terms( $post->ID, $taxonomy );
$tagid = $_GET['tags'];
			if(isset($_GET['tags']) and $_GET['tags']!=''){
				$tagid = $_GET['tags'];
			}?>

<div class="x-main full" role="main">
	<div class="row row-large row-divided custom-blogpage">
	<div class="col medium-12 small-12 filtermobdiv" >
				<div class="filterbtnto">
				<span>Filter Results </span> <i class="fa fa-filter" ></i>
			  
			</div>
	</div>
			<div class="post-sidebar large-3 col">
				<div id="secondary-mobile-filter" class="widget-areamobile" role="complementary">
				<a href="#" id="content-filters-clear" class="close-filters mobile-filters-show" >Clear Filters</a>
				<a href="#" id="content-filters-close" class="close-filters mobile-filters-show" >Close Filters</a>
						<div id="content-filters" class="panel-group content-filters">
								<h4 class="content-filters-title">Filter by Wedding Topic </h4>
							
							<div id="collapse-Wedding Topics" class="panel-collapse collapse in">
								<div class="panel-body">
									
									<div class="checkbox-edits" >
									<?php $category = get_the_terms( $cat_id, 'editorialauthor_category' );  
								

										if ( $terms && !is_wp_error( $terms ) ) :
											//echo '<pre>';print_r($terms);?>
											<ul class="category-edit">
											<li class="all-handle"><a href="<?php echo site_url();?>/wedding-tips-trends/">All Topics</a></li>
												<?php foreach ( $terms as $term ) { 
												 $activeCls=($tagId==$term->slug) ? 'active' :'';?>
													<li><a href="<?php echo site_url();?>/wedding-tips-trends/<?php echo $term->slug;?>" class="<?php echo $activeCls;?>"><?php echo $term->name; ?></a></li>
												<?php } ?>
											</ul>
										<?php endif;?>					
									
										
									</div>
								</div>
							</div>
						</div>
					
				</div>
			</div>
		<div class="large-9 col real-wedrow">
		
		<?php $titlename=get_the_title();
		if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
		       foreach ( $terms as $term ) { 
						if($tagId==$term->slug){
						 $termsids=$term->term_id;
						$termsname=$term->name;
						$termsdescription=$term->description;
							}
						} ?>
					 <div class="custom-component"><div class="heading-wed">
						<h1> <?php if( $termsids==147 ){ 
								echo 'Fashion';	
						}elseif($termsids==148) {
							echo 'Beauty'; 
						}
						elseif($termsids==150){
							echo 'Decor';	
						}
						elseif($termsids!=''){ 
								echo 'Editorials'. ' - ' .$termsname;	
						}else {  echo $titlename; 
						} 
								?>
						</h1>
					 </div><?php if( $termsids==150 || $termsids==148 || $termsids==147){?>
						<div class="subhead-wed"><h4> <?php echo $termsdescription; ?></h4>
					<?php }else{
							 if( get_field('content_below_title') ): ?>
								<div class="subhead-wed">
									<h4><?php the_field('content_below_title'); ?></h4> 
								
								</div>
							<?php endif;
					}?>
			
				<div class="highlight content-divider divider"></div></div>
			<div id="loadcontents"> 
			<?php
			$perPagecount = 12;	
			$page = 1;
			$offset = ( $page - 1 ) * $perPagecount;
				//get_query_var('tags')
			
			if($tagId!=''){
				//$termData = get_term_by('slug', $tagId, 'editorialauthor_category');
				$total_edit = $terms->count;
				//echo $total_edit;
				$totalPages = ceil($total_edit/$perPagecount);
				$args = array(
			'post_type' => 'tips-trends',
			'tax_query' => array(
			array(
				'taxonomy' => 'editorialauthor_category',
				'field' => 'slug',
				 'terms' => $tagId,
				 )
			  ),
			  'post_status' => 'publish',
			  'offset' => $offset,
			 'paged' => $page,
			 'posts_per_page' => $perPagecount,
			 'orderby'=> 'date', 
			'order' => 'DESC'
			);
			}else{
				$total_edits = wp_count_posts('tips-trends');
				$total_edit = $total_edits->publish;
				$totalPages = ceil($total_edit/$perPagecount);
				$args = array(
			'post_type' => 'tips-trends',
			'post_status' => 'publish',
			'posts_per_page' => $perPagecount,
			 'paged' => $page,
			 'orderby'=> 'date', 
			'order' => 'DESC',
			'offset' => $offset
			);
			}
			
			$edit_loop = new WP_Query( $args );
			// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
			
			if ( $edit_loop->have_posts() ) : while ( $edit_loop->have_posts() ) : $edit_loop->the_post();?>
			
			<div class="col medium-12 small-12 large-4 editpage" style="float:left;">
				<div class="col-inner">  
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="pagetitle">
							<div class="editcontent">
									<?php  if( have_rows('editorial_slider') ): ?>
									
								<div id="owl-demo" class="owl-carousel owl-theme multi-img">
					
								<?php while( have_rows('editorial_slider') ): the_row();?> 
									<?php $imagesedt = get_sub_field('editorials_slider_image');
									?>	
										<a href="<?php the_permalink(); ?>"><div class="item-demo" style="background-image: url(<?php echo $imagesedt['url']; ?>);
									background-position: center; background-size: cover;">
								
									</div>	</a>
								
							<?php endwhile; ?>
							
								</div>
								
									<div class="details">
											<h3 style="text-align: center;">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
												</a>
											</h3>
											<div class="meta">
												<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author"><?php the_author(); ?></a>
											</div>
									</div>				
								<?php endif; ?>
								</div>
						</header>   
					</article>
				</div>
			</div>
			
			<?php endwhile; 
			 else : echo '<div class="noposts">No Tips & Trends available...</div>';
			endif; wp_reset_postdata(); ?>
			</div>
			  
			
				<?php if($totalPages>1){ ?>
							<div class="more" style="text-align:center;">
							<div class="more-loader"><img src="/thecrimsonbride/wp-content/themes/flatsome-child/assets/img/Ellipsis-2.1s-87px.gif" id="imgloader" style="display:none"/ ></div><a href="" class="loadmoreedit button white is-outline lowercase real-btn" data-nextpage="2" data-lastpage="<?php echo $totalPages;?>">
								<span>See More Tips & Trends</span>
							  </a>
							 
							</div>
				  <?php }?>
				  
		</div>
		
	</div>
</div>

<?php get_footer(); ?>

