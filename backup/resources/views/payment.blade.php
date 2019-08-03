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
						<li class="nav-item pay_wids">
							<div class="menu_ssw">
								<P class="uer_id">Pratheesh(NDR323270)</P>
							</div>
						</li>
						<li class="nav-item pay_wids1">
							<div class="menu_ssw">
								<span class="fa_help"><img src="images/24hou.png" class="img-fluid fuls_help" alt="noimg"></span>
								<span class="reg_help"><a href="#" class="hlp">Help</a></span>
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
<section class="payment">
	<div class="container mt-4">

<ul class="nav nav-tabs responsive " role="tablist">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="tab" href="#home" role="tab">MEMBERSHIP PLANS</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#profile" role="tab">PERSONALISED PLANS</a>
	</li>
	<li class="nav-item text_right">
		<a class="nav-link" href="#messages" role="tab"><p class="tab_num">Call 044-42970105 / 1 800 3000 4466</p>
<p class="tab_para">for any help in making payment</p>
</a>
	</li>
</ul><!-- Tab panes -->
<div class="tab-content responsive">
	<div class="tab-pane active" id="home" role="tabpanel">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-12">
					<div class="regp_packtitle font18">
					<sub><img src="images/arrow_pay.png" class="posrelative"></sub>
					<span class="txt-upper"><strong>Price are Increasing Soon </strong>- </span>
						<span> Flat Rs. 200 OFF On Gold 3 Months Pack</span>
					</div>
					<!-- table tabs -->
					<div class="table_tab">
						<div class="container">
						<div class="row">
					        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12"> <!-- required for floating -->
					          <!-- Nav tabs -->
						          <ul class="nav nav-tabs tabs-left sideways">
						          	<li class="whit_li">
						          	</li>
						          	<li class="whit_li">
						          		3 Months
						          	</li>
						          	<li class="whit_li">
						          		6 Months
						          	</li>
						          	<li class="whit_gld">
						          		GOLD
						          	</li>
					          		<li class="active"><a href="#home-v" data-toggle="tab"> Rs. <strike>4700</strike> 4500</a></li>
					          		 <li><a href="#profile-v" data-toggle="tab"> Rs.<strike> 8100</strike> 6200</a></li>
					          		<li class="whit_gld">
						          		DIAMOND
						          	</li>
						          		<li><a href="#messages-v" data-toggle="tab">Rs.<strike>5600</strike> 4900</a></li>
						          		<li><a href="#settings-v" data-toggle="tab">Rs.<strike>8900</strike> 6500</a></li>
					          		<li class="whit_gld">
						          		PLATINUM
						          	</li>
						          	<li><a href="#bal-v" data-toggle="tab">Rs.<strike>7600</strike> 6900</a></li>
					          		<li><a href="#cal-v" data-toggle="tab">Rs.<strike>9900</strike> 8500</a></li>
						          </ul>
					        </div>

					        <div class="col-xs-12 col-md-3 col-lg-3 col-sm-12">
					          <!-- Tab panes -->
					          <div class="tab-content">
					            <div class="tab-pane active" id="home-v">
					            	<p class="benfit" style="font-weight: bold">Benefits of Gold 3 Months</p>
				            		<div class="msg"><span class="msg_icon"><i class="far fa-envelope"></i></span>
				            		<span class="msg_icon_cont">Send Unlimited personal messages to your matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-mobile-alt"></i></span>
				            		<span class="msg_icon_cont">View and Contact 55 verified Mobile numbers & Send 45 SMS</span></div>
					            	<img class="img-fluid img_graunt" src="images/regppmt_guaranteed.jpg">
					            </div>
					            <div class="tab-pane" id="profile-v">
					            	<p class="benfit" style="font-weight: bold">Benefits of Gold 6 Months</p>
				            		<div class="msg"><span class="msg_icon"><i class="far fa-envelope"></i></span>
				            		<span class="msg_icon_cont">Send Unlimited personal messages to your matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-mobile-alt"></i></span>
				            		<span class="msg_icon_cont">View and Contact 55 verified Mobile numbers & Send 45 SMS</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-globe-asia"></i></span>
				            		<span class="msg_icon_cont">Get 100 free Astro Matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-users"></i></span>
				            		<span class="msg_icon_cont">2 month Profile Highlighter FREE (Get noticed easily)</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-comments"></i></span>
				            		<span class="msg_icon_cont">Chat with Prospects Directly</span></div>
					            	<img class="img-fluid img_graunt" src="images/regppmt_guaranteed.jpg">
					            </div>
					            <div class="tab-pane" id="messages-v">
					            	<p class="benfit" style="font-weight: bold">Benefits of Gold 3 Months</p>
				            		<div class="msg"><span class="msg_icon"><i class="far fa-envelope"></i></span>
				            		<span class="msg_icon_cont">Send Unlimited personal messages to your matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-mobile-alt"></i></span>
				            		<span class="msg_icon_cont">View and Contact 55 verified Mobile numbers & Send 45 SMS</span></div>
					            	<img class="img-fluid img_graunt" src="images/regppmt_guaranteed.jpg">
					            </div>
					            <div class="tab-pane" id="settings-v">
					            	<p class="benfit" style="font-weight: bold">Benefits of Gold 6 Months</p>
				            		<div class="msg"><span class="msg_icon"><i class="far fa-envelope"></i></span>
				            		<span class="msg_icon_cont">Send Unlimited personal messages to your matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-mobile-alt"></i></span>
				            		<span class="msg_icon_cont">View and Contact 55 verified Mobile numbers & Send 45 SMS</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-globe-asia"></i></span>
				            		<span class="msg_icon_cont">Get 100 free Astro Matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-users"></i></span>
				            		<span class="msg_icon_cont">2 month Profile Highlighter FREE (Get noticed easily)</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-comments"></i></span>
				            		<span class="msg_icon_cont">Chat with Prospects Directly</span></div>
					            	<img class="img-fluid img_graunt" src="images/regppmt_guaranteed.jpg">
					            </div>
					            <div class="tab-pane" id="bal-v">
					            	<p class="benfit" style="font-weight: bold">Benefits of Gold 3 Months</p>
				            		<div class="msg"><span class="msg_icon"><i class="far fa-envelope"></i></span>
				            		<span class="msg_icon_cont">Send Unlimited personal messages to your matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-mobile-alt"></i></span>
				            		<span class="msg_icon_cont">View and Contact 55 verified Mobile numbers & Send 45 SMS</span></div>
					            	<img class="img-fluid img_graunt" src="images/regppmt_guaranteed.jpg">
					            </div>
					            <div class="tab-pane" id="cal-v">
					            	<p class="benfit" style="font-weight: bold">Benefits of Gold 6 Months</p>
				            		<div class="msg"><span class="msg_icon"><i class="far fa-envelope"></i></span>
				            		<span class="msg_icon_cont">Send Unlimited personal messages to your matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-mobile-alt"></i></span>
				            		<span class="msg_icon_cont">View and Contact 55 verified Mobile numbers & Send 45 SMS</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-globe-asia"></i></span>
				            		<span class="msg_icon_cont">Get 100 free Astro Matches</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-users"></i></span>
				            		<span class="msg_icon_cont">2 month Profile Highlighter FREE (Get noticed easily)</span></div>
				            		<div class="msg"><span class="msg_icon"><i class="fas fa-comments"></i></span>
				            		<span class="msg_icon_cont">Chat with Prospects Directly</span></div>
					            	<img class="img-fluid img_graunt" src="images/regppmt_guaranteed.jpg">
					            </div>
					          </div>
					        </div>
					      </div>
					      </div>
					</div>
					<!-- table tabs -->
					<div class="add_on">
						<p class="add_n">ADD-ON PACKS</p>
						<hr class="add_hr">
						<hr class="add_hr1">
						<div class="add_on_check_common">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adsn">
									<div class="cols_adsn">
										<label class="form-check-label">
										    <input type="checkbox" class="form-check-input" value="">Profile Highlighter
										  </label>
										  <div class="boldtxt">
				   							<span class="font16 boldtxt">Rs. 650<span style="font-weight: normal;" class="font13"> for 3 Months</span>
				   							</span>
										</div>
										<div class="img_addn_s">
											<img  src="images/addon_top_placement_icon.jpg" class="img-ads img-fluid" alt="visa">
											<p class="profiless"> Get better visibility with a special profile AD.  <a href="#" class="ads_pro">more>></a></p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adsn">
									<div class="cols_adsn">
										<label class="form-check-label">
										    <input type="checkbox" class="form-check-input" value="">Top Placement
										  </label>
										  <div class="boldtxt">
				   							<span class="font16 boldtxt">Rs. 650<span style="font-weight: normal;" class="font13"> for 3 Months</span>
				   							</span>
										</div>
										<div class="img_addn_s">
											<img  src="images/addon_prof_highlighter_icon.jpg" class="img-ads img-fluid" alt="visa">
											<p class="profiless"> Real time horoscope matching.  <a href="#" class="ads_pro">more>></a></p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adsn">
									<div class="cols_adsn">
										<label class="form-check-label">
										    <input type="checkbox" class="form-check-input" value="">Astro Match
										  </label>
										  <div class="boldtxt">
				   							<span class="font16 boldtxt">Rs. 650<span style="font-weight: normal;" class="font13"> for 3 Months</span>
				   							</span>
										</div>
										<div class="img_addn_s">
											<img  src="images/addon_astro_match_icon.jpg" class="img-ads img-fluid" alt="visa">
											<p class="profiless"> Real time horoscope matching.  <a href="#" class="ads_pro">more>></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="profile" role="tabpanel">
		<div class="pre_arrow">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<div class="pers_tab_sub">
							<h5 class="pers_h5">ASSISTED SERVICE</h5>
							<p class="pers_p">An Expert Relationship Manager with a proven track record in matchmaking will search, shortlist and find the right match for you</p>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 col-sm-12">
						<div class="arrw_img">
							<img src="images/setbracketimg.png" class="img-fluid arows">
						</div>
						<div class="arrow_aft_img_sub">
							<div class="arrow_aft_i">
								<hr class="bord_ar">
								<p class="mon_p_hr">3 monrths</p>
							</div>
							<p class="arr_amt">Rs.18000</p>
							<button type="button" class="amt_arr_btn"><a href="#" class="buy_now">BUY NOW</a></button>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 col-sm-12">
						<div class="arrow_aft_img_sub2">
							<div class="arrow_aft_i">
								<hr class="bord_ar">
								<p class="mon_p_hr">6 monrths</p>
							</div>
							<p class="arr_amt">Rs.18000</p>
							<button type="button" class="amt_arr_btn"><a href="#" class="buy_now">BUY NOW</a></button>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 col-sm-12">
						<div class="arrow_aft_img_sub3">
							<p class="beni_arr_amt">Benefits of Assisted Service</p>
							<div class="arr_tc">
								<span class="tick"><i class="fas fa-check"></i></span>
								<span class="tick1">Dedicated Relationship manager</span>
							</div>
							<div class="arr_tc">
								<span class="tick"><i class="fas fa-check"></i></span>
								<span class="tick1">Faster responses from interested matches</span>
							</div>
							<div class="arr_tc">
								<span class="tick"><i class="fas fa-check"></i></span>
								<span class="tick1">Matching profiles to your mailbox</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- payment -->

