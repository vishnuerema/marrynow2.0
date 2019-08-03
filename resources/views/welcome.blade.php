<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>

<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}" /> 
<title>Marry Now</title>
<link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- bootstrap-CSS -->
<!-- Fontawesome-CSS -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sail" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- owl-coursel -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="js/owljs.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/owl-carousel.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type='text/javascript' src='js/disable_page.js'></script>
<script type='text/javascript' src='js/marrynowreg_valid.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js'></script>

<!--theme-style-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!-- <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " /> -->
<link rel="stylesheet" type="text/css" href="css/owl_carousel.css">
<!-- slectbox search -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
<!-- slectbox search -->
<!-- datepicker -->
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<!-- datepicker -->
<!-- animation -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-simplyscroll/2.1.1/jquery.simplyscroll.min.css" rel="stylesheet" type="text/css" />
<script src="{{url('js/simplyscroll.js')}}" type="text/javascript"></script>
<!-- animation -->
<!-- alertify -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.rtl.min.css"/>
<script type='text/javascript' src='js/marrynow.js'></script>

</head>
<body>

<!-- header -->
	<header class="heads">
<!--meta data-->

<body> 
<!-- <div id="preloader"></div> -->
		<div class="container">
				<div class="logo sm_block">
					<a class="navbar-brand" href="#"><img src="images/5.png" class="img-fluid logo1" alt="noimg"></a>
				</div>
			<nav class="navbar navbar-expand-sm navbar-light bg-faded wow bounceInDown" data-wow-delay="0.1s">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
				</button>

				<!-- Brand -->
				<div class="logo sm_none">
					<a class="navbar-brand" href="#"><img src="images/5.png" class="img-fluid logo1" alt="noimg"></a>
				</div>

				<!-- Links -->
				<div class="collapse navbar-collapse" id="nav-content">  
				<form class="log_home">
					<ul class="navbar-nav marry_ul">
						<li class="nav-item vr_wids">
							<div class="col-xs-12">
								<input style="text-transform:lowercase" type="text" class="form-control pink_clr mry_logmail_val" placeholder="MatriId / userName" name="mry_email">
								<div class="frgt_msg inbox">
								</div>
							</div>
						</li>
						<li class="nav-item vr_wids">
							<div class="col-xs-12">
									<input  type="password" class="form-control pink_clr mry_logpass_val" placeholder="Password" autocomplete="first_name" 
									name="mry_password">
									<div class="frgt_msg" data-toggle="modal" data-target="#forgetPwd"  >
										<a href="#" class="forget_msg"><span class="fonys">Forgot your password?<span class="fonys"></a>
									</div>
							</div>
						</li>
						<li class="nav-item vr_wids1">
							<a class="nav-link no_pads vr_buttn_stl" >
								<button onclick="mrynow_login(event)" class="login_btn" 
								>Login</button>
							</a>
						</li>
						<li class="nav-item vr_widdsds">
							<span class="hrsimg"><img src="images/clock.png" class="img-fluid help_hours" alt="noimg"></span>
							<span class="hrsnum"><a href="tel:9629466278" class="nav-link clrs_help no_pads vr_buttn_stl">9629466278
							</a></span>
						</li>
					</ul>
				</form>
				</div>
			</nav>
		</div>
	</header>
<!-- header -->
		<hr class="menu_bord wow lightSpeedIn">
