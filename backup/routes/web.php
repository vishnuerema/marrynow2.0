<?php
Route::get('/', 'Controller@HomePageLoad');//load page (in & out)
/*vr_laravel*/
// Route::get('register2', 'Controller@reg2');
/*vr_laravel*/
Route::post('welcome', 'Controller@userRegistration');//load page (in & out)
// Route::get('register1', 'Controller@register1Page');//index load with some existinhg user data(out)
Route::get('register2', 'Controller@register2Page');//index load with some existinhg user data(out)
Route::get('index', 'Controller@indexPage');//index load with some existinhg user data(out)
Route::get('image_upload', 'Controller@image_upload');//index load with some existinhg user data(out)

Route::post('url/profile_submit', 'Controller@profileSubmit');//proile submit (in)
Route::post('url/image_uploadurl', 'Controller@uploadImage');//proile submit (in)

/*Route::get('secondary_registration', function () {
    return view('secondary_registration');
 });*/
Route::get('secondary_registration', 'Controller@secondry_registration');//proile submit (in)
Route::post('secondry_registration/submit', 'Controller@sec_reg_submit');//proile submit (in)

Route::get('payment', 'Controller@payment');//load page (in & out)
Route::post('url/login', 'Controller@login');//proile submit (in)
Route::post('url/logout', 'Controller@logout');//proile submit (in)

Route::get('profile', 'Controller@profile');//load page (in & out)
Route::get('profile_matches', 'Controller@profile_matches');//load page (in & out)