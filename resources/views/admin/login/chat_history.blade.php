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
				@foreach($chat_history as $data)
	              <div class="container">
	              	<div class="chat_history_commn">  
	                   <div style="text-align: center;"  class="chat_histry1">
	                   	<div style="text-align: center; color: #214475; font-weight: 600;" class="labl_chat">matri id</div>
	                   	<div class="value_chat">1234</div>
	                   </div>
	                    <div style="text-align: center;"  class="chat_histry2">
	                   	<div style="text-align: center; color: #214475; font-weight: 600;" class="labl_chat">matri id</div>
	                   	<div class="value_chat">1234</div>
	                   </div>
	                    <div style="text-align: center;" class="chat_histry3">
	                   	<div style="text-align: center; color: #214475; font-weight: 600;" class="labl_chat">matri id</div>
	                   	<div class="value_chat">1234</div>
	                   </div>
	                   <div style="text-align: center;"  class="chat_histry5">
	                   	<div style="text-align: center; color: #214475; font-weight: 600;" class="labl_chat">matri id</div>
	                   	<div class="value_chat">1234</div>
	                   </div>
	                   <div class="chat_histry4 chat_view">
	                  	 <div onclick="chat_viewProf(this.id)" id="{{$data->user_id}}" class="class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center; color: #214475; font-weight: 600;"><div style="text-align: center; color: #214475; font-weight: 600;" class="labl_chat">View</div><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i>
	                  	 </div>
			          </div>
	              	   <!-- Modal -->
                    <!-- <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div> -->
	              </div>
		    	</div>   
			@endforeach
	          </section>
</body>
</html>