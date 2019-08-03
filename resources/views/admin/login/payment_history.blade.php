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
                  <nav class="pay_nav">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-links active" id="nav-Silver-tabs" data-toggle="tab" href="#nav-Silver" role="tab" aria-controls="nav-Silver" aria-selected="true">Silver</a>
                      <a class="nav-item nav-links" id="nav-Gold-tabs" data-toggle="tab" href="#nav-Gold" role="tab" aria-controls="nav-Gold" aria-selected="false">Gold</a>
                      <a class="nav-item nav-links" id="nav-Platinum-tabs" data-toggle="tab" href="#nav-Platinum" role="tab" aria-controls="nav-Platinum" aria-selected="false">Platinum</a>
                      <a class="nav-item nav-links" id="nav-Emerald-tabs" data-toggle="tab" href="#nav-Emerald" role="tab" aria-controls="nav-Emerald" aria-selected="false">Emerald</a>
                      <a class="nav-item nav-links" id="nav-Sapphire-tabs" data-toggle="tab" href="#nav-Sapphire" role="tab" aria-controls="nav-Sapphire" aria-selected="false">Sapphire</a>
                      <a class="nav-item nav-links" id="nav-Pearl-tabs" data-toggle="tab" href="#nav-Pearl" role="tab" aria-controls="nav-Pearl" aria-selected="false">Pearl</a>
                      <a class="nav-item nav-links" id="nav-Rubby-tabs" data-toggle="tab" href="#nav-Rubby" role="tab" aria-controls="nav-Rubby" aria-selected="false">Rubby</a>
                      <a class="nav-item nav-links" id="nav-Alexandrite-tabs" data-toggle="tab" href="#nav-Alexandrite" role="tab" aria-controls="nav-Alexandrite" aria-selected="false">Alexandrite</a>
                      <a class="nav-item nav-links" id="nav-Opal-tabs" data-toggle="tab" href="#nav-Opal" role="tab" aria-controls="nav-Opal" aria-selected="false">Opal</a>
                      <a class="nav-item nav-links" id="nav-Garnet-tabs" data-toggle="tab" href="#nav-Garnet" role="tab" aria-controls="nav-Garnet" aria-selected="false">Garnet</a>
                      <a class="nav-item nav-links" id="nav-diamond-tabs" data-toggle="tab" href="#nav-diamond" role="tab" aria-controls="nav-diamond" aria-selected="false">diamond</a>
                    </div>
                  </nav>
                  <div class="tab-content bac_wit py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane show active" id="nav-Silver" role="tabpanel" aria-labelledby="nav-Silver-tabs">
                     <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_silver as $data)
                            <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Gold" role="tabpanel" aria-labelledby="nav-Gold-tabs">
                      <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_gold as $data)
                            <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Platinum" role="tabpanel" aria-labelledby="nav-Platinum-tabs">
                     <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_platinum as $data)
                             <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Emerald" role="tabpanel" aria-labelledby="nav-Emerald-tabs">
                     <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_emerald as $data)
                             <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Sapphire" role="tabpanel" aria-labelledby="nav-Sapphire-tabs">
                     <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_sapphire as $data)
                             <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Pearl" role="tabpanel" aria-labelledby="nav-Pearl-tabs">
                     <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_pearl as $data)
                            <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Rubby" role="tabpanel" aria-labelledby="nav-Rubby-tabs">
                     <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_rubby as $data)
                            <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Alexandrite" role="tabpanel" aria-labelledby="nav-Alexandrite-tabs">
                      <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach($pay_history_alexn as $data)
                             <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                     <div class="tab-pane fade" id="nav-Opal" role="tabpanel" aria-labelledby="nav-Opal-tabs">
                      <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_opal as $data)
                             <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Garnet" role="tabpanel" aria-labelledby="nav-Garnet-tabs">
                      <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach($pay_history_garnet as $data)
                             <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div> 
                    <div class="tab-pane fade" id="nav-diamond" role="tabpanel" aria-labelledby="nav-diamond-tabs">
                      <div class="container">
                        <table class="table table-bordered admin_pay_table">
                          <thead class="admin_pay_head">
                            <tr class="admin_pay_tr">
                              <th class="admin_pay_th">User Id</th>
                              <th class="admin_pay_th">Matri Id</th>
                              <th class="admin_pay_th">Name</th>
                              <th class="admin_pay_th">Gender</th>
                              <th class="admin_pay_th">Alliance For</th>
                              <th class="admin_pay_th">Plan</th>
                              <th class="admin_pay_th">Amount</th>
                              <th class="admin_pay_th">Pay Ref Id</th>
                              <th class="admin_pay_th">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pay_history_diamond as $data)
                             <tr class="admin_pay_tr1">
                              <td class="admin_pay_td">{{$data->profile_name}}</td>
                              <td class="admin_pay_td">{{$data->user_matri_id}}</td>
                              <td class="admin_pay_td">{{$data->user_name}}</td>
                              <td class="admin_pay_td">{{$data->user_gender}}</td>
                              <td class="admin_pay_td">{{$data->profile_created_by}}</td>
                              <td class="admin_pay_td">{{$data->payment_plan}}</td>
                              <td class="admin_pay_td">{{$data->payment_amount  }}</td>
                              <td class="admin_pay_td">{{$data->payment_resp_id}}</td>
                              <td class="admin_pay_td class="fa fa-eye" data-toggle="modal" data-target="#basicExampleModal" style="text-align: center;"><i class="fas fa-eye" data-toggle="modal" data-target="#basicExampleModal"></i></td>
                            </tr>
                             @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                             <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Basic Profile</a></li>
                              <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Secondary Profile</a></li>
                            </ul>
                          </div>
                          <div class="modal-body">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                              <div class="modal-header">
                              <h4 class="imgspc">Bascic Profile Details</h4>
                            
                              </div>
                              <div class="modal-body baseDataSpc">
                             
                              </div>
                              <div class="modal-footer">
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="register">
                              <div class="modal-header">
                              <h4>Secondary Profile Details</h4>
                              </div>
                              <div class="modal-body secDataSpc">
                              </div>
                               <div class="modal-footer">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </section>
</body>
</html>