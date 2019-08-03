@include('header')
<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<!-- Bootstrap CSS -->
<!-- jQuery first, then Bootstrap JS. -->
<!-- Nav tabs -->
<section class="edit_profs">
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                 <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">View Basic profile</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#propic" role="tab" data-toggle="tab">View profile picture</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">View Secondary profile</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#horoscope" role="tab" data-toggle="tab">View Horoscope Piture</a>
              </li>
        </ul>
         <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="profile">
                <form id="userForm" class="ref_form" >
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
                                    <p class="view_profile">{{$edit_bprof[0]->profile_name}}</p>
                                  </td>
                              </tr>
                               <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                      <label for="first_name"  class="reg_label_vr_form">Father/Guardian Name<span class="red_star">*</span></label>

                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                        <p class="view_profile">{{$edit_bprof[0]->prof_father_guardian_name}}</p>
                                    </td>
                                </tr>
                            <tr class="reg_form_vr_tr">
                                <td class="reg_form_vr_td_lft">
                                    <label for="first_name"  class="reg_label_vr_form">Email<span class="red_star">*</span></label>

                                </td>
                                <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_email}}</p>
                                </td>
                            </tr>
                             <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Age<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                             <p class="view_profile">{{$edit_bprof[0]->profile_age}}</p>
                        </td>
                      </tr>
                            <tr class="reg_form_vr_tr">
                                <td class="reg_form_vr_td_lft">
                                    <label for="first_name" class="reg_label_vr_form">Marital Status <span class="red_star">*</span></label>
                                </td>
                                <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_marial_stat}}</p>
                                </td>
                            </tr>
                            <tr class="reg_form_vr_tr">

                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Gender<span class="red_star">*</span></label>
                                    </td>

                                    <td class="reg_form_vr_td_rht">
                                      <p class="view_profile">{{$edit_bprof[0]->profile_gender}}</p>
                                    </td>

                                </tr>

                                <tr class="reg_form_vr_tr">

                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Physical Status<span class="red_star">*</span></label>
                                    </td>

                                    <td class="reg_form_vr_td_rht">
                                       <p class="view_profile">{{$edit_bprof[0]->prof_user_physichal_status}}</p>
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
                                    <p class="view_profile">{{$edit_bprof[0]->prof_addressline1}}</p>
                                  </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                      <label for="first_name"  class="reg_label_vr_form">Address line 1<span class="red_star">*</span></label>

                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                       <p class="view_profile">{{$edit_bprof[0]->  prof_addressline2}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                  <td class="reg_form_vr_td_lft">
                                    <label for="first_name"  class="reg_label_vr_form">Locality<span class="red_star">*</span></label>

                                  </td>
                                  <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_locallity}}</p>
                                  </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                  <td class="reg_form_vr_td_lft">
                                    <label for="first_name"  class="reg_label_vr_form">Pincode<span class="red_star">*</span></label>

                                  </td>
                                  <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_pincode}}</p>
                                  </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">country Liveing In<span class="red_star">*</span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                      <p class="view_profile">{{$edit_bprof[0]->  profile_user_country}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Residing State <span class="red_star">*</span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                      <p class="view_profile">{{$edit_bprof[0]->profile_user_state}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                    <label for="first_name" class="reg_label_vr_form" >Residing District<span class="red_star">*</span></label>
                                  </td>
                                  <td class="reg_form_vr_td_rht">
                                       <p class="view_profile">{{$edit_bprof[0]->prof_district}}</p>
                                  </td>
                                </tr>
                              <tr class="reg_form_vr_tr">
                                  <td class="reg_form_vr_td_lft">
                                  <label for="first_name" class="reg_label_vr_form">Residing Taluk<span class="red_star">*</span></label>
                                </td>
                                <td class="reg_form_vr_td_rht">
                                    <p class="view_profile">{{$edit_bprof[0]->prof_taluk}}</p>
                                </td>
                              </tr>
                              <tr class="reg_form_vr_tr">
                                  <td class="reg_form_vr_td_lft">
                                  <label for="first_name" class="reg_label_vr_form">Residing Village<span class="red_star">*</span></label>
                                </td>
                                <td class="reg_form_vr_td_rht">
                                    <p class="view_profile">{{$edit_bprof[0]->prof_village}}</p>
                                </td>
                              </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Citizenship<span class="red_star">*</span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_citizenship}}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form_body wow bounceInRight" data-wow-delay="0.5s">
                <span class="persnl_icon"><img src="images/star.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="persnl_head"><p class="prs_hd1">Religious Information</p></span>
                <div class="comm_form_sec">
                        <table class="table common_rg_form">
                            <tbody>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Star <span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                    <p class="view_profile">{{$edit_bprof[0]->prof_user_star}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Rasi<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_raasi}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Gothra <span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                        <p class="view_profile">{{$edit_bprof[0]->prof_user_gothra}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Dosham<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                       <p class="view_profile">{{$edit_bprof[0]->prof_user_dhosam}}</p>
                                    </td>                
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Time of Birth<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                        <p class="view_profile">{{$edit_bprof[0]->prof_user_birthtime}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Country of Birth<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_birthcountry}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">State of Birth<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_raasi}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">City of Birth<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_birthcity}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Chart Style<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                     <p class="view_profile">{{$edit_bprof[0]->prof_user_chartstyle}}</p>
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
                                          <p class="view_profile">{{$edit_bprof[0]->prof_user_edu}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Employed in<span class="red_star">*</span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                       <p class="view_profile">{{$edit_bprof[0]->prof_user_employedin}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr pof_wts">
                              <td class="reg_form_vr_td_lft pof_wtss">
                                <label for="first_name" class="reg_label_vr_form">Income source</label>
                              </td>
                              <td class="reg_form_vr_td_rht pof_wt">
                               <p class="view_profile">{{$edit_bprof[0]->prof_incomefrom_source}}</p>
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Type of Income<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                <p class="view_profile">{{$edit_bprof[0]->prof_typeof_income}}</p>
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Net Worth<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                <p class="view_profile">{{$edit_bprof[0]->prof_networth}}</p>
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Monthly Income<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                 <p class="view_profile">{{$edit_bprof[0]->prof_income}}</p>
                              </td>
                            </tr>
                            <tr class="reg_form_vr_tr">
                              <td class="reg_form_vr_td_lft">
                                <label for="first_name"  class="reg_label_vr_form">Family Income<span class="red_star">*</span></label>

                              </td>
                              <td class="reg_form_vr_td_rht">
                                 <p class="view_profile">{{$edit_bprof[0]->prof_familyincome}}</p>
                              </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="occupatn" class="form_body wow bounceInLeft" data-wow-delay="0.5s">
              <span class="persnl_icon"><img src="images/study.png" class="img-fluid reg_help" alt="noimg"></span>
              <span class="persnl_head"><p class="prs_hd1">Occupatio details</p></span>
              <div class="comm_form_sec">
                  <table class="table common_rg_form">
                    <tbody>
                       <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Type<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <p class="view_profile">{{$edit_bprof[0]->prof_occptin_type}}</p>
                        </td>
                      </tr> 
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Value<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <p class="view_profile">{{$edit_bprof[0]->prof_occptin_value}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Relationship<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                           <p class="view_profile">{{$edit_bprof[0]->prof_occptin_relation}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Occupation Field<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                          <p class="view_profile">{{$edit_bprof[0]->prof_occptin_field}}</p>
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
                            <p class="view_profile">{{$edit_bprof[0]->prof_desktop_avail}}</p>
                        </td>

                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Laptop Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_laptop_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">UPS Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_ups_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Television Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_television_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Fridge Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_fridge_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Washing Machine Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_washingmchine_avaiil}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Bore water Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_borewater_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">TN Water Supply Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_tn_water_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Car Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_car_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Two Wheeler Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_twowheller_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Partnership Bussiness Available<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_partnerbusiness_avail}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Two Wheeler Lisence<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_twowhlr_license}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Four Wheeler Lisence<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_fourwhlr_license}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name" class="reg_label_vr_form">Own House<span class="red_star">*</span></label>
                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_ownhouse}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Land cents<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_land_acres}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Property Owner Name<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_propertyowner_name}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Property Owner Relation<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_propertyowner_relation}}</p>
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
                          <p class="view_profile">{{$edit_bprof[0]->prof_living_settle}}</p>
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
                           <p class="view_profile">{{$edit_bprof[0]->prof_blood_group}}</p>
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
                            <p class="view_profile">{{$edit_bprof[0]->prof_gift_gold}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Property<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_gift_property}}</p>
                        </td>
                      </tr>
                      <tr class="reg_form_vr_tr">
                        <td class="reg_form_vr_td_lft">
                          <label for="first_name"  class="reg_label_vr_form">Cash<span class="red_star">*</span></label>

                        </td>
                        <td class="reg_form_vr_td_rht">
                            <p class="view_profile">{{$edit_bprof[0]->prof_gift_cash}}</p>
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
                                      <p class="view_profile">{{$edit_bprof[0]->prof_whatsapp_no}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Parent's Contact No<span class="red_star"></span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                      <p class="view_profile">{{$edit_bprof[0]->prof_user_parent_continfo}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Family Value<span class="red_star">*</span></label>
                                </td>
                                    <td class="reg_form_vr_td_rht">
                                      <p class="view_profile">{{$edit_bprof[0]->prof_familyvalue}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Family type<span class="red_star">*</span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                      <p class="view_profile">{{$familytype=$edit_bprof[0]->prof_familytype}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                                    <td class="reg_form_vr_td_lft">
                                        <label for="first_name" class="reg_label_vr_form">Family status <span class="red_star">*</span></label>
                                    </td>
                                    <td class="reg_form_vr_td_rht">
                                      <p class="view_profile">{{$familystatus=$edit_bprof[0]->prof_familystatus}}</p>
                                    </td>
                                </tr>
                                <tr class="reg_form_vr_tr">
                          <td class="reg_form_vr_td_lft">
                            <label for="first_name" class="reg_label_vr_form">Family God<span class="red_star">*</span></label>
                          </td>
                          <td class="reg_form_vr_td_rht">
                              <p class="view_profile">{{$familystatus=$edit_bprof[0]->prof_family_god}}</p>
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
                                           <p class="view_profile">{{$edit_bprof[0]->prof_about_me}}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
            </div>
             <div role="tabpanel" class="tab-pane" id="propic">
                <section class="ht_view">
                    <div class="view_pro_pic">
                        <img src="imgs/{{$edit_bprof[0]->profile_image}}" class=" profile_image_view img-fluid blue_help" alt="noimg">
                        <p class="allowd_imgs">jpg/png/gif Formate oly</p>
                        <p class="allowd_imgs">(Max-size :10 mb)</p>
                     </div>
                </section>
             </div>

             <div role="tabpanel" class="tab-pane fade" id="buzz">
                 <?php if(isset($edit_secprof[0]->user_idk)){ ?>
                     <form class="proff">
                       <div class="pers_det">
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
                                      <p class="view_profile">{{$edit_secprof[0]->weight}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                <td class="reg_form_vr_td_lft pof_wtss">
                                  <label for="first_name" class="reg_label_vr_form">Height</label>
                                </td>
                                <td class="reg_form_vr_td_rht pof_wt">
                                <p class="view_profile">{{$edit_secprof[0]->height}}</p>
                                </td>
                              </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Body Type</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                        <p class="view_profile">{{$bodytype=$edit_secprof[0]->bodytype}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Complexion</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                      <p class="view_profile">{{ $complexion=$edit_secprof[0]->Complexion}}</p>
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
                                        <p class="view_profile">{{$edit_secprof[0]->education}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Occupation in details</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                       <p class="view_profile">{{$edit_secprof[0]->occupation}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                        <td class="reg_form_vr_td_lft pof_wtss">
                                          <label for="first_name" class="reg_label_vr_form">Goals</label>
                                        </td>
                                        <td class="reg_form_vr_td_rht pof_wt">
                                             <p class="view_profile">{{$edit_secprof[0]->goal}}</p>
                                        </td>
                                      </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">languages known</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                      <p class="view_profile">{{$edit_secprof[0]->lang}}</p>
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
                                      <p class="view_profile">{{$edit_secprof[0]->native}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Father Occupation</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                      <p class="view_profile">{{$edit_secprof[0]->fathr_occu}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Mother Occupation</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                       <p class="view_profile">{{$edit_secprof[0]->mothr_occu}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">No of Brothers</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                     <p class="view_profile">{{$edit_secprof[0]->brothers}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Brothers Married</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                     <p class="view_profile">{{$edit_secprof[0]->bro_marri}}</p>
                                    </td>
                                  </tr> 
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">No of Sisters</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                     <p class="view_profile">{{$edit_secprof[0]->sisters}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Sister Married</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                   <p class="view_profile">{{$edit_secprof[0]->sis_marri}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Few lines about your family</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                      <p class="view_profile">{{$edit_secprof[0]->abt_family}}</p>
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
                                       <p class="view_profile">{{$eathabit=$edit_secprof[0]->eat_habt}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Drinking Habits</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                        <p class="view_profile">{{$drinkhabit=$edit_secprof[0]->drnk_habt}}</p>
                                    </td>
                                  </tr>
                                    <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Smoking Habits</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                       <p class="view_profile">{{$smokhabt=$edit_secprof[0]->smok_habt}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Interests</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                       <p class="view_profile">{{$edit_secprof[0]->interest}}</p>
                                    </td>
                                  </tr>
                                  <tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Hobbies</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                      <p class="view_profile">{{$edit_secprof[0]->hobbis}}</p>
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
                                      <p class="view_profile">{{$edit_secprof[0]->music}}</p>
                                    </td>
                                  </tr><tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Sports</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                       <p class="view_profile">{{$edit_secprof[0]->sport}}</p>
                                    </td>
                                  </tr><tr class="reg_form_vr_tr pof_wts">
                                    <td class="reg_form_vr_td_lft pof_wtss">
                                      <label for="first_name" class="reg_label_vr_form">Food</label>
                                    </td>
                                    <td class="reg_form_vr_td_rht pof_wt">
                                       <p class="view_profile">{{$edit_secprof[0]->food}}</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                      </div>
                   </form>
                <?php } ?>
             </div>
              <div role="tabpanel" class="tab-pane" id="horoscope">
                <section class="ht_view">
                    <div class="view_pro_pic">
                        <img src="imgs/{{$edit_bprof[0]->profile_horoscope}}" class=" profile_image_view img-fluid blue_help" alt="noimg">
                        <p class="allowd_imgs">jpg/png/gif Formate oly</p>
                        <p class="allowd_imgs">(Max-size :10 mb)</p>
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
 @include('footer')