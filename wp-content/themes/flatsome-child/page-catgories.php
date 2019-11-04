<?php 
/**
* Template Name: Categories Page Template 
*/
 get_header(); 
 global $post;
$taxonomy = 'editorialauthor_category';
$terms = get_terms($taxonomy);
$tagId =  get_query_var('tags');
$category_detail=get_the_terms( $post->ID, $taxonomy );
//$tagid = $_GET['tags'];
if(isset($_GET['tags']) and $_GET['tags']!=''){
				$tagid = $_GET['tags'];
			}
			?>

<div class="x-main full" role="main">
	<div class="row row-large row-divided custom-categorypage">
	
			
		<div class="large-12 col real-wedrow">
		<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
				<?php $titlename=get_the_title();?>
			<div class="custom-cat">
						<div class="heading-catpage">
									<h1> 
									

							<?php  if( $post->ID == 2083) { 
									echo 'Fashion';	}
									
									else
									{   echo $titlename; }?>
									
									</h1>
						 </div>
						<div class="subhead-wed"><h4></h4>
							<?php
							 if( get_field('content_below_title') ): ?>
								<div class="subhead-wed">
									<h4><?php the_field('content_below_title'); ?></h4> 
								
								</div>
							<?php endif; ?>	
						</div>	
			</div>
		<div class="highlight content-divider divider"></div></div>
			<div id="loadcontents"> 
			<?php
			$perPagecount = 12;	
			$page = 1;
			$offset = ( $page - 1 ) * $perPagecount;
				//get_query_var('tags')
				

global $post;
 $post_slug = $post->post_name;

$term_data = get_term_by('slug', $post_slug, $taxonomy);

//echo '<pre>'; print_r($term_data); echo '<pre>';



	 $post_count = $term_data->count;
	$totalPages = ceil($post_count/$perPagecount);
	
$args = array(
    'post_type' => 'tips-trends',
    'post_status' => 'publish',
	 'offset' => $offset,
	 'paged' => $page,
	 'posts_per_page' => $perPagecount,
	 'orderby'=> 'date', 
	'order' => 'DESC',
	'tax_query' => array(
    array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $post_slug
    )
)
		  );
	



			//die();
			$edit_loop = new WP_Query( $args );
			// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
			
			if ( $edit_loop->have_posts() ) : while ( $edit_loop->have_posts() ) : $edit_loop->the_post();?>
			
			<div class="col medium-12 small-12 large-3 editcat" style="float:left;">
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

