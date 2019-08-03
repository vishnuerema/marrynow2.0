
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
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

<!-- fonts -->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/owl-carousel.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!-- animation -->
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" type="text/javascript"></script>
<!-- animation -->

<link href="alertify/css/alertify.css" rel="stylesheet" type="text/css" media="all" />	
<link href="alertify/css/alertify.min.css" rel="stylesheet" type="text/css" media="all" />	
<link href="alertify/css/alertify.rtl.css" rel="stylesheet" type="text/css" media="all" />	
<link href="alertify/css/alertify.rtl.min.css" rel="stylesheet" type="text/css" media="all" />	
<script type='text/javascript' src='alertify/alertify.js'></script>
<script type='text/javascript' src='alertify/alertify.min.js'></script>

<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<style type="text/css">
  .razorpay-payment-button{
    border: 1px solid #642b68;
    background-color: #642b68;
    color: #fff;
      padding: 8px;
  }
   .razorpay-payment-button:hover{
       background-color: #fff;
       color: #642b68;
   }
</style>
<!-- header -->
  <header class="heads">
    <body>
    <!-- <div id="overlay" style="position:fixed;left:0;right:0;bottom:0;top:0;display:flex;justify-content:center;aliggn-items:center;z-index:1999;background:rgba(0, 0, 0, 0.5)">
    <img id="" src="svg/load.svg">
    </div> -->

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
          <ul class="navbar-nav reg_ul pro_ul">
            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="profile" class="hlp">MY HOME</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="profile_matches" class="hlp ">MATCHES</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="payment" class="hlp active">UPGRADE</a></span>
              </div>
            </li>
           <!--  <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="#" class="hlp">HELP</a></span>
              </div>
            </li> -->
             <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span style="cursor:pointer" onclick='logout()'class="reg_help"><a  class="hlp">logout</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids extrs">
             <!-- <div class="add_icon">
          <span class="down_cart"><img src="images/addphoto_nicon.jpg" class="img-fluid reg_hpro" alt="noimg"></span>
        </div> -->
         <div class="dropdown">
        <span class="down_cart dropdown-toggle" data-toggle="dropdown"><img src="images/addphoto_nicon.jpg" class="img-fluid reg_hpro" alt="noimg"></span>
            <div class="dropdown-menu">
              <a class="dropdown-item active" style="background-color: transparent;" href="edit_profile">Edit profile</a>
              <a class="dropdown-item" href="view_profile">View profile</a>
               <a class="dropdown-item hlp">Helpline : <span class="num">9585196687</span></a>
            </div>
      </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
<!-- header -->
<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<!-- header -->
<!-- edit payment -->
<section class="payments">
  </div>
	 <div class="container">
		<div class="payment_matchss_comm">
			<div class="payment_matchss_head">
				<p class="payment_p_head">Payment Plans</p>
				<p class="payment_p_head1">An Expert Relationship Manager with a proven track record in matchmaking will search, shortlist and find the right match for you</p>
			</div>
			<div class="payment_matchss_body">
       <!--  <div class="payment_mtvss_body">
  				<div class="payment_mtvss_basic">
            <p class="basic_pay">Basic</p>
          </div>
          <div class="payment_mtvss_amt">
            <p class="basic_amt">Rs.2000</p>
          </div>
          <div class="payment_mtvss_vali">
              <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">Validity of 90 days</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">View 30 Contact Numbers</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">View Additional Profile Information</div>
          </div>
           <div class="payment_mtvss_btn">
              <button type="button" class="regs_btn">Register Now</button>
          </div>
				</div>
				<div class="payment_mtvss_body">
          <div class="payment_mtvss_basic">
            <p class="basic_pay">Standard</p>
          </div>
          <div class="payment_mtvss_amt">
            <p class="basic_amt">Rs.2500</p>
          </div>
          <div class="payment_mtvss_vali">
              <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">Validity of 180 days</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">View 60 Contact Numbers</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">View Additional Profile Information</div>
          </div>
          <div class="payment_mtvss_btn">
              <button type="button" class="regs_btn">Register Now</button>
          </div>
        </div> -->
				<div class="payment_mtvss_body">
          <div class="payment_mtvss_basic">
            <p class="basic_pay">Premium</p>
          </div>
          <div class="payment_mtvss_amt">
            <p class="basic_amt">Rs.3000</p>
          </div>
          <div class="payment_mtvss_vali">
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">Validity of 360 days</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">View 90 Contact Numbers</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">View Additional Profile Information</div>
          </div>
          <div class="payment_mtvss_btn">
              <form action="make_basic_payment" method="POST">
      <!-- Note that the amount is in paise = 50 INR -->
      <script
          src="https://checkout.razorpay.com/v1/checkout.js"
          data-key="rzp_live_lC8LEuUs8FLrSN"
          data-amount="5000"
          data-buttontext="Pay with Razorpay"
          data-name="Marrynow.in"
          data-description="marrynow payment"
          data-image="images/5.png"
          data-prefill.name="{{$usr_name[0]->user_name}}"
          data-prefill.email="{{$usr_name[0]->user_email}}"
          data-theme.color="#702775"
      ></script>
      <input type="hidden" value="Hidden Element" name="hidden">
      </form>
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
<script type="text/javascript">
  function num_display(){
    document.getElementById("hide").style.display = 'block';
  }

</script> 
<script src="{{url('js/register.js')}}"></script>
</body>
</html>