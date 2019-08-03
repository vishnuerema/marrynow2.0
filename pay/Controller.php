<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use session;

class Controller extends BaseController
{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function HomePageLoad(){
      session_start();
      if(isset($_SESSION['id'])) {
           return redirect('register2');
      }

      else{
        $created_mast = DB::table('profilecreatedby_master')->get();
        $country_mast = DB::table('country_master')->get();
        $marital_status = DB::table('marital_status_master')->get();
        $sub_caste = DB::table('subcaste_master')->get();
        $mother_tounge = DB::table('mother_tongue_master')->get();
        return view('welcome', compact('created_mast','country_mast','mother_tounge','sub_caste','marital_status'));
      }
    }

    public function profile(Request $request){
        $userId = $_SESSION['id'];
        $checkGend=DB::table('bride_basic_profile')->where('user_idk', $userId)->get();
        if($checkGend[0]->profile_gender =="female"){
          $profiles=DB::table('bride_basic_profile')->where('profile_gender','male')->where('user_idk','!=' ,$userId)->get();       
        }
       else{
             $profiles=DB::table('bride_basic_profile')->where('profile_gender','female')->where('user_idk','!=' ,$userId)->get();
           }
        return view('profile', compact('profiles'));
    }

    public function editprof(){ 
      session_start();
      $userId=$_SESSION['id'];
      $edit_bprof=DB::table('bride_basic_profile')->where('user_idk',$userId)->get();
      $edit_secprof=DB::table('bride_secondary_profile')->where('user_idk',$userId)->get();
      $editstate= DB::table('states')->get();
       $editcity= DB::table('city_master')->get();
        $editcitizenship= DB::table('country_master')->get();
        $editstar= DB::table('star_master')->get();
        $editraasi= DB::table('raasi_master')->get();
        $editchartstyle= DB::table('chartstyle_master')->get();
        $editcountry= DB::table('country_master')->get();
        $edithighereducation= DB::table('education_master')->get();
        $editsec_weight= DB::table('weight_master')->get();
         $editsec_height= DB::table('height_master')->get();
         $editsec_lang= DB::table('language_master')->get();
         $editsec_interests= DB::table('Interests_master')->get();
         $editsec_hobbiess= DB::table('Hobbies_master')->get();
         $editsec_music= DB::table('music_master')->get();
         $editsec_sports= DB::table('sports_master')->get();
         $editsec_food= DB::table('food_master')->get();
        return view('edit_profile', compact('edit_bprof','editsec_weight','editsec_height','editsec_lang','editsec_interests','editsec_hobbiess','editsec_music','editsec_sports','editsec_food','edit_secprof','editstate','editcity','editcitizenship','editstar','editraasi','editchartstyle','edithighereducation','editcountry'));
    }

    public function viewprof(){ 
      session_start();
      $userId=$_SESSION['id'];
      $edit_bprof=DB::table('bride_basic_profile')->where('user_idk',$userId)->get();
      $edit_secprof=DB::table('bride_secondary_profile')->where('user_idk',$userId)->get();
      $editstate= DB::table('states')->get();
       $editcity= DB::table('city_master')->get();
        $editcitizenship= DB::table('country_master')->get();
        $editstar= DB::table('star_master')->get();
        $editraasi= DB::table('raasi_master')->get();
        $editchartstyle= DB::table('chartstyle_master')->get();
        $editcountry= DB::table('country_master')->get();
        $edithighereducation= DB::table('education_master')->get();
        $editsec_weight= DB::table('weight_master')->get();
         $editsec_height= DB::table('height_master')->get();
         $editsec_lang= DB::table('language_master')->get();
         $editsec_interests= DB::table('Interests_master')->get();
         $editsec_hobbiess= DB::table('Hobbies_master')->get();
         $editsec_music= DB::table('music_master')->get();
         $editsec_sports= DB::table('sports_master')->get();
         $editsec_food= DB::table('food_master')->get();
        return view('view_profile', compact('edit_bprof','editsec_weight','editsec_height','editsec_lang','editsec_interests','editsec_hobbiess','editsec_music','editsec_sports','editsec_food','edit_secprof','editstate','editcity','editcitizenship','editstar','editraasi','editchartstyle','edithighereducation','editcountry'));
    }

