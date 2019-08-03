<?php
Route::get('/', 'Controller@HomePageLoad');
Route::get('logout_app', 'Controller@logoutApp');

Route::post('welcome', 'Controller@userRegistration');

Route::view('password-reset', 'password-reset');
Route::post('url/resetting_pwd', 'Controller@resettingPwd');

Route::post('url/pwd_reset', 'Controller@pwdReset');

Route::post('url/profile_submit', 'Controller@profileSubmit');
Route::post('url/image_uploadurl', 'Controller@uploadImage');
Route::post('horoscope_uploadurl', 'Controller@upload_horoscope');


Route::post('secondry_registration/submit', 'Controller@sec_reg_submit');
Route::post('url/login', 'Controller@login');
Route::post('url/logout', 'Controller@logout');

Route::post('otp-check', 'Controller@CheckOTP');

Route::group(['middleware' => 'profile_check'], function(){      //route group starts here

Route::get('register2', 'Controller@register2Page');
Route::get('index', 'Controller@indexPage');
Route::get('secondary_registration', 'Controller@secondry_registration');
Route::get('profile', 'Controller@profile');
Route::get('payment', 'Controller@payment');
Route::get('image_upload', 'Controller@image_upload');

Route::get('horoscope_upload', 'Controller@horoscope_upload');
Route::post('url/horoscope_uploadurl', 'Controller@uploadHoroscope');

Route::get('profile_matches', 'Controller@profile_matches');
Route::post('url/profile_intrest', 'Controller@profile_Intr');
Route::get('url/notification', 'Controller@notifications');
Route::get('notification', 'Controller@loadNotification');
Route::post('accept_matri_req', 'Controller@acceptMatriReq');
Route::post('reject_matri_req', 'Controller@rejectMatriReq');
Route::post('remove_send_matri_req', 'Controller@removeSndMatriReq');

Route::get('chat', 'Controller@chatprof');
Route::post('chat_with_user', 'Controller@chatWithUser');
Route::post('chat_new', 'Controller@startChat');
Route::post('matrimony_search', 'Controller@Matrisearch');
Route::get('searchresult', 'Controller@searchresult');
Route::post('save_phno_count', 'Controller@incrPhNoCount');
Route::post('url/profile_details', 'Controller@prof_model');
Route::get('edit_profile', 'Controller@editprof');
Route::get('view_profile', 'Controller@viewprof');
Route::get('contact', 'Controller@contactus');
Route::post('payment_success', 'Controller@payment_success');

//payment
Route::post('make_basic_payment', 'Controller@make_basic_payment');
Route::get('make_basic_payment', 'Controller@make_basic_payment');
Route::post('make_gold_payment', 'Controller@make_gold_payment');
Route::post('make_platinum_payment', 'Controller@make_platinum_payment');
Route::post('make_emerald_payment', 'Controller@make_emerald_payment');
Route::post('make_sapphire_payment', 'Controller@make_sapphire_payment');
Route::post('make_pearl_payment', 'Controller@make_pearl_payment');
Route::post('make_rubby_payment', 'Controller@make_rubby_payment');
Route::post('make_alexandrite_payment', 'Controller@make_alexandrite_payment');
Route::post('make_operl_payment', 'Controller@make_operl_payment');
Route::post('make_garnet_payment', 'Controller@make_garnet_payment');
Route::post('make_diamond_payment', 'Controller@make_diamond_payment');

//admin  page  routes   --- inside the route group to use same login page.
Route::get('admin/login/home', 'Admincontroller@admin');
Route::get('admin/login/admin_search', 'Admincontroller@adminsearch');
Route::get('admin/login/registered-users', 'Admincontroller@regUsers');
Route::get('admin/login/payment_history', 'Admincontroller@payment_history');
Route::get('admin/login/chat_history', 'Admincontroller@chat_history');
Route::get('admin/login/admin_shop_reg', 'Admincontroller@shop_reg');
Route::get('admin/login/admin_manager_reg', 'Admincontroller@shop_manger_reg');
Route::get('admin/login/admin_manager_payment', 'Admincontroller@adm_manager_payment');
Route::get('admin/login/admin_shop_payment', 'Admincontroller@adm_shop_payment');
Route::get('admin/login/adminlogin', 'Admincontroller@adminlogin');

Route::get('admin/login/adminurl/regusers', 'Admincontroller@regUsersRedirect');
Route::post('admin/login/adminurl/admin_search_ajx', 'Admincontroller@adminsearchajx');
Route::post('admin/login/adminurl/admin_search_prof_delte', 'Admincontroller@adminsearch_pro_dlt_ajx');
Route::get('admin/login/adminurl/admin_view_prof', 'Admincontroller@adminProfView');
Route::get('admin/login/adminurl/admin_chat_View', 'Admincontroller@adminchatView');
Route::post('admin/login/adminurl/adin_del_users', 'Admincontroller@adminDelusers');
Route::post('admin/login/adminurl/admin_usr_pwdchange', 'Admincontroller@adminUsrPwdChg');
Route::post('admin/login/adminurl/adminChat_hist', 'Admincontroller@adminChatHist');
Route::post('admin/login/adminurl/admin_shop_reg', 'Admincontroller@admin_shop_reg_ajx');
Route::post('admin/login/adminurl/admin_manager_reg', 'Admincontroller@manager_reg_ajx');
Route::post('admin/login/adminurl/admin_shop_pay_rld', 'Admincontroller@admn_shop_pay_rld');
Route::post('admin/login/adminurl/admin_manager_pay_rld', 'Admincontroller@admn_manager_pay_rld');
Route::post('admin/login/adminurl/admin_shop_paid_rld', 'Admincontroller@admn_shp_paid_rld');
Route::post('admin/login/adminurl/admin_managr_paid_rld', 'Admincontroller@admn_mangr_paid_rld');
Route::post('admin/login/adminurl/shp_cnt_chk', 'Admincontroller@shpCnt');

Route::post('admin/login/get_ward', 'Controller@getWardNo');
Route::post('admin/login/get_village', 'Controller@getVillage');
Route::post('admin/login/get_taluk', 'Controller@getTaluk');
Route::post('admin/login/get_caste', 'Controller@retrive_cast');
Route::post('admin/login/get_state', 'Controller@get_State');

//manager users
Route::get('shopManager/manager_management', 'Managercontroller@manager_users');
Route::post('shopManager/manager_management_ajx', 'Managercontroller@manager_users_ajx');
Route::post('shopManager/shopmanager_management_ajx', 'Managercontroller@shopmanager_ajx');
Route::post('shopManager/created_profile_ajx', 'Managercontroller@created_prof_ajx');

Route::post('shopManager/managerclaimpay_ajx', 'Controller@ShpClaimPay');
Route::post('shopManager/get_taluk', 'Controller@getTaluk');
Route::post('shopManager/get_village', 'Controller@getVillage');
Route::post('shopManager/get_ward', 'Controller@getWardNo');
Route::post('shopManager/get_caste', 'Controller@retrive_cast');
Route::post('shopManager/get_state', 'Controller@get_State');
//shop users
Route::get('shopUsers/profile_management', 'Shopcontroller@shop_users');
Route::post('shopUsers/profile_management_ajx', 'Shopcontroller@shop_users_ajx');
Route::post('shopUsers/shop_usr_shop_registration_ajx', 'Shopcontroller@shop_shop_reg_ajx');
Route::post('shopUsers/created_profile_shoper_ajx', 'Shopcontroller@created_prof_shoper_ajx');
Route::post('shopUsers/ownerpic_upload', 'Shopcontroller@uploadownerpic');
Route::post('shopUsers/ownergprof_upload', 'Shopcontroller@uploadgovtprof');

Route::post('shopUsers/shopclaimpay_ajx', 'Controller@ShpClaimPay');
Route::post('shopUsers/get_village', 'Controller@getVillage');
Route::post('shopUsers/get_ward', 'Controller@getWardNo');
Route::post('shopUsers/get_caste', 'Controller@retrive_cast');
Route::post('shopUsers/get_taluk', 'Controller@getTaluk');
Route::post('shopUsers/get_state', 'Controller@get_State');

Route::get('superAdmin/home', 'superAdminController@superadminhome');
Route::post('superAdmin/search_catse', 'superAdminController@superAdminSearch');
Route::post('superAdmin/get_caste', 'superAdminController@superadminretrive_cast');

Route::get('superAdmin/subBranchUsers/home', 'superAdminController@subBranchesHome');
Route::post('superAdmin/subBranchUsers/get_caste', 'superAdminController@subBranchretrive_cast');
Route::post('superAdmin/subBranchUsers/search_catse', 'superAdminController@subBranchSprAdmSearch');

// Accounts Route
Route::get('accounts/home', 'accountsController@home');
Route::post('accounts/get_caste', 'accountsController@accounts_cast');
Route::post('accounts/search_catse', 'accountsController@accountSearch');

});   

