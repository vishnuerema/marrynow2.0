@include('header')

<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<section class="edit_profs">
	<div class="container">
		<div class="tab_widss">
			<section id="tabs">
				<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill sed_rec_tab" id="nav-tab" role="tablist">
								<a class="nav-item adjsss nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Send Requests Status<span class="count_clr">{{$sent_reqst_count-1}}</span></a>
								<a class="nav-item adjsss nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Received Requests<span class="count_clr">{{$recv_reqst_count-1}}</span></a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								@for($j=0; $j< count($sent_emty_array); $j++)
									<div class="receve_common currsendata{{$sent_emty_array[$j][0]->profile_id}}">
										<div class="receve_common1">
										<img class="noti_pro_img" src="imgs/{{$sent_emty_array[$j][0]->profile_image}}" class="img-fluid" alt="noimg"> 	
										</div>
										<div class="name_rcv_req">
					                    	<div class="name_rcv_main_sub sep_sms_line">
						                    	<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">name</div> 
						                    		<div class="bold_labl2">								{{$sent_emty_array[$j][0]->profile_name}}
						                    		</div>
					                    		</div>
					                    		<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">Gender</div> 
						                    		<div class="bold_labl2">								{{$sent_emty_array[$j][0]->profile_gender}}
						                    		</div>
					                    		</div>
				                    		</div>
				                    		<div class="name_rcv_main_sub sep_sms_line">
						                    	<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">Marital status</div> 
						                    		<div class="bold_labl2">								{{$sent_emty_array[$j][0]->prof_user_marial_stat}}
						                    		</div>
					                    		</div>
					                    		<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">Employee</div> 
						                    		<div class="bold_labl2">								{{$sent_emty_array[$j][0]->prof_user_employedin}}
						                    		</div>
					                    		</div>	
				                    		</div>	
				                    		<div class="name_rcv_req_sub">
					                    		<div class="bold_labl1">Education</div> 
					                    		<div class="bold_labl2">								{{$sent_emty_array[$j][0]->prof_user_edu}}
					                    		</div>
				                    		</div>	
					                    </div>
					                    <div class="accept_btn">
				                       <?php
				                           $Id =$_SESSION['id'];
				                            $receivedReqArr=explode(',',$sent_emty_array[$j][0]->received_requests);
				                            $acceptedArr=explode(',',$sent_emty_array[$j][0]->accepted_requests);
				                      if(in_array($Id, $receivedReqArr)){
				                       ?>
				                       <p style="color:#2196f3">Pending</p>
				                        <button class="act_btn" onclick="removeReq(this.id)" id="{{$sent_emty_array[$j][0]->profile_id}}">Cancel</button>
				                      <?php
				                      }
				                      elseif(!in_array($Id, $receivedReqArr) && !in_array($Id, $acceptedArr)){
				                      ?>        
				                      <p style="color:#d31f1f">Rejected</p>   
				                       <button onclick="removeReq(this.id)" id="{{$sent_emty_array[$j][0]->profile_id}}">Remove</button>
				                       <?php
				                          }
				                        elseif(in_array($Id, $acceptedArr)){
				                       ?>
				                        <p style="color:#309332">Accepted</p> 
				                        <?php
				                        }
				                        ?> 
									</div>
								</div>
								@endfor
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								@for($i=0; $i< count($recv_emty_array); $i++)
									<div class="receve_common currrecdata{{$recv_emty_array[$i][0]->user_idk}}">
										<div class="receve_common1">
											<img class="noti_pro_img" src="imgs/{{$recv_emty_array[$i][0]->profile_image}}" class="img-fluid" alt="noimg">
										</div>
					                    <div class="name_rcv_req">
					                    	<div class="name_rcv_main_sub sep_sms_line">
						                    	<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">name</div> 
						                    		<div class="bold_labl2">								{{$recv_emty_array[$i][0]->profile_name}}
						                    		</div>
					                    		</div>
					                    		<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">Gender</div> 
						                    		<div class="bold_labl2">								{{$recv_emty_array[$i][0]->profile_gender}}
						                    		</div>
					                    		</div>
				                    		</div>
				                    		<div class="name_rcv_main_sub sep_sms_line">
						                    	<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">Marital status</div> 
						                    		<div class="bold_labl2">								{{$recv_emty_array[$i][0]->prof_user_marial_stat}}
						                    		</div>
					                    		</div>
					                    		<div class="name_rcv_req_sub">
						                    		<div class="bold_labl1">Employee</div> 
						                    		<div class="bold_labl2">								{{$recv_emty_array[$i][0]->prof_user_employedin}}
						                    		</div>
					                    		</div>	
				                    		</div>	
				                    		<div class="name_rcv_req_sub">
					                    		<div class="bold_labl1">Education</div> 
					                    		<div class="bold_labl2">								{{$recv_emty_array[$i][0]->prof_user_edu}}
					                    		</div>
				                    		</div>	
					                    </div>
					                    <div class="accept_btn">
						                    <button class="act_btn" onclick="acceptReQ(this.id)" id="{{$recv_emty_array[$i][0]->user_idk}}">Accept</button>
						                    <button class="rej_btn" onclick="rejectReq(this.id)" id="{{$recv_emty_array[$i][0]->user_idk}}">Reject</button>
										</div>
									</div>
								@endfor
							</div>
						</div>
					
					</div>
				</div>
				</div>
			</section>
		</div>
	</div>
   </section>
 <!-- footer --> 
</section>
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
<!-- footer -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/wp1.png" class="img-fluid wp_res"></button>

<script src="{{url('js/register.js')}}"></script>

<script type="text/javascript">
  function num_display(id){
    document.getElementById("hide"+id).style.display = 'block';
  }
</script> 
<!-- <script src="{{url('js/register.js')}}"></script> -->
</body>
</html>