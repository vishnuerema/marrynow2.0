<?php


Route::get('/', 'Controller@HomePageLoad');//load page (in & out)

Route::post('welcome', 'Controller@userRegistration');//load page (in & out)

Route::view('password-reset', 'password-reset');
Route::post('url/resetting_pwd', 'Controller@resettingPwd');

Route::post('url/pwd_reset', 'Controller@pwdReset');//proile submit (in)

Route::post('url/profile_submit', 'Controller@profileSubmit');//proile submit (in)
Route::post('url/image_uploadurl', 'Controller@uploadImage');//proile submit (in)

Route::post('secondry_registration/submit', 'Controller@sec_reg_submit');//proile submit (in)
Route::post('url/login', 'Controller@login');//proile submit (in)
Route::post('url/logout', 'Controller@logout');//proile submit (in)

Route::group(['middleware' => 'profile_check'], function(){
Route::get('register2', 'Controller@register2Page');
Route::get('index', 'Controller@indexPage');
Route::get('secondary_registration', 'Controller@secondry_registration');
Route::get('profile', 'Controller@profile');//load page (in & out)
Route::get('payment', 'Controller@payment');//load page (in & out)
Route::get('image_upload', 'Controller@image_upload');//index load with some existinhg user data(out)
Route::get('profile_matches', 'Controller@profile_matches');//load page (in & out)
});
Route::post('url/profile_details', 'Controller@prof_model');
Route::get('edit_profile', 'Controller@editprof');
Route::get('view_profile', 'Controller@viewprof');
Route::get('chat', 'Controller@chatprof');
Route::get('contact', 'Controller@contactus');
Route::get('make_basic_payment', 'Controller@make_basic_payment');







/*vr_laravel*/
// Route::get('register2', 'Controller@reg2');
/*vr_laravel*/
// Route::get('register1', 'Controller@register1Page');//index load with some existinhg user data(out)
//index load with some existinhg user data(out)
//index load with some existinhg user data(out)
/*Route::get('secondary_registration', function () {
    return view('secondary_registration');
 });*/
//proile submit (in)