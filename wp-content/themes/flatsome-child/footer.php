<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->
<script type="text/javascript">
// Loadmore button json data for Real Weddings
jQuery(function($){
$('.loadmore').click(function() {
        var nextpage = $(this).data('nextpage');
		var Lastpage = $(this).data('lastpage');
		 $('#imgloader').show();
        $.ajax({
            method: 'POST',
            url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
            type: 'JSON',
            data: {
				page:nextpage,
                action: 'get_realwed'
            },
            success:function(response){
				$('#imgloader').hide();
				var responseArraya = JSON.parse(response);
				var postDataData= responseArraya.postData;
				//console.log(postDataData);
				var imagesHtml = '';
				 var owl='';
				 var posturls='';
				 owl = $('.owl-carousel');
           
				$.each(postDataData,function(j,l){
					imagesHtml+='<div class="col medium-12 small-12 md-6 large-4 realpage recent-short" style="float:left;"><div class="col-inner"><div class="content_wrapper"><div class="content realcontent">'; 
				var ImageData = postDataData[j]['sliderData'];
				 imagesHtml+='<div id="owl-demo" class="owl-carousel owl-theme multi-img ">'; 
          
					//console.log(ImageData);
					$.each(ImageData,function(k,v){
						
							imagesHtml+='<a href="'+ImageData[k]["postUrl"]+'"><div class="item-demo" style="background-image: url('+ImageData[k]["sliderimg"]+'); background-position:center; background-size: cover; "></div>	</a>';
						}); 
						
					imagesHtml+='</div>';
					
					imagesHtml+='<div class="details" style="text-align: center;"><a href="'+postDataData[j]['posturl']+'"><h3 style="text-align: center;">'+postDataData[j]["couple"]+'</h3><h4 class="post-title-slider">'+postDataData[j]["posttitle"]+'</h4><div class="location"><p>'+postDataData[j]["location"]+'</p></div></a></div></div></div></div></div>'; 
					});
					
					if(nextpage==Lastpage){
						$('.loadmore').hide();
					}
					nextpage = nextpage+1;
				//	console.log(imagesHtml);
				if(response) 
				{
					  $('.loader1').hide();
						
				$('.loadmore').data('nextpage', nextpage);
				$('#loadcontent').append(""+imagesHtml+"");
				owl=$(".owl-carousel");
				owl.owlCarousel({
	            items: 1,
				autoHeight:true,
				loop:true,
	            slideSpeed: 900,
	            pagination: false,
	            autoplay: false,
				dots:false,
	            autoplayHoverPause: true,
	            addClassActive: true,
				 nav:true, 
				navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
	            /*<i class="fa fa-chevron-right">*/
	        }).data('owlCarousel');
	
	        $('.owl-item').click(function(){
	            owl.next();
	        });
				}
					/* else{
					//$('.loadmore').hide();  
            } */
			}
			     
			
        });
    return false;
});
});
</script> 
<script type="text/javascript">
// Loadmore button json data for tips and trends
jQuery(function($){
$('.loadmoreedit').click(function() {
         //var $offset = $(this).data('offset');
         var nextpage = $(this).data('nextpage');
			var Lastpage = $(this).data('lastpage');
		 $('#imgloader').show();
		 
         //console.log('var'+$offset);
        $.ajax({
            method: 'POST',
            url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
            type: 'JSON',
            data: {
				page:nextpage,
                action: 'get_editorials'
            },
            success:function(response){
				$('#imgloader').hide();
				var responseditArraya = JSON.parse(response);
				var postDatainfo= responseditArraya.postData;
				//console.log(responseditArraya);
				//console.log(postDatainfo);
				var imagesHtml = '';
				 var owl='';
				 var posturls='';
				 owl = $('.owl-carousel');
				 
				$.each(postDatainfo,function(j,l){
					imagesHtml+='<div class="col medium-12 small-12 md-6 large-4 editpage recent-short" style="float:left;"><div class="col-inner"><div class="content_wrapper"><div class="content">'; 
				var ImageData = postDatainfo[j]['editslider'];
				 imagesHtml+='<div id="owl-demo" class="owl-carousel owl-theme multi-img ">'; 
					$.each(ImageData,function(k,v){
						imagesHtml+='<a href="'+ImageData[k]["postUrl"]+'"><div class="item-demo" style="background-image: url('+ImageData[k]["sliderimg"]+'); background-position:center; background-size: cover;  "></div>	</a>';
						}); 
						
					imagesHtml+='</div>';
					
					imagesHtml+='<div class="details" style="text-align: center;"><h3 style="text-align: center;"><a href="'+postDatainfo[j]['editurl']+'">'+postDatainfo[j]['edittitle']+'</a></h3><div class="meta"><a href="#" class="author">'+postDatainfo[j]['editauthor']+'</a></div></div></div></div></div></div>'; 
					});
					
					if(nextpage==Lastpage){
						$('.loadmoreedit').hide();
					}
					nextpage = nextpage+1;

				if(response) 
				{
					  $('.loader1').hide();
				$('.loadmoreedit').data('nextpage', nextpage);
				$('#loadcontents').append(""+imagesHtml+"");
				
				owl=$(".owl-carousel");
				owl.owlCarousel({
	            items: 1,
				autoHeight:true,
				loop:true,
	            slideSpeed: 900,
	            pagination: false,
	            autoplay: false,
				dots:false,
	            autoplayHoverPause: true,
	            addClassActive: true,
				 nav:true, 
				navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
	            }).data('owlCarousel');
	
				$('.owl-item').click(function(){
					owl.next();
				});
			}		
				
            }
        });
    return false;
});
  });
</script> 

 

<script>
// featured post home page script
jQuery(function($){
	 var owl='';
  owl=$(".owl-carousel");
  $("#owl-featuredemo").owlCarousel({
	  
      
      items: 1,
		loop:true,
      navigation : false, // Show next and prev buttons
	  dots:false,
       slideSpeed : 1000,
     //transitionStyle : "fade",
	 animateIn: 'fadeIn',
	animateOut: 'fadeOut',
      singleItem:true,
	 pagination: false,
	 autoplay: true,
   autoplayHoverPause: true,
	addClassActive: true,
	 nav:true, 
	navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
	            }).data('owlCarousel');
				$('.item').click(function(){
	            owl.next();
	        });
$('.featured_item').click(function(){

var link = $(this).attr('data-target');

window.location.href = link;

})
});

</script>

 

<!--End mc_embed_signup-->


<?php wp_footer(); ?>


</body>
</html>
