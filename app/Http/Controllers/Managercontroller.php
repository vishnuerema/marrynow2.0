<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use session;
use Cache;

class Managercontroller extends Controller
{
   
/*manager page manager user page*/
 	public function manager_users(Request $request){
       /* $caste = DB::table('caste_master')->get();*/
        $created_mast = DB::table('profilecreatedby_master')->get();
        $country_mast = DB::table('country_master')->get();
        $marital_status = DB::table('marital_status_master')->get();
        /*$sub_caste = DB::table('subcaste_master')->get();*/
        $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
        
          $shopdistrict= DB::table('ward_master')->select('state_name')->distinct()->get();

          $shopvillage= DB::table('mynadar_village')->get();
          $shoptaluk= DB::table('mynadar_taluk')->get();
          // $shopstate= DB::table('states')->get();
        /*$shop_district= DB::table('mynadar_district')->get();
        $shop_village= DB::table('mynadar_village')->get();
        $shop_taluk= DB::table('mynadar_taluk')->get();*/
       $shop_state= DB::table('states')->get();
        $manager_pay_amt_per_pf=DB::table('manager_payment')->where('id','1')->get();

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
           $validArray= DB::table('users')->where('profile_created_by',$userId)->get();
          }

          return view('shopManager/manager_management', compact('created_mast','country_mast','caste','sub_caste','marital_status','registeredProfiles','userId', 'registeredProfiles','shopdistrict','shop_village','shop_taluk','shop_state','validArray','manager_pay_amt_per_pf', 'profsPerday', 'profsPerweek', 'profsPerMonth', 'profsPerday', 'payprof_cnt', 'amountToPay','shopUser','validArray'));
        }

/**manager page manager user page ajax*/
    public function manager_users_ajx(Request $request){

          //create Set userMatri Id 

       $getUserId = DB::table('config_userId')->get();
       $userId = $getUserId[0]->code;
       $year=date("Y");
       $num1=  $userId+1;
       $id = "MN".$year.$num1;
       $data=array('code'=>$num1);
       DB::table('config_userId')->update($data);

       $profCreatedBy= $request->input('profCreatedBy');$name= $request->input('name');$prof_rel_name= $request->input('prof_rel_name');$gender= $request->input('gender');$dob= $request->input('dob');$maritalStatus= $request->input("maritalStatus");$caste= $request->input("caste");$subcaste= $request->input("subcaste");$country= $request->input("country");$email= $request->input('email'); $phone= $request->input('phone'); $pwd= $request->input('pwd');

       if($phone=='9629466278' && $email=='marrynowxxx@gmail.com'){
        $usernameCheck= DB::table('users')->where('user_name', $name)->get();
      }
      elseif($email=='marrynowxxx@gmail.com'){
         $usernameCheck= DB::table('users')->where('user_name', $name)->get();
        $userMobCheck= DB::table('users')->where('user_mobile', $phone)->get();
      }
      elseif($phone =='9629466278'){
        $userMailCheck= DB::table('users')->where('user_email', $email)->get();
        $usernameCheck= DB::table('users')->where('user_name', $name)->get();
      }
     

      else{
       //checking user exist or not 
        $userMailCheck= DB::table('users')->where('user_email', $email)->get();
        $usernameCheck= DB::table('users')->where('user_name', $name)->get();
        $userMobCheck= DB::table('users')->where('user_mobile', $phone)->get();
      }

          $shopUsrdata = array('profile_created_by'=>$profCreatedBy,'user_name'=>$name,'shp_mgr_name'=>$prof_rel_name, 'user_gender'=>$gender,'user_dob'=>$dob,'marital_status'=>$maritalStatus,'user_country'=>$country,'user_cast'=>$caste,'user_sub_caste'=>$subcaste,'user_email'=>$email,'user_matri_id'=>$id,'user_mobile'=>$phone,'user_pwd'=>password_hash($pwd, PASSWORD_DEFAULT));

        DB::table('users')->insert($shopUsrdata);
         return response()->json('success'); 
    }

