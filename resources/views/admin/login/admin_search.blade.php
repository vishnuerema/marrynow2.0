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
</head>
<body>
			<section class="pay_tabsss">
              <div class="container">
	              <div class="row">
		              <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
		              	<!--Blue select-->
							<select class="mdb-select serch_admin_slct form-control" searchable="Search here..">
							  <option value="" disabled selected>Choose your option</option>
							  <option value="1" class="rounded-circle">Name</option>
							    <option value="2" class="rounded-circle">Phone number</option>
							    <option value="3" class="rounded-circle">Email</option>
							    <option value="4" class="rounded-circle">Matrimony id</option>
							</select>
		              </div> 
		                <div class="col-md-5 col-sm-5 col-xs-12 col-lg-5">
			              	<div class="form-group">
								  <input type="text" class="form-control srch_admin_inpt" id="usrsss">
							</div>
		              </div>
		              <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
			              	<div class="buttton_serch">
			              		<button onclick="admin_serch()" data-toggle="modal" data-target="#myModal1" data-tab="login" class="submit_ser_admin">Submit</button>
							</div>
		              </div>
	              </div>
              </div>
               <div class="container">
				 <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"> -->
				  </button>

				  <!-- The Modal -->
				  <div class="modal fade" id="myModal1">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				           <ul class="nav nav-tabs" role="tablist">
						        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Basic Profile</a></li>
						        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Secondary Profile</a></li>
						      </ul>

				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body">
				        	 <div class="tab-content">
						        <div role="tabpanel" class="tab-pane active" id="login">
						          <div class="modal-header">
						          	<h4 class="imgspc">Bascic Profile Details</h4>
						        
						          </div>
						          <div class="modal-body baseDataSpcs">
							          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							         	 <div class="common_admin_serv">
								         	<p class="matri_id">Matri Id</p>
								         	<!-- <p class="usr_id val_matri"></p> -->
								         	<p class="dlt_usr_idk usr_idk val_matri"></p>
								          </div>
							          </div>
							           <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							           	 <div class="common_admin_serv">
								         	<p class="matri_id">Profile name</p>
								         	<p class="usr_name val_matri"></p>
								          </div>
							          </div>
							          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							          	 <div class="common_admin_serv">
								         	<p class="matri_id">gender</p>
								         	<p class="usr_gender val_matri"></p>
								          </div>
							          </div>
							           <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							           	 <div class="common_admin_serv">
								         	<p class="matri_id">Email</p>
								         	<p class="usr_mail val_matri"></p>
								          </div>
							          </div>
							           <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							           	 <div class="common_admin_serv">
								         	<p class="matri_id">Mobile</p>
								         	<p class="usr_mobile val_matri"></p>
								          </div>
							          </div>
							          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							           	 <div class="common_admin_serv">
								         	<p class="matri_id">payment plan</p>
								         	<p class="usr_plan_pay val_matri"></p>
								          </div>
							          </div>
						          </div>
						          <div class="modal-footer">

						          </div>
						        </div>

							        <div role="tabpanel" class="tab-pane fade" id="register">
							          <div class="modal-header">
							          <h4>Secondary Profile Details</h4>
							          </div>
							          <div class="modal-body secDataSpc">
							          	<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							         	 <div class="common_admin_serv">
								         	<p class="matri_id">education</p>
								         	<p class="usr_education val_matri"></p>
								          </div>
							          	</div>
							          	<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							         	 <div class="common_admin_serv">
								         	<p class="matri_id">languages known</p>
								         	<p class="usr_lang val_matri"></p>
								          </div>
							          	</div>
							          	<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
							         	 <div class="common_admin_serv">
								         	<p class="matri_id">occupation</p>
								         	<p class="usr_occupation val_matri"></p>
								          </div>
							          	</div>
							          </div>
							           <div class="modal-footer">
							          </div>
							        </div>
						         </div>
				        </div>
				        
				        <!-- Modal footer -->
				        <div class="modal-footer">
				        	<div class="dlt_profile">
			              		<button onclick="admin_pro_dlt()" class="dlt_btn">Delete</button>
							</div>
				          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        </div>
				        
				      </div>
				    </div>
				  </div>
				  
				</div>
         	 </section>

</body>
</html>