<!-- payment option-->
<section class="pay_option">
	<hr class="tab_hr">
	<div class="back_imgs">
		<div class="container">
	        	<div class="row">
		            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-9 pay_opt">
       					 <div class="pay_opt_head"><p class="pay_opt_head">Payment Option</p></div>
       				 <div class="bhoechie-tab-container">
		            	<div class="row">
				            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
					              <div class="list-group">
					                <a href="#" class="list-group-item active text-center">
					                  <h4 class="tab_ver_h4">Card Payment</h4>
					                </a>
					                <a href="#" class="list-group-item text-center">
					                  <h4 class="tab_ver_h4">Net Banking</h4>
					                </a>
					                <a href="#" class="list-group-item text-center">
					                   <h4 class="tab_ver_h4">Free Doorstep Collection</h4>
					                   <p class="tab_ver_p">(We accept Cash, Cheque, DD and Cards)</p>
					                </a>
					                <a href="#" class="list-group-item text-center">
					                  <h4 class="tab_ver_h4">Marrynowmatrimony Offices</h4>
					                </a>
					                <a href="#" class="list-group-item text-center">
					                  <h4 class="tab_ver_h4">RTGS / NEFT</h4>
					                </a>
					                <a href="#" class="list-group-item text-center">
					                  <h4 class="tab_ver_h4">Pay at Bank Branches</h4>
					                </a>
					              </div>
				            </div>
				            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
				                <!-- flight section -->
				                <div class="bhoechie-tab-content active">
				                    <div class="creditSwitch_Image text-right">
										<span class="creditCardImgs""><img id="visa" src="images/pymnt-visa-icon.gif" width="46" height="31" border="0" alt="visa" title="visa"></span> 
										<span class="creditCardImgs" "><img id="master" src="images/pymnt-master-icon.gif" width="46" height="31" border="0" alt="mastercard" title="mastercard"></span> 
										<span class="creditCardImgs"><img id="maestro" src="images/pay-maestro.gif" width="46" height="31" border="0" alt="maestro" title="maestro"> </span>
										<span class="creditCardImgs" ><img id="amex" src="images/pymnt-amc-express-icon.gif" width="46" height="31" border="0" alt="american express" title="american express"></span>
									</div>
									  <hr class="tab_hrs">
									  <div class="container">
										  <div class="row">
										    	<div class="panel panel-login">
													<div class="panels">
														<div class="display-inline-block panl_ads">
																<a href="#" class="active panl_ads_a" id="login-form-link">Credit / Debit </a>
																<a href="#" class="panl_ads_a" id="register-form-link"> ATM cum Debit</a>
														</div>
													</div>
													<div class="panels1">
														<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
																<div class="credit_cd">
																	<div class="credit_labl">
																		<label class="pan_lab" for="createdfor">Credit / Debit / ATM Card Number <span class="rdclr">*</span></label>
																	</div>
																	<div class="credit_cd_input">
																		<input type="text" class="form-control lock_inp" maxlength="19">
																		<span class="lock_icon"><img src="images/pymntlockicon.gif" class="loc_icon"></span>
																	</div>
																	<div class="credit_labl">
																		<label class="pan_lab" for="createdfor">Card Expiry Date<span class="rdclr">*</span></label>
																	</div>
																	<div class="credit_cd_input">
																		<div class="month_find">
																			<select class="chzn-select form-control user_country pds_slct frm-field required" name="faculty">
																		        <option selected>--month--</option>
																		        <option value="AC">20</option>
																		        <option value="AD">19</option>
																		        <option value="AD">18</option>
																			</select>
																		</div>
																		<div class="month_find">
																			<select class="chzn-select form-control user_country pds_slct frm-field required" name="faculty">
																		        <option selected>Year</option>
																		        <option value="AC">20</option>
																		        <option value="AD">19</option>
																		        <option value="AD">18</option>
																			</select>
																		</div>
																	</div>
																	<div class="credit_labl">
																		<label class="pan_lab" for="createdfor">Card Verification Number (CVV)<span class="rdclr">*</span></label>
																	</div>
																	<div class="credit_cd_input">
																		<input type="text" class="form-control ccv_inp" maxlength="19">
																		<span class="lock_icon"><img src="images/pymntcvvicon.gif" class="img-fluid loc_icon1"></span>
																	</div>
																	<div class="credit_cd_input">
																		<a href="#" class="btn"><button type="button" class="pay_btn">Pay Securely</button></a>
																	</div>
																	<div class="credit_cd_input">
																		<a href="#" class="terms">Terms and Conditions</a>
																	</div>
																</div>
														</form>
														<form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
															<div class="credit_cd">
																<div class="row">
																	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
																		<div class="banks">
																			<img src="images/canbank.png" class="img-fluid bank_icon1">
																		</div>
																	</div>
																	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
																		<div class="banks">
																			<img src="images/indoverseabank.png" class="img-fluid bank_icon1">
																		</div>
																	</div>
																	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
																		<div class="banks">
																			<img src="images/pajbank.jpg" class="img-fluid bank_icon1">
																		</div>
																	</div>
																	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
																		<div class="banks">
																			<img src="images/paynt_citybank.png" class="img-fluid bank_icon1">
																		</div>
																	</div>
																	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
																		<div class="banks">
																			<img src="images/payntsbi.png" class="bank_icon1 img-fluid">
																		</div>
																	</div>
																	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
																		<div class="banks">
																			<img src="images/unionbank.png" class="img-fluid bank_icon1">
																		</div>
																	</div>
																</div>
																<div class="credit_cd_input">
																	<a href="#" class="btn"><button type="button" class="pay_btn">Pay Securely</button></a>
																</div>
																<div class="credit_cd_input">
																	<a href="#" class="terms">Terms and Conditions</a>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
				               			 </div>
			               			 </div>
				                <!-- train section -->
				                <div class="bhoechie-tab-content">
				                  	<div class="creditSwitch_Image text-left">
				                		<p class="tab_third">Pay Using Net Banking</p>
									</div>
									 <hr class="tab_hrs">
									 <div class="emi-header"><h1>Popular Banks</h1></div>
									 <div class="bank_imgs">
									 	<div class="credit_cd sub_tabs">
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
													<div class="banks">
														<img src="images/canbank.png" class="img-fluid bank_icon1">
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
													<div class="banks">
														<img src="images/indoverseabank.png" class="img-fluid bank_icon1">
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
													<div class="banks">
														<img src="images/pajbank.jpg" class="img-fluid bank_icon1">
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
													<div class="banks">
														<img src="images/paynt_citybank.png" class="img-fluid bank_icon1">
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
													<div class="banks">
														<img src="images/payntsbi.png" class="bank_icon1 img-fluid">
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
													<div class="banks">
														<img src="images/unionbank.png" class="img-fluid bank_icon1">
													</div>
												</div>
											</div>
									 </div>
									 <div class="emi-header"><h1>(or) Choose your bank</h1></div>
									 <div class="credit_cd_input sub-tap">
											<div class="state_find">
												<select class="chzn-select form-control user_bnk pds_slct frm-field required" name="faculty">
											        <option selected>indian bank</option>
											        <option value="AC">TAMILNADU</option>
											        <option value="AD">TAMILNADU</option>
											        <option value="AD">TAMILNADU</option>
												</select>
											</div>
										</div>
											<div class="credit_cd_input">
												<a href="#" class="btn"><button type="button" class="pay_btn">Pay Securely</button></a>
											</div>
											<div class="credit_cd_input">
												<a href="#" class="terms">Terms and Conditions</a>
											</div>
										</div>
	                			  </div>
				    
				                <!-- hotel search -->
				                <div class="bhoechie-tab-content">
				                	<div class="creditSwitch_Image text-left">
				                		<p class="tab_third">Pay at your Doorstep</p>
									</div>
									 <hr class="tab_hrs">
									 <div class="creditSwitch_Image subs">
				                		<p class="tab_third_subs">Place an online request or call 1-800-3000-4466 (Toll Free) to have your payment collected at your doorstep by our representative free of cost within 24 hours. We accept cash/cheque/demand draft/debit card/credit card</p>
				                		<p class="tab_third_sub1">You have already requested for doorstep collection.</p>
				                		<p class="tab_third_sub1">Your request no is 56215124..</p>
				                		<p class="tab_third_sub1">We will be contacting you soon to collect the payment.</p>
									</div>
				                </div>
				                <div class="bhoechie-tab-content">
				                	<div class="creditSwitch_Image text-left">
				                		<p class="tab_third">Pay at your Marrynowmatrimony Offices</p>
									</div>
									 <hr class="tab_hrs">
									  <div class="creditSwitch_Image subs">
				                		<p class="tab_third_subs">Visit any of our <a href="#" class="site">marrynow.com</a> offices located in various cities in India and pay by Cheque / DD in favor of "Marrynowmatrimony.com".</p>
				                		<div class="credit_labl">
											<label class="pan_lab" for="createdfor">Selwct State<span class="rdclr">*</span></label>
										</div>
				                		<div class="credit_cd_input">
											<div class="state_find">
												<select class="chzn-select form-control user_stt pds_slct frm-field required" name="faculty">
											        <option selected>Andrapradesh</option>
											        <option value="AC">TAMILNADU</option>
											        <option value="AD">TAMILNADU</option>
											        <option value="AD">TAMILNADU</option>
												</select>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<p class="hydra">HYDERABAD</p>
												<p class="hydra">2nd Floor, Usha Kiran Complex,</p>
												<p class="hydra">Above HDFC bank, Near Paradise Circle,</p>
												<p class="hydra">Secunderabad - 500003.</p>
											</div>
											<div class="ccoms_deta_sub">
												<p class="hydra"><a href="#" class="hydra_a">Telephone : 040 - 60603333 / 60600291.</a></p>
												<p class="hydra"><a href="#" class="hydra_a">Email : hyderabad@Marrynowmatrimony.com</a></p>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<p class="hydra">Hyderabad - Malakpet</p>
											</div>
											<div class="ccoms_deta_sub">
												<p class="hydra"><a href="#" class="hydra_a">Telephone : Telephone : 040 - 31003068</a></p>
												<p class="hydra"><a href="#" class="hydra_a">Email : hyderabad@Marrynowmatrimony.com</a></p>
											</div>
										</div>
										<div class="text-right mores">
											<a href="#" class="more text-right">more >></a>
										</div>
									</div>
				                </div>
				                <div class="bhoechie-tab-content">
				                	<div class="creditSwitch_Image text-left">
				                		<p class="tab_third">Transfer funds electronically using RTGS / NEFT.</p>
									</div>
									 <hr class="tab_hrs">
				                	<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<p class="hydra"><img src="images/pymnthdfclogo.gif" class="img-fluid loc_icon1"></p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">IFSC Code</td>
															<td class="pays_td">: SBIN0005797</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<p class="hydra"><img src="images/pymnticici.png" class="img-fluid loc_icon1"></p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">IFSC Code</td>
															<td class="pays_td">: SBIN0005797</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<p class="hydra"><img src="images/pymntaxis.png" class="img-fluid loc_icon1"></p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">IFSC Code</td>
															<td class="pays_td">: SBIN0005797</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<p class="hydra"><img src="images/payfederalbankicon.gif" class="img-fluid loc_icon1"></p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">IFSC Code</td>
															<td class="pays_td">: SBIN0005797</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
				                </div> 
				                <div class="bhoechie-tab-content">
				                	<div class="creditSwitch_Image text-left">
				                		<p class="tab_third">Pay at your Bank Branches</p>
									</div>
									 <hr class="tab_hrs">
									 <div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<img src="images/pymnthdfclogo.gif" class="img-fluid loc_icon1"><p class="hydra">
												You can now also make payments through HDFC Bank</p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">Pay to A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
													</tbody>
												</table>
														<a href="#" class="pay_click">Click here to find a branch nearest to you.</a>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<img src="images/pymnticici.png" class="img-fluid loc_icon1"><p class="hydra">
												You can now also make payments through HDFC Bank</p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">Pay to A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
													</tbody>
												</table>
														<a href="#" class="pay_click">Click here to find a branch nearest to you.</a>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<img src="images/pymntaxis.png" class="img-fluid loc_icon1"><p class="hydra">
												You can now also make payments through HDFC Bank</p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">Pay to A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
													</tbody>
												</table>
														<a href="#" class="pay_click">Click here to find a branch nearest to you.</a>
											</div>
										</div>
										<div class="ccoms_deta">
											<div class="ccoms_deta_subs">
												<img src="images/payfederalbankicon.gif" class="img-fluid loc_icon1"><p class="hydra">
												You can now also make payments through HDFC Bank</p>
											</div>
											<div class="ccoms_deta_sub">
												<table class="table-responsive pays">
													<tbody>
														<tr class="pays_rtr">
															<td class="pays_td">Pay to A/C No</td>
															<td class="pays_td">: 30999499021</td>
														</tr>
														<tr class="pays_rtr">
															<td class="pays_td">A/C Name</td>
															<td class="pays_td">: Matrimony.com Ltd</td>
														</tr>
													</tbody>
												</table>
														<a href="#" class="pay_click">Click here to find a branch nearest to you.</a>
											</div>
										</div>
				               		 </div>
			            		</div>
		            		</div>
		            	</div>
		            	</div>
		            	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bhoec">
		            		<div class="pay_opt_head"><p class="pay_opt_head">Summary</p></div>
		            		<div class="common_summary">
		            			<div class="common_summary_sub">
		            				<p class="mem">Membership</p>
		            				<table class="table-responsive memship">
		            					<tbody>
		            						<tr class="mem_tr">
		            							<td class="mem_td">Diamond 3 Months</td>
		            							<td class="mem_td"><strike>Rs. 5200</strike></td>
		            						</tr>
		            						<tr class="mem_tr">
		            							<td class="mem_td">Discounted Price</td>
		            							<td class="mem_td"> Rs. 4700</td>
		            						</tr>
		            					</tbody>
		            				</table>
		            			</div>
		            			<hr class="sumr_hr">
		            			<div class="common_summary_sub">
            						<p class="mem">Special Checkout Offer</p>
		            			</div>
		            			<hr class="sumr_hr">
		            			<div class="common_summary_sub">
			            			<div class="special_checkout_addon">
										<input type="checkbox" class="check-box-1 checked="checked">
										<input type="hidden" value="349" name="checkout_ph_amt_2">&nbsp; AstroMatch (25 Matches)  <span class="posrelative"><div class="tooltip cardno" style="left:0px;top:0px;">Astro Match is a special horoscope feature that will help you find your most compatible match.<span class="arr"></span></div></span>  Rs. 349 
									</div>
			            		</div>
			            		<hr class="sumr_hr">
			            		<div class="common_summary_sub">
            						<p class="mem big_wortd_med">Total Savings worth Rs. 500</p>
		            			</div>
		            			<hr class="sumr_hr">
		            			<div class="common_summary_sub">
            						<p class="mem big_wortd">Your Total : Rs. 5049</p>
		            			</div>
		            		</div>
	            		</div>
		       	 	</div>
	        	</div>
        	</div>
	</section>