    public function payment(){
         $userId=$_SESSION['id'];
         $usr_name=DB::table('users')->where('user_id',$userId)->get();
       //setup the request, you can also use CURLOPT_URL
        $ch = curl_init('https://rzp_test_FU3UPT7QcoBEF9:jaQsRpMkj30oLt54GViqOjwG@api.razorpay.com/v1/payments');

        // Returns the data/output as a string instead of raw data
        $payout=curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return view('payment',compact('usr_name','payout'));
    }
    public function make_basic_payment(){

        return view('make_basic_payment');
    } 
     public function chatprof(){
        return view('chat');
    }  
    public function contactus(){
        return view('contact');
    } 


    public function logout(){
      session_start();
      unset($_SESSION['user_name']);
      unset($_SESSION['id']);
      return view('url/logout');
    }

      public function login(Request $request){
      session_start(); 
      $User = $request->input('mry_login_mail');
      $Pwds =$request->input('mry_login_pass');
      $data = DB::table('users')->where([['user_name', '=', $User]])->first();
      // $pwdhash =$data->
      // ['password', '=', $Pwd]
      if(count($data)>0){
      $sessionValue= $data->user_name;
      $sessionId= $data->user_id;
      $pwdHash= $data->user_pwd;
      if(password_verify($Pwds,$pwdHash)=="1"){
      $_SESSION['user_name']=$sessionValue ;
      $_SESSION['id']=$sessionId ;
      // $_SESSION['role']=$sessionRole ;
       return response()->json('success');
         }
    else{
             return response()->json('failiure');
         }
      }
      else{
       return response()->json('failiure');   
       }
      }

     public function pwdReset(Request $request){
      $name=$request->input('name');
      $data =DB::table('users')->where('user_name', $name)->get();
      $useremail = $data[0]->user_email;
      $resetLink = $data[0]->user_pwd_reset_link;
        if(isset($data[0]->user_name)){
            $link="https://marrynow.in/";
            $to = "krishprathee@gmail.com";
            $subject = "HTML email";
            $message = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Your code is ".$resetLink."</p>
            <a href=".$link.">Please Click here to change your password</a>
            </body>
            </html>
            ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
          mail($to,$subject,$message,$headers);
        return response()->json('An Email is send to your EmailId with the password reset link please check');  
        }
     }

     public function resettingPwd(Request $request){
      $link=$request->input('link');
      $pwd=$request->input('pwd');
        $pwdData=array('user_pwd'=>password_hash($pwd, PASSWORD_DEFAULT));
        DB::table('users')->where('user_pwd_reset_link', $link)->update($pwdData);
     }

     public function secondry_registration()
     {
         $secd_weight= DB::table('weight_master')->get();
         $secd_height= DB::table('height_master')->get();
         $secd_lang= DB::table('language_master')->get();
         $secd_interests= DB::table('Interests_master')->get();
         $secd_hobbiess= DB::table('Hobbies_master')->get();
         $secd_music= DB::table('music_master')->get();
         $secd_sports= DB::table('sports_master')->get();
         $secd_food= DB::table('food_master')->get();

    $id=$_SESSION['id'];
      $Data = DB::table('bride_secondary_profile')->where('user_idk',$id)->get();
          if(isset($Data[0]->user_idk)){
               return redirect('profile');
           }
           else{
         return view('secondary_registration', compact('secd_weight','secd_height','secd_hobbiess','secd_music','secd_lang','secd_sports','secd_food','secd_interests'));
           }
     }

