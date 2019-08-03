

/*shop registration*/
    function shopRegistration(){
     var name =  $('.user_profName').val();
     var own_name =  $('.user_realName').val();
     var gender =  $("#userForm input[type='radio']:checked").val();
     var dob =  $('.user_dob').val();
     var shop_name =  $('.shop_name').val();
     var shop_type =  $('.shop_type').val();
     var shop_pan_no =  $('.shop_pan_no').val();
     var shop_address =  $('.shop_address').val();
     var email =  $('.user_email').val();
     var office_email =  $('.office_email').val();
     var phone =  $('.user_phone').val();
     var office_phone =  $('.office_phone').val();
     var pwd =  $('.user_pwd').val();
     var comment =  $('.commnt_me').val();
      var caste =  $('.user_castads').val();
     var subcaste =  $('.user_subcastads').val();
     var shop_door_no =  $('.shop_door').val();
     var shop_street =  $('.shop_street').val();
     var shop_website =  $('.shop_website').val();
     var shop_gst_no =  $('.shop_gst').val();
     var shop_bank_accnt =  $('.shop_bank_accnt').val();
     var shop_ifsc =  $('.shop_ifsc').val();
     var shop_size =  $('.shop_size').val();
     var shop_employees =  $('.shop_employee_cnt').val();
     var shop_service_prvd =  $('.shop_service_prvd').val();
     var shop_yr_estable =  $('.shop_yr_estable option:selected').val();
     var shop_state =  $('.shop_state option:selected').val();
     var shop_district =  $('.shop_reg_district option:selected').val();
     var shop_village =  $('.shop_reg_village option:selected').val();
     var shop_taluk =  $('.shop_reg_taluk option:selected').val();
     var shop_location =  $('.shop_location option:selected').val();
     var shop_term_cond =  $("#userForm input[type='checkbox']:checked").val();
     /*var shop_ward =  $('.shop_ward option:selected').val();*/
        if(gender==undefined){
           var gender="";
        }
        if(shop_term_cond==undefined){  
          var shop_term_cond="";
      }
     $.ajax({
         type: "post",
          url: "adminurl/admin_shop_reg",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
            "name":name,"own_name":own_name,"gender":gender,"dob":dob,"shop_name":shop_name,"shop_type":shop_type,"shop_pan_no":shop_pan_no,"shop_door_no":shop_door_no,"shop_address":shop_address,"shop_street":shop_street,"shop_location":shop_location,"shop_website":shop_website,"email":email,"shop_gst_no":shop_gst_no,"shop_bank_accnt":shop_bank_accnt,"shop_size":shop_size,"shop_employees":shop_employees,"shop_state":shop_state,"shop_district":shop_district,"shop_village":shop_village,"shop_taluk":shop_taluk,/*"shop_ward":shop_ward,*/"phone":phone,"pwd":pwd,"shop_comment":comment,"subcaste":subcaste,"caste":caste,"shop_ifsc":shop_ifsc,"office_email":office_email,"office_phone":office_phone,"shop_service_prvd":shop_service_prvd,"shop_yr_estable":shop_yr_estable,"shop_term_cond":shop_term_cond
            },
         cache: false,
         success: function(data){

               var y=data[0];
          if(data!="" && data!="form saved"){
              alertify.error(y);
        }
           else{
             alertify
                .alert("This profile was created successfully, click ok and continue login,", function(){
                window.location.href="home";
                });
                
              /*$('#myModals').modal('toggle')*/
          }
             
         }
       });
   }

      function mangerRegistration(){
        event.preventDefault();
      var name =  $('.user_profName').val();
      var own_name =  $('.user_realName').val();
      var gender =  $("#userForm input[type='radio']:checked").val();
      var dob =  $('.user_dob').val();
      var email =  $('.user_email').val();
      var phone =  $('.user_phone').val();
      var pwd =  $('.user_pwd').val();
      var subcaste =  $('.user_subcastadm').val();
      var caste =  $('.user_castadm').val();
      var comment =  $('.commnt_me').val();
      var manager_street =  $('.manager_street').val();
      var manager_acct_no =  $('.manager_acct_no').val();
      var shop_ifsc =  $('.shop_ifsc').val();
      var manager_state =  $('.manager_state option:selected').val();
      var manager_district =  $('.manager_district option:selected').val();
      var manager_village =  $('.manager_village option:selected').val();
      var manager_taluk =  $('.manager_taluk option:selected').val();
      var shop_location =  $('.shop_location option:selected').val();
      var shop_term_cond =  $("#userForm input[type='checkbox']:checked").val();
     /* var manager_ward =  $('.manager_ward option:selected').val();*/
      if(gender==undefined){
        var gender="";
      }
      if(shop_term_cond==undefined){  
          var shop_term_cond="";
      }
      $.ajax({
          type: "post",
           url: "adminurl/admin_manager_reg",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "name":name,"own_name":own_name,"gender":gender,"dob":dob,"manager_street":manager_street,"shop_ifsc":shop_ifsc,"manager_acct_no":manager_acct_no,"manager_state":manager_state,"manager_district":manager_district,"manager_village":manager_village,"manager_taluk":manager_taluk,"email":email,"phone":phone,"pwd":pwd,"comment":comment,"subcaste":subcaste,"shop_location":shop_location, "caste":caste,"shop_term_cond":shop_term_cond/*"manager_ward":manager_ward*/
             },
          cache: false,
          success: function(data){
            var x=data[0];
          if(data!="" && data!="form saved"){
              alertify.error(x);
        }

           else{
          alertify
                .alert("This profile was created successfully, click ok and continue login,", function(){
               window.location.href="home";
                });
             /* $('#manager_pic_upld').modal('toggle');*/
              
          }
           }
        });
      } 


      function shop_admin_paymt(){
        event.preventDefault();
        var admn_shop_payment =  $('.shop_subit_pay').val();
        console.log(admn_shop_payment);
      $.ajax({
          type: "post",
           url: "adminurl/admin_shop_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admn_shop_payment":admn_shop_payment,"type":"shop_paymt"
             },
          cache: false,
          success: function(data){

              alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });
           }
        });
      }
      function shp_admn_pymt_day(){
        event.preventDefault();
        var admn_shop_payment_day =  $('.shop_subit_pay_day').val();
        console.log(admn_shop_payment_day);
      $.ajax({
          type: "post",
           url: "adminurl/admin_shop_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admn_shop_payment_day":admn_shop_payment_day,"type":"day"
             },
          cache: false,
          success: function(data){

              alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });
           }
        });
      }
      function shp_admn_pymt_wek(){
        event.preventDefault();
        var admn_shop_payment_wek =  $('.shop_subit_pay_wek').val();
        console.log(admn_shop_payment_wek);
      $.ajax({
          type: "post",
           url: "adminurl/admin_shop_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admn_shop_payment_wek":admn_shop_payment_wek,"type":"week"
             },
          cache: false,
          success: function(data){

              alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });
           }
        });
      }
      function shp_admn_pymt_mnth(){
        event.preventDefault();
        var admn_shop_payment_mth =  $('.shop_subit_pay_mnth').val();
        console.log(admn_shop_payment_mth);
      $.ajax({
          type: "post",
           url: "adminurl/admin_shop_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admn_shop_payment_mth":admn_shop_payment_mth,"type":"month"
             },
          cache: false,
          success: function(data){

              alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });
           }
        });
      }

      function manager_admin_paymt(){
        event.preventDefault();
        var admin_manager_paymt =  $('.manager_subit_pay').val();
        console.log(admin_manager_paymt);
      $.ajax({
          type: "post",
           url: "adminurl/admin_manager_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admin_manager_paymt":admin_manager_paymt,"type":"manager_target"
             },
          cache: false,
          success: function(data){

             alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });

           }
        });
      }
      function manger_admn_pymt_day(){
        event.preventDefault();
        var admin_manager_paymt_day =  $('.manager_subit_pay_day').val();
        console.log(admin_manager_paymt_day);
      $.ajax({
          type: "post",
           url: "adminurl/admin_manager_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admin_manager_paymt_day":admin_manager_paymt_day,"type":"day"
             },
          cache: false,
          success: function(data){

             alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });

           }
        });
      }
      function manger_admn_pymt_wek(){
        event.preventDefault();
        var admin_manager_paymt_wek =  $('.manager_subit_pay_wek').val();
        console.log(admin_manager_paymt_wek);
      $.ajax({
          type: "post",
           url: "adminurl/admin_manager_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admin_manager_paymt_wek":admin_manager_paymt_wek,"type":"week"
             },
          cache: false,
          success: function(data){

             alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });

           }
        });
      }
      function manger_admn_pymt_mnth(){
        event.preventDefault();
        var admin_manager_paymt_mnth =  $('.manager_subit_pay_mnth').val();
        console.log(admin_manager_paymt_mnth);
      $.ajax({
          type: "post",
           url: "adminurl/admin_manager_pay_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "admin_manager_paymt_mnth":admin_manager_paymt_mnth,"type":"month"
             },
          cache: false,
          success: function(data){

             alertify
                .alert("updated successfully", function(){
                 window.location.href = "home";
                });

           }
        });
      }

      function shop_amn_paid(cid){
      $.ajax({
          type: "post",
           url: "adminurl/admin_shop_paid_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "cid":cid
             },
          cache: false,
          success: function(data){

             /* $('#total_shop_paid'+cid).*/


              $( '#total_shop_paid'+cid ).delay(2000).remove()
              
              }
                   });
      }

      function manager_amn_paid(cid){

      $.ajax({
          type: "post",
           url: "adminurl/admin_managr_paid_rld",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "cid":cid
             },
          cache: false,
          success: function(data){

            $( '#total_shop_paid'+cid ).delay(2000).remove()

           }
        });
      }


   /*function getward(){
        $('.wardvals').remove();
        var selectedvillage =  $('.shop_village_sh').val();

         $.ajax({
         type: "post",
          url: "get_ward",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              "selectedvillage":selectedvillage
            },
         cache: false,
         success: function(data){
          for(var i=0; i<data.length; i++){
          $('.wardData').append('<option class="wardvals" value="'+data[i].Habitation_code+'" >'+data[i].Habitation_code+'</option>');
          }
          }
       });
     }*/