<!-- payment option-->
<!-- middle_foot_img -->
<section class="assistance">
	<hr class="tab_hr">
	<div class="pads_bord_pay">
		<div class="container">
			<div class="assistance_head">
				<p class="head_ass">Need Assistance in making payment?</p>
			</div>
			<div class="assistance_main">
				<div class="assistance_sub">
					<div class="row">
						<div class="col-md-2">
							<div class="assi_image0div">
								<img src="images/mail.png" class="img-fluid ass_help" alt="noimg">
							</div>
						</div>
						<div class="col-md-10">
							<span class="ass_cols" style="font:bold 12px arial;display:block;padding:0 0px 7px 0;">Enter your contact number here,<br> we will call you back</span>
							<div class="form-group no_bts">
							  <input type="text" placeholder="+91-xxx xxx xxxx" class="form-control assi_fom" id="usr">
							  <input type="submit" class="form-control assi_submit" >
							  <p class="para_s">Mention STD code for landline number
</p>
							</div>
						</div>
					</div>
				</div>
				<div class="assi_or">
					<p class="or_ass">OR</p>
				</div>
				<div class="assistance_sub">
					<div class="row">
						<div class="col-md-2">
							<div class="assi_image0div">
								<img src="images/phonecall.png" class="img-fluid ass_help" alt="noimg">
							</div>
						</div>
						<div class="col-md-10">
							<div class="insideasss">
								<span class="ass_cols" style="display:block;padding:0 0px 7px 0;">Call us at</span>
								   <p class="para_sds">044-42970105 / 1 800 3000 4466 (Toll Free)</p>
								   <p class="para_s">24/7 Payment Assistance</p>
								</div>
							</div>
						</div>
					</div>
					<div class="assi_or">
						<p class="or_ass">OR</p>
					</div>
					<div class="assistance_sub">
						<div class="row">
							<div class="col-md-2">
								<div class="assi_image0div">
									<img src="images/chat.png" class="img-fluid ass_help" alt="noimg">
								</div>
							</div>
							<div class="col-md-10">
								<div class="insideasss">
									<span class="ass_cols" style="display:block;padding:0 0px 7px 0;">Chat for Payment Assistance</span>
									  <p class="para_s"><a class="a_click" href="#">Click</a> here for Payment Assistance</p>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- middle_foot_img -->
