<?php
namespace App\Http\Middleware;
use Closure;
use session;
use Auth;
use DB;
use Request;
use Cache;


class validateuser   //validates user logged in or not also redirect to page after login 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

    $url_re = implode('/',array_slice(explode('/',Request::url()),5));

       session_start();
       if(!isset($_SESSION['id'])){
        return redirect('/');
       }
       else{
       $user_id=$_SESSION['id'];
       $user = DB::table('users')->where('user_id',$user_id)->get();
         $profileStatus=$user[0]->profile_completed_status;
        if($url_re!=="register2"){
            if($profileStatus=="0"){
            return redirect('register2');
         }
     }
      if ($_SESSION['id']!='')
            {
            $expiresAt = now()->addSeconds(25);
            Cache::forget('user-is-online'.$_SESSION['id']);
            Cache::add('user-is-online'.$_SESSION['id'],true,$expiresAt);
           }

      // $user=$_SESSION['id'];
      //   $UserFile = '../chat_msgs/'.$user.'.json';
      //   if(file_exists($UserFile)){
      //    $x= file_get_contents($UserFile);
      //  $y=json_decode($x);
      //   $_SESSION['newtxt']=$y;

      //   }else{
      //     return json_encode([]);
      //   }

    return $next($request);
    }  


}
    


}
