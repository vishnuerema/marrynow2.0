<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<!--meta data-->
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
<script src="js/choosedropdown.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/owl-carousel.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type='text/javascript' src='js/disable_page.js'></script>
<script type='text/javascript' src='js/marrynow.js'></script>
<script type='text/javascript' src='js/marrynowreg_valid.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js'></script>
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
  <header class="heads">
    <body >
  <!--  <div id="overlay" style="position:fixed;left:0;right:0;bottom:0;top:0;display:flex;justify-content:center;aliggn-items:center;z-index:1999;background:rgba(0, 0, 0, 0.5)">
    <img id="" src="svg/load.svg">
    </div> -->

    <div class="container">
      <div class="logo sm_block">
          <a class="navbar-brand" href="/"><img src="images/5.png" class="img-fluid logo1" alt="noimg"></a>
        </div>
      <nav class="navbar navbar-expand-sm navbar-light bg-faded wow bounceInDown no_padds_reg" data-wow-delay="0.1s">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-contents" aria-controls="nav-contents" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

          <!-- Brand -->
        <div class="logo sm_none">
          <a class="navbar-brand" href="/"><img src="images/5.png" class="img-fluid reg_logo" alt="noimg"></a>
        </div>

        <!-- Links -->
         <div class="collapse navbar-collapse reg_menu sub" id="nav-contents"> 
          <ul class="navbar-nav reg_ul">
           <!--  <li class="nav-item reg2_wids">
              <div class="menu_ssw">
                <span class="fa_help"><img src="images/24_hours.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="reg_help"><a href="livehelp" class="hlp">Live Help</a></span>
              </div>
            </li> -->
            <li class="nav-item reg2_wids1">
              <div class="menu_ssw">
                <span class="fa_help"><img src="images/c.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="reg_help"><a href="contact" class="hlp">Contact Us</a></span>
              </div>
            </li>
            <li class="nav-item reg2_wids2">
              <div class="menu_ssw">
                <span class="fa_help"><img src="images/support.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="reg_help"><a href="tel:9629466278" class="hlp">Helpline : <span class="num">9629466278</span></a></span>
              </div>
            </li> 
            <li class="nav-item reg2_wids3">
              <div class="menu_ssw">
                <span style="cursor:pointer" onclick='logout()'class="reg_help"><a  class="hlp">logout</a></span>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
<!-- header -->
    <hr class="menu_bord wow lightSpeedIn">
<!-- horoscope uplpad -->
<section class="edit_profs">
    <section class="pic_upload">
    <div class="container">
      <div class="top_words">
        <p class="top_wordssa">
          Please Upload your <span class="red">Horoscope</span> Photo 
        </p>
        <div class="full_blue greys_clr">
          <div class="top_word_blue green_back">
            <p class="blue_head">Show Horoscope Photo to People You want Or Interested In</p>
          </div>
          <div class="bottom_word_blue">
            <div class="Img_blue">
              <img src="images/horoscope.jpg" class=" profile_horoscope img-fluid blue_help" alt="noimg">
              <p class="allowd_imgs">jpg/png/gif Formate only</p>
              <p class="allowd_imgs">(Max-size :10 mb)</p>
            </div>
            <div class="Img_blue_pic-upload">
                <form enctype="multipart/form-data" id="upld_horos_form" role="form">
              <input name="logo" id='logo' type="file" class="upload_btn" accept=".png, .jpg, .jpeg">
              <div id="uploadshoroscope" style="text-align:center;width:60%;margin:auto;display:none"> <img style="width: 50px;"  src="images/bx_loader.gif" /> </div>
            </form>
            <button class="img_btn_click"onclick="uploadhoroscope()" >submit</button>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</section>
<!-- horoscope uplpad -->
<section class="skip_page">
  <div class="skip_page">
    <a href="secondary_registration" class="skip_a">skip this page<i class="fas fa-arrow-right skip_arrow"></i></a>
  </div>
</section>

 @include('footer')
<!-- footer -->

<a  style="margin-bottom:35px" id="back2Top" title="Back to top" href="#">&#10148;</a>
  <button  onclick="topFunction()" id="myBtn" title="Go to top"><img   src="images/wp1.png" class="img-fluid wp_res"></button>
  <script src="{{url('js/register.js')}}"></script>

<script>
function uploadhoroscope(){
$.ajax({
      url:'url/horoscope_uploadurl',
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data:new FormData($("#upld_horos_form")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      beforeSend: function() {
       $("#uploadshoroscope").css('display','block');
       },
      success:function(resp){
console.log(resp.hash_name);
$('.profile_horoscope').attr("src","imgs/"+resp);
$("#uploadstath").css('display','none');
alertify.confirm('Image Uploaded Sucessfully', 'Click ok to Proceed or Cancel to Change Your Image', function(){ window.location.href = "secondary_registration";}
                , function(){ $("#uploadshoroscope").css('display','none'); alertify.error('You can Change Your Image')});


      },
    });
}
</script>

  </body>
</html>