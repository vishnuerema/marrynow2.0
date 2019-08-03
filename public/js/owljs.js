 $(document).ready(function(){
        $('#owl-demo123').owlCarousel({
            items:1,
            itemsDesktop : [1199,1],
		    itemsDesktopSmall : [980,1],
		    itemsTablet: [768,1],
		    itemsMobile : [479,1],

	        //Basic Speeds
		    slideSpeed : 200,
		    paginationSpeed : 800,
		    rewindSpeed : 1000,

		    //Autoplay
		    autoPlay : true,
		    stopOnHover : false, 

		    // Responsive 
		    responsive: true,
		    responsiveRefreshRate : 200,
		    responsiveBaseWidth: window,

            loop:true,
            margin:0,
            autoplayHoverPause: true,
            nav:true,
            dots:false,
            slideSpeed:200,
            
            responsive:{
                0:{
                    items:1
                },
          460:{
                    items:1
                },
                690:{
                    items:1
                },
          991:{
                    items:1
                },
          1200:{
                    items:1
                }
            }
        });
       /* $( "#owl-demo123 .owl-next").html('<div class="icon_right"><i class="fa fa-angle-right rigrf"></i></div>');
        $( "#owl-demo123 .owl-prev").html('<div class="icon_left"><i class="fa fa-angle-left leftrnh"></i></div>');*/
    }); 