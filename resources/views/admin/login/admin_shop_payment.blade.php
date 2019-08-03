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
<script src="../js/admin_marrynow.js"></script>
</head>
<body>
		 <section class="pay_tabsss shps">
       <div class="container">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
          <div class="adjs_pay_wids">
              <div class="std_pynt_txt">
                Standard payment Rate
              </div>
				     <div class="form-group sp_paymt">
			  		    <input type="text" class="form-control shop_subit_pay shop_pmt">
				     </div>
				     <div class="submit_btn_pay_sp">
			  		    <input type="button" value="Submit" onclick="shop_admin_paymt()" class="btn_shop_pmt">
				     </div>
             @foreach($shop_paid as $data)
             <div class="list_shop_pay_claim" id="total_shop_paid{{$data->user_id}}">
                 <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 agsds_shop_pay">
                   <div class="list_val_pay_clm">
                      name :
                   </div>
                   <div class="list_val_pay_clm_val">
                      {{$data->user_name}}
                   </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 agsds_shop_pay">
                   <div class="list_val_pay_clm">
                      Matri Id :
                   </div>
                   <div class="list_val_pay_clm_val matri_shop_txt">
                      {{$data->user_matri_id}}
                   </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 agsds_shop_pay">
                   <div class="list_val_pay_clm">
                      Phone :
                   </div>
                   <div class="list_val_pay_clm_val">
                       {{$data->user_mobile}}
                   </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 agsds_shop_pay">
                   <div class="list_val_pay_clm">
                      Created Profile count :
                   </div>
                   <div class="list_val_pay_clm_val">
                      {{$data->claimed_amount/50}}
                   </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 agsds_shop_pay">
                   <div class="list_val_pay_clm">
                     Amount to pay :
                   </div>
                   <div class="list_val_pay_clm_val">
                       {{$data->claimed_amount}}
                   </div>
                 </div>
                 <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                     <div class="text-center">
                      <input type="button" value="paid" onclick="shop_amn_paid(this.id)" id="{{$data->user_id}}" class="btn_shop_pmt">
                      </div>
                  </div>
             </div>
             @endforeach
          </div>
			    </div>
          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <div class="adjs_pay_wids">
                  <div class="std_pynt_txt">
                    Target Per day
                  </div>
                 <div class="form-group sp_paymt">
                    <input type="text" class="form-control shop_subit_pay_day shop_pmt">
                 </div>
                 <div class="submit_btn_pay_sp">
                    <input type="button" value="Submit" onclick="shp_admn_pymt_day()" class="btn_shop_pmt">
                 </div>
               </div>
             </div>
             <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <div class="adjs_pay_wids">
                  <div class="std_pynt_txt">
                     Target Per Week
                  </div>
                 <div class="form-group sp_paymt">
                    <input type="text" class="form-control shop_subit_pay_wek shop_pmt">
                 </div>
                 <div class="submit_btn_pay_sp">
                    <input type="button" value="Submit" onclick="shp_admn_pymt_wek()" class="btn_shop_pmt">
                 </div>
               </div>
             </div>
             <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <div class="adjs_pay_wids">
                  <div class="std_pynt_txt">
                     Target Per Month
                  </div>
                 <div class="form-group sp_paymt">
                    <input type="text" class="form-control shop_subit_pay_mnth shop_pmt">
                 </div>
                 <div class="submit_btn_pay_sp">
                    <input type="button" value="Submit" onclick="shp_admn_pymt_mnth()" class="btn_shop_pmt">
                 </div>
               </div>
               </div>
		    </div>
	     </section>

<script type="text/javascript">
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
	    
</body>
</html>