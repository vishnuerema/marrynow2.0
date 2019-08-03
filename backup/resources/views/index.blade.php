<!--  @include('session_validation') -->
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/owl-carousel.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type='text/javascript' src='js/marrynow.js'></script>
<script type='text/javascript' src='js/marrynowreg_valid.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js'></script>
<script type='text/javascript' src='js/marrynow.js'></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!-- slectbox search -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
<!-- slectbox search -->
<!-- datepicker -->
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<!-- datepicker -->
<!-- animation -->
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" type="text/javascript"></script>
<!-- animation -->
</head>
<!-- header -->
	<header class="heads">
		<body onload="removeImg()">
		<div id="overlay" style="position:fixed;left:0;right:0;bottom:0;top:0;display:flex;justify-content:center;aliggn-items:center;z-index:1999;background:rgba(0, 0, 0, 0.5)">
		<img id="" src="svg/load.svg">
		</div>

		<div class="container">
			<div class="logo sm_block">
					<a class="navbar-brand" href="#"><img src="images/5.png" class="img-fluid logo1" alt="noimg"></a>
				</div>
			<nav class="navbar navbar-expand-sm navbar-light bg-faded wow bounceInDown no_padds_reg" data-wow-delay="0.1s">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-contents" aria-controls="nav-contents" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
				</button>

					<!-- Brand -->
				<div class="logo sm_none">
					<a class="navbar-brand" href="#"><img src="images/5.png" class="img-fluid reg_logo" alt="noimg"></a>
				</div>

				<!-- Links -->
				 <div class="collapse navbar-collapse reg_menu sub" id="nav-contents"> 
					<ul class="navbar-nav reg_ul">
						<li class="nav-item reg2_wids">
							<div class="menu_ssw">
								<span class="fa_help"><img src="images/24_hours.png" class="img-fluid reg_help" alt="noimg"></span>
								<span class="reg_help"><a href="#" class="hlp">Live Help</a></span>
							</div>
						</li>
						<li class="nav-item reg2_wids1">
							<div class="menu_ssw">
								<span class="fa_help"><img src="images/c.png" class="img-fluid reg_help" alt="noimg"></span>
								<span class="reg_help"><a href="#" class="hlp">Contact Us</a></span>
							</div>
						</li>
						<li class="nav-item reg2_wids2">
							<div class="menu_ssw">
								<span class="fa_help"><img src="images/support.png" class="img-fluid reg_help" alt="noimg"></span>
								<span class="reg_help"><a href="#" class="hlp">Helpline : <span class="num">9585196687</span></a></span>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
<!-- header -->
		<hr class="menu_bord wow lightSpeedIn">
