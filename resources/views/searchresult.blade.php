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
       	<?php
         $dataCnt=count($members);
       	?>
       	@if($dataCnt==0)
       	<div style="text-align:center; font-size: 30px; color:red;">Sorry Nothing Found </div>
       @else
       	@foreach($members as $members_details)

           <div class="prof_det_comm">
           		<div class="row">
           			<div class="col-lg-4 col-md-4 ol-sm-4 ol-xs-12 no_pads_profle">
           				<div class="prof_images">
       					@if($members_details->profile_image=="" && $members_details->profile_gender=='male')
           					<img src="imgs/male_profile1.png" class="rounded-circle img-fluid reg_hp" alt="noimg">
           				
           				@elseif($members_details->profile_image=="" && $members_details->profile_gender=='female')
           					<img src="imgs/girl_profile.png" class="rounded-circle img-fluid reg_hp" alt="noimg">
           				
           				@else
           					<img src="imgs/{{$members_details->profile_image}}" class="rounded-circle img-fluid reg_hp" alt="noimg">
           				@endif
           				</div>
           			</div>
           			<div class="col-lg-8 col-md-8 ol-sm-8 ol-xs-12 no_pads_profle">
           				<div class="prof_contts_comm">
           					<div class="prof_contts_sub">
	           					<div class="prof_name">Name</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2 profnameNxt{{$members_details->user_idk}} ">{{$members_details->profile_name}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Marital status</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->prof_user_marial_stat}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Education</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->prof_user_edu}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Job</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->prof_user_employedin}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">District</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->prof_district}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Relegion</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->prof_relegion}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Caste</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->user_cast}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Sub Caste</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->user_sub_caste}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Date of birth</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->user_dob}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Age</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->profile_age}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Income</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">{{$members_details->prof_income}}</div>
	           				</div>
	           				<div class="prof_contts_sub">
	           					<div class="prof_name">Gift</div>
	           					<div class="prof_name1">:</div>
	           					<div class="prof_name2">
	           						<?php 
	           						$cash= $members_details->prof_gift_cash; 
	           						$property= $members_details->prof_gift_gold;
	           						$gold= $members_details->prof_gift_property;
	           						echo $total_gift =$cash.", ".$property.", ".$gold
	           						?>
	           							
           						</div>
       						</div>
	           				<div class="prof_common_none">
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Physical status</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_phystatus{{$members_details->user_idk}}">{{$members_details->prof_user_physichal_status}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Date of Birth</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_dob{{$members_details->user_idk}}">{{$members_details->prof_user_birthtime}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Parents Contact</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_parent_no{{$members_details->user_idk}}">{{$members_details->prof_user_parent_continfo}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Education</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_education{{$members_details->user_idk}}">{{$members_details->prof_user_edu}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Employedin</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_employee{{$members_details->user_idk}}">{{$members_details->prof_user_employedin}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Family Value</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_fam_val{{$members_details->user_idk}}">{{$members_details->prof_familyvalue}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Family Type</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_famtype{{$members_details->user_idk}}">{{$members_details->prof_familytype}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Family Status</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_famstatus{{$members_details->user_idk}}">{{$members_details->prof_familystatus}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Father/Guardian Name</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_guardian_name{{$members_details->user_idk}}">{{$members_details->prof_father_guardian_name}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">District</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_district{{$members_details->user_idk}}">{{$members_details->prof_district}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Taluk</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_taluk{{$members_details->user_idk}}">{{$members_details->prof_taluk}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Village</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_village{{$members_details->user_idk}}">{{$members_details->prof_village}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Addressline1</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_address1{{$members_details->user_idk}}">{{$members_details->prof_addressline1}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Addressline2</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_address2{{$members_details->user_idk}}">{{$members_details->prof_addressline2}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">prof_locallity</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_locality{{$members_details->user_idk}}">{{$members_details->prof_locallity}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Propertyowner Name</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_ownewrname{{$members_details->user_idk}}">{{$members_details->prof_propertyowner_name}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Blood group</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_bloodgrp{{$members_details->user_idk}}">{{$members_details->prof_blood_group}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Networth</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_networth{{$members_details->user_idk}}">{{$members_details->prof_networth}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Email</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_email{{$members_details->user_idk}}">{{$members_details->prof_user_email}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Marital Status</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_maritalststus{{$members_details->user_idk}}">{{$members_details->prof_user_marial_stat}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Chart style</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_chartstyle{{$members_details->user_idk}}">{{$members_details->prof_user_chartstyle}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Desktop Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_desktop{{$members_details->user_idk}}">{{$members_details->prof_desktop_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">UPS Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_ups{{$members_details->user_idk}}">{{$members_details->prof_ups_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Laptop Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_laptop{{$members_details->user_idk}}">{{$members_details->prof_laptop_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Television Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_tv{{$members_details->user_idk}}">{{$members_details->prof_television_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Fridge Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_fridge{{$members_details->user_idk}}">{{$members_details->prof_fridge_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Washingmchine Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_washing{{$members_details->user_idk}}">{{$members_details->prof_washingmchine_avaiil}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Car Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_car{{$members_details->user_idk}}">{{$members_details->prof_car_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Two Wheeler Available</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_twowheel{{$members_details->user_idk}}">{{$members_details->prof_twowheller_avail}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Relegion</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_religion{{$members_details->user_idk}}">{{$members_details->	prof_relegion}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Star</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_star{{$members_details->user_idk}}">{{$members_details->prof_user_star}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Rasi</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_rasi{{$members_details->user_idk}}">{{$members_details->prof_user_raasi}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Gothra</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_goathra{{$members_details->user_idk}}">{{$members_details->prof_user_gothra}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">Occupation</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_occupation{{$members_details->user_idk}}">{{$members_details->prof_multiple_occptin}}</div>
		           				</div>
		           				<div class="prof_contts_sub">
		           					<div class="prof_name">living and settle</div>
		           					<div class="prof_name1">:</div>
		           					<div class="prof_name2 pro_setle_live{{$members_details->user_idk}}">{{$members_details->prof_living_settle}}</div>
		           				</div>
           					</div>
           				</div>
           			</div>
           			 <div class="col-lg-12 col-md-12 ol-sm-12 ol-xs-12 no_pads_profle">
           				<div class="prof_btn_com">
	           				<div class="prof_btn_sub">
	           					<a onclick="search_model(this.id)" id="{{$members_details->user_idk}}" data-toggle="modal" data-target="#myModal" class="view_prof">View More details<i class="fas fa-arrow-right skip_arrow"></i></a>
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
							  if(in_array($members_details->profile_id, $viewdPhNoArr)){
							  ?>  
								<div  id="hide{{$members_details->profile_id}}" class="prof_btn_sub">
									<a href="#"  class="view_prof_num">{{$members_details->prof_user_parent_continfo}}</a>
								</div> 
                            <?php
							  }
							 ?>
							 
							  @else
                              <?php 
							  if(in_array($members_details->profile_id, $viewdPhNoArr)){
							  ?>  
								<div id="hide{{$members_details->profile_id}}" class="prof_btn_sub">
									<a href="#"  class="view_prof_num">{{$members_details->prof_user_parent_continfo}}</a>
								</div> 
                            <?php
							  }
							  else{
							?>
								<div onclick='num_display(this.id)' id="{{$members_details->profile_id}}" class="prof_btn_sub phNoVwBtn{{$members_details->profile_id}}">
									<a class="view_prof">View Phone Number<i class="fas fa-arrow-down skip_arrow"></i></a>
								</div>
								<div style="display:none;" id="hide{{$members_details->profile_id}}" class="prof_btn_sub">
									<a href="#"  class="view_prof_num">{{$members_details->prof_user_parent_continfo}}</a>
								</div>
							<?php } ?>
	           				@endif
	           				@endif

	           				<div class="send_interest">
	           					  
                                      <?php         
							         if (in_array($members_details->user_idk, $reqAcBy)){
							        ?>
									<button class="send_intr_btn send_req{{$members_details->profile_id}}" style="background-color:green;width:200px" type="button">Your Request Was Accepted</button>
							         <?php } 
                                    elseif(in_array($members_details->profile_id, $requests)){
							         ?>
							        <button  style="background-color: green" class="send_intr_btn send_req{{$members_details->profile_id}}" id="{{$members_details->profile_id}}" type="button">Request Send</button>
									 <?php }  
									 else{
									 ?>
							          <button class="send_intr_btn send_req{{$members_details->profile_id}}" id="{{$members_details->profile_id}}" onclick="sendIntrst(this.id)" type="button">SEND INTEREST</button>
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
			           					<p class="modal_in_head">Parents Contact</p>
			           					<p class="modal_in_value mdtl_contact"></p>
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
			           					<p class="modal_in_head">Addressline1</p>
			           					<p class="modal_in_value mdtl_address1"></p>
			           				</div>
			           				<div class="parts_profl">
			           					<p class="modal_in_head">Addressline2</p>
			           					<p class="modal_in_value mdtl_address2"></p>
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
   </section>
 <!-- footer --> 
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
        },
        error: function(data){   
        }
      });
  }
</script>
 @include('footer')