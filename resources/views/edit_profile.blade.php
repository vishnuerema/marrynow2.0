@include('header')
<script src="js/choosedropdown.js"></script>
<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<!-- Bootstrap CSS -->
<!-- jQuery first, then Bootstrap JS. -->
<!-- Nav tabs -->
<section class="edit_profs">
  <div class="container">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Edit Basic profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#propic" role="tab" data-toggle="tab">Edit profile picture</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Edit Secondary profile</a>
      </li>
       <li class="nav-item">
         <a class="nav-link" href="#horoscope" role="tab" data-toggle="tab">Edit Horoscope picture</a>
      </li>
    </ul>
   <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="profile">
            <form id="userForm" class="ref_form">
              <div id="perInf" class="form_body wow bounceInRight" data-wow-delay="0.5s">
                <span class="persnl_icon"><img src="images/writing.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="persnl_head"><p class="prs_hd1">Personal Information</p></span>
                <div class="comm_form_sec">
                    <table class="table common_rg_form">
                      <tbody>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name"  class="reg_label_vr_form">Name<span class="red_star">*</span></label>

                          </td>
                          <td class="reg_form_vr_td_rht">
                               <input    class="prof_name form-control reg_inpt" type="text" value="{{$edit_bprof[0]->profile_name}}" name="Proflname" placeholder=""  autofocus >
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Father/Guardian Name<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <input style="text-transform: lowercase;" class="prof_guardname form-control reg_inpt" type="text" value="{{$edit_bprof[0]->prof_father_guardian_name}}" name="prof_father_guardian_name" placeholder=""  autocomplete="off" autofocus >
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                            <label for="first_name"  class="reg_label_vr_form">Email<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                             <input class="prof_email form-control reg_inpt" type="email" value="{{$edit_bprof[0]->prof_user_email}}" name="email" placeholder=""  autofocus >
                                    <p hidden class="emailFlag" style="color:red;font-size:15px">The Email syntax should be example@exaple.com</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Age<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                            <input value="{{$edit_bprof[0]->profile_age}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="prof_age form-control reg_inpt" type="number" name="Proflname" maxlength="2" autofocus >
                        </td>
                      </tr>
                     <tr class="reg_form_vr_tr">
                      <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Marital Status <span class="red_star">*</span></label>
                      </td>
                      <td class="reg_form_vr_td_rht">
                          <p class="prof_maritalstatus">{{$edit_bprof[0]->prof_user_marial_stat}}</p>
                          <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                      </td>
                    </tr>
                    <tr class="reg_form_vr_tr">

                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Gender<span class="red_star">*</span></label>
                          </td>

                          <td class="reg_form_vr_td_rht">
                            <?php
                            $gender =$edit_bprof[0]->profile_gender;
                            ?>
                            @if($gender=="male")
                             <label for="gendermale" class="user_gender radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="64" class="reg_prof_gender radiomargin square_radio radio gender_valid" value="male" name="phyStatus" id="physically1" checked>Male
                              </label>
                              <label for="genderfemale" class="prof_phy_status radiolabel radio_button crRadio">
                              <input type="radio" tabindex="65" class="reg_prof_gender radiomargin square_radio radio gender_valid" value="female" name="phyStatus" id="physically">Female
                              </label>
                              @elseif($gender=="female")
                              <label for="gendermale" class="user_gender radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="64" class="reg_prof_gender radiomargin square_radio radio gender_valid" value="male" name="phyStatus" id="physically1">Male
                              </label>
                              <label for="genderfemale" class="prof_phy_status radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="65" class="reg_prof_gender radiomargin square_radio radio gender_valid" value="female" name="phyStatus" id="physically" checked>Female
                              </label>
                              @elseif($gender=="")
                             <label for="gendermale" class="user_gender radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="64" class="reg_prof_gender radiomargin square_radio radio gender_valid" value="male" name="phyStatus" id="physically1">Male
                              </label>
                              <label for="genderfemale" class="prof_phy_status radiolabel radio_button crRadio">
                              <input type="radio" tabindex="65" class="reg_prof_gender radiomargin square_radio radio gender_valid" value="female" name="phyStatus" id="physically">Female
                              </label>
                              @endif
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>

                          </td>

                      </tr>

                        <tr class="reg_form_vr_tr">

                            <td class="reg_form_vr_td_lft">
                                <label for="first_name" class="reg_label_vr_form">Physical Status<span class="red_star">*</span></label>
                            </td>

                            <td class="reg_form_vr_td_rht">
                                <?php
                              $phystatus =$edit_bprof[0]->prof_user_physichal_status;
                              ?>
                              @if($phystatus=="Normal")
                              <label for="genermale" class="prof_phy_status radiolabel radio_button  crRadio checked">
                                <input type="radio" tabindex="104" class="prof_phy_status radiomargin square_radio radio gender_valid" value="Normal" name="pyStatus" id="physically2" checked>normal
                                </label>
                                 <label for="generfemale" class="prof_phy_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="105" class="prof_phy_status radiomargin square_radio radio gender_valid" value="phyChallenged" name="pyStatus" id="physically3"> physically challenged
                                </label>
                                @elseif($phystatus=='phyChallenged')
                                <label for="genermale" class="prof_phy_status radiolabel radio_button  crRadio ">
                                <input type="radio" tabindex="104" class="prof_phy_status radiomargin square_radio radio gender_valid" value="Normal" name="pyStatus" id="physically2">normal
                                </label>
                                 <label for="generfemale" class="prof_phy_status radiolabel radio_button crRadio checked">
                                <input type="radio" tabindex="105" class="prof_phy_status radiomargin square_radio radio gender_valid" value="phyChallenged" name="pyStatus" id="physically3" checked> physically challenged
                                </label>
                                @elseif($phystatus=="")
                               <label for="genermale" class="prof_phy_status radiolabel radio_button  crRadio ">
                                <input type="radio" tabindex="104" class="prof_phy_status radiomargin square_radio radio gender_valid" value="Normal" name="pyStatus" id="physically2">normal
                                </label>
                                 <label for="generfemale" class="prof_phy_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="105" class="prof_phy_status radiomargin square_radio radio gender_valid" value="phyChallenged" name="pyStatus" id="physically3"> physically challenged
                                </label>
                                @endif
                                <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                            </td>

                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
              <div id="locInfo" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
                <span class="persnl_icon"><img src="images/maps.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="persnl_head"><p class="prs_hd1">Location Information</p></span>
                <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                      <td class="reg_form_vr_td_lft">
                        <label for="first_name"  class="reg_label_vr_form">Door Number<span class="red_star">*</span></label>

                      </td>
                      <td class="reg_form_vr_td_rht">
                         <input style="text-transform: lowercase;"  autocomplete="off" class="prof_address1 form-control reg_inpt"  value="{{$edit_bprof[0]->prof_addressline1}}" type="text" name="addrr1" placeholder=""  autofocus >
                      </td>
                    </tr>
                    <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Address line 1<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <input style="text-transform: lowercase;" class="prof_address2 form-control reg_inpt" value="{{$edit_bprof[0]->prof_addressline2}}"  autocomplete="off" type="text" name="addrr2" placeholder=""  autofocus >
                        </td>
                    </tr>
                    <tr class="reg_form_vr_tr">
                      <td class="reg_form_vr_td_lft">
                        <label for="first_name"  class="reg_label_vr_form">Locality<span class="red_star">*</span></label>

                      </td>
                      <td class="reg_form_vr_td_rht">
                         <input style="text-transform: lowercase;" value="{{$edit_bprof[0]->  prof_locallity}}" class="prof_locality form-control reg_inpt"  autocomplete="off" type="text" name="locality" placeholder=""  autofocus >
                      </td>
                    </tr>
                    <tr class="reg_form_vr_tr">
                      <td class="reg_form_vr_td_lft">
                        <label for="first_name"  class="reg_label_vr_form">Pincode<span class="red_star">*</span></label>

                      </td>
                      <td class="reg_form_vr_td_rht">
                         <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number"  autocomplete="off" class="prof_pincode form-control reg_inpt" value="{{$edit_bprof[0]->prof_pincode}}" maxlength="6" name="pincode" autofocus >
                      </td>
                    </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">country Liveing In<span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                            <p class="prof_resid_country">{{$edit_bprof[0]->  profile_user_country}}</p>
                               <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Residing State <span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select onchange="focresCity()" class="chzn-select form-control prof_resid_state frm-field" name="Residing">
                                  <option value="{{$edit_bprof[0]->profile_user_state}}" selected>{{$edit_bprof[0]->profile_user_state}}</option>
                                   @foreach($editstate as $editstates)
                                    <option value="{{$editstates->name}}">{{$editstates->name}}</option>
                                     @endforeach
                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                          <tr class="reg_form_vr_tr">
                            <td class="reg_form_vr_td_lft">
                            <label for="first_name" class="reg_label_vr_form" >Residing District<span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                              <select  autocomplete="off"  onChange="getTaluk()" class="chzn-select form-control manager_district prof_resid_district shop_reg_district shop_district_s frm-field" name="Residing">
                                  <option value="{{$edit_bprof[0]->prof_district}}" selected >{{$edit_bprof[0]->prof_district}}</option>
                                  @foreach($managerdistrict as $managerdistricts)
                                  <option  value="{{$managerdistricts->dist_name}}">{{$managerdistricts->dist_name}}</option>
                                  @endforeach
                               </select>
                          </td>
                        </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Residing Taluk<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <select  autocomplete="off" onChange="getVillage()" class="talukData prof_resid_taluk chzn-select form-control manager_taluk shop_reg_taluk shop_taluk_s frm-field " name="Residing">
                            <option value="{{$edit_bprof[0]->prof_taluk}}" selected>{{$edit_bprof[0]->prof_taluk}}</option>
                             
                            </select>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Residing Village<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <select  autocomplete="off" class="VillageData prof_resid_village chzn-select form-control manager_village shop_reg_village shop_village_s frm-field " name="Residing">
                             <option value="{{$edit_bprof[0]->prof_village}}" selected>{{$edit_bprof[0]->prof_village}}</option>
                          </select>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Citizenship<span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select onchange="focresStar()" class="chzn-select form-control prof_citizenship frm-field " name="Residing">
                                  <option value="{{$edit_bprof[0]->prof_user_citizenship}}" selected>{{$edit_bprof[0]->prof_user_citizenship}}</option>

                                   @foreach($editcitizenship as $editcitizenships)
                                    <option value="{{$editcitizenships->name}}">{{$editcitizenships->name}}</option>
                                     @endforeach

                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
              <div class="form_body wow bounceInRight" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/star.png" class="img-fluid reg_help" alt="noimg"></span>
               <span class="persnl_head"><p class="prs_hd1">Relegious Information</p></span>
              <div class="comm_form_sec">
                <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Star <span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select  onchange="focresrasi()" class="chzn-select form-control prof_star frm-field " name="Residing">
                                  <option value="{{$edit_bprof[0]->prof_user_star}}" selected>{{$edit_bprof[0]->prof_user_star}}</option>

                                  @foreach($editstar as $editstars)
                                    <option value="{{$editstars->name}}">{{$editstars->name}}</option>
                                     @endforeach
                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Rasi<span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select onchange="focresGothr()" class="chzn-select form-control prof_Rasi frm-field " name="Residing">
                                  <option value="{{$edit_bprof[0]->prof_user_raasi}}" selected>{{$edit_bprof[0]->prof_user_raasi}}</option>
                                   
                                   @foreach($editraasi as $editraasis)
                                    <option value="{{$editraasis->name}}">{{$editraasis->name}}</option>
                                     @endforeach
                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Gothra <span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <input onfocusout="birthFocus()" class="prof_gothra form-control reg_inpt" value="{{$edit_bprof[0]->prof_user_gothra}}" type="text" name="gothra" placeholder="" />Optional but recomended
                               <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Dosham<span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                           <?php
                              $dhosam =$edit_bprof[0]->prof_user_dhosam;
                            ?>
                            @if($dhosam=="Yes")
                              <span onclick="dosham()" class="dho_yes"><label  class="prof_dosham radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="4" class="prof_dosham radiomargin square_radio radio gender_valid" value="Yes" name="phyStatus1" id="gendermale4" checked> Yes
                              </label></span> 
                               <span onclick="dosham_no()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio">
                              <input type="radio" tabindex="5" class="prof_dosham radiomargin square_radio radio gender_valid" value="No" name="phyStatus1" id="genderfemale5"> No
                              </label></span> 
                               <span onclick="dosham_dno()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio">
                              <input type="radio" tabindex="6" class="prof_dosham radiomargin square_radio radio gender_valid" value=" Dont know" name="phyStatus1" id="genderfemale6"> Dont know
                              </label></span> 
                             @elseif($dhosam=="No") 
                              <span onclick="dosham()" class="dho_yes"><label  class="prof_dosham radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="4" class="prof_dosham radiomargin square_radio radio gender_valid" value="Yes" name="phyStatus1" id="gendermale4"> Yes
                              </label></span> 
                               <span onclick="dosham_no()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="5" class="prof_dosham radiomargin square_radio radio gender_valid" value="No" name="phyStatus1" id="genderfemale5" checked> No
                              </label></span> 
                               <span onclick="dosham_dno()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio">
                              <input type="radio" tabindex="6" class="prof_dosham radiomargin square_radio radio gender_valid" value=" Dont know" name="phyStatus1" id="genderfemale6"> Dont know
                              </label></span>
                              @elseif($dhosam=="Dont know") 
                               <span onclick="dosham()" class="dho_yes"><label  class="prof_dosham radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="4" class="prof_dosham radiomargin square_radio radio gender_valid" value="Yes" name="phyStatus1" id="gendermale4"> Yes
                              </label></span> 
                               <span onclick="dosham_no()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio">
                              <input type="radio" tabindex="5" class="prof_dosham radiomargin square_radio radio gender_valid" value="No" name="phyStatus1" id="genderfemale5"> No
                              </label></span> 
                               <span onclick="dosham_dno()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="6" class="prof_dosham radiomargin square_radio radio gender_valid" value=" Dont know" name="phyStatus1" id="genderfemale6"checked> Dont know
                              </label></span>
                              @elseif($dhosam=="")
                              <span onclick="dosham()" class="dho_yes"><label  class="prof_dosham radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="4" class="prof_dosham radiomargin square_radio radio gender_valid" value="Yes" name="phyStatus1" id="gendermale4"> Yes
                              </label></span> 
                               <span onclick="dosham_no()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio">
                              <input type="radio" tabindex="5" class="prof_dosham radiomargin square_radio radio gender_valid" value="No" name="phyStatus1" id="genderfemale5"> No
                              </label></span> 
                               <span onclick="dosham_dno()"class="dho_yes"><label  class="prof_dosham radiolabel radio_button crRadio">
                              <input type="radio" tabindex="6" class="prof_dosham radiomargin square_radio radio gender_valid" value=" Dont know" name="phyStatus1" id="genderfemale6"> Dont know
                              </label></span>
                              @endif
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                              <div style="visibility: hidden;" id="dhosham_hide">
                                  <input value="Naga Dosham" name="chk_dhosam" type="checkbox"> Naga Dosham
                                  <input value="Kala Sarpa Dosham" name="chk_dhosam" type="checkbox"> Kala Sarpa Dosham
                                  <input value="Rahu Dosham" name="chk_dhosam" type="checkbox"> Rahu Dosham 
                                  <input value="Kethu Dosham " name="chk_dhosam" type="checkbox"> Kethu Dosham 
                                  <input value="Kalathra Dosham" name="chk_dhosam" type="checkbox"> Kalathra Dosham
                              </div>
                          </td>                
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Time of Birth<span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                           <?php
                            $str = $edit_bprof[0]->prof_user_birthtime;
                             $date_sep_time = explode(" ",$str);
                            ?>
                              <select onchange="birthminFocus()" class="prof_timeOfBirth form-control wds" type="text"  style="width:10%" >
                                <option value="{{$date_sep_time[0]}}" selected>{{$date_sep_time[0]}}</option>
                              <?php  
                              for ($i= 1; $i <= 12; $i++) {
                               echo "<option value='$i'> $i </option>";
                              }
                              ?>
                              </select>
                              <select onchange="birthmerFocus()"  class="prof_minuteOfBirth form-control wds" type="text"  style="width:10%" >
                                <option value="{{$date_sep_time[1]}}" selected>{{$date_sep_time[1]}}</option>
                              <?php  
                              for ($i= 00; $i <= 60; $i++) {
                               echo "<option value='$i'> $i </option>";
                              }
                              ?> 
                              </select>
                              <select  onchange="countryBirthFocus()" type="text"  class="prof_Tym form-control wds"  style="width:10%" >
                              <option value="{{$date_sep_time[2]}}" selected>{{$date_sep_time[2]}}</option> 
                                <option  value="am">am</option>
                              <option  value="pm">pm</option>
                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Country of Birth<span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select onchange="statBirFocus()" class="chzn-select form-control prof_country_of_birth frm-field " name="Residing">
                                 <option value="{{$edit_bprof[0]->prof_user_birthcountry}}" selected>{{$edit_bprof[0]->prof_user_birthcountry}}</option>

                                 @foreach($editcountry as $editcountrys)
                                    <option value="{{$editcountrys->name}}">{{$editcountrys->name}}</option>
                                     @endforeach
                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">State of Birth<span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select onchange="birtCityFocus()" class="chzn-select form-control prof_state_of_birth frm-field " name="Residing">
                                  <option value="{{$edit_bprof[0]->prof_user_raasi}}" selected>{{$edit_bprof[0]->prof_user_raasi}}</option>

                                     @foreach($editstate as $birthstates)
                                    <option value="{{$birthstates->name}}">{{$birthstates->name}}</option>
                                     @endforeach

                              </select> 
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">City of Birth<span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select onchange="chartfocus()" class="chzn-select form-control prof_city_of_birth frm-field " name="Residing">
                                  <option value="{{$edit_bprof[0]->prof_user_raasi}}" selected>{{$edit_bprof[0]->prof_user_birthcity}}</option>

                                     @foreach($editcity as $birthcitys)
                                    <option value="{{$birthcitys->name}}">{{$birthcitys->name}}</option>
                                     @endforeach
                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Chart Style<span class="red_star"></span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                               <select onchange="highEduFocus()" class="chzn-select form-control prof_chart_style frm-field " name="Residing">
                                  <option value="{{$edit_bprof[0]->prof_user_raasi}}" selected>{{$edit_bprof[0]->prof_user_chartstyle}}</option>

                                  @foreach($editchartstyle as $editchartstyles)
                                    <option value="{{$editchartstyles->name}}">{{$editchartstyles->name}}</option>
                                     @endforeach
                              </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                    </tbody>
                </table>
              </div>
            </div>
              <div id="eduInf" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/study.png" class="img-fluid reg_help" alt="noimg"></span>
              <span class="persnl_head"><p class="prs_hd1">Education & Profession</p></span>
                <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Highest Education<span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                                <select onchange="empInFocus()" class="chzn-select form-control prof_highest_education frm-field " name="Residing">
                                 <option  value="{{$edit_bprof[0]->prof_user_edu}}" selected >{{$edit_bprof[0]->prof_user_edu}}</option>
                                 @foreach($edithighereducation as $edithighereducations)
                                    <option value="{{$edithighereducations->name}}">{{$edithighereducations->name}}</option>
                                     @endforeach
                              </select>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                              <label for="first_name" class="reg_label_vr_form">Employed in<span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                            <?php
                            $employ =$edit_bprof[0]->prof_user_employedin;
                            ?>
                            @if($employ=="Goverment")
                            <label  class="prof_employed radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="01" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Goverment" name="phyStatus2" id="gendermal1"checked> Goverment
                              </label>
                              <label  class="prof_employed  radiolabel radio_button crRadio">
                              <input type="radio" tabindex="02" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="private" name="phyStatus2" id="genderfemal2"> private
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="03" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Defence" name="phyStatus2" id="genderfemal3"> Defence
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="04" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Bussiness" name="phyStatus2" id="genderfemal4"> Bussiness
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="05" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Self Employed" name="phyStatus2" id="genderfemal5"> Self Employed
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="06" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Not Working" name="phyStatus2" id="genderfemal6"> Not Working
                              </label>
                            @elseif($employ=="private") 
                              <label  class="prof_employed radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="01" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Goverment" name="phyStatus2" id="gendermal1"> Goverment
                              </label>
                              <label  class="prof_employed  radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="02" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="private" name="phyStatus2" id="genderfemal2"checked> private
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="03" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Defence" name="phyStatus2" id="genderfemal3"> Defence
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="04" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Bussiness" name="phyStatus2" id="genderfemal4"> Bussiness
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="05" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Self Employed" name="phyStatus2" id="genderfemal5"> Self Employed
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="06" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Not Working" name="phyStatus2" id="genderfemal6"> Not Working
                              </label>
                               @elseif($employ=="Defence") 
                              <label  class="prof_employed radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="01" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Goverment" name="phyStatus2" id="gendermal1"> Goverment
                              </label>
                              <label  class="prof_employed  radiolabel radio_button crRadio">
                              <input type="radio" tabindex="02" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="private" name="phyStatus2" id="genderfemal2"> private
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="03" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Defence" name="phyStatus2" id="genderfemal3" checked> Defence
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="04" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Bussiness" name="phyStatus2" id="genderfemal4"> Bussiness
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="05" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Self Employed" name="phyStatus2" id="genderfemal5"> Self Employed
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="06" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Not Working" name="phyStatus2" id="genderfemal6"> Not Working
                              </label>
                               @elseif($employ=="Bussiness") 
                              <label  class="prof_employed radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="01" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Goverment" name="phyStatus2" id="gendermal1"> Goverment
                              </label>
                              <label  class="prof_employed  radiolabel radio_button crRadio">
                              <input type="radio" tabindex="02" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="private" name="phyStatus2" id="genderfemal2"> private
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="03" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Defence" name="phyStatus2" id="genderfemal3"> Defence
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="04" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Bussiness" name="phyStatus2" id="genderfemal4" checked> Bussiness
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="05" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Self Employed" name="phyStatus2" id="genderfemal5"> Self Employed
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="06" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Not Working" name="phyStatus2" id="genderfemal6"> Not Working
                              </label> 
                              @elseif($employ=="Self Employed") 
                              <label  class="prof_employed radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="01" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Goverment" name="phyStatus2" id="gendermal1"> Goverment
                              </label>
                              <label  class="prof_employed  radiolabel radio_button crRadio">
                              <input type="radio" tabindex="02" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="private" name="phyStatus2" id="genderfemal2"> private
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="03" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Defence" name="phyStatus2" id="genderfemal3"> Defence
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="04" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Bussiness" name="phyStatus2" id="genderfemal4"> Bussiness
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="05" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Self Employed" name="phyStatus2" id="genderfemal5"checked> Self Employed
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="06" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Not Working" name="phyStatus2" id="genderfemal6"> Not Working
                              </label> 
                              @elseif($employ=="Not Working") 
                              <label  class="prof_employed radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="01" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Goverment" name="phyStatus2" id="gendermal1"> Goverment
                              </label>
                              <label  class="prof_employed  radiolabel radio_button crRadio">
                              <input type="radio" tabindex="02" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="private" name="phyStatus2" id="genderfemal2"> private
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="03" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Defence" name="phyStatus2" id="genderfemal3"> Defence
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="04" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Bussiness" name="phyStatus2" id="genderfemal4"> Bussiness
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="05" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Self Employed" name="phyStatus2" id="genderfemal5"> Self Employed
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="06" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Not Working" name="phyStatus2" id="genderfemal6" checked> Not Working
                              </label>
                              @elseif($employ=="")
                              <label  class="prof_employed radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="01" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Goverment" name="phyStatus2" id="gendermal1"> Goverment
                              </label>
                              <label  class="prof_employed  radiolabel radio_button crRadio">
                              <input type="radio" tabindex="02" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="private" name="phyStatus2" id="genderfemal2"> private
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="03" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Defence" name="phyStatus2" id="genderfemal3"> Defence
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="04" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Bussiness" name="phyStatus2" id="genderfemal4"> Bussiness
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="05" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Self Employed" name="phyStatus2" id="genderfemal5"> Self Employed
                              </label>
                              <label  class="prof_employed radiolabel radio_button crRadio">
                              <input type="radio" tabindex="06" class="prof_employed emp_in radiomargin square_radio radio gender_valid" value="Not Working" name="phyStatus2" id="genderfemal6"> Not Working
                              </label>
                              @endif
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr pof_wts">
                              <td class="reg_form_vr_td_lft pof_wtss">
                                <label for="first_name" class="reg_label_vr_form">Income source</label>
                              </td>
                              <td class="reg_form_vr_td_rht pof_wt">
                                <select class="prof_incomesource chzn-select form-control sec_reg frm-field " name="icme">
                                  <option value="{{$edit_bprof[0]->prof_incomefrom_source}}" selected>{{$edit_bprof[0]->prof_incomefrom_source}}</option>
                                  <?php  
                                  for ($i= 1; $i <= 10; $i++) {
                                   echo "<option value='$i'> $i </option>";
                                  }
                                  ?>
                              </select>
                               <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Type of Income<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                <select class="prof_typeincome form-control reg_inpt" name="typeincome">
                                  <option value="{{$edit_bprof[0]->prof_typeof_income}}" selected>{{$edit_bprof[0]->prof_typeof_income}}</option>
                                 <option value='proprietorship'>proprietorship</option>
                                 <option value='partnership'>partnership</option>
                                 <option value='llp'>limited liability partnership</option>
                                 <option value='publicltd'>publicltd</option>
                                 <option value='privateltd'>privateltd</option>
                                 <option value='trust'>trust</option>
                                </select>
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Net Worth<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                 <select class="chzn-select form-control prof_networth frm-field " name="networth">
                                     <option value="{{$edit_bprof[0]->prof_networth}}" selected>{{$edit_bprof[0]->prof_networth}}</option>
                                       @foreach($usernetworth as $usernetworths)
                                  <option value="{{$usernetworths->name}}">{{$usernetworths->name}}</option>
                                   @endforeach
                                </select>
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Monthly Income<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                <input style="text-transform: lowercase;" class="prof_income form-control reg_inpt" value="{{$edit_bprof[0]->prof_income}}" autocomplete="off" type="text" name="addrr2" placeholder=""  autofocus >
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Family Income<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                <input style="text-transform: lowercase;" class="prof_familyincome form-control reg_inpt" value="{{$edit_bprof[0]->prof_familyincome}}"  autocomplete="off" type="text" name="addrr2" placeholder=""  autofocus >
                              </td>
                            </tr>
                    </tbody>
                  </table>
              </div>
            </div>
              <div id="occupatn" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/study.png" class="img-fluid reg_help" alt="noimg"></span>
              <span class="persnl_head"><p class="prs_hd1">Occupation details</p></span>
              <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Type<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                           <select  autocomplete="off" class="chzn-select form-control valid prof_occpn_type frm-field " name="Residing">
                               <option value=" {{$edit_bprof[0]->prof_occptin_type}}" selected> {{$edit_bprof[0]->prof_occptin_type}}</option>
                                 @foreach($useroccupation as $useroccupations)
                                   @if ($useroccupations->type !=NULL)
                              <option value="{{$useroccupations->type}}">{{$useroccupations->type}}</option>
                               @endif
                             @endforeach
                          </select>
                        </td>
                      </tr> 
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Value<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                           <select  autocomplete="off" class="chzn-select form-control valid prof_occpn_value frm-field " name="Residing">
                               <option value=" {{$edit_bprof[0]->prof_occptin_value}}" selected> {{$edit_bprof[0]->prof_occptin_value}}</option>
                                 @foreach($useroccupation as $useroccupationval)
                                   @if ($useroccupationval->value !=NULL)
                              <option value="{{$useroccupationval->value}}">{{$useroccupationval->value}}</option>
                               @endif
                             @endforeach
                          </select>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Relationship<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                           <select  autocomplete="off" class="chzn-select form-control valid prof_occpn_relation frm-field " name="Residing">
                               <option value=" {{$edit_bprof[0]->prof_occptin_relation}}" selected> {{$edit_bprof[0]->prof_occptin_relation}}</option>
                                 @foreach($useroccupation as $useroccupationrel)
                                   @if ($useroccupationrel->relationship !=NULL)
                              <option value="{{$useroccupationrel->relationship}}">{{$useroccupationrel->relationship}}</option>
                               @endif
                             @endforeach
                          </select>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Field<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                           <select  autocomplete="off" class="chzn-select form-control valid prof_occpn_field frm-field " name="Residing">
                               <option value=" {{$edit_bprof[0]->prof_occptin_field}}" selected> {{$edit_bprof[0]->prof_occptin_field}}</option>
                                 @foreach($useroccupation as $useroccupationfield)
                                   @if ($useroccupationfield->field !=NULL)
                              <option value="{{$useroccupationfield->field}}">{{$useroccupationfield->field}}</option>
                               @endif
                             @endforeach
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="mvng" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/lender1.png" class="img-fluid reg_help" alt="noimg"></span>
              <span class="persnl_head"><p class="prs_hd1">Moving & Non Moving Asserts</p></span>
              <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Desktop Computer Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers3">
                            <?php
                            $desktop =$edit_bprof[0]->prof_desktop_avail;
                            ?>
                            @if($desktop=="Yes")
                            <label for="dp" class="prof_desktop radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="400" class="prof_desktop radiomargin square_radio radio gender_valid" value="Yes" name="dkp" id="hysically0"checked>Yes
                              </label>
                               <label for="dp" class="prof_desktop radiolabel radio_button crRadio">
                              <input type="radio" tabindex="399" class="prof_desktop radiomargin square_radio radio gender_valid" value="No" name="dkp" id="hysically1"> No
                              </label>
                              @elseif($desktop=="No")
                              <label for="dp" class="prof_desktop radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="400" class="prof_desktop radiomargin square_radio radio gender_valid" value="Yes" name="dkp" id="hysically0">Yes
                              </label>
                               <label for="dp" class="prof_desktop radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="399" class="prof_desktop radiomargin square_radio radio gender_valid" value="No" name="dkp" id="hysically1"checked> No
                              </label> 
                              @elseif($desktop==NULL)
                              <label for="dp" class="prof_desktop radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="400" class="prof_desktop radiomargin square_radio radio gender_valid" value="Yes" name="dkp" id="hysically0">Yes
                              </label>
                               <label for="dp" class="prof_desktop radiolabel radio_button crRadio">
                              <input type="radio" tabindex="399" class="prof_desktop radiomargin square_radio radio gender_valid" value="No" name="dkp" id="hysically1"> No
                              </label>
                              @endif
                          </div>
                        </td>

                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Laptop Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers4">
                            <?php
                            $lap =$edit_bprof[0]->prof_laptop_avail;
                            ?>
                            @if($lap=="Yes")
                            <label for="genermale" class="prof_laptop radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="401" class="prof_laptop radiomargin square_radio radio gender_valid" value="Yes" name="lap" id="hysically2"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_laptop radiolabel radio_button crRadio" >
                              <input type="radio" tabindex="402" class="prof_laptop radiomargin square_radio radio gender_valid" value="No" name="lap" id="hysically3"> No
                              </label>
                              @elseif($lap=="No")
                              <label for="genermale" class="prof_laptop radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="401" class="prof_laptop radiomargin square_radio radio gender_valid" value="Yes" name="lap" id="hysically2">Yes
                              </label>
                               <label for="generfemale" class="prof_laptop radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="402" class="prof_laptop radiomargin square_radio radio gender_valid" value="No" name="lap" id="hysically3" checked> No
                              </label>
                              @elseif($lap==NULL)
                              <label for="genermale" class="prof_laptop radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="401" class="prof_laptop radiomargin square_radio radio gender_valid" value="Yes" name="lap" id="hysically2">Yes
                              </label>
                               <label for="generfemale" class="prof_laptop radiolabel radio_button crRadio">
                              <input type="radio" tabindex="402" class="prof_laptop radiomargin square_radio radio gender_valid" value="No" name="lap" id="hysically3"> No
                              </label>
                              @endif
                          </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">UPS Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers5">
                             <?php
                            $ups =$edit_bprof[0]->prof_ups_avail;
                            ?>
                            @if($ups=="Yes")
                            <label for="genermale" class="prof_ups radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="403" class="prof_ups radiomargin square_radio radio gender_valid" value="Yes" name="ups" id="hysically4"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_ups radiolabel radio_button crRadio">
                              <input type="radio" tabindex="404" class="prof_ups radiomargin square_radio radio gender_valid" value="No" name="ups" id="hysically5"> No
                              </label>
                              @elseif($ups=="No")
                              <label for="genermale" class="prof_ups radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="403" class="prof_ups radiomargin square_radio radio gender_valid" value="Yes" name="ups" id="hysically4">Yes
                              </label>
                               <label for="generfemale" class="prof_ups radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="404" class="prof_ups radiomargin square_radio radio gender_valid" value="No" name="ups" id="hysically5"checked> No
                              </label>
                              @elseif($ups==NULL)
                              <label for="genermale" class="prof_ups radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="403" class="prof_ups radiomargin square_radio radio gender_valid" value="Yes" name="ups" id="hysically4">Yes
                              </label>
                               <label for="generfemale" class="prof_ups radiolabel radio_button crRadio">
                              <input type="radio" tabindex="404" class="prof_ups radiomargin square_radio radio gender_valid" value="No" name="ups" id="hysically5"> No
                              </label>
                              @endif
                          </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Television Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers6">
                            <?php
                            $tv =$edit_bprof[0]->prof_television_avail;
                            ?>
                            @if($tv=="Yes")
                            <label for="genermale" class="prof_tv radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="403" class="prof_tv radiomargin square_radio radio gender_valid" value="Yes" name="tv" id="hysically6"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_tv radiolabel radio_button crRadio">
                              <input type="radio" tabindex="404" class="prof_tv radiomargin square_radio radio gender_valid" value="No" name="tv" id="hysically7"> No
                              </label>
                              @elseif($tv=="No")
                              <label for="genermale" class="prof_tv radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="403" class="prof_tv radiomargin square_radio radio gender_valid" value="Yes" name="tv" id="hysically6">Yes
                              </label>
                               <label for="generfemale" class="prof_tv radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="404" class="prof_tv radiomargin square_radio radio gender_valid" value="No" name="tv" id="hysically7"checked> No
                              </label> 
                              @elseif($tv==NULL)
                              <label for="genermale" class="prof_tv radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="403" class="prof_tv radiomargin square_radio radio gender_valid" value="Yes" name="tv" id="hysically6">Yes
                              </label>
                               <label for="generfemale" class="prof_tv radiolabel radio_button crRadio">
                              <input type="radio" tabindex="404" class="prof_tv radiomargin square_radio radio gender_valid" value="No" name="tv" id="hysically7"> No
                              </label>
                              @endif
                          </div>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Fridge Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers7">
                            <?php
                            $fridge =$edit_bprof[0]->prof_fridge_avail;
                            ?>
                            @if($fridge=="Yes")
                            <label for="genermale" class="prof_fridge radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="405" class="prof_fridge radiomargin square_radio radio gender_valid" value="Yes" name="fridge" id="hysically6"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_fridge radiolabel radio_button crRadio">
                              <input type="radio" tabindex="406" class="prof_fridge radiomargin square_radio radio gender_valid" value="No" name="fridge" id="hysically7"> No
                              </label>
                               @elseif($fridge=="No")
                              <label for="genermale" class="prof_fridge radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="405" class="prof_fridge radiomargin square_radio radio gender_valid" value="Yes" name="fridge" id="hysically6">Yes
                              </label>
                               <label for="generfemale" class="prof_fridge radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="406" class="prof_fridge radiomargin square_radio radio gender_valid" value="No" name="fridge" id="hysically7"checked> No
                              </label>
                              @elseif($fridge==NULL)
                              <label for="genermale" class="prof_fridge radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="405" class="prof_fridge radiomargin square_radio radio gender_valid" value="Yes" name="fridge" id="hysically6">Yes
                              </label>
                               <label for="generfemale" class="prof_fridge radiolabel radio_button crRadio">
                              <input type="radio" tabindex="406" class="prof_fridge radiomargin square_radio radio gender_valid" value="No" name="fridge" id="hysically7"> No
                              </label>
                              @endif
                          </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Washing Machine Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers8">
                            <?php
                            $washing =$edit_bprof[0]->prof_washingmchine_avaiil;
                            ?>
                            @if($washing=="Yes")
                            <label for="genermale" class="prof_wash_machine radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="407" class="prof_wash_machine radiomargin square_radio radio gender_valid" value="Yes" name="wash_machine" id="hysically8"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_wash_machine radiolabel radio_button crRadio">
                              <input type="radio" tabindex="408" class="prof_wash_machine radiomargin square_radio radio gender_valid" value="No" name="wash_machine" id="hysically9"> No
                              </label>
                              @elseif($washing=="No")
                            <label for="genermale" class="prof_wash_machine radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="407" class="prof_wash_machine radiomargin square_radio radio gender_valid" value="Yes" name="wash_machine" id="hysically8">Yes
                              </label>
                               <label for="generfemale" class="prof_wash_machine radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="408" class="prof_wash_machine radiomargin square_radio radio gender_valid" value="No" name="wash_machine" id="hysically9"checked> No
                              </label> 
                              @elseif($washing==NULL)
                            <label for="genermale" class="prof_wash_machine radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="407" class="prof_wash_machine radiomargin square_radio radio gender_valid" value="Yes" name="wash_machine" id="hysically8">Yes
                              </label>
                               <label for="generfemale" class="prof_wash_machine radiolabel radio_button crRadio">
                              <input type="radio" tabindex="408" class="prof_wash_machine radiomargin square_radio radio gender_valid" value="No" name="wash_machine" id="hysically9"> No
                              </label>
                              @endif
                            </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Bore water Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers9">
                             <?php
                            $borewater =$edit_bprof[0]->prof_borewater_avail;
                            ?>
                            @if($borewater=="Yes")
                            <label for="genermale" class="prof_borewater radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="409" class="prof_borewater radiomargin square_radio radio gender_valid" value="Yes" name="borwater" id="hysically10"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_borewater radiolabel radio_button crRadio">
                              <input type="radio" tabindex="410" class="prof_borewater radiomargin square_radio radio gender_valid" value="No" name="borwater" id="hysically11"> No
                              </label>
                              @elseif($borewater=="No")
                              <label for="genermale" class="prof_borewater radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="409" class="prof_borewater radiomargin square_radio radio gender_valid" value="Yes" name="borwater" id="hysically10">Yes
                              </label>
                               <label for="generfemale" class="prof_borewater radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="410" class="prof_borewater radiomargin square_radio radio gender_valid" value="No" name="borwater" id="hysically11"checked> No
                              </label> 
                              @elseif($borewater==NULL)
                              <label for="genermale" class="prof_borewater radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="409" class="prof_borewater radiomargin square_radio radio gender_valid" value="Yes" name="borwater" id="hysically10">Yes
                              </label>
                               <label for="generfemale" class="prof_borewater radiolabel radio_button crRadio">
                              <input type="radio" tabindex="410" class="prof_borewater radiomargin square_radio radio gender_valid" value="No" name="borwater" id="hysically11"> No
                              </label>
                              @endif
                          </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">TN Water Supply Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers10">
                           <?php
                            $tnwater =$edit_bprof[0]->prof_tn_water_avail;
                            ?>
                            @if($tnwater=="Yes")
                            <label for="genermale" class="prof_Tnwater radiolabel radio_button  crRadio checked">
                            <input type="radio" tabindex="411" class="prof_Tnwater radiomargin square_radio radio gender_valid" value="Yes" name="Tnwater" id="hysically10"checked>Yes
                            </label>
                             <label for="generfemale" class="prof_Tnwater radiolabel radio_button crRadio">
                            <input type="radio" tabindex="412" class="prof_Tnwater radiomargin square_radio radio gender_valid" value="No" name="Tnwater" id="hysically11"> No
                            </label>
                            @elseif($tnwater=="No")
                            <label for="genermale" class="prof_Tnwater radiolabel radio_button  crRadio ">
                            <input type="radio" tabindex="411" class="prof_Tnwater radiomargin square_radio radio gender_valid" value="Yes" name="Tnwater" id="hysically10">Yes
                            </label>
                             <label for="generfemale" class="prof_Tnwater radiolabel radio_button crRadio checked">
                            <input type="radio" tabindex="412" class="prof_Tnwater radiomargin square_radio radio gender_valid" value="No" name="Tnwater" id="hysically11" checked> No
                            </label>
                             @elseif($tnwater==NULL)
                            <label for="genermale" class="prof_Tnwater radiolabel radio_button  crRadio ">
                            <input type="radio" tabindex="411" class="prof_Tnwater radiomargin square_radio radio gender_valid" value="Yes" name="Tnwater" id="hysically10">Yes
                            </label>
                             <label for="generfemale" class="prof_Tnwater radiolabel radio_button crRadio">
                            <input type="radio" tabindex="412" class="prof_Tnwater radiomargin square_radio radio gender_valid" value="No" name="Tnwater" id="hysically11"> No
                            </label>
                            @endif
                        </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Car Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers11">
                            <?php
                            $car =$edit_bprof[0]->prof_car_avail;
                            ?>
                            @if($car=="Yes")
                            <label for="genermale" class="prof_car radiolabel radio_button  crRadio checked">
                            <input type="radio" tabindex="413" class="prof_car radiomargin square_radio radio gender_valid" value="Yes" name="car" id="hysically13"checked>Yes
                            </label>
                             <label for="generfemale" class="prof_car radiolabel radio_button crRadio">
                            <input type="radio" tabindex="414" class="prof_car radiomargin square_radio radio gender_valid" value="No" name="car" id="hysically14"> No
                            </label>
                            @elseif($car=="No")
                            <label for="genermale" class="prof_car radiolabel radio_button  crRadio ">
                            <input type="radio" tabindex="413" class="prof_car radiomargin square_radio radio gender_valid" value="Yes" name="car" id="hysically13">Yes
                            </label>
                             <label for="generfemale" class="prof_car radiolabel radio_button crRadio checked">
                            <input type="radio" tabindex="414" class="prof_car radiomargin square_radio radio gender_valid" value="No" name="car" id="hysically14"checked> No
                            </label> 
                            @elseif($car==NULL)
                            <label for="genermale" class="prof_car radiolabel radio_button  crRadio ">
                            <input type="radio" tabindex="413" class="prof_car radiomargin square_radio radio gender_valid" value="Yes" name="car" id="hysically13">Yes
                            </label>
                             <label for="generfemale" class="prof_car radiolabel radio_button crRadio">
                            <input type="radio" tabindex="414" class="prof_car radiomargin square_radio radio gender_valid" value="No" name="car" id="hysically14"> No
                            </label>
                            @endif
                        </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Two Wheeler Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers12">
                            <?php
                            $bike =$edit_bprof[0]->prof_twowheller_avail;
                            ?>
                            @if($bike=="Yes")
                            <label for="genermale" class="prof_bike radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="416" class="prof_bike radiomargin square_radio radio gender_valid" value="Yes" name="bike" id="hysically15"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_bike radiolabel radio_button crRadio">
                              <input type="radio" tabindex="415" class="prof_bike radiomargin square_radio radio gender_valid" value="No" name="bike" id="hysically16"> No
                              </label>
                               @elseif($bike=="No")
                              <label for="genermale" class="prof_bike radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="416" class="prof_bike radiomargin square_radio radio gender_valid" value="Yes" name="bike" id="hysically15">Yes
                              </label>
                               <label for="generfemale" class="prof_bike radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="415" class="prof_bike radiomargin square_radio radio gender_valid" value="No" name="bike" id="hysically16"checked> No
                              </label> 
                              @elseif($bike==NULL)
                              <label for="genermale" class="prof_bike radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="416" class="prof_bike radiomargin square_radio radio gender_valid" value="Yes" name="bike" id="hysically15">Yes
                              </label>
                               <label for="generfemale" class="prof_bike radiolabel radio_button crRadio">
                              <input type="radio" tabindex="415" class="prof_bike radiomargin square_radio radio gender_valid" value="No" name="bike" id="hysically16"> No
                              </label>
                              @endif
                          </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Partnership Bussiness Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers13">
                            <?php
                            $bussiness =$edit_bprof[0]->prof_partnerbusiness_avail;
                            ?>
                            @if($bussiness=="Yes")
                            <label for="genermale" class="prof_partbussiness radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="417" class="prof_partbussiness radiomargin square_radio radio gender_valid" value="Yes" name="partbussiness" id="hysically17" checked>Yes
                              </label>
                               <label for="generfemale" class="prof_partbussiness radiolabel radio_button crRadio">
                              <input type="radio" tabindex="418" class="prof_partbussiness radiomargin square_radio radio gender_valid" value="No" name="partbussiness" id="hysically18"> No
                              </label> 
                               @elseif($bussiness=="No")
                              <label for="genermale" class="prof_partbussiness radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="417" class="prof_partbussiness radiomargin square_radio radio gender_valid" value="Yes" name="partbussiness" id="hysically17">Yes
                              </label>
                               <label for="generfemale" class="prof_partbussiness radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="418" class="prof_partbussiness radiomargin square_radio radio gender_valid" value="No" name="partbussiness" id="hysically18"checked> No
                              </label>
                              @elseif($bussiness==NULL)
                              <label for="genermale" class="prof_partbussiness radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="417" class="prof_partbussiness radiomargin square_radio radio gender_valid" value="Yes" name="partbussiness" id="hysically17">Yes
                              </label>
                               <label for="generfemale" class="prof_partbussiness radiolabel radio_button crRadio">
                              <input type="radio" tabindex="418" class="prof_partbussiness radiomargin square_radio radio gender_valid" value="No" name="partbussiness" id="hysically18"> No
                              </label>
                              @endif
                          </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Two Wheeler Lisence<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers14">
                            <?php
                            $twolisence =$edit_bprof[0]->prof_twowhlr_license;
                            ?>
                            @if($twolisence=="Yes")
                            <label for="genermale" class="prof_twolisence radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="419" class="prof_twolisence radiomargin square_radio radio gender_valid" value="Yes" name="twolisence" id="hysically19"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_twolisence radiolabel radio_button crRadio">
                              <input type="radio" tabindex="420" class="prof_twolisence radiomargin square_radio radio gender_valid" value="No" name="twolisence" id="hysically20"> No
                              </label>
                              @elseif($twolisence=="No")
                              <label for="genermale" class="prof_twolisence radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="419" class="prof_twolisence radiomargin square_radio radio gender_valid" value="Yes" name="twolisence" id="hysically19">Yes
                              </label>
                               <label for="generfemale" class="prof_twolisence radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="420" class="prof_twolisence radiomargin square_radio radio gender_valid" value="No" name="twolisence" id="hysically20"checked> No
                              </label>
                               @elseif($twolisence==NULL)
                              <label for="genermale" class="prof_twolisence radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="419" class="prof_twolisence radiomargin square_radio radio gender_valid" value="Yes" name="twolisence" id="hysically19">Yes
                              </label>
                               <label for="generfemale" class="prof_twolisence radiolabel radio_button crRadio">
                              <input type="radio" tabindex="420" class="prof_twolisence radiomargin square_radio radio gender_valid" value="No" name="twolisence" id="hysically20"> No
                              </label>
                              @endif
                          </div>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Four Wheeler Lisence<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers15">
                             <?php
                            $fourlisence =$edit_bprof[0]->prof_fourwhlr_license;
                            ?>
                            @if($fourlisence=="Yes")
                            <label for="genermale" class="prof_fourlisence radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="421" class="prof_fourlisence radiomargin square_radio radio gender_valid" value="Yes" name="fourlisence" id="hysically21"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_fourlisence radiolabel radio_button crRadio">
                              <input type="radio" tabindex="422" class="prof_fourlisence radiomargin square_radio radio gender_valid" value="No" name="fourlisence" id="hysically22"> No
                              </label>
                               @elseif($fourlisence=="No")
                              <label for="genermale" class="prof_fourlisence radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="421" class="prof_fourlisence radiomargin square_radio radio gender_valid" value="Yes" name="fourlisence" id="hysically21">Yes
                              </label>
                               <label for="generfemale" class="prof_fourlisence radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="422" class="prof_fourlisence radiomargin square_radio radio gender_valid" value="No" name="fourlisence" id="hysically22"checked> No
                              </label>
                              @elseif($fourlisence==NULL)
                              <label for="genermale" class="prof_fourlisence radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="421" class="prof_fourlisence radiomargin square_radio radio gender_valid" value="Yes" name="fourlisence" id="hysically21">Yes
                              </label>
                               <label for="generfemale" class="prof_fourlisence radiolabel radio_button crRadio">
                              <input type="radio" tabindex="422" class="prof_fourlisence radiomargin square_radio radio gender_valid" value="No" name="fourlisence" id="hysically22"> No
                              </label>
                              @endif
                          </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Own House<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <div class="ers16">
                            <?php
                            $ownhouse =$edit_bprof[0]->prof_ownhouse;
                            ?>
                            @if($ownhouse=="Yes")
                            <label for="genermale" class="prof_ownhouse radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="423" class="prof_ownhouse radiomargin square_radio radio gender_valid" value="Yes" name="ownhouse" id="hysically23"checked>Yes
                              </label>
                               <label for="generfemale" class="prof_ownhouse radiolabel radio_button crRadio">
                              <input type="radio" tabindex="424" class="prof_ownhouse radiomargin square_radio radio gender_valid" value="No" name="ownhouse" id="hysically24"> No
                              </label>
                               @elseif($ownhouse=="No")
                               <label for="genermale" class="prof_ownhouse radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="423" class="prof_ownhouse radiomargin square_radio radio gender_valid" value="Yes" name="ownhouse" id="hysically23">Yes
                              </label>
                               <label for="generfemale" class="prof_ownhouse radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="424" class="prof_ownhouse radiomargin square_radio radio gender_valid" value="No" name="ownhouse" id="hysically24"checked> No
                              </label>
                              @elseif($ownhouse==NULL)
                               <label for="genermale" class="prof_ownhouse radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="423" class="prof_ownhouse radiomargin square_radio radio gender_valid" value="Yes" name="ownhouse" id="hysically23">Yes
                              </label>
                               <label for="generfemale" class="prof_ownhouse radiolabel radio_button crRadio">
                              <input type="radio" tabindex="424" class="prof_ownhouse radiomargin square_radio radio gender_valid" value="No" name="ownhouse" id="hysically24"> No
                              </label>
                              @endif
                            </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Land cents<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <input style="text-transform: lowercase;" class="prof_landacres form-control reg_inpt" type="text" name="landacres" value="{{$edit_bprof[0]->prof_land_acres}}" placeholder=""  autofocus >
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Property Owner Name<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <input style="text-transform: lowercase;" class="prof_ppty_owner_name form-control reg_inpt" type="text" value="{{$edit_bprof[0]->prof_propertyowner_name}}" name="owner_name" placeholder=""  autofocus >
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Property Owner Relation<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <select class="chzn-select prof_ppty_owner_relation form-control reg_inpt" name="owner_relation">
                              <option value="{{$edit_bprof[0]->prof_propertyowner_relation}}" selected>{{$edit_bprof[0]->prof_propertyowner_relation}}</option>
                              <option value="Own" >Own</option>
                              <option value="Father" >Father</option>
                              <option value="Mother" >Mother</option>
                              <option value="Brother" >Brother</option>
                              <option value="Sister" >Sister</option>
                              <option value="Others" >Others</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="livef" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/stethoscope.png" class="img-fluid reg_help" alt="noimg"></span>
              <span class="persnl_head"><p class="prs_hd1">Living and settle Information</p></span>
              <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Living and settle<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <select class="chzn-select form-control prof_livingf frm-field " name="Residing">
                              <option value="{{$edit_bprof[0]->prof_living_settle}}" selected>{{$edit_bprof[0]->prof_living_settle}}</option>
                                 @foreach($Living_master as $Living_masters)
                            <option value="{{$Living_masters->name}}">{{$Living_masters->name}}</option>
                             @endforeach
                          </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="medic" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/stethoscope.png" class="img-fluid reg_help" alt="noimg"></span>
              <span class="persnl_head"><p class="prs_hd1">Medical Information</p></span>
              <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Blood group<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <select class="chzn-select form-control prof_bloodgrop frm-field " name="Residing">
                              <option value="{{$edit_bprof[0]->prof_blood_group}}" selected>{{$edit_bprof[0]->prof_blood_group}}</option>
                                 @foreach($userbloodgrp as $userbloodgrps)
                            <option value="{{$userbloodgrps->name}}">{{$userbloodgrps->name}}</option>
                             @endforeach
                          </select>
                           <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="gfts" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/gift1.png" class="img-fluid reg_help" alt="noimg"></span>
              <span class="persnl_head"><p class="prs_hd1">Gift & Others</p></span>
              <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Gold<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <select class="prof_gold form-control reg_inpt" name="gold">
                           <option value="{{$edit_bprof[0]->prof_gift_gold}}" selected>{{$edit_bprof[0]->prof_gift_gold}}</option>
                          <?php  
                          for ($i= 1; $i <= 1000; $i++) {
                           echo "<option value='$i'> $i savaran</option>";
                          }
                          ?>
                          </select>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Property<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <input  class="prof_property form-control reg_inpt" style="text-transform: lowercase;" type="text" value="{{$edit_bprof[0]->prof_gift_property}}" name="property" placeholder=""  autofocus >
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Cash<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                           <select class="prof_cash form-control reg_inpt" name="gold">
                            <option value="{{$edit_bprof[0]->prof_gift_cash}}" selected>{{$edit_bprof[0]->prof_gift_cash}}</option>
                          <?php  
                          for ($i= 0; $i <= 100; $i++) {
                           echo "<option value='$i'> $i lakhs </option>";
                          }
                          ?>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="famInf" class="form_body wow bounceInRight" data-wow-delay="0.5s">
                  <span class="persnl_icon"><img src="images/family.png" class="img-fluid reg_help" alt="noimg"></span>
                  <span class="persnl_head"><p class="prs_hd1">Family Information</p></span>
                  <div class="comm_form_sec">
                    <table class="table common_rg_form">
                      <tbody>
                        <tr class="reg_form_vr_tr">
                            <td class="reg_form_vr_td_lft">
                                <label for="first_name" class="reg_label_vr_form">Whatsapp No<span class="red_star"></span></label>
                            </td>
                            <td class="reg_form_vr_td_rht">
                                 <input onfocusout="whatsappno()" value="{{$edit_bprof[0]->prof_whatsapp_no}}" class="whatsapp_no form-control reg_inpt" type="text" name="number" placeholder=" " />Optional but recommended
                                 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                            </td>
                        </tr>
                        <tr class="reg_form_vr_tr">
                            <td class="reg_form_vr_td_lft">
                                <label for="first_name" class="reg_label_vr_form">Parent's Contact No<span class="red_star"></span></label>
                            </td>
                            <td class="reg_form_vr_td_rht">
                                 <input onfocusout="aboutMefoc()" value="{{$edit_bprof[0]->prof_user_parent_continfo}}" class="parents_contact_no form-control reg_inpt" type="text" name="number" placeholder=" " />Optional but recommended
                                 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                            </td>
                        </tr>
                        <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                                <label for="first_name" class="reg_label_vr_form">Family Value<span class="red_star">*</span></label>
                        </td>
                            <td class="reg_form_vr_td_rht">
                              <?php
                              $familyvalue =$edit_bprof[0]->prof_familyvalue;
                              ?>
                              @if($familyvalue=="orthodox")
                                <label  class="prof_family_val radiolabel radio_button  crRadio checked">
                                <input type="radio" tabindex="171" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="orthodox" name="famval" checked >orthodox
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="172" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="traditional" name="famval" > traditional
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="173" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="moderate" name="famval" > moderate
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="174" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="Liberal" name="famval" > Liberal
                                </label>
                                 @elseif($familyvalue=="traditional")
                                <label  class="prof_family_val radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="171" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="orthodox" name="famval" >orthodox
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio checked">
                                <input type="radio" tabindex="172" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="traditional" name="famval" checked>traditional
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="173" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="moderate" name="famval" >moderate
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="174" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="Liberal" name="famval" >Liberal
                                </label>
                                 @elseif($familyvalue=="moderate")
                                <label  class="prof_family_val radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="171" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="orthodox" name="famval" > orthodox
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="172" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="traditional" name="famval" > traditional
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio checked">
                                <input type="radio" tabindex="173" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="moderate" name="famval" checked> moderate
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="174" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="Liberal" name="famval" > Liberal
                                </label>
                                 @elseif($familyvalue=="Liberal")
                                <label  class="prof_family_val radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="171" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="orthodox" name="famval" > orthodox
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="172" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="traditional" name="famval" > traditional
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="173" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="moderate" name="famval" > moderate
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio checked">
                                <input type="radio" tabindex="174" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="Liberal" name="famval" checked> Liberal
                                </label>
                                @elseif($familyvalue=="")
                                <label  class="prof_family_val radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="171" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="orthodox" name="famval" > orthodox
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="172" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="traditional" name="famval" > traditional
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="173" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="moderate" name="famval" > moderate
                                </label>
                                <label  class="prof_family_val radiolabel radio_button crRadio">
                                <input type="radio" tabindex="174" class="prof_family_val fam_val radiomargin square_radio radio gender_valid" value="Liberal" name="famval" > Liberal
                                </label>
                                @endif
                            </td>
                        </tr>
                        <tr class="reg_form_vr_tr">
                            <td class="reg_form_vr_td_lft">
                                <label for="first_name" class="reg_label_vr_form">Family type<span class="red_star">*</span></label>
                            </td>
                            <td class="reg_form_vr_td_rht">
                              <?php
                              $familytype=$edit_bprof[0]->prof_familytype;
                              ?>
                              @if($familytype=="joint")
                                <label  class="prof_type radiolabel radio_button  crRadio checked">
                                <input type="radio" tabindex="76" class="prof_type fam_typ radiomargin square_radio radio gender_valid" value="joint" name="famtyp" checked> joint Family
                                </label>
                                <label  class="prof_type radiolabel radio_button crRadio">
                                <input type="radio" tabindex="77" class="prof_type fam_typ radiomargin square_radio radio gender_valid" value="Nuclear Family" name="famtyp" > Nuclear Family
                                </label>
                                @elseif($familytype=="Nuclear Family")
                                <label  class="prof_type radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="76" class="prof_type fam_typ radiomargin square_radio radio gender_valid" value="joint" name="famtyp" > joint Family
                                </label>
                                <label  class="prof_type radiolabel radio_button crRadio checked">
                                <input type="radio" tabindex="77" class="prof_type fam_typ radiomargin square_radio radio gender_valid" value="Nuclear Family" name="famtyp" checked> Nuclear Family
                                </label>
                                @elseif($familytype=="")
                                <label  class="prof_type radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="76" class="prof_type fam_typ radiomargin square_radio radio gender_valid" value="joint" name="famtyp" > joint Family
                                </label>
                                <label  class="prof_type radiolabel radio_button crRadio">
                                <input type="radio" tabindex="77" class="prof_type fam_typ radiomargin square_radio radio gender_valid" value="Nuclear Family" name="famtyp" > Nuclear Family
                                </label>
                                @endif
                            </td>
                        </tr>
                        <tr class="reg_form_vr_tr">
                            <td class="reg_form_vr_td_lft">
                                <label for="first_name" class="reg_label_vr_form">Family status <span class="red_star">*</span></label>
                            </td>
                            <td class="reg_form_vr_td_rht">
                              <?php
                              $familystatus=$edit_bprof[0]->prof_familystatus;
                              ?>
                              @if($familystatus=="Middle Class")
                                <label  class="prof_status radiolabel radio_button  crRadio checked">
                                <input type="radio" tabindex="78" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Middle Class" name="famstat" checked>Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="79" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Upper Middle Class" name="famstat" >Upper Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="80" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Rich" name="famstat" >Rich</label>
                                @elseif($familystatus=="Upper Middle Class")
                                <label  class="prof_status radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="78" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Middle Class" name="famstat" >Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio checked">
                                <input type="radio" tabindex="79" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Upper Middle Class" name="famstat" checked>Upper Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="80" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Rich" name="famstat" >Rich</label>
                                @elseif($familystatus=="Rich")
                                <label  class="prof_status radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="78" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Middle Class" name="famstat" >Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="79" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Upper Middle Class" name="famstat" >Upper Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio checked">
                                <input type="radio" tabindex="80" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Rich" name="famstat" checked> Rich
                                </label>
                                @elseif($familystatus=="")
                                <label  class="prof_status radiolabel radio_button  crRadio">
                                <input type="radio" tabindex="78" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Middle Class" name="famstat" >Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="79" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Upper Middle Class" name="famstat" >Upper Middle Class</label>
                                <label  class="prof_status radiolabel radio_button crRadio">
                                <input type="radio" tabindex="80" class="prof_status fam_stat radiomargin square_radio radio gender_valid" value="Rich" name="famstat" >Rich</label>
                                @endif
                            </td>
                        </tr>
                        <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                            <label for="first_name" class="reg_label_vr_form">Family God<span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                              <select class="chzn-select form-control prof_god frm-field " name="Residing">
                                <option value="{{$familystatus=$edit_bprof[0]->prof_family_god}}" selected>{{$familystatus=$edit_bprof[0]->prof_family_god}}</option>
                                   @foreach($userfamgod as $userfamgods)
                              <option value="{{$userfamgods->name}}">{{$userfamgods->name}}</option>
                               @endforeach
                            </select>
                             <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                  <div class="form_body wow bounceInLeft" data-wow-delay="0.5s">
                      <span class="persnl_icon"><img src="images/edit.png" class="img-fluid reg_help" alt="noimg"></span>
                      <span class="persnl_head"><p class="prs_hd1">About me</p></span>
                      <div class="comm_form_sec">
                        <table class="table common_rg_form">
                          <tbody>
                            <tr class="reg_form_vr_tr">
                                <td class="reg_form_vr_td_rht">
                                        <div class="cmt"  ><a class="txt_area" onclick="sampleDesc()" >Sample Description</a></div>
                                      <textarea class="form-control prof_about_me" rows="5" max='100' value="{{$edit_bprof[0]->prof_about_me}}" id="comment" name="texts">{{$edit_bprof[0]->prof_about_me}}</textarea>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <p class="edit_reg2" style="display: none;">edit_flag</p>
                  </div>
          </form>
          <div class="submits">
            <button onclick="SubmitMatriProfile()" class="sub vr_submit">Submit</button>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="propic">
            <section class="pic_upload">
               <div class="container">
                  <div class="top_words">
                     <p class="top_wordssa">
                        You Can Edit your <span class="red">Profile</span> Photo 
                     </p>
                     <div class="full_blue">
                        <div class="top_word_blue">
                           <p class="blue_head">Show Picture to People You want Or Interested In</p>
                        </div>
                        <div class="bottom_word_blue">
                           <div class="Img_blue">
                              <img src="imgs/{{$edit_bprof[0]->profile_image}}" class=" profile_image img-fluid blue_help" alt="noimg">
                              <p class="allowd_imgs">jpg/png/gif Formate oly</p>
                              <p class="allowd_imgs">(Max-size :10 mb)</p>
                           </div>
                           <div class="Img_blue_pic-upload">
                                 <form enctype="multipart/form-data" id="upload_form" role="form">
                              <input name="logo" id='logo' type="file" class="upload_btn" accept=".png, .jpg, .jpeg">
                               <div id="uploadstat" style="text-align:center;width:60%;margin:auto;display:none"> <img style="width: 50px;"  src="images/bx_loader.gif" /> </div>
                           </form>
                           <button class="img_btn_click"onclick="uploadImage()" >submit</button>
                              <!-- <button type="button" class="upload_btn">ADD Photo Now</button> -->
                         <!--      <p class="file_upload">
                                 No Download allowed
                              </p>
                              <p class="file_upload">
                                 Watermark further Safety
                              </p> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="buzz">
           <?php if(isset($edit_secprof[0]->user_idk)){ ?>
          <div class="pers_det">
              <form class="proff">
                <div class="sub_pers_det">
                <p class="fom_prs">Apperance</p>
                </div>
                <div class="sub_pers_details">
                    <table class="table common_rg_form">
                    <tbody>
                      <tr class="reg_form_vr_tr pof_wts">
                          <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">Weight</label>
                          </td>
                          <td class="reg_form_vr_td_rht pof_wt">
                          <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="faculty">
                            <option value="{{$edit_secprof[0]->weight}}"  selected>{{$edit_secprof[0]->weight}}</option>
                             @foreach($editsec_weight as $editsec_weights)
                            <option value="{{$editsec_weights->name}}">{{$editsec_weights->name}}</option>
                           @endforeach
                          </select>

                          <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                      </tr>
                      <tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                           <label for="first_name" class="reg_label_vr_form">Height</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                          <select class="chzn-select form-control secondry_height prof_height sec_reg frm-field " name="faculty">
                          <option value="{{$edit_secprof[0]->height}}"  selected>{{$edit_secprof[0]->height}}</option>
                          @foreach($editsec_height as $editsec_heights)
                          <option value="{{$editsec_heights->name}}">{{$editsec_heights->name}}</option>
                          @endforeach
                          </select>

                          <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Body Type</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                        <?php
                          $bodytype=$edit_secprof[0]->bodytype;
                          ?>
                          @if($bodytype=="Slim")
                        <label  class="secondry_bodytype user_Body radiolabel radio_button  crRadio checked">
                          <input type="radio" tabindex="4" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Slim" name="phyStatuss" id="gendermales"checked> Slim
                          </label>
                          <label  class="secondry_bodytype user_Body  radiolabel radio_button crRadio">
                          <input type="radio" tabindex="5" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Athelatic" name="phyStatuss" id="genderfemales"> Athelatic
                          </label> 
                          <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio">
                          <input type="radio" tabindex="6" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Average" name="phyStatuss" id="genderfemales"> Average
                          </label>
                           <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio">
                          <input type="radio" tabindex="7" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Heavy" name="phyStatuss" id="genderfemales"> Heavy
                          </label>
                          @elseif($bodytype=="Athelatic")
                        <label  class="secondry_bodytype user_Body radiolabel radio_button  crRadio">
                          <input type="radio" tabindex="4" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Slim" name="phyStatuss" id="gendermales"> Slim
                          </label>
                          <label  class="secondry_bodytype user_Body  radiolabel radio_button crRadio checked">
                          <input type="radio" tabindex="5" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Athelatic" name="phyStatuss" id="genderfemales"checked> Athelatic
                          </label> 
                          <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio">
                          <input type="radio" tabindex="6" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Average" name="phyStatuss" id="genderfemales"> Average
                          </label>
                           <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio">
                          <input type="radio" tabindex="7" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Heavy" name="phyStatuss" id="genderfemales"> Heavy
                          </label>
                          @elseif($bodytype=="Average")
                        <label  class="secondry_bodytype user_Body radiolabel radio_button  crRadio">
                          <input type="radio" tabindex="4" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Slim" name="phyStatuss" id="gendermales"> Slim
                          </label>
                          <label  class="secondry_bodytype user_Body  radiolabel radio_button crRadio">
                          <input type="radio" tabindex="5" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Athelatic" name="phyStatuss" id="genderfemales"> Athelatic
                          </label> 
                          <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio checked">
                          <input type="radio" tabindex="6" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Average" name="phyStatuss" id="genderfemales"checked> Average
                          </label>
                           <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio">
                          <input type="radio" tabindex="7" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Heavy" name="phyStatuss" id="genderfemales"> Heavy
                          </label> 
                          @elseif($bodytype=="Heavy")
                        <label  class="secondry_bodytype user_Body radiolabel radio_button  crRadio">
                          <input type="radio" tabindex="4" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Slim" name="phyStatuss" id="gendermales"> Slim
                          </label>
                          <label  class="secondry_bodytype user_Body  radiolabel radio_button crRadio">
                          <input type="radio" tabindex="5" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Athelatic" name="phyStatuss" id="genderfemales"> Athelatic
                          </label> 
                          <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio">
                          <input type="radio" tabindex="6" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Average" name="phyStatuss" id="genderfemales"> Average
                          </label>
                           <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio checked">
                          <input type="radio" tabindex="7" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Heavy" name="phyStatuss" id="genderfemales"checked> Heavy
                          </label> 
                          @elseif($bodytype=="")
                        <label  class="secondry_bodytype user_Body radiolabel radio_button  crRadio">
                          <input type="radio" tabindex="4" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Slim" name="phyStatuss" id="gendermales"> Slim
                          </label>
                          <label  class="secondry_bodytype user_Body  radiolabel radio_button crRadio">
                          <input type="radio" tabindex="5" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Athelatic" name="phyStatuss" id="genderfemales"> Athelatic
                          </label> 
                          <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio">
                          <input type="radio" tabindex="6" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Average" name="phyStatuss" id="genderfemales"> Average
                          </label>
                           <label  class="secondry_bodytype user_Body radiolabel radio_button crRadio ">
                          <input type="radio" tabindex="7" class="secondry_bodytype user_gender radiomargin square_radio radio gender_valid" value="Heavy" name="phyStatuss" id="genderfemales"> Heavy
                          </label>
                          @endif
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr pof_wts">
                      <td class="reg_form_vr_td_lft pof_wtss">
                      <label for="first_name" class="reg_label_vr_form">Complexion</label>
                      </td>
                      <td class="reg_form_vr_td_rht pof_wt">
                      <?php
                        $complexion=$edit_secprof[0]->Complexion;
                        ?>
                        @if($complexion=="Very Fair")
                      <label  class="user_Complexion secondry_Complexion secradiolabel radio_button  crRadio checked">
                        <input type="radio" tabindex="11" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Very Fair" name="phyStatuss1" id="gendermaless" checked> Very Fair
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="12" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Fair" name="phyStatuss1" id="genderfemaless"> Fair
                        </label> 
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="13" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value=" Wheatish" name="phyStatuss1" id="genderfemaless"> Wheatish
                        </label>
                         <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="14" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Wheatish brown" name="phyStatuss1" id="genderfemaless"> Wheatish brown
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="15" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Dark" name="phyStatuss1" id="genderfemaless"> Dark
                        </label> 
                        @elseif($complexion=="Fair")
                      <label  class="user_Complexion secondry_Complexion secradiolabel radio_button  crRadio">
                        <input type="radio" tabindex="11" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Very Fair" name="phyStatuss1" id="gendermaless"> Very Fair
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio checked">
                        <input type="radio" tabindex="12" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Fair" name="phyStatuss1" id="genderfemaless" checked> Fair
                        </label> 
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="13" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value=" Wheatish" name="phyStatuss1" id="genderfemaless"> Wheatish
                        </label>
                         <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="14" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Wheatish brown" name="phyStatuss1" id="genderfemaless"> Wheatish brown
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="15" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Dark" name="phyStatuss1" id="genderfemaless"> Dark
                        </label> 
                        @elseif($complexion=="Wheatish")
                      <label  class="user_Complexion secondry_Complexion secradiolabel radio_button  crRadio">
                        <input type="radio" tabindex="11" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Very Fair" name="phyStatuss1" id="gendermaless"> Very Fair
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="12" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Fair" name="phyStatuss1" id="genderfemaless"> Fair
                        </label> 
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio checked">
                        <input type="radio" tabindex="13" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value=" Wheatish" name="phyStatuss1" id="genderfemaless"checked> Wheatish
                        </label>
                         <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="14" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Wheatish brown" name="phyStatuss1" id="genderfemaless"> Wheatish brown
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="15" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Dark" name="phyStatuss1" id="genderfemaless"> Dark
                        </label>
                         @elseif($complexion=="Wheatish brown")
                      <label  class="user_Complexion secondry_Complexion secradiolabel radio_button  crRadio">
                        <input type="radio" tabindex="11" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Very Fair" name="phyStatuss1" id="gendermaless"> Very Fair
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="12" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Fair" name="phyStatuss1" id="genderfemaless"> Fair
                        </label> 
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="13" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value=" Wheatish" name="phyStatuss1" id="genderfemaless"> Wheatish
                        </label>
                         <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio checked">
                        <input type="radio" tabindex="14" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Wheatish brown" name="phyStatuss1" id="genderfemaless"checked> Wheatish brown
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="15" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Dark" name="phyStatuss1" id="genderfemaless"> Dark
                        </label>
                         @elseif($complexion=="Dark")
                      <label  class="user_Complexion secondry_Complexion secradiolabel radio_button  crRadio">
                        <input type="radio" tabindex="11" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Very Fair" name="phyStatuss1" id="gendermaless"> Very Fair
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="12" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Fair" name="phyStatuss1" id="genderfemaless"> Fair
                        </label> 
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="13" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value=" Wheatish" name="phyStatuss1" id="genderfemaless"> Wheatish
                        </label>
                         <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="14" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Wheatish brown" name="phyStatuss1" id="genderfemaless"> Wheatish brown
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio checked">
                        <input type="radio" tabindex="15" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Dark" name="phyStatuss1" id="genderfemaless"checked> Dark
                        </label> 
                        @elseif($complexion=="")
                      <label  class="user_Complexion secondry_Complexion secradiolabel radio_button  crRadio">
                        <input type="radio" tabindex="11" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Very Fair" name="phyStatuss1" id="gendermaless"> Very Fair
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="12" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Fair" name="phyStatuss1" id="genderfemaless"> Fair
                        </label> 
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="13" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value=" Wheatish" name="phyStatuss1" id="genderfemaless"> Wheatish
                        </label>
                         <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="14" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Wheatish brown" name="phyStatuss1" id="genderfemaless"> Wheatish brown
                        </label>
                        <label  class="secondry_Complexion user_Complexion radiolabel radio_button crRadio">
                        <input type="radio" tabindex="15" class="secondry_Complexion user_gender radiomargin square_radio radio gender_valid" value="Dark" name="phyStatuss1" id="genderfemaless"> Dark
                        </label>
                        @endif
                        <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                      </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="sub_pers_det">
                     <p class="fom_prs">Personal details</p>
                  </div>
                  <div class="sub_pers_details">
                      <table class="table common_rg_form">
                        <tbody>
                        <tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                        <label for="first_name" class="reg_label_vr_form">Education in details</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                        <input  class="parents_contact_no form-control secondry_education pro_edu reg_inpt profs" value="{{$edit_secprof[0]->education}}" type="text" name="number" placeholder=" " =""/>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                        <label for="first_name" class="reg_label_vr_form">Occupation in details</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                        <input  class="secondry_occupation parents_contact_no form-control pro_ocu reg_inpt profs" value="{{$edit_secprof[0]->occupation}}" type="text" name="number" placeholder=" " =""/>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">Goals</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                          <input value="{{$edit_secprof[0]->goal}}" class="secondry_goal parents_contact_no form-control pro_ocu reg_inpt profs" type="text" name="number" placeholder=" " =""/>
                            <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                      </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                        <label for="first_name" class="reg_label_vr_form">languages known</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                        <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                         <div class="fleft adst">

                          <select  id="spokenLanguagesTemp" multiple="multiple" name="spokenLanguagesTemp[]" size="5" tabindex="12" class="valid secondry_lang languagesKnown lang_db_save">
                            @foreach($editsec_lang as $editsec_langs)
                          <option  onclick="langKnown(this)" value="{{$editsec_langs->name}}">{{$editsec_langs->name}}</option>
                         @endforeach
                        </select>

                            <p class="dclick" style="font-size: 11px;">Double click on the value select</p>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pers_io">
                            <div class="fleft padt30 padl5 adsts" ><img class="arow img-fluid"src="https://imgs.nadarmatrimony.com/cbsimages/lr-arrow.gif"></div>
                          </div>
                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                            <div class="fleft frmtogglemarg1 adstss">
                            <input id="newLang" class="secondry_lang inpu_btn" type="text">   <br>
                           <select size="4"  class="secondry_lang lang_db_save languagesKnown" multiple="" id="spokenLanguages" name="spokenLanguages[]" tabindex="13" >
                              <?php
                                $lang_sep = $edit_secprof[0]->lang;
                                 $lang_dslct = explode(",",$lang_sep);

                                ?>

                              <?php 
                                  for($i=0; $i<count($lang_dslct); $i++){
                                    echo "<option selected onclick='langDeselect(this)' value=".$lang_dslct[$i]." >  ".$lang_dslct[$i]." </option>";
                                 }
                               ?>
                              
                            </select>
                            <button  id="langBtn" class="inuput_btn" onclick="addNewLang()">ADD</button>
                             <p class="dclick" style="font-size: 11px;">Double click on the value Deselect</p>
                          </div>
                        </div>
                        </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                        </tr>
                        </tbody>
                      </table>
                  </div>
                  <div class="sub_pers_det">
                      <p class="fom_prs">Family details</p>
                  </div>
                  <div class="sub_pers_details">
                      <table class="table common_rg_form">
                        <tbody>
                        <tr class="reg_form_vr_tr pof_wts">
                          <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">Native place</label>
                          </td>
                          <td class="reg_form_vr_td_rht pof_wt">
                          <input  class="secondry_native parents_contact_no form-control pro_nativ reg_inpt profs" value="{{$edit_secprof[0]->native}}" type="text" name="number" placeholder=" " =""/>
                            <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                          </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                          <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">Father Occupation</label>
                          </td>
                          <td class="reg_form_vr_td_rht pof_wt">
                          <input  class="secondry_fathr_occu parents_contact_no form-control pro_father reg_inpt profs" value="{{$edit_secprof[0]->fathr_occu}}" type="text" name="number" placeholder=" " =""/>
                            <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                          </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                            <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Mother Occupation</label>
                            </td>
                            <td class="reg_form_vr_td_rht pof_wt">
                            <input  class="secondry_mothr_occu parents_contact_no form-control pro_mother reg_inpt profs" value="{{$edit_secprof[0]->mothr_occu}}" type="text" name="number" placeholder=" " =""/>
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                            </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                          <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">No of Brothers</label>
                          </td>
                          <td class="reg_form_vr_td_rht pof_wt">
                          <select class="secondry_brothers chzn-select form-control prof_Brothers sec_reg frm-field " name="height">
                            <option value="{{$edit_secprof[0]->brothers}}"  selected>{{$edit_secprof[0]->brothers}}</option>
                            <option>None</option>
                            <?php  
                            for ($i= 1; $i <= 10; $i++) {
                             echo "<option value='$i'> $i </option>";
                            }
                            ?>
                          </select>
                          <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                            <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Brothers Married</label>
                            </td>
                            <td class="reg_form_vr_td_rht pof_wt">
                            <select class="secondry_bro_marri chzn-select form-control prof_Brothers_marri sec_reg frm-field " name="height">
                              <option value="{{$edit_secprof[0]->bro_marri}}"  selected>{{$edit_secprof[0]->bro_marri}}</option>
                              <option>None</option>
                               <?php  
                              for ($i= 1; $i <= 10; $i++) {
                               echo "<option value='$i'> $i </option>";
                              }
                              ?>
                            </select>
                            <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                            </td>
                        </tr> 
                        <tr class="reg_form_vr_tr pof_wts">
                          <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">No of Sisters</label>
                          </td>
                          <td class="reg_form_vr_td_rht pof_wt">
                          <select class="secondry_sis chzn-select form-control prof_sisters sec_reg frm-field " name="height">
                             <option value="{{$edit_secprof[0]->sisters}}"  selected>{{$edit_secprof[0]->sisters}}</option>
                           <option>None</option>
                            <?php  
                            for ($i= 1; $i <= 10; $i++) {
                             echo "<option value='$i'> $i </option>";
                            }
                            ?>
                          </select>
                          <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                          <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">Sister Married</label>
                          </td>
                          <td class="reg_form_vr_td_rht pof_wt">
                          <select class="secondry_sis_marri chzn-select form-control prof_sister_marri sec_reg frm-field " name="height">
                            <option value="{{$edit_secprof[0]->sis_marri}}"  selected>{{$edit_secprof[0]->sis_marri}}</option>
                            <option>None</option>
                              <?php  
                            for ($i= 1; $i <= 10; $i++) {
                             echo "<option value='$i'> $i </option>";
                            }
                            ?>
                          </select>
                          <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                        </tr>
                        <tr class="reg_form_vr_tr pof_wts">
                          <td class="reg_form_vr_td_lft pof_wtss">
                          <label for="first_name" class="reg_label_vr_form">Few lines about your family</label>
                          </td>
                          <td class="reg_form_vr_td_rht pof_wt">
                          <div class="cmt"><a class="txt_area" href="#">Sample Description</a></div>
                          <textarea class="form-control secondry_abt_family" rows="5" max='100' id="comment" value="{{$edit_secprof[0]->abt_family}}" name="text">{{$edit_secprof[0]->abt_family}}</textarea>
                          <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                  </div>
                  <div class="sub_pers_det">
                      <p class="fom_prs">Life Styles</p>
                  </div>
                    <div class="sub_pers_details">
                        <table class="table common_rg_form">
                            <tbody>
                            <tr class="reg_form_vr_tr pof_wts">
                            <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Eating Habits</label>
                            </td>
                            <td class="reg_form_vr_td_rht pof_wt">
                            <?php
                              $eathabit=$edit_secprof[0]->eat_habt;
                              ?>
                              @if($eathabit=="Vegetarian")
                             <label  class="secondry_eat_habt user_Eating radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="51" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegetarian" name="phyStatss1" id="Eating_habit" checked> Vegetarian
                              </label>
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="52" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Non Vegetarian" name="phyStatss1" id="Eating_habit"> Non Vegetarian
                              </label> 
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="53" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Eggtarian" name="phyStass1" id="Eating_habit"> Eggtarian
                              </label>
                               <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="54" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegan" name="phyStatss1" id="Eating_habit"> Vegan
                              </label>
                               @elseif($eathabit=="Non Vegetarian")
                             <label  class="secondry_eat_habt user_Eating radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="51" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegetarian" name="phyStatss1" id="Eating_habit"> Vegetarian
                              </label>
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="52" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Non Vegetarian" name="phyStatss1" id="Eating_habit" checked> Non Vegetarian
                              </label> 
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="53" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Eggtarian" name="phyStass1" id="Eating_habit"> Eggtarian
                              </label>
                               <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="54" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegan" name="phyStatss1" id="Eating_habit"> Vegan
                              </label> 
                              @elseif($eathabit=="Eggtarian")
                             <label  class="secondry_eat_habt user_Eating radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="51" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegetarian" name="phyStatss1" id="Eating_habit"> Vegetarian
                              </label>
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="52" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Non Vegetarian" name="phyStatss1" id="Eating_habit"> Non Vegetarian
                              </label> 
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="53" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Eggtarian" name="phyStass1" id="Eating_habit" checked> Eggtarian
                              </label>
                               <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="54" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegan" name="phyStatss1" id="Eating_habit"> Vegan
                              </label>
                              @elseif($eathabit=="Vegan")
                             <label  class="secondry_eat_habt user_Eating radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="51" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegetarian" name="phyStatss1" id="Eating_habit"> Vegetarian
                              </label>
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="52" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Non Vegetarian" name="phyStatss1" id="Eating_habit"> Non Vegetarian
                              </label> 
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="53" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Eggtarian" name="phyStass1" id="Eating_habit"> Eggtarian
                              </label>
                               <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="54" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegan" name="phyStatss1" id="Eating_habit" checked> Vegan
                              </label>
                              @elseif($eathabit=="")
                             <label  class="secondry_eat_habt user_Eating radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="51" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegetarian" name="phyStatss1" id="Eating_habit"> Vegetarian
                              </label>
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="52" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Non Vegetarian" name="phyStatss1" id="Eating_habit"> Non Vegetarian
                              </label> 
                              <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio">
                              <input type="radio" tabindex="53" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Eggtarian" name="phyStass1" id="Eating_habit"> Eggtarian
                              </label>
                               <label  class="secondry_eat_habt user_Eating radiolabel radio_button crRadio ">
                              <input type="radio" tabindex="54" class="secondry_eat_habt user_Eating radiomargin square_radio radio gender_valid" value="Vegan" name="phyStatss1" id="Eating_habit" > Vegan
                              </label>
                              @endif
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                            </td>
                            </tr>
                            <tr class="reg_form_vr_tr pof_wts">
                            <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Drinking Habits</label>
                            </td>
                            <td class="reg_form_vr_td_rht pof_wt">
                            <?php
                              $drinkhabit=$edit_secprof[0]->drnk_habt;
                              ?>
                              @if($drinkhabit=="Non-drinking")
                             <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="21" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Non-drinking" name="phyStatuss2" id="drink_habit" checked> Non-drinking
                              </label>
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="22" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Regular drinking" name="phyStatuss2" id="drink_habit">Regular drinking
                              </label> 
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="23" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Light/social drinker" name="phyStatuss2" id="drink_habit"> Light/social drinker
                              </label> 
                              @elseif($drinkhabit=="Regular drinking")
                             <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="21" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Non-drinking" name="phyStatuss2" id="drink_habit"> Non-drinking
                              </label>
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="22" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Regular drinking" name="phyStatuss2" id="drink_habit" checked>Regular drinking
                              </label> 
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="23" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Light/social drinker" name="phyStatuss2" id="drink_habit"> Light/social drinker
                              </label> 
                              @elseif($drinkhabit=="Light/social drinker")
                             <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="21" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Non-drinking" name="phyStatuss2" id="drink_habit"> Non-drinking
                              </label>
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="22" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Regular drinking" name="phyStatuss2" id="drink_habit">Regular drinking
                              </label> 
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="23" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Light/social drinker" name="phyStatuss2" id="drink_habit" checked> Light/social drinker
                              </label>
                              @elseif($drinkhabit=="")
                             <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button  crRadio">
                              <input type="radio" tabindex="21" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Non-drinking" name="phyStatuss2" id="drink_habit"> Non-drinking
                              </label>
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="22" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Regular drinking" name="phyStatuss2" id="drink_habit">Regular drinking
                              </label> 
                              <label  class="secondry_drnk_habt user_Drinking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="23" class="secondry_drnk_habt user_Drinking radiomargin square_radio radio gender_valid" value="Light/social drinker" name="phyStatuss2" id="drink_habit"> Light/social drinker
                              </label>
                              @endif
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                            </td>
                            </tr>
                            <tr class="reg_form_vr_tr pof_wts">
                            <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Smoking Habits</label>
                            </td>
                            <td class="reg_form_vr_td_rht pof_wt">
                            <?php
                              $smokhabt=$edit_secprof[0]->smok_habt;
                              ?>
                              @if($smokhabt=="Regular smoker")
                             <label  class="secondry_smok_habt user_Smoking radiolabel radio_button  crRadio checked">
                              <input type="radio" tabindex="31" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Non-smoker" name="phyStatuss3" id="smoke_habit checked"> Non-smoker
                              </label>
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="32" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Regular smoker" name="phyStatuss3" id="smoke_habit">Regular smoker
                              </label> 
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="33" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Light/social smoker" name="phyStatuss3" id="smoke_habit"> Light/social smoker 
                              </label>
                              @elseif($smokhabt=="Light/social smoker")
                             <label  class="secondry_smok_habt user_Smoking radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="31" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Non-smoker" name="phyStatuss3" id="smoke_habit"> Non-smoker
                              </label>
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="32" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Regular smoker" name="phyStatuss3" id="smoke_habit checked">Regular smoker
                              </label> 
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="33" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Light/social smoker" name="phyStatuss3" id="smoke_habit"> Light/social smoker
                              </label>
                              @elseif($smokhabt=="Non-smoker")
                             <label  class="secondry_smok_habt user_Smoking radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="31" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Non-smoker" name="phyStatuss3" id="smoke_habit"> Non-smoker
                              </label>
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="32" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Regular smoker" name="phyStatuss3" id="smoke_habit">Regular smoker
                              </label> 
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio checked">
                              <input type="radio" tabindex="33" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Light/social smoker" name="phyStatuss3" id="smoke_habit" checked> Light/social smoker
                              </label> 
                              @elseif($smokhabt=="")
                             <label  class="secondry_smok_habt user_Smoking radiolabel radio_button  crRadio ">
                              <input type="radio" tabindex="31" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Non-smoker" name="phyStatuss3" id="smoke_habit"> Non-smoker
                              </label>
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio">
                              <input type="radio" tabindex="32" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Regular smoker" name="phyStatuss3" id="smoke_habit">Regular smoker
                              </label> 
                              <label  class="secondry_smok_habt user_Smoking radiolabel radio_button crRadio ">
                              <input type="radio" tabindex="33" class="secondry_smok_habt user_Smoking radiomargin square_radio radio gender_valid" value="Light/social smoker" name="phyStatuss3" id="smoke_habit"> Light/social smoker
                              </label>
                              @endif
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                            </td>
                            </tr>
                            <tr class="reg_form_vr_tr pof_wts">
                            <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Interests</label>
                            </td>
                            <td class="reg_form_vr_td_rht pof_wt">
                            <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                             <div class="fleft adst">
                                <?php
                                    $intrst_sep = $edit_secprof[0]->interest;
                                     $ntrst_dslct = explode(",",$intrst_sep);

                                    ?>
                            <select id="Intrests" multiple="multiple" name="spokenLanguagesTemp[]" size="5" tabindex="12" class="secondry_interest interest_db_save valid">
                              @foreach($editsec_interests as $editsec_interestss)
                                 <option onclick="Intr(this)" value="{{$editsec_interestss->name}}">{{$editsec_interestss->name}}</option>
                               @endforeach
                               </select>
                                <p class="dclick" style="font-size: 11px;">Double click on the value select</p>
                                </div>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pers_io">
                                <div class="fleft padt30 padl5 adsts" ><img class="arow img-fluid"src="https://imgs.nadarmatrimony.com/cbsimages/lr-arrow.gif"></div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                                <div class="fleft frmtogglemarg1 adstss">
                                <input id="newIntr" class="secondry_interest inpu_btn" type="text">   <br>
                                <select size="4" class="secondry_interest interest_db_save" multiple="" id="IntrestsData" name="spokenLanguages[]" tabindex="13">
                                    <?php 
                                      for($i=0; $i<count($ntrst_dslct); $i++){
                                        echo "<option selected onclick='InterestDeselect(this)' value=".$ntrst_dslct[$i]." >  ".$ntrst_dslct[$i]." </option>";
                                     }
                                   ?>
                                </select>
                               <button  id="intrBtn" class="inuput_btn" onclick="addNewIntr()">ADD</button>
                                 <p class="dclick" style="font-size: 11px;">Double click on the value Deselect</p>
                              </div>
                            </div>
                            </div>
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                            </td>
                            </tr>
                            <tr class="reg_form_vr_tr pof_wts">
                            <td class="reg_form_vr_td_lft pof_wtss">
                            <label for="first_name" class="reg_label_vr_form">Hobbies</label>
                            </td>
                            <td class="reg_form_vr_td_rht pof_wt">
                            <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                             <div class="fleft adst">
                                <?php
                                    $hobi_sep = $edit_secprof[0]->hobbis;
                                     $hobi_dslct = explode(",",$hobi_sep);

                                    ?>
                            <select id="hobbies" multiple="multiple" name="spokenLanguagesTemp[]" size="5"  tabindex="12" class="secondry_hobbis hobbies_db_save valid">
                              <option value="{{$edit_secprof[0]->hobbis}}"  selected>{{$edit_secprof[0]->hobbis}}</option>
                             @foreach($editsec_hobbiess as $editsec_hobbiesss)
                             <option onclick="hobbie(this)" value="{{$editsec_hobbiesss->name}}">{{$editsec_hobbiesss->name}}</option>
                             @endforeach
                               </select>
                                <p class="dclick" style="font-size: 11px;">Double click on the value select</p>
                                </div>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pers_io">
                                <div class="fleft padt30 padl5 adsts" ><img class="arow img-fluid"src="https://imgs.nadarmatrimony.com/cbsimages/lr-arrow.gif"></div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                                <div class="fleft frmtogglemarg1 adstss">
                               <input id="newHobb" class="secondry_hobbis inpu_btn" type="text" ><br>
                                <select size="4" class="secondry_hobbis hobbies_db_save" multiple="" id="hobbieData" name="spokenLanguages[]" tabindex="13" >
                                     <?php 
                                      for($i=0; $i<count($hobi_dslct); $i++){
                                        echo "<option selected onclick='hobbieDeselect(this)' value=".$hobi_dslct[$i]." >  ".$hobi_dslct[$i]." </option>";
                                     }
                                   ?>
                                </select>
                                <button  id="hobbBtn" class="inuput_btn"  onclick="addNewHobb()">ADD</button>
                                 <p class="dclick" style="font-size: 11px;">Double click on the value Deselect</p>
                              </div>
                            </div>
                            </div>
                              <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                            </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                  <div class="sub_pers_det">
                      <p class="fom_prs">Favourites</p>
                  </div>
                  <div class="sub_pers_details">
                    <table class="table common_rg_form">
                        <tbody>
                        <tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                        <label for="first_name" class="reg_label_vr_form">Music</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                        <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                         <div class="fleft adst">
                           <?php
                                $music_sep = $edit_secprof[0]->music;
                                 $music_dslct = explode(",",$music_sep);

                                ?>
                          <select id="music" multiple="multiple" name="spokenLanguagesTemp[]" size="5" tabindex="12" class="secondry_music valid">
                              <option value="{{$edit_secprof[0]->music}}"  selected>{{$edit_secprof[0]->music}}</option>
                              @foreach($editsec_music as $editsec_musics)
                             <option onclick="music(this)" value="{{$editsec_musics->name}}">{{$editsec_musics->name}}</option>
                             @endforeach 
                            </select>
                            <p class="dclick" style="font-size: 11px;">Double click on the value select</p>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pers_io">
                            <div class="fleft padt30 padl5 adsts" ><img class="arow img-fluid"src="https://imgs.nadarmatrimony.com/cbsimages/lr-arrow.gif"></div>
                          </div>
                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                            <div class="fleft frmtogglemarg1 adstss">
                          <input id="newmusic" class="secondry_music inpu_btn" type="text"><br>
                          <select size="5" class="secondry_music music_db_save" multiple="" id="musicData" name="spokenLanguages[]" tabindex="13" >
                             <?php 
                                  for($i=0; $i<count($music_dslct); $i++){
                                    echo "<option selected onclick='musicDeselect(this)' value=".$music_dslct[$i]." >  ".$music_dslct[$i]." </option>";
                                 }
                               ?>
                            </select>
                            <button  id="muscBtn" class="inuput_btn" onclick="addNewMusic()">ADD</button>
                             <p class="dclick" style="font-size: 11px;">Double click on the value Deselect</p>
                          </div>
                        </div>
                        </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                        </tr><tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                        <label for="first_name" class="reg_label_vr_form">Sports</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                        <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                         <div class="fleft adst">
                           <?php
                                $sport_sep = $edit_secprof[0]->sport;
                                 $sport_dslct = explode(",",$sport_sep);

                                ?>
                        <select id="sports" multiple="multiple" name="spokenLanguagesTemp[]" size="5" tabindex="12" class="secondry_sport valid">
                            <option onclick="sports(this)"  value="{{$edit_secprof[0]->sport}}"  selected>{{$edit_secprof[0]->sport}}</option>
                         @foreach($editsec_sports as $editsec_sportss)
                           <option onclick="sports(this)" value="{{$editsec_sportss->name}}">{{$editsec_sportss->name}}</option>
                         @endforeach 
                         </select>
                            <p class="dclick" style="font-size: 11px;">Double click on the value select</p>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pers_io">
                            <div class="fleft padt30 padl5 adsts" ><img class="arow img-fluid"src="https://imgs.nadarmatrimony.com/cbsimages/lr-arrow.gif"></div>
                          </div>
                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                            <div class="fleft frmtogglemarg1 adstss">
                          <input id="newsport" class="secondry_sport inpu_btn" type="text" >
                          <select  size="5" multiple="" class="secondry_sport sports_db_save" id="sportsData" name="spokenLanguages[]" tabindex="13" >
                             <?php 
                                  for($i=0; $i<count($sport_dslct); $i++){
                                    echo "<option selected onclick='sportDeselect(this)' value=".$sport_dslct[$i]." >  ".$sport_dslct[$i]." </option>";
                                 }
                               ?>
                            </select>
                           <button  id="sportBtn" class="inuput_btn" onclick="addNewSports()">ADD</button>
                             <p class="dclick" style="font-size: 11px;">Double click on the value Deselect</p>
                          </div>
                        </div>
                        </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                        </tr><tr class="reg_form_vr_tr pof_wts">
                        <td class="reg_form_vr_td_lft pof_wtss">
                        <label for="first_name" class="reg_label_vr_form">Food</label>
                        </td>
                        <td class="reg_form_vr_td_rht pof_wt">
                        <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                         <div class="fleft adst">
                           <?php
                                $food_sep = $edit_secprof[0]->food;
                                 $food_dslct = explode(",",$food_sep);

                                ?>
                        <select  id="food" multiple="multiple" name="spokenLanguagesTemp[]" size="5" tabindex="12" class="secondry_food valid">
                            <option onclick="food(this)"  value="{{$edit_secprof[0]->sport}}"  selected>{{$edit_secprof[0]->food}}</option>
                         @foreach($editsec_food as $editsec_foods)
                           <option onclick="food(this)" value="{{$editsec_foods->name}}">{{$editsec_foods->name}}</option>
                         @endforeach
                         </select>
                            <p class="dclick" style="font-size: 11px;">Double click on the value select</p>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pers_io">
                            <div class="fleft padt30 padl5 adsts" ><img class="arow img-fluid"src="https://imgs.nadarmatrimony.com/cbsimages/lr-arrow.gif"></div>
                          </div>
                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pers_io">
                            <div class="fleft frmtogglemarg1 adstss">
                           <input id="newfood" class="secondry_food inpu_btn" type="text" ><br>
                            <select size="5" class="secondry_food food_db_save" multiple="" id="foodData" name="spokenLanguages[]" tabindex="13" >
                               <?php 
                                  for($i=0; $i<count($food_dslct); $i++){
                                    echo "<option selected onclick='foodDeselect(this)' value=".$food_dslct[$i]." >  ".$food_dslct[$i]." </option>";
                                 }
                               ?>
                              </select>
                              <button  id="foodBtn" class="inuput_btn"  onclick="addNewFood()">ADD</button>
                             <p class="dclick" style="font-size: 11px;">Double click on the value Deselect</p>
                          </div>
                        </div>
                        </div>
                          <p  class="pwdFlag"  style="color:red;font-size:11px"></p>
                        </td>
                        </tr>
                        </tbody>
                  </table>
                   <p class="edit_secreg" style="display: none;">edit_flag</p>
                </div>
              </form>
              <div class="submits">
                  <a class="submis" ><button onclick="submit_secondry_reg()" class="sub vr_submit">Submit</button></a>
              </div>
        </div>
      </div>
       <?php } else{ ?>
         <h4>No Secondary Profile Found </h4>
       <?php } ?>
      <div role="tabpanel" class="tab-pane fade" id="horoscope">
            <section class="pic_upload">
               <div class="container">
                  <div class="top_words">
                     <p class="top_wordssa">
                        You Can Edit your <span class="red">Horoscope</span>Picture 
                     </p>
                     <div class="full_blue">
                        <div class="top_word_blue">
                           <p class="blue_head">Show Picture to People You want Or Interested In</p>
                        </div>
                        <div class="bottom_word_blue">
                           <div class="Img_blue">
                              <img src="imgs/{{$edit_bprof[0]->profile_horoscope}}" class=" profile_horoscope img-fluid blue_help" alt="noimg">
                              <p class="allowd_imgs">jpg/png/gif Formate oly</p>
                              <p class="allowd_imgs">(Max-size :10 mb)</p>
                           </div>
                           <div class="Img_blue_pic-upload">
                                 <form enctype="multipart/form-data" id="upload_horoscope" role="form">
                              <input name="logo" id='logo' type="file" class="upload_btn" accept=".png, .jpg, .jpeg">
                              <div id="uploadhoroStatus" style="text-align:center;width:60%;margin:auto;display:none"> <img style="width: 50px;"  src="images/bx_loader.gif" /> </div>
                           </form>
                           <button class="img_btn_click"onclick="uploadHoroscope()" >submit</button>
                              <!-- <button type="button" class="upload_btn">ADD Photo Now</button> -->
                          <!--     <p class="file_upload">
                                 No Download allowed
                              </p>
                              <p class="file_upload">
                                 Watermark further Safety
                              </p> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
      </div>
    </div>
