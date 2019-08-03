<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="../../css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <script type='text/javascript' src='../../js/admin_marrynow.js'></script> -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.rtl.min.css"/>
<script type='text/javascript' src='../../js/marrynow.js'></script>
<script src="../../js/admin_marrynow.js"></script>
<script type='text/javascript' src='../../js/prflmgt_shop_user.js'></script>
</head>
<body>
	<section class="pay_tabsss shps">
		<div class="container">
              <div class="row">
	              <div class="admin_reg_shop_cmn">
	              	<form id="userForm" class="ref_form"  >
						<table class="table common_rg_form">
							<tbody>
							<tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Login Name</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									<div class="vr_reg_rt_full">
										<input  style="text-transform:lowercase" class="user_profName form-control" type="text" name="Name" placeholder=" " =""/>
										 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
									</div>
								</td>
							</tr>
							<tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Login Password</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
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
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Gender</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
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
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Date Of Birth</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									 <input type="date" class="date user_dob form-control" />
									  <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
								</td>
							</tr>
							<tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Shop Name</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									<div class="vr_reg_rt_full">
										<input  class="shop_name form-control" type="text" name="Name" placeholder=" " =""/>
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
										<input  class="shop_type form-control" type="text" name="Name" placeholder=" " =""/>
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
										<input  class="shop_pan_no form-control" type="text" name="Name" placeholder=" " =""/>
										 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
									</div>
								</td>
							</tr>
							<tr class="form_vr_tr">
							<td class="form_vr_td_lft admin_regg_shp">
								<label for="first_name" class="label_vr_form">Caste</label>
							</td>
							<td class="form_vr_td_rht admin_regg_shp">
								<select onChange="caste_retriveads()" class="chzn-select form-control user_cast user_castads frm-field " name="faculty">
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
								<select class="casteData form-control user_subcast user_subcastads frm-field " name="faculty" >
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
										<input  class="shop_door form-control" type="text" name="Name" placeholder=" " =""/>
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
										<input  class="shop_address form-control" type="textarea" name="Name" placeholder=" " =""/>
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
										<input  class="shop_street form-control" type="text" name="Name" placeholder=" " =""/>
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
									<select  onChange="getTaluk()" class="chzn-select form-control shop_location frm-field" name="ResidingLocation">
	                                    <option value="" selected >Choose one</option>
	                                    <option value="rural" >rural</option>
	                                    <option value="urban" >urban</option>
                                  </select>
										 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
									</div>
								</td>
							</tr>
							<tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Shop State</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									 <div class="vr_reg_rt_full">
										<select onChange="getDistrict()" class="chzn-select form-control shop_state_s shop_state frm-field " name="Residing">
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
									<select  onChange="getTaluk()" class="chzn-select form-control distData shop_reg_district shop_district_s shop_district_sh frm-field" name="Residing">
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
									<select onChange="getVillage()" class="talukData  chzn-select form-control shop_reg_taluk shop_taluk_s shop_taluk_sh frm-field " name="Residing">
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
									<select class="VillageData  chzn-select form-control shop_reg_village shop_village_s shop_village_sh frm-field shop_village_s" name="Residing">
                                    <option value="" selected>Choose one</option>
                                       
                                  </select>
									</div>
								</td>
							</tr>
						
							<!-- <tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Shop Ward Number</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									 <div class="vr_reg_rt_full">
										<select class="chzn-select form-control shop_ward frm-field " name="Name">
                                    	<option value="" selected>Choose one</option>
                                   		 <option value=""></option>
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
										<input  class="shop_website form-control" type="text" name="Name" placeholder=" " =""/>
										 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
									</div>
								</td>
							</tr>
							<tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">owner Email</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									 <div class="vr_reg_rt_full">
										 <input  class="user_email form-control" type="email" name="email" placeholder=" " =""/>
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
										<input  class="shop_gst form-control" type="text" name="Name" placeholder=" " =""/>
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
										<input  class="shop_bank_accnt form-control" type="number" name="account" placeholder=" " =""/>
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
										<input  class="shop_size form-control" type="number" name="Name" placeholder=" " =""/>
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
										<input  class="shop_employee_cnt form-control" type="number" name="Name" placeholder=" " =""/>
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
									 <input class="user_phone form-control" name="phone" placeholder="country code not allow" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" type = "number" />
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
							<!-- <tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Email</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									 <input  class="user_email form-control" type="email" name="email" placeholder=" " =""/>
									 <p  class="pwdFlag" hidden style="color:red;font-size:11px"></p>
								</td>
							</tr> -->
											
							<tr class="form_vr_tr">
								<td class="form_vr_td_lft admin_regg_shp">
									<label for="first_name" class="label_vr_form">Comments</label>
								</td>
								<td class="form_vr_td_rht admin_regg_shp">
									<div class="cmt_shpr"  ><a class="txt_area" onclick="sampleDesc()" ><!-- Sample Description --></a></div>
								  <textarea class="form-control commnt_me" rows="5" max='100' id="comment" name="texts"></textarea>
								</td>
							</tr>
							<!-- <p class="">Already a member? <a href="#" data-toggle="modal" data-target="#myModal">Login</a></p> -->
						</tbody>
						</table>
						<div class="form_vr_checkbox">
							<input type="checkbox" class="check_agree_trm" name="vehicle1" value="cnfrm"> I Agree the terms and conditions of marrynow<br>
						</div>
							
					</form>
					<div class="reg_centr">
	       				 <button onclick="shopRegistration()" class="reg_button hvr-icon-wobble-horizontal frst">Register <i class="fa fa-arrow-right hvr-icon"></i></button>
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
	</section>
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
</script>

 <script>
function uploadpic(){
$.ajax({
      url:'shopUsers/ownerpic_upload',
      data:new FormData($("#upload_pic_form")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(resp){

alertify.confirm('Image Uploaded Sucessfully', 'Click ok to Proceed or Cancel to Change Your Image', function(){ window.location.href = "secondary_registration";}
                , function(){  alertify.error('You can Change Your Image')});


      },
    });
}

function uploadgprof(){
$.ajax({
      url:'shopUsers/ownergprof_upload',
      data:new FormData($("#upload_gprof_form")[0]),
      dataType:'json',
      async:false,
      type:'post',
      processData: false,
      contentType: false,
      success:function(resp){

alertify.confirm('Image Uploaded Sucessfully', 'Click ok to Proceed or Cancel to Change Your Image', function(){ window.location.href = "secondary_registration";}
                , function(){  alertify.error('You can Change Your Image')});


      },
    });
}



  /*shopp admin caste */
    function caste_retriveads(){
    $('.castevals').remove();
        var selectedcaste=$('.user_castads option:selected').val();
          $.ajax({
         type: "post",
          url: "get_caste",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "selectedcaste":selectedcaste
            },
         cache: false,
         success: function(data){
          console.log(data);
         for(var i=0; i<data.length; i++){
          $('.casteData').append('<option class="castevals" value="'+data[i].sub_caste_name+'" >'+data[i].sub_caste_name+'</option>');
          }

          }
       });
}
</script>
<script>
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
