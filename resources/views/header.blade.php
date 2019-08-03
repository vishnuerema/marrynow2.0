<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
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
<!-- <link href="css/animate.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" type="text/javascript"></script> -->
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
<!-- header -->
<body>

  <header class="heads">
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
            <li class="nav-item prof_wids extrs">
             <!-- <div class="add_icon">
          <span class="down_cart"><img src="images/addphoto_nicon.jpg" class="img-fluid reg_hpro" alt="noimg"></span>
        </div> -->
         <div class="dropdown capital_user">
        <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        </button> -->
        <span class="down_cart dropdown-toggle" data-toggle="dropdown" style="cursor:pointer">Home</span>
        <div class="dropdown-menu no_pdsa">
          <a class="dropdown-item wsdi" href="edit_profile">Edit profile</a>
          <a class="dropdown-item wsdi" href="view_profile">View profile</a>
             <!-- <a class="dropdown-item" onclick="myfrnz()">My Friends</a> -->
          <a class="dropdown-item wsdi hlp">Helpline : <span class="num">9629466278</span></a>
          <a onclick="notificat()" class="dropdown-item wsdi notif">matrimony requests</a>
        </div>

        
      </div>
            </li>

            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="profile" >PROFILES</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="profile_matches">SEARCH</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="payment">UPGRADE</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="chat">CHAT BOX</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids extrs">
                 <div class="dropdown capital_user">
                <span class="down_cart dropdown-toggle" data-toggle="dropdown" style="cursor:pointer">Settings</span>
                <div class="dropdown-menu no_pdsa">
                  <a class="dropdown-item wsdi" onclick="logout()">Logout</a>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </nav>

    </div>
  </header>
  <script>
    (function(){
      var pageURL = window.location.href;
      document.querySelectorAll('.reg_menu a').forEach(function(e){
        var href = e.getAttribute('href');
        if(href != null && href != undefined && pageURL.substring(pageURL.length - href.length) == href){
          e.classList.add('active');
        }
      });
    })();

  jQuery(document).ready(function($) {  

// site preloader -- also uncomment the div in the header and the css style for #preloader

});
  </script>
<!-- header -->