<!-- banner --> 
	<section class="bannnnr">		
		<div class="banner_gym wow rollIn" data-wow-delay="0.5s" >
            <div class="owl-carousel" id="owl-demo123">
                <div class="item">
                   <div class="banner_item_gym">
                           <img src="images/1.jpg" class="img-fluid vr_ht">
                        <div class="banner_item_gym_contant wow bounceInDown" data-wow-delay="0.5s"">
                           <h1 class="ban_head">Register now to find your special someone.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner_item_gym">
                           <img src="images/5.jpg" class="img-fluid vr_ht">
                        <div class="banner_item_gym_contant wow bounceInRight">
                            <h1 class="ban_head">We simplify your search for the perfect match.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="banner_item_gym">
                           <img src="images/3.jpg" class="img-fluid vr_ht">
                        <div class="banner_item_gym_contant wow bounceInRight">
                             <h1 class="ban_head">We simplify your search for the perfect match.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="banner_item_gym">
                           <img src="images/4.jpg" class="img-fluid vr_ht">
                        <div class="banner_item_gym_contant">
                         <h1 class="ban_head">Register now to find your special someone.</h1>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="banner_item_gym">
                           <img src="images/5.jpg" class="img-fluid vr_ht">
                        <div class="banner_item_gym_contant wow bounceInRight">
                        <h1 class="ban_head">We simplify your search for the perfect match.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vr_register wow bounceInDown xs_none_re" data-wow-delay="0.5s" >
				<h3 class="reg_head">Register Now</h3>
				<hr class="reg_border">
				<form id="userForm" class="ref_form"  >
					<table class="table common_rg_form">
						<tbody>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Profile Created By<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<div class="vr_reg_rt_full">
									<select class="chzn-select form-control user_profCreatedBy frm-field " name="faculty">
								        <option value="" selected>Choose one</option>
								        @foreach($created_mast as $createBy)
								        <option value="{{$createBy->name}}">{{$createBy->name}}</option>
								       @endforeach
									</select>
									 <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
								</div>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Login Name<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<div class="vr_reg_rt_full">
									<input  style="text-transform:lowercase" class="user_profName form-control" type="text" name="Name" placeholder=" " =""/>
									 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
								</div>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Login Password<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<input onkeyup="pwdStrength()" class="user_pwd form-control" type="password" autocomplete="password" name="Password" placeholder=" " =""/>
								<p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
								<p id="password_strength"></p> 
							</td>
						</tr>	
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Gender<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<label for="gendermale" class="user_gender radiolabel radio_button  crRadio">
									<input type="radio" tabindex="4" class="user_gender radiomargin square_radio radio gender_valid" value="Male" name="gender" id="gendermale"> Male
								</label>
								<label for="genderfemale" class="user_gender radiolabel radio_button crRadio">
								<input type="radio" tabindex="5" class="user_gender radiomargin square_radio radio gender_valid" value="Female" name="gender" id="genderfemalex"> Female
								</label>
								 <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Date Of Birth<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								 <input class="date user_dob form-control" id="datepicker" readonly>
								  <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Marital Status<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<div class="vr_reg_rt_full">
									<select class="chzn-select form-control user_maritalStatus frm-field " name="faculty">
								        <option value="" selected>Choose one</option>
											@foreach($marital_status as $marit_stat)
									        <option value="{{$marit_stat->name}}">{{$marit_stat->name}}</option>
								            @endforeach
									</select>
									 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
								</div>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Caste<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<select onChange="caste_retrive()" class="chzn-select form-control user_cast frm-field " name="faculty">
							            <option value="" selected>Choose one</option>
											@foreach($caste as $cast)
							           <option value="{{$cast->caste_name}}">{{$cast->caste_name}}</option>
								            @endforeach
									</select>
								  <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Sub Caste<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<select class="casteData form-control user_subcast frm-field " name="faculty" >
							            <option  value="" selected>Choose one</option>
							           
									</select>
								  <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form"> Country<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								<div class="vr_reg_rt_full">
									<select class="chzn-select form-control user_country frm-field " name="faculty">
								        <option value="India" selected>India</option>
								        @foreach($country_mast as $country)
								        <option value="{{$country->name}}">{{$country->name}}</option>
								        @endforeach
									</select>
									 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
								</div>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form" >Phone<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								 <input class="user_phone form-control" type="phone" name="phone" placeholder="country code not allowed" 
								 oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" type = "number" onkeyup="regphNovalid()" =""/>
								 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
							</td>
						</tr>
						<tr class="form_vr_tr">
							<td class="form_vr_td_lft">
								<label for="first_name" class="label_vr_form">Email<span class="red_star">*</span></label>
							</td>
							<td class="form_vr_td_rht">
								 <input  class="user_email form-control" type="email" name="email" placeholder=" " =""/>
								 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
							</td>
						</tr>				
					</tbody>
					</table>
						
				</form>
				<div class="reg_centr">
       				 <button class="reg_button hvr-icon-wobble-horizontal frst" onclick="userRegistration(event)" >Register <i class="fa fa-arrow-right hvr-icon"></i></button>
   				</div>
			</div>
        </div>
    </section>