Route::post('superAdmin/subBranchUsers/horoscope_uploadurl', 'Controller@upload_horoscope');

Route::post('superAdmin/sup_ad_direct_login', 'Controller@login');
Route::post('supradmn_setprof_status', 'superAdminController@supradmn_profiles');
Route::post('superAdmin/supradmn_changestatus', 'superAdminController@superAdmin_changestatus');
Route::post('superAdmin/superadmn_commnt_update', 'superAdminController@superAdmin_sub_commnt_update');
Route::post('superAdmin/superadmn_delete_btn', 'superAdminController@superadmn_delete');

Route::post('superAdmin/subBranchUsers/sup_ad_direct_login', 'Controller@login');
Route::post('superAdmin/subBranchUsers/supradmn_setprof_status', 'superAdminController@subBranchProfiles');
Route::post('superAdmin/subBranchUsers/supradmn_changestatus', 'superAdminController@subBranches_changestatus');
Route::post('superAdmin/subBranchUsers/superadmn_commnt_update', 'superAdminController@superAdmin_commnt_update');
// route group ends here
Route::post('main_page_search', 'Controller@MainPgSrch');
Route::post('url/profile_details', 'Controller@prof_model');
Route::get('edit_profile', 'Controller@editprof');
Route::get('view_profile', 'Controller@viewprof');
Route::get('contact', 'Controller@contactus');

Route::post('payment_success', 'Controller@payment_success');

Route::post('get_village', 'Controller@getVillage');
Route::post('get_taluk', 'Controller@getTaluk');
Route::post('get_caste', 'Controller@retrive_cast');
Route::post('get_state', 'Controller@get_State');



Route::get('profile/today', 'superAdminController@WhatsappProfile');
Route::get('profile/all_profile', 'superAdminController@allWhatsappProfile');
