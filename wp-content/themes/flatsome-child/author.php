 <?php
/**
* Template Name: AuthorsPosts Page Template 
*/

get_header();
//remove_action('pre_get_posts', 'custom_author_archive');

global $current_user; 
$author_id = get_query_var('author'); 
$postsPerPage=12;                  
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row row-large row-divided <?php //if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">

	<div class="large-12 text-center col ">
	<div class="archivetitle" style="padding-top:20px;">
	<h1 class="page-title is-large uppercase">
	<?php  printf( __( 'Featured Articles from Author : ' .get_author_name($author_id)));?>	</h1>
		</div>
		</div>
	<div class="large-9 col" style="padding-top:40px;">
	<div class="mobwidth">
	<?php //echo$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	if(! empty($_GET['pag']) && is_numeric($_GET['pag']) ){
    $paged = $_GET['pag'];
	$currentPage = $_GET['pag'];	
}else{
    $paged = 1;
	$currentPage = 1;
}
	$postOffset = ($paged-1) * $postsPerPage;
	 $args = array(
	'author' => $author_id,
    'post_type'=> array('tips-trends','realwedding'),
	'posts_per_page' => $postsPerPage,
    'order'    => 'DESC',
	'offset'    => $postOffset,
	'paged'    => $paged
    );     
    
	 $total_posts =count_user_posts($author_id,array('tips-trend','realwedding')
	);
	

//let's make sure we don't have a page number that is higher than we have posts for
if($paged > $num_pages || $paged < 1){
    $paged = $num_pages;
	
}

$current_user_posts = get_posts( $args );
//echo'<pre>';print_r($current_user_posts);echo'</pre>';
 $num_pages = ceil($total_posts / $postsPerPage);

$ids=array();?>
	

<?php
foreach($current_user_posts as $current_user_post){
		array_push($ids, get_the_ID());
	$pid= $current_user_post->ID;
	$curposttitle= $current_user_post->post_title;?>
	<div class="col medium-12 small-12 large-4 authcat" style="float:left;">
	  <div class="col-inner">  
		<header classs="entry-header">
		<div class="editcontent authorcontent"> 
		
		<?php if (has_post_thumbnail( $pid ) ): ?>
		<div class="authorboxconent" id="owl-demo" style="box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
		<div class="entry-image relative authorimgs">
				<a href="<?php echo get_permalink($pid);?>" class="authorlink">
						<?php //echo get_post_thumbnail_id($pid) ;?>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($pid), 'original' ); ?>
							<a href="<?php the_permalink(); ?>"><div class="item-demo" style="background-image: url(<?php echo $url ; ?>);
									background-position: center; background-size: cover;">
								
									</div>	</a>
							
					</a>
					<div class="badge absolute top post-date badge-<?php echo flatsome_option('blog_badge_style'); ?>">
	<div class="badge-inner">
		<span class="post-date-day"><?php echo get_the_time('d', $pid); ?></span><br>
		<span class="post-date-month is-small"><?php echo get_the_time('M', $pid); ?></span>
	</div>
</div>
			</div>
			</div>
<?php endif; ?>
						<div class="details">
								<h3 style="text-align: center;">
									<a class="plain" href="<?php echo get_permalink($pid);?>"> <?php echo $curposttitle ;?></a>
								</h3>
								<div class="meta">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author"><?php echo get_author_name($author_id);?></a>
								</div>
						</div>
			</div>
	</header>

</div>
 
</div>
<?php } ?>
</div>
<?php //we need to display some pagination if there are more total posts than the posts displayed per page
    if($total_posts > $postsPerPage ){

        echo '<div class="pagination-auth">
                <ul class="page-numbers nav-pagination links text-center">';

        if($paged > 1){
			
			
            echo '<li><a class="first page-number" href="?pag=1">&laquo;</a></li>';
        }

        for($p = 1; $p <= $num_pages; $p++){
            if ($currentPage == $p) {
			 echo '<li><span class=" page-number active_cur current ">'.$p.'</span></li>';
            }else{
                echo '<li><a class="first page-number " href="?pag='.$p.'">'.$p.'</a></li>';
            }
        }

        if($paged < $num_pages){
            echo '<li><a class="last" href="?pag='.$num_pages.'"> <i class="icon-angle-right"></i> </a></li>';
        }else{
            echo '<li><span class="last page-number "> <i class="icon-angle-right"></i> </span></li>';
        }

        echo '</ul></div>';
		
	}

	?>

	</div> <!-- .large-9 -->
	<div class="post-sidebar large-3 col" style="padding-top:40px;">
		<?php get_sidebar(); ?>
	</div>
	<!-- .post-sidebar -->

</div><!-- .row -->
</article>




    

<?php get_footer();?>

