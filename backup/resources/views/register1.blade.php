<html>
<head>
<script type='text/javascript' src='js/marrynow.js'></script>
<script type='text/javascript' src='js/marrynowreg_valid.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
<h3 style="color:red">Register And Find Your Life Partner</h3>
<h4>Personal Information</h4>
<p>email:*<p> <input class="prof_email"  type="text" name="email">
<p>Marital Status *:<p> <p class="prof_maritalstatus" >{{$data[0]->marital_status}}</P>
<p>Height:*<p> <select class="prof_height" type="text" name="height" style="width:10%" > <option class="" value="11">11</option></select>
<div  class="prof_phy_status" >
<p   >Physical Status *:</p>  normal<input type="radio" value="Normal" name="phyStatus">physically challenged   <input type="radio" value="phyChallenged" name="phyStatus"> 
</div>
<hr><br><br>

<h4>Location Information</h4>
<p>country *:<p> <p class="prof_resid_country">{{$data[0]->user_country}} </P>
<p>Residing State *<p> <select class="prof_resid_state" type="text"  style="width:10%" > <option  value="tamilnadu">tamilnadu</option></select>
<p>Residing City *<p> <select class="prof_resid_city" type="text"  style="width:10%" > <option  value="ngl">ngl</option></select>
<p>Citizenship *<p> <select  class="prof_citizenship" type="text" style="width:10%" > <option  value="Ind">Ind</option></select>
<hr><br><br>

<h4>Religious Information</h4>
<p>Star :<p>   <select type="text"  class="prof_star" style="width:10%" > <option  value="xx">xx</option></select>
<p>Rasi :<p>   <select type="text"  class="prof_Rasi"  style="width:10%" > <option  value="yy">yy</option></select>
<p>Gothra<p><input  class="prof_gothra" type="text" name="email" >
<div class="profDhosam">
<p>Dosham :<p>Yes<input  type="radio" value="y" name="phyStatus">  No<input  type="radio" value="n" name="phyStatus">   DontKnow<input  type="radio" value="dn" name="phyStatus"> 
</div>
<p>Time of Birth:<p> <p></P>  
<select  class="prof_timeOfBirth" type="text"  style="width:10%" > <option  value="1">1</option></select>
<select class="prof_minuteOfBirth" type="text"  style="width:10%" > <option  value="22">22</option></select>
<select type="text"  class="prof_Tym"  style="width:10%" > <option  value="Am">Am</option></select>
<p>Country of Birth<p> <select   class="prof_country_of_birth" type="text"  style="width:10%" > <option  value="India">India</option></select>
<p>State of Birth<p> <select  class="prof_state_of_birth" type="text"  style="width:10%" > <option  value="taminadu">taminadu</option></select>
<p>City of Birth<p> <select  class="prof_city_of_birth" type="text"  style="width:10%" > <option  value="ngl">ngl</option></select>
<p>Chart Style<p> <select type="text" class="prof_chart_style"  style="width:10%" > <option  value="South India">South India</option></select>
<hr><br><br>

<h4>Education & Profession</h4>
<p>Highest Education*<p> <select class="prof_highest_education" type="text"  style="width:10%" > <option  value="India">India</option></select>
<div class="prof_employed" >
<p>Employed in *<p> govt<input   type="radio" value="gov" name="phyStatus">   private<input   type="radio" value="pri" name="phyStatus">   defence<input   type="radio" value="def" name="phyStatus"> 
</div>
<hr><br><br>

<h4>Family Information</h4>
<p>Parent's Contact No.<p><input class="parents_contact_no" type="text" name="phone" >
<div class="parents_family_value">
<p>Family Value *<p>  orthodox<input type="radio" value="orthodox" name="phyStatus">   traditional<input  type="radio" value="pc" name="phyStatus">  moderate<input  type="radio" value="pc" name="phyStatus"> 
</div>

<div class="parents_family_type" >
<p>Family type *<p>   joint Family<input    type="radio" value="joint" name="phyStatus">   Nuclear Family<input value="nuclear"   type="radio" value="pc" name="phyStatus"> 
</div>

<div class="parents_family_status" >
<p>Family status *<p>  Middle Class<input    type="radio" value="Middle" name="phyStatus">   Upper Middle Class<input type="radio" value="Upper middle" name="phyStatus">  Rich<input   type="radio" value="Rich" name="phyStatus"> 
</div>

<hr><br><br>

<h4>About me</h4>
<textarea class="prof_about_me" style="width:40%;height:150px"></textarea>
<hr><br><br>

<p  hidden class="user_id"> {{$data[0]->user_id}}</p>



<select class="sasa" name="state">
  <option value="AL">Alabama</option>
    ...
  <option value="WY">Wyoming</option>
</select>


<br><br>

<button onclick="SubmitMatriProfile()">Complete Registration</button>
</html>