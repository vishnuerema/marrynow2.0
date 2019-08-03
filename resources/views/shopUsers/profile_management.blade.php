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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- animation -->

<!-- alertify-->
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
<script type='text/javascript' src='../js/marrynow.js'></script>
<script type='text/javascript' src='../js/prflmgt_shop_user.js'></script>
<!-- datepicker -->
<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/date_style.css" rel="stylesheet">
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
<!-- datepicker -->
</head>
<!-- header -->
  <header class="heads">
    <body>
    <div class="container">
      <div class="logo sm_block">
          <a class="navbar-brand" href="#"><img src="../images/5.png" class="img-fluid logo1" alt="noimg"></a>
        </div>
      <nav class="navbar navbar-expand-sm navbar-light bg-faded wow bounceInDown no_padds_reg" data-wow-delay="0.1s">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-contents" aria-controls="nav-contents" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

          <!-- Brand -->
        <div class="logo sm_none">
          <a class="navbar-brand" href="#"><img src="../images/5.png" class="img-fluid reg_logo" alt="noimg"></a>
        </div>

        <!-- Links -->
         <div class="collapse navbar-collapse reg_menu sub" id="nav-contents"> 
          <ul class="navbar-nav reg_ul pro_ul">
            <li class="nav-item prof_wids">
              <div class="menu_ssw">
                <span class="reg_help"><a href="" class="hlp">PROFILES</a></span>
              </div>
            </li>
            <li class="nav-item prof_wids extrs">
              <div class="menu_ssw">
                <span class="reg_help shop_urs"><i class="fa fa-user shops_urs"></i>{{$shopUser[0]->user_name}}</span>
              </div>
            </li>
            <li class="nav-item prof_wids extrs">
              <div class="menu_ssw">
                <span class="reg_help"><a class="hlp" href="" > <span onclick="logout()">Logout</span></a> </span>
              </div>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  <hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
  </header>
  <section class="edit_profs">
      <div class="container">
        <div class="row">
          <div class="col-md-12"> 
            <!-- Nav tabs -->
            <div class="card shop_card">
              <ul class="nav nav-tabs shop_tab_nav" role="tablist">
                <li  role="presentation" class="shop_tab_li active"><a class="active shop_a" href="#home" aria-controls="home" role="tab" data-toggle="tab"><span>Profile Creation</span></a></li>
                <li class="shop_tab_li" role="presentation"><a href="#shopcre" aria-controls="shopcre" role="tab" data-toggle="tab"><span>Shop Creation</span></a></li>
                <li  role="presentation" class="shop_tab_li mngr"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab"><span>Payment Audit</span></a></li>
                <li class="shop_tab_li" role="presentation"><a href="#extra" aria-controls="settings" role="tab" data-toggle="tab"><span>Created Profiles</span></a></li>
                <li class="shop_tab_li" onclick="created_shoper_shop()" role="presentation"><a href="#cretshop" aria-controls="cretshop" role="tab" data-toggle="tab"><span>Created Shops</span></a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                  <div class="container">
                        <div class="row">
                          <div class="admin_reg_shop_cmn">
                            <form id="profmgntForm" class="ref_form"  >
                              <table class="table common_rg_form">
                                  <tbody>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form">Profile created By </label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                      <div class="vr_reg_rt_full">
                                        <select class="chzn-select form-control user_profCreatedBy frm-field " name="faculty">
                                              <option value="{{$userId}}" selected>{{$userId}}</option>
                                              @foreach($created_mast as $createBy_shpmgt)
                                              <option value="{{$createBy_shpmgt->name}}">{{$createBy_shpmgt->name}}</option>
                                             @endforeach
                                        </select>
                                         <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form">Login Name</label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                      <div class="vr_reg_rt_full">
                                        <input style="text-transform:lowercase" class="user_profName form-control" type="text" name="Name" placeholder=" " =""/>
                                         <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                      </div>
                                    </td>
                                  </tr>
                                   <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form">Login Password</label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                      <input class="user_pwd form-control" type="password" autocomplete="password" name="Password" placeholder=" " =""/>
                                      <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                      <p id="password_strength"></p> 
                                    </td>
                                  </tr> 
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft admin_regg_shp">
                                      <label for="first_name" class="label_vr_form">Name</label>
                                    </td>
                                    <td class="form_vr_td_rht admin_regg_shp">
                                      <div class="vr_reg_rt_full">
                                        <input  style="text-transform:lowercase" class="user_realName form-control" type="text" name="Name" placeholder=" " =""/>
                                         <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form">Gender</label>
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
                                      <label for="first_name" class="label_vr_form">Date Of Birth</label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control date user_dob" />
                                                <span class="input-group-addon">
                                                    <span><i class="fa fa-calendar-alt"></i></span>
                                                </span>
                                            </div>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form">marital Status</label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                      <div class="vr_reg_rt_full">
                                        <select class="chzn-select form-control user_maritalStatus frm-field " name="faculty">
                                              <option value="" selected>Choose one</option>
                                            @foreach($marital_status as $marit_stat_shpmgt)
                                                <option value="{{$marit_stat_shpmgt->name}}">{{$marit_stat_shpmgt->name}}</option>
                                                  @endforeach
                                        </select>
                                         <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft admin_regg_shp">
                                      <label for="first_name" class="label_vr_form">Caste</label>
                                    </td>
                                    <td class="form_vr_td_rht admin_regg_shp">
                                      <select onChange="caste_retrives()" class="chzn-select form-control user_cast user_casts frm-field " name="faculty">
                                                <option value="" selected>Choose one</option>
                                            @foreach($caste as $cast)
                                               <option value="{{$cast->caste_name}}">{{$cast->caste_name}}</option>
                                                  @endforeach
                                        </select>
                                        <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft admin_regg_shp">
                                      <label for="first_name" class="label_vr_form">Sub caste</label>
                                    </td>
                                    <td class="form_vr_td_rht admin_regg_shp">
                                      <select class="casteData form-control user_subcast user_subcasts frm-field " name="faculty" >
                                                <option  value="" selected>Choose one</option>
                                               
                                        </select>
                                        <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form"> Country</label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                      <div class="vr_reg_rt_full">
                                        <select class="chzn-select form-control user_country frm-field " name="faculty">
                                              <option value="India" selected>India</option>
                                              @foreach($country_mast as $country_shpmgt)
                                              <option value="{{$country_shpmgt->name}}">{{$country_shpmgt->name}}</option>
                                              @endforeach
                                        </select>
                                         <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form" >Phone</label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                       <input class="user_phone form-control" type="phone" name="phone" placeholder="country code not allow" maxlength="10">
                                       <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                    </td>
                                  </tr>
                                  <tr class="form_vr_tr">
                                    <td class="form_vr_td_lft">
                                      <label for="first_name" class="label_vr_form">Email</label>
                                    </td>
                                    <td class="form_vr_td_rht">
                                       <input  class="user_email form-control" type="email" name="email" placeholder=" " =""/>
                                       <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                    </td>
                                  </tr>
                                   
                                  <!-- <p class="">Already a member? <a href="#" data-toggle="modal" data-target="#myModal">Login</a></p> -->
                                </tbody>
                                </table>
                            </form>
                            <div class="reg_centr">
                                   <button onclick="profilemanageReg()" class="reg_button hvr-icon-wobble-horizontal frst">Register <i class="fa fa-arrow-right hvr-icon"></i></button>
                              </div>
                          </div>
                     </div>
                   </div>
                </div>
              <div role="tabpanel" class="tab-pane no_pdsa" id="shopcre">
                <div class="container">
                 <div class="admin_reg_shop_cmn">
                  <form id="userForm" class="ref_form"  >
                      <table class="table common_rg_form">
                        <tbody>
                          <tr class="form_vr_tr">
                                <td class="form_vr_td_lft">
                                  <label for="first_name" class="label_vr_form">Profile created By </label>
                                </td>
                                <td class="form_vr_td_rht">
                                  <div class="vr_reg_rt_full">
                                    <input value="{{$userId}}" class="user_profCreatedBy_sh form-control" disabled="disabled" type="text" name="faculty" />
                                     <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                                  </div>
                                </td>
                              </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Login Name</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <div class="vr_reg_rt_full">
                                  <input  style="text-transform:lowercase" class="user_profName_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Login Password</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <input class="user_pwd_sh form-control" type="password" autocomplete="password" name="Password" placeholder=" " =""/>
                                <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                <p id="password_strength"></p> 
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Name</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <div class="vr_reg_rt_full">
                                  <input  style="text-transform:lowercase" class="we_realName form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Gender</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <label for="gendermale" class="user_gender_sh radiolabel radio_button  crRadio">
                                  <input type="radio" tabindex="904" class="user_gender_sh radiomargin square_radio radio gender_valid" value="Male" name="gender_sh" id="gendermale_sh"> Male
                                </label>
                                <label for="genderfemale" class="user_gender_sh radiolabel radio_button crRadio">
                                <input type="radio" tabindex="905" class="user_gender_sh radiomargin square_radio radio gender_valid" value="Female" name="gender_sh" id="genderfemalex_sh"> Female
                                </label>
                                 <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Date Of Birth</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <!-- <input id="datepicker2" class="date user_dob_sh form-control" readonly> -->
                                   <div class='input-group date' id='datetimepicker2'>
                                      <input type='text' class="form-control date user_dob_sh" />
                                      <span class="input-group-addon">
                                          <span><i class="fa fa-calendar-alt"></i></span>
                                      </span>
                                  </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Name</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <div class="vr_reg_rt_full">
                                  <input  class="shop_name_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Type</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <div class="vr_reg_rt_full">
                                  <input  class="shop_type_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Pancard</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_pan_no_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Caste</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <select onChange="caste_retriveshs()" class="chzn-select form-control user_cast user_castshs frm-field " name="faculty">
                                          <option value="" selected>Choose one</option>
                                      @foreach($caste as $cast)
                                         <option class="user_cast" value="{{$cast->caste_name}}">{{$cast->caste_name}}</option>
                                            @endforeach
                                  </select>
                                  <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Sub caste</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <select class="casteData form-control user_subcast user_subcaste frm-field " name="faculty" >
                                          <option  value="" selected>Choose one</option>
                                         
                                  </select>
                                  <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Door Number</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_door_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Address line1</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_address_sh form-control" type="textarea" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Street</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_street_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr> 
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Location</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <select  onChange="getTaluk()" class="chzn-select form-control shop_location_sh frm-field" name="ResidingLocation">
                                      <option value="" selected >Choose one</option>
                                      <option value="rural" >rural</option>
                                      <option value="urban" >urban</option>
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop State</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                   <select  autocomplete="off" onChange="getDistrict()"  class="chzn-select form-control prof_resid_state shop_reg_state shop_state_s shop_state_sh frm-field" name="Residing">
                                      <option value="" selected>Choose one</option>
                                        @foreach($shopstate as $shopstates)
                                    <option value="{{$shopstates->name}}">{{$shopstates->name}}</option>
                                     @endforeach
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop District</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <select  autocomplete="off"  onChange="getTaluk()" class="chzn-select form-control distData manager_district prof_resid_district shop_reg_district shop_district_sh shop_district_s frm-field" name="Residing">
                                        <option value="" selected>Choose one</option>
                                        
                                     </select>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Taluk</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <select  onChange="getVillage()" class=" talukData chzn-select form-control shop_taluk_s shop_taluk_sh frm-field " name="Residing">
                                    <option value="" selected>Choose one</option>
                                       
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Village</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <select class=" VillageData chzn-select form-control shop_village_sh shop_village_s frm-field " name="Residing">
                                    <option value="" selected>Choose one</option>
                                       
                                  </select>
                                </div>
                              </td>
                            </tr>
                            
                          
                           <!--  <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Ward Number</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <select  class=" wardData chzn-select form-control shop_ward_sh frm-field " name="Name">
                                    <option value="" selected>Choose one</option>
                                    <option  value=""></option>
                                  </select>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr> -->
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Website</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_website_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Owner Email</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                   <input  class="user_email_sh form-control" type="email" name="email" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Office Email</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                   <input  class="office_email form-control" type="email" name="email" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Gst Number</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_gst_sh form-control" type="text" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Bank account Number</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_bank_accnt_sh form-control" type="number" name="account" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr> 
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">IFSC Number</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_ifsc form-control" type="text" name="account" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr> 
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Shop Size</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_size_sh form-control" type="number" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">No of employees in shop</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <div class="vr_reg_rt_full">
                                  <input  class="shop_employee_cnt_sh form-control" type="number" name="Name" placeholder=" " =""/>
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </div>
                              </td>
                            </tr> 
                              <tr class="form_vr_tr">
                                <td class="form_vr_td_lft admin_regg_shp">
                                  <label for="first_name" class="label_vr_form">Service provided by shops</label>
                                </td>
                                <td class="form_vr_td_rht admin_regg_shp">
                                   <div class="vr_reg_rt_full">
                                    <input  class="shop_service_prvd form-control" type="text" name="Name" placeholder=" " =""/>
                                     <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                  </div>
                                </td>
                              </tr> 
                              <tr class="form_vr_tr">
                                <td class="form_vr_td_lft admin_regg_shp">
                                  <label for="first_name" class="label_vr_form">Shop Year established</label>
                                </td>
                                <td class="form_vr_td_rht admin_regg_shp">
                                   <div class="vr_reg_rt_full">
                                     <select class="shop_yr_estable form-control reg_inpt" name="gold">
                                      <option value='' selected> choose Year</option>
                                    <?php  
                                    for ($i= 1; $i <= 100; $i++) {
                                     echo "<option value='$i'> $i year</option>";
                                    }
                                    ?>
                                    </select>
                                  </div>
                                </td>
                              </tr>
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form" >Owner Phone</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                 <input class="user_phone_sh form-control" name="phone" placeholder="country code not allow" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" type = "number" />
                                 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                              </td>
                            </tr>
                              <tr class="form_vr_tr">
                                <td class="form_vr_td_lft admin_regg_shp">
                                  <label for="first_name" class="label_vr_form" >Office Phone</label>
                                </td>
                                <td class="form_vr_td_rht admin_regg_shp">
                                   <input class="office_phone form-control" name="phone" placeholder="country code not allow" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" type = "number" />
                                   <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                                </td>
                              </tr>      
                            <tr class="form_vr_tr">
                              <td class="form_vr_td_lft admin_regg_shp">
                                <label for="first_name" class="label_vr_form">Comments</label>
                              </td>
                              <td class="form_vr_td_rht admin_regg_shp">
                                <div class="cmt_shpr"  ><a class="txt_area" onclick="sampleDesc()" ><!-- Sample Description --></a></div>
                                <textarea class="form-control commnt_me_sh" value="" rows="5" max='100' id="comment" name="texts"></textarea>
                              </td>
                            </tr>
                          </tbody>
                          </table>
                            <div class="form_vr_checkbox">
                              <input type="checkbox" class="check_agree_trm" name="vehicle1" value="cnfrm"> I Agree the terms and conditions of marrynow<br>
                            </div>
                        </form>
                        <div class="reg_centr">
                               <button onclick="shop_reg_Registration()" class="reg_button hvr-icon-wobble-horizontal frst">Register <i class="fa fa-arrow-right hvr-icon"></i></button>
                          </div>
                          <!-- Trigger the modal with a button -->

                        <!-- Modal -->
                        <div id="myModals" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <table>
                                  <tbody>
                                  <tr class="form_vr_tr">
                                  <td class="form_vr_td_lft admin_regg_shp">
                                    <label for="first_name" class="label_vr_form">Owner Photo</label>
                                  </td>
                                  <td class="form_vr_td_rht admin_regg_shp">
                                    <div class="vr_reg_rt_full">
                                      <form enctype="multipart/form-data" id="upload_pic_form" role="form">
                                        <input type="file" class="owner_pic" name="pic" id='pic' accept="image/*">
                                      </form>
                                        <input onclick="uploadpic()" class="owner_pic_submit" type="submit">
                                    </div>
                                  </td>
                                </tr>
                                <tr class="form_vr_tr">
                                  <td class="form_vr_td_lft admin_regg_shp">
                                    <label for="first_name" class="label_vr_form">Owner Govt Address Prof</label>
                                  </td>
                                  <td class="form_vr_td_rht admin_regg_shp">
                                    <div class="vr_reg_rt_full">
                                      <form enctype="multipart/form-data" id="upload_gprof_form" role="form">
                                        <input type="file" class="gvt_prof_pic" name="gprof" id='gprof' accept="image/*">
                                      </form>
                                      <input onclick="uploadgprof()" class="gvt_prof_submit" type="submit">
                                    </div>
                                  </td>
                                </tr>
                                  </tbody>
                                </table>
                              
                              </div>
                            </div>

                          </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane no_pdsa" id="payment">
                        <div class="container">
                          <div class="container">
                          <!-- Nav tabs -->
                            <div class="pay_box">
                              <div class="pay_txt_cmn"><span class="pay_txt">Pay for 1 profile</span><span class="semi_dot">:</span><span class="amt_val">{{$shop_pay_amt_per_pf[0]->cost_per_profile}}</span></div>
                              <div class="pay_txt_cmn"><span class="pay_txt">Target per day</span><span class="semi_dot">:</span><span class="amt_val">{{$shop_pay_amt_per_pf[0]->cost_per_day}}</span></div>
                              <div class="pay_txt_cmn"><span class="pay_txt">Target per week</span><span class="semi_dot">:</span><span class="amt_val">{{$shop_pay_amt_per_pf[0]->cost_per_week}}</span></div>
                              <div class="pay_txt_cmn"><span class="pay_txt">Target per month</span><span class="semi_dot">:</span><span class="amt_val">{{$shop_pay_amt_per_pf[0]->cost_per_month}}</span></div>
                              <div class="pay_txt_cmn"><span class="pay_txt1">Number of profiles completed for the day</span><span class="semi_dot">:</span><span class="amt_val"><?php echo count($profsPerday) ?></span></div>
                             <div class="pay_txt_cmn"> <span class="pay_txt1">Number of profiles completed for last 7 days</span><span class="semi_dot">:</span><span class="amt_val"><?php echo count($profsPerweek) ?></span></div>
                              <div class="pay_txt_cmn"><span class="pay_txt1">Number of profiles completed for Last 30 days</span><span class="semi_dot">:</span><span class="amt_val"> <?php echo count($profsPerMonth) ?></span></div>
                            <div class="pay_txt_cmn"><span class="pay_txt1">Claim Payment for</span><span class="semi_dot">:</span><span class="amt_val claimedprofcnt "> <?php echo $payprof_cnt ?> </span></div>

                              <div class="pay_txt_cmn"><span class="pay_txt1">Your Earnings</span><span class="semi_dot">:</span><span class="amt_val"><?php echo $amountToPay ?></span></div>
                              @if($shopUser[0]->claimed_status==1)
                              <br>
                               <b><span style="color:green"> You claimed for ₹ {{$shopUser[0]->claimed_amount}}   We will contact you soon !!</span></b>
                              @else
                               <button  style="cursor:pointer" type="button" onclick="shop_pay_claim()" class="btn_claim">Claim  payment</button>
                              @endif
                            </div>
                     </div>
                         </div>
                     </div>
                  <div role="tabpanel" class="tab-pane no_pdsa" id="extra">
                        
                        <div class="pfmt_cont">
                         
                        </div>
                     <?php
                     $count =count($validArray);
                     ?>

                   @for ($i=0; $i < $count; $i++)
                   <?php if(isset($validArray[$i]->user_id) && $validArray[$i]->role==0 && $validArray[$i]->profile_completed_status==0){ ?>
                     <div class="promgt_cont_commn">
                      <div class="promgt_cont_nmae cmmn_wid_pgmt"><span class="dark_s">Name</span> : {{ $validArray[$i]->user_name }}</div>
                      <div class="promgt_cont_mail cmmn_wid_pgmt2"><span class="dark_s">Email</span> :{{ $validArray[$i]->user_matri_id }} </div>
                      <div class="promgt_cont_gend cmmn_wid_pgmt3"><span class="dark_s">Gender</span> : {{ $validArray[$i]->user_gender }} </div>
                      <div class="promgt_cont_gend cmmn_wid_pgmt3"><span class="dark_s">Phone</span> : {{ $validArray[$i]->user_mobile }}  </div>
                    <?php if($validArray[$i]->profile_completed_status==1){ ?>
                    <?php }else{?>
                      <p>This Profile Was Not Yet Completed</p>
                       <?php } ?>
                    </div>

                   <?php }  ?>
                   @endfor

                  </div>
                  <div role="tabpanel" class="tab-pane no_pdsa" id="cretshop">
                    <div class="container">
                        <div class="mg_profcreated_appnd">
                          
                        </div>
                    </div>
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
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datepicker.es.min.js"></script>
  <script>
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
  </script>
  <script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
  </script>
  <script>
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
  </script>
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


    function logout(){
   $.ajax({
    type: "post",
    url: "../url/logout",
    data: {
       },
    cache: false,
    success: function(data){
      window.location = "../logout_app";
    }
  });
}



  </script>
<script >
    $(function () {
        $('#datetimepicker1').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
<script >
    $(function () {
        $('#datetimepicker2').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>

<script type="text/javascript">
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
</script>
</body>
</html>