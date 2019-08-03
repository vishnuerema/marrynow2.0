// function removeImg(){
// 	$("#overlay").remove();
// }//end of onload

      function userRegistration(event){
      event.preventDefault();
      var profCreatedBy = $('.user_profCreatedBy').val();
      var name =  $('.user_profName').val();
      var dob =  $('.user_dob').val();
      var gender =  $("#userForm input[type='radio']:checked").val();
      var email =  $('.user_email').val();
      var maritalStatus =  $('.user_maritalStatus').val();
      var phone =  $('.user_phone').val();
      var country =  $('.user_country').val();
      var pwd =  $('.user_pwd').val();
      var subcaste =  $('.user_subcast').val();
      var caste =  $('.user_cast').val();
    /*  alert(caste);*/
      var gend=$("input[name='gender']:checked").val()

      if(profCreatedBy==""){
          alertify.error('please select one in Profilee Created by');
          return false;
      }

      if(name==""){
      alertify.error('please fill the name field');
         return false;
      }
      
      if(pwd==""){
      alertify.error('please Enter a password');
      return false;
      }

      if(gend==undefined){
          alertify.error('please Select a Gender');
          return false;
      }
      
      if(dob==""){
      alertify.error('please fill the dob field');
          return false;
      }

      if(maritalStatus==""){
      alertify.error('please Select Marital Status');
          return false;
      }

      if(caste==""){
          alertify.error('please fill the caste field');
          return false;
      } 
      if(subcaste==""){
          alertify.error('please fill the subcaste field');
          return false;
      } 
      if(country==""){
      alertify.error('please select a country');
          return false;
      }
      if(phone==""){
          alertify.error('please Enter your phone number');
          return false;
      }

      if(phone.length > 10){
          alertify.error('The phone number has more than 10 digits');
          return false;
      }
      if(email==""){
              alertify.error('please Fillout the Email field');
          return false;
      }
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (reg.test(email) == false){
      alertify.warning('The email syntax should be Eg: example@example.com');
      return false;
      }
      $.ajax({
          type: "post",
          url: "welcome",
          data: {
              "profCreatedBy":profCreatedBy,"name":name,"dob":dob,"gender":gender,"email":email,"maritalStatus":maritalStatus,"phone":phone, "country":country,"pwd":pwd, "subcaste":subcaste, "caste":caste
             },
          cache: false,
          success: function(data){
            
           if(data.length>0){
             for(a=0; a<data.length; a++){
              alertify.error(data[a]);
              }
           }
           else{
              window.location.href = "register2";
           }

             //
          }
        });
      }// end of user registration ajax call step 1

/*****vishnue login ******/
function mrynow_login(eve){
   eve.preventDefault();
  var mry_login_mail = $('.mry_logmail_val').val();
  var mry_login_pass = $('.mry_logpass_val').val();
  $.ajax({
    type: "post",
    url: "url/login",
    data: {
        "mry_login_mail":mry_login_mail, "mry_login_pass":mry_login_pass
       },
    cache: false,
    success: function(data){
      console.log(data.role)
   if(data.role==1){
      window.location.href="admin/login/home";
     }else if(data.role==2){
      window.location.href="shopUsers/profile_management";
     }else if(data.role==0){
      window.location.href="register2";
     }else if(data.role==3){
      window.location.href="shopManager/manager_management";
     } else if(data.role==5){
      window.location.href="superAdmin/home";
     }else if(data.role==4){
      window.location.href="superAdmin/subBranchUsers/home";
     } else if(data.role==6){
      window.location.href="accounts/home";
     }else{
       alert("failiure")
     }
    }
  });
}
/*****vishnue login ******/
/*****vishnue logout ******/
function logout(){

   $.ajax({
    type: "post",
    url: "url/logout",
    data: {
        
       },
    cache: false,
    success: function(data){
      window.location = "logout_app";
    }
  });
}

/*****vishnue logout ******/
/*****vishnue search gender using ******/
function searc_gen(){
  var gender=$('.gennddr option:selected').val();
  $.ajax({
    type: "post",
    url: "main_page_search",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "gender":gender
       },
    cache: false,
    success: function(data){
      $('section.scroll_slide').css('display', 'block');
    
       for(var i=0; i < data.length; i++){
        if(data[i].user_matri_id=="" && data[i].profile_image=="" && data[i].profile_user_country=="" ){
        }
        else if(data[i].profile_image==""){
            $(".main_serch_carousl").append('<li class="scroller_li"><p class="id_img">'+data[i].user_matri_id+'</p><img src="imgs/No_Image_Available.jpg" class="img-fluid ht_img_carsl"><p class="place_img">'+data[i].profile_user_country+'</p></li>');
        }
        else{
       $(".main_serch_carousl").append('<li class="scroller_li"><p class="id_img">'+data[i].user_matri_id+'</p><img src="imgs/'+data[i].profile_image+'" class="img-fluid ht_img_carsl"><p class="place_img">'+data[i].profile_user_country+'</p></li>');
     }
    }
    }
  });
}


/*admin search phone*/

