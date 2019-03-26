<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\DB;


class LoginController extends CommonController
{

    /**
     * 显示后台登录模板
     */
    public function showLoginForms()
    {
        if(!isset($_COOKIE['auth'])) {
            return view('admin.login');
        }else{
            redirect("admin/index")->send();
        }

    }
    public function login(Request $request)
    {

        $name = $request->input('name');
        $password = $request->input('password');
        if(empty($name)){
            redirect("admin/login")->send();
        }
        if(empty($password)){
            redirect("admin/login")->send();
        }

        $password =  md5($name.$password.$name);

        $admins = DB::table('pay_admin')->where([['username', '=', $name],['password', '=', $password]])->get()->map(function ($value) {
            return (array)$value;
        })->toArray();

        $admin =  $admins[0];

        if(empty($admin)){
            redirect("admin/login")->send();
        }
        $userLoginIp = $request->getClientIp();
        $auth = md5(time().$name.rand());
        $this->setInfo("info_auth:".$auth,$admin);
        setcookie("auth",$auth,time()+86400);

        return  redirect("admin/index");
    }


    public function logouts(Request $request){
         setcookie("auth","",time()-1);
         redirect('admin/login')->send();
    }

}