     public function sec_reg_submit(Request $request)
     {
      session_start();
       $user_id=$_SESSION['id'];
       $sec_weight= $request->input('sec_weight');
       $edit_secprof_flag= $request->input('edit_secprof_flag');
       $sec_height= $request->input('sec_height');
        $sec_bodytype= $request->input('sec_bodytype');
        $sec_Complexion= $request->input('sec_Complexion');
        $sec_education= $request->input('sec_education');
        $sec_occupation= $request->input('sec_occupation');
        $languagesKnown= $request->input('languagesKnown');
        $sec_fathr_occu= $request->input('sec_fathr_occu');
        $sec_native= $request->input('sec_native');$sec_mothr_occu= $request->input('sec_mothr_occu');
        $sec_brothers= $request->input('sec_brothers'); 
        $sec_bro_marri= $request->input('sec_bro_marri');$sec_sis= $request->input('sec_sis');
        $sec_sis_marri= $request->input('sec_sis_marri');
        $sec_abt_family= $request->input('sec_abt_family');
        $sec_eat_habt= $request->input('sec_eat_habt');
        $sec_drnk_habt= $request->input('sec_drnk_habt');
        $sec_smok_habt= $request->input('sec_smok_habt');$sec_food= $request->input('sec_food');
        $sec_interest= $request->input('sec_interest');$sec_sport= $request->input('sec_sport');
        $sec_hobbis= $request->input('sec_hobbis');$sec_music= $request->input('sec_music');

         $secondry_reg = array('user_idk'=>$user_id,'weight'=>$sec_weight, 'height'=>$sec_height, 'bodytype'=>$sec_bodytype, 'Complexion'=>$sec_Complexion, 'education'=>$sec_education, 'occupation'=>$sec_occupation, 'lang'=>$languagesKnown,'native'=>$sec_native, 'fathr_occu'=>$sec_fathr_occu,'mothr_occu'=>$sec_mothr_occu,'brothers'=>$sec_brothers, 'bro_marri'=>$sec_bro_marri, 'sisters'=>$sec_sis, 'sis_marri'=>$sec_sis_marri,'abt_family'=>$sec_abt_family, 'eat_habt'=>$sec_eat_habt, 'drnk_habt'=>$sec_drnk_habt,'smok_habt'=>$sec_smok_habt,'food'=>$sec_food,'interest'=>$sec_interest,'sport'=>$sec_sport,'hobbis'=>$sec_hobbis,'music'=>$sec_music);
    
         if($edit_secprof_flag==''){
         DB::table('bride_secondary_profile')->insert($secondry_reg);
        }
        else{
          DB::table('bride_secondary_profile')->where('user_idk',$user_id)->update($secondry_reg);
        }
         return view('profile_matches');
     }

    public function userRegistration(Request $request)
    {
        $profCreatedBy= $request->input('profCreatedBy');$name = $request->input('name');$dob = $request->input('dob');$gender = $request->input('gender');$email = $request->input('email');$maritalStatus = $request->input('maritalStatus');$phone = $request->input('phone'); $country = $request->input('country');$pwd = $request->input('pwd'); $subcaste = $request->input('subcaste');
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";$codeAlphabet.= "0123456789"; $max = strlen($codeAlphabet);
       for ($i=0; $i < 30; $i++) {
           $token .= $codeAlphabet[random_int(0, $max-1)];
       }
       // Set userMatri Id 
       $getUserId = DB::table('config_userId')->get();
       $userId = $getUserId[0]->code;
       $year=date("Y");
       $num=  $userId[strlen($userId)-1];
       $num1=$num+1;
       $id = "MN".$year."1090".$num1;
       $data=array('code'=>$id);
       DB::table('config_userId')->update($data);
        //checking user exist or not 
        $userMailCheck= DB::table('users')->where('user_email', $email)->get();
        $usernameCheck= DB::table('users')->where('user_name', $name)->get();
        $userMobCheck= DB::table('users')->where('user_mobile', $phone)->get();
       $array =array();
       if($name==""){
        array_push($array,"please enter username");
       }
       if($pwd==""){
        array_push($array,"please choose your password");   
       }  
       if($email==""){
        array_push($array,"please enter your Email");
       }  
       if($email==""){
        array_push($array,"please enter your Email");
       } 
       if($maritalStatus==""){
        array_push($array,"please enter your marital Status");
       } 
       if($dob==""){
        array_push($array,"please enter your marital Status");
       } 
       if($phone==""){
        array_push($array,"please enter your marital Status");
       } 
       if($country==""){
        array_push($array,"please enter your marital Status");
       }
       if($profCreatedBy==""){
        array_push($array,"please enter your prof created By");
       }
       if($subcaste==""){
        array_push($array,"please enter your subcaste");
       }
       if(!is_numeric($phone)){
        array_push($array,"please enter number for phone");
       }
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($array,"please enter proper  email format  eg:aaa@aaa.com");
       }
       if(isset($userMailCheck[0]->user_email)){
        array_push($array,"sorry the user already exist");
       }
       if(isset($userMobCheck[0]->user_mobile)){
        array_push($array,"sorry the mobile number already exist");
       }
       if(isset($usernameCheck[0]->user_name)){
        array_push($array,"sorry the user name already exist");
       }

