<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>

<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Marry Now</title>
<link rel="icon" href="../images/favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- bootstrap-CSS -->
<!-- Fontawesome-CSS -->
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sail" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- owl-coursel -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--theme-style-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />	
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="../js/marrynow.js"></script>	
</head>
<body>

<!-- header -->
  <header class="heads">
    <body >
  <!--  <div id="overlay" style="position:fixed;left:0;right:0;bottom:0;top:0;display:flex;justify-content:center;aliggn-items:center;z-index:1999;background:rgba(0, 0, 0, 0.5)">
    <img id="" src="svg/load.svg">
    </div> -->
<hr class="menu_bord wow lightSpeedIn">
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
          <ul class="navbar-nav reg_ul">
            <li class="nav-item reg2_wids1">
              <div class="menu_ssw">
                <span class="fa_help"><img src="../images/c.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="reg_help"><a href="contact" class="hlp">Contact Us</a></span>
              </div>
            </li>
            <li class="nav-item reg2_wids2">
              <div class="menu_ssw">
                <span class="fa_help"><img src="../images/support.png" class="img-fluid reg_help" alt="noimg"></span>
                <span class="reg_help"><a href="tel:9629466278" class="hlp">Helpline : <span class="num">9629466278</span></a></span>
              </div>
            </li> 
            <li class="nav-item reg2_wids3">
              <div class="menu_ssw">
                <span style="cursor:pointer" class="reg_help"><a href="../logout_app" class="hlp">logout</a></span>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
<!-- header -->
    <hr class="menu_bord wow lightSpeedIn">
    <section class="edit_profs adjst_pads">
      <div class="container">
        <div class="spr_admn_ddwn_cmn">
  	      <div class="adjst_centr">
  	    		<div class="row spr_admn_ers">
              <div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
                <div class="supr_admin_dropdwn">
                  <div class="dropdown">
                   <select class="gender_subbrbch" style="height:30px;width:100%" id="dropdownMenuButton"  >
                   <option  value="male" selected>Male</option>
                   <option  value="female">Female</option>
                           
                    </select>
                </div>
                </div>
              </div>
  		    		<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
  		    			<div class="supr_admin_dropdwn">
  		    				<div class="dropdown">
  		<!-- 					  <button class="btn btn-secondary spr_ad_ddrpdn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  							   Caste
  							  </button>
  							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  							    <a class="dropdown-item" href="#">Action</a>
  							    <a class="dropdown-item" href="#">Another action</a>
  							    <a class="dropdown-item" href="#">Something else here</a>
  							  </div> -->
                   <select class="casteVal spr_ad_ddrpdn usr_castes" onChange="caste_retrive()" style="height:30px;width:100%" id="dropdownMenuButton"  >
                    <option value="" selected>Choose a Caste</option>
                    @foreach($caste as $casteVal)
                    <option value="{{$casteVal->caste_name}}">{{$casteVal->caste_name}}</option>
                    @endforeach
                  </select>

  							</div>
  		    			</div>
  		    		</div>
  		    		<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
  		    			<div class="supr_admin_dropdwn">
  		    				<div class="dropdown">
  							 <!--  <button class="btn btn-secondary spr_ad_ddrpdn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  							    Sub Cast
  							  </button>
  							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  							    <a class="dropdown-item" href="#">Action</a>
  							    <a class="dropdown-item" href="#">Another action</a>
  							    <a class="dropdown-item" href="#">Something else here</a>
  							  </div> -->
                   <select class="casteData subcasteVal spr_ad_ddrpdn" style="height:30px;width:100%" id="dropdownMenuButton"  >
                   
                   <option  value="" selected>Choose a Subcaste</option>
                           
                    </select>
  							</div>
  		    			</div>
  		    		</div>
  		    		<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
  		    			<div class="supr_admin_dropdwn">
  		    				<div class="dropdown">
  							  <button onclick="searchData()" class="btn_spr_adminss" type="button">
  							    Search
  							  </button>
  							</div>
  		    			</div>
  		    		</div>
  	    		</div>
          </div>
	    	</div>
      <div class="resultSpace" style="float:right;display:none" ><label class="spn_lbl"><b>Search Filter</b></label> <input  id="searchFilter" class="searchTable" type="text" /></div>
       <br>
	    	<div class=" resultSpace spr_admn_table" style="display:none">
	    		<table class="table myTable table-responsive table-bordered spr_admn_tble">
				    <thead>
				      <tr class="supr_admin_tabl_th">
				        <th>Name</th>
                <th>Matri id</th>
                <th>Phone</th>
				        <th>Parents Phone</th>
                <th>Marital Status</th>
                <th>Education</th>
                <th>Job</th>
                <th>Age</th>
                <th>Caste</th>
                <th>Rasi</th>
                <th>Star</th>
                <th>Income</th>
				        <th>comment</th>
                <th>Status</th>
				        <th> Change Status</th>
                <th>Action</th>
				      </tr>
				    </thead>
				    <tbody class="tableData">
				    </tbody>
				  </table>
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

