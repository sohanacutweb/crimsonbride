jQuery(function($){
	    $(document).ready(function() {
	var owl = $(".owl-carousel").owlCarousel({
	            items: 1,
				loop:true,
				 responsiveClass: true,
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
	
	

 $(".myelement").click(function() {
	  
    $(this).find('span').find('i').toggleClass('fa fa-angle-down fa-lg fa fa-angle-up fa-lg');
    $(this).next('.checkboxweds').slideToggle();
    return false;
  });
  
  $(".filtermobdiv").click(function() {
  $('#secondary-mobile-filter').css("display", "block");
  
}); 
   $("#content-filters-close").click(function() {
  $('#secondary-mobile-filter').hide();
  
}); 
 



  
//Single Real weddings home categories collaspe sidebar titles 

 $(".hidden-content-reveal").click(function() {
	  
    $(this).find('.collap').find('i').toggleClass('fa fa-chevron-down fa fa-chevron-up');
    $(this).next('.hidden-cat').slideToggle();
    return false;
  });
	
	
 //Single Real wedding Readmore Detail Content
$("#hidden").click(function() {
			$('.content-divider').show();
            $(".hiddencontentdetail").show();
			$('.min_heaight').css('height', '100%');
			$("#hidden").hide();
        });

//Single Real wedding Show Less Content
$("#show").click(function() {
			$('.content-divider').hide();
            $(".hiddencontentdetail").hide();
			$('.min_heaight').css('height', '250px');
			$("#hidden").show();
        });
 
/*******************************************************************
* hide and show feature content single Real Wedding (16-09-19)
**/
			$('.show_pros').click(function(){
				$('.text_hidden').css('height', '100%');
				$('.show_pros').hide();
				$('.hide_pros').show();
			});
			
			$('.hide_pros').click(function(){
				$('.text_hidden').css('height', '297px');
				$('.show_pros').show();
				$('.hide_pros').hide();
			});

/***************************Author Bio hide ********************************/
 $("#biohide").click(function() {
            $("#hiddenexcerpt").fadeToggle();
			$("#biohide").hide();
        });
 $("#hiddenexcerpt").click(function() {
            $("#hiddenexcerpt").hide();
			$("#biohide").show();
        });
		
 /***************************Filter add class ********************************/
$('.checkbox-edits li a').on('click', function() {
			// e.preventDefault();
			  $('li a.checkboxfocus').removeClass('checkboxfocus');
			$(this).addClass('checkboxfocus');
	 
});
 

$( "#myelement" ).click(function() {     
    
     $('#another-element').toggle();    
});

$( "#element" ).click(function() {     
     $('#re-element').toggle();    
});

        
});	
  })
