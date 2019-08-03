<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use session;
use Cache;

class Shopcontroller extends Controller
{
 
 //shop page shop user
     /*public function shop_users(Request $request){
        $created_mast = DB::table('profilecreatedby_master')->get();
        $country_mast = DB::table('country_master')->get();
        $marital_status = DB::table('marital_status_master')->get();
        $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
         $shopdistrict= DB::table('ward')->select('dist_name')->distinct()->get();
          $shopvillage= DB::table('mynadar_village')->get();
          $shoptaluk= DB::table('mynadar_taluk')->get();
          $shopstate= DB::table('states')->get();
          $shop_pay_amt_per_pf=DB::table('shop_payment')->where('id','1')->get();


       $shopUser=DB::table('users')->where('user_id', $_SESSION['id'])->get();
       $Today= date("Y-m-d").' 00:00:00';
       $TodayEnd= date("Y-m-d").' 23:59:59';
       $weekbefore = date('Y-m-d', strtotime('-7 days')).' 00:00:00';
       $monthbefore = date('Y-m-d', strtotime('-30 days')).' 00:00:00';

 
    if(isset($shopUser[0]->user_matri_id)){
    $profsPerMonth = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->whereBetween('created_ts', [$monthbefore, $TodayEnd])->get();
    $profsPerweek = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->whereBetween('created_ts', [$weekbefore, $TodayEnd])->get();
    $profsPerday = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->whereBetween('created_ts', [$Today, $TodayEnd])->get();
     $total_profs = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->get();
       $payprof_cnt=count($total_profs)-$shopUser[0]->claimed_profile_count;

       $amountToPay = $payprof_cnt*50;
           $userId = $shopUser[0]->user_matri_id;
           $regProfs= DB::table('users')->where('profile_created_by',$userId)->get();

           $validArray=array();
           for($i=0; $i<count($regProfs); $i++){
            $data=DB::table('bride_basic_profile')->where('user_idk', $regProfs[$i]->user_id)->get();
            $datausr=DB::table('users')->where('user_id', $regProfs[$i]->user_id)->get();
              if(isset($data[$i]->user_idk)){
                array_push($validArray, $data[$i]);
              }
              elseif(isset($datausr[$i]->user_id)){
                array_push($validArray, $datausr[$i]);
             }
           }
          }
           print_r($regProfs);
           exit;
          
        return view('shopUsers/profile_management', compact('created_mast','country_mast','caste','marital_status','registeredProfiles','userId', 'registeredProfiles','validArray','shopdistrict','shopvillage','shoptaluk','shopstate','shop_pay_amt_per_pf','profsPerMonth','profsPerweek','profsPerday','amountToPay','payprof_cnt','shopUser'));
        }*/