<!-- banner -->   
<!-- video  -->
	<section class="banner_after">
 		<div class="container">
	 		<div class="bann_aftr">
	 			<div class="row">
					<div class="col-lg-12 icon_area campresalign xs_none">
						<p class="newcamphead">Why Marry Now Works For You</p>

						<div class="row ">
							<div class="col-md-4 col-md-offset-2 col-sm-6">
								<div class="campaignregistersprit Private_icon"><i class="fa fa-lock" aria-hidden="true"></i></div> <div class="camph2">Private, Secure and Confidential</div>
							</div>
							<div class="clearfix visible-xs"></div>
							<div class="col-md-4 col-md-offset-2 col-sm-6">
								<div class="campaignregistersprit Advanced_icon"><i class="fas fa-shield-alt"></i></div> <div class="camph2">Advanced Verification</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="row ">
							<div class="col-md-4 col-md-offset-2 col-sm-6">
							<div class="campaignregistersprit Friendly_icon"><i class="fa fa-cogs"></i></div> <div class="camph2">Most Intuitive, User Friendly Technology</div>
							</div>
							<div class="clearfix visible-xs"></div>
							<div class="col-md-4 col-md-offset-2 col-sm-6">
								<div class="campaignregistersprit Private_icon"><i class="fas fa-filter"></i></div> <div class="camph2">Intelligent Matchmaking</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
		</div>
	</section>
<!-- video  -->
<!-- find one --> 
<section class="find_one">
	<div class="container wow bounceInRight">
		<div class="common_hfind">
			<p class="find_p">Find the one who completes you</p>
			<div class="common_date_find">
				<div class="date_find">
					<select class="chzn-select form-control gennddr user_country pds_slct frm-field " name="faculty">
				        <option selected>-- Gender --</option>
				        <option value="male">Male</option>
				        <option value="female">Female</option>
					</select>
				</div>
				<div class="date_find2 txt_cen">
					<button class="search_btn" onclick="searc_gen()" type="button">Search</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- find one --> 
<!-- scroll slide banner --> 
<section class="scroll_slide">
	<div class="container">
		<div class="boreder_head wow bounceInDown" data-wow-delay="0.1s">
			<p class="bri_groom head">Bride / Groom</p>
		</div>
		<div class="boredr_scroll wow bounceInUp" data-wow-delay="0.1s">
			<ul class="scroller_ul main_serch_carousl" id="scroller">
				
				
			</ul>    
		</div>
	</div>
</section>
<!-- scroll slide banner --> 
<!-- second banner --> 
	<section class="second_banners">
        <div class="bacground_second_img wow bounceInRight" data-wow-delay="0.5s">
        	<div class="black_back_clr">
	        	<div class="container">
		        	 <div class="col-md-10 col-sm-12 nopadding-newcamp">
						<div class="row">
							<div class="col-md-11 col-sm-6 feature-camp wow rollIn">
								<h2 class="second_ban_h2">You Deserve A Marry Now Matrimony Experience</h2>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						<div class="row">
							<div class="col-md-5 col-sm-6">
								<!-- <h2>YOU DESERVE A Kalyan Matrimony EXPERIENCE</h2> -->
								<p class="sec_ban_p">It is not how many you meet but who you meet. And we
									believe in giving you the best start.</p>
								<div class="buttons">
									<button class="reg_buttons hvr-icon-wobble-horizontal">Register<i class="fa fa-arrow-right hvr-icon sec"></i></button>
								</div>
							</div>
							<div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-0 ">
								<!-- <h2>
									WHY KALYAN WORKS <br /> FOR YOU
								</h2> -->
								<ul class="list-style sec_uls wow bounceInRight" data-wow-delay="0.5s"">
									<li class="inlinelst"><i class="fa fa-heart" aria-hidden="true"></i> <span class="icon_p">Fits your busy lifestyle</span></li>
									<li class="inlinelst"><i class="fa fa-heart" aria-hidden="true"></i><span class="icon_p"> Match reviews across multiple criteria</span></li>
									<li class="inlinelst"><i class="fa fa-heart" aria-hidden="true"></i><span class="icon_p"> Phone-verified matches</span></li>
									<li class="inlinelst"><i class="fa fa-heart" aria-hidden="true"></i><span class="icon_p"> Intelligent matchmaking</span></li>
									<li class="inlinelst"><i class="fa fa-heart" aria-hidden="true"></i><span class="icon_p"> All interactions are private, secure
										and confidential</span></li>
									<li class="inlinelst"><i class="fa fa-heart" aria-hidden="true"></i><span class="icon_p">An experienced team backed by technology
										works with you</span></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
