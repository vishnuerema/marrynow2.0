<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use session;
use Cache;

class superAdminController extends Controller
{

  public function encryptx($number){
    $enc_str = [ "0" => "5", "1" => "6", "2" => "7", "3" => "1", "4" => "2", "5" => "9", "6" => "0", "7" => "3", "8" => "4", "9" => "8", "a" => "q", "b" => "a", "c" => "z", "d" => "p", "e" => "l", "f" => "m", "g" => "x", "h" => "s", "i" => "w", "j" => "k", "k" => "o", "l" => "e", "m" => "d", "n" => "c", "o" => "n", "p" => "j", "q" => "i", "r" => "v", "s" => "f", "t" => "r", "u" => "h", "v" => "u", "w" => "y", "x" => "t", "y" => "b", "z" => "g"];
    $base = base64_encode($number);
    $new = "";
    for($i=0; $i<strlen($base); $i++){
        $upper_chk = false;
        if(ctype_upper($base[$i])){
            $upper_chk = true;
        }
        $base[$i] = strtolower($base[$i]);
        if(isset($enc_str[$base[$i]])){
            $new_letter = $enc_str[$base[$i]];
        }else{
            $new_letter = $base[$i];
        }
        if($upper_chk == true){
            $new .= strtoupper($new_letter);
        }else{
            $new .= $new_letter;
        }
    }
    for($i = 0; $i < 5; $i++){
        $new = base64_encode($new);
    }
    return $new;
}


    public function superadminhome(){
     $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
     $subcaste = DB::table('caste_masterz')->get();
     $supradmn_status = DB::table('superadmin_status_master')->get();
     $supradmn_status = DB::table('superadmin_status_master')->get();

    $URL =  "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $expUrl = explode('/', $URL);

  
    return view('superAdmin/home', compact('caste', 'subcaste', 'supradmn_status')); 

    } 

    public function superadminretrive_cast(request $request){
      $caste_val= $request->input('selectedcaste');
       $getsubcaste=DB::table('caste_masterz')->where('caste_name',$caste_val)->get();
     return response()->json($getsubcaste);
    }

    public function superAdminSearch(Request $req){
      $caste = $req->input('caste');
      $gender = $req->input('gender');
      $subCaste = $req->input('subcaste');
        if(isset($gender) && $caste=="" && $subCaste=="" ){
            $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('role', '0')->where('profile_gender', $gender)->get();
        }
	      elseif(isset($caste) && $subCaste=="" ) {
	         $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_cast', $caste)->where('role', '0')->where('profile_gender', $gender)->get();
	      }elseif(isset($caste) && isset($subCaste)) {
	      	 $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_cast', $caste)->where('user_sub_caste', $subCaste)->where('role', '0')->where('profile_gender', $gender)->get();
	      }
      foreach($resData as $key=>$val){
        $resData[$key]->encrypt_id = $this->encryptx($resData[$key]->user_id);
      }
    return response()->json($resData); 
    }

    public function supradmn_profiles(Request $request){
    	$formdata = $request->all();
    	session_start();
    	$id = $_SESSION['id'];
    	$supradmindata = array('hist_user_idk'=>$id,'hist_profile_idk'=>$formdata['spradmn_usridk'],'hist_user_name'=>$formdata['spradmn_profname'],'hist_user_caste'=>$formdata['spradmn_caste'],'hist_user_age'=>$formdata['spradmn_age'],'hist_user_status'=>$formdata['spradmn_status'],'hist_user_comments'=>$formdata['txtarea_spradmn']);
    $getOldData =   DB::table('superadmin_call_history')->where('hist_user_idk', $id)->where('hist_profile_idk', $formdata['spradmn_usridk'])->get();
          if(count($getOldData)==0){
          DB::table('superadmin_call_history')->insert($supradmindata);
          }else{
          DB::table('superadmin_call_history')->update($supradmindata);
          }
    	if($formdata['spradmn_status']=="Both met and alliance fixed"){
    		$changestatus = array('super_admin_status'=>$formdata['spradmn_status']);
    	DB::table('users')->where('user_id', $id)->update($changestatus);
    	}
    	return response()->json('done');
    } 

     public function superAdmin_changestatus(Request $request){
      $valuedata = $request->all();
      $changestatus = array('super_admin_status'=>$valuedata['spradmn_status']);
      DB::table('users')->where('user_id', $valuedata['id'])->update($changestatus);
      return response()->json('done');
    }

/*sub branch super admin*/
     public function subBranchesHome(){
     $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
     $subcaste = DB::table('caste_masterz')->get();
     $supradmn_status = DB::table('superadmin_status_master')->get();
     $supradmn_status = DB::table('superadmin_status_master')->get();

    return view('superAdmin/subBranchUsers/home', compact('caste', 'subcaste', 'supradmn_status')); 
  
    }

    public function subBranchretrive_cast(request $request){
      $caste_val= $request->input('selectedcaste');
       $getsubcaste=DB::table('caste_masterz')->where('caste_name',$caste_val)->get();
     return response()->json($getsubcaste);
    }

