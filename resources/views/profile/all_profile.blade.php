<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Marry Now</title>
<link rel="icon" href="../images/favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- bootstrap-CSS -->
<!-- Fontawesome-CSS -->
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sail" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- owl-coursel -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type='text/javascript' src='../js/marrynow.js'></script>
<script type='text/javascript' src='../js/marrynowreg_valid.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js'></script>
<script type='text/javascript' src='../js/marrynow.js'></script>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
</head>
<!-- header -->
<body>

  <header class="heads wats_prof_head">
    <div class="container">
      <div class="logo sm_block adjt_ctr_prof_wats">
          <a class="navbar-brand" href="#"><img src="../images/5.png" class="img-fluid logo1" alt="noimg"></a>
        </div>
      <nav class="navbar navbar-expand-sm navbar-light bg-faded wow bounceInDown no_padds_reg" data-wow-delay="0.1s">
          <!-- Brand -->
        <div class="logo sm_none adjt_ctr_prof_wats">
          <a class="navbar-brand" href="#"><img src="../images/5.png" class="img-fluid reg_logo" alt="noimg"></a>
        </div>
      </nav>

    </div>
  </header>
  <section class="edit_profs whats_bdy_sec">
  	<div class="container">
	  	<div class="whatsapp_prof_bdy">
		  	<div class="whatsapp_pro_title">
		  		Today's Profiles
		  	</div>
@foreach($profile as $profiles)
		  	<div class="whatsapp_pro_detail">
			  	<div class="cmn_whatsapp_pro_detail">
				  	<div class="prof_watsapp_pic">
				  		<div class="propic_whatsapp">Profile Picture</div>
				  		@if($profiles->profile_image=="" && $profiles->profile_gender=='male')
	           					<img src="../imgs/male_profile1.png" class="img-thumbnail img-fluid whats_prof_img" alt="noimg">
	           				
	           				@elseif($profiles->profile_image=="" && $profiles->profile_gender=='female')
	           					<img src="../imgs/girl_profile.png" class="img-thumbnail img-fluid whats_prof_img" alt="noimg">
	           				
	           				@else
	           				<img src="../imgs/{{$profiles->profile_image}}"  class="img-thumbnail img-fluid whats_prof_img" alt="noimg">
	           				@endif
			  		</div>
			  		<div class="prof_watsapp_horos">
			  			<div class="propic_whatsapp">Horoscope</div>
		  				@if($profiles->profile_horoscope=="")
	   					<img src="../imgs/horoscope.jpg" class="img-thumbnail img-fluid whats_prof_img" alt="noimg">
	       				@else
	       				<img src="../imgs/{{$profiles->profile_horoscope}}"  class="img-thumbnail img-fluid whats_prof_img" alt="noimg">
	       				@endif
	   				</div>
   				</div>
		  		<div class="prof_watsapp_shre_detal">
		  			<table class="whts_prof_tabl">
		  				<tbody>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Name :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->profile_name}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Religion :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->prof_relegion}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Caste :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->user_cast}}
			  					</td>
			  				</tr><tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Sub Caste :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->user_sub_caste}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					DOB :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->user_dob}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Age :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->profile_age}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Marital Status :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->prof_user_marial_stat}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Education :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->prof_user_edu}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Job :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->prof_user_employedin}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					Income :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->prof_income}}
			  					</td>
			  				</tr>
			  				<tr class="whts_prof_tabl_tr">
			  					<td class="prof_wats_sub_shre_lft">
				  					District :
			  					</td>
			  					<td class="prof_wats_sub_shre_rht">
				  					{{$profiles->prof_district}}
			  					</td>
			  				</tr>
		  				</tbody>
		  			</table>
	  			</div>
	  		</div>
	  	</div>
@endforeach
  	</div>
  </section>
  <!-- footer --> 
<section class="footers watsapp_footr">
       <div class="container">
          <div class="footer_adjs_watsap">
              <a style="font-family: 'Playball', cursive;" class="marrynow_foo_wats" href="https://marrynow.in/">marrynow.in</a>
         </div> 
         <div class="adjt_ctr_whatsapp_hlpline">
         	<a style="font-family: 'Playball', cursive; font-size: 16px;" href="tel:9629466278" class="marrynow_helpln"><span class="help_whatspp"><i class="far fa-question-circle"></i></span><span class="help_whatspp_num">9629466278</span></a>
		</div>    
     </div>
  </section>
<!-- footer -->
</body>
</html>

