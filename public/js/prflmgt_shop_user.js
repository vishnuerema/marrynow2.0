/*profile_management registration*/
      function profilemanageReg(){
      var profCreatedBy =  $('.user_profCreatedBy').val();
      var name =  $('.user_profName').val();
      var rel_name =  $('.user_realName').val();
      var gender =  $("#profmgntForm input[type='radio']:checked").val();
      var dob =  $('.user_dob').val();
      var maritalStatus =  $('.user_maritalStatus').val();
       var caste =  $('.user_casts option:selected').val();
      var subcaste =  $('.user_subcasts option:selected').val();
      var country =  $('.user_country').val();
      var phone =  $('.user_phone').val();
      var email =  $('.user_email').val();
      var pwd =  $('.user_pwd').val();
      if(gender==undefined){
        var gender="";
      }
      /*if(profCreatedBy==""){  
        alertify.error('profile created is required');
        return false;
      }
      else if(name==""){
        alertify.error('Name is required');
        return false;
      } 
      else if(gender==""){
        alertify.error('Gender  is required');
        return false;
      } 
      else if(dob==""){
        alertify.error('Date Of Birth  is required');
        return false;
      } 
      else if(maritalStatus==""){
        alertify.error('Marital Status  is required');
        return false;
      } 
      else if(castes==""){
        alertify.error('caste is required');
        return false;
      }
       else if(subcastes==""){
        alertify.error('Subcaste is required');
        return false;
      } 
      else if(country==""){
        alertify.error('Country Name is required');
        return false;
      } 
      else if(phone==""){
        alertify.error('Phone Number is required');
        return false;
      } 
      else if(email==""){
        alertify.error('Email is required');
        return false;
      }
       else if(pwd==""){
        alertify.error('Password is required');
        return false;
      }
      else {*/

      $.ajax({
           type:"post",
           url: "profile_management_ajx",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "profCreatedBy":profCreatedBy, "name":name, "rel_name":rel_name, "gender":gender, "dob":dob, "maritalStatus":maritalStatus, "caste":caste, "subcaste":subcaste, "country":country, "email":email, "phone":phone, "pwd":pwd
             },
          cache: false,
          success: function(data){
                   var k=data[0];
          if(data!="" && data!="form saved"){
              alertify.error(k);
        }
           else{
          
              alertify
                .alert("This profile was created successfully, click ok and continue login,", function(){
                 window.location.href = "profile_management";
                });
              
          }
           }

          });
        /*}*/
      }

    /*shop register shop registration*/
      function shop_reg_Registration(){
     var profCreatedBy_sh =  $('.user_profCreatedBy_sh').val();
     var name =  $('.user_profName_sh').val();
     var own_name =  $('.we_realName').val();
     var gender =  $("#userForm input[type='radio']:checked").val();
     var dob =  $('.user_dob_sh').val();
     var shop_name =  $('.shop_name_sh').val();
     var shop_type =  $('.shop_type_sh').val();
     var shop_pan_no =  $('.shop_pan_no_sh').val();
      var caste =  $('.user_castshs option:selected').val();
      var subcaste =  $('.user_subcaste option:selected').val();
      var country =  $('.user_country').val();
     var shop_address =  $('.shop_address_sh').val();
     var email =  $('.user_email_sh').val();
      var office_email =  $('.office_email').val();
     var phone =  $('.user_phone_sh').val();
     var office_phone =  $('.office_phone').val();
     var pwd =  $('.user_pwd_sh').val();
     var comment =  $('.commnt_me_sh').val();
     var shop_door_no =  $('.shop_door_sh').val();
     var shop_street =  $('.shop_street_sh').val();
     var shop_location =  $('.shop_location_sh option:selected').val();
     var shop_website =  $('.shop_website_sh').val();
     var shop_gst_no =  $('.shop_gst_sh').val();
     var shop_bank_accnt =  $('.shop_bank_accnt_sh').val();
     var shop_ifsc =  $('.shop_ifsc').val();
     var shop_size =  $('.shop_size_sh').val();
     var shop_employees =  $('.shop_employee_cnt_sh').val();
     var shop_service_prvd =  $('.shop_service_prvd').val();
     var shop_yr_estable =  $('.shop_yr_estable option:selected').val();
     var shop_state =  $('.shop_state_sh option:selected').val();
     var shop_district =  $('.shop_district_sh option:selected').val();
     var shop_village =  $('.shop_village_sh option:selected').val();
     var shop_taluk =  $('.shop_taluk_sh option:selected').val();
     var shop_term_cond =  $("#userForm input[type='checkbox']:checked").val();
     /*var shop_ward =  $('.shop_ward_sh option:selected').val();*/
        if(gender==undefined){
           var gender="";
        }
         if(shop_term_cond==undefined){  
          var shop_term_cond="";
      }
     $.ajax({
         type: "post",
          url: "shop_usr_shop_registration_ajx",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
            "profCreatedBy_sh":profCreatedBy_sh,"name":name,"own_name":own_name,"gender":gender,"dob":dob,"shop_name":shop_name,"shop_type":shop_type,"shop_pan_no":shop_pan_no,"shop_door_no":shop_door_no,"shop_address":shop_address,"shop_street":shop_street,"shop_location":shop_location,"shop_website":shop_website,"email":email,"shop_gst_no":shop_gst_no,"shop_bank_accnt":shop_bank_accnt,"shop_size":shop_size,"shop_employees":shop_employees,"shop_state":shop_state,"shop_district":shop_district,"shop_village":shop_village,"shop_taluk":shop_taluk,/*"shop_ward":shop_ward,*/"phone":phone,"pwd":pwd,"shop_comment":comment,"caste":caste, "subcaste":subcaste,"shop_ifsc":shop_ifsc,"office_email":office_email,"office_phone":office_phone,"shop_service_prvd":shop_service_prvd,"shop_yr_estable":shop_yr_estable,"shop_term_cond":shop_term_cond
            },
         cache: false,
         success: function(data){

               var k=data[0];
          if(data!="" && data!="form saved"){
              alertify.error(k);
        }
           else{
          
             alertify
                .alert("This profile was created successfully, click ok and continue login,", function(){
                window.location.href = "profile_management";
                });
              
          }
             
         }
       });
     }

  /*manager_management registration*/
      function managermanageReg(){
      var profCreatedBy =  $('.user_profCreatedBy_mg').val();
      var name =  $('.user_profName_mg').val();
      var prof_rel_name =  $('.my_realName').val();
      var gender =  $("#profmgntForm input[type='radio']:checked").val();
      var dob =  $('.user_dob_mg').val();
      var maritalStatus =  $('.user_maritalStatus_mg option:selected').val();
      var caste =  $('.user_cast_mg option:selected').val();
      var subcaste =  $('.user_subcast_mg option:selected').val();
      var country =  $('.user_country_mg option:selected').val();
      var phone =  $('.user_phone_mg').val();
      var email =  $('.user_email_mg').val();
      var pwd =  $('.user_pwd_mg').val();
      if(gender==undefined){
        var gender="";
      }
      if(profCreatedBy==""){  
        alertify.error('profile created is required');
        return false;
      }
      else if(name==""){
        alertify.error('User Name is required');
        return false;
      } 
       else if(pwd==""){
        alertify.error('Password is required');
        return false;
      } 
      else if(prof_rel_name==""){
        alertify.error('Your name is required');
        return false;
      }
      else if(gender==""){
        alertify.error('Gender  is required');
        return false;
      } 
      else if(dob==""){
        alertify.error('Date Of Birth  is required');
        return false;
      } 
      else if(maritalStatus==""){
        alertify.error('Marital Status  is required');
        return false;
      } 
      else if(caste==""){
        alertify.error('caste is required');
        return false;
      }
       else if(subcaste==""){
        alertify.error('Subcaste is required');
        return false;
      } 
      else if(country==""){
        alertify.error('Country Name is required');
        return false;
      } 
      else if(phone==""){
        alertify.error('Phone Number is required');
        return false;
      } 
      else if(email==""){
        alertify.error('Email is required');
        return false;
      }
      else {

      $.ajax({
           type:"post",
           url: "manager_management_ajx",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
              "profCreatedBy":profCreatedBy, "name":name, "prof_rel_name":prof_rel_name, "gender":gender, "dob":dob, "maritalStatus":maritalStatus, "caste":caste, "subcaste":subcaste, "country":country, "email":email, "phone":phone, "pwd":pwd,
             },
          cache: false,
          success: function(data){
            if(data=='success'){
               alertify
                .alert("This profile was created successfully, click ok and continue login,", function(){
                window.location.href = "manager_management";
                });
             
            }
            else if(data.length>0){
               for(a=0; a<data.length; a++){
                alertify.error(data[a]);
                }
              }
             }

              });
        }
      }


     /*manager shop registration*/
      function managershopReg(){
      var profCreatedBy =  $('.user_profCreatedBy').val();
      var name =  $('.user_sName').val();
      var own_name =  $('.user_realName').val();
     var gender =  $("#usForm input[type='radio']:checked").val();
     var dob =  $('.user_sdob').val();
     var shop_name =  $('.shop_sname').val();
     var shop_type =  $('.shop_stype').val();
     var shop_pan_no =  $('.shop_span_no').val();
     var shop_address =  $('.shop_saddress').val();
     var email =  $('.user_semail').val();
     var phone =  $('.user_sphone').val();
     var pwd =  $('.user_spwd').val();
     var comment =  $('.commnt_sme').val();
     var shop_door_no =  $('.shop_sdoor').val();
     var shop_street =  $('.shop_sstreet').val();
     var shop_location =  $('.shop_slocation option:selected').val();
     var shop_website =  $('.shop_swebsite').val();
     var shop_gst_no =  $('.shop_sgst').val();
     var caste =  $('.user_castmgs option:selected').val();
      var subcaste =  $('.user_subcastn option:selected').val();
     var shop_bank_accnt =  $('.shop_sbank_accnt').val();
     var shop_ifsc =  $('.shop_ifsc').val();
     var shop_size =  $('.shop_ssize').val();
     var shop_employees =  $('.shop_semployee_cnt').val();
     var shop_state =  $('.shop_sstate option:selected').val();
     var shop_district =  $('.shop_district_sh option:selected').val();
     var shop_village =  $('.shop_village_sh option:selected').val();
     var shop_taluk =  $('.shop_taluk_sh option:selected').val();
     var shop_term_cond =  $("#usForm input[type='checkbox']:checked").val();
     /*var shop_ward =  $('.shop_sward').val();*/
        if(gender==undefined){
           var gender="";
        }
         if(shop_term_cond==undefined){  
          var shop_term_cond="";
      }
     $.ajax({
         type: "post",
          url: "shopmanager_management_ajx",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
            "profCreatedBy":profCreatedBy,"name":name,"own_name":own_name,"gender":gender,"dob":dob,"shop_name":shop_name,"shop_type":shop_type,"shop_pan_no":shop_pan_no,"shop_door_no":shop_door_no,"shop_address":shop_address,"shop_street":shop_street,"shop_location":shop_location,"shop_website":shop_website,"email":email,"shop_gst_no":shop_gst_no,"shop_bank_accnt":shop_bank_accnt,"shop_size":shop_size,"shop_employees":shop_employees,"shop_state":shop_state,"shop_district":shop_district,"shop_ifsc":shop_ifsc,"shop_village":shop_village,"shop_taluk":shop_taluk,/*"shop_ward":shop_ward,*/"phone":phone,"pwd":pwd,"shop_comment":comment,"caste":caste, "subcaste":subcaste,"shop_term_cond":shop_term_cond
            },
         cache: false,
         success: function(data){
               var z=data[0];
          if(data!="" && data!="form saved"){
              alertify.error(z);
        }
           else{
              alertify
                .alert("This profile was created successfully, click ok and continue login,", function(){
                window.location.href = "manager_management";
                });
              /*$('#myModals').modal('toggle')*/
              
          }
         }
       });
     }

     function created_shoper_shop(){
        var profCreatedBy_cs =  $('.user_profCreatedBy_sh').val();
        $('.common_shop_creted').remove();
         $.ajax({
         type: "post",
          url: "created_profile_shoper_ajx",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              
              "profCreatedBy_cs":profCreatedBy_cs

            },
         cache: false,
         success: function(data){

              console.log(data);
              for(var j=0; j<data.length; j++){
                $('.mg_profcreated_appnd').append('<div class="common_shop_creted"><div class="row"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">User name</p><p class="User_name p_name">'+data[j].user_name+'</p></div><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">user matri id</p><p class="User_name gender">'+data[j].user_matri_id+'</p></div><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">User Gender</p><p class="User_name p_Mobile">'+data[j].user_gender+'</p></div><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">Mobile</p><p class="User_name p_Mobile">'+data[j].user_mobile+'</p></div></div></div>')

                }
             
         }
       });
     }


     function created_manger_shop(){

        var profCreatedBy_cs =  $('.user_profCreatedBy').val();
        $('.common_shop_creted').remove();
         $.ajax({
         type: "post",
          url: "created_profile_ajx",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {
              
              "profCreatedBy_cs":profCreatedBy_cs

            },
         cache: false,
         success: function(data){

              /*console.log(data);*/
              for(var i=0; i<data.length; i++){
                $('.mg_profcreated_appnd').append('<div class="common_shop_creted"><div class="row"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">User name</p><p class="User_name p_name">'+data[i].user_name+'</p></div><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">user matri id</p><p class="User_name gender">'+data[i].user_matri_id+'</p></div><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">User Gender</p><p class="User_name p_Mobile">'+data[i].user_gender+'</p></div><div class="col-md-3 col-sm-3 col-lg-3 col-xs-12"><p class="uusname">Mobile</p><p class="User_name p_Mobile">'+data[i].user_mobile+'</p></div></div></div>')

                }
             
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
        


function shop_pay_claim(){
var pay =$('.claimedprofcnt').text();
 $.ajax({
    type: "post",
    url: "shopclaimpay_ajx",
     headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      "pay":pay
       },
    cache: false,
    success: function(data){
      if(data=="0"){
      alertify.error('You have to create a minimum of 100 profiles')
      }
      else{
    window.location.href="profile_management";
  }
    }
  });
}


function manager_pay_claim(){
var pay =$('.claimedprofcnt').text();
 $.ajax({
    type: "post",
    url:"managerclaimpay_ajx",
     headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      "pay":pay
       },
    cache: false,
    success: function(data){
      if(data=="0"){
      alertify.error('You have to create a minimum of 100 profiles')
      }
      else{
    window.location.href="manager_management";
  }
    }
  });
}


/*shopp admin caste */
    function caste_retrives(){
    $('.castevals').remove();
        var selectedcaste=$('.user_casts option:selected').val();
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
/*welcome caste */
/*shopp admin caste */
    function caste_retriveshs(){
    $('.castevals').remove();
        var selectedcaste=$('.user_castshs option:selected').val();
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
/*welcome caste */



/*manager admin caste */
    function caste_retrivemn(){
    $('.castevals').remove();
        var selectedcaste=$('.user_cast_mg option:selected').val();
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
/*welcome caste */

/*manager admin caste */
    function caste_retrivemgs(){
    $('.castevals').remove();
        var selectedcaste=$('.user_castmgs option:selected').val();
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
/*welcome caste */