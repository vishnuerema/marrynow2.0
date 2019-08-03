<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use session;
use Cache;

class Admincontroller extends Controller
{
  //admin control goes here
        public function admin(){
           $total_members = DB::table('users')->where('user_soft_delete','!=','1')->get();
           $total_members_count=count($total_members);
           $male_members=DB::table('users')->where('user_gender','male')->where('user_soft_delete','!=','1')->get();
           $male_members_count=count($male_members);
           $female_members=DB::table('users')->where('user_gender','female')->where('user_soft_delete','!=','1')->get();
           $female_members_count=count($female_members);
            $paid=DB::table('users')->where('payment_status','!=','0')->where('user_soft_delete','!=','1')->get();
            $total_paid_count=count($paid);
            $unpaid=DB::table('users')->where('payment_status','=','0')->where('user_soft_delete','!=','1')->get();
            $total_unpaid_count=count($unpaid);

             $y_day = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
              $yesterday= $y_day.' 00:00:00';
              $yesterdayEnd= $y_day.' 23:59:59';
              $Today= date("Y-m-d").' 00:00:00';
              $TodayEnd= date("Y-m-d").' 23:59:59';

      $paidToday=DB::table('users')->where('payment_status', '1')->where('paid_ts', date("Y-m-d"))->where('user_soft_delete','!=','1')->get();
  
      $memToday=DB::table('users')->whereBetween('created_ts', [$Today, $TodayEnd])->where('user_soft_delete','!=','1')->get();

      $memYsday=DB::table('users')->whereBetween('created_ts', [$yesterday, $yesterdayEnd])->where('user_soft_delete','!=','1')->get();
                 $cntPayTdy=count($paidToday);
                 $memTdy=count($memToday);
                 $memYdy=count($memYsday);
        return view('admin/login/home', compact('total_members_count','male_members_count','female_members_count','total_unpaid_count','total_paid_count','cntPayTdy','memTdy','memYdy','memToday','memYsday','paidToday'));
        }

//admin search
      public function adminsearch(){
       
        return view('admin/login/admin_search');
        }

 //admin search ajax
      	public function adminsearchajx(request $req){
              $slct_adm_srch= $req->input('select_adm_search');
              $inpt_adm_srch= $req->input('inupt_adm_search');
              if($slct_adm_srch == 1){
               $data = DB::table('bride_basic_profile')->leftjoin('bride_secondary_profile','bride_basic_profile.user_idk','=','bride_secondary_profile.user_idk')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('profile_name',$inpt_adm_srch)->get();
                }
                else if($slct_adm_srch == 2){
                  $data = DB::table('bride_basic_profile')->leftjoin('bride_secondary_profile','bride_basic_profile.user_idk','=','bride_secondary_profile.user_idk')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('prof_user_parent_continfo',$inpt_adm_srch)->get();
                } 
                else if($slct_adm_srch == 3){
                  $data = DB::table('bride_basic_profile')->leftjoin('bride_secondary_profile','bride_basic_profile.user_idk','=','bride_secondary_profile.user_idk')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('prof_user_email',$inpt_adm_srch)->get();
                } 
                else if($slct_adm_srch == 4){
                  $data = DB::table('bride_basic_profile')->leftjoin('bride_secondary_profile','bride_basic_profile.user_idk','=','bride_secondary_profile.user_idk')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('user_matri_id',$inpt_adm_srch)->get();
                }
       return response()->json($data);
        }

//admin search profile delete 
         public function adminsearch_pro_dlt_ajx(request $request){
          $delete_prof_search = $request->all();
        $delUsers = array('user_soft_delete'=>"1");
        if(isset($delete_prof_search['delete_prof'])){
              DB::table('users')->where('user_id',$delete_prof_search['delete_prof'])->update($delUsers); 
          return response()->json('deleted');
        }
         }
        
//admin regUsers
       public function regUsers(){
        $regUsers=DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_soft_delete','!=','1')->orderBy('users.created_ts', 'desc')->get();

        return view('admin/login/registered-users', compact('regUsers'));
        }

//admin payment_history
        public function payment_history(){
          $pay_history_silver=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','500')->where('basic_soft_delete','!=','1')->get();
          $pay_history_gold=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','1000')->where('basic_soft_delete','!=','1')->get();
          $pay_history_platinum=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','1500')->where('basic_soft_delete','!=','1')->get();
          $pay_history_emerald=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','2000')->where('basic_soft_delete','!=','1')->get();
          $pay_history_sapphire=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','3500')->where('basic_soft_delete','!=','1')->get();
          $pay_history_pearl=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','5000')->where('basic_soft_delete','!=','1')->get();
          $pay_history_rubby=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','10000')->where('basic_soft_delete','!=','1')->get();
          $pay_history_alexn=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','20000')->where('basic_soft_delete','!=','1')->get();
          $pay_history_opal=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->where('payment_amount','50000')->where('basic_soft_delete','!=','1')->get();
          $pay_history_garnet=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','100000')->where('basic_soft_delete','!=','1')->get();
           $pay_history_diamond=DB::table('payment_audit')->leftjoin('bride_basic_profile','payment_audit.user_idk','=','bride_basic_profile.user_idk')->leftjoin('users','payment_audit.user_idk','=','users.user_id')->where('payment_amount','500000')->where('basic_soft_delete','!=','1')->get();
         
        return view('admin/login/payment_history',compact('pay_history_silver','pay_history_gold','pay_history_platinum','pay_history_emerald','pay_history_sapphire','pay_history_pearl','pay_history_rubby','pay_history_alexn','pay_history_opal','pay_history_garnet','pay_history_diamond'));
        } 

//admin chat_history
        public function chat_history(){

        return view('admin/login/chat_history');
        }

/*admin shop user register page*/

