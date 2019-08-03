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
          <div class="row">
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
               <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">1.Gender</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                 
                      <select name="gender" class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field ">
                         @if(isset($_SESSION['supAdmin']))
                            <option selected value="male">male</option>
                            <option selected value="female">female</option> 
                          @elseif($curprof[0]->profile_gender =='female')
                          <option selected value="male">male</option>
                          @elseif($curprof[0]->profile_gender =='male')
                          <option selected value="female">female</option> 

                          @endif
                      </select>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
               <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">2.Caste</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                      <select name="caste" class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field ">
                        @if(isset($_SESSION['supAdmin']))
                         @foreach($caste_master as $caste)
                          <option selected value="{{$caste->caste_name}}">{{$caste->caste_name}}</option>
                          @endforeach
                        @else
                          <option selected value="{{$data[0]->user_cast}}">{{$data[0]->user_cast}}</option>
                          @endif
                      </select>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
    					 <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">3.Sub Caste</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                      <select name="subcaste" class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field ">
                        @if(isset($_SESSION['supAdmin']))
                        @foreach($subcaste_master as $subcaste)
                          <option selected value="{{$subcaste->sub_caste_name}}">{{$subcaste->sub_caste_name}}</option>
                          @endforeach
                        @else
                          <option selected value="{{$data[0]->user_sub_caste}}">{{$data[0]->user_sub_caste}}</option>
                        @endif
                      </select>
                  </div>
              </div>
            </div>
              <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">  
                  <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">4.Physical Status</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                       <select name="phystatus" class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Normal">Normal</option>
                            <option value="phyChallenged">physically challenged</option> 
                        </select>
                  </div>
                </div> 
              </div> 
              <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">5.Dosham</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="dhosam" class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div>  
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
              <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">6.Chart Style</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <select name="chartstyle" class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field">
                                <option value=""  selected>--- select ---</option>
                                 @foreach($mat_chartstyle as $mat_data)
                                  <option value="{{$mat_data->name}}">{{$mat_data->name}}</option>
                                 @endforeach
                            </select>
                       </div>
                    </div>
                </div>
              </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
              <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">7.Star</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                        <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="star">
                          <option value=""  selected>--- select ---</option>
                           @foreach($mat_star as $mat_stars)
                            <option value="{{$mat_stars->name}}">{{$mat_stars->name}}</option>
                           @endforeach
                        </select>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
               <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">8.Rasi</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                    <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="rasi">
                          <option value=""  selected>--- select ---</option>
                           @foreach($mat_raasi as $mat_raasis)
                            <option value="{{$mat_raasis->name}}">{{$mat_raasis->name}}</option>
                           @endforeach
                      </select>
                </div>
              </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
              <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">9.Employed in</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                    <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="employed">
                          <option value=""  selected>--- select ---</option>
                          <option value="Goverment">Goverment</option>
                          <option value="private">private</option>
                          <option value="Defence">Defence</option>
                          <option value="Bussiness">Bussiness</option>
                          <option value="Self Employed">Self Employed</option>
                          <option value="Not Working">Not Working</option>
                      </select>
                </div>
              </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
              <div class="prof_match_body">
                  <div class="prof_ma_bdy_sub_hed">
                    <p class="find_matc_body_head">10.Family Value</p>
                  </div>
                  <div class="prof_ma_bdy_sub_bdy">
                    <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="famvalue">
                          <option value=""  selected>--- select ---</option>
                          <option value="orthodox">orthodox</option>
                          <option value="traditional">traditional</option>
                          <option value="moderate">moderate</option>
                          <option value="Liberal">Liberal</option>
                      </select>
                </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
             <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">11.Family type</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                  <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="famtype">
                        <option value=""  selected>--- select ---</option>
                        <option value="joint">joint Family</option>
                        <option value="Nuclear Family">Nuclear Family</option>
                    </select>
              </div>
            </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">12.Family status </p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                  <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="famststus">
                        <option value=""  selected>--- select ---</option>
                        <option value="Middle Class">Middle Class</option>
                        <option value="Upper Middle Class">Upper Middle Class</option>
                        <option value="Rich">Rich</option>
                    </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">13.Weight</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="weight">
                        <option value=""  selected>--- select ---</option>
                         @foreach($mat_weight as $mat_weights)
                          <option value="{{$mat_weights->name}}">{{$mat_weights->name}}</option>
                         @endforeach
                    </select>
              </div>
            </div>  
          </div>  
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">14.Height</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="height">
                        <option value=""  selected>--- select ---</option>
                         @foreach($mat_height as $mat_heights)
                          <option value="{{$mat_heights->name}}">{{$mat_heights->name}}</option>
                         @endforeach
                    </select>
              </div>
            </div> 
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12"> 
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">15.Body Type</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                  <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="bodytype">
                        <option value=""  selected>--- select ---</option>
                        <option value="Slim">Slim</option>
                        <option value="Athelatic">Athelatic</option>
                        <option value="Average">Average</option>
                        <option value="Heavy">Heavy</option>
                    </select>
              </div>
            </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">16.Complexion</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="complextion">
                        <option value=""  selected>--- select ---</option>
                        <option value="Very Fair">Very Fair</option>
                        <option value="Fair">Fair</option>
                        <option value="Wheatish">Wheatish</option>
                        <option value="Wheatish brown">Wheatish brown</option>
                        <option value="Dark">Dark</option>
                    </select>
              </div>
            </div> 
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12"> 
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">17.Eating Habits</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="eatinghab">
                        <option value=""  selected>--- select ---</option>
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="Non Vegetarian">Non Vegetarian</option>
                        <option value="Eggtarian">Eggtarian</option>
                        <option value="Vegan">Vegan</option>
                    </select>
              </div>
            </div> 
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12"> 
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">18.Drinking Habits</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="drinkinghab">
                        <option value=""  selected>--- select ---</option>
                        <option value="Non-drinking">Non-drinking</option>
                        <option value="Regular drinking">Regular drinking</option>
                        <option value="Light/social drinker">Light/social drinker</option>
                    </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
             <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">19.Smoking Habits</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="smokinghab">
                        <option value=""  selected>--- select ---</option>
                        <option value="Non-smoker">Non-smoker</option>
                        <option value="Regular smoker">Regular smoker</option>
                        <option value="Light/social smoker">Light/social smoker</option>
                    </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">20.Country</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="country">
                        <option value=""  selected>--- select ---</option>
                         @foreach($matcitizenship as $matcitizenships)
                          <option value="{{$matcitizenships->name}}">{{$matcitizenships->name}}</option>
                         @endforeach
                    </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">21.State</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                  <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="state">
                        <option value=""  selected>--- select ---</option>
                         @foreach($matstate as $matstates)
                          <option value="{{$matstates->name}}">{{$matstates->name}}</option>
                         @endforeach
                    </select>
              </div>
            </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">22.District</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="district">
                        <option value=""  selected>--- select ---</option>
                         @foreach($matdistrict as $matdistricts)
                          <option value="{{$matdistricts->name}}">{{$matdistricts->name}}</option>
                         @endforeach
                    </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
             <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">23.No of Brothers</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                  <select class="secondry_sis chzn-select form-control prof_sisters sec_reg frm-field " name="brothrs">
                        <option value="" selected>--- select ---</option>
                       <option>None</option>
                        <?php  
                        for ($i= 1; $i <= 10; $i++) {
                         echo "<option value='$i'> $i </option>";
                        }
                        ?>
                    </select>
              </div>
            </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">24.No of sisters</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                 <select class="secondry_sis chzn-select form-control prof_sisters sec_reg frm-field " name="sisters">
                        <option value="" selected>--- select ---</option>
                       <option>None</option>
                        <?php  
                        for ($i= 1; $i <= 10; $i++) {
                         echo "<option value='$i'> $i </option>";
                        }
                        ?>
                    </select>
              </div>
            </div> 
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">25.Income source</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="income_src">
                        <option value="" selected>--- select ---</option>
                       <option>None</option>
                        <?php  
                        for ($i= 1; $i <= 10; $i++) {
                         echo "<option value='$i'> $i </option>";
                        }
                        ?>
                    </select>
              </div>
            </div>
          </div> 
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">26.Net Worth</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight prof_weight sec_reg frm-field " name="networth">
                       <option value=""  selected>--- select ---</option>
                         @foreach($matnetworth as $matnetworths)
                          <option value="{{$matnetworths->name}}">{{$matnetworths->name}}</option>
                         @endforeach
                    </select>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
            <div class="prof_match_body">
                <div class="prof_ma_bdy_sub_hed">
                  <p class="find_matc_body_head">27.blood Group</p>
                </div>
                <div class="prof_ma_bdy_sub_bdy">
                   <select class="chzn-select form-control secondry_weight blood_grp sec_reg frm-field " name="blood">
                        <option value=""  selected>--- select ---</option>
                         @foreach($matbloodgrp as $matbloodgrps)
                          <option value="{{$matbloodgrps->name}}">{{$matbloodgrps->name}}</option>
                         @endforeach
                    </select>
              </div>
            </div>
          </div>
             <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">28.Computer Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="computr" class="chzn-select form-control secondry_weight computre_avail sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">29.Laptop Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="laptop" class="chzn-select form-control secondry_weight lap_avail sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">30.UPS Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="ups" class="chzn-select form-control secondry_weight ups_avail sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">31.Television Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="tv" class="chzn-select form-control secondry_weight tv_avail sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div>
             <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">32.Fridge Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="fridge" class="chzn-select form-control secondry_weight fridge_avail sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div>
             <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">33.Washing Machine Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="washine" class="chzn-select form-control secondry_weight washing_mach sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">34.Bore water Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="borewater" class="chzn-select form-control secondry_weight bore_water sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">35.TN Water Supply Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="tnwater" class="chzn-select form-control secondry_weight tn_water sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">36.Car Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="car" class="chzn-select form-control secondry_weight car_avail sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">37.Two Wheeler Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="bike" class="chzn-select form-control secondry_weight two_wheel sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">38.Partnership Bussiness Available</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="partnerjob" class="chzn-select form-control secondry_weight partner_buss sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">39.Own House</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select name="ownhome" class="chzn-select form-control secondry_weight own_house sec_reg frm-field ">
                            <option value=""  selected>--- select ---</option>
                            <option value="Yes">Yes</option>
                            <option value="no">no</option> 
                        </select>
                  </div>
                </div>  
            </div> 
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">40.Occupations</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select class="chzn-select form-control secondry_weight occupatio_ns sec_reg frm-field " name="occupation">
                        <option value=""  selected>--- select ---</option>
                         @foreach($useroccupation as $useroccupations)
                           @if ($useroccupations->field !=NULL)
                              <option value="{{$useroccupations->field}}">{{$useroccupations->field}}</option>
                               @endif
                         @endforeach
                    </select>
                  </div>
                </div>  
            </div>     
            <div class="col-md-3 col-sm-3 clo-lg-3 col-xs-12">
                <div class="prof_match_body">
                    <div class="prof_ma_bdy_sub_hed">
                      <p class="find_matc_body_head">41.Living and settle</p>
                    </div>
                    <div class="prof_ma_bdy_sub_bdy">
                      <select class="chzn-select form-control secondry_settle occupatio_ns sec_reg frm-field " name="settle_live">
                        <option value=""  selected>--- select ---</option>
                         @foreach($Living_master as $Living_masters)
                          <option value="{{$Living_masters->name}}">{{$Living_masters->name}}</option>
                         @endforeach
                    </select>
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
<script type="text/javascript">
  function num_display(){
    document.getElementById("hide").style.display = 'block';
  }

</script> 
<script src="{{url('js/register.js')}}"></script>
</body>
</html>