<!-- form -->
<section class="form_sec1">
	<div class="container"> 
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12 col-lg-8">
				<div class="commonnxt_step">
					<div class="nxt_step">
						<p class="frm_nxt_step"><a class="frm_p" href="#">STEP2</a></p>
					</div>
					<div class="nxt_step_commn">
						<div class="red_commn">
							<p class="congrats">Congrats! Pratheesh</p>
							<p class="congrats_sub">Fill few more information to complete your profile and you will he ready to meet your matches</p>
						</div>
						<div class="login_commnss">
							<div class="login_commn">
								<p class="loinid">Your login details on Marry Now</p>
								<p> Uesr Matrimony id is </p> 
								<p class="st_fst_phr2">Henceforth please use the above matrimony ID to Login to your profilr at NadarMatrimony. Aconfirmation mail has been send to your mail on how to use the sit efficiently  in finding your match.</p>
							</div>
							<div class="form-group form-check st_idv_ch">
								<label class="form-check-label"><input class="form-check-input" type="checkbox" name="c1"/> Keep me logged in <span class="st_span1">(Recommended)</span></label>
							</div>
							<p class="st_fst_phr2">Stay logged in always at NadarMatrimony</p>
						</div>
					</div>
				</div>
				<div class="cell_image">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
							<div class="cekll_back_clr">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-1 col-lg-1">
										<img src="images/smartphone.png" class="img-fluid cel_help" alt="noimg">
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
										<div class="verify_number">
											<h5 class="st_sec_h3">What's Next? verifting your number</h5>
								    		<h6 class="st_sec_h4">This is the best way ot enhance credibility and authenticity of your profile</h6>
								    		<p class="st_fst_phr2">Enter the varification PIN number that has been sent via</p>
								    		<p class="st_fst_phr2">SMS to <span class="st_fst_skip">9585196687-Edit Number</span></p>
								    		<form class="st_fm">
								    			<input class="form-control st_fm_num" type="text" name="n1">
								    			<button class="st_btn_verify btn" value="verify" name="v1">verify</button>
								    		</form>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-1">
										<div class="or_pay">OR</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-4">
										<div class="verify">
											<h5 class="st_sec_h3">Verify through missed call</h5>
							    				<p class="st_fst_phr2"> Give a missed call to <span class="st_fst_skip">9585196687</span>(Toll free)from your mobile <span class="st_fst_skip">(9585196687)</span>. Your call automatically disconnected after a few rings and you will receive a comformation SMS.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
							<div class="cekll_back_clr1">
								<p class="st_fst_phr3"> you will receive on 10 to 15 second. yet to recive SMS? <a href="#">Click here</a> to resend the PIN number.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="Call_us">
					<div class="st_fd_dw">
					  	<p class="st_fst_phr3 dw_phr">Other way to verify your number.</p>
					  </div>
					<div class="st_thr_div">
						<h5 class="st_sec_h3">We will call to u</h5>
					</div>
					<div class="red_round1">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
								<div class="red_round_common">
									<div class="red_round">
										<p class="st_thr_sphr1">1</p>
									</div>
									<div class="red_round_content">
										<p class="st_thr_sphr2">To place a call request</p>
										<p class="st_thr_sphr2"><a href="#" >Click here</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
								<div class="red_round_common">
									<div class="red_round">
										<p class="st_thr_sphr1">1</p>
									</div>
									<div class="red_round_content">
										<p class="st_thr_sphr2">You will receive an automated IVR call on your mobile for verification.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
								<div class="red_round_common">
									<div class="red_round">
										<p class="st_thr_sphr1">3</p>
									</div>
									<div class="red_round_content">
										<p class="st_thr_sphr2"><a href="#"> Press 1</a> to verify your number</p>
										<p class="st_thr_sphr2">Edit Mobile Number</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="another_way">
					<div class="st_thr_div">
						<h5 class="st_sec_h3">You Can Call us</h5>
					</div>
					<div class="red_round1">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
								<div class="red_round_common">
									<div class="red_round2">
										<p class="st_thr_sphr1">1</p>
									</div>
									<div class="red_round_content2">
										<p class="st_thr_sphr2">To place a call request</p>
										<p class="st_thr_sphr2"><a href="#" >Click here</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
								<div class="red_round_common">
									<div class="red_round2">
										<p class="st_thr_sphr1">2</p>
									</div>
									<div class="red_round_content2">
										<p class="st_thr_sphr2"><a href="#"> Press 1</a> to verify your number</p>
										<p class="st_thr_sphr2">Edit Mobile Number</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="yi_class">
					<p class="st_fr_div_phr"> If you require any further assistance in verifying  your mobile Number. Please do not hesitate contact <a href="#">24x7 Live Help.</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 marg_top">
					<div class="st_fst_div_rt_ft_common">
						<div class="st_fst_div_rt_ftcommon_img">
							<div class="st_fst_div_rt_ft_img">
								<img class="st_img_tele img-fluid "src="images/tele1.png" alt="telephone"/>
							</div>
							<div class="st_fst_div_rt_ft_img_h3">
								 <h3 class="st_h3_hd st_sp_hd">Require 
									assistance?</h3>
							</div>
						</div>
						<div class="st_fst_div_rt_ft_common_cont">
							<p class="st_fst_phr2">If you require any futher assistance in verifying your phone number. please conduct <a href="#">24X7 Live Help</a></p>
						</div>
					</div>
					<div class="st_fst_div_rt_ft_common margd">
						<div class="st_fst_div_rt_ftcommon_img">
							<div class="st_fst_div_rt_ft_img">
								<img class="st_img_tele img-fluid "src="images/check.png" alt="telephone"/>
							</div>
							<div class="st_fst_div_rt_ft_img_h3">
								 <h3 class="st_h3_hd st_sp_hd">Benafit of varification</h3>
							</div>
						</div>
						<div class="st_fst_div_rt_ft_common_cont last">
							<span class="st_span3"><i class="fas fa-play st_icon"></i>You will not miss out any marriage proposal</span><br>
							<span class="st_span3"><i class="fas fa-play st_icon"></i>Prospects can contact you directly</span><br>
							<span class="st_span3"><i class="fas fa-play st_icon"></i>Gives authentic feel to your profile</span><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- footer --> 
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
			                        <a href="#" class="headicon_astyle"><i class="fab fa-facebook-f head_faceiocn"></i></a>
			                    </div>
			                </li>
			                <li class="dis_in_fa twit">
			                    <div class="fas_spaace">
			                        <a href="#" class="headicon_astyle"><i class="fab fa-twitter head_faceiocn"></i></a>
			                    </div>
			                </li>
			                <li class="dis_in_fa goo">
			                    <div class="fas_spaace">
		                        	<a href="#" class="headicon_astyle"><i class="fab fa-google-plus-g head_faceiocn"></i></a>
		                        </div>
		                    </li>
		                    <li class="dis_in_fa pin">
		                        <div class="fas_spaace">
		                       		 <a href="#" class="headicon_astyle"><i class="fab fa-instagram head_faceiocn"></i></a>
		                       	</div>
	                       </li>
                   		</ul>
                    </div>
	           </div>
	       </div>
	   </div>
	</section>
<!-- footer -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/wp1.png" class="img-fluid wp_res"></button>
	<script src="{{url('js/register.js')}}"></script>

<?php
// session checking on view page
session_start();
if(!isset($_SESSION['user_name'])){ 
header("Location: /");
exit();
}
$userName = $_SESSION['user_name'];
$userRole = $_SESSION['role'];
?>


</body>
</html>