    public function shop_reg(){
        /*$shopdistrict= DB::table('mynadar_district')->get();
        $shopvillage= DB::table('mynadar_village')->get();
        $shoptaluk= DB::table('mynadar_taluk')->get();*/
        $shopdistrict= DB::table('ward_master')->select('state_name')->distinct()->get();
       $shopstate= DB::table('states')->get();
       $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
        return view('admin/login/admin_shop_reg',compact('shopdistrict','shopstate','caste'));
        }

/*admin manager register page*/

     public function shop_manger_reg(){
            /*$managerdistrict= DB::table('mynadar_district')->get();
            $managervillage= DB::table('mynadar_village')->get();
            $managertaluk= DB::table('mynadar_taluk')->get();*/
             $managerdistrict= DB::table('ward_master')->select('state_name')->distinct()->get();
            $managerstate= DB::table('states')->get();
             $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
        return view('admin/login/admin_manager_reg',compact('managerdistrict','caste','managervillage','managertaluk','managerstate'));
      }
 
/*admin manager payment page*/
	 public function adm_manager_payment(){
	    $shop_paid=DB::table('users')->where('role','3')->where('claimed_status','1')->get();

	  return view('admin/login/admin_manager_payment',compact('shop_paid'));
	  }

  /*admin shop payment page*/
	 public function adm_shop_payment(){

	        $shop_paid=DB::table('users')->where('role','2')->where('claimed_status','1')->get();

	    return view('admin/login/admin_shop_payment', compact('shop_paid'));
	  }

//admin login
	   public function adminlogin(){

       return view('admin/login/adminlogin');
       }

//admin regdirect
        public function regUsersRedirect(){

        return view('admin/login/adminurl/regusers');
        }

//admin profile view
        public function adminProfView(request $req){
          $curId=$req->input('cid');
           $baseData=DB::table('bride_basic_profile')->where('user_idk',$curId)->get();
           $secData=DB::table('bride_secondary_profile')->where('user_idk',$curId)->get();
         return response()->json(array('basic'=>$baseData,'sec'=>$secData));
        } 

//admin Chat view
         public function adminchatView(request $req){
          $curId=$req->input('cid');
           $baseData=DB::table('bride_basic_profile')->where('user_idk',$curId)->get();
           $secData=DB::table('bride_secondary_profile')->where('user_idk',$curId)->get();
         return response()->json(array('basic'=>$baseData,'sec'=>$secData));
        }

//admin delete user
        public function adminDelusers(request $req){
          $currId=$req->input('cid');
           $userDat=array('user_soft_delete'=>'1');
           $baseDat=array('basic_soft_delete'=>'1');
           $secDat=array('sec_soft_delete'=>'1');
            DB::table('users')->where('user_id',$currId)->update($userDat);
            DB::table('bride_basic_profile')->where('user_idk',$currId)->update($baseDat);
            DB::table('bride_secondary_profile')->where('user_idk',$currId)->update($secDat);
        return view('admin/login/adminurl/regusers');
        }

//admin password change
        public function adminUsrPwdChg(request $req){
          $currId=$req->input('cid');
          $newPass=$req->input('pass');
           $passData=array('user_pwd'=>password_hash($newPass, PASSWORD_DEFAULT));
          DB::table('users')->where('user_id',$currId)->update($passData);
        return view('admin/login/adminurl/regusers');
        }

//admin Chat history
        public function adminChatHist(request $req){
	      $usrId =$req->input('cid');
	         $data = $this->getChatHistoryByUser($usrId);
	           $hist=json_decode($data);

	            $chat_emty_array=array();

	           for($i=0; $i<count($hist); $i++){
	              $chat_tbl=DB::table('bride_basic_profile')->where('user_idk',$hist[$i]->to)->get();
	              array_push( $chat_emty_array, $chat_tbl);
	           }
	         return response()->json($chat_emty_array); 
	    }

//admin shop user register ajax page