/*****vishnue secondary registration******/
function submit_secondry_reg(){
    /*event.preventDefault();*/
  var edit_secprof_flag = $(".edit_secreg").text();
  var sec_weight = $('.secondry_weight option:selected').val();
  var sec_height = $('.secondry_height option:selected').val();
 /* var sec_bodytype = $(".secondry_bodytype input[type='radio']:checked").val();*/
  var sec_bodytype = $("input:radio.secondry_bodytype:checked").val();
  var sec_Complexion = $(".secondry_Complexion input[type='radio']:checked").val();
  var sec_education = $('.secondry_education').val();
  var sec_occupation = $('.secondry_occupation').val();
  var sec_goal = $('.secondry_goal').val();
  /*var sec_lang = $('.secondry_lang option:selected').val();*/
  var sec_native = $('.secondry_native').val();
  var sec_fathr_occu = $('.secondry_fathr_occu').val();
  var sec_mothr_occu = $('.secondry_mothr_occu').val();
  var sec_brothers = $('.secondry_brothers').val();
  var sec_bro_marri = $('.secondry_bro_marri').val();
  var sec_sis = $('.secondry_sis').val();
  var sec_sis_marri = $('.secondry_sis_marri').val();
  var sec_abt_family = $('.secondry_abt_family').val();
  var sec_eat_habt = $(".secondry_eat_habt input[type='radio']:checked").val();
  var sec_drnk_habt = $(".secondry_drnk_habt input[type='radio']:checked").val();
  var sec_smok_habt = $(".secondry_smok_habt input[type='radio']:checked").val();
  var sec_interest = $('.secondry_interest option:selected').val();
  var sec_hobbis = $('.secondry_hobbis option:selected').val();
  var sec_music = $('.secondry_music option:selected').val();
  var sec_sport = $('.secondry_sport option:selected').val();
  var sec_food = $('.secondry_food option:selected').val();
  var sec_martial = $('.secondry_martial option:selected').val();
  
 var langKnown =[];  /* /array/*/
 $(".lang_db_save").each(function() {  /*get all value in jquery*/
    langKnown.push($(this).val())    /* push array to value*/
});
 var languagesKnown = langKnown.join(","); /*array convert to string*/

var interests =[];
 $(".interest_db_save").each(function() {
    interests.push($(this).val())
});
 var sec_interest = interests.join(",");

 var hobbies =[];
 $(".hobbies_db_save").each(function() {
    hobbies.push($(this).val())
});
 var sec_hobbis = hobbies.join(",");

 var sports =[];
 $(".sports_db_save").each(function() {
    sports.push($(this).val())
});
 var sec_sport = sports.join(",");

var music =[];
 $(".music_db_save").each(function() {
    music.push($(this).val())
});
 var sec_music = music.join(",");
  
var food =[];
 $(".food_db_save").each(function() {
    food.push($(this).val())
});
 var sec_food = food.join(",");

 var martial =[];
 $(".martial_db_save").each(function() {
    martial.push($(this).val())
});
 var sec_martial = martial.join(",");

$.ajax({
    type: "post",
    url: "secondry_registration/submit",
    data: {
        "sec_weight":sec_weight,"edit_secprof_flag":edit_secprof_flag, "sec_height":sec_height, "sec_bodytype":sec_bodytype, "sec_Complexion":sec_Complexion,"sec_education":sec_education,"sec_occupation":sec_occupation,"languagesKnown":languagesKnown,"sec_native":sec_native,"sec_fathr_occu":sec_fathr_occu,"sec_mothr_occu":sec_mothr_occu, "sec_brothers":sec_brothers,"sec_bro_marri":sec_bro_marri, "sec_sis":sec_sis,"sec_sis_marri":sec_sis_marri,"sec_abt_family":sec_abt_family,"sec_eat_habt":sec_eat_habt,"sec_drnk_habt":sec_drnk_habt,"sec_smok_habt":sec_smok_habt,"sec_interest":sec_interest,"sec_hobbis":sec_hobbis, "sec_music":sec_music, "sec_sport":sec_sport,"sec_food":sec_food,"sec_martial":sec_martial,"sec_goal":sec_goal
       },
    cache: false,
    success: function(data){
    //alert(data)
    window.location.href = "payment";
    }
  });

}

/*****secondary registration******/