/*manager page shopmanager user page*/
    public function shopmanager_ajx(Request $request){
   
        $shop_manageruser=$request->all();

  	//create Set userMatri Id 

       $getUserId = DB::table('config_userId')->get();
       $userId = $getUserId[0]->code;
       $year=date("Y");
       $num1=  $userId+1;
       $id = "MN".$year.$num1;
       $data=array('code'=>$num1);
       DB::table('config_userId')->update($data);

       /*$userMailCheck= DB::table('users')->where('user_email', $shop_manageruser['email'])->get();
        $usernameCheck= DB::table('users')->where('user_name', $shop_manageruser['name'])->get();
        $userMobCheck= DB::table('users')->where('user_mobile', $shop_manageruser['phone'])->get();*/

      $array_managershop =array();

              if($shop_manageruser['phone']=='9629466278' && $shop_manageruser['email']=='marrynowxxx@gmail.com'){
                $usernameCheck= DB::table('users')->where('user_name', $shop_manageruser['name'])->get();
              }
              elseif($shop_manageruser['email']=='marrynowxxx@gmail.com'){
                 $usernameCheck= DB::table('users')->where('user_name', $shop_manageruser['name'])->get();
                $userMobCheck= DB::table('users')->where('user_mobile', $shop_manageruser['phone'])->get();
              }
              elseif($shop_manageruser['phone'] =='9629466278'){
                $userMailCheck= DB::table('users')->where('user_email', $shop_manageruser['email'])->get();
                $usernameCheck= DB::table('users')->where('user_name', $shop_manageruser['name'])->get();
              }
             

              else{
               //checking user exist or not 
                $userMailCheck= DB::table('users')->where('user_email', $shop_manageruser['email'])->get();
                $usernameCheck= DB::table('users')->where('user_name', $shop_manageruser['name'])->get();
                $userMobCheck= DB::table('users')->where('user_mobile', $shop_manageruser['phone'])->get();
              }

      
       if($shop_manageruser['name']==""){
        array_push($array_managershop,"please enter username");
       }
        elseif($shop_manageruser['pwd']==""){
        array_push($array_managershop,"please enter your password");   
       } 
        elseif($shop_manageruser['own_name']==""){
        array_push($array_managershop,"please choose your own name");   
       }
       elseif($shop_manageruser['gender']==""){
        array_push($array_managershop,"please choose your Gender");   
       }
       elseif($shop_manageruser['dob']==""){
        array_push($array_managershop,"please enter your DOB");   
       }  
       elseif($shop_manageruser['shop_name']==""){
        array_push($array_managershop,"please enter your Shop name");   
       } 
        elseif($shop_manageruser['shop_type']==""){
        array_push($array_managershop,"please enter your Shop type");   
       }  
        elseif($shop_manageruser['shop_pan_no']==""){
        array_push($array_managershop,"please enter your Shop Pancard Number");   
       } 
       elseif($shop_manageruser['caste']==""){
        	array_push($array_managershop,"please choose your caste");   
       } 
       elseif($shop_manageruser['subcaste']==""){
        	array_push($array_managershop,"please choose your subcaste");   
       }
        elseif($shop_manageruser['shop_door_no']==""){
        array_push($array_managershop,"please enter your Shop Door Number");   
       }  
       elseif($shop_manageruser['shop_address']==""){
        array_push($array_managershop,"please enter your Shop Address");   
       }  
       elseif($shop_manageruser['shop_street']==""){
        array_push($array_managershop,"please enter your Shop street");   
       }  
       elseif($shop_manageruser['shop_location']==""){
        array_push($array_managershop,"please enter your Shop Location");   
       } 
       elseif($shop_manageruser['shop_state']==""){
        array_push($array_managershop,"please choose your Shop state");   
       } 
        elseif($shop_manageruser['shop_district']==""){
        array_push($array_managershop,"please choose your Shop District");   
       } 
        elseif($shop_manageruser['shop_village']==""){
        array_push($array_managershop,"please choose your Shop village");   
       } 
        elseif($shop_manageruser['shop_taluk']==""){
        array_push($array_managershop,"please choose your Shop taluk");   
       }
      /* elseif($shop_manageruser['shop_ward']==""){
        array_push($array_managershop,"please choose your Shop Ward Number");   
       }*/
        elseif($shop_manageruser['shop_website']==""){
        array_push($array_managershop,"please enter your Shop Website");   
       } 
       elseif(!filter_var($shop_manageruser['email'], FILTER_VALIDATE_EMAIL)){
        array_push($array_managershop,"please enter proper  email format  eg:aaa@aaa.com");
       } 
       elseif($shop_manageruser['shop_gst_no']==""){
        array_push($array_managershop,"please enter your GST number");   
       }
        elseif($shop_manageruser['shop_bank_accnt']==""){
        array_push($array_managershop,"please enter your Shop Bank account number");   
       } 
        elseif($shop_manageruser['shop_ifsc']==""){
        array_push($array_managershop,"please enter your Shop Ifsc Number");   
       } 
       elseif($shop_manageruser['shop_size']==""){
        array_push($array_managershop,"please enter your Shop Size");   
       } 
       elseif($shop_manageruser['shop_employees']==""){
        array_push($array_managershop,"please enter No of Employees");   
       } 
        elseif(!is_numeric($shop_manageruser['phone'])){
        array_push($array_managershop,"please enter number for phone");
       }  
        elseif($shop_manageruser['shop_comment']==""){
        array_push($array_managershop,"please enter your comment");   
       } 
        elseif($shop_manageruser['shop_term_cond']==""){
        array_push($array_managershop,"please Agree the terms and conditions of marrynow");
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
       $shopdata = array('profile_created_by'=>$shop_manageruser['profCreatedBy'],'shp_mgr_name'=>$shop_manageruser['own_name'],'ifsc_no'=>$shop_manageruser['shop_ifsc'],'user_name'=>$shop_manageruser['name'],'user_gender'=>$shop_manageruser['gender'],'user_dob'=>$shop_manageruser['dob'],'shop_name'=>$shop_manageruser['shop_name'],'shop_type'=>$shop_manageruser['shop_type'],'user_cast'=>$shop_manageruser['caste'],'user_sub_caste'=>$shop_manageruser['subcaste'],'shop_pan_no'=>$shop_manageruser['shop_pan_no'],'shop_door_number'=>$shop_manageruser['shop_door_no'],'shop_address'=>$shop_manageruser['shop_address'],'shop_street'=>$shop_manageruser['shop_street'],'shop_location'=>$shop_manageruser['shop_location'],'shop_website'=>$shop_manageruser['shop_website'],'shop_email'=>$shop_manageruser['email'],'shop_gstin'=>$shop_manageruser['shop_gst_no'],'shop_acnt_num'=>$shop_manageruser['shop_bank_accnt'],'shop_size'=>$shop_manageruser['shop_size'],'shop_employees_count'=>$shop_manageruser['shop_employees'],'shop_state'=>$shop_manageruser['shop_state'],'shop_district'=>$shop_manageruser['shop_district'],'shop_village'=>$shop_manageruser['shop_village'],'shop_taluk'=>$shop_manageruser['shop_taluk'],/*'shop_ward_number'=>$shop_manageruser['shop_ward'],*/'user_mobile'=>$shop_manageruser['phone'],'shop_comment'=>$shop_manageruser['shop_comment'],'role'=>2,'user_matri_id'=>$id, 'profile_completed_status'=>1, 'user_pwd'=>password_hash($shop_manageruser['pwd'], PASSWORD_DEFAULT));

        DB::table('users')->insert($shopdata);
         $shopCredantial = DB::table('users')->max('user_matri_id');
         return response()->json('form saved');
       }
         return response()->json($array_managershop); 
    }

/*manager page created_profile ajax manager page*/

    public function created_prof_ajx(Request $request){

      $created_prof=$request->all();

       $creted_pf= DB::table('users')->where('profile_created_by',$created_prof)->where('role','2')->get();
       return response()->json($creted_pf);
    }

}
