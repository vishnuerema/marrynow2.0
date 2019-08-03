<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script><script src="../../js/admin_marrynow.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.rtl.min.css"/>

<style>
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh7USSwiPHA.ttf) format('truetype');
}
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjx4wWw.ttf) format('truetype');
}
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh6UVSwiPHA.ttf) format('truetype');
}
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  /*background: #f5f5f5;*/
  padding: 0;
  margin: 0;
  font-family: 'Lato', sans-serif;
}
i.fa {
  font-size: 16px;
}
p {
  font-size: 16px;
  line-height: 1.42857143;
}
.header {
  position: fixed;
  z-index: 10;
  top: 0;
  left: 0;
  background: #214475;
  width: 100%;
  height: 50px;
  line-height: 50px;
  color: #fff;
}
.header .logo {
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size:20px;
}
.header #menu-action {
  display: block;
  float: left;
  width: 60px;
  height: 50px;
  line-height: 50px;
  margin-right: 15px;
  color: #fff;
  text-decoration: none;
  text-align: center;
  background: rgba(0, 0, 0, 0.15);
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 1px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.header #menu-action i {
  display: inline-block;
  margin: 0 5px;
}
.header #menu-action span {
  width: 0px;
  display: none;
  overflow: hidden;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.header #menu-action:hover {
  background: rgba(0, 0, 0, 0.25);
}
.header #menu-action.active {
  width: 250px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.header #menu-action.active span {
  display: inline;
  width: auto;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.sidebar {
  position: fixed;
  z-index: 10;
  left: 0;
  top: 50px;
  height: 100%;
  width: 60px;
  background: #fff;
  border-right: 1px solid #ddd;
  text-align: center;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.sidebar:hover,
.sidebar.active,
.sidebar.hovered {
  width: 250px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.sidebar ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.sidebar ul li {
  display: block;
}
.sidebar ul li a {
  display: block;
  position: relative;
  white-space: nowrap;
  overflow: hidden;
  border-bottom: 1px solid #ddd;
  color: #444;
  text-align: left;
}
.sidebar ul li a i {
  display: inline-block;
  width: 60px;
  height: 60px;
  line-height: 60px;
  text-align: center;
  -webkit-animation-duration: 0.7s;
  -moz-animation-duration: 0.7s;
  -o-animation-duration: 0.7s;
  animation-duration: 0.7s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}
.sidebar ul li a span {
  display: inline-block;
  height: 60px;
  line-height: 60px;
}
.sidebar ul li a:hover {
  background-color: #eee;
}
.sidebar ul li a:hover i {
  -webkit-animation-name: swing;
  -moz-animation-name: swing;
  -o-animation-name: swing;
  animation-name: swing;
}
.custom_jumpo{
padding:15px !important;
}
.main {

  position: relative;
  display: block;
  top: 75px;
  left: 0;
  padding-top: 0px;
  padding-left: 75px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.main.active {
  padding-left: 275px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.main .jumbotron {
  background-color: #fff;
  /*padding: 0px !important;*/
  border: 1px solid #dfe8f1;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.main .jumbotron h1 {
  font-size: 24px;
  margin: 0;
  padding: 0;
  margin-bottom: 12px;
}
@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
}
@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    -ms-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    -ms-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    -ms-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    -ms-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    -ms-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
}
.swing {
  -webkit-transform-origin: top center;
  -ms-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing;
}

/*custom*/
.lbl_clr{
	color:#1b6a99;
}
.data_clr{
	color:#492c2c;
	
}

.del_ico_clr{
	color:#9b3737;
	cursor:pointer;
}
.del_ico_clr:hover{
	color:#870909;
	cursor:pointer;

}
.vw_ico_clr{
	color:#857fd8;
	cursor:pointer;
}
.vw_ico_clr:hover{
	color:#0e5563;
	cursor:pointer;
}
.ky_ico_clr{
	color:#51750e;
	cursor:pointer;
}
.ky_ico_clr:hover{
	color:#1a3a20;
	cursor:pointer;
}

.modal-dialog {
    width: 1200px;
    margin: 30px auto;
}

/*html {
  min-height:100%;
  background:linear-gradient(0deg,rgba(0, 0, 0, 0.7),rgba(0, 0, 0,0.9)),url(../../images/admin_background1.jpg);
  background-size:cover;
  }*/

.close {
  opacity: 0.4;
  position: absolute;
  right: 10px;
  top: 5px;
  z-index: 1;
}



</style>
</head>
<body style="background-color:#eee;">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Marry Now Admin</title>
<link rel="icon" href="../../images/favicon.png">
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<div class="header">
  <a href="#" id="menu-action">
    <!-- <i class="fa fa-bars"> --><i class="fa fa-heart-o" aria-hidden="true"></i>
</i>
    <span>Close</span>
  </a>
  <a href="home"><div class="logo" style="color:#fff">
 Marrynow Admin Pannel
  </div></a>
</div>
<div class="sidebar">
  <ul>
    <li onclick="registeredUsers()" ><a><i class="fa fa-users" aria-hidden="true"></i><span>Registered Users</span></a></li>
    <li onclick="pay_history()" ><a href="#"><i class="fa fa-money" aria-hidden="true"></i><span>Paid Users</span></a></li>
    <li onclick="adminSearch()"><a href="#"><i class="fa fa-search" aria-hidden="true"></i><span>Search Profile</span></a></li>
    <li onclick="admin_reg_shop()"><a href="#"><i class="fa fa-shopping-cart"></i><span>Shop Register</span></a></li>
    <li onclick="admin_reg_manager()"><a href="#"><i class="fa fa-user"></i><span>Manager Register</span></a></li>
    <li onclick="admin_shop_payment()"><a href="#"><i class="fa fa-money"></i><span>Shop Payment</span></a></li>
    <li onclick="admin_manager_payment()"><a href="#"><i class="fa fa-credit-card""></i><span>Manager Payment</span></a></li>
    <li onclick="logout()"><a href="#"></i><span>LogOut</span></a></li>
</div>

<section>
<div  id="registered-users">
    <section class="dashboard_home" style="margin-top: 80px;">
      <div class="container">
          <div class="dashboard_home_common">
            <div class="dashboard_home_head">
             Dashboard
            </div>
            <div class="dashboard_home_comds">
              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="dashboard_inside1"  data-toggle="modal" data-target="#exampleModalCenter11">
                        <div class="dashboard_inside2">
                          Members Yesterday
                        </div>
                        <div class="dashboard_inside3">
                      {{$memYdy}}
                        </div>
                    </div>
                      <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter11Title" aria-hidden="true">
                    <div class="modal-dialog adjusmodl modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="total_mem_head text-center">Yesterday Member Details</div>
                           <div class="ttl_mems_cmn">
                             @foreach($memYsday as $mem_Ysterday)
                             <div class="ttl_mems_sub">
                                 <div class="ttl_mems_cols">
                                   <div class="mati_ttl">Matri Id :</div>
                                   <div class="mati_ttl_1">{{$mem_Ysterday->user_matri_id}}</div>  
                                 </div>
                                 <div class="ttl_mems_cols">
                                     <div class="mati_ttl">User Name : </div><div class="mati_ttl_1">{{$mem_Ysterday->user_name}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                     <div class="mati_ttl">Gender:</div> <div class="mati_ttl_1">{{$mem_Ysterday->user_gender}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                      <div class="mati_ttl">Email Id:</div><div class="mati_ttl_1">{{$mem_Ysterday->user_email}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                      <div class="mati_ttl">Phone:</div><div class="mati_ttl_1">{{$mem_Ysterday->user_mobile}}</div>
                                 </div>
                             </div>
                             @endforeach
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="dashboard_inside1 orange">
                        <div class="dashboard_inside2 orange">
                          Total Members
                        </div>
                        <div class="dashboard_inside3 orange">
                          {{$total_members_count}}
                        </div>
                    </div>
                </div>
                  
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="dashboard_inside1 reds" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="dashboard_inside2 reds">
                          Members Today
                        </div>
                        <div class="dashboard_inside3 reds">
                      {{$memTdy}}
                        </div>
                    </div>
                    <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog adjusmodl modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="total_mem_head text-center">Today Member Details</div>
                           <div class="ttl_mems_cmn">
                             @foreach($memToday as $membr_today)
                             <div class="ttl_mems_sub">
                                 <div class="ttl_mems_cols">
                                   <div class="mati_ttl">Matri Id :</div>
                                   <div class="mati_ttl_1">{{$membr_today->user_matri_id}}</div>  
                                 </div>
                                 <div class="ttl_mems_cols">
                                     <div class="mati_ttl">User Name : </div><div class="mati_ttl_1">{{$membr_today->user_name}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                     <div class="mati_ttl">Gender:</div> <div class="mati_ttl_1">{{$membr_today->user_gender}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                      <div class="mati_ttl">Email Id:</div><div class="mati_ttl_1">{{$membr_today->user_email}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                      <div class="mati_ttl">Phone:</div><div class="mati_ttl_1">{{$membr_today->user_mobile}}</div>
                                 </div>
                             </div>
                             @endforeach
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="dashboard_inside1 pink">
                        <div class="dashboard_inside2 pink">
                          Total Male Members
                        </div>
                        <div class="dashboard_inside3 pink">
                      {{$male_members_count}}
                        </div>
                    </div>
                 </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="dashboard_inside1 blu">
                        <div class="dashboard_inside2 blu">
                          Total Female Members
                        </div>
                        <div class="dashboard_inside3 blu">
                      {{$female_members_count}}
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="dashboard_inside1 grey_gree">
                        <div class="dashboard_inside2 grey_gree">
                          Total Unpaid Members
                        </div>
                        <div class="dashboard_inside3 grey_gree">
                      {{$total_unpaid_count}}
                        </div>
                    </div>
                 </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="dashboard_inside1 nwes">
                        <div class="dashboard_inside2 nwes">
                          Total Paid Members
                        </div>
                        <div class="dashboard_inside3 nwes">
                      {{$total_paid_count}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="dashboard_inside1 nws" data-toggle="modal" data-target="#exampleModalCenter12">
                        <div class="dashboard_inside2 nws">
                          Paid Today
                        </div>
                        <div class="dashboard_inside3 nws">
                           {{$cntPayTdy}}
                        </div>
                    </div>
                    <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter12Title" aria-hidden="true">
                    <div class="modal-dialog adjusmodl modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="total_mem_head text-center">Today Paid Member Details</div>
                           <div class="ttl_mems_cmn">
                             @foreach($paidToday as $paid_mem_Today)
                             <div class="ttl_mems_sub">
                                 <div class="ttl_mems_cols">
                                   <div class="mati_ttl">Matri Id :</div>
                                   <div class="mati_ttl_1">{{$paid_mem_Today->user_matri_id}}</div>  
                                 </div>
                                 <div class="ttl_mems_cols">
                                     <div class="mati_ttl">User Name : </div><div class="mati_ttl_1">{{$paid_mem_Today->user_name}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                     <div class="mati_ttl">Gender:</div> <div class="mati_ttl_1">{{$paid_mem_Today->user_gender}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                      <div class="mati_ttl">Email Id:</div><div class="mati_ttl_1">{{$paid_mem_Today->user_email}}</div>
                                 </div>
                                 <div class="ttl_mems_cols">
                                      <div class="mati_ttl">Phone:</div><div class="mati_ttl_1">{{$paid_mem_Today->user_mobile}}</div>
                                 </div>
                             </div>
                             @endforeach
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
    </section>
</div>
</section>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $('#menu-action').click(function() {
  $('.sidebar').toggleClass('active');
  $('.main').toggleClass('active');
  $(this).toggleClass('active');

  if ($('.sidebar').hasClass('active')) {
    $(this).find('i').addClass('fa-close');
    $(this).find('i').removeClass('fa-bars');
  } else {
    $(this).find('i').addClass('fa-bars');
    $(this).find('i').removeClass('fa-close');
  }
});


// Add hover feedback on menu
$('#menu-action').hover(function() {
    $('.sidebar').toggleClass('hovered');
});
function registeredUsers(){
/*
     $.ajax({
          type: "get",
          url: "adminurl/regusers",
          cache: false,
          success: function(data){*/
             $("#registered-users").load("registered-users");
            
            // window.location.href='registered-users';
        /*  }
        });*/
    }
    function pay_history(){

             $("#registered-users").load("payment_history");
         
    } 
    function adminSearch(){

             $("#registered-users").load("admin_search");
         
    }

    function admin_reg_shop(){

             $("#registered-users").load("admin_shop_reg");
         
    } 

    function admin_reg_manager(){

             $("#registered-users").load("admin_manager_reg");
         
    }
    function admin_shop_payment(){

             $("#registered-users").load("admin_shop_payment");
         
    }
    function admin_manager_payment(){

          	 $("#registered-users").load("admin_manager_payment");
         
    }
     $(document).ready(function() {
   // Open active tab based on button clicked
    $('.btn-modal').on('click', function() {
      var switchTab = $(this).data('tab');   
      activaTab(switchTab);
      function activaTab(switchTab) {
          $('.nav-tabs a[href="#' + switchTab + '"]').tab('show');
      };
    });
   
   // Toggle New/Existing Customer
    var custType = $('#customer-type'),
        newCust = $('.new-customer'),
        existCust = $('.existing-customer'),
        createAccBtn = $('.create-account'),
        verifyAccBtn = $('.verify-account');
   
    custType.val($(this).is(':checked'))
            .change(function() {
    if ($(this).is(':checked')) {
          newCust.fadeToggle(400, function() { // Hide Full form when checked
            existCust.fadeToggle(500); //Display Small form when checked
            createAccBtn.toggleClass('hide');
            verifyAccBtn.toggleClass('hide');
          });
          
        } else {
          existCust.fadeToggle(400, function() { //Hide Small form when unchecked
            newCust.fadeToggle(500); //Display Full form when unchecked
            createAccBtn.toggleClass('hide');
            verifyAccBtn.toggleClass('hide');
          });
          
        }
   });
  });

function adminDelUser(cid){
    alertify.confirm('Are you sure want delete', function(){
      $.ajax({
          type: "post",
          url: "adminurl/adin_del_users",
          cache: false,
           data:{
                'cid':cid
          },
          success: function(data){

            $('.cmpstrt'+cid).css('background-color', 'red');
            $('.comp'+cid).delay(1000).fadeOut(); 
          }
        });

     }
                , function(){  alertify.error('You cancelled the operation')});
          }


function pwdChange(cid){
alertify.prompt( 'PASSWORD CHANGE', 'Enter a Password', ''
       , function(evt, value) {
		if(value==""){
				alertify.error('Please Enter a Password')
				return false;
			}
			else{
				usrPwdChng(cid,value)
			}
  			}, function() {});           
}

function usrPwdChng(cid,value){
    $.ajax({
          type: "post",
          url: "adminurl/admin_usr_pwdchange",
           data:{
             'cid':cid,'pass':value
          },
          cache: false,
          success: function(data){
 			  alert('Password Changed')    
 		}
        });
    }
       



function viewProf(cid){
   $('.apdta').remove();
   $('.scdta').remove();
   $('.imgrep').remove();
    $.ajax({
          type: "get",
          url: "adminurl/admin_view_prof",
          data:{
            'cid':cid
          },
          cache: false,
          success: function(data){
           console.log(data);

           $('.baseDataSpc').append('<div class="container apdta"><div class="row"><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr">PROFILE NAME</label><br><label class="data_clr">'+data.basic[0].profile_name+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE GENDER</label><span></span><br><label class="data_clr"> '+data.basic[0].profile_gender+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE DOB</label><span></span><br><label class="data_clr"> '+data.basic[0].profile_dob+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE EDUCATION</label><span></span><br><label class="data_clr" > '+data.basic[0].prof_user_edu+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE EMPLOYED</label><span></span><br><label class="data_clr" > '+data.basic[0].prof_user_employedin+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PARENT PHONE</label><span></span><br><label class="data_clr" >'+data.basic[0].prof_user_parent_continfo+'</label></div></div></div>')
                 $('.imgspc').append('<br><div style="text-align:center;border-radius:150px;"><img style="border-radius: 130px;;width:150px;height:150px" class="imgrep"  src="../../imgs/'+data.basic[0].profile_image+'" ></div>');
            
           $('.secDataSpc').append('<div class="container scdta"><div class="row"><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr">PROFILE NAME</label><br><label class="data_clr">'+data.sec[0].profile_name+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE GENDER</label><span></span><br><label class="data_clr"> '+data.sec[0].profile_gender+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE DOB</label><span></span><br><label class="data_clr"> '+data.sec[0].profile_dob+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE EDUCATION</label><span></span><br><label class="data_clr" > '+data.sec[0].prof_user_edu+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PROFILE EMPLOYED</label><span></span><br><label class="data_clr" > '+data.sec[0].prof_user_employedin+'</label></div><div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px"><label class="lbl_clr" >PARENT PHONE</label><span></span><br><label class="data_clr" >'+data.sec[0].prof_user_parent_continfo+'</label></div></div></div>')
          }
        });
}

/*admin search phone*/
function admin_serch(){
  var select_adm_search=$('.serch_admin_slct option:selected').val();
  var inupt_adm_search=$('.srch_admin_inpt').val();

  $.ajax({
    type: "post",
    url: "adminurl/admin_search_ajx",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "select_adm_search":select_adm_search,
        "inupt_adm_search":inupt_adm_search
       },
    cache: false,
    success: function(data){
      console.log(data);

      $('.usr_id').text(data[0].profile_id);
      $('.usr_idk').text(data[0].user_id);
      $('.usr_name').text(data[0].profile_name);
      $('.usr_gender').text(data[0].profile_gender);
      $('.usr_mail').text(data[0].prof_user_email);
      $('.usr_mobile').text(data[0].user_mobile);
      $('.usr_plan_pay').text(data[0].payment_plan);
      $('.usr_education').text(data[0].education);
      $('.usr_lang').text(data[0].lang);
      $('.usr_occupation').text(data[0].occupation);
    }
  });
}
/*admin search delete profile*/
function admin_pro_dlt(){
  var delete_prof=$('.dlt_usr_idk').text();
  
  $.ajax({
    type: "post",
    url: "adminurl/admin_search_prof_delte",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "delete_prof":delete_prof
       },
    cache: false,
    success: function(data){
      console.log(data);
      alert(data)
      if(data="deleted"){
        window.location.href="home";
      }

    }
  });
}

function logout(){
   $.ajax({
    type: "post",
    url: "../../url/logout",
    data: {
       },
    cache: false,
    success: function(data){
      window.location = "../../logout_app";
    }
  });
}


  function chatHist(cid){
      $.ajax({
          type: "post",
          url: "adminurl/adminChat_hist",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           data:{
             'cid':cid
          },
          cache: false,
          success: function(data){
        

            for(var i=0; i<data.length; i++){
                for (var j=0; j<data[i].length; j++){
                $('.chat_appnd').append('<div class="common_chats"><div class="row"><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">User name</p><p class="User_name p_name">'+data[i][j].profile_name+'</p></div><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">Gender</p><p class="User_name gender">'+data[i][j].profile_gender+'</p></div><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">Mobile</p><p class="User_name p_Mobile">'+data[i][j].prof_user_parent_continfo+'</p></div><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">Country</p><p class="User_name p_Country">'+data[i][j].prof_user_citizenship+'</p></div></div></div>')

                }
             }

             for(var i=0; i<data.length; i++){
                for (var j=0; j<data[i].length; j++){
                $('.chat_appnd_secondary').append('<div class="common_chats"><div class="row"><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">Marital Status</p><p class="User_name p_name">'+data[i][j].prof_user_marial_stat+'</p></div><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">Education</p><p class="User_name gender">'+data[i][j].prof_user_edu+'</p></div><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">Email</p><p class="User_name p_Mobile">'+data[i][j].prof_user_email+'</p></div><div class="col-md-2 col-sm-2 col-lg-2 col-xs-12"><p class="uusname">Birth State</p><p class="User_name p_Country">'+data[i][j].prof_user_birthstate+'</p></div></div></div>')

                }
             }
    }
  });
}

/*shop registration*/
      


function chkShopProfCnt(cid){
  $.ajax({
           type:"post",
           url: "adminurl/shp_cnt_chk",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "cid":cid
             },
          cache: false,
          success: function(data){
            alert(data+ "profiles Were created By this user")
          },
          error: function() {
            alert('Nothis Was Created By this User')
         }

        });
}
</script>
</body>
</html>