<!-- foot_img_pay -->
<section class="pay_foot">
<hr class="tab_hr">
	<div class="pads_bord_pay">
		<div class="container">
			<div class="image_foot_pay">
				<img src="images/pay_footer.png" class="img-fluid pay_help" alt="noimg">
			</div>
		</div>
	</div>
<hr class="tab_hr">
</section>

<section class="skip_page">
  <div class="skip_page">
    <a href="profile" class="skip_a">skip this page<i class="fas fa-arrow-right skip_arrow"></i></a>
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
<!-- <a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/wp1.png" class="img-fluid wp_res"></button>
<script src="{{url('js/register.js')}}"></script> -->
<script type='text/javascript' src='js/tab.js'></script>
<script type="text/javascript">
	$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
<script type="text/javascript">
   jQuery(document).ready(function($) {

                //Default Action
                $(".tab_contents").hide(); //Hide all content
                $("ul.tabss li:first").addClass("active").show().find("label input:radio").attr("checked",""); //Activate first tab
                $(".tab_contents:first").show(); //Show first tab content

                //On Click Event
                $("ul.tabss li").click(function() {

                    //$("ul.tabss li").removeClass("active"); //Remove any "active" class
                    //$(this).addClass("active"); //Add "active" class to selected tab
                    //$(".tab_contents").hide(); //Hide all tab content
                    //var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
                    //$(activeTab).fadeIn(); //Fade in the active content
                    //return false;
                    $("ul.tabss li").removeClass("active"); //Remove any "active" class
                    $("ul.tabss li").find("label input:radio").attr("checked","");
                    $(this).addClass("active").find("label input:radio").attr("checked","checked");
                    $(".tab_contents").hide(); //Hide all tab content
                    var activeTab = $(this).find("label input:radio").val(); //Find the href attribute value to identify the active tab + content
                    $('#' + activeTab).fadeIn(); //Fade in the active ID content
                    return false;

                });

            });

/*pannel*/

   $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>
</body>
</html>