function SubmitMatriProfile(){

var edit_prof_flag = $(".edit_reg2").text();
var gender = $("input:radio.reg_prof_gender:checked").val();
var marital_status = $('.reg_prof_marital').val();
if(marital_status==undefined){
var marital_status = $('.prof_maritalstatus').text();
}
var email = $('.prof_email').val();
var prof_age = $('.prof_age').val();
var name = $('.prof_name').val();
var phyStat = $("input:radio.prof_phy_status:checked").val();
var country = $('.prof_resid_country option:selected').val();
if(country==undefined){
var country = $('.prof_resid_country').text();
}
var state = $('.prof_resid_state option:selected').val();
var citizenship = $('.prof_citizenship option:selected').val();

var guardname = $('.prof_guardname').val();
var district = $('.prof_resid_district option:selected').val();
var village = $('.prof_resid_village option:selected').val();
var taluk = $('.prof_resid_taluk option:selected').val();
var address1 = $('.prof_address1').val();
var address2 = $('.prof_address2').val();
var locality = $('.prof_locality').val();
var pincode = $('.prof_pincode').val();
var relegion = $('.prof_relegion').val();
var incomesource = $('.prof_incomesource option:selected').val();
var typeincome = $('.prof_typeincome option:selected').val();
var own_income = $('.prof_income').val();
var family_income = $('.prof_familyincome').val();
var networth = $('.prof_networth').val();
var desktop = $("input:radio.prof_desktop:checked").val();
var laptop = $("input:radio.prof_laptop:checked").val();
var ups = $("input:radio.prof_ups:checked").val();
var television = $("input:radio.prof_tv:checked").val();
var fridge = $("input:radio.prof_fridge:checked").val();
var washmachine = $("input:radio.prof_wash_machine:checked").val();
var borewater = $("input:radio.prof_borewater:checked").val();
var tnwater = $("input:radio.prof_Tnwater:checked").val();
var car = $("input:radio.prof_car:checked").val();
var bike = $("input:radio.prof_bike:checked").val();
var partnrbussiness = $("input:radio.prof_partbussiness:checked").val();
var twowheellisence = $("input:radio.prof_twolisence:checked").val();
var fourwheellisence = $("input:radio.prof_fourlisence:checked").val();
var ownhouse = $("input:radio.prof_ownhouse:checked").val();
var landacres = $('.prof_landacres').val();
var ppt_owner = $('.prof_ppty_owner_name').val();
var ppt_owner_reltn = $('.prof_ppty_owner_relation option:selected').val();
var bloodgroup = $('.prof_bloodgrop').val();
var settle_living = $('.prof_livingf option:selected').val();
var gold = $('.prof_gold option:selected').val();
var property = $('.prof_property').val();
var cash = $('.prof_cash option:selected').val();
var god = $('.prof_god option:selected').val();

var star = $('.prof_star').val();
var rasi = $('.prof_Rasi').val();
var gothr = $('.prof_gothra').val();
var dhosam = $("input:radio.prof_dosham:checked").val();                                   
var timeofBirth = $('.prof_timeOfBirth').val();
var minuteOfBirth = $('.prof_minuteOfBirth').val();
var profTime = $('.prof_Tym').val();
var countryOffBirth = $('.prof_country_of_birth').val();
var stateOfBirth = $('.prof_state_of_birth').val();
var chartStyle = $('.prof_chart_style').val();

var highEdu = $('.prof_highest_education option:selected').val();

var Employed =  $("input:radio.prof_employed:checked").val();
var occupation_type =  $('.prof_occpn_type option:selected').val();
var occupation_value =  $('.prof_occpn_value option:selected').val();
var occupation_relation = $('.prof_occpn_relation option:selected').val();
var occupation_field = $('.prof_occpn_field option:selected').val();

var contactNo = $('.parents_contact_no').val();
var whatsappNo = $('.whatsapp_no').val();
var familyValue = $("input:radio.prof_family_val:checked").val();                            
var familyType =  $("input:radio.prof_type:checked").val();       
var familyStatus = $("input:radio.prof_status:checked").val();
var aboutMe =  $(".prof_about_me").val();  
var userId = $('.user_id').text();

/*this below codes are dont know*/
/*var phy=$("input[name='phyStatus']:checked").val()*/
var famval=$("input[name='famval']:checked").val()
var famtype=$("input[name='famtyp']:checked").val()
var famstat=$("input[name='famstat']:checked").val()
 /*var prof_check_occpn = $('.selVal').text();
 var occuptionsss =[]; 
 $(".selVal").each(function() {  
    occuptionsss.push($(this).text())   
});
 var prof_check_occpn = occuptionsss.join(","); */


if(name==""){
  $(".prof_name").effect("shake");
  $(".prof_name").addClass("error");
    $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
return false;
}
else{
    $(".prof_name").removeClass("error");
}

if(guardname==""){
  $(".prof_guardname").effect("shake");
  $(".prof_guardname").addClass("error");
    $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
return false;
}
else{
    $(".prof_guardname").removeClass("error");
}

if(email==""){
  $(".prof_email").effect("shake");
  $(".prof_email").addClass("error");
    $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
return false;
}
else{
    $(".prof_email").removeClass("error");
}
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if (reg.test(email) == false) 
{
  $('.emailFlag').removeAttr('hidden')
    return false;
}else{
$('.emailFlag').attr('hidden', 'true')
}

if(prof_age==""){
    $(".prof_age").effect("shake");
  $(".prof_age").addClass("error");
      $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
     // alertify.error('Please enter the height');
    return false;
}
else{
    $(".prof_age").removeClass("error");
}

if(marital_status==""){
    $(".reg_prof_marital").effect("shake");
  $(".reg_prof_marital").addClass("error");
      $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
     // alertify.error('Please enter the height');
    return false;
}
else{
    $(".reg_prof_marital").removeClass("error");
}
if(gender== undefined){
    $(".ers").effect("shake");
  $(".ers").addClass("error");
      $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
     // alertify.error('Please enter the height');
    return false;
}
else{
    $(".ers").removeClass("error");
}

if(phyStat==undefined){
    $(".ers1").effect("shake");
  $(".ers1").addClass("error");
      $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
     // alertify.error('Please enter the height');
    return false;
}
else{
    $(".ers1").removeClass("error");
}

if(address1==""){
    $(".prof_address1").effect("shake");
    $(".prof_address1").addClass("error");
       $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
// alertify.error('Please choose a citizenship');
    return false;
}
else{
    $(".prof_address1").removeClass("error");
}

if(address2==""){
    $(".prof_address2").effect("shake");
    $(".prof_address2").addClass("error");
       $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
// alertify.error('Please choose a citizenship');
    return false;
}
else{
    $(".prof_address2").removeClass("error");
}

if(locality==""){
    $(".prof_locality").effect("shake");
    $(".prof_locality").addClass("error");
       $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
// alertify.error('Please choose a citizenship');
    return false;
}
else{
    $(".prof_locality").removeClass("error");
}

if(pincode==""){
    $(".prof_pincode").effect("shake");
    $(".prof_pincode").addClass("error");
       $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
// alertify.error('Please choose a citizenship');
    return false;
}
else{
    $(".prof_pincode").removeClass("error");
}
if(country==""){
   $(".prof_resid_country").effect("shake");
  $(".prof_resid_country").addClass("error");
   $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
  // alertify.error('Please choose a state');
  return false;
}
else{
  $(".prof_resid_country").removeClass("error");
}

if(state==""){
  $(".prof_resid_state").effect("shake");
  $(".prof_resid_state").addClass("error");
   $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
  // alertify.error('Please choose a state');
  return false;
}
else{
  $(".prof_resid_state").removeClass("error");
}

if(district==""){
  $(".prof_resid_district").effect("shake");
  $(".prof_resid_district").addClass("error");
   $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
  // alertify.error('Please choose a state');
  return false;
}
else{
  $(".prof_resid_district").removeClass("error");
}

if(taluk==""){
  $(".prof_resid_taluk").effect("shake");
  $(".prof_resid_taluk").addClass("error");
   $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
  // alertify.error('Please choose a state');
  return false;
}
else{
  $(".prof_resid_taluk").removeClass("error");
}

if(village==""){
  $(".prof_resid_village").effect("shake");
  $(".prof_resid_village").addClass("error");
   $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
  // alertify.error('Please choose a state');
  return false;
}
else{
  $(".prof_resid_village").removeClass("error");
}


if(citizenship==""){
    $(".prof_citizenship").effect("shake");
    $(".prof_citizenship").addClass("error");
       $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
// alertify.error('Please choose a citizenship');
    return false;
}
else{
    $(".prof_citizenship").removeClass("error");
}


if(highEdu==""){
    $(".prof_highest_education").effect("shake");
    $(".prof_highest_education").addClass("error");
       $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
    // alertify.error('Please choose a higher education');
    return false;
}else{
   $(".prof_highest_education").removeClass("error");
}

if(Employed==undefined){
      $(".ers2").effect("shake");
    $(".ers2").addClass("error");
           $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".ers2").removeClass("error");  
}


if(incomesource==""){
      $(".prof_incomesource").effect("shake");
    $(".prof_incomesource").addClass("error");
           $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_incomesource").removeClass("error");  
}


if(typeincome==""){
      $(".prof_typeincome").effect("shake");
    $(".prof_typeincome").addClass("error");
           $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_typeincome").removeClass("error");  
}

if(networth==""){
      $(".prof_networth").effect("shake");
    $(".prof_networth").addClass("error");
           $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_networth").removeClass("error");  
}

if(own_income==""){
      $(".prof_income").effect("shake");
    $(".prof_income").addClass("error");
           $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_income").removeClass("error");  
}
if(family_income==""){
      $(".prof_familyincome").effect("shake");
    $(".prof_familyincome").addClass("error");
           $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_familyincome").removeClass("error");  
}