        public function shop_users(Request $request){
            /*$caste = DB::table('caste_master')->get();*/
            $created_mast = DB::table('profilecreatedby_master')->get();
            $country_mast = DB::table('country_master')->get();
            $marital_status = DB::table('marital_status_master')->get();
            /*$sub_caste = DB::table('subcaste_master')->get();*/
            $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
             $shopdistrict= DB::table('ward_master')->select('state_name')->distinct()->get();

              $shopvillage= DB::table('mynadar_village')->get();
              $shoptaluk= DB::table('mynadar_taluk')->get();
              $shopstate= DB::table('states')->get();
              $shop_pay_amt_per_pf=DB::table('shop_payment')->where('id','1')->get();

           $shopUser=DB::table('users')->where('user_id', $_SESSION['id'])->get();
           $Today= date("Y-m-d").' 00:00:00';
           $TodayEnd= date("Y-m-d").' 23:59:59';
           $weekbefore = date('Y-m-d', strtotime('-7 days')).' 00:00:00';
           $monthbefore = date('Y-m-d', strtotime('-30 days')).' 00:00:00';

        if(isset($shopUser[0]->user_matri_id)){
        $profsPerMonth = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->whereBetween('created_ts', [$monthbefore, $TodayEnd])->get();
        $profsPerweek = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->whereBetween('created_ts', [$weekbefore, $TodayEnd])->get();
        $profsPerday = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->whereBetween('created_ts', [$Today, $TodayEnd])->get();
         $total_profs = DB::table('bride_basic_profile')->where('user_idk', $shopUser[0]->user_id)->get();
        $payprof_cnt=count($total_profs)-$shopUser[0]->claimed_profile_count;
        $amountToPay = $payprof_cnt*50;

         
          $userId=$shopUser[0]->user_matri_id;
           $validArray= DB::table('users')->where('profile_created_by',$userId)->get();

          }
       return view('shopUsers/profile_management', compact('created_mast','country_mast','caste','marital_status','registeredProfiles','userId', 'registeredProfiles','validArray','shopdistrict','shopvillage','shoptaluk','shopstate','shop_pay_amt_per_pf','profsPerMonth','profsPerweek','profsPerday','amountToPay','payprof_cnt','shopUser'));
       }

/*shop page shop user page ajax*/
        public function shop_users_ajx(Request $request){

        	$shop_user_sub=$request->all();

           $getUserId = DB::table('config_userId')->get();
           $userId = $getUserId[0]->code;
           $year=date("Y");
           $num1=  $userId+1;
           $id = "MN".$year.$num1;
           $data=array('code'=>$num1);
           DB::table('config_userId')->update($data);
           /*	$userMailCheck= DB::table('users')->where('user_email', $shop_user_sub['email'])->get();
            $usernameCheck= DB::table('users')->where('user_name', $shop_user_sub['name'])->get();
            $userMobCheck= DB::table('users')->where('user_mobile', $shop_user_sub['phone'])->get();*/
            $array_managershop =array();

              if($shop_user_sub['phone']=='9629466278' && $shop_user_sub['email']=='marrynowxxx@gmail.com'){
                $usernameCheck= DB::table('users')->where('user_name', $shop_user_sub['name'])->get();
              }
              elseif($shop_user_sub['email']=='marrynowxxx@gmail.com'){
                 $usernameCheck= DB::table('users')->where('user_name', $shop_user_sub['name'])->get();
                $userMobCheck= DB::table('users')->where('user_mobile', $shop_user_sub['phone'])->get();
              }
              elseif($shop_user_sub['phone'] =='9629466278'){
                $userMailCheck= DB::table('users')->where('user_email', $shop_user_sub['email'])->get();
                $usernameCheck= DB::table('users')->where('user_name', $shop_user_sub['name'])->get();
              }
             

              else{
               //checking user exist or not 
                $userMailCheck= DB::table('users')->where('user_email', $shop_user_sub['email'])->get();
                $usernameCheck= DB::table('users')->where('user_name', $shop_user_sub['name'])->get();
                $userMobCheck= DB::table('users')->where('user_mobile', $shop_user_sub['phone'])->get();
              }

		       if($shop_user_sub['name']==""){
		        	array_push($array_managershop,"please enter username");
		       }
            elseif($shop_user_sub['pwd']==""){
              array_push($array_managershop,"please choose your password");   
           }
           elseif($shop_user_sub['rel_name']==""){
              array_push($array_managershop,"please enter name");   
           }
		       elseif($shop_user_sub['gender']==""){
		        	array_push($array_managershop,"please choose your Gender");   
		       } 
		       elseif($shop_user_sub['dob']==""){
		        	array_push($array_managershop,"please choose your dob");   
		       } 
		       elseif($shop_user_sub['maritalStatus']==""){
		        	array_push($array_managershop,"please choose your maritalStatus");   
		       }
		       elseif($shop_user_sub['caste']==""){
		        	array_push($array_managershop,"please choose your caste");   
		       } 
		       elseif($shop_user_sub['subcaste']==""){
		        	array_push($array_managershop,"please choose your subcaste");   
		       }
		       elseif($shop_user_sub['country']==""){
		        	array_push($array_managershop,"please choose your country");   
		       }
		       elseif($shop_user_sub['email']==""){
		        	array_push($array_managershop,"please choose your email");   
		       }
		       elseif($shop_user_sub['phone']==""){
		        	array_push($array_managershop,"please choose your phone Number");   
		       }
		       /* elseif(isset($usernameCheck[0]->user_name)){
		        array_push($array_managershop,"sorry the user name already exist");
		       }
		       elseif(isset($userMailCheck[0]->user_email)){
		        array_push($array_managershop,"sorry the email already exist");
		       }
		       elseif(isset($userMobCheck[0]->user_mobile)){
		        array_push($array_managershop,"sorry the mobile number already exist");
		       }*/
		        else {
       		$shopUsrdata = array('profile_created_by'=>$shop_user_sub['profCreatedBy'],'user_name'=>$shop_user_sub['name'],'shp_mgr_name'=>$shop_user_sub['rel_name'],'user_gender'=>$shop_user_sub['gender'],'user_dob'=>$shop_user_sub['dob'],'marital_status'=>$shop_user_sub['maritalStatus'],'user_country'=>$shop_user_sub['country'],'user_cast'=>$shop_user_sub['caste'],'user_sub_caste'=>$shop_user_sub['subcaste'],'user_matri_id'=>$id,'user_email'=>$shop_user_sub['email'],'user_mobile'=>$shop_user_sub['phone'],'user_pwd'=>password_hash($shop_user_sub['pwd'], PASSWORD_DEFAULT));

        DB::table('users')->insert($shopUsrdata);
         $shopCredantial = DB::table('users')->max('user_matri_id');
         return response()->json('form saved');
       }
         return response()->json($array_managershop); 
     }

/*shop user shop registeration ajax page*/
    public function shop_shop_reg_ajx(Request $request){

        $shop_shop_user=$request->all();
	
	//create Set userMatri Id 

       $getUserId = DB::table('config_userId')->get();
       $userId = $getUserId[0]->code;
       $year=date("Y");
       $num1=  $userId+1;
       $id = "MN".$year.$num1;
       $data=array('code'=>$num1);
       DB::table('config_userId')->update($data);
       /* $userMailCheck= DB::table('users')->where('user_email', $shop_shop_user['email'])->get();
        $usernameCheck= DB::table('users')->where('user_name', $shop_shop_user['name'])->get();
        $userMobCheck= DB::table('users')->where('user_mobile', $shop_shop_user['phone'])->get();*/

         $array_shop_usr =array();


              if($shop_shop_user['phone']=='9629466278' && $shop_shop_user['email']=='marrynowxxx@gmail.com'){
                $usernameCheck= DB::table('users')->where('user_name', $shop_shop_user['name'])->get();
              }
              elseif($shop_shop_user['email']=='marrynowxxx@gmail.com'){
                 $usernameCheck= DB::table('users')->where('user_name', $shop_shop_user['name'])->get();
                $userMobCheck= DB::table('users')->where('user_mobile', $shop_shop_user['phone'])->get();
              }
              elseif($shop_shop_user['phone'] =='9629466278'){
                $userMailCheck= DB::table('users')->where('user_email', $shop_shop_user['email'])->get();
                $usernameCheck= DB::table('users')->where('user_name', $shop_shop_user['name'])->get();
              }
             

              else{
               //checking user exist or not 
                $userMailCheck= DB::table('users')->where('user_email', $shop_shop_user['email'])->get();
                $usernameCheck= DB::table('users')->where('user_name', $shop_shop_user['name'])->get();
                $userMobCheck= DB::table('users')->where('user_mobile', $shop_shop_user['phone'])->get();
              }

         if($shop_shop_user['name']==""){
          array_push($array_shop_usr,"please enter username");
         }
        elseif($shop_shop_user['pwd']==""){
        array_push($array_shop_usr,"please enter your password");   
       } 
        elseif($shop_shop_user['own_name']==""){
        array_push($array_shop_usr,"please choose your own name");   
       }
       elseif($shop_shop_user['gender']==""){
        array_push($array_shop_usr,"please choose your Gender");   
       }
       elseif($shop_shop_user['dob']==""){
        array_push($array_shop_usr,"please enter your DOB");   
       }  
       elseif($shop_shop_user['shop_name']==""){
        array_push($array_shop_usr,"please enter your Shop name");   
       } 
        elseif($shop_shop_user['shop_type']==""){
        array_push($array_shop_usr,"please enter your Shop type");   
       }  
        elseif($shop_shop_user['shop_pan_no']==""){
        array_push($array_shop_usr,"please enter your Shop Pancard Number");   
       } 
        elseif($shop_shop_user['caste']==""){
        	array_push($array_shop_usr,"please choose your caste");   
       } 
       elseif($shop_shop_user['subcaste']==""){
        	array_push($array_shop_usr,"please choose your subcaste");   
       }
        elseif($shop_shop_user['shop_door_no']==""){
        array_push($array_shop_usr,"please enter your Shop Door Number");   
       }  
       elseif($shop_shop_user['shop_address']==""){
        array_push($array_shop_usr,"please enter your Shop Address");   
       }  
       elseif($shop_shop_user['shop_street']==""){
        array_push($array_shop_usr,"please enter your Shop street");   
       }  
       elseif($shop_shop_user['shop_location']==""){
        array_push($array_shop_usr,"please enter your Shop Location");   
       } 
        elseif($shop_shop_user['shop_state']==""){
        array_push($array_shop_usr,"please choose your Shop state");   
       } 
        elseif($shop_shop_user['shop_district']==""){
        array_push($array_shop_usr,"please choose your Shop District");   
       } 
        elseif($shop_shop_user['shop_village']==""){
        array_push($array_shop_usr,"please choose your Shop village");   
       } 
        elseif($shop_shop_user['shop_taluk']==""){
        array_push($array_shop_usr,"please choose your Shop taluk");   
       }
        elseif($shop_shop_user['shop_website']==""){
        array_push($array_shop_usr,"please enter your Shop Website");   
       } 
       elseif(!filter_var($shop_shop_user['email'], FILTER_VALIDATE_EMAIL)){
        array_push($array_shop_usr,"please enter proper  email format  eg:aaa@aaa.com");
       } 
        elseif(!filter_var($shop_shop_user['office_email'], FILTER_VALIDATE_EMAIL)){
        array_push($array_shop_usr,"please enter proper  office_email format  eg:aaa@aaa.com");
       } 
       elseif($shop_shop_user['shop_gst_no']==""){
        array_push($array_shop_usr,"please enter your GST number");   
       }
        elseif($shop_shop_user['shop_bank_accnt']==""){
        array_push($array_shop_usr,"please enter your Shop Bank account number");   
       } 
       elseif($shop_shop_user['shop_ifsc']==""){
        array_push($array_shop_usr,"please enter your Shop Ifsc Number");   
       } 
       elseif($shop_shop_user['shop_size']==""){
        array_push($array_shop_usr,"please enter your Shop Size");   
       } 
       elseif($shop_shop_user['shop_employees']==""){
        array_push($array_shop_usr,"please enter No of Employees");   
       } 
       elseif($shop_shop_user['shop_service_prvd']==""){
        array_push($array_shop_usr,"please enter shop service provided");   
       }
        elseif($shop_shop_user['shop_yr_estable']==""){
        array_push($array_shop_usr,"please enter No of shop year_establish");   
       } 
        elseif(!is_numeric($shop_shop_user['phone'])){
        array_push($array_shop_usr,"please enter number for phone");
       } 
        elseif(!is_numeric($shop_shop_user['office_phone'])){
        array_push($array_shop_usr,"please enter number for office phone");
       }
        elseif($shop_shop_user['shop_comment']==""){
        array_push($array_shop_usr,"please enter your comment");   
       } 
        elseif($shop_shop_user['shop_term_cond']==""){
        array_push($array_shop_usr,"please Agree the terms and conditions of marrynow");   
       }  
       /*elseif(isset($usernameCheck[0]->user_name)){
        array_push($array_shop_usr,"sorry the user name already exist");
       }
       elseif(isset($userMailCheck[0]->user_email)){
        array_push($array_shop_usr,"sorry the email already exist");
       }
       elseif(isset($userMobCheck[0]->user_mobile)){
        array_push($array_shop_usr,"sorry the mobile number already exist");
       }*/
       else {
       $shop_usrdata = array('profile_created_by'=>$shop_shop_user['profCreatedBy_sh'],'user_name'=>$shop_shop_user['name'],'shp_mgr_name'=>$shop_shop_user['own_name'],'ifsc_no'=>$shop_shop_user['shop_ifsc'],'office_email'=>$shop_shop_user['office_email'],'shp_service_provid'=>$shop_shop_user['shop_service_prvd'],'shp_years_established'=>$shop_shop_user['shop_yr_estable'],'office_phone'=>$shop_shop_user['office_phone'],'user_gender'=>$shop_shop_user['gender'],'user_dob'=>$shop_shop_user['dob'],'shop_name'=>$shop_shop_user['shop_name'],'user_cast'=>$shop_shop_user['caste'],'user_sub_caste'=>$shop_shop_user['subcaste'],'shop_type'=>$shop_shop_user['shop_type'],'shop_pan_no'=>$shop_shop_user['shop_pan_no'],'shop_door_number'=>$shop_shop_user['shop_door_no'],'shop_address'=>$shop_shop_user['shop_address'],'shop_street'=>$shop_shop_user['shop_street'],'shop_location'=>$shop_shop_user['shop_location'],'shop_website'=>$shop_shop_user['shop_website'],'shop_email'=>$shop_shop_user['email'],'shop_gstin'=>$shop_shop_user['shop_gst_no'],'shop_acnt_num'=>$shop_shop_user['shop_bank_accnt'],'shop_size'=>$shop_shop_user['shop_size'],'shop_employees_count'=>$shop_shop_user['shop_employees'],'shop_state'=>$shop_shop_user['shop_state'],'shop_district'=>$shop_shop_user['shop_district'],'shop_village'=>$shop_shop_user['shop_village'],'shop_taluk'=>$shop_shop_user['shop_taluk'],/*'shop_ward_number'=>$shop_shop_user['shop_ward'],*/'user_mobile'=>$shop_shop_user['phone'],'shop_comment'=>$shop_shop_user['shop_comment'],'role'=>2, 'user_matri_id'=>$id, 'profile_completed_status'=>1, 'user_pwd'=>password_hash($shop_shop_user['pwd'], PASSWORD_DEFAULT));

        DB::table('users')->insert($shop_usrdata);
         $shopCredantial = DB::table('users')->max('user_matri_id');
         return response()->json('form saved');
       }
         return response()->json($array_shop_usr); 
    }