</section>
<script type="text/javascript">
function num_display(){
document.getElementById("hide").style.display = 'block';
}
</script> 
  <script>
function uploadImage(){
  $("#uploadstat").css('display','block');
$.ajax({
      url:'url/image_uploadurl',
      data:new FormData($("#upload_form")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      beforeSend: function() {
       $("#uploadstat").css('display','block');
       },
      success:function(resp){
        console.log(resp.hash_name);
$('.profile_image').attr("src","imgs/"+resp);
alertify.confirm('Image Uploaded Sucessfully', 'Click ok to Proceed or Cancel to Change Your Image', function(){ window.location.href = "edit_profile";}
                , function(){ $("#uploadstat").css('display','none'); alertify.error('You can Change Your Image')});
      },
    });
}
</script> 
 <script>
function uploadHoroscope(){
  $("#uploadstat").css('display','block');
$.ajax({
      url:'horoscope_uploadurl',
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data:new FormData($("#upload_horoscope")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      beforeSend: function() {
       $("#uploadstat").css('display','block');
       },
      success:function(resp){
        
        console.log(resp.hash_name);
$('.profile_horoscope').attr("src","imgs/"+resp);
alertify.confirm('Image Uploaded Sucessfully', 'Click ok to Proceed or Cancel to Change Your horoscope', function(){ window.location.href = "edit_profile";}
                , function(){ $("#uploadhoroStatus").css('display','none'); alertify.error('You can Change Your Image')});
      },
    });
}
</script>
 @include('footer')
