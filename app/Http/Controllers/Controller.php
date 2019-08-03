<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Intervention\Image\facades\Image;
use session;
use Cache;
use Storage;
use Image;


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
        $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
        $sub_caste = DB::table('subcaste_master')->get();
        $mother_tounge = DB::table('mother_tongue_master')->get();
      return view('welcome', compact('created_mast','country_mast','caste','mother_tounge','sub_caste','marital_status'));
    }
}

      public function MainPgSrch(Request $req){
        $src_data= $req->input('gender');
        $data = DB::table('bride_basic_profile')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('profile_gender',$src_data)->get();
        return response()->json($data);
      }
      public function array_to_key_array($array, $key){
        $response = [];
        foreach ($array as $arr) {
          $response[$arr->$key] = $arr;
        }
        return $response;
      }
    public function profile(Request $request){
        $userId = $_SESSION['id'];
        $supradmn_status = DB::table('superadmin_status_master')->get();
        $checkGend=DB::table('bride_basic_profile')->where('user_idk', $userId)->get();
        $usrData=DB::table('users')->where('user_id', $userId)->where('user_soft_delete','!=','1')->get();       
        if($checkGend[0]->profile_gender =="female"){
          $profiles=DB::table('bride_basic_profile')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('role','0')->where('profile_gender','male')->where('user_cast',$usrData[0]->user_cast)->where('user_sub_caste',$usrData[0]->user_sub_caste)->where('user_idk','!=' ,$userId)->where('user_soft_delete','!=','1')->paginate(5);
            
          $profilesSuperAdmin=DB::table('bride_basic_profile')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('role','0')->where('profile_gender','male')->where('user_cast',$usrData[0]->user_cast)->where('user_sub_caste',$usrData[0]->user_sub_caste)->where('user_idk','!=' ,$userId)->where('user_soft_delete','!=','1')->get();
             
          $history = $this->array_to_key_array(DB::table('superadmin_call_history')->where('hist_user_idk',$userId)->get(), 'hist_profile_idk');

          for ($i = 0; $i < count($profilesSuperAdmin); $i++) {
            if(isset($history[$profilesSuperAdmin[$i]->user_idk])){
              $profilesSuperAdmin[$i]->hist_status = $history[$profilesSuperAdmin[$i]->user_idk]->hist_user_status;
              $profilesSuperAdmin[$i]->hist_Comments = $history[$profilesSuperAdmin[$i]->user_idk]->hist_user_comments;
            }
          }
           // print_r($profilesSuperAdmin);
           // exit;
        }
        else{
             $profiles=DB::table('bride_basic_profile')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('role','0')->where('profile_gender','female')->where('user_cast',$usrData[0]->user_cast)->where('user_sub_caste',$usrData[0]->user_sub_caste)->where('user_idk','!=' ,$userId)->where('user_soft_delete','!=','1')->paginate(5);

                $profilesSuperAdmin=DB::table('bride_basic_profile')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('role','0')->where('profile_gender','female')->where('user_cast',$usrData[0]->user_cast)->where('user_sub_caste',$usrData[0]->user_sub_caste)->where('user_idk','!=' ,$userId)->where('user_soft_delete','!=','1')->get();

          $history = $this->array_to_key_array(DB::table('superadmin_call_history')->where('hist_user_idk',$userId)->get(), 'hist_profile_idk');

          for ($i = 0; $i < count($profilesSuperAdmin); $i++) {
            if(isset($history[$profilesSuperAdmin[$i]->user_idk])){
              $profilesSuperAdmin[$i]->hist_status = $history[$profilesSuperAdmin[$i]->user_idk]->hist_user_status;
               $profilesSuperAdmin[$i]->hist_Comments = $history[$profilesSuperAdmin[$i]->user_idk]->hist_user_comments;
            }
          }
          // print_r($profilesSuperAdmin);
          //  exit;
        } 
      return view('profile', compact('profiles','checkGend', 'usrData','supradmn_status','profilesSuperAdmin'));
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
       $useroccupation= DB::table('occupation_master')->get();
        $userbloodgrp= DB::table('blood_group_master')->get();
        $Living_master= DB::table('living_settle_master')->get();
         $usernetworth= DB::table('prof_net_worth')->get();
          $userfamgod= DB::table('matri_family_god')->distinct()->get();
       $managerdistrict= DB::table('ward')->select('dist_name')->distinct()->get();
         return view('edit_profile', compact('edit_bprof','editsec_weight','editsec_height','editsec_lang','editsec_interests','editsec_hobbiess','editsec_music','editsec_sports','editsec_food','edit_secprof','editstate','editcity','editcitizenship','editstar','editraasi','editchartstyle','edithighereducation','editcountry','useroccupation','managerdistrict','userbloodgrp','usernetworth','userfamgod','Living_master'));
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
          $useroccupation= DB::table('occupation_master')->get();
        $userbloodgrp= DB::table('blood_group_master')->get();
        $Living_master= DB::table('living_settle_master')->get();
         $usernetworth= DB::table('prof_net_worth')->get();
       $managerdistrict= DB::table('ward')->select('dist_name')->distinct()->get();
        return view('view_profile', compact('edit_bprof','editsec_weight','editsec_height','editsec_lang','editsec_interests','editsec_hobbiess','editsec_music','editsec_sports','editsec_food','edit_secprof','editstate','editcity','editcitizenship','editstar','editraasi','editchartstyle','edithighereducation','editcountry','useroccupation','userbloodgrp','usernetworth','managerdistrict','Living_master'));
      }
       public function payment(){
            $userId=$_SESSION['id'];
            $usr_name=DB::table('users')->where('user_id',$userId)->get();
           return view('payment',compact('usr_name'));
       }

        public function payment_success(){
        return view('payment_success');
        } 

        public function make_basic_payment(){
            $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'500','payment_plan'=>'Silver pack','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Silver pack','payment_status'=>'1','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
          return view('payment_success');
         }
          
          public function make_gold_payment(){
             $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'1000','payment_plan'=>'Gold pack','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Gold pack','payment_status'=>'2','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
         return view('payment_success');
         } 

         public function make_platinum_payment(){
            $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'1500','payment_plan'=>'Platinam','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Platinam','payment_status'=>'3','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         }

         public function make_emerald_payment(){
            $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'2000','payment_plan'=>'Emerald','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Emerald','payment_status'=>'4','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         } 

         public function make_sapphire_payment(){
           $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'3500','payment_plan'=>'Sapphire','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Sapphire','payment_status'=>'5','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         }

          public function make_pearl_payment(){
           $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'5000','payment_plan'=>'Pearl','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Pearl','payment_status'=>'6','paid_ts'=>date("Y-m-d"));
           $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         } 

         public function make_rubby_payment(){
           $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'10000','payment_plan'=>'Ruby','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Ruby','payment_status'=>'7','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         } 

         public function make_alexandrite_payment(){
            $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'20000','payment_plan'=>'Alexandrite','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Alexandrite','payment_status'=>'8','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         } 

         public function make_operl_payment(){
          $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'50000','payment_plan'=>'Opal','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Opal','payment_status'=>'9','paid_ts'=>date("Y-m-d"));
           $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         }

          public function make_garnet_payment(){
           $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'100000','payment_plan'=>'Garnet','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'Garnet','payment_status'=>'10','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         }

        public function make_diamond_payment(){
           $raz_arraypayment=$_POST['razorpay_payment_id'];
            $pay_id=$_SESSION['id'];
            $payment_reg = array('user_idk'=>$pay_id,'payment_amount'=>'500000','payment_plan'=>'diamond','payment_resp_id'=> $raz_arraypayment);
            $payment_usr_reg = array('payment_plan'=>'diamond','payment_status'=>'11','paid_ts'=>date("Y-m-d"));
            $phone_num_basic = array('ph_num_count'=>'0');
            DB::table('payment_audit')->insert($payment_reg);
            DB::table('users')->where('user_id',$pay_id)->update($payment_usr_reg);
            DB::table('bride_basic_profile')->where('user_idk',$pay_id)->update($phone_num_basic);
        return view('payment_success');
         }

      public function chatprof(){
       $userId=$_SESSION['id'];
        $Data =DB::table('bride_basic_profile')->where('user_idk', $userId)->get();
        $chatUsrIdArr=array();
          $chatListAccreq= $Data[0]->accepted_requests;
          $chatListreqAccBy=$Data[0]->Req_accepted_by;
            $AccData=explode(",",$chatListAccreq);
            $reqAccData=explode(",",$chatListreqAccBy);
                array_push($chatUsrIdArr,$AccData);
                array_push($chatUsrIdArr,$reqAccData);
            $chatersDataon=array();
            $chatersDataoff=array();
          for($i=0; $i<count($chatUsrIdArr); $i++){
              for($j=0; $j<count($chatUsrIdArr[$i]); $j++){
            if(Cache::has('user-is-online'.$chatUsrIdArr[$i][$j])){
                $ChtUsrQry=DB::table('bride_basic_profile')->where('user_idk', $chatUsrIdArr[$i][$j])->get();
                array_push($chatersDataon, $ChtUsrQry);
                }
            else{
              $ChtUsrQry=DB::table('bride_basic_profile')->where('user_idk', $chatUsrIdArr[$i][$j])->get();
                array_push($chatersDataoff, $ChtUsrQry);
                 }
              }
          }   
        return view('chat', compact('chatersDataon', 'chatersDataoff'));
     }  

      public function contactus(){
        return view('contact');
      } 

    //to send new message
    public function newMsg($from,$to,$msg){
      $persons = [$from,$to];
      sort($persons);
      $chatFile = '../chat_msgs/'.$persons[0].'_'.$persons[1].'.json';
      if(file_exists($chatFile)){
        $MsgList = json_decode(file_get_contents($chatFile),true);
        $lastIndex = $MsgList['lastIndex']; // to get index of msg Numbers
      }else{
        $MsgList = [];
        $lastIndex = 0;
      }
      $lastIndex++;
      date_default_timezone_set("Asia/Kolkata");
      $MsgList[$lastIndex] = ['index'=>$lastIndex,'msg'=>$msg,'from'=>$from,'to'=>$to, 'time'=>date('d-m-Y h:i:s a')];
      $MsgList['lastIndex'] = $lastIndex;
      file_put_contents($chatFile, json_encode($MsgList));

      //to record new message to to user
      $toUserFile = '../chat_msgs/'.$to.'.json';
      if(file_exists($toUserFile)){
        $toMsgList = json_decode(file_get_contents($toUserFile),true);
      }else{
        $toMsgList = [];
      }
      if(!isset($toMsgList[$from]) or $toMsgList[$from] == []){
        $toMsgList[$from] = ['index'=>$lastIndex,'msg'=>$msg,'from'=>$from];
        file_put_contents($toUserFile, json_encode($toMsgList));
      }
    }
    //to get latest messages
    public function getLatestMsg($user,$chatuser,$lastIndex=0){
      $persons = [$user,$chatuser];
      sort($persons);
      //to uset messages from chatuser
      $UserFile = '../chat_msgs/'.$user.'.json';
      if(file_exists($UserFile)){
        $newMsgList = json_decode(file_get_contents($UserFile),true);
        $newMsgList[$chatuser] = [];
        file_put_contents($UserFile, json_encode($newMsgList));
      }

      $chatFile = '../chat_msgs/'.$persons[0].'_'.$persons[1].'.json';
      if(file_exists($chatFile)){
        $MsgList = json_decode(file_get_contents($chatFile),true);
      }else{
        return json_encode([]);
      }
      $msgs = [];
      for($i=$lastIndex+1; $i<=$MsgList['lastIndex']; $i++){
        $msgs[] = ['index'=>$MsgList[$i]['index'],'msg'=>$MsgList[$i]['msg'],'from'=>$MsgList[$i]['from'],'to'=>$MsgList[$i]['to']];
      }
      return json_encode($msgs);
    }
    //to check new message
  
 
    public function chatWithUser(request $req){
      $id=$_SESSION['id'];
       $curId =$req->input('id');
        $latestMsgs= $this->getLatestMsg($curId,$id);
        return response()->json(json_decode($latestMsgs));
    }

    public function startChat(request $req){
      $id=$_SESSION['id'];
       $toId =$req->input('toId');
       $msg =$req->input('txtMsg');
        $chat= $this->newMsg($id,$toId,$msg);
        return response()->json($chat);
    }

    public function logoutApp(){
        $created_mast = DB::table('profilecreatedby_master')->get();
        $country_mast = DB::table('country_master')->get();
        $marital_status = DB::table('marital_status_master')->get();
        $sub_caste = DB::table('subcaste_master')->get();
        $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
        $mother_tounge = DB::table('mother_tongue_master')->get();
      return view('welcome', compact('created_mast','country_mast','caste','marital_status','sub_caste','mother_tounge'));
    }

    public function logout(){
      session_start();
      unset($_SESSION['user_name']);
      unset($_SESSION['id']);
      return view('url/logout');
    }

    public function login(Request $request){
      session_start(); 
      $superAdminUser= $request->input('user');
      $User = $request->input('mry_login_mail');
      $Pwds =$request->input('mry_login_pass');
      if(!isset($User)){
         $data = DB::table('users')->where([['user_name', '=', $superAdminUser]])->orWhere([['user_matri_id', '=', $User]])->first();
      }else{
       $data = DB::table('users')->where([['user_name', '=', $User]])->orWhere([['user_matri_id', '=', $User]])->first(); 
      }

  
      if(count($data)>0){
      $sessionValue= $data->user_name;
      $sessionId= $data->user_id;
      $pwdHash= $data->user_pwd;
      if(password_verify($Pwds,$pwdHash)=="1"){
      $_SESSION['user_name']=$sessionValue;
      $_SESSION['id']=$sessionId ;
      return response()->json($data);
        }elseif(isset($superAdminUser)){
          $sessionValue= $data->user_name;
          $sessionId= $data->user_id;
          $session1= "Active";
          $_SESSION['user_name']=$sessionValue;
          $_SESSION['id']=$sessionId;
          $_SESSION['supAdmin']=$session1;
      return response()->json($data);
      }
    else{
        return response()->json('failiure');
        }
      }
      else{
         return response()->json('failiure');   
         }
      }

     public function pwdReset(request $request){
     $name=$request->input('name');
     $data =DB::table('users')->where('user_name', $name)->get();
     $useremail = $data[0]->user_email;
     $resetLink = $data[0]->user_pwd_reset_link;
     $phoneNum = $data[0]->user_mobile;
       if(isset($data[0]->user_name)){
       $to_name = 'TO_NAME';
       $to_email = $useremail;
       // $data = array('name'=>"Sam Jose", "body" => "Test mail");
       // Mail::send('url/pwd_reset', $data, function($message) {
       //    $message->to($to_email, '')
       //            ->subject('Marrynow Pwd Reset');
       //    $message->from('mail@websignx.com','jay pratheesh');
       // });
      // Account details
      $apiKey = urlencode('c3DWFfa9nXE-DBAAzEfez8QN9uoQa9mUBm45BymnGl');
      // Message details
      $numbers = array($phoneNum);
      $sender = urlencode('TXTLCL');
      // $message = rawurlencode('This is your message');
      $numbers = implode(',', $numbers);
      // Prepare data for POST request
      $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => 'Reset Link:'.$resetLink);
      // Send the POST request with cURL
      $ch = curl_init('https://api.textlocal.in/send/');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
       echo 'sent';
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
         $secd_martial= DB::table('martial_master')->get();
      $id=$_SESSION['id'];
      $Data = DB::table('bride_secondary_profile')->where('user_idk',$id)->get();
          if(isset($Data[0]->user_idk)){
               return redirect('payment');
           }
           else{
         return view('secondary_registration', compact('secd_weight','secd_height','secd_hobbiess','secd_music','secd_lang','secd_sports','secd_food','secd_interests','secd_martial'));
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
        $sec_martials= $request->input('sec_martial');
        $sec_goals= $request->input('sec_goal');
         $secondry_reg = array('user_idk'=>$user_id,'weight'=>$sec_weight, 'height'=>$sec_height, 'bodytype'=>$sec_bodytype, 'Complexion'=>$sec_Complexion, 'education'=>$sec_education, 'occupation'=>$sec_occupation, 'lang'=>$languagesKnown,'native'=>$sec_native, 'fathr_occu'=>$sec_fathr_occu,'mothr_occu'=>$sec_mothr_occu,'brothers'=>$sec_brothers, 'bro_marri'=>$sec_bro_marri, 'sisters'=>$sec_sis, 'sis_marri'=>$sec_sis_marri,'abt_family'=>$sec_abt_family, 'eat_habt'=>$sec_eat_habt, 'drnk_habt'=>$sec_drnk_habt,'smok_habt'=>$sec_smok_habt,'food'=>$sec_food,'interest'=>$sec_interest,'sport'=>$sec_sport,'hobbis'=>$sec_hobbis,'music'=>$sec_music,'goal'=>$sec_goals,'martial_arts'=>$sec_martials);
         if($edit_secprof_flag==''){
         DB::table('bride_secondary_profile')->insert($secondry_reg);
        }
        else{
          DB::table('bride_secondary_profile')->where('user_idk',$user_id)->update($secondry_reg);
        }
         return response()->json('done');
      }

    public function userRegistration(Request $request)
    {
        $profCreatedBy= $request->input('profCreatedBy');$name = $request->input('name');$dob = $request->input('dob');$gender = $request->input('gender');$email = $request->input('email');$maritalStatus = $request->input('maritalStatus');$phone = $request->input('phone'); $country = $request->input('country');$pwd = $request->input('pwd'); $caste = $request->input('caste'); $subcaste = $request->input('subcaste');
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";$codeAlphabet.= "0123456789"; $max = strlen($codeAlphabet);
       for ($i=0; $i < 30; $i++) {
           $token .= $codeAlphabet[random_int(0, $max-1)];
       }
       // Set userMatri Id 
       $getUserId = DB::table('config_userId')->get();
       $userId = $getUserId[0]->code;
       $year=date("Y");
       $num1= $userId+1;
       $id = "MN".$year.$num1;
       $data=array('code'=>$num1);
       DB::table('config_userId')->update($data);
       //otp send and set
      $digits = rand (100000, 999999);
      //----------
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

       $array =array();
       if($profCreatedBy==""){
        array_push($array,"please enter your prof created By");
       }
       elseif($name==""){
        array_push($array,"please enter username");
       }
       elseif($pwd==""){
        array_push($array,"please choose your password");   
       }
        elseif($gender==""){
        array_push($array,"please choose your Gender");   
       }  
       elseif($dob==""){
        array_push($array,"please enter your Date Of birth");
       } 
       elseif($maritalStatus==""){
        array_push($array,"please enter your marital Status");
       } 
       elseif($phone==""){
        array_push($array,"please enter your phone number");
       } 
       elseif($email==""){
        array_push($array,"please enter your Email");
       } 
       elseif(strlen($phone) < 10){
        array_push($array,"Phone number should have 10 numbers");
       } 
       elseif($country==""){
        array_push($array,"please enter your marital Status");
       }
       elseif($caste==""){
        array_push($array,"please enter your caste");
       } 
       elseif($subcaste==""){
        array_push($array,"please enter your subcaste");
       }
       elseif(!is_numeric($phone)){
        array_push($array,"please enter number for phone");
       }
       elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($array,"please enter proper  email format  eg:aaa@aaa.com");
       }
       elseif(isset($usernameCheck[0]->user_name)){
          array_push($array,"sorry the user name already exist");
       }
       elseif(isset($userMailCheck[0]->user_email)){
        array_push($array,"sorry the email already exist");
       }
       elseif(isset($userMobCheck[0]->user_mobile)){
          array_push($array,"sorry the mobile number already exist");
       }
     
    elseif($name!=""){
    $dataIn = array('profile_created_by'=>$profCreatedBy, 'user_name'=>$name, 'user_dob'=>$dob, 'user_gender'=>$gender, 'user_email'=>$email, 'marital_status'=>$maritalStatus, 'user_mobile'=>$phone,'user_country'=>$country, 'user_pwd'=>password_hash($pwd, PASSWORD_DEFAULT),'user_pwd_reset_link'=>$token, 'user_sub_caste'=>$subcaste, 'user_cast'=>$caste, 'user_matri_id'=>$id,'otp'=>$digits);
        //email send  commented for server issue-- change .env to fix this issue
        /*$headers = "From: marrynow@gmail.com";
        $receiver=$email;
        $subject="Marry Now User Credentials";
        $msg="USERNAME:".$name. "PASSWORD:".$pwd;
        mail($receiver,$subject,$msg,$headers);*/

      // Account details
      $apiKey = urlencode('c3DWFfa9nXE-DBAAzEfez8QN9uoQa9mUBm45BymnGl');
      // Message details
      $numbers = array($phone);
      $sender = urlencode('TXTLCL');
      // $message = rawurlencode('This is your message');
      $numbers = implode(',', $numbers);
      // Prepare data for POST request
      $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => 'OTP:'.$digits);
      // Send the POST request with cURL
      $ch = curl_init('https://api.textlocal.in/send/');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
      // Process your response here
      // echo $response
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
     
    public function CheckOTP(request $req){
      session_start();
      $otp=$req->input('otp');
      $datQry= DB::table('users')->where('user_id',$_SESSION['id'])->get(); 
        $usrName = $datQry[0]->user_name;
        $usrPh = $datQry[0]->user_mobile;
        $usrId = $datQry[0]->user_matri_id;
      if($otp==$datQry[0]->otp){
        $UpDta=array('otp_status'=>'1');
        DB::table('users')->where('user_id',$_SESSION['id'])->update($UpDta);
        // Account details
        $apiKey = urlencode('c3DWFfa9nXE-DBAAzEfez8QN9uoQa9mUBm45BymnGl');
        // Message details
        $numbers = array($usrPh);
        $sender = urlencode('TXTLCL');
        // $message = rawurlencode('This is your message');
        $numbers = implode(',', $numbers);
        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => 'You can login With these :'.$usrName.$usrPh.$usrId);
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);  
      return response()->json('sucess');
      }
      else{
        return response()->json('failed');
      }
    }



    public function register2Page(Request $request){
      // session_start();
        $dataid =$_SESSION['id'];
        $data = DB::table("users")->Where('user_id', $dataid)->get();  // after login change this to session id of user id
       /* $userHeight= DB::table('height_master')->get();*/
        $userstates= DB::table('states')->get();
        $userstate= DB::table('ward_master')->select('state_name')->distinct()->get();
       /* $userdistrict= DB::table('mynadar_district')->get();
        $uservillage= DB::table('mynadar_village')->get();
        $usertaluk= DB::table('mynadar_taluk')->get();*/
         /*$managerdistrict= DB::table('ward')->select('dist_name')->distinct()->get();*/
        $usercity= DB::table('city_master')->get();
        $usercitizenship= DB::table('country_master')->get();
        $marital_status = DB::table('marital_status_master')->get();
        $userstar= DB::table('star_master')->get();
        $userraasi= DB::table('raasi_master')->get();
        $userchartstyle= DB::table('chartstyle_master')->get();
        $userhighereducation= DB::table('education_master')->get();
        $usernetworth= DB::table('prof_net_worth')->get();
        $userreligion= DB::table('relegion_master')->get();
        $userbloodgrp= DB::table('blood_group_master')->get();
        $useroccupation= DB::table('occupation_master')->get();
         $Living_master= DB::table('living_settle_master')->get();
        $userfamgod= DB::table('matri_family_god')->distinct()->get();
     if($data[0]->profile_completed_status=="1"){
     return redirect('index');
     }
     else{
        return view('register2', compact('data',/*'managerdistrict',*/'userdistrict','uservillage','usertaluk', 'marital_status','userstate','usercity','usercitizenship','userstar','userraasi','userchartstyle','userbloodgrp','userreligion','userhighereducation','usernetworth','userfamgod','useroccupation','Living_master'));
     }

    }//end of index page load

    public function profileSubmit(Request $request){
       session_start();
       $user_id=$_SESSION['id'];
       $edit_prof_flag= $request->input('edit_prof_flag');$gender= $request->input('gender'); $name= $request->input('name');$email= $request->input('email');$marital_status= $request->input('marital_status');/*$height= $request->input('height');*/$phyStat= $request->input('phyStat'); $country= $request->input('country');$citizenship= $request->input('citizenship');$state= $request->input('state');$star= $request->input('star'); $gothr= $request->input('gothr');$dhosam= $request->input('dhosam');$cbox_dhosam= $request->input('cbox_dhosam'); $timeofBirth= $request->input('timeofBirth'); $minuteOfBirth= $request->input('minuteOfBirth'); $profTime= $request->input('profTime'); $countryOffBirth= $request->input('countryOffBirth'); $stateOfBirth= $request->input('stateOfBirth');$chartStyle= $request->input('chartStyle');$highEdu= $request->input('highEdu');$Employed= $request->input('Employed');
        $contactNo= $request->input('contactNo');$whatsappNo= $request->input('whatsappNo');$familyValue= $request->input('familyValue');$familyType= $request->input('familyType');
        $familyStatus= $request->input('familyStatus'); $aboutMe= $request->input('aboutMe');$rasi= $request->input('rasi');$guardname= $request->input('guardname');$district= $request->input('district'); $village= $request->input('village'); $taluk= $request->input('taluk');$address1= $request->input('address1'); $address2= $request->input('address2'); $locality= $request->input('locality'); $pincode= $request->input('pincode'); $relegion= $request->input('relegion'); $incomesource= $request->input('incomesource'); $typeincome= $request->input('typeincome'); $networth= $request->input('networth');$own_income= $request->input('own_income');$family_income= $request->input('family_income'); $desktop= $request->input('desktop');$laptop= $request->input('laptop'); $ups= $request->input('ups');$television= $request->input('television');$fridge= $request->input('fridge');$washmachine= $request->input('washmachine'); $borewater= $request->input('borewater'); $tnwater= $request->input('tnwater');$car= $request->input('car');$bike= $request->input('bike');$partnrbussiness= $request->input('partnrbussiness');$twowheellisence= $request->input('twowheellisence'); $fourwheellisence= $request->input('fourwheellisence');$ownhouse= $request->input('ownhouse');$landacres= $request->input('landacres');$ppt_owner= $request->input('ppt_owner');$ppt_owner_reltn= $request->input('ppt_owner_reltn');$bloodgroup= $request->input('bloodgroup');$gold= $request->input('gold');$property= $request->input('property'); $cash= $request->input('cash'); $god= $request->input('god');$prof_check_val= $request->input('occupation_value');$prof_check_rel=$request->input('occupation_relation');$prof_check_typ=$request->input('occupation_type');$prof_check_field=$request->input('occupation_field');$prof_age= $request->input('prof_age');$settle_living= $request->input('settle_living');


        $birthTime =   $timeofBirth . " " . $minuteOfBirth . " " . $profTime;

        $array =array();
        if($email==""){
         array_push($array,"please enter email");
        }
        elseif($name==""){
         array_push($array,"please enter name");
        }
        elseif($gender==""){
         array_push($array,"please enter gender");
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($array,"please enteter proper email syntax eg aaa@aaa.com");
           }
      elseif($marital_status==""){
            array_push($array,"please enter marital status");
           }
          /* if($height==""){
            array_push($array,"please enter height");
           }*/
           if($phyStat==""){
            array_push($array,"please enter the time");
           }
           elseif($country==""){
            array_push($array,"please enter the country");
           }
           elseif($citizenship==""){
            array_push($array,"please enter the citizenship");
           }
          elseif($state==""){
            array_push($array,"please enter the state");
           }
           elseif($highEdu==""){
            array_push($array,"please enter the education");
           }
           elseif($Employed==""){
            array_push($array,"please enter the employe details");
           }
           elseif($familyValue==""){
            array_push($array,"please enter the family value");
           }
           elseif($familyType==""){
            array_push($array,"please enter the family type");
           }
           elseif($familyStatus==""){
            array_push($array,"please enter the family status");
           }
           elseif($aboutMe==""){
            array_push($array,"please enter the about me");
           }
       

        elseif($email!=""){
        $dataIn = array('user_idk'=>$user_id, 'profile_name'=>$name,'prof_user_email'=>$email, 'prof_user_marial_stat'=>$marital_status, /*'prof_user_height'=>$height,*/ 'prof_user_physichal_status'=>$phyStat, 'profile_user_country'=>$country, 'prof_user_citizenship'=>$citizenship,'profile_user_state'=>$state,'prof_user_star'=>$star,'prof_user_gothra'=>$gothr,'prof_user_dhosam'=>$dhosam,'prof_dhosham_values'=>$cbox_dhosam,'prof_user_birthtime'=>$birthTime,'prof_user_birthcountry'=>$countryOffBirth,'prof_user_birthstate'=>$stateOfBirth,'prof_user_chartstyle'=>$chartStyle,'prof_user_edu'=>$highEdu,'prof_user_employedin'=>$Employed,'prof_user_parent_continfo'=>$contactNo,'prof_whatsapp_no'=>$whatsappNo,'prof_familyvalue'=>$familyValue,'prof_familytype'=>$familyType,'prof_familystatus'=>$familyStatus,'prof_about_me'=>$aboutMe,'prof_user_raasi'=>$rasi,'profile_gender'=>$gender,'prof_father_guardian_name'=>$guardname,'prof_district'=>$district,'prof_village'=>$village,'prof_taluk'=>$taluk,'prof_addressline1'=>$address1,'prof_addressline2'=>$address2,'prof_locallity'=>$locality,'prof_pincode'=>$pincode,'prof_relegion'=>$relegion,'prof_incomefrom_source'=>$incomesource,'prof_typeof_income'=>$typeincome,'prof_income'=>$own_income,'prof_familyincome'=>$family_income,'prof_networth'=>$networth,'prof_desktop_avail'=>$desktop,'prof_laptop_avail'=>$laptop,'prof_ups_avail'=>$ups,'prof_television_avail'=>$television,'prof_fridge_avail'=>$fridge,'prof_washingmchine_avaiil'=>$washmachine,'prof_borewater_avail'=>$borewater,'prof_tn_water_avail'=>$tnwater,'prof_car_avail'=>$car,'prof_twowheller_avail'=>$bike,'prof_partnerbusiness_avail'=>$partnrbussiness,'prof_twowhlr_license'=>$twowheellisence,'prof_fourwhlr_license'=>$fourwheellisence,'prof_ownhouse'=>$ownhouse,'prof_land_acres'=>$landacres,'prof_propertyowner_name'=>$ppt_owner, 'prof_propertyowner_relation'=>$ppt_owner_reltn,
     'prof_blood_group'=>$bloodgroup,'profile_age'=>$prof_age,'prof_gift_gold'=>$gold,'prof_gift_property'=>$property,'prof_family_god'=>$god,'prof_gift_cash'=>$cash,'prof_living_settle'=>$settle_living,'prof_occptin_type'=>$prof_check_typ,'prof_occptin_value'=>$prof_check_val,'prof_occptin_field'=>$prof_check_field,'prof_occptin_relation'=>$prof_check_rel);

        $validprofile = ['profile_completed_status'=>'1'];
        if($edit_prof_flag==''){
          DB::table('bride_basic_profile')->insert($dataIn);
           DB::table('users')->where('user_id',$user_id)->update($validprofile);
         return response()->json('done');
        }
        else{
          DB::table('bride_basic_profile')->where('user_idk',$user_id)->update($dataIn);
        return response()->json('updated');
        }
        
    }
    print_r($array);
    }// end of profilesubmit

    public function indexPage(Request $request){
    $Id=$_SESSION['id'];
    $data= DB::table("users")->Where('user_id', $Id)->get();  // after login change this to session id of user id
    $imgData = DB::table('bride_basic_profile')->where('user_idk',$Id)->get();
       if($imgData[0]->profile_image!=""){
           return redirect('horoscope_upload');
       }
       else{
          return view('index', compact('data'));
        }
    }//end of index page load

    
    public function image_upload(Request $request){
      $id=$_SESSION['id'];
      $imgData = DB::table('bride_basic_profile')->where('user_idk',$id)->get();
     if($imgData[0]->profile_image!=""){
         return redirect('horoscope_upload');
     }
     else{
          return view('image_upload'); 
     }
    }

    public function horoscope_upload(Request $request){
        $id=$_SESSION['id'];
        $imgData = DB::table('bride_basic_profile')->where('user_idk',$id)->get();
       if($imgData[0]->profile_horoscope!=""){
           return redirect('secondary_registration');
       }
       else{
            return view('horoscope_upload'); 
       }
    }
    //end of index page load
     public function uploadImage(Request $request){
      session_start();
          $Id=$_SESSION['id'];
          $matriID = DB::table('users')->where('user_id', $Id)->select('user_matri_id')->get();
          $DeleteOld = DB::table('bride_basic_profile')->where('user_idk', $Id)->select('profile_image')->get();
          if ($request->file('logo')) {
            $fileName = basename($_FILES["logo"]["name"]);
            $userPhoto = $request->file('logo')->storeAs('/',$matriID[0]->user_matri_id.$fileName);
            $data=array('profile_image'=>$matriID[0]->user_matri_id.$fileName);
            DB::table('bride_basic_profile')->where('user_idk', $Id)->update($data);
             $img = Image::make(public_path("imgs/".$matriID[0]->user_matri_id.$fileName)); 
          $img->insert(public_path('5.png'), 'bottom-right', 10, 10);
          $img->save(public_path("imgs/".$matriID[0]->user_matri_id.$fileName));
             if($DeleteOld[0]->profile_image!=""){
               Storage::delete("/".$DeleteOld[0]->profile_image);
            }
        }
        
    return response()->json($fileName);
    }






    public function upload_horoscope(Request $request){
      $SupAdminChk = $request->input('SuperAdmnChk');
      if(isset($SupAdminChk)){
         $Id = $request->input('id');
      }
      else{
          session_start();
          $Id=$_SESSION['id'];
      }
          if ($request->file('logo')) {
            $matriID = DB::table('users')->where('user_id', $Id)->select('user_matri_id')->get();
              $DeleteOld = DB::table('bride_basic_profile')->where('user_idk', $Id)->select('profile_horoscope')->get();
            $fileName = basename($_FILES["logo"]["name"]);
            $userPhoto = $request->file('logo')->storeAs('/',"horoscope_".$matriID[0]->user_matri_id.$fileName);
            $data=array('profile_horoscope'=>"horoscope_".$matriID[0]->user_matri_id.$fileName);
            DB::table('bride_basic_profile')->where('user_idk', $Id)->update($data);
          $img = Image::make(public_path("imgs/horoscope_".$matriID[0]->user_matri_id.$fileName)); 
          $img->insert(public_path('5.png'), 'bottom-right', 10, 10);
          $img->save(public_path("imgs/horoscope_".$matriID[0]->user_matri_id.$fileName));
             if($DeleteOld[0]->profile_horoscope!=""){
               Storage::delete("/".$DeleteOld[0]->profile_horoscope);
            }
        }
    return response()->json($fileName);
    }

    public function uploadHoroscope(Request $request){
          $Id=$_SESSION['id'];
          if ($request->file('logo')) {
            $fileName = basename($_FILES["logo"]["name"]);
            $userPhoto = $request->file('logo')->storeAs('/',$fileName);
            $data=array('profile_horoscope'=>$fileName);
            DB::table('bride_basic_profile')->where('user_idk', $Id)->update($data);
        }
    return response()->json($fileName);
    }
   

    public function secReg(){     
    return view('secondary_registration'); 
    }

     public function prof_model(Request $request){
     $userId=$request->input('id') ;     
      $data=DB::table('bride_secondary_profile')->where('user_idk',$userId)->get();
      return response()->json($data); 
    } 

     public function profile_matches(request $request){
      $dataid =$_SESSION['id'];
      $data = DB::table("users")->Where('user_id', $dataid)->where('user_soft_delete','!=','1')->get();
      $curprof = DB::table("bride_basic_profile")->Where('user_idk', $dataid)->get();
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
        $matdistrict= DB::table('mynadar_district')->get();
        $matvillage= DB::table('mynadar_village')->get();
        $mattaluk= DB::table('mynadar_taluk')->get();
        $matnetworth= DB::table('prof_net_worth')->get();
        $matreligion= DB::table('relegion_master')->get();
        $matbloodgrp= DB::table('blood_group_master')->get();
        $useroccupation= DB::table('occupation_master')->distinct()->get();
        $Living_master= DB::table('living_settle_master')->get();
        $caste_master= DB::table('caste_masterz')->select('caste_name')->distinct()->get();
        $subcaste_master= DB::table('caste_masterz')->get();

      return view('profile_matches', compact('mat_chartstyle','mat_star','mat_raasi','mat_highereducation','mat_weight','mat_height','mat_lang','mat_food','matstate','matcity','matcitizenship','matdistrict','matvillage','mattaluk','matnetworth','matreligion','matbloodgrp','curprof','data','useroccupation','Living_master','caste_master','subcaste_master'));
     } 

       public function dbEqualSearch($columnName, $formArray, $var, $append="AND"){
        if(isset($formArray[$var]) == true){
          if(is_array($formArray[$var]) == true && count($formArray[$var]) > 0){
            $txt = $append." ".$columnName. " IN "."('";
            foreach ($formArray[$var] as $key) {
              $txt .= $key."','";
            }
            $txt = trim($txt,",'");
            $txt .= "') ";
          }elseif($formArray[$var] != ''){
            $txt = $append." ".$columnName." = '".$formArray[$var]."' ";
          }
          return $txt;
        }else{
          return '';
        }
        }
        
       public function notifications(){
        return view('url/notification');
       }

   public function loadNotification(){
     $notifid =$_SESSION['id'];
      $notificat_req=DB::table('bride_basic_profile')->where('user_idk',$notifid)->get();
        $recv_reqst=$notificat_req[0]->received_requests;
        $sent_reqst=$notificat_req[0]->send_requests;
       $recv_emty_array=array();
       $sent_emty_array=array();
        $recv_req_array=explode(",",$recv_reqst);
        $sent_req_array=explode(",",$sent_reqst);
        $sent_reqst_count =count($sent_req_array); 
          $recv_reqst_count =count($recv_req_array);
        for($i=0; $i<count($recv_req_array); $i++){
          if($recv_req_array[$i]!=''){
           $rec_rec_querey=DB::table('bride_basic_profile')->where('user_idk',$recv_req_array[$i])->get();
            array_push($recv_emty_array,$rec_rec_querey);
             }
         } 
         for($j=0; $j<count($sent_req_array); $j++){
          if($sent_req_array[$j]!=''){
           $sent_rec_querey=DB::table('bride_basic_profile')->where('profile_id',$sent_req_array[$j])->get();
            array_push($sent_emty_array,$sent_rec_querey);
             }
         }
         return view('notification',compact('recv_emty_array','sent_emty_array','sent_reqst_count','recv_reqst_count'));
   }

     public function searchresult(request $request){
      return view('searchresult');
     }

   public function profile_Intr(request $request){
      $dataid =$_SESSION['id'];
      $profid=$request->input('id'); 
    $availSndData=DB::table('bride_basic_profile')->where('user_idk',$dataid)->get();     
    $availRecData=DB::table('bride_basic_profile')->where('profile_id',$profid)->get(); 
      $sendReq=$availSndData[0]->send_requests;
      $recReq=$availRecData[0]->received_requests;
      $senddata=array('send_requests'=>$profid.','.$sendReq);   
      $receivedata=array('received_requests'=>$dataid.','.$recReq);
      DB::table('bride_basic_profile')->where('user_idk',$dataid)->update($senddata);
      DB::table('bride_basic_profile')->where('profile_id',$profid)->update($receivedata);
       return response()->json('done'); 
   }

   public function Matrisearch(request $request)
   {
    $formData = $request->all();
    /* $user_id=$_SESSION['id'];
    $occupation=$formData['occupation'];
    $serch_occup=DB::table('bride_basic_profile')->where('user_idk','!=',$user_id)->get();
    for($i=0; $i<count($serch_occup); $i++){
      $occup_array=explode(',', $serch_occup[$i]->prof_multiple_occptin);
      if(in_array($occupation, $occup_array)){
        
      }
    }
    print_r($occupation);
    exit;*/
     $gender=$this->dbEqualSearch('bride_basic_profile.profile_gender',$formData,'gender');
     $caste=$this->dbEqualSearch('users.user_cast',$formData,'caste');
     $subcaste=$this->dbEqualSearch('users.user_sub_caste',$formData,'subcaste');
     $height=$this->dbEqualSearch('bride_basic_profile.prof_user_height',$formData,'height');
     $weight=$this->dbEqualSearch('bride_secondary_profile.weight',$formData,'weight');
     $pystatus=$this->dbEqualSearch('bride_basic_profile.prof_user_physichal_status',$formData,'phystatus');
     $dhosam=$this->dbEqualSearch('bride_basic_profile.prof_user_dhosam',$formData,'dhosam');
     $charstyle=$this->dbEqualSearch('bride_basic_profile.prof_user_chartstyle',$formData,'chartstyle');
     $star=$this->dbEqualSearch('bride_basic_profile.prof_user_star',$formData,'star');
     $rasi=$this->dbEqualSearch('bride_basic_profile.prof_user_raasi',$formData,'rasi');
     $employed=$this->dbEqualSearch('bride_basic_profile.prof_user_employedin',$formData,'employed');
     $famvalue=$this->dbEqualSearch('bride_basic_profile.prof_familyvalue',$formData,'famvalue');
     $famtype=$this->dbEqualSearch('bride_basic_profile.prof_familytype',$formData,'famtype');
     $famststus=$this->dbEqualSearch('bride_basic_profile.prof_familystatus',$formData,'famststus');
     $bodytype=$this->dbEqualSearch('bride_secondary_profile.bodytype',$formData,'bodytype');
     $complextion=$this->dbEqualSearch('bride_secondary_profile.Complexion',$formData,'complextion');
     $eatinghab=$this->dbEqualSearch('bride_secondary_profile.eat_habt',$formData,'eatinghab');
     $drinkinghab=$this->dbEqualSearch('bride_secondary_profile.drnk_habt',$formData,'drinkinghab');
     $smokinghab=$this->dbEqualSearch('bride_secondary_profile.smok_habt',$formData,'smokinghab');
     $country=$this->dbEqualSearch('bride_basic_profile.prof_user_birthcountry',$formData,'country');
     $state=$this->dbEqualSearch('bride_basic_profile.prof_user_birthstate',$formData,'state');
     $city=$this->dbEqualSearch('bride_basic_profile.prof_user_birthcity',$formData,'city');
     $brothrs=$this->dbEqualSearch('bride_secondary_profile.brothers',$formData,'brothrs');
     $sisters=$this->dbEqualSearch('bride_secondary_profile.sisters',$formData,'sisters');
     $district=$this->dbEqualSearch('bride_basic_profile.prof_district',$formData,'district');
     $income_src=$this->dbEqualSearch('bride_basic_profile.prof_incomefrom_source',$formData,'income_src');
      $networth=$this->dbEqualSearch('bride_basic_profile.prof_networth',$formData,'networth');
      $blood=$this->dbEqualSearch('bride_basic_profile.prof_blood_group',$formData,'blood');
      $computr=$this->dbEqualSearch('bride_basic_profile.prof_desktop_avail',$formData,'computr');
      $laptop=$this->dbEqualSearch('bride_basic_profile.prof_laptop_avail',$formData,'laptop');
      $ups=$this->dbEqualSearch('bride_basic_profile.prof_ups_avail',$formData,'ups');
      $tv=$this->dbEqualSearch('bride_basic_profile.prof_television_avail',$formData,'tv');
      $fridge=$this->dbEqualSearch('bride_basic_profile.prof_fridge_avail ',$formData,'fridge');
      $washine=$this->dbEqualSearch('bride_basic_profile.prof_washingmchine_avaiil',$formData,'washine');
      $borewater=$this->dbEqualSearch('bride_basic_profile.prof_borewater_avail',$formData,'borewater');
      $tnwater=$this->dbEqualSearch('bride_basic_profile.prof_tn_water_avail',$formData,'tnwater');
      $car=$this->dbEqualSearch('bride_basic_profile.prof_car_avail',$formData,'car');
      $bike=$this->dbEqualSearch('bride_basic_profile.prof_twowheller_avail',$formData,'bike');
      $partnerjob=$this->dbEqualSearch('bride_basic_profile.prof_partnerbusiness_avail',$formData,'partnerjob');
      $ownhome=$this->dbEqualSearch('bride_basic_profile.prof_ownhouse',$formData,'ownhome');
      $occupation=$this->dbEqualSearch('bride_basic_profile.prof_multiple_occptin',$formData,'occupation');
        $settle_live=$this->dbEqualSearch('bride_basic_profile.prof_living_settle',$formData,'settle_live');

  $members = DB::table('bride_basic_profile')->leftjoin('bride_secondary_profile','bride_basic_profile.user_idk','=','bride_secondary_profile.user_idk')->leftjoin('users','bride_basic_profile.user_idk','=','users.user_id')->where('role','0')->where('user_soft_delete','!=','1')->whereRaw('1=1 '.$gender.$subcaste.$caste.$height.$weight.$pystatus.$dhosam.$charstyle.$star.$rasi.$employed.$famvalue.$famtype.$famststus.$bodytype.$complextion.$eatinghab.$drinkinghab.$smokinghab.$country.$state.$city.$brothrs.$sisters.$district.$income_src.$blood.$networth.$computr.$laptop.$ups.$tv.$fridge.$washine.$borewater.$tnwater.$car.$bike.$partnerjob.$ownhome.$occupation.$settle_live)->get();
      $userId = $_SESSION['id'];
     $checkGend=DB::table('bride_basic_profile')->where('user_idk', $userId)->get();
      $usrData=DB::table('users')->where('user_id', $userId)->get();       
     return view('searchresult',compact('members','checkGend','usrData'));

   }


    public function acceptMatriReq(request $req){
      $reqId = $req->input('id');
      $sesId=$_SESSION['id'];
        $Data=DB::table('bride_basic_profile')->where('user_idk', $sesId)->get();
        $DatareqAcBy=DB::table('bride_basic_profile')->where('user_idk', $reqId)->get();

        $array=explode(",",$Data[0]->received_requests);
        if(in_array($reqId, $array)){
         $erArray=array_diff($array, [$reqId]);
          $arTStr=implode(',', $erArray);
          $Updata=array('received_requests'=>$arTStr);
          if($Data[0]->accepted_requests==""){
              $UpAcData=array('accepted_requests'=>$reqId);
          }
          else{
            $UpAcData=array('accepted_requests'=>$Data[0]->accepted_requests.','.$reqId);
          }
            if($DatareqAcBy[0]->Req_accepted_by==""){
              $UpAcDataRqAcBy=array('Req_accepted_by'=>$sesId);       
             }
          else{
            $UpAcDataRqAcBy=array('Req_accepted_by'=>$Data[0]->Req_accepted_by.','.$sesId);
             }
        DB::table('bride_basic_profile')->where('user_idk', $sesId)->update($Updata);
        DB::table('bride_basic_profile')->where('user_idk', $sesId)->update($UpAcData);
        DB::table('bride_basic_profile')->where('user_idk', $reqId)->update($UpAcDataRqAcBy);
        return response()->json('Accepted');
        }
    }


     public function rejectMatriReq(request $req){
      $reqId =$req->input('id'); 
      $sesId=$_SESSION['id']; 

        $Data=DB::table('bride_basic_profile')->where('user_idk', $reqId)->get();
        $RcvrData=DB::table('bride_basic_profile')->where('user_idk', $sesId)->get();

          $array=explode(",", $Data[0]->send_requests);
          $arrayRcvd=explode(",", $RcvrData[0]->received_requests);

             $erArray=array_diff($array, [$RcvrData[0]->profile_id]); 
             $erArrayRcvd=array_diff($arrayRcvd, [$reqId]);  

            $arTStr=implode(',', $erArray);
             $arTStrRcvd=implode(',', $erArrayRcvd);

              $Updata=array('send_requests'=>$arTStr);
              $UpdataRcvd=array('received_requests'=>$arTStrRcvd);

        DB::table('bride_basic_profile')->where('user_idk', $sesId)->update($UpdataRcvd);
        DB::table('bride_basic_profile')->where('user_idk', $reqId)->update($Updata);

      return response()->json('Rejected');
    }

   public function removeSndMatriReq(request $req){
      $reqId =$req->input('id');
        $sesId=$_SESSION['id'];
          $UsrData=DB::table('bride_basic_profile')->where('user_idk', $sesId)->get();
          $RcvrData=DB::table('bride_basic_profile')->where('profile_id', $reqId)->get();

             $array=explode(",",$UsrData[0]->send_requests);
             $arrayRcvr=explode(",",$RcvrData[0]->received_requests);

             $erArray=array_diff($array, [$reqId]);
             $erArrayRcvr=array_diff($arrayRcvr, [$sesId]);

              $arTStr=implode(',', $erArray);
              $arTStrRcvr=implode(',', $erArrayRcvr);

              $Updata=array('send_requests'=>$arTStr);  
              $UpdataRcvr=array('received_requests'=>$arTStrRcvr);  

                   DB::table('bride_basic_profile')->where('user_idk', $sesId)->update($Updata);
                   DB::table('bride_basic_profile')->where('profile_id', $reqId)->update($UpdataRcvr);

              return response()->json('Removed');
            }

        public function incrPhNoCount(request $req){
        $Id=$_SESSION['id'];
        $validstat = DB::table('users')->where('user_id', $Id)->get();
        $validCnt = DB::table('bride_basic_profile')->where('user_idk', $Id)->get();
             
             $PaymentStat = $validstat[0]->payment_status; 
             $phNoCnt=$validCnt[0]->ph_num_count;

              if($PaymentStat==1 && $phNoCnt==11){
              return response()->json('0');
              }
              elseif($PaymentStat==2 && $phNoCnt==20){
              return response()->json('0');
              }
              elseif($PaymentStat==3 && $phNoCnt==30){
              return response()->json('0');
              }
               elseif($PaymentStat==4 && $phNoCnt==40){
              return response()->json('0');
              }
               elseif($PaymentStat==5 && $phNoCnt==50){
              return response()->json('0');
              }
              elseif($PaymentStat==6 && $phNoCnt==60){
              return response()->json('0');
              }
              elseif($PaymentStat==7 && $phNoCnt==70){
              return response()->json('0');
              }
              elseif($PaymentStat==8 && $phNoCnt==80){
              return response()->json('0');
              }
              elseif($PaymentStat==9 && $phNoCnt==90){
              return response()->json('0');
              }
                 else{
                  $userId=$req->input('id');
                  $Id=$_SESSION['id'];
                   $currCount= DB::table('bride_basic_profile')->where('user_idk', $Id)->get();
                   $dataIn=array('ph_num_count'=>$currCount[0]->ph_num_count+1);
                  DB::table('bride_basic_profile')->where('user_idk', $Id)->update($dataIn);
                    $phNoAudit = array('viewed_phone_num'=>$currCount[0]->viewed_phone_num.$userId.',');
                  DB::table('bride_basic_profile')->where('user_idk', $Id)->update($phNoAudit);
                   return response()->json(array('cnt'=>$phNoCnt, 'stat'=>$PaymentStat));
                 }
                 
         
        }

    //to get chat history(to whom chat)
    public function getChatHistoryByUser($user){
      $chattedUsers = [];
      $chatDir = '../chat_msgs/';
      if ($handle = opendir($chatDir)){
          while (false !== ($file = readdir($handle))){
              if ('.' === $file) continue;
              if ('..' === $file) continue;
              $fileNameSp = explode('_',explode('.',$file)[0]);
              if(count($fileNameSp) == 2 && ($fileNameSp[0] == $user || $fileNameSp[1] == $user)){
                  $toUser = ($fileNameSp[0] == $user) ? $fileNameSp[1] : $fileNameSp[0];
                  $chatMsgs = json_decode(file_get_contents($chatDir.$file),true);
                  $lastTime = $chatMsgs[$chatMsgs['lastIndex']]['time'];
                  $chattedUsers[] = ['to'=>$toUser, 'time'=>$lastTime];
                }
            }
            closedir($handle);
        }
        return json_encode($chattedUsers);
      }

/*shop register page*/
     
/*shop user page*/
   public function getWardNo(request $req){
      $getward=DB::table('ward')->where('village_name', $req->input('selectedvillage'))->select('Habitation_code')->get();
     return response()->json($getward);
    }
    public function getTaluk(request $req){
      $getTaluk=DB::table('ward_master')->where('dist_name', strtoupper($req->input('selectedDist')))->select('block_name')->distinct()->get();
     return response()->json($getTaluk);
    }
    public function get_State(request $req){
      $getTaluk=DB::table('ward_master')->where('state_name', strtoupper($req->input('selectedState')))->select('dist_name')->distinct()->get();
     return response()->json($getTaluk);
    }

    public function getVillage(request $req){
     $getvillage=DB::table('ward_master')->where('block_name', strtoupper($req->input('selectedtaluk')))->select('village_name')->get();
     return response()->json( $getvillage);
    }

    public function retrive_cast(request $request){
      $caste_val= $request->input('selectedcaste');
       $getsubcaste=DB::table('caste_masterz')->where('caste_name',$caste_val)->get();
     return response()->json($getsubcaste);
    }


//shop page and manager page  claim pay
    public function ShpClaimPay(request $req){
       $paycount = $req->input('pay');
      $oldcntdata= DB::table('users')->where('user_id',$_SESSION['id'])->get();
       if(isset($oldcntdata[0]->claimed_profile_count)){
        $oldprofcnt= $oldcntdata[0]->claimed_profile_count;
       }
      $paycntnew=  $paycount+$oldprofcnt;
          $PayAmt= $paycount*50;
          if($PayAmt<5000){
          return response()->json('0');
          }
          else{
          $data= array('claimed_profile_count'=>$paycntnew, 'claimed_amount'=>$PayAmt, 'claimed_status'=>'1');
           DB::table('users')->where('user_id',$_SESSION['id'])->update($data);
      return response()->json('claimed');
            }
    }

}






