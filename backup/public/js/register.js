document.querySelectorAll('.crRadio').forEach(function(e){
	e.addEventListener('click',function(){crRadio(e)});
});
function crRadio(e){
	var nam = e.querySelector('input[type="radio"]');
	document.querySelectorAll('[name="'+nam.getAttribute('name')+'"]').forEach(function(inp){
		inp.checked = false;
		inp.closest('.crRadio').classList.remove('checked');
	});
	e.classList.add('checked');
	nam.checked = true;
}


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
		

	/*selectbox search */
	/*<script type="text/javascript">*/
		$(function() {
		    $(".chzn-select").chosen();
		});
/*</script>*/
/*<!-- 	selectbox search -->
<!-- datepicker -->
<script>*/
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
   /* </script>*/
          /*    <script>*/
              new WOW().init();
          /*    </script>*/



          	/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

 // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "block";
    }
}