if(occupation_type==""){
      $(".prof_occpn_type").effect("shake");
    $(".prof_occpn_type").addClass("error");
           $('html, body').animate({
        scrollTop: $("#occupatn").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_occpn_type").removeClass("error");  
}

if(occupation_value==""){
      $(".prof_occpn_value").effect("shake");
    $(".prof_occpn_value").addClass("error");
           $('html, body').animate({
        scrollTop: $("#occupatn").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_occpn_value").removeClass("error");  
}

/*if(occupation_relation==""){
      $(".prof_occpn_relation").effect("shake");
    $(".prof_occpn_relation").addClass("error");
           $('html, body').animate({
        scrollTop: $("#occupatn").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_occpn_relation").removeClass("error");  
}*/

if(occupation_field==""){
      $(".prof_occpn_field").effect("shake");
    $(".prof_occpn_field").addClass("error");
           $('html, body').animate({
        scrollTop: $("#occupatn").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".prof_occpn_field").removeClass("error");  
}

if(desktop==undefined){
    $(".ers3").effect("shake");
    $(".ers3").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers3").removeClass("error");  
}

if(laptop==undefined){
    $(".ers4").effect("shake");
    $(".ers4").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers4").removeClass("error");  
}

if(ups==undefined){
    $(".ers5").effect("shake");
    $(".ers5").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers5").removeClass("error");  
}

if(television==undefined){
    $(".ers6").effect("shake");
    $(".ers6").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers6").removeClass("error");  
}

if(fridge==undefined){
    $(".ers7").effect("shake");
    $(".ers7").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers7").removeClass("error");  
}

if(washmachine==undefined){
    $(".ers8").effect("shake");
    $(".ers8").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers8").removeClass("error");  
}

if(borewater==undefined){
    $(".ers9").effect("shake");
    $(".ers9").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers9").removeClass("error");  
}

if(tnwater==undefined){
    $(".ers10").effect("shake");
    $(".ers10").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers10").removeClass("error");  
}

if(car==undefined){
    $(".ers11").effect("shake");
    $(".ers11").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers11").removeClass("error");  
}

if(bike==undefined){
    $(".ers12").effect("shake");
    $(".ers12").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers12").removeClass("error");  
}

if(partnrbussiness==undefined){
    $(".ers13").effect("shake");
    $(".ers13").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers13").removeClass("error");  
}

if(twowheellisence==undefined){
    $(".ers14").effect("shake");
    $(".ers14").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers14").removeClass("error");  
}

if(fourwheellisence==undefined){
    $(".ers15").effect("shake");
    $(".ers15").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers15").removeClass("error");  
}

if(ownhouse==undefined){
    $(".ers16").effect("shake");
    $(".ers16").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers16").removeClass("error");  
}

if(landacres==""){
    $(".prof_landacres").effect("shake");
    $(".prof_landacres").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_landacres").removeClass("error");  
}

if(ppt_owner==""){
    $(".prof_ppty_owner_name").effect("shake");
    $(".prof_ppty_owner_name").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_ppty_owner_name").removeClass("error");  
}

if(ppt_owner_reltn==""){
    $(".prof_ppty_owner_relation").effect("shake");
    $(".prof_ppty_owner_relation").addClass("error");
         $('html, body').animate({
        scrollTop: $("#mvng").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_ppty_owner_relation").removeClass("error");  
}

if(settle_living==""){
    $(".prof_livingf").effect("shake");
    $(".prof_livingf").addClass("error");
         $('html, body').animate({
        scrollTop: $("#livef").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_livingf").removeClass("error");  
}

if(bloodgroup==""){
    $(".prof_bloodgrop").effect("shake");
    $(".prof_bloodgrop").addClass("error");
         $('html, body').animate({
        scrollTop: $("#medic").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_bloodgrop").removeClass("error");  
}

if(gold==""){
    $(".prof_gold").effect("shake");
    $(".prof_gold").addClass("error");
         $('html, body').animate({
        scrollTop: $("#gfts").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_gold").removeClass("error");  
}

if(property==""){
    $(".prof_property").effect("shake");
    $(".prof_property").addClass("error");
         $('html, body').animate({
        scrollTop: $("#gfts").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_property").removeClass("error");  
}

if(cash==""){
    $(".prof_cash").effect("shake");
    $(".prof_cash").addClass("error");
         $('html, body').animate({
        scrollTop: $("#gfts").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_cash").removeClass("error");  
}

if(whatsappNo==""){
    $(".whatsapp_no").effect("shake");
    $(".whatsapp_no").addClass("error");
         $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".whatsapp_no").removeClass("error");  
}

if(contactNo==""){
    $(".parents_contact_no").effect("shake");
    $(".parents_contact_no").addClass("error");
         $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".parents_contact_no").removeClass("error");  
}


if(famval==undefined){
    $(".ers17").effect("shake");
    $(".ers17").addClass("error");
         $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".ers17").removeClass("error");  
}

if(famtype==undefined){
    $(".ers18").effect("shake");
    $(".ers18").addClass("error");
             $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
       // alertify.error('Please choose a family type');
    return false;
}
else{
    $(".ers18").removeClass("error");   
}
if(famstat==undefined){
    $(".ers19").effect("shake");
    $(".ers19").addClass("error");
             $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
       // alertify.error('Please choose a family status');
    return false;
}else{
   $(".ers19").removeClass("error");   
}

if(god==""){
    $(".prof_god").effect("shake");
    $(".prof_god").addClass("error");
         $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".prof_god").removeClass("error");  
}

var dhosham_check = [];
$.each($("input[name='chk_dhosam']:checked"), function(){            
    dhosham_check.push($(this).val());
});
 var cbox_dhosam = dhosham_check.join(",");
// alert(gender)
$.ajax({
    type: "post",
    url: "url/profile_submit",
    data: {
        "email":email, "edit_prof_flag":edit_prof_flag, "name":name, "marital_status":marital_status,"phyStat":phyStat,"country":country,"citizenship":citizenship,"state":state, "star":star,"gothr":gothr,"dhosam":dhosam,"cbox_dhosam":cbox_dhosam,"timeofBirth":timeofBirth,"minuteOfBirth":minuteOfBirth,"countryOffBirth":countryOffBirth,"stateOfBirth":stateOfBirth,"chartStyle":chartStyle,"highEdu":highEdu, "Employed":Employed, "contactNo":contactNo,"whatsappNo":whatsappNo,"familyValue":familyValue, "familyType":familyType,"familyStatus":familyStatus,"aboutMe":aboutMe,"rasi":rasi,"userId":userId,"profTime":profTime,"gender":gender, "guardname":guardname,"district":district,"village":village,"taluk":taluk,"address1":address1,"address2":address2,"locality":locality,"pincode":pincode,"relegion":relegion,"incomesource":incomesource,"typeincome":typeincome,"networth":networth,"desktop":desktop,"laptop":laptop,"ups":ups,"television":television,"fridge":fridge,"washmachine":washmachine,"borewater":borewater,"tnwater":tnwater,"car":car,"bike":bike,"partnrbussiness":partnrbussiness,"twowheellisence":twowheellisence,"fourwheellisence":fourwheellisence,"ownhouse":ownhouse,"landacres":landacres,"ppt_owner":ppt_owner,"ppt_owner_reltn":ppt_owner_reltn,"bloodgroup":bloodgroup,"gold":gold,"property":property,"own_income":own_income,"family_income":family_income,"cash":cash,"god":god,"prof_age":prof_age,"settle_living":settle_living,"occupation_type":occupation_type,"occupation_value":occupation_value,"occupation_relation":occupation_relation,"occupation_field":occupation_field 
       },
    cache: false,
    success: function(data){
      if(data=="updated"){
      window.location.href="edit_profile";

      }else{
      window.location.href="index";
    }
  }
  });
}


function regphNovalid(){
var phone =  $('.user_phone').val();
if(phone.length >10){
alertify.error('The phone number should not be above 10 digits');
    }
}

$('.prof_email').tooltip();
function focusheight(){
/*var height = $(".prof_height").val();*/
var email = $('.prof_email').val();
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if (reg.test(email) == false) 
{
$('.emailFlag').removeAttr('hidden')
}else{
$('.emailFlag').attr('hidden', 'true')
}
}

/*function focusPhyStat(){
$(".prof_resid_country").addClass("focus");
}

function focrescountry(){
$(".prof_resid_state").removeClass("focus");
$(".prof_resid_country").addClass("focus");
}

function focresCity(){
$(".prof_resid_country").removeClass("focus");
$(".prof_resid_city").addClass("focus");
} 

function focresCitizen(){
$(".prof_resid_city").removeClass("focus");
$(".prof_citizenship").addClass("focus");
} 

function focresStar(){
$(".prof_citizenship").removeClass("focus");
$(".prof_star").addClass("focus");
}

function focresrasi(){
$(".prof_star").removeClass("focus");
$(".prof_Rasi").addClass("focus");


}

function focresGothr(){
$(".prof_Rasi").removeClass("focus");
$(".prof_gothra").addClass("focus");
}

function birthFocus(){
$(".prof_gothra").removeClass("focus");
$(".prof_timeOfBirth").addClass("focus");
}

function birthminFocus(){
$(".prof_timeOfBirth").removeClass("focus");
$(".prof_minuteOfBirth").addClass("focus");
}

function birthmerFocus(){
$(".prof_minuteOfBirth").removeClass("focus");
$(".prof_Tym").addClass("focus");
}

function countryBirthFocus(){
$(".prof_Tym").removeClass("focus");
$(".prof_country_of_birth").addClass("focus");
}

function statBirFocus(){
$(".prof_country_of_birth").removeClass("focus");
$(".prof_state_of_birth").addClass("focus");
}

function birtCityFocus(){
$(".prof_state_of_birth").removeClass("focus");
$(".prof_city_of_birth").addClass("focus");
}

function chartfocus(){
$(".prof_city_of_birth").removeClass("focus");
$(".prof_chart_style").addClass("focus");
}


function highEduFocus(){
$(".prof_chart_style").removeClass("focus");
$(".prof_highest_education").addClass("focus");
}

function empInFocus(){
$(".prof_highest_education").removeClass("focus");
$(".parents_contact_no").addClass("focus");
}*/

function aboutMefoc(){
  var num=$(".parents_contact_no").val();
   var len =num.length;
   if(len>10 || len<10 || isNaN(num)=="true"){
      $(".phnFlg").css("display", "block");
   }
   else{
      $(".phnFlg").css("display", "none");
      $(".parents_contact_no").removeClass("focus");
$(".about_me").addClass("focus");
   }

}
function whatsappno(){
  var num=$(".whatsapp_no").val();
   var len =num.length;
   if(len>10 || len<10 || isNaN(num)=="true"){
      $(".whatsappFlg").css("display", "block");
   }
   else{
      $(".whatsappFlg").css("display", "none");
      $(".whatsapp_no").removeClass("focus");
$(".about_me").addClass("focus");
   }

}


  function dosham(){
    document.getElementById("dhosham_hide").style.visibility = 'visible';
  }
  function dosham_no(){
    document.getElementById("dhosham_hide").style.visibility = 'hidden';
  }
  function dosham_dno(){
    document.getElementById("dhosham_hide").style.visibility = 'hidden';
  }




function sampleDesc(){
alertify.confirm("This is a confirm dialog.",
  function(){
    alertify.success('Ok');
  },
  function(){
    alertify.error('Cancel');
  });
}

/*****profile_model******/
function prof_model(clicked_id){
  event.preventDefault();

 var id=clicked_id;
 var profName=$('.profnameNxt'+id).text();
 $('.mdtl_name').text(profName);
 var pro_pystatus=$('.pro_phystatus'+id).text();
 $('.mdtl_phystatus').text(pro_pystatus);
 var pro_dob=$('.pro_dob'+id).text();
 $('.mdtl_dob').text(pro_dob);
 var pro_parent_no=$('.pro_parent_no'+id).text();
 $('.mdtl_contact').text(pro_parent_no);
 var pro_education=$('.pro_education'+id).text();
 $('.mdtl_educ').text(pro_education);
 var pro_employee=$('.pro_employee'+id).text();
 $('.mdtl_employdin').text(pro_employee);
 var pro_fam_val=$('.pro_fam_val'+id).text();
 $('.mdtl_familyval').text(pro_fam_val);
 var pro_famtype=$('.pro_famtype'+id).text();
 $('.mdtl_familytype').text(pro_famtype);
 var pro_famstatus=$('.pro_famstatus'+id).text();
 $('.mdtl_familtstatus').text(pro_famstatus);
 var pro_guardian_name=$('.pro_guardian_name'+id).text();
 $('.mdtl_guardianame').text(pro_guardian_name);
 var pro_district=$('.pro_district'+id).text();
 $('.mdtl_districtname').text(pro_district);
 var pro_taluk=$('.pro_taluk'+id).text();
 $('.mdtl_taluk').text(pro_taluk);
 var pro_village=$('.pro_village'+id).text();
 $('.mdtl_village').text(pro_village);
 var pro_locality=$('.pro_locality'+id).text();
 $('.mdtl_locality').text(pro_locality);
 var pro_ownewrname=$('.pro_ownewrname'+id).text();
 $('.mdtl_proptyname').text(pro_ownewrname);
 var pro_bloodgrp=$('.pro_bloodgrp'+id).text();
 $('.mdtl_bloodgrp').text(pro_bloodgrp);
 var pro_networth=$('.pro_networth'+id).text();
 $('.mdtl_networth').text(pro_networth); 
 var pro_email=$('.pro_email'+id).text();
 $('.mdtl_email').text(pro_email);
  var pro_maritalststus=$('.pro_maritalststus'+id).text();
 $('.mdtl_maritalstatus').text(pro_maritalststus);
  var pro_chartstyle=$('.pro_chartstyle'+id).text();
 $('.mdtl_chartstyle').text(pro_chartstyle); 
 var pro_desktop=$('.pro_desktop'+id).text();
 $('.mdtl_desktop').text(pro_desktop); 
 var pro_ups=$('.pro_ups'+id).text();
 $('.mdtl_ups').text(pro_ups); 
 var pro_laptop=$('.pro_laptop'+id).text();
 $('.mdtl_laptop').text(pro_laptop); 
 var pro_tv=$('.pro_tv'+id).text();
 $('.mdtl_tv').text(pro_tv); 
 var pro_fridge=$('.pro_fridge'+id).text();
 $('.mdtl_fridge').text(pro_fridge); 
 var pro_washing=$('.pro_washing'+id).text();
 $('.mdtl_washmac').text(pro_washing); 
 var pro_car=$('.pro_car'+id).text();
 $('.mdtl_car').text(pro_car); 
 var pro_twowheel=$('.pro_twowheel'+id).text();
 $('.mdtl_twowheeler').text(pro_twowheel);
 var pro_star=$('.pro_star'+id).text();
 $('.mdtl_star').text(pro_star);
 var pro_rasi=$('.pro_rasi'+id).text();
 $('.mdtl_rasi').text(pro_rasi);
 var pro_goathra=$('.pro_goathra'+id).text();
 $('.mdtl_gothra').text(pro_goathra);
 var pro_occupation=$('.pro_occupation'+id).text();
 $('.mdtl_occuptn').text(pro_occupation); 
 var pro_setle_live=$('.pro_setle_live'+id).text();
 $('.mdtl_living').text(pro_setle_live); 
  $.ajax({
    type: "post",
    url: "url/profile_details",
    data: {
        "id":id
       },
    cache: false,
    success: function(data){
     // console.log(data[0].prof_user_marial_stat);
     $('.mdtl_mrtl_sts').text(data[0].prof_user_marial_stat);
     $('.mdtl_complexion').text(data[0].Complexion);
     $('.mdtl_lang').text(data[0].lang);
     $('.mdtl_fathr_job').text(data[0].fathr_occu);
     $('.mdtl_mothr_job').text(data[0].mothr_occu);
     $('.mdtl_num_brothers').text(data[0].brothers);
     $('.mdtl_num_brthrs_mrd').text(data[0].bro_marri);
     $('.mdtl_num_sisters').text(data[0].sisters);
     $('.mdtl_num_sisters_mrd').text(data[0].sis_marri);
     $('.mdtl_abt_family').text(data[0].abt_family);
     $('.mdtl_eat_habt').text(data[0].eat_habt);
     $('.mdtl_drnk_habt').text(data[0].drnk_habt);
     $('.mdtl_smok_habt').text(data[0].smok_habt);
     $('.mdtl_interest').text(data[0].interest);
     $('.mdtl_sport').text(data[0].sport);
     $('.mdtl_hobbis').text(data[0].hobbis);
     $('.mdtl_music').text(data[0].music);
     $('.mdtl_weight').text(data[0].weight);
     $('.mdtl_height').text(data[0].height);
     $('.mdtl_bodytype').text(data[0].bodytype);
    }
  });
}
/*****profile_model******/
function search_model(clicked_id){
  event.preventDefault();

 var id=clicked_id;
 var profName=$('.profnameNx'+id).text();
 $('.mdtl_name').text(profName);
 var pro_pystatus=$('.pro_phystatus'+id).text();
 $('.mdtl_phystatus').text(pro_pystatus);
 var pro_dob=$('.pro_dob'+id).text();
 $('.mdtl_dob').text(pro_dob);
 var pro_parent_no=$('.pro_parent_no'+id).text();
 $('.mdtl_contact').text(pro_parent_no);
 var pro_education=$('.pro_education'+id).text();
 $('.mdtl_educ').text(pro_education);
 var pro_employee=$('.pro_employee'+id).text();
 $('.mdtl_employdin').text(pro_employee);
 var pro_fam_val=$('.pro_fam_val'+id).text();
 $('.mdtl_familyval').text(pro_fam_val);
 var pro_famtype=$('.pro_famtype'+id).text();
 $('.mdtl_familytype').text(pro_famtype);
 var pro_famstatus=$('.pro_famstatus'+id).text();
 $('.mdtl_familtstatus').text(pro_famstatus);
 var pro_guardian_name=$('.pro_guardian_name'+id).text();
 $('.mdtl_guardianame').text(pro_guardian_name);
 var pro_district=$('.pro_district'+id).text();
 $('.mdtl_districtname').text(pro_district);
 var pro_taluk=$('.pro_taluk'+id).text();
 $('.mdtl_taluk').text(pro_taluk);
 var pro_village=$('.pro_village'+id).text();
 $('.mdtl_village').text(pro_village);
 var pro_address1=$('.pro_address1'+id).text();
 $('.mdtl_address1').text(pro_address1);
 var pro_address2=$('.pro_address2'+id).text();
 $('.mdtl_address2').text(pro_address2);
 var pro_locality=$('.pro_locality'+id).text();
 $('.mdtl_locality').text(pro_locality);
 var pro_ownewrname=$('.pro_ownewrname'+id).text();
 $('.mdtl_proptyname').text(pro_ownewrname);
 var pro_bloodgrp=$('.pro_bloodgrp'+id).text();
 $('.mdtl_bloodgrp').text(pro_bloodgrp);
 var pro_networth=$('.pro_networth'+id).text();
 $('.mdtl_networth').text(pro_networth); 
 var pro_email=$('.pro_email'+id).text();
 $('.mdtl_email').text(pro_email);
  var pro_maritalststus=$('.pro_maritalststus'+id).text();
 $('.mdtl_maritalstatus').text(pro_maritalststus);
  var pro_chartstyle=$('.pro_chartstyle'+id).text();
 $('.mdtl_chartstyle').text(pro_chartstyle); 
 var pro_desktop=$('.pro_desktop'+id).text();
 $('.mdtl_desktop').text(pro_desktop); 
 var pro_ups=$('.pro_ups'+id).text();
 $('.mdtl_ups').text(pro_ups); 
 var pro_laptop=$('.pro_laptop'+id).text();
 $('.mdtl_laptop').text(pro_laptop); 
 var pro_tv=$('.pro_tv'+id).text();
 $('.mdtl_tv').text(pro_tv); 
 var pro_fridge=$('.pro_fridge'+id).text();
 $('.mdtl_fridge').text(pro_fridge); 
 var pro_washing=$('.pro_washing'+id).text();
 $('.mdtl_washmac').text(pro_washing); 
 var pro_car=$('.pro_car'+id).text();
 $('.mdtl_car').text(pro_car); 
 var pro_twowheel=$('.pro_twowheel'+id).text();
 $('.mdtl_twowheeler').text(pro_twowheel); 
  var pro_star=$('.pro_star'+id).text();
 $('.mdtl_star').text(pro_star);
 var pro_rasi=$('.pro_rasi'+id).text();
 $('.mdtl_rasi').text(pro_rasi);
 var pro_goathra=$('.pro_goathra'+id).text();
 $('.mdtl_gothra').text(pro_goathra);
 var pro_occupation=$('.pro_occupation'+id).text();
 $('.mdtl_occuptn').text(pro_occupation); 
 var pro_setle_live=$('.pro_setle_live'+id).text();
 $('.mdtl_living').text(pro_setle_live); 
  $.ajax({
    type: "post",
    url: "url/profile_details",
    data: {
        "id":id
       },
    cache: false,
    success: function(data){
     // console.log(data[0].prof_user_marial_stat);
     $('.mdtl_mrtl_sts').text(data[0].prof_user_marial_stat);
     $('.mdtl_complexion').text(data[0].Complexion);
     $('.mdtl_lang').text(data[0].lang);
     $('.mdtl_fathr_job').text(data[0].fathr_occu);
     $('.mdtl_mothr_job').text(data[0].mothr_occu);
     $('.mdtl_num_brothers').text(data[0].brothers);
     $('.mdtl_num_brthrs_mrd').text(data[0].bro_marri);
     $('.mdtl_num_sisters').text(data[0].sisters);
     $('.mdtl_num_sisters_mrd').text(data[0].sis_marri);
     $('.mdtl_abt_family').text(data[0].abt_family);
     $('.mdtl_eat_habt').text(data[0].eat_habt);
     $('.mdtl_drnk_habt').text(data[0].drnk_habt);
     $('.mdtl_smok_habt').text(data[0].smok_habt);
     $('.mdtl_interest').text(data[0].interest);
     $('.mdtl_sport').text(data[0].sport);
     $('.mdtl_hobbis').text(data[0].hobbis);
     $('.mdtl_music').text(data[0].music);
     $('.mdtl_weight').text(data[0].weight);
     $('.mdtl_height').text(data[0].height);
     $('.mdtl_bodytype').text(data[0].bodytype);
    }
  });
}


function pwdReset(){
var name=$('#logUesrName').val();
$.ajax({
    type: "post",
    url: "url/pwd_reset",
    data: {
        "name":name
       },
    cache: false,
    success: function(data){
    alert("We Have Send an Email To your registered Email ")
    window.location.href="password-reset";
    },
    error: function(data) {
  alert('sorry username not found')
}
  });
}

function sendIntrst(id){
  $.ajax({
    type: "post",
    url: "url/profile_intrest",
    data: {
        "id":id
       },
    cache: false,
    success: function(data){
      $(".send_req"+id).removeAttr('onclick');
      $(".send_req"+id).text('REQUEST SEND');
      $(".send_req"+id).css({'background-color':'#5cab40','border-color':'#5cab40'});
    },
    error: function(data) {

}
  });
}




function acceptReQ(cid){
  $.ajax({
    type: "post",
    url: "accept_matri_req",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "id":cid
       },
    cache: false,
    success: function(data){
    $('.currrecdata'+cid).css('background-color', '#3fa869');
     $('.currrecdata'+cid).delay(1000).fadeOut();
    },
    error: function(data) {
}
  });
}

function rejectReq(cid){
  $.ajax({
    type: "post",
    url: "reject_matri_req",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "id":cid
       },
    cache: false,
    success: function(data){
   $('.currrecdata'+cid).css('background-color', '#912e2e');
   $('.currrecdata'+cid).delay(1000).fadeOut();
    },
    error: function(data) {
}
  });
}


function removeReq(cid){
  $.ajax({
    type: "post",
    url: "remove_send_matri_req",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "id":cid
       },
    cache: false,
    success: function(data){
   $('.currsendata'+cid).css('background-color', '#f79f74');
   $('.currsendata'+cid).delay(1000).fadeOut();
    },
    error: function(data) {
}
  });
}

/*****click notification*****/
function notificat(){
  $.ajax({
    type: "get",
    url: "url/notification",
    data: {
       },
    cache: false,
    success: function(data){
        window.location.href = 'notification';
        //console.log(data)
    },
    error: function(data) {   
    }
  });
}
/*****click notification*****/


/*****payment*****/
 function num_display(id){
    document.getElementById("hide").style.display = 'block';

  } 


  function paydrop(){
      var payselc = document.getElementById("payselect").value;
      if(payselc==500){
        $(".basic_pay").text("Silver pack");
        $(".basic_amt").text("Rs.500");
        $(".basic_vali_cnt.view").text("User can view 10 numbers to see");
        $(".basic_vali_cnt.horoscope").text("Not provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("Not provided with background check");
        $(".basic_vali_cnt.planner_pro").text("Not provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("Not provided with full life problem solver");
        $(".basic_vali_cnt.planner_pro2").text("Not provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("Not provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("Not provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("Not provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("Not provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "block";
      }
      else if(payselc==1000){
        $(".basic_pay").text("Gold pack");
        $(".basic_amt").text("Rs.1000");
        $(".basic_vali_cnt.view").text("User can view 20 numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("Not provided with background check");
        $(".basic_vali_cnt.planner_pro").text("Not provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("Not provided with full life problem solver");
        $(".basic_vali_cnt.planner_pro2").text("Not provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("Not provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("Not provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("Not provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("Not provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt11").style.display = "block";
      }
       else if(payselc==1500){
        $(".basic_pay").text("Platinam");
        $(".basic_amt").text("Rs.1500");
        $(".basic_vali_cnt.view").text("User can view 30 numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("Not provided with background check");
        $(".basic_vali_cnt.planner_pro").text("Not provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("Not provided with full life problem solver");
        $(".basic_vali_cnt.planner_pro2").text("Not provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("Not provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("Not provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("Not provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("Not provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt12").style.display = "block";
      }
      else if(payselc==2000){
        $(".basic_pay").text("emerald");
        $(".basic_amt").text("Rs.2000");
        $(".basic_vali_cnt.view").text("User can view 40 numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("Not provided with background check");
        $(".basic_vali_cnt.planner_pro").text("Not provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("Not provided with full life problem solver");
        $(".basic_vali_cnt.planner_pro2").text("Not provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("Not provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("Not provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("Not provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("Not provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt13").style.display = "block";
      }
      else if(payselc==3500){
        $(".basic_pay").text("Pearl");
        $(".basic_amt").text("Rs.3500");
        $(".basic_vali_cnt.view").text("User can view 50 phone numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("Not provided with background check");
        $(".basic_vali_cnt.planner_pro").text("provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("Not provided with full life problem solver");
        $(".basic_vali_cnt.planner_pro2").text("Not provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("Not provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("Not provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("Not provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("Not provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt14").style.display = "block";
      }
      else if(payselc==5000){
        $(".basic_pay").text("Ruby");
        $(".basic_amt").text("Rs.5000");
        $(".basic_vali_cnt.view").text("User can view 60 phone numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("provided with background check");
        $(".basic_vali_cnt.planner_pro").text("provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("provided with full life problem solver");
        $(".basic_vali_cnt.planner_pro2").text("Not provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("Not provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("Not provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("Not provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("Not provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt15").style.display = "block";
      }
      else if(payselc==10000){
        $(".basic_pay").text("Sapphire");
        $(".basic_amt").text("Rs.10000");
        $(".basic_vali_cnt.view").text("User can view 70 phone numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("provided with background check");
        $(".basic_vali_cnt.planner_pro").text("provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("provided with full life problem solver");
        $(".basic_vali_cnt.planner_pro2").text("provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt16").style.display = "block";
      }
      else if(payselc==20000){
        $(".basic_pay").text("Alexandrite");
        $(".basic_amt").text("Rs.20000");
        $(".basic_vali_cnt.view").text("User can view 80 phone numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("provided with background check");
        $(".basic_vali_cnt.planner_pro").text("provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("provided with full life problem solver");
         $(".basic_vali_cnt.planner_pro2").text("provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt17").style.display = "block";
      }
      else if(payselc==50000){
        $(".basic_pay").text("Opal");
        $(".basic_amt").text("Rs.50000");
        $(".basic_vali_cnt.view").text("User can view 90 phone numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("provided with background check");
        $(".basic_vali_cnt.planner_pro").text("provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("provided with full life problem solver");
         $(".basic_vali_cnt.planner_pro2").text("provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt18").style.display = "block";
      }
      else if(payselc==100000){
        $(".basic_pay").text("Garnet");
        $(".basic_amt").text("Rs.100000");
        $(".basic_vali_cnt.view").text("User can view 100 phone numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("provided with background check");
        $(".basic_vali_cnt.planner_pro").text("provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("provided with full life problem solver");
         $(".basic_vali_cnt.planner_pro2").text("provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt19").style.display = "block";
      }
       else if(payselc==500000){
        $(".basic_pay").text("Diamond");
        $(".basic_amt").text("Rs.500000");
        $(".basic_vali_cnt.view").text("User can view unlimited phone numbers to see");
        $(".basic_vali_cnt.horoscope").text("provided with brokers assistance and horoscope checker");
        $(".basic_vali_cnt.background_check").text("provided with background check");
        $(".basic_vali_cnt.planner_pro").text("provided with life planner");
        $(".basic_vali_cnt.planner_pro1").text("provided with full life problem solver");
         $(".basic_vali_cnt.planner_pro2").text("provided marriage interview");
        $(".basic_vali_cnt.planner_pro3").text("provided marriage meeting one on one");
        $(".basic_vali_cnt.planner_pro4").text("provided marriage visiting each other houses");
        $(".basic_vali_cnt.planner_pro5").text("provided health check up");
        $(".basic_vali_cnt.planner_pro6").text("provided mental fitness");
        $('.pay_none').css('display','none');
        document.getElementById("payselt1").style.display = "none";
        document.getElementById("payselt20").style.display = "block";
      }
  }


/*secondry image upload*/

$(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });



/*secondry image upload*/
function spradmnbtn(){

$(".rechkremove").css("display", "block");
$(".doneaddcls").css("display", "none");
$(".spradmn_status").attr("disabled", true);

var spradmn_usridk = $('.spradmn_usridk').text();
var spradmn_profname = $('.spradmn_profname').text();
var spradmn_religion = $('.spradmn_religion').text();
var spradmn_caste = $('.spradmn_caste').text();
var spradmn_age = $('.spradmn_age').text();
var spradmn_income = $('.spradmn_income').text();
var spradmn_parentno = $('.spradmn_parentno').text();
var spradmn_status = $('.spradmn_status').val();
var txtarea_spradmn = $('.txtarea_spradmn').val();
$.ajax({
    type: "post",
    url: "supradmn_setprof_status",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        "spradmn_usridk":spradmn_usridk,"spradmn_profname":spradmn_profname,"spradmn_religion":spradmn_religion,"spradmn_caste":spradmn_caste,"spradmn_age":spradmn_age,"spradmn_income":spradmn_income,"spradmn_parentno":spradmn_parentno,"spradmn_status":spradmn_status,"txtarea_spradmn":txtarea_spradmn
       }, 
    cache: false,
    success: function(data){
        $(".spradmn_view_btn").css("display", "none");
        $(".spradmn_hdn_btn").css("display", "block");
        $('.spradmn_status').attr("disabled", true);
        $('.txtarea_spradmn').attr("disabled", true);

        // $(".spradmn_hdn_btn").removeClass("spradmn_hdn_btn");
  }
  });
}


  function SuAdRecheckProfile(){
  $(".spradmn_view_btn").css("display", "block");
  $(".spradmn_hdn_btn").css("display", "none");
    $(".spradmn_status").attr("disabled", false);
    $(".txtarea_spradmn").attr("disabled", false);

  }

  function suprAdmnRechekHide(){
    $(".rechkremove").css("display", "none");
     $(".doneaddcls").css("display", "block");
    $(".spradmn_status").attr("disabled", false);
     $(".txtarea_spradmn").attr("disabled", false);
  }

