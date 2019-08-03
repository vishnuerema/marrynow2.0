@include('header')

<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<?php
$phNoCnt=$checkGend[0]->ph_num_count;
$PaymentStat = $usrData[0]->payment_status;	
?>
@if($PaymentStat==1 && $phNoCnt==11 || $PaymentStat==2 && $phNoCnt==21 || $PaymentStat==3 && $phNoCnt==31 || $PaymentStat==4 && $phNoCnt==41 || $PaymentStat==5 && $phNoCnt==51 || $PaymentStat==6 && $phNoCnt==61 || $PaymentStat==7 && $phNoCnt==71 || $PaymentStat==8 && $phNoCnt==81 || $PaymentStat==9 && $phNoCnt==91 || $PaymentStat==10 && $phNoCnt==101 )
<div  style="text-align:center" class="alert alert-info">
  <strong>Info!</strong> Your Plan Has Expired please Choose One To Continue
</div>
@endif
<section class="edit_profs">
	<section class="profs sec wow lightSpeedIn">
       <div class="container">
@if(isset( $_SESSION['supAdmin']))
  <table class="table table-bordered spradnm_prof_table">
    <thead>
      <tr class="spradmin_prof_tr">
        <th>Name</th>

        <th>Relegion</th>
        <th>Caste</th>
 		<th>Rasi</th>
        <th>Star</th>
        <th>Age</th>
        <th>Income</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Change Status</th>
        <th>Comments</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
   @foreach($profilesSuperAdmin as $profile)
		<?php if(isset($profile->hist_status)){ ?>
		@if($profile->hist_status=="Rejected completely")
		 <tr style="color: #838c85;" class="super_admin_profpage">
		@elseif($profile->hist_status=="Disliked")
		 <tr style="color: #000;" class="super_admin_profpage">
		@elseif($profile->hist_status=="Liked and on process from girl side")
		 <tr style="color: #000080;" class="super_admin_profpage">
		@elseif($profile->hist_status=="Liked and on process from boy side")
		 <tr style="color: #6495ed;" class="super_admin_profpage">
		@elseif($profile->hist_status=="Arrange for alliance")
		 <tr style="color: #228B22;" class="super_admin_profpage">
		@elseif($profile->hist_status=="Both met and alliance fixed")
		 <tr style="color: #32CD32;" class="super_admin_profpage">
		@elseif($profile->hist_status=="No response")
		 <tr style="color: #901c98;"  class="super_admin_profpage">
		@endif
        <td style="word-break:break-all;display:none"> <div class="td_spr_admn_div spradmn_usridk">{{$profile->user_idk}}</div> </td>
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_profname">{{$profile->profile_name}}</div></td>
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_religion">{{$profile->prof_relegion}}</div></td>
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_caste">{{$profile->user_cast}}</div></td> 
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_rasi">{{$profile->prof_user_raasi}}</div></td> 
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_star">{{$profile->prof_user_star}}</div></td>
        <td style="word-break:break-all;" ><div class="td_spr_admn_div spradmn_age">{{$profile->profile_age}}</div></td>
        <td style="word-break:break-all;" ><div class="td_spr_admn_div spradmn_income">{{$profile->prof_income}}</div></td>
        <td style="word-break:break-all;width:110px" ><div class="td_spr_admn_div spradmn_parentno">{{$profile->prof_user_parent_continfo}}</div></td>
        <td style="word-break:break-all;width:110px" ><div class="td_spr_admn_div spradmn_parentno">{{$profile->hist_status}}</div></td>
        <td style="word-break:break-all;">
        	<div class="td_spr_admn_div">
        	@if($profile->hist_status=="")
        	<select class="spradmn_status">
        	@foreach($supradmn_status as $supradmn_stas)
            <option selected value="{{$supradmn_stas->name}}">{{$supradmn_stas->name}}</option>
            @endforeach
        	</select>

	<td style="word-break:break-all;" >
		<div class="td_spr_admn_div spradmn_txtarea">
			<textarea class="txtarea_spradmn" id="ProfStatComments">{{$profile->hist_Comments}}
			</textarea>
		</div> 
	</td>
        <td style="word-break:break-all;" >
        	<div class="td_spr_admn_div">
        		<button class="spradmn_btn spradmn_view_btn " onclick="spradmnbtn()">Done</button>
                <button class="spradmn_btn spradmn_hdn_btn" onclick="SuAdRecheckProfile()">Re Check</button>
        </div> 
    </td>


        	@elseif($profile->hist_status!="")
        	<select disabled class="spradmn_status">
        	@foreach($supradmn_status as $supradmn_stas)
            <option selected value="{{$supradmn_stas->name}}">{{$supradmn_stas->name}}</option>
            @endforeach
        	</select>

 		<td style="word-break:break-all;" >
 			<div class="td_spr_admn_div spradmn_txtarea">
 				<textarea class="txtarea_spradmn" id="ProfStatComments">{{$profile->hist_Comments}}</textarea>
 			</div>
 		 </td>
        <td style="word-break:break-all;" >
        	<div class="td_spr_admn_div">
        		<button class="spradmn_btn  spradmn_view_btn doneaddcls" style="display: none;" onclick="spradmnbtn()">Done
        		</button>
       <button class="spradmn_btn rechkremove"   onclick="suprAdmnRechekHide()" > Re Check </button>
		    </div> 
		</td>


        	@endif
        <?php }else{ ?>
		 <tr style="color: #838c85;" class="super_admin_profpage">
		 <tr style="color: #000;" class="super_admin_profpage">
		 <tr style="color: #000080;" class="super_admin_profpage">
		 <tr style="color: #6495ed;" class="super_admin_profpage">
		 <tr style="color: #228B22;" class="super_admin_profpage">
		 <tr style="color: #32CD32;" class="super_admin_profpage">
		 <tr style="color: #901c98;"  class="super_admin_profpage">
        <td style="word-break:break-all;display:none"> <div class="td_spr_admn_div spradmn_usridk">{{$profile->user_idk}}</div> </td>
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_profname">{{$profile->profile_name}}</div></td>
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_religion">{{$profile->prof_relegion}}</div></td>
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_caste">{{$profile->user_cast}}</div></td>
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_rasi">{{$profile->prof_user_raasi}}</div></td> 
        <td style="word-break:break-all;"><div class="td_spr_admn_div spradmn_star">{{$profile->prof_user_star}}</div></td>
        <td style="word-break:break-all;" ><div class="td_spr_admn_div spradmn_age">{{$profile->profile_age}}</div></td>
        <td style="word-break:break-all;" ><div class="td_spr_admn_div spradmn_income">{{$profile->prof_income}}</div></td>
        <td style="word-break:break-all;width:110px" ><div class="td_spr_admn_div spradmn_parentno">{{$profile->prof_user_parent_continfo}}</div></td>
        <td style="word-break:break-all;width:110px" ><div class="td_spr_admn_div spradmn_parentno"></div></td>
        <td style="word-break:break-all;">
        	<div class="td_spr_admn_div">
        	<select class="spradmn_status">
           	@foreach($supradmn_status as $supradmn_stas)
            <option selected value="{{$supradmn_stas->name}}">{{$supradmn_stas->name}}</option>
            @endforeach
        	</select>

	<td style="word-break:break-all;" >
		<div class="td_spr_admn_div spradmn_txtarea">
			<textarea class="txtarea_spradmn" id="ProfStatComments">
			</textarea>
		</div> 
	</td>
        <td style="word-break:break-all;" >
        	<div class="td_spr_admn_div">
        		<button class="spradmn_btn spradmn_view_btn " onclick="spradmnbtn()">Done</button>
                <button class="spradmn_btn spradmn_hdn_btn" onclick="SuAdRecheckProfile()">Re Check</button>
        </div> 
    </td>


         <?php  } ?>
        </div></td>
       
      </tr>
      </tr>
      @endforeach
    </tbody>
  </table>
       	@else
       	@foreach($profiles as $profile)
           <div class="prof_det_comm">
           		<div class="row">
           			<div class="col-lg-4 col-md-4 ol-sm-4 ol-xs-12 no_pads_profle">
           				<div class="prof_images">
           				@if($profile->profile_image=="" && $profile->profile_gender=='male')
           					<img src="imgs/male_profile1.png" class="rounded-circle img-fluid reg_hp" alt="noimg">
           				
           				@elseif($profile->profile_image=="" && $profile->profile_gender=='female')
           					<img src="imgs/girl_profile.png" class="rounded-circle img-fluid reg_hp" alt="noimg">
           				
           				@else
           				<img src="imgs/{{$profile->profile_image}}" class="rounded-circle img-fluid whats_prof_img" alt="noimg">
           				@endif
           				</div>
           			</div>
           			<div class="col-lg-8 col-md-8 ol-sm-8 ol-xs-12 no_pads_profle">
           				<div class="prof_contts_comm">
           					<div class="prof_contts_sub">
	           					<div class="prof_name">Name</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2 profnameNxt{{$profile->user_idk}}">{{$profile->profile_name}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Marital status</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->prof_user_marial_stat}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Education</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->prof_user_edu}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Job</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->prof_user_employedin}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">District</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->prof_district}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Relegion</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->prof_relegion}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Caste</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->user_cast}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Sub Caste</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->user_sub_caste}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Age</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">
	           								<!-- <?php 
	           						 $curtyear = date("Y");  
	           						 $created_tss = $profile->created_ts;  
	           						 echo $created_tss;
	           						$split_yr = explode(' ', $created_tss);
	           						if($split_yr[0] > '2019-01-16'){
                                        $dob = $profile->user_dob; 
                                          $year = explode('/', $dob);
                                           $age= $curtyear-$year[0];
                                           print_r($age);
	           						}else{
	           							print_r('--');
	           						}
	           						 ?> -->
	           						{{$profile->profile_age}}
	           					</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Date of birth</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->user_dob}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Income</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->prof_income}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Expectations</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$profile->prof_about_me}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Gift(cash,gold,property)</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">
	           						<?php 
	           						$cash= $profile->prof_gift_cash; 
	           						$property= $profile->prof_gift_gold;
	           						$gold= $profile->prof_gift_property;
	           						echo $total_gift =$cash.", ".$property.", ".$gold
	           						?>
	           							
	           						</div>
	           				</div>
	           				<div class="prof_common_none">
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Physical status</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_phystatus{{$profile->user_idk}}">{{$profile->prof_user_physichal_status}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Date of Birth</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_dob{{$profile->user_idk}}">{{$profile->prof_user_birthtime}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Parents Contact</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_parent_no{{$profile->user_idk}}">{{$profile->prof_user_parent_continfo}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Education</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_education{{$profile->user_idk}}">{{$profile->prof_user_edu}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Employedin</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_employee{{$profile->user_idk}}">{{$profile->prof_user_employedin}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Family Value</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_fam_val{{$profile->user_idk}}">{{$profile->prof_familyvalue}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Family Type</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_famtype{{$profile->user_idk}}">{{$profile->prof_familytype}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Family Status</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_famstatus{{$profile->user_idk}}">{{$profile->prof_familystatus}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Father/Guardian Name</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_guardian_name{{$profile->user_idk}}">{{$profile->prof_father_guardian_name}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">District</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_district{{$profile->user_idk}}">{{$profile->prof_district}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Taluk</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_taluk{{$profile->user_idk}}">{{$profile->prof_taluk}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Village</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_village{{$profile->user_idk}}">{{$profile->prof_village}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Addressline1</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_address1{{$profile->user_idk}}">{{$profile->prof_addressline1}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Addressline2</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_address2{{$profile->user_idk}}">{{$profile->prof_addressline2}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">prof_locallity</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_locality{{$profile->user_idk}}">{{$profile->prof_locallity}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Propertyowner Name</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_ownewrname{{$profile->user_idk}}">{{$profile->prof_propertyowner_name}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Blood group</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_bloodgrp{{$profile->user_idk}}">{{$profile->prof_blood_group}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Networth</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_networth{{$profile->user_idk}}">{{$profile->prof_networth}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Email</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_email{{$profile->user_idk}}">{{$profile->prof_user_email}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Marital Status</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_maritalststus{{$profile->user_idk}}">{{$profile->prof_user_marial_stat}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Chart style</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_chartstyle{{$profile->user_idk}}">{{$profile->prof_user_chartstyle}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Desktop Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_desktop{{$profile->user_idk}}">{{$profile->prof_desktop_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">UPS Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_ups{{$profile->user_idk}}">{{$profile->prof_ups_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Laptop Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_laptop{{$profile->user_idk}}">{{$profile->prof_laptop_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Television Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_tv{{$profile->user_idk}}">{{$profile->prof_television_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Fridge Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_fridge{{$profile->user_idk}}">{{$profile->prof_fridge_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Washingmchine Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_washing{{$profile->user_idk}}">{{$profile->prof_washingmchine_avaiil}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Car Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_car{{$profile->user_idk}}">{{$profile->prof_car_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Two Wheeler Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_twowheel{{$profile->user_idk}}">{{$profile->prof_twowheller_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Country</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_religion{{$profile->user_idk}}">{{$profile->prof_user_birthcountry}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Relegion</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_religion{{$profile->user_idk}}">{{$profile->	prof_relegion}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Star</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_star{{$profile->user_idk}}">{{$profile->prof_user_star}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Rasi</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_rasi{{$profile->user_idk}}">{{$profile->prof_user_raasi}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Gothra</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_goathra{{$profile->user_idk}}">{{$profile->prof_user_gothra}}</div>
		           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">state</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2 pro_religion{{$profile->user_idk}}">{{$profile->prof_user_birthstate}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Occupation</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2 pro_occupation{{$profile->user_idk}}">{{$profile->prof_occptin_field}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">living and settle</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2 pro_setle_live{{$profile->user_idk}}">{{$profile->prof_living_settle}}</div>
	           				</div>
	           				</div>
           				</div>
           			</div>
           			 <div class="col-lg-12 col-md-12 ol-sm-12 ol-xs-12 no_pads_profle">
           				<div class="prof_btn_com">
	           				<div class="prof_btn_sub">
	           					<a onclick="prof_model(this.id)" id="{{$profile->user_idk}}" data-toggle="modal" data-target="#myModal" class="view_prof">View More details<i class="fas fa-arrow-right skip_arrow"></i></a>
	           					<!-- The Modal -->
		           				</div>

								   <?php 
							       		$snd_req=$checkGend[0]->send_requests;
							       		$reqAccBy=$checkGend[0]->Req_accepted_by;
										   $requests=explode(",",$snd_req);
										   $reqAcBy=explode(",",$reqAccBy);

										$viewedPhNos=$checkGend[0]->viewed_phone_num;
										  $viewdPhNoArr=explode(",",$viewedPhNos);
										 
										$phNoCnt=$checkGend[0]->ph_num_count;
									 $PaymentStat = $usrData[0]->payment_status;	
							       	?>
                            @if($PaymentStat==0)
						    @else
                            @if($PaymentStat==1 && $phNoCnt==11 || $PaymentStat==2 && $phNoCnt==21 || $PaymentStat==3 && $phNoCnt==31 || $PaymentStat==4 && $phNoCnt==41 || $PaymentStat==5 && $phNoCnt==51 || $PaymentStat==6 && $phNoCnt==61 || $PaymentStat==7 && $phNoCnt==71 || $PaymentStat==8 && $phNoCnt==81 || $PaymentStat==9 && $phNoCnt==91 || $PaymentStat==10 && $phNoCnt==101)
                            	<?php 
							  if(in_array($profile->profile_id, $viewdPhNoArr)){
							  ?>  
								<div id="hide{{$profile->profile_id}}" class="prof_btn_sub">
									<a href="#"  class="view_prof_num">{{$profile->prof_user_parent_continfo}}</a>
								</div> 
                            <?php
							  }
							?>
								
                            @else
                              <?php 
							  if(in_array($profile->profile_id, $viewdPhNoArr)){
							  ?>  
								<div id="hide{{$profile->profile_id}}" class="prof_btn_sub">
									<a href="#"  class="view_prof_num">{{$profile->prof_user_parent_continfo}}</a>
								</div> 
                            <?php
							  }
							  else{
							?>
								<div onclick='num_display(this.id)' id="{{$profile->profile_id}}" class="prof_btn_sub phNoVwBtn{{$profile->profile_id}}">
									<a class="view_prof">View Phone Number<i class="fas fa-arrow-down skip_arrow"></i></a>
								</div>
								<div style="display:none;" id="hide{{$profile->profile_id}}" class="prof_btn_sub">
									<a href="#"  class="view_prof_num">{{$profile->prof_user_parent_continfo}}</a>
								</div>
							<?php } ?>
	           				@endif
	           				@endif
                       


	           				<div class="send_interest">
	           					  
                                    <?php         
							         if (in_array($profile->user_idk, $reqAcBy)){
							        ?>
									<button class="send_intr_btn send_req{{$profile->profile_id}}" style="background-color:green;width:200px" type="button">Your Request Was Accepted</button>
							         <?php } 
                                    elseif(in_array($profile->profile_id, $requests)){
							         ?>
							        <button  style="background-color: green" class="send_intr_btn send_req{{$profile->profile_id}}" id="{{$profile->profile_id}}" type="button">Request Send</button>
									 <?php }  
									 else{
									 ?>
							          <button class="send_intr_btn send_req{{$profile->profile_id}}" id="{{$profile->profile_id}}" onclick="sendIntrst(this.id)" type="button">SEND INTEREST</button>
                                  <?php
									 }
									 ?>
	           				</div>
           				</div>
           			</div> 
           		</div>
           </div>
@endforeach
@endif
       </div>
			<div class="modal fade" id="myModal">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header adjst_mod_head">
			          <div class="modal-title adjts"><img src="images/client_3.jpg" class="rounded img-fluid reg_p" alt="noimg">
			          <p class="modal-title">Name : <span class="mdtl_name"></span> </p>
			      	</div>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body adjst_mod_body">
			          <div class="box_body">
		           			<div class="col-lg-12 col-md-12 ol-sm-12 ol-xs-12 no_pads_profle">
		           				<div class="prof_images">
		           					<div class="model_name">
		           					<div class="row">
			           				<div class="parts_profl">
			           					<p class="modal_in_head">Father/Guardian Name</p>
			           					<p class="modal_in_value mdtl_guardianame"></p>
			           				</div>
						          	<div class="parts_profl">
			           					<p class="modal_in_head">Physical status</p>
			           					<p class="modal_in_value mdtl_phystatus"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">Education</p>
			           					<p class="modal_in_value mdtl_educ"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">Employedin</p>
			           					<p class="modal_in_value mdtl_employdin"></p>
			           				</div>
		           					<div class="parts_profl">
			           					<p class="modal_in_head">Date of Birth</p>
			           					<p class="modal_in_value mdtl_dob"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">District</p>
			           					<p class="modal_in_value mdtl_districtname"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">Taluk</p>
			           					<p class="modal_in_value mdtl_taluk"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">Village</p>
			           					<p class="modal_in_value mdtl_village"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">prof_locallity</p>
			           					<p class="modal_in_value mdtl_locality"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">Blood group</p>
			           					<p class="modal_in_value mdtl_bloodgrp"></p>
			           				</div>	
						          	<div class="parts_profl">
							          	<p class="modal_in_head">complexion </p>
							          	<p class="modal_in_value mdtl_complexion"> </p>
							         </div>
							         <div class="parts_profl">
							          	<p class="modal_in_head">Language </p>
							          	<p class="modal_in_value mdtl_lang"></p>
							         </div>
							         <div class="parts_profl">
							          	<p class="modal_in_head">Father Occupation</p>
							          	<p class="modal_in_value mdtl_fathr_job"></p> 
							         </div>
							         <div class="parts_profl">
							          	<p class="modal_in_head">Language </p>
							          	<p class="modal_in_value mdtl_mothr_job"> </p>
							         </div>
							         <div class="parts_profl">
							          	<p class="modal_in_head">Weight </p>
							          	<p class="modal_in_value mdtl_weight"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Height </p>
							          	<p class="modal_in_value mdtl_height"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Body Type </p>
							          	<p class="modal_in_value mdtl_bodytype"> </p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Brothers</p>
							          	<p class="modal_in_value mdtl_num_brothers"> </p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Sisters</p>
							          	<p class="modal_in_value mdtl_num_sisters"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Brothers narried</p>
							          	<p class="modal_in_value mdtl_num_brthrs_mrd"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Sisters narried</p>
							          	<p class="modal_in_value mdtl_num_sisters_mrd"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">About Family</p>
							          	<p class="modal_in_value mdtl_num_sisters_mrd"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Eat Habbit</p>
							          	<p class="modal_in_value mdtl_eat_habt"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Drink Habbit</p>
							          	<p class="modal_in_value mdtl_drnk_habt"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">Smoke Habbit</p>
							          	<p class="modal_in_value mdtl_smok_habt"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">interest</p>
							          	<p class="modal_in_value mdtl_interest"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">sport</p>
							          	<p class="modal_in_value mdtl_sport"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">hobbis</p>
							          	<p class="modal_in_value mdtl_hobbis"></p>
							          </div>
							          <div class="parts_profl">
							          	<p class="modal_in_head">music</p>
							          	<p class="modal_in_value mdtl_music"></p>
							          </div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Family Value</p>
				           					<p class="modal_in_value mdtl_familyval"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Family Type</p>
				           					<p class="modal_in_value mdtl_familytype"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Family Status</p>
				           					<p class="modal_in_value mdtl_familtstatus"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Propertyowner Name</p>
				           					<p class="modal_in_value mdtl_proptyname"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Networth</p>
				           					<p class="modal_in_value mdtl_networth"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Email</p>
				           					<p class="modal_in_value mdtl_email"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Marital Status</p>
				           					<p class="modal_in_value mdtl_maritalstatus"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Chart style</p>
				           					<p class="modal_in_value mdtl_chartstyle"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Desktop Available</p>
				           					<p class="modal_in_value mdtl_desktop"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">UPS Available</p>
				           					<p class="modal_in_value mdtl_ups"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Laptop Available</p>
				           					<p class="modal_in_value mdtl_laptop"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Television Available</p>
				           					<p class="modal_in_value mdtl_tv"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Fridge Available</p>
				           					<p class="modal_in_value mdtl_fridge"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Washingmchine Available</p>
				           					<p class="modal_in_value mdtl_washmac"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Car Available</p>
				           					<p class="modal_in_value mdtl_car"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Two Wheeler Available</p>
				           					<p class="modal_in_value mdtl_twowheeler"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Star</p>
				           					<p class="modal_in_value mdtl_star"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Rasi</p>
				           					<p class="modal_in_value mdtl_rasi"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Gothra</p>
				           					<p class="modal_in_value mdtl_gothra"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">Occupations</p>
				           					<p class="modal_in_value mdtl_occuptn"></p>
				           				</div>
				           				<div class="parts_profl">
				           					<p class="modal_in_head">living and settle</p>
				           					<p class="modal_in_value mdtl_living"></p>
				           				</div>
						          	</div>
						          </div>
		           				</div>
	           				</div>
			           </div>
			        </div>
			        <!-- Modal footer -->
			        <div class="modal-footer">
			          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        </div>
			        
			      </div>
			    </div>
			  </div>
			  <div class="pro_pagination">
			  	<?php echo $profiles->render(); ?>
			  </div>

   </section>
</section>
<script type="text/javascript">
  function num_display(id){
	document.getElementById("hide"+id).style.display = 'block';
	$.ajax({
        type: "post",
        url: "save_phno_count",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
			'id':id
           },
        cache: false,
        success: function(data){
			$('.phNoVwBtn'+id).remove()
               if(data=='0'){
                   alertify.error(data);
                   location.reload();
               }
               else{
               		  alertify.warning('you have few attempts more' );
               }
        },
        error: function(data){   
        }
      });
  }
</script> 
</body>
</html>

 @include('footer')