 /*shop page  created_profile ajax shoper page*/

    public function created_prof_shoper_ajx(Request $request){

      $created_prof_shoper=$request->all();
       $creted_pf_shoper= DB::table('users')->where('profile_created_by',$created_prof_shoper['profCreatedBy_cs'])->where('role','2')->get();
       return response()->json($creted_pf_shoper);
    }

/*shop user register image upload*/

     public function uploadownerpic(Request $request){
          session_start();
          $Id=$_SESSION['id'];
          if ($request->file('pic')) {
            $fileName = basename($_FILES["pic"]["name"]);
            $userPhoto = $request->file('pic')->storeAs('/',$fileName);
            $data=array('profile_image'=>$fileName);
            DB::table('bride_basic_profile')->where('user_id', $Id)->update($data);
        }
    return response()->json($fileName);
    }   

/*shop user register govtproof upload*/

    public function uploadgovtprof(Request $request){
          session_start();
          $Id=$_SESSION['id'];
          if ($request->file('gprof')) {
            $fileName = basename($_FILES["gprof"]["name"]);
            $userPhoto = $request->file('gprof')->storeAs('/',$fileName);
            $data=array('profile_image'=>$fileName);
            DB::table('bride_basic_profile')->where('user_id', $Id)->update($data);
        }
    return response()->json($fileName);
    }

}