    public function admin_shop_reg_ajx(Request $request){

        $shop_user=$request->all();
          //create Set userMatri Id 
       $getUserId = DB::table('config_userId')->get();
       $userId = $getUserId[0]->code;
       $year=date("Y");
       $num1=  $userId+1;
       $id = "MN".$year.$num1;
       $data=array('code'=>$num1);
       DB::table('config_userId')->update($data);

         $array_shop =array();
         if($shop_user['name']==""){
        array_push($array_shop,"please enter username");
       }
        elseif($shop_user['pwd']==""){
        array_push($array_shop,"please enter your password");   
       } 
       elseif($shop_user['own_name']==""){
        array_push($array_shop,"please choose your own name");   
       }
       elseif($shop_user['gender']==""){
        array_push($array_shop,"please choose your Gender");   
       }
       elseif($shop_user['dob']==""){
        array_push($array_shop,"please enter your DOB");   
       }  
       elseif($shop_user['shop_name']==""){
        array_push($array_shop,"please enter your Shop name");   
       } 
        elseif($shop_user['shop_type']==""){
        array_push($array_shop,"please enter your Shop type");   
       }  
        elseif($shop_user['shop_pan_no']==""){
        array_push($array_shop,"please enter your Pancard Number");   
       } 
       elseif($shop_user['caste']==""){
        array_push($array_shop,"please enter your  caste");   
       } 
       elseif($shop_user['subcaste']==""){
        array_push($array_shop,"please enter your subcaste");   
       } 
        elseif($shop_user['shop_door_no']==""){
        array_push($array_shop,"please enter your Shop Door Number");   
       }  
       elseif($shop_user['shop_address']==""){
        array_push($array_shop,"please enter your Shop Address");   
       }  
       elseif($shop_user['shop_street']==""){
        array_push($array_shop,"please enter your Shop street");   
       }  
       elseif($shop_user['shop_location']==""){
        array_push($array_shop,"please enter your Shop Location");   
       } 
        elseif($shop_user['shop_state']==""){
        array_push($array_shop,"please choose your Shop state");   
       } 
        elseif($shop_user['shop_district']==""){
        array_push($array_shop,"please choose your Shop District");   
       } 
        elseif($shop_user['shop_village']==""){
        array_push($array_shop,"please choose your Shop village");   
       } 
        elseif($shop_user['shop_taluk']==""){
        array_push($array_shop,"please choose your Shop taluk");   
       }
      /* elseif($shop_user['shop_ward']==""){
        array_push($array_shop,"please choose your Shop Ward Number");   
       }*/
        elseif($shop_user['shop_website']==""){
        array_push($array_shop,"please enter your Shop Website");   
       } 
       elseif(!filter_var($shop_user['email'], FILTER_VALIDATE_EMAIL)){
        array_push($array_shop,"please enter proper  email format  eg:aaa@aaa.com");
       } 
        elseif(!filter_var($shop_user['office_email'], FILTER_VALIDATE_EMAIL)){
        array_push($array_shop,"please enter proper  office_email format  eg:aaa@aaa.com");
       } 
       elseif($shop_user['shop_gst_no']==""){
        array_push($array_shop,"please enter your GST number");   
       }
        elseif($shop_user['shop_bank_accnt']==""){
        array_push($array_shop,"please enter your Shop Bank account number");   
       } 
       elseif($shop_user['shop_ifsc']==""){
        array_push($array_shop,"please enter your Shop Ifsc Number");   
       } 
       elseif($shop_user['shop_size']==""){
        array_push($array_shop,"please enter your Shop Size");   
       } 
       elseif($shop_user['shop_employees']==""){
        array_push($array_shop,"please enter No of Employees");   
       }
        elseif($shop_user['shop_service_prvd']==""){
        array_push($array_shop,"please enter shop service provided");   
       }
        elseif($shop_user['shop_yr_estable']==""){
        array_push($array_shop,"please enter No of shop year_establish");   
       } 
        elseif(!is_numeric($shop_user['phone'])){
        array_push($array_shop,"please enter number for phone");
       }  
       elseif(!is_numeric($shop_user['office_phone'])){
        array_push($array_shop,"please enter number for office phone");
       }  
        elseif($shop_user['shop_comment']==""){
        array_push($array_shop,"please enter your comment");   
       } 
        elseif($shop_user['shop_term_cond']==""){
        array_push($array_shop,"please Agree the terms and conditions of marrynow");   
       } 
       else {
       $shopdata = array('user_name'=>$shop_user['name'],'shp_mgr_name'=>$shop_user['own_name'],'ifsc_no'=>$shop_user['shop_ifsc'],'user_gender'=>$shop_user['gender'],'user_dob'=>$shop_user['dob'],'shop_name'=>$shop_user['shop_name'],'shop_type'=>$shop_user['shop_type'],'shop_pan_no'=>$shop_user['shop_pan_no'],'shop_door_number'=>$shop_user['shop_door_no'],'shop_address'=>$shop_user['shop_address'],'shop_street'=>$shop_user['shop_street'],'shop_location'=>$shop_user['shop_location'],'shop_website'=>$shop_user['shop_website'],'shop_email'=>$shop_user['email'],'office_email'=>$shop_user['office_email'],'shop_gstin'=>$shop_user['shop_gst_no'],'shop_acnt_num'=>$shop_user['shop_bank_accnt'],'shop_size'=>$shop_user['shop_size'],'shop_employees_count'=>$shop_user['shop_employees'],'shop_state'=>$shop_user['shop_state'],'shop_district'=>$shop_user['shop_district'],'shop_village'=>$shop_user['shop_village'],'user_cast'=>$shop_user['caste'],'user_sub_caste'=>$shop_user['subcaste'],'shop_taluk'=>$shop_user['shop_taluk'],/*'shop_ward_number'=>$shop_user['shop_ward'],*/'user_mobile'=>$shop_user['phone'],'shp_service_provid'=>$shop_user['shop_service_prvd'],'shp_years_established'=>$shop_user['shop_yr_estable'],'office_phone'=>$shop_user['office_phone'],'shop_comment'=>$shop_user['shop_comment'],'role'=>2, 'user_matri_id'=>$id, 'profile_completed_status'=>1, 'user_pwd'=>password_hash($shop_user['pwd'], PASSWORD_DEFAULT));

        DB::table('users')->insert($shopdata);
         $shopCredantial = DB::table('users')->max('user_matri_id');
         return response()->json('form saved');
       }
         return response()->json($array_shop); 
    }