    public function subBranchSprAdmSearch(Request $req){
      $caste = $req->input('caste');
      $gender = $req->input('gender');
      $subCaste = $req->input('subcaste');
      if(isset($gender) && $caste=="" && $subCaste=="" ){
        $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('role', '0')->where('profile_gender', $gender)->get();
        }
        elseif(isset($caste) && $subCaste=="" ) {
           $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_cast', $caste)->where('role', '0')->where('profile_gender', $gender)->get();
        } elseif(isset($caste) && isset($subCaste)) {
           $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_cast', $caste)->where('user_sub_caste', $subCaste)->where('role', '0')->where('profile_gender', $gender)->get();
        }
         foreach($resData as $key=>$val){
        $resData[$key]->encrypt_id = $this->encryptx($resData[$key]->user_id);
      }
    return response()->json($resData); 
    }

    public function subBranchProfiles(Request $request){
      $formdata = $request->all();
      session_start();
      $id = $_SESSION['id'];
      $supradmindata = array('hist_user_idk'=>$id,'hist_profile_idk'=>$formdata['spradmn_usridk'],'hist_user_name'=>$formdata['spradmn_profname'],'hist_user_caste'=>$formdata['spradmn_caste'],'hist_user_age'=>$formdata['spradmn_age'],'hist_user_status'=>$formdata['spradmn_status'],'hist_user_comments'=>$formdata['txtarea_spradmn']);
      DB::table('superadmin_call_history')->insert($supradmindata);
      if($formdata['spradmn_status']=="Both met and alliance fixed"){
        $changestatus = array('super_admin_status'=>$formdata['spradmn_status']);
      DB::table('users')->where('user_id', $id)->update($changestatus);
      }
      return response()->json('done');
    } 
    
    public function subBranches_changestatus(Request $request){
    	$valuedata = $request->all();
    	$changestatus = array('super_admin_status'=>$valuedata['spradmn_status']);
    	DB::table('users')->where('user_id', $valuedata['id'])->update($changestatus);
    	return response()->json('done');
    }


function decryptx($phase){
    $dec_str = [  "5" => "0", "6" => "1", "7" => "2", "1" => "3", "2" => "4", "9" => "5", "0" => "6", "3" => "7", "4" => "8", "8" => "9", "q" => "a", "a" => "b", "z" => "c", "p" => "d", "l" => "e", "m" => "f", "x" => "g", "s" => "h", "w" => "i", "k" => "j", "o" => "k", "e" => "l", "d" => "m", "c" => "n", "n" => "o", "j" => "p", "i" => "q", "v" => "r", "f" => "s", "r" => "t", "h" => "u", "u" => "v", "y" => "w", "t" => "x", "b" => "y", "g" => "z"];
    $new = "";
    for($i = 0; $i < 5; $i++){
        $phase = base64_decode($phase);
    }
    for($i=0; $i<strlen($phase); $i++){
        $upper_chk = false;
        if(ctype_upper($phase[$i])){
            $upper_chk = true;
        }
        $phase[$i] = strtolower($phase[$i]);
        if(isset($dec_str[$phase[$i]])){
            $new_letter = $dec_str[$phase[$i]];
        }else{
            $new_letter = $phase[$i];
        }
        if($upper_chk == true){
            $new .= strtoupper($new_letter);
        }else{
            $new .= $new_letter;
        }
    }
    $base = base64_decode($new);
    return $base;
}

    public function WhatsappProfile(Request $request){
       $id = $this->decryptx($_GET['prof']);
       $data = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_id', $id)->get();
      return view('profile/today', compact('data'));
    }

    public function allWhatsappProfile(Request $request){
       $id = $this->decryptx($_GET['prof']);
       $data = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_id', $id)->get();
            $caste= $data[0]->user_cast;
            $subCaste= $data[0]->user_sub_caste;
            $relegion= $data[0]->prof_relegion;
            $gender= $data[0]->profile_gender;
      $profile = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_cast', $caste)->where('user_sub_caste', $subCaste)->where('prof_relegion', $relegion)->where('profile_gender', $gender)->where('user_id','!=', $id)->get();

      return view('profile/all_profile', compact('profile'));
    }

    public function superAdmin_commnt_update(Request $request){
       $commentdata = $request->all();
        $comment_arrdata = array('super_admin_comments'=>$commentdata['commnt_superadmn']);
        DB::table('users')->where('user_id', $commentdata['user_id'])->update($comment_arrdata);
       return response()->json('done');
    }

    public function superAdmin_sub_commnt_update(Request $request){
       $commentdata = $request->all();
        $comment_arrdata = array('super_admin_comments'=>$commentdata['commnt_superadmn']);
        DB::table('users')->where('user_id', $commentdata['user_id'])->update($comment_arrdata);
       return response()->json('done');
    } 

    public function superadmn_delete(Request $request){
       $commentdata = $request->all();
        $delUser =   DB::table("users")->Where('user_matri_id', $commentdata['id'])->get();
       if(isset($commentdata['id']) && $commentdata['deleteType']=='permanent'){
        DB::table("users")->Where('user_matri_id', $commentdata['id'])->delete();
        DB::table("bride_basic_profile")->Where('user_idk', $delUser[0]->user_id)->delete();

      }
    //elseif (isset($commentdata['id']) && $commentdata['deleteType']=='duplicate') {

    // $dupprofdata = DB::table("bride_basic_profile")->Where('user_idk', $delUser[0]->user_id)->get();
    //    if(count($dupprofdata)> 1){

    //       // $same_data_before = clone $dupprofdata;
    //       // print_r($same_data_before);
    //       $top = $dupprofdata->first();
    //       DB::table("bride_basic_profile")->Where('user_idk', $delUser[0]->user_id)->where('profile_id', '!=', $top->profile_id)->delete();

    //    }

      // } 
      // else{

      // }
    }

}