    elseif($name!=""){
        $dataIn = array('profile_created_by'=>$profCreatedBy, 'user_name'=>$name, 'user_dob'=>$dob, 'user_gender'=>$gender, 'user_email'=>$email, 'marital_status'=>$maritalStatus, 'user_mobile'=>$phone,'user_country'=>$country, 'user_pwd'=>password_hash($pwd, PASSWORD_DEFAULT),'user_pwd_reset_link'=>$token, 'user_sub_caste'=>$subcaste, 'user_matri_id'=>$id);
//email send 
// $headers = "From: marrynow@gmail.com";
// $receiver="krishprathee@gmail.com";
// $subject="Marry Now User Credentials";
// $msg="USERNAME:".$name. "PASSWORD:".$pwd;
// mail($receiver,$subject,$msg,$headers);

    DB::table('users')->insert($dataIn);
     $sesionData1 = DB::table('users')->max('user_id');
     $sesionData = DB::table('users')->where('user_id',$sesionData1)->get();
      $sessionValue= $sesionData[0]->user_name;
      $sessionId= $sesionData[0]->user_id;
      session_start();
      $_SESSION['user_name']=$sessionValue;
      $_SESSION['id']=$sessionId;
        return response()->json();
    }
     return response()->json($array);
    }//end of registration form
   
    public function register2Page(Request $request){
      // session_start();
        $dataid =$_SESSION['id'];
        $data = DB::table("users")->Where('user_id', $dataid)->get();  // after login change this to session id of user id
       /* $userHeight= DB::table('height_master')->get();*/
        $userstate= DB::table('states')->get();
        $usercity= DB::table('city_master')->get();
        $usercitizenship= DB::table('country_master')->get();
        $marital_status = DB::table('marital_status_master')->get();
        $userstar= DB::table('star_master')->get();
        $userraasi= DB::table('raasi_master')->get();
        $userchartstyle= DB::table('chartstyle_master')->get();
        $userhighereducation= DB::table('education_master')->get();
     if($data[0]->profile_completed_status=="1"){
     return redirect('index');
     }
     else{
        return view('register2', compact('data', 'marital_status','userstate','usercity','usercitizenship','userstar','userraasi','userchartstyle','userhighereducation'));
     }

    }//end of index page load

    public function profileSubmit(Request $request){
       session_start();
       $user_id=$_SESSION['id'];
       $edit_prof_flag= $request->input('edit_prof_flag');$gender= $request->input('gender'); $name= $request->input('name');$email= $request->input('email');$marital_status= $request->input('marital_status');/*$height= $request->input('height');*/$phyStat= $request->input('phyStat'); $country= $request->input('country');$city= $request->input('city');$citizenship= $request->input('citizenship');$state= $request->input('state');$star= $request->input('star'); $gothr= $request->input('gothr');$dhosam= $request->input('dhosam');$cbox_dhosam= $request->input('cbox_dhosam'); $timeofBirth= $request->input('timeofBirth'); $minuteOfBirth= $request->input('minuteOfBirth'); $profTime= $request->input('profTime'); $countryOffBirth= $request->input('countryOffBirth'); $stateOfBirth= $request->input('stateOfBirth');$CityOfBirth= $request->input('CityOfBirth');$chartStyle= $request->input('chartStyle');$highEdu= $request->input('highEdu');$Employed= $request->input('Employed');
        $contactNo= $request->input('contactNo');$familyValue= $request->input('familyValue');$familyType= $request->input('familyType');
        $familyStatus= $request->input('familyStatus'); $aboutMe= $request->input('aboutMe');$rasi= $request->input('rasi');
        $birthTime =   $timeofBirth . " " . $minuteOfBirth . " " . $profTime;

        $array =array();
        if($email==""){
         array_push($array,"please enter email");
        }
        if($name==""){
         array_push($array,"please enter name");
        }
        if($gender==""){
         array_push($array,"please enter gender");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($array,"please enteter proper email syntax eg aaa@aaa.com");
           }
        if($marital_status==""){
            array_push($array,"please enter marital status");
           }
          /* if($height==""){
            array_push($array,"please enter height");
           }*/
           if($phyStat==""){
            array_push($array,"please enter the time");
           }
           if($country==""){
            array_push($array,"please enter the country");
           }
           if($city==""){
            array_push($array,"please enter the country");
           }
           if($citizenship==""){
            array_push($array,"please enter the citizenship");
           }
           if($state==""){
            array_push($array,"please enter the state");
           }
           if($highEdu==""){
            array_push($array,"please enter the education");
           }
           if($Employed==""){
            array_push($array,"please enter the employe details");
           }
           if($familyValue==""){
            array_push($array,"please enter the family value");
           }
           if($familyType==""){
            array_push($array,"please enter the family type");
           }
           if($familyStatus==""){
            array_push($array,"please enter the family status");
           }
           if($aboutMe==""){
            array_push($array,"please enter the about me");
           }
           if($rasi==""){
            array_push($array,"please enter the raasi");
           }

        elseif($email!=""){
        $dataIn = array('user_idk'=>$user_id, 'profile_name'=>$name,'prof_user_email'=>$email, 'prof_user_marial_stat'=>$marital_status, /*'prof_user_height'=>$height,*/ 'prof_user_physichal_status'=>$phyStat, 'profile_user_country'=>$country, 'profile_user_city'=>$city,'prof_user_citizenship'=>$citizenship,'profile_user_state'=>$state,'prof_user_star'=>$star,'prof_user_gothra'=>$gothr,'prof_user_dhosam'=>$dhosam,'prof_dhosham_values'=>$cbox_dhosam,'prof_user_birthtime'=>$birthTime,'prof_user_birthcountry'=>$countryOffBirth,'prof_user_birthstate'=>$stateOfBirth,'prof_user_birthcity'=>$CityOfBirth,'prof_user_chartstyle'=>$chartStyle,'prof_user_edu'=>$highEdu,'prof_user_employedin'=>$Employed,'prof_user_parent_continfo'=>$contactNo,'prof_familyvalue'=>$familyValue,'prof_familytype'=>$familyType,'prof_familystatus'=>$familyStatus,'prof_about_me'=>$aboutMe,'prof_user_raasi'=>$rasi,'profile_gender'=>$gender);

        $validprofile = ['profile_completed_status'=>'1'];
        if($edit_prof_flag==''){
          DB::table('bride_basic_profile')->insert($dataIn);
        }
        else{
          DB::table('bride_basic_profile')->where('user_idk',$user_id)->update($dataIn);
        }
         DB::table('users')->where('user_id',$user_id)->update($validprofile);

        return view('url/profile_submit');
    }
    print_r($array);
    }// end of profilesubmit

    public function indexPage(Request $request){
          $Id=$_SESSION['id'];
       /* $dataid =DB::table('users')->max('user_id'); */
        $data= DB::table("users")->Where('user_id', $Id)->get();  // after login change this to session id of user id
      
      $imgData = DB::table('bride_basic_profile')->where('user_idk',$Id)->get();
           if($imgData[0]->profile_image!==""){
               return redirect('secondary_registration');
           }
           else{
        return view('index', compact('data'));
      }
    }//end of index page load

    public function image_upload(Request $request){
      $id=$_SESSION['id'];
      $imgData = DB::table('bride_basic_profile')->where('user_idk',$id)->get();
           if($imgData[0]->profile_image!==""){
               return redirect('secondary_registration');
           }
           else{
                return view('image_upload'); 
           }
         
        
    }//end of index page load
     public function uploadImage(Request $request){
      session_start();
          $Id=$_SESSION['id'];
            // $path   = $request->file('logo');
            // $resize = Image::make($path)->fit(300);
            // $store  = Storage::putFile('public/image', $resize);
            // $url    = Storage::url($store);
          if ($request->file('logo')) {
            $fileName = basename($_FILES["logo"]["name"]);
            $userPhoto = $request->file('logo')->storeAs('/',$fileName);
            $data=array('profile_image'=>$fileName);
            DB::table('bride_basic_profile')->where('user_idk', $Id)->update($data);
        }
        //php image ipload
        // $image=$request->input('logo');
        // $target_dir = "imgs/";
        // $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        // // print_r($target_file);
        // // $uploadOk = 1;
        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // // Check if image file is a actual image or fake image

        //     $check = getimagesize($_FILES["logo"]["tmp_name"]);
        //     if($check !== false) {
        //         echo "File is an image - " . $check["mime"] . ".";
        //         $uploadOk = 1;
        //     } else {
        //         echo "File is not an image.";
        //         $uploadOk = 0;
        //     }       
    return response()->json($fileName);
    }
    // public function uploadImage(){
    //     $target_dir = "public/";
    //     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //     // Check if image file is a actual image or fake image
    //     if(isset($_POST["submit"])) {
    //         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //         if($check !== false) {
    //             echo "File is an image - " . $check["mime"] . ".";
    //             $uploadOk = 1;
    //         } else {
    //             echo "File is not an image.";
    //             $uploadOk = 0;
    //         }
    //     }

    // return view('url/image_uploadurl');
    // }

    public function secReg(){     
    return view('secondary_registration'); 
    }

     public function prof_model(Request $request){
     $userId=$request->input('id') ;     
      $data=DB::table('bride_secondary_profile')->where('user_idk',$userId)->get();
      return response()->json($data); 
    }

     public function profile_matches(request $request){
    //   $datas=[ 
    //   ["disp"=>"Chart Style","tableName"=>"chartstyle_master","column_name"=>"name"],
    //   ["disp"=>"City","tableName"=>"city_master","column_name"=>"name"],
    //   ["disp"=>"Country","tableName"=>"states","column_name"=>"name"],
    //   ["disp"=>"State","tableName"=>"country_master","column_name"=>"name"],
    //   ["disp"=>"Education","tableName"=>"education_master","column_name"=>"name"],
    //   ["disp"=>"Hobbies","tableName"=>"Hobbies_master","column_name"=>"name"],
    //   ["disp"=>"Interests","tableName"=>"Interests_master","column_name"=>"name"],
    //   ["disp"=>"Language","tableName"=>"language_master","column_name"=>"name"],
    //   ["disp"=>"Mother Tounge","tableName"=>"mother_tongue_master","column_name"=>"name"], 
    //   ["disp"=>"Music Interests","tableName"=>" music_master","column_name"=>"name"], 
    //   ["disp"=>"District","tableName"=>"mynadar_district","column_name"=>"name"], 
    //   ["disp"=>"Occupation","tableName"=>"occupation_master","column_name"=>"name"], 
    //   ["disp"=>"Raasi","tableName"=>"raasi_master","column_name"=>"name"], 
    //   ["disp"=>"Star","tableName"=>"star_master","column_name"=>"name"] 
    //  ];
    
    // print_r($datas[0]);
    // exit;
    //  $compactVal=array();
    // for ($i=0; $i<count($datas); $i++){
    //   $datas[$i]=DB::table($datas[$i]->tableName)->get();
    //     array_push($compactVal, 'asasa');
    // }

      $dataid =$_SESSION['id'];
      $data = DB::table("users")->Where('user_id', $dataid)->get();
      $mat_chartstyle= DB::table('chartstyle_master')->get();
      $mat_highereducation= DB::table('education_master')->get();
      $mat_star= DB::table('star_master')->get();
      $mat_raasi= DB::table('raasi_master')->get();
      $mat_weight= DB::table('weight_master')->get();
       $mat_height= DB::table('height_master')->get();
       $mat_lang= DB::table('language_master')->get();
         $mat_sports= DB::table('sports_master')->get();
         $mat_food= DB::table('food_master')->get();
          $matstate= DB::table('states')->get();
        $matcity= DB::table('city_master')->get();
        $matcitizenship= DB::table('country_master')->get();

      return view('profile_matches', compact('mat_chartstyle','mat_star','mat_raasi','mat_highereducation','mat_weight','mat_height','mat_lang','mat_food','matstate','matcity','matcitizenship'));
     } 
}




