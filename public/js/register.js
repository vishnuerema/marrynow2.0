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
	
	/*selectbox search */
	/*<script type="text/javascript">*/
		
/*</script>*/
/*<!-- 	selectbox search -->
<!-- datepicker -->
<script>*/
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
   /* </script>*/
          /*    <script>*/
             /* new WOW().init();*/
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


/*welcome caste */
    function caste_retrive(){
    $('.castevals').remove();
        var selectedcaste=$('.user_cast option:selected').val();
 
          $.ajax({
         type: "post",
          url: "get_caste",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "selectedcaste":selectedcaste
            },
         cache: false,
         success: function(data){
          console.log(data);
         for(var i=0; i<data.length; i++){
          $('.casteData').append('<option class="castevals" value="'+data[i].sub_caste_name+'" >'+data[i].sub_caste_name+'</option>');
          }

          }
       });
}
/*welcome caste */

    function getDistrict(){
        $('.distvals').remove();
        var selectedState =  $('.shop_state_s').val();
         $.ajax({
         type: "post",
          url: "get_state",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "selectedState":selectedState
            },
         cache: false,
         success: function(data){
          for(var i=0; i<data.length; i++){
          $('.distData').append('<option style="text-transform:lowercase" class="distvals" value="'+data[i].dist_name+'" >'+data[i].dist_name+'</option>');
          }
          }
       });
     }

     function getTaluk(){
        $('.talukvals').remove();
        var selectedDist =  $('.shop_district_s').val();
         $.ajax({
         type: "post",
          url: "get_taluk",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "selectedDist":selectedDist
            },
         cache: false,
         success: function(data){
          for(var i=0; i<data.length; i++){
          $('.talukData').append('<option style="text-transform:lowercase" class="talukvals" value="'+data[i].block_name+'" >'+data[i].block_name+'</option>');
          }
          }
       });
     }

     function getVillage(){
        $('.villagevals').remove();
        var selectedtaluk =  $('.shop_taluk_s').val();

         $.ajax({
         type: "post",
          url: "get_village",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "selectedtaluk":selectedtaluk
            },
         cache: false,
         success: function(data){
          for(var i=0; i<data.length; i++){
          $('.VillageData').append('<option class="villagevals" value="'+data[i].village_name+'" >'+data[i].village_name+'</option>');
          }
          }
       });
     }

   /*function getward(){
        $('.wardvals').remove();
        var selectedvillage =  $('.shop_village_sh').val();

         $.ajax({
         type: "post",
          url: "get_ward",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "selectedvillage":selectedvillage
            },
         cache: false,
         success: function(data){
          for(var i=0; i<data.length; i++){
          $('.wardData').append('<option class="wardvals" value="'+data[i].Habitation_code+'" >'+data[i].Habitation_code+'</option>');
          }
          }
       });
     }*/
