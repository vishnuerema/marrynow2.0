<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use session;
use Cache;

class accountsController extends Controller
{
    public function home(){
     $caste = DB::table('caste_masterz')->select('caste_name')->distinct()->get();
     $subcaste = DB::table('caste_masterz')->get();
     $supradmn_status = DB::table('superadmin_status_master')->get();
     $supradmn_status = DB::table('superadmin_status_master')->get();
     return view('accounts/home', compact('caste', 'subcaste', 'supradmn_status'));
    }

    public function accounts_cast(request $request){
     $caste_val= $request->input('selectedcaste');
       $getsubcaste=DB::table('caste_masterz')->where('caste_name',$caste_val)->get();
     return response()->json($getsubcaste);
    }

    public function accountSearch(Request $req){
      $caste = $req->input('caste');
      $subCaste = $req->input('subcaste');
	      if(isset($caste) && $subCaste=="" ) {
	         $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_cast', $caste)->where('role', '0')->get();
	      } elseif(isset($caste) && isset($subCaste)) {
	      	 $resData = DB::table('users')->leftjoin('bride_basic_profile','users.user_id','=','bride_basic_profile.user_idk')->where('user_cast', $caste)->where('user_sub_caste', $subCaste)->where('role', '0')->get();
	      }
    return response()->json($resData); 
    }


}