 /*admin manager register page ajax*/

    public function manager_reg_ajx(Request $request){

       $manager_shop=$request->all();
          
      // Set userMatri Id 
       $getUserId = DB::table('config_userId')->get();
       $userId = $getUserId[0]->code;
       $year=date("Y");
       $num1=  $userId+1;
       $id = "MN".$year.$num1;
       $data=array('code'=>$num1);
       DB::table('config_userId')->update($data);
       	/*$userMailCheck= DB::table('users')->where('user_email', $manager_shop['email'])->get();
        $usernameCheck= DB::table('users')->where('user_name', $manager_shop['name'])->get();
        $userMobCheck= DB::table('users')->where('user_mobile', $manager_shop['phone'])->get();*/

       $array_manager =array();
       if($manager_shop['name']==""){
        array_push($array_manager,"please enter username");
       }
        elseif($manager_shop['pwd']==""){
        array_push($array_manager,"please enter your password");   
       } 
       elseif($manager_shop['own_name']==""){
        array_push($array_manager,"please choose your own name");   
       }
       elseif($manager_shop['gender']==""){
        array_push($array_manager,"please choose your Gender");   
       }
       elseif($manager_shop['dob']==""){
        array_push($array_manager,"please choose your DOB");   
       }  
       elseif($manager_shop['caste']==""){
        array_push($array_manager,"please enter your  caste");   
       } 
       elseif($manager_shop['subcaste']==""){
        array_push($array_manager,"please enter your subcaste");   
       } 
       elseif($manager_shop['manager_street']==""){
        array_push($array_manager,"please enter your manager street");   
       } 
        elseif($manager_shop['shop_location']==""){
        array_push($array_manager,"please enter your Shop Location");   
       } 
        elseif($manager_shop['manager_state']==""){
        array_push($array_manager,"please choose your manager state");   
       } 
        elseif($manager_shop['manager_district']==""){
        array_push($array_manager,"please choose your manager District");   
       } 
        elseif($manager_shop['manager_taluk']==""){
        array_push($array_manager,"please choose your manager taluk");   
       }
        elseif($manager_shop['manager_village']==""){
        array_push($array_manager,"please choose your manager village");   
       } 
       elseif($manager_shop['manager_acct_no']==""){
        array_push($array_manager,"please enter your manager account number");   
       } 
       elseif($manager_shop['shop_ifsc']==""){
        array_push($array_manager,"please enter your Shop Ifsc Number");   
       } 
        elseif(!is_numeric($manager_shop['phone'])){
        array_push($array_manager,"please enter number for phone");
       }  
       elseif(!filter_var($manager_shop['email'], FILTER_VALIDATE_EMAIL)){
        array_push($array_manager,"please enter proper  email format  eg:aaa@aaa.com");
       } 
        elseif($manager_shop['comment']==""){
        array_push($array_manager,"please enter your comment");   
       }
        elseif($manager_shop['shop_term_cond']==""){
        array_push($array_manager,"please Agree the terms and conditions of marrynow");   
       } 
       /* elseif(isset($usernameCheck[0]->user_name)){
        array_push($array_manager,"sorry the user name already exist");
       }
       elseif(isset($userMailCheck[0]->user_email)){
        array_push($array_manager,"sorry the email already exist");
       }
       elseif(isset($userMobCheck[0]->user_mobile)){
        array_push($array_manager,"sorry the mobile number already exist");
       } */
      
       else {
       $managerdata = array('user_name'=>$manager_shop['name'],'shp_mgr_name'=>$manager_shop['own_name'],'ifsc_no'=>$manager_shop['shop_ifsc'],'user_gender'=>$manager_shop['gender'],'user_email'=>$manager_shop['email'],'shop_location'=>$manager_shop['shop_location'],'user_mobile'=>$manager_shop['phone'],'user_dob'=>$manager_shop['dob'],'manager_street'=>$manager_shop['manager_street'],'manager_ac_number'=>$manager_shop['manager_acct_no'],'manager_state'=>$manager_shop['manager_state'],'manager_district'=>$manager_shop['manager_district'],'manager_village'=>$manager_shop['manager_village'],'user_cast'=>$manager_shop['caste'],'user_sub_caste'=>$manager_shop['subcaste'],'manager_taluk'=>$manager_shop['manager_taluk'],'manager_comment'=>$manager_shop['comment'],'role'=>3,/*'manager_ward'=>$manager_shop['manager_ward'],*/'user_matri_id'=>$id, 'profile_completed_status'=>1, 'user_pwd'=>password_hash($manager_shop['pwd'], PASSWORD_DEFAULT));
        
         DB::table('users')->insert($managerdata);
         $shopCredantial = DB::table('users')->max('user_matri_id');
         return response()->json('form saved');
       }
         return response()->json($array_manager);  
    } 

/*admin shop pay ajax*/
	 public function admn_shop_pay_rld(request $request){
	           $admin_shop_py=$request->all();
             print_r($admin_shop_py);
         if($admin_shop_py['type']=='shop_paymt'){
             $shop_pay_data = array('cost_per_profile'=>$admin_shop_py['admn_shop_payment']);
             DB::table('shop_payment')->where('id','1')->update($shop_pay_data);
         }
         elseif($admin_shop_py['type']=='day'){
             $daytarget= array('cost_per_day'=>$admin_shop_py['admn_shop_payment_day']);
             DB::table('shop_payment')->where('id','1')->update($daytarget);
         }
         elseif($admin_shop_py['type']=='week'){

             $weektarget = array('cost_per_week'=>$admin_shop_py['admn_shop_payment_wek']);
             DB::table('shop_payment')->where('id','1')->update($weektarget);
         }
         elseif($admin_shop_py['type']=='month'){

             $monthtarget = array('cost_per_month'=>$admin_shop_py['admn_shop_payment_mth']);
             DB::table('shop_payment')->where('id','1')->update($monthtarget);
         }

	    return response()->json('success');
	  }

/*admin manager pay ajax*/
	   public function admn_manager_pay_rld(request $request){

	        $admin_manager_py=$request->all();

          if($admin_manager_py['type']=='manager_target'){
             $manager_pay_data = array('payment_per_profile'=>$admin_manager_py['admin_manager_paymt']);
             DB::table('manager_payment')->where('id','1')->update($manager_pay_data);
           }
           elseif($admin_manager_py['type']=='day'){
             $manager_pay_data_day = array('mngr_target_day'=>$admin_manager_py['admin_manager_paymt_day']);
             DB::table('manager_payment')->where('id','1')->update($manager_pay_data_day);
           }
           elseif($admin_manager_py['type']=='week'){
             $manager_pay_data_wek = array('mngr_target_week'=>$admin_manager_py['admin_manager_paymt_wek']);
             DB::table('manager_payment')->where('id','1')->update($manager_pay_data_wek);
           }
           elseif($admin_manager_py['type']=='month'){
  	         $manager_pay_data_mnth = array('mngr_target_month'=>$admin_manager_py['admin_manager_paymt_mnth']);
  	         DB::table('manager_payment')->where('id','1')->update($manager_pay_data_mnth);
           }

	    return response()->json('success');
	  }

/*admin shop paid ajax*/
	  public function admn_shp_paid_rld(request $request){
	      $currId=$request->input('cid');

	      $shopUsrdata = array('claimed_amount'=>'0','claimed_status'=> '0',);

	        DB::table('users')->where('user_id',$currId)->update($shopUsrdata);

	  return response()->json('success');
	  }

///*admin manager paid ajax*/
	  public function admn_mangr_paid_rld(request $request){
	      $currId=$request->input('cid');

	      $shopUsrdata = array('claimed_amount'=>'0','claimed_status'=> '0',);

	        DB::table('users')->where('user_id',$currId)->update($shopUsrdata);

	  return response()->json('success');
	  }

/*admin shop user chat page*/

    public function shpCnt(request $req){
    $Id=$req->input('cid');
      $shpUsrDta=DB::table('users')->where('user_id', $Id)->get();
        $shpUsrcrProf=DB::table('users')->where('profile_created_by', $shpUsrDta[0]->user_matri_id)->get();
         $shpCnt=count($shpUsrcrProf);
     return response()->json($shpCnt);
    }

}
