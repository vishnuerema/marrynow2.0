@include('header')
<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<!-- edit profile -->
<section class="edit_prof">
	<div class="container">
		<div class="prof_matchss">
			<form id="userFormds" class="ref_form pro_matc" action="matrimony_search" method="POST" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="prof_match_comm">
					<div class="prof_match_head">
						<p class="find_matchges_head">FIND YOUR PERFECT MATCHES</p>
					</div>
					 <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">1.Gender</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio1"  value="male" name="gender[]" class="custom-control-input pf_match_gender">
                            <label class="custom-control-label" for="customRadio1">Male</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio2" value="female" name="gender[]" class="custom-control-input pf_match_gender">
                          <label class="custom-control-label"  for="customRadio2">Female</label>
                     </div>
                   </div>
                </div>
            </div>
          </div>  
            <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">2.Physical Status</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio3"  value="Normal" name="phystatus[]" class="custom-control-input pf_match_physts">
                            <label class="custom-control-label" for="customRadio3">normal</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio4" value="phyChallenged" name="phystatus[]" class="custom-control-input pf_match_physts">
                          <label class="custom-control-label" for="customRadio4">physically challenged</label>
                     </div>
                   </div>
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">3.Dosham</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio5"  value="Yes" name="dhosam[]" class="custom-control-input pf_match_dhosam">
                            <label class="custom-control-label"  for="customRadio5">Yes</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio6" value="Yes" name="dhosam[]" class="custom-control-input pf_match_dhosam">
                          <label class="custom-control-label"  for="customRadio6">No</label>
                     </div>
                   </div>
                </div>
            </div>
          </div>  
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">4.Chart Style</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($mat_chartstyle as $mat_data)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="charstyle{{$mat_data->id}}"  value="{{$mat_data->name}}" name="chartstyle[]" class="custom-control-input pf_match_charstyle">
                            <label class="custom-control-label"  for="charstyle{{$mat_data->id}}">{{$mat_data->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">5.Star</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($mat_star as $mat_stars)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="star{{$mat_stars->starid}}"  value="{{$mat_stars->name}}" name="star[]" class="custom-control-input pf_match_star">
                            <label class="custom-control-label"  for="star{{$mat_stars->starid}}">{{$mat_stars->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div>
           <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">6.Rasi</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($mat_raasi as $mat_raasis)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="rasi{{$mat_raasis->raasiid}}"  value="{{$mat_raasis->name}}" name="rasi[]" class="custom-control-input pf_match_rasi">
                            <label class="custom-control-label"  for="rasi{{$mat_raasis->raasiid}}">{{$mat_raasis->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">7.Employed in</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio7"  value="Goverment" name="employed[]" class="custom-control-input pf_match_employ">
                            <label class="custom-control-label" for="customRadio7">Goverment</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio8" value="private" name="employed[]" class="custom-control-input pf_match_employ">
                          <label class="custom-control-label"  for="customRadio8">private</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio9" value="Defence" name="employed[]" class="custom-control-input pf_match_employ">
                          <label class="custom-control-label"  for="customRadio9">Defence</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio10" value="Bussiness" name="employed[]" class="custom-control-input pf_match_employ">
                          <label class="custom-control-label"  for="customRadio10">Bussiness</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio11" value="Self Employed" name="employed[]" class="custom-control-input pf_match_employ">
                          <label class="custom-control-label"  for="customRadio11">Self Employed</label>
                     </div>
                   </div>
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">8.Family Value</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio12"  value="orthodox" name="famvalue[]" class="custom-control-input pf_match_fam_val">
                            <label class="custom-control-label" for="customRadio12">orthodox</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio13" value="traditional" name="famvalue[]" class="custom-control-input pf_match_fam_val">
                          <label class="custom-control-label"  for="customRadio13">traditional</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio14" value="moderate" name="famvalue[]" class="custom-control-input pf_match_fam_val">
                          <label class="custom-control-label"  for="customRadio14">moderate</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio15" value="Liberal" name="famvalue[]" class="custom-control-input pf_match_fam_val">
                          <label class="custom-control-label"  for="customRadio15">Liberal</label>
                     </div>
                   </div>
                </div>
            </div>
          </div>
           <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">9.Family type</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio16"  value="joint" name="famtype[]" class="custom-control-input pf_match_fam_typ">
                            <label class="custom-control-label" for="customRadio16">joint Family</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio17" value="Nuclear Family" name="famtype[]" class="custom-control-input pf_match_fam_typ">
                          <label class="custom-control-label"  for="customRadio17">Nuclear Family</label>
                     </div>
                   </div>
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">10.Family status </p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio18"  value="Middle Class" name="famststus[]" class="custom-control-input pf_match_fam_stat">
                            <label class="custom-control-label" for="customRadio18">Middle Class</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio19" value="Upper Middle Class" name="famststus[]" class="custom-control-input pf_match_fam_stat">
                          <label class="custom-control-label"  for="customRadio19">Upper Middle Class</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio20" value="Rich" name="famststus[]" class="custom-control-input pf_match_fam_stat">
                          <label class="custom-control-label"  for="customRadio20">Rich</label>
                     </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">11.Weight</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($mat_weight as $mat_weights)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="weight{{$mat_weights->id}}"  value="{{$mat_weights->name}}" name="weight[]" class="custom-control-input pf_match_charstyle">
                            <label class="custom-control-label"  for="weight{{$mat_weights->id}}">{{$mat_weights->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div>  
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">12.Height</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($mat_height as $mat_heights)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="height{{$mat_heights->heightid}}"  value="{{$mat_heights->name}}" name="height[]" class="custom-control-input pf_match_height">
                            <label class="custom-control-label"  for="height{{$mat_heights->heightid}}">{{$mat_heights->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">13.Body Type</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio21"  value="Slim" name="bodytype[]" class="custom-control-input pf_match_fam_body_typ">
                            <label class="custom-control-label" for="customRadio21">Slim</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio22" value="Athelatic" name="bodytype[]" class="custom-control-input pf_match_fam_body_typ">
                          <label class="custom-control-label"  for="customRadio22">Athelatic</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio23" value="Average" name="bodytype[]" class="custom-control-input pf_match_fam_body_typ">
                          <label class="custom-control-label"  for="customRadio23">Average</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio24" value="Heavy" name="bodytype[]" class="custom-control-input pf_match_fam_body_typ">
                          <label class="custom-control-label"  for="customRadio24">Heavy</label>
                     </div>
                   </div>
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">14.Complexion</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio25"  value="Very Fair" name="complextion[]" class="custom-control-input pf_match_fam_body_cpmlx">
                            <label class="custom-control-label" for="customRadio25">Very Fair</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio26" value="Fair" name="complextion[]" class="custom-control-input pf_match_fam_body_cpmlx">
                          <label class="custom-control-label"  for="customRadio26">Fair</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio27" value="Wheatish" name="complextion[]" class="custom-control-input pf_match_fam_body_cpmlx">
                          <label class="custom-control-label"  for="customRadio27">Wheatish</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio28" value="Wheatish brown" name="complextion[]" class="custom-control-input pf_match_fam_body_cpmlx">
                          <label class="custom-control-label"  for="customRadio28">Wheatish brown</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio29" value="Dark" name="complextion[]" class="custom-control-input pf_match_fam_body_cpmlx">
                          <label class="custom-control-label"  for="customRadio29">Dark</label>
                     </div>
                   </div>
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">15.Eating Habits</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio30"  value="Vegetarian" name="eatinghab[]" class="custom-control-input pf_match_eat">
                            <label class="custom-control-label" for="customRadio30">Vegetarian</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio31" value="Non Vegetarian" name="eatinghab[]" class="custom-control-input pf_match_eat">
                          <label class="custom-control-label"  for="customRadio31">Non Vegetarian</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio32" value="Eggtarian" name="eatinghab[]" class="custom-control-input pf_match_eat">
                          <label class="custom-control-label"  for="customRadio32">Eggtarian</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio33" value="Vegan" name="eatinghab[]" class="custom-control-input pf_match_eat">
                          <label class="custom-control-label"  for="customRadio33">Vegan</label>
                     </div>
                   </div>
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">16.Drinking Habits</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio34"  value="Non-drinking" name="drinkinghab[]" class="custom-control-input pf_match_drink">
                            <label class="custom-control-label" for="customRadio34">Non-drinking</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio35" value="Regular drinking" name="drinkinghab[]" class="custom-control-input pf_match_drink">
                          <label class="custom-control-label"  for="customRadio35">Regular drinking</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio36" value="Light/social drinker" name="drinkinghab[]" class="custom-control-input pf_match_drink">
                          <label class="custom-control-label"  for="customRadio36">Light/social drinker</label>
                     </div>
                   </div>
                </div>
            </div>
          </div>
           <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">17.Smoking Habits</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="customRadio37"  value="Non-smoker" name="smokinghab[]" class="custom-control-input pf_match_smoker">
                            <label class="custom-control-label" for="customRadio37">Non-smoker</label>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio38" value="Regular smoker" name="smokinghab[]" class="custom-control-input pf_match_smoker">
                          <label class="custom-control-label"  for="customRadio38">Regular smoker</label>
                     </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="custom-control custom-radio">
                          <input type="checkbox" id="customRadio39" value="Light/social smoker" name="smokinghab[]" class="custom-control-input pf_match_smoker">
                          <label class="custom-control-label"  for="customRadio39">Light/social smoker</label>
                     </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">18.Country</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($matcitizenship as $matcitizenships)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="countrty{{$matcitizenships->country_id}}"  value="{{$matcitizenships->name}}" name="country[]" class="custom-control-input pf_match_country">
                            <label class="custom-control-label"  for="countrty{{$matcitizenships->country_id}}">{{$matcitizenships->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div>
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">19.State</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($matstate as $matstates)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="state{{$matstates->id}}"  value="{{$matstates->name}}" name="state[]" class="custom-control-input pf_match_state">
                            <label class="custom-control-label"  for="state{{$matstates->id}}">{{$matstates->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">20.City</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  @foreach($matcity as $matcitys)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                       <div class="custom-control custom-radio">
                            <input type="checkbox" id="city{{$matcitys->id}}"  value="{{$matcitys->name}}" name="city[]" class="custom-control-input pf_match_city">
                            <label class="custom-control-label"  for="city{{$matcitys->id}}">{{$matcitys->name}}</label>
                        </div>
                   </div>
                    @endforeach
                </div>
            </div>
          </div>
           <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">21.No of Brothers</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  <?php  
                      for ($i= 1; $i <= 10; $i++) {
                       echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                       <div class='custom-control custom-radio'>
                            <input type='checkbox' id='bro$i'  value='$i' name='brothrs[]' class='custom-control-input pf_match_bros'>
                            <label class='custom-control-label'  for='bro$i'>$i</label>
                        </div>
                   </div>";
                      }
                      ?>
                </div>
            </div>
          </div> 
          <div class="prof_match_body">
              <div class="prof_ma_bdy_sub_hed">
                <p class="find_matc_body_head">22.No of sisters</p>
              </div>
              <div class="prof_ma_bdy_sub_bdy">
                <div class="row">
                  <?php  
                      for ($j= 1; $j <= 10; $j++) {
                       echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                       <div class='custom-control custom-radio'>
                            <input type='checkbox' id='bro$j'  value='$j' name='sisters[]' class='custom-control-input pf_match_sister'>
                            <label class='custom-control-label'  for='bro$j'>$j</label>
                        </div>
                   </div>";
                      }
                      ?>
                </div>
            </div>
          </div> 
        <div class="search_btn">
          <button class="find" type="submit">Search</button>
        </div>
        </div>
			</form>
		</div>
	</div>
</section>
@include('footer')
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