<!--   delete model -->  
     <!-- The Modal -->
  <div class="modal" id="dltModal">
    <div class="modal-dialog">
      <div class="modal-content model_bckgrnd">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title model_hdr">Do You Want Delete This Profile</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="delete_prof_model">
            <p style="display: none;" class="mdtl_id"></p>
              <span class="delete_words"><button type="button" onclick="deletebtnc($('.mdtl_id').text(),'permanent')" class="dltall_model_btn">profile Delete Permanetly</button></span><span class="delete_btn"><button  onclick="deletebtnc($('.mdtl_id').text(),'duplicate')" type="button" class="dlt_model_btn">Duplicate Profile Delete</button></span>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!--   delete model -->

   <!--   view model -->  
  <div class="modal" id="viewModal">
    <div class="modal-dialog width_viewmodel">
    <div class="container">
      <div class="modal-content model_bckgrnd">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title model_hdr view_h4s">View Profile (<span class="matriid_viewprof mdtl_matriid"></span>)</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="view_prof_model">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Name : </div>
                    <div  class="mdtl_name matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Father/Guardian Name : </div>
                    <div  class="mdtl_guardname matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Age : </div>
                    <div  class="matriages matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Religion : </div>
                    <div  class="matrireligion matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Family God : </div>
                    <div  class="mdtl_familygod matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Caste : </div>
                    <div  class="matricast matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">subcaste : </div>
                    <div  class="matrisubcast matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Rasi : </div>
                    <div  class="matrirasi matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Star : </div>
                    <div  class="matristar matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                    <div class="comn_innr_viewprof">
                      <div  class="mdtl_labl">Marital Status : </div>
                      <div  class="matrimaritalstatus matrimodval"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                    <div class="comn_innr_viewprof">
                      <div  class="mdtl_labl">District : </div>
                      <div  class="matridistrict matrimodval"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Physical Status : </div>
                    <div  class="mdtl_phystatus matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Education : </div>
                    <div  class="matreducation matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Income : </div>
                    <div  class="matriincome matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Family Income : </div>
                    <div  class="matrifamincome matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Networth : </div>
                    <div  class="mdtl_networth matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Type Of income : </div>
                    <div  class="mdtl_incometype matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Occupatio value : </div>
                    <div  class="mdtl_occupvalue matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Occupatio Type : </div>
                    <div  class="mdtl_oocuptype matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Occupatio Field : </div>
                    <div  class="mdtl_oocupfield matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Occupatio Relation : </div>
                    <div  class="mdtl_oocuprelation matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Chart Style : </div>
                    <div  class="matrichartstyle matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Family value : </div>
                    <div  class="matrifamilval matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Family Type : </div>
                    <div  class="matrifamiltype matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Desktop Available : </div>
                    <div  class="matridpavail matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Laptop Available : </div>
                    <div  class="matrilapavail matrimodval"></div>
                  </div>
                </div>
                 <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Ups Available : </div>
                    <div  class="matriupsavail matrimodval"></div>
                  </div>
                </div> 
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Television Available : </div>
                    <div  class="matritvavail matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Fridge Available : </div>
                    <div  class="matrifridgeavail matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Washing Machine Available : </div>
                    <div  class="matriwashmachineavail matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Bore water Available : </div>
                    <div  class="matriborewateravail matrimodval"></div>
                  </div>
                </div> 
                 <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Car Available : </div>
                    <div  class="matricaravail matrimodval"></div>
                  </div>
                </div> 
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Bike Available : </div>
                    <div  class="matribikeavail matrimodval"></div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                  <div class="comn_innr_viewprof">
                    <div  class="mdtl_labl">Blood : </div>
                    <div  class="matribloodavail matrimodval"></div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
      </div>
    </div>
  </div>
  <!--   view model --> 
  <script>
    function searchData(){
      var caste=$('.casteVal').val();
      var gender=$('.gender_subbrbch').val();
      var subCaste=$('.subcasteVal').val();
      $('.tableRespData').remove();
        $.ajax({
         type: "post",
          url: "search_catse",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "caste":caste,"subcaste":subCaste,"gender":gender
            },
         cache: false,
         success: function(response){
           console.log(response)

          for(var i=0; i<response.length; i++){
                 if(response[i].super_admin_status=="Marrige done by other source"){
                        var Color ="#666060";
                     }
                     else if(response[i].super_admin_status=="Not interested for now"){
                      var Color ="#6107af";
                     }
                     else if(response[i].super_admin_status=="urgent and processing"){
                      var Color ="#ea7a1e";
                     }
                     else if(response[i].super_admin_status=="Marriage done but comission not recieved"){
                      var Color ="#e80000";
                     }
                     else if(response[i].super_admin_status=="Marriage done and comission recieved"){
                      var Color ="#2b7507";
                     }
                     else if(response[i].super_admin_status=="First call completed"){
                      var Color ="#eae31e";
                     }
                     else if(response[i].super_admin_status=="Others"){
                      var Color ="#d7b5e5";
                     }
                     else{
                      var Color ="#000"
                     }
           if(response[i].profile_completed_status==0){
            // <td>'+response[i].user_email+'</td>
             $('.tableData').append('<tr class="tableRespData" style="color:"><td class="profnameNxt'+response[i].user_id+'">'+response[i].user_name+'</td><td class="id_hiddn'+response[i].user_id+'" style="display:none";>'+response[i].user_id+'</td><td class="pro_matriid'+response[i].user_id+'">'+response[i].user_matri_id+'</td><td>'+response[i].user_mobile+'</td><td>'+response[i].prof_user_parent_continfo+'</td><td>'+response[i].prof_user_marial_stat+'</td><td class="pro_matriedu'+response[i].user_id+'">'+response[i].prof_user_edu+'</td><td>'+response[i].prof_user_employedin+'</td><td class="pro_matriage'+response[i].user_id+'">'+response[i].profile_age+'</td><td class="profcast'+response[i].user_id+'">'+response[i].user_cast+'</td><td class="profrasi'+response[i].user_id+'">'+response[i].prof_user_raasi+'</td><td class="profstar'+response[i].user_id+'">'+response[i].prof_user_star+'</td><td class="profincome'+response[i].user_id+'">'+response[i].prof_income+'</td><td><textarea class="superadmn_comment'+response[i].user_id+'">'+response[i].super_admin_comments+'</textarea></td><td class="status'+response[i].user_id+'">Profile Not Completed</td> <td><select class="wds_selectbox spradmn_status'+response[i].user_id+' " disabled="true"  onchange="SavAdminUsrStatus('+response[i].user_id+')" >@foreach($supradmn_status as $supradmn_stas)<option value="{{$supradmn_stas->user_status}}">{{$supradmn_stas->user_status}}</option>@endforeach</select> <span style="cursor:pointer" class="reefresh" onclick="refreshStatus('+response[i].user_id+')"><i class="fa fa-refresh marg_rt"></i></span></td> <td><div class="icon_superadmndone"><i class="fas fa-check-square spr_admn_done" id="'+response[i].user_id+'" onclick="commentdone(this.id)"></i></div><div class="icon_superadmn"><i class="fas fa-sign-in-alt spr_admn_logbtn" id="'+response[i].user_name+'" onclick="DirectLogin(this)"></i></div><div class="icon_superadmn_whats"><a target="_blank" href="https://wa.me/?text=https://marrynow.in/beta/public/profile/all_profile?prof='+response[i].encrypt_id+'"><i class="fab fa-whatsapp spr_admn_whatsbtn" id="'+response[i].user_id+'" ></i></a></div><div class="icon_superadmn"><i class="fas fa-eye spr_admn_dltbtn viewsuperadmn" data-toggle="modal" data-target="#viewModal" id="'+response[i].user_id+'" onclick="viewsuperadmn(this.id)"></i></div><div class="icon_superadmn"><i class="far fa-trash-alt spr_admn_dltbtn" data-toggle="modal" data-target="#dltModal" id="'+response[i].user_id+'" onclick="Directdelete(this.id)"></i></div></td><td style="display:none"; class="pro_prophystatus'+response[i].user_id+'">'+response[i].prof_user_physichal_status+'</td><td style="display:none"; class="profsubcast'+response[i].user_id+'">'+response[i]. user_sub_caste+'</td><td style="display:none"; class="profmaritalstatus'+response[i].user_id+'">'+response[i]. prof_user_marial_stat+'</td><td style="display:none"; class="proffamincome'+response[i].user_id+'">'+response[i].prof_familyincome+'</td><td style="display:none"; class="profreligion'+response[i].user_id+'">'+response[i].prof_relegion+'</td><td style="display:none"; class="profchartstyle'+response[i].user_id+'">'+response[i].prof_user_chartstyle+'</td><td style="display:none"; class="proffamilyval'+response[i].user_id+'">'+response[i].prof_familyvalue+'</td><td style="display:none"; class="proffamilytype'+response[i].user_id+'">'+response[i].prof_familytype+'</td><td style="display:none"; class="profdistrict'+response[i].user_id+'">'+response[i].prof_district+'</td><td style="display:none"; class="profdbavail'+response[i].user_id+'">'+response[i].prof_desktop_avail+'</td><td style="display:none"; class="proflapavail'+response[i].user_id+'">'+response[i].prof_laptop_avail+'</td><td style="display:none"; class="profupsavail'+response[i].user_id+'">'+response[i].prof_ups_avail+'</td><td style="display:none"; class="proftvavail'+response[i].user_id+'">'+response[i].prof_television_avail+'</td><td style="display:none"; class="proffridgeavail'+response[i].user_id+'">'+response[i].prof_fridge_avail+'</td><td style="display:none"; class="profwashmachavail'+response[i].user_id+'">'+response[i].prof_washingmchine_avaiil+'</td><td style="display:none"; class="profborwateravail'+response[i].user_id+'">'+response[i].prof_borewater_avail+'</td><td style="display:none"; class="profcaravail'+response[i].user_id+'">'+response[i].prof_car_avail+'</td><td style="display:none"; class="profbikeavail'+response[i].user_id+'">'+response[i].prof_twowheller_avail+'</td><td style="display:none"; class="profbloodavail'+response[i].user_id+'">'+response[i].prof_blood_group+'</td><td style="display:none"; class="profguardname'+response[i].user_id+'">'+response[i].prof_father_guardian_name+'</td><td style="display:none"; class="proffamilygod'+response[i].user_id+'">'+response[i].prof_family_god+'</td><td style="display:none"; class="profnetworth'+response[i].user_id+'">'+response[i].prof_networth+'</td><td style="display:none"; class="profincometype'+response[i].user_id+'">'+response[i].prof_typeof_income+'</td><td style="display:none"; class="profoccupvalue'+response[i].user_id+'">'+response[i]. prof_occptin_value+'</td><td style="display:none"; class="profoccupatype'+response[i].user_id+'">'+response[i].prof_occptin_type+'</td><td style="display:none"; class="profoccupafield'+response[i].user_id+'">'+response[i].prof_occptin_field+'</td><td style="display:none"; class="profrelation'+response[i].user_id+'">'+response[i].prof_occptin_relation+'</td></tr>');
           }else{
// <td>'+response[i].user_email+'</td>
            $('.tableData').append('<tr class="tableRespData" style="color:'+Color+'"><td class="profnameNxt'+response[i].user_id+'">'+response[i].user_name+'</td><td class="id_hiddn'+response[i].user_id+'" style="display:none";>'+response[i].user_id+'</td><td class="pro_matriid'+response[i].user_id+'">'+response[i].user_matri_id+'</td><td>'+response[i].user_mobile+'</td><td>'+response[i].prof_user_parent_continfo+'</td><td>'+response[i].prof_user_marial_stat+'</td><td class="pro_matriedu'+response[i].user_id+'">'+response[i].prof_user_edu+'</td><td>'+response[i].prof_user_employedin+'</td><td class="pro_matriage'+response[i].user_id+'">'+response[i].profile_age+'</td><td class="profcast'+response[i].user_id+'">'+response[i].user_cast+'</td><td class="profrasi'+response[i].user_id+'">'+response[i].prof_user_raasi+'</td><td class="profstar'+response[i].user_id+'">'+response[i].prof_user_star+'</td><td class="profincome'+response[i].user_id+'">'+response[i].prof_income+'</td><td><textarea class="superadmn_comment'+response[i].user_id+'">'+response[i].super_admin_comments+'</textarea></td><td class="status'+response[i].user_id+'">'+response[i].super_admin_status+'</td> <td><select class="wds_selectbox spradmn_status'+response[i].user_id+' "  disabled="true" onchange="SavAdminUsrStatus('+response[i].user_id+')">@foreach($supradmn_status as $supradmn_stas)<option value="{{$supradmn_stas->user_status}}">{{$supradmn_stas->user_status}}</option>@endforeach</select> <span class="glyprefresh" style="cursor:pointer" onclick="refreshStatus('+response[i].user_id+')"> <i class="fa fa-refresh marg_rt"></i> </span></td></td> <td><div class="icon_superadmndone"><i class="fas fa-check-square spr_admn_done" id="'+response[i].user_id+'" onclick="commentdone(this.id)"></i></div><div class="icon_superadmn"><i class="fas fa-sign-in-alt spr_admn_logbtn" id="'+response[i].user_name+'" onclick="DirectLogin(this)"></i></div><div class="icon_superadmn_whats"><a target="_blank" href="https://wa.me/?text=https://marrynow.in/beta/public/profile/all_profile?prof='+response[i].encrypt_id+'"><i class="fab fa-whatsapp spr_admn_whatsbtn" id="'+response[i].user_id+'" ></i></a></div><div class="icon_superadmn"><i class="fas fa-eye spr_admn_dltbtn viewsuperadmn" data-toggle="modal" data-target="#viewModal" id="'+response[i].user_id+'" onclick="viewsuperadmn(this.id)"></i></div><div class="icon_superadmn"><i class="far fa-trash-alt spr_admn_dltbtn" data-toggle="modal" data-target="#dltModal" id="'+response[i].user_matri_id+'" onclick="Directdelete(this.id)"></i></div></td><td style="display:none"; class="pro_prophystatus'+response[i].user_id+'">'+response[i].prof_user_physichal_status+'</td><td style="display:none"; class="profsubcast'+response[i].user_id+'">'+response[i]. user_sub_caste+'</td><td style="display:none"; class="profmaritalstatus'+response[i].user_id+'">'+response[i]. prof_user_marial_stat+'</td><td style="display:none"; class="proffamincome'+response[i].user_id+'">'+response[i].prof_familyincome+'</td><td style="display:none"; class="profreligion'+response[i].user_id+'">'+response[i].prof_relegion+'</td><td style="display:none"; class="profchartstyle'+response[i].user_id+'">'+response[i].prof_user_chartstyle+'</td><td style="display:none"; class="proffamilyval'+response[i].user_id+'">'+response[i].prof_familyvalue+'</td><td style="display:none"; class="proffamilytype'+response[i].user_id+'">'+response[i].prof_familytype+'</td><td style="display:none"; class="profdistrict'+response[i].user_id+'">'+response[i].prof_district+'</td><td style="display:none"; class="profdbavail'+response[i].user_id+'">'+response[i].prof_desktop_avail+'</td><td style="display:none"; class="proflapavail'+response[i].user_id+'">'+response[i].prof_laptop_avail+'</td><td style="display:none"; class="profupsavail'+response[i].user_id+'">'+response[i].prof_ups_avail+'</td><td style="display:none"; class="proftvavail'+response[i].user_id+'">'+response[i].prof_television_avail+'</td><td style="display:none"; class="proffridgeavail'+response[i].user_id+'">'+response[i].prof_fridge_avail+'</td><td style="display:none"; class="profwashmachavail'+response[i].user_id+'">'+response[i].prof_washingmchine_avaiil+'</td><td style="display:none"; class="profborwateravail'+response[i].user_id+'">'+response[i].prof_borewater_avail+'</td><td style="display:none"; class="profcaravail'+response[i].user_id+'">'+response[i].prof_car_avail+'</td><td style="display:none"; class="profbikeavail'+response[i].user_id+'">'+response[i].prof_twowheller_avail+'</td><td style="display:none"; class="profbloodavail'+response[i].user_id+'">'+response[i].prof_blood_group+'</td><td style="display:none"; class="profguardname'+response[i].user_id+'">'+response[i].prof_father_guardian_name+'</td><td style="display:none"; class="proffamilygod'+response[i].user_id+'">'+response[i].prof_family_god+'</td><td style="display:none"; class="profnetworth'+response[i].user_id+'">'+response[i].prof_networth+'</td><td style="display:none"; class="profincometype'+response[i].user_id+'">'+response[i].prof_typeof_income+'</td><td style="display:none"; class="profoccupvalue'+response[i].user_id+'">'+response[i].prof_occptin_value+'</td><td style="display:none"; class="profoccupatype'+response[i].user_id+'">'+response[i].prof_occptin_type+'</td><td style="display:none"; class="profoccupafield'+response[i].user_id+'">'+response[i].prof_occptin_field+'</td><td style="display:none"; class="profrelation'+response[i].user_id+'">'+response[i].prof_occptin_relation+'</td></tr>');
           }
          }
            $('.resultSpace').css('display', 'block');
          }
       });
    }

  $("#searchFilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    document.querySelectorAll('.myTable .tableRespData').forEach(function(tr){
      var chk = false;
      tr.querySelectorAll('td').forEach(function(td, i){
        if(i < 4){
          if(td.innerText.search(value) > -1){
            chk = true;
          }
        }
      });
      if(chk == true){
        tr.style.display = 'table-row';
      }else{
        tr.style.display = 'none';
      }
    });
    // $(".myTable .tableRespData").filter(function() {
    //   $(this).toggle( $(this).text().toLowerCase().indexOf(value) > -1)
    // });
  });

  function viewsuperadmn(clicked_id){
      var user_id=clicked_id;
      $('.mdtl_id').text(clicked_id);
      var profName=$('.profnameNxt'+user_id).text();
      $('.mdtl_name').text(profName);
      var pro_pystatus=$('.pro_prophystatus'+user_id).text();
      $('.mdtl_phystatus').text(pro_pystatus);
      var pro_matriid=$('.pro_matriid'+user_id).text();
      $('.mdtl_matriid').text(pro_matriid); 
       var pro_matriedu=$('.pro_matriedu'+user_id).text();
      $('.matreducation').text(pro_matriedu); 
      var pro_matriage=$('.pro_matriage'+user_id).text();
      $('.matriages').text(pro_matriage); 
      var pro_cast=$('.profcast'+user_id).text();
      $('.matricast').text(pro_cast); 
      var pro_subcast=$('.profsubcast'+user_id).text();
      $('.matrisubcast').text(pro_subcast);
      var pro_rasi=$('.profrasi'+user_id).text();
      $('.matrirasi').text(pro_rasi);
      var pro_star=$('.profstar'+user_id).text();
      $('.matristar').text(pro_star); 
      var pro_maritalstatus=$('.profmaritalstatus'+user_id).text();
      $('.matrimaritalstatus').text(pro_maritalstatus);
      var prof_income=$('.profincome'+user_id).text();
      $('.matriincome').text(prof_income);
      var prof_famincome=$('.proffamincome'+user_id).text();
      $('.matrifamincome').text(prof_famincome);
      var prof_religion=$('.profreligion'+user_id).text();
      $('.matrireligion').text(prof_religion);
      var prof_chartstyle=$('.profchartstyle'+user_id).text();
      $('.matrichartstyle').text(prof_chartstyle);
      var prof_familyvalue=$('.proffamilyval'+user_id).text();
      $('.matrifamilval').text(prof_familyvalue);
       var prof_familytype=$('.proffamilytype'+user_id).text();
      $('.matrifamiltype').text(prof_familytype);
      var prof_district=$('.profdistrict'+user_id).text();
      $('.matridistrict').text(prof_district);
      var prof_dbavail=$('.profdbavail'+user_id).text();
      $('.matridpavail').text(prof_dbavail);
      var prof_lapavail=$('.proflapavail'+user_id).text();
      $('.matrilapavail').text(prof_lapavail);
      var prof_upsavail=$('.profupsavail'+user_id).text();
      $('.matriupsavail').text(prof_upsavail);
       var prof_tvavail=$('.proftvavail'+user_id).text();
      $('.matritvavail').text(prof_tvavail); 
       var prof_fridgeavail=$('.proffridgeavail'+user_id).text();
      $('.matrifridgeavail').text(prof_fridgeavail);
      var prof_washmachavail=$('.profwashmachavail'+user_id).text();
      $('.matriwashmachineavail').text(prof_washmachavail); 
      var prof_borwateravail=$('.profborwateravail'+user_id).text();
      $('.matriborewateravail').text(prof_borwateravail); 
      var prof_caravail=$('.profcaravail'+user_id).text();
      $('.matricaravail').text(prof_caravail);
      var prof_bikeavail=$('.profbikeavail'+user_id).text();
      $('.matribikeavail').text(prof_bikeavail);
      var prof_bloodavail=$('.profbloodavail'+user_id).text();
      $('.matribloodavail').text(prof_bloodavail); 
       var prof_guardname=$('.profguardname'+user_id).text();
      $('.mdtl_guardname').text(prof_guardname); 
      var prof_familygod=$('.proffamilygod'+user_id).text();
      $('.mdtl_familygod').text(prof_familygod);
      var prof_networth=$('.profnetworth'+user_id).text();
      $('.mdtl_networth').text(prof_networth);
      var prof_incometype=$('.profincometype'+user_id).text();
      $('.mdtl_incometype').text(prof_incometype);
      var prof_occuptype=$('.profoccupatype'+user_id).text();
      $('.mdtl_oocuptype').text(prof_occuptype);
      var prof_occuprelation=$('.profrelation'+user_id).text();
      $('.mdtl_oocuprelation').text(prof_occuprelation);
      var prof_occupreltn=$('.profoccuprltn'+user_id).text();
      $('.mdtl_occuprltn').text(prof_occupreltn);
      var prof_occupvlaue=$('.profoccupvalue'+user_id).text();
      $('.mdtl_occupvalue').text(prof_occupvlaue); 
      var prof_occupfield=$('.profoccupafield'+user_id).text();
      $('.mdtl_oocupfield').text(prof_occupfield);  
  }

 function DirectLogin(e){
     var user= e.id;
      $.ajax({
         type: "post",
          url: "sup_ad_direct_login",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "user":user,"role":"SupAd"
            },
         cache: false,
         success: function(data){
            if(data.role==1){
            // window.location.href="../admin/login/home";
            window.open('../admin/login/home','_blank');
           }
           else if(data.role==2){
            // window.location.href="../shopUsers/profile_management";
            window.open('../shopUsers/profile_management','_blank');
           }
           else if(data.role==0){
            // window.location.href="../register2";
           window.open('../register2','_blank');
           }
           else if(data.role==3){
            // window.location.href="../shopManager/manager_management";
            window.open('../shopManager/manager_management','_blank');
           } else if(data.role==5){
            // window.location.href="superAdmin/home";
             window.open('superAdmin/home','_blank');
           }
           else{
             alert("failiure")
           }
          }
       });
    }

  </script>

    <script>
    function commentdone(clicked_id){
      var commnt_superadmn = $('.superadmn_comment'+clicked_id).val();
      var user_id=clicked_id;

      $.ajax({
          type: "post",
          url: "superadmn_commnt_update",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "user_id":user_id,"commnt_superadmn":commnt_superadmn
             },
          cache: false,
          success: function(data){
            
           }

        });
    }
  </script> 

  <script>
    function Directdelete(clicked_id){
      var user_id=clicked_id;
        $('.mdtl_id').text(clicked_id);
       
    }
  </script>

  <script>
    function deletebtnc(id,deleteType){
      alert(id)
     $.ajax({
        type: "post",
        url: "superadmn_delete_btn",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            "deleteType":deleteType,"id":id
           }, 
        cache: false,
        success: function(data){

       }

      });

      }
  </script>
  <script>
    function SavAdminUsrStatus(id){
var spradmn_status = $('.spradmn_status'+id).val();
$('.status'+id).text(spradmn_status);
$.ajax({
    type: "post",
    url: "supradmn_changestatus",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "spradmn_status":spradmn_status,"id":id
       }, 
    cache: false,
    success: function(data){
    $(".spradmn_status"+id).attr("disabled", true);
  }
  });
}

function refreshStatus(id){
    $(".spradmn_status"+id).attr("disabled", false);

  }

  </script>
<script type="text/javascript">
  /*shopp admin caste */
    function caste_retrive(){
    $('.castevalss').remove();
        var selectedcaste=$('.usr_castes option:selected').val();
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
          $('.casteData').append('<option class="castevalss" value="'+data[i].sub_caste_name+'" >'+data[i].sub_caste_name+'</option>');
          }

          }
       });
}
/*welcome caste */
</script>
</body>
</html>