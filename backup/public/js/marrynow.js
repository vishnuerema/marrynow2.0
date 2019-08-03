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
      var gend=$("input[name='gender']:checked").val()

      if(profCreatedBy==""){
          alertify.error('please select one in Profilee Created by');
          return false;
      }

      if(name==""){
      alertify.error('please fill the name field');
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
      if(pwd==""){
      alertify.error('please Enter a password');
      return false;
      }
      $.ajax({
          type: "post",
          url: "welcome",
          data: {
              "profCreatedBy":profCreatedBy,"name":name,"dob":dob,"gender":gender,"email":email,"maritalStatus":maritalStatus,"phone":phone, "country":country,"pwd":pwd,"subcaste":subcaste
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
function mrynow_login(){
   event.preventDefault();
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
     if(data=="success"){
      window.location = "register2";

     }
     else{
       alert(data)
     }
    }
  });
}
/*****vishnue login ******/

/*****vishnue secondary registration******/
function submit_secondry_reg(){
    event.preventDefault();
  var sec_weight = $('.secondry_weight option:selected').val();
  var sec_bodytype = $(".secondry_bodytype input[type='radio']:checked").val();
  var sec_Complexion = $(".secondry_Complexion input[type='radio']:checked").val();
  var sec_education = $('.secondry_education').val();
  var sec_occupation = $('.secondry_occupation').val();
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

$.ajax({
    type: "post",
    url: "secondry_registration/submit",
    data: {
        "sec_weight":sec_weight, "sec_bodytype":sec_bodytype, "sec_Complexion":sec_Complexion,"sec_education":sec_education,"sec_occupation":sec_occupation,"languagesKnown":languagesKnown,"sec_native":sec_native,"sec_fathr_occu":sec_fathr_occu,"sec_mothr_occu":sec_mothr_occu, "sec_brothers":sec_brothers,"sec_bro_marri":sec_bro_marri, "sec_sis":sec_sis,"sec_sis_marri":sec_sis_marri,"sec_abt_family":sec_abt_family,"sec_eat_habt":sec_eat_habt,"sec_drnk_habt":sec_drnk_habt,"sec_smok_habt":sec_smok_habt,"sec_interest":sec_interest,"sec_hobbis":sec_hobbis, "sec_music":sec_music, "sec_sport":sec_sport,"sec_food":sec_food
       },
    cache: false,
    success: function(data){
    //   alert(data)
    }
  });

}

/*****secondary registration******/

function SubmitMatriProfile(){
var email = $('.prof_email').val();
var marital_status = $('.prof_maritalstatus').text();
var height = $('.prof_height').val();
var phyStat =  $(".prof_phy_status  input[type='radio']:checked").val();            

var country = $('.prof_resid_country').text();
var state = $('.prof_resid_state').val();
var city = $('.prof_resid_city').val();
var citizenship = $('.prof_citizenship').val();

var star = $('.prof_star').val();
var rasi = $('.prof_Rasi').val();
var gothr = $('.prof_gothra').val();
var dhosam = $(".profDhosam  input[type='radio']:checked").val();                                    
var timeofBirth = $('.prof_timeOfBirth').val();
var minuteOfBirth = $('.prof_minuteOfBirth').val();
var profTime = $('.prof_Tym').val();
var countryOffBirth = $('.prof_country_of_birth').val();
var stateOfBirth = $('.prof_state_of_birth').val();
var CityOfBirth = $('.prof_city_of_birth').val();
var chartStyle = $('.prof_chart_style').val();

var highEdu = $('.prof_highest_education').val();
var Employed =  $(".prof_employed  input[type='radio']:checked").val(); 

var contactNo = $('.parents_contact_no').val();
var familyValue = $(".parents_family_value  input[type='radio']:checked").val();                          
var familyType =  $(".parents_family_type  input[type='radio']:checked").val();       
var familyStatus =  $(".parents_family_status  input[type='radio']:checked").val();
var aboutMe =  $(".prof_about_me").val();  
var userId = $('.user_id').text();
var phy=$("input[name='phyStatus']:checked").val()
var famval=$("input[name='famval']:checked").val()
var famtype=$("input[name='famtyp']:checked").val()
var famstat=$("input[name='famstat']:checked").val()


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
if(height==""){
    $(".prof_height").effect("shake");
  $(".prof_height").addClass("error");
      $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
     // alertify.error('Please enter the height');
    return false;
}
else{
    $(".prof_height").removeClass("error");
}
if(phy==undefined){
 // alertify.error('Please choose a physical status');
     $(".user_gender").effect("shake");
  $(".user_gender").addClass("error");
      $('html, body').animate({
        scrollTop: $("#perInf").offset().top
    }, 1000);
    return false;
}
else{
    $(".user_gender").removeClass("error");

}
if(country==""){
  
    return false;
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
if(city==""){
  $(".prof_resid_city").effect("shake");
  $(".prof_resid_city").addClass("error");
     $('html, body').animate({
        scrollTop: $("#locInfo").offset().top
    }, 1000);
    // alertify.error('Please choose a city');
    return false;
}
else{
  $(".prof_resid_city").removeClass("error");
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

if(Employed==""){
      $(".emp_in").effect("shake");
    $(".emp_in").addClass("error");
           $('html, body').animate({
        scrollTop: $("#eduInf").offset().top
    }, 1000);
        // alertify.error('Please say you are employed or not');
    return false;
}else{
   $(".emp_in").removeClass("error");  
}
if(famval==undefined){
    $(".fam_val").effect("shake");
    $(".fam_val").addClass("error");
         $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
        // alertify.error('Please choose family value');
    return false;
}else{
     $(".fam_val").removeClass("error");  
}
if(famtype==undefined){
    $(".fam_typ").effect("shake");
    $(".fam_typ").addClass("error");
             $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
       // alertify.error('Please choose a family type');
    return false;
}
else{
    $(".fam_typ").removeClass("error");   
}
if(famstat==undefined){
    $(".fam_stat").effect("shake");
    $(".fam_stat").addClass("error");
             $('html, body').animate({
        scrollTop: $("#famInf").offset().top
    }, 1000);
       // alertify.error('Please choose a family status');
    return false;
}else{
   $(".fam_stat").removeClass("error");   
}

$.ajax({
    type: "post",
    url: "url/profile_submit",
    data: {
        "email":email, "marital_status":marital_status, "height":height,"phyStat":phyStat,"country":country,"city":city,"citizenship":citizenship,"state":state, "star":star,"gothr":gothr, "dhosam":dhosam,"timeofBirth":timeofBirth,"minuteOfBirth":minuteOfBirth,"countryOffBirth":countryOffBirth,"stateOfBirth":stateOfBirth,"CityOfBirth":CityOfBirth,"chartStyle":chartStyle,"highEdu":highEdu, "Employed":Employed, "contactNo":contactNo,"familyValue":familyValue, "familyType":familyType,"familyStatus":familyStatus,"aboutMe":aboutMe,"rasi":rasi,"userId":userId,"profTime":profTime
       },
    cache: false,
    success: function(data){
    //   alert(data)
    }
  });
}// end of submitting matrimony profile ajax call step 2


// function imageUpload(){
//      var imageName = document.getElementById('image').files[0].name;
//      alert(imageName)

//         $.ajax({
//         type: "POST",
//         url:"url/image_uploadurl",
//         data: {
//             "imageName":imageName
//              },
//         cache: false,
//         success: function(data){
//           alert()
//         }
//       });
      
// }
function regphNovalid(){
var phone =  $('.user_phone').val();
if(phone.length >10){
alertify.error('The phone number should not be above 10 digits');
    }
}

$('.prof_email').tooltip();
function focusheight(){
var height = $(".prof_height").val();
var email = $('.prof_email').val();
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if (reg.test(email) == false) 
{
$('.emailFlag').removeAttr('hidden')
}else{
$('.emailFlag').attr('hidden', 'true')
$(".prof_height").addClass("focus");
}
if(height !=""){
$(".prof_height").removeClass("focus");
}
}
function focusPhyStat(){
$(".prof_height").removeClass("focus");
$(".prof_resid_state").addClass("focus");
}

function focresCity(){
$(".prof_resid_state").removeClass("focus");
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
}

function aboutMefoc(){
$(".parents_contact_no").removeClass("focus");
$(".about_me").addClass("focus");
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