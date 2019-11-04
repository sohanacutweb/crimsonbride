<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
<!-- -----------------SEO TITLE FOR TAGS VARIABLE START------------- -->
<?php $taxonomy = 'editorialauthor_category';
$terms = get_terms($taxonomy);
$tagId =  get_query_var('tags');
foreach ( $terms as $term ) { 
  if($tagId==$term->slug){
	$termsids=$term->term_id;
	$termsname=$term->name;
	$termsdescription=$term->description;
			}
} 
$taxonomyreal = 'real_wedding_category';
$postType = 'realwedding';
$termsreal = get_terms($taxonomyreal);
$tagIdreal =  get_query_var('tags');
if($tagIdreal!=''){
	$termsData = get_term_by('slug', $tagIdreal, 'real_wedding_category');
	$termsidsreal=$termsData->term_id;
	$termsnamereal=$termsData->name;
	$termsdescriptionreal=$termsData->description;}
	?>
<!-- -----------------SEO TITLE FOR TAGS VARIABLE ENDS ------------- -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- -----------------SEO TITLE FOR TIPS & TRENDS TAGS START------------- -->
	<?php if(is_page('2025')&&(!empty($termsids))){?>
		<title><?php echo $termsname .' - Articles |';  ?> <?php bloginfo('name');?></title> 
	<?php  }
/***************** SEO TITLE FOR Real Weddings TAGS START **************** */
	if(is_page('291')&&(!empty($termsidsreal))){
	$pagetitle=get_the_title();?>
		<title><?php echo $pagetitle .' - '. $termsnamereal . ' | ';  ?> <?php bloginfo('name');?></title> 
	<?php  }?>	
<!-- ------------- SEO TITLE FOR TAGS ENDS ------------------------------- -->

<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style>
textarea.invalid, input.invalid {
    border: 2px solid #e85c41 !important;
}
.invalid-error {
    display: block;
    color: #dc143c !important;	
}
</style>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

 <!-- *********************Begin Mailchimp Signup Form****************** -->
 
 <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
 <script type="text/javascript">
  function showPopup() {
      window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us20.list-manage.com","uuid":"af8457c9c4e4c3aa4d85d2de1","lid":"c7fa411778","uniqueMethods":true }) 
	  document.cookie = "MCPopupClosed=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC";
      document.cookie = "MCPopupSubscribed=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC";
 })	
  };
 <!-- ***************************End mc_embed_signup *********************-->  
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); // Body classes is added from inc/helpers-frontend.php ?>>

<?php do_action( 'flatsome_after_body_open' ); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

<?php do_action('flatsome_before_header'); ?>

<header id="header" class="header <?php flatsome_header_classes();  ?>">
   <div class="header-wrapper">
	<?php
		get_template_part('template-parts/header/header', 'wrapper');
	?>
   </div><!-- header-wrapper-->
</header>

<?php do_action('flatsome_after_header'); ?>

<main id="main" class="<?php flatsome_main_classes();  ?>">
