<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
    //  * @var bool
    //  */
    // protected $addHttpCookie = true;
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = ['welcome','url/profile_submit','secondry_registration/submit','url/login','url/logout','url/image_uploadurl','url/profile_details','url/pwd_reset','url/resetting_pwd','url/profile_intrest','url/notification','admin/login/adminurl/adin_del_users','admin/login/adminurl/admin_usr_pwdchange'];
}
