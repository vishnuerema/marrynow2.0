@foreach($regUsers as $data)

@if($data->role==2)
<div class="main comp{{$data->user_id}}" style="margin-left:150px;margin-right:150px;background-color: #37809e">
	<span style="color:#fafafa">Shop Owners Profile</span>&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="chkShopProfCnt(this.id)" id="{{$data->user_id}}">Check Count</button>
@else
<div class="main comp{{$data->user_id}}" style="margin-left:150px;margin-right:150px">
@endif
  <div class="hipsum">
    <div class="jumbotron custom_jumpo cmpstrt{{$data->user_id}}" style="box-shadow:0px 0px 1px 1px #932993">
    	<div class="container-fluid" style="padding:0px;margin:0px">
	    	<div class="row" style="padding:0px;margin:0px">
		    	<div class="col-md-12 col-lg-12 col-sm-12" style="padding-top:5px;margin:0px">
		    		<div class="col-md-2 col-lg-2 col-sm-2" style="padding-top:5px;margin:0px">
		    		<label class="lbl_clr"><b>MATRIMONY ID:</b></label> <div class="data_clr" > {{$data->user_matri_id}}</div>
		    	</div>
		    	<div class="col-md-2 col-lg-2 col-sm-2" style="padding-top:5px;margin:0px">
		    		<label class="lbl_clr" ><b>USER NAME:</b> </label><div class="data_clr"> {{$data->user_name}}</div>
		    	</div>
		    	<div class="col-md-2 col-lg-2 col-sm-2" style="padding-top:5px;margin:0px">
		    		<label class="lbl_clr" ><b>GENDER:</b> </label><div class="data_clr"> {{$data->user_gender}}</div>
		    	</div>
		    	<div class="col-md-2 col-lg-2 col-sm-2" style="padding-top:5px;margin:0px">
		    		<label class="lbl_clr" ><b>MOBILE: </b></label><div class="data_clr"> {{$data->user_mobile}}</div>
		    	</div>
		    		<div class="col-md-2 col-lg-2 col-sm-2" style="padding-top:5px;margin:0px">
		    		<label class="lbl_clr" ><b>RELATIONSHIP: </b></label><div class="data_clr" >  {{$data->profile_created_by}}</div>
		    	</div>    
                   <div class="col-md-1 col-lg-1 col-sm-1" style="margin:0px">
				    <div onclick="viewProf(this.id)" id="{{$data->user_id}}"><i data-toggle="modal" data-target="#myModal" data-tab="login" class="fa fa-eye vw_ico_clr" aria-hidden="true"></i></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div onclick="adminDelUser(this.id)" id="{{$data->user_id}}"><i class="fa fa-trash del_ico_clr" aria-hidden="true"></i></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div onclick="pwdChange(this.id)" id="{{$data->user_id}}" ><i class="fa fa-key ky_ico_clr" aria-hidden="true"></i></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div onclick="chatHist(this.id)" id="{{$data->user_id}}" ><i data-toggle="modal" data-target="#basicExampleModal" class="fa fa-comments-o" aria-hidden="true"></i></div>
		          </div>
		    	</div>   
		          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			          <div class="create_time_disp">
			          		Registered on  {{$data->created_ts}}
			          </div>
		          </div>
		          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			          <div class="create_time_disp">
			          	<?php if(!isset($data->created_ts)){ ?>
 								This user doesnt have a  marriage profile yet
			          	<?php } else{ ?>
			          		Created on  {{$data->created_ts}}
			          	 <?php }  ?>

			          </div>
		          </div>
		    	</div>
	    	</div>
    	</div>
    </div>
    </div>
  </div>
@endforeach

<div class="container">  
	<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      <ul class="nav nav-tabs" role="tablist">
		        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Basic Profile</a></li>
		        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Secondary Profile</a></li>
		      </ul>
		         <div class="tab-content">
				        <div role="tabpanel" class="tab-pane active" id="login">
				          <div class="modal-header">
				          <h4 class="imgspc">Bascic Profile Details</h4>
				        
				          </div>
				          <div class="modal-body baseDataSpc">
				         
				          </div>
				          <div class="modal-footer">
				          </div>
				        </div>

				        <div role="tabpanel" class="tab-pane" id="register">
				          <div class="modal-header">
				          <h4>Secondary Profile Details</h4>
				          </div>
				          <div class="modal-body secDataSpc">
				          </div>
				           <div class="modal-footer">
				          </div>
				        </div>
		         </div>
	    </div>
	  </div>
	</div>
</div>
<div class="container">
 
<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <!-- Nav tabs -->
        </button>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Basic Profile Details</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Secondary Profile Details</a></li>
                </ul>
      </div>
      <div class="modal-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                    	<div class="chat_appnd">
					         		 	
		        		</div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                    	<div class="chat_appnd_secondary">
					         		 	
		        		</div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
  
</div>