<!-- second banner --> 
<!-- footer --> 
	<section class="footer">
		<div class="container">
			<div class="foot_common">
				<div class="about_marry wow bounceInRight" data-wow-delay="0.5s"">
					<p class="head_marry">
						About Marry Now
					</p>
					<p class="head_marry1">
						 Register with us for FREE to find a partner from your own community. Take advantage of our user friendly search features to find a bride or groom who matches your preferences. Join us and begin your happy journey today.
						 <p class="head_marry1">
						 Our name carries with it our defining history and rich legacy of success and good fortune. Come over to make an auspicious and blessed new beginning to your life partner search with <b><u>marrynow.in</u></b>.
						 Go ahead ! Click the register button and join the most intuitive Register, Verify, Validate, Match and Connect approach which is just what you need to find your Life Partner.
						 <!-- <a href="#" class="more_a">more</a> -->
					</p>
				</div>
				<hr class="foot_bord wow bounceInRight">
				<div class="foot_stepz wow bounceInLeft">
					<div class="row">
						<div class="col-md-5 col-lg-5 col-sm-5 col-xs-3 widths_vr">
							<div class="foot_vsls">
								<img src="images/5.png" class="img-fluid logo3" alt="noimg">
								<p class="logo_img">
									<b><u>marrynow.in</u></b> is one of the leaders of online matrimony service and would continue as the most trustworthy online Match Making services.
								</p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-6 col-xs-3 widths_vr">
							<div class="foot_vsls xs_none">
								<p class="head_help">PAYMENT OPTIONS</p>
								<div class="instamojo_img">
									<img src="images/razarpay.png" class="img-fluid logo2" alt="noimg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-3 widths_vr">
							<div class="foot_vsls">
								<p class="head_help">KEEP IN TOUCH</p>
								<div class="instamojo_img">
								<p class="head_helpj">Head Office</p>
								<p class="icon_phone"><a class="pone" href="#"><i class="far fa-building"></i>Delhi, #14 Anand Vihar, Noida, Sector 61</a></p>
								<p class="head_helpj">Sub Head Office</p>
									<p class="icon_phone"><a class="pone" href="#"><i class="far fa-building"></i>140 Police Station road, Sivakasi, India</a></p>
									<p class="icon_phone"><a class="pone" href="mail to:Marrynow@gmail.com"><i class="fas fa-envelope"></i>marrynow007@gmail.com</a></p>
									<p class="icon_phone"><a class="pone" href="tel:9629466278"><i class="fab fa-whatsapp"></i>9629466278</a></p>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footers sec wow lightSpeedIn">
	     <div class="container">
	         <div class="row">
	            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow bounceInLeft" data-wow-delay="0.5s">
	                <div class="footer_copy1 bots_foots">
	                    <p class="copy">Copy right 2018. All Rights are reserved.</p>
	               </div>     
	           </div> 
	           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow bounceInRight" data-wow-delay="0.5s">
	                <div class="header_icon4es bots_foots">
		                <ul class="header_icon4es bots_footss">
		                	<li class="dis_in_fa lasd fb">
			                	<div class="fas_spaace">
			                        <a href="https://www.facebook.com/Marrynow-339304976646801/?modal=admin_todo_tour" target="_blank" class="headicon_astyle"><i class="fab fa-facebook-f head_faceiocn"></i></a>
			                    </div>
			                </li>
			                <li class="dis_in_fa twit">
			                    <div class="fas_spaace">
			                        <a href="https://twitter.com/marrynow1" target="_blank" class="headicon_astyle"><i class="fab fa-twitter head_faceiocn"></i></a>
			                    </div>
			                </li>
			                <li class="dis_in_fa goo">
			                    <div class="fas_spaace">
		                        	<a href="https://plus.google.com/u/1/collection/wF9YfE" target="_blank" class="headicon_astyle"><i class="fab fa-google-plus-g head_faceiocn"></i></a>
		                        </div>
		                    </li>
		                    <li class="dis_in_fa pin">
		                        <div class="fas_spaace">
		                       		 <a href="https://www.instagram.com/sivakasimarrynow/" target="_blank" class="headicon_astyle"><i class="fab fa-instagram head_faceiocn"></i></a>
		                       	</div>
	                       </li>
                   		</ul>
                    </div>
	           </div>
	       </div>
	   </div>
	</section>
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/wp1.png" class="img-fluid wp_res"></button>
<!-- footer --> 

  <div class="modal fade" id="forgetPwd" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content full_model_edit">
        <div class="modal-header vr_model_head">
        	          <h4 class="modal-title vr_model_title">Forget Password</h4>

          <button type="button" class="close vr_model_btn" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body vr_model_body">
         <label class="vr_model_label">Enter Your User Name</label><input class="vr_model_input" type="text" id="logUesrName">
         <button class="vr_model_csend" onclick="pwdReset()">SEND LINK</button>
        </div>
      </div>
      
    </div>
  </div>


<script src="{{url('js/register.js')}}"></script>
<script src="{{url('js/slide.js')}}"></script>
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function() {
		    $(".chzn-select").chosen();
		});
   </script>
</body>
<!-- //body -->
</html>
<!-- //html -->
