<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function HomePageLoad(){
        $created_mast = DB::table('profilecreatedby_master')->get();
        $country_mast = DB::table('country_master')->get();
        $marital_status = DB::table('marital_status_master')->get();
        return view('welcome', compact('created_mast','country_mast','marital_status'));
    }
    public function profile(){
       
        return view('profile');
    }
     public function profile_matches(){
       
        return view('profile_matches');
    } 

    public function payment(){
       
        return view('payment');
    }

    public function logout(){
      session_start();
      unset($_SESSION['user_name']);
      return view('/');
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



     public function secondry_registration()
     {
         $secd_weight= DB::table('matri_weight')->get();
         $secd_lang= DB::table('language_master')->get();
         $secd_interests= DB::table('Interests_master')->get();
         $secd_hobbiess= DB::table('Hobbies_master')->get();
         $secd_music= DB::table('music_master')->get();
         $secd_sports= DB::table('sports_master')->get();
         $secd_food= DB::table('food_master')->get();
         return view('secondary_registration', compact('secd_weight','secd_hobbiess','secd_music','secd_lang','secd_sports','secd_food','secd_interests'));
     }

     public function sec_reg_submit(Request $request)
     {
      $sec_weight= $request->input('sec_weight');$sec_bodytype= $request->input('sec_bodytype');
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

         $secondry_reg = array('weight'=>$sec_weight, 'bodytype'=>$sec_bodytype, 'Complexion'=>$sec_Complexion, 'education'=>$sec_education, 'occupation'=>$sec_occupation, 'lang'=>$languagesKnown,'native'=>$sec_native, 'fathr_occu'=>$sec_fathr_occu,'mothr_occu'=>$sec_mothr_occu,'brothers'=>$sec_brothers, 'bro_marri'=>$sec_bro_marri, 'sisters'=>$sec_sis, 'sis_marri'=>$sec_sis_marri,'abt_family'=>$sec_abt_family, 'eat_habt'=>$sec_eat_habt, 'drnk_habt'=>$sec_drnk_habt,'smok_habt'=>$sec_smok_habt,'food'=>$sec_food,'interest'=>$sec_interest,'sport'=>$sec_sport,'hobbis'=>$sec_hobbis,'music'=>$sec_music);
    
         DB::table('bride_secondary_profile')->insert($secondry_reg);
         return view('secondary_registration');
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
        
        DB::table('users')->insert($dataIn);
        return response()->json();
    }
     return response()->json($array);
    
    }//end of registration form
   
    public function register2Page(Request $request){
        $dataid =DB::table('users')->max('user_id');
        $data = DB::table("users")->Where('user_id', $dataid)->get();  // after login change this to session id of user id
        $userHeight= DB::table('height_master')->get();
        $usercitizenship= DB::table('country_master')->get();
        $userstar= DB::table('star_master')->get();
        $userraasi= DB::table('raasi_master')->get();
        $userchartstyle= DB::table('chartstyle_master')->get();
        $userhighereducation= DB::table('education_master')->get();
        return view('register2', compact('data', 'userHeight','usercitizenship','userstar','userraasi','userchartstyle','userhighereducation'));
    }//end of index page load

    public function profileSubmit(Request $request){
        $userId=$request->session()->get('id');$email= $request->input('email');$marital_status= $request->input('marital_status');$height= $request->input('height');$phyStat= $request->input('phyStat'); $country= $request->input('country');$city= $request->input('city');$citizenship= $request->input('citizenship');$state= $request->input('state');$star= $request->input('star'); $gothr= $request->input('gothr');$dhosam= $request->input('dhosam'); $timeofBirth= $request->input('timeofBirth'); $minuteOfBirth= $request->input('minuteOfBirth'); $profTime= $request->input('profTime'); $countryOffBirth= $request->input('countryOffBirth'); $stateOfBirth= $request->input('stateOfBirth');$CityOfBirth= $request->input('CityOfBirth');$chartStyle= $request->input('chartStyle');$highEdu= $request->input('highEdu');$Employed= $request->input('Employed');
        $contactNo= $request->input('contactNo');$familyValue= $request->input('emafamilyValueil');$familyType= $request->input('familyType');
        $familyStatus= $request->input('familyStatus'); $aboutMe= $request->input('aboutMe');$rasi= $request->input('rasi');
        $birthTime =   $timeofBirth . " " . $minuteOfBirth . " " . $profTime;

        $array =array();
        if($email==""){
         array_push($array,"please enter email");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($array,"please enteter proper email syntax eg aaa@aaa.com");
           }
        if($marital_status==""){
            array_push($array,"please enter marital status");
           }
           if($height==""){
            array_push($array,"please enter height");
           }
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
        $dataIn = array('user_idk'=>$userId, 'prof_user_email'=>$email, 'prof_user_marial_stat'=>$marital_status, 'prof_user_height'=>$height, 'prof_user_physichal_status'=>$phyStat, 'profile_user_country'=>$country, 'profile_user_city'=>$city,'prof_user_citizenship'=>$citizenship,'profile_user_state'=>$state,'prof_user_star'=>$star,'prof_user_gothra'=>$gothr,'prof_user_dhosam'=>$dhosam,'prof_user_birthtime'=>$birthTime,'prof_user_birthcountry'=>$countryOffBirth,'prof_user_birthstate'=>$stateOfBirth,'prof_user_birthcity'=>$CityOfBirth,'prof_user_chartstyle'=>$chartStyle,'prof_user_edu'=>$highEdu,'prof_user_employedin'=>$Employed,'prof_user_parent_continfo'=>$contactNo,'prof_familyvalue'=>$familyValue,'prof_familytype'=>$familyType,'prof_familystatus'=>$familyStatus,'prof-about_me'=>$aboutMe,'prof_user_raasi'=>$rasi );

         DB::table('bride_basic_profile')->insert($dataIn);
        return view('url/profile_submit');
    }
    print_r($array);
    }// end of profilesubmit

    public function indexPage(Request $request){
        $dataid =DB::table('users')->max('user_id'); 
        $data = DB::table("users")->Where('user_id', $dataid)->get();  // after login change this to session id of user id
        return view('index', compact('data'));
    }//end of index page load

    public function image_upload(){
        return view('image_upload');
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



    public function secReg(){     
    return view('secondary_registration'); 
    }

}




