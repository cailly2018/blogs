<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/2/15
 * Time: 10:55
 */

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\BaseController;

class SystemController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->view = $this->views();
    }

    function  cio(){

        return view('admin.install.cio',$this->view);
    }
    function  install(){

       $website =  DB::table('pay_websiteconfig')->get()->map(function ($value) {
           return (array)$value;
       })->toArray();

        $this->view['website'] = $website[0];

        return view('admin.install.base',$this->view );
    }
    function save(Request $request){

        $data['websitename']       = $request->input('websitename');
        $data['domain']            = $request->input('domain');
        $data['email']             = $request->input('email');
        $data['mobile']            = $request->input('mobile');
        $data['qq']                = $request->input('qq');
        $data['directory']         = $request->input('directory');
       // $data['zhiyu']             = $request->input('zhiyu');
        $data['icp']               = $request->input('icp');
        $data['company']           = $request->input('company');
        $data['login_warning_num'] = $request->input('login_warning_num');
        $data['ptsr']              = $request->input('ptsr');
        $data['payingservice']     = $request->input('payingservice');
        $data['authorized']        = $request->input('authorized');
        $data['invitecode']        = $request->input('invitecode');
        $data['withdraw']          = $request->input('withdraw');
        $data['is_repeat_order']   = $request->input('is_repeat_order');
        $data['login_ip']          = $request->input('login_ip');
        $data['tongji']            = $request->input('tongji');
        $data['google_auth']       = $request->input('google_auth');
        $data['df_api']            = $request->input('df_api');
        $data['random_mchno']      = $request->input('random_mchno');
        $data['login']             = $request->input('login');
        $data['register_need_activate'] = $request->input('register_need_activate');
        $id = $request->input('id');
        $r =   DB::table('pay_websiteconfig') ->where('id', $id)->update($data);
        if($r){
            $this->showmessage('保存成功',  array(),1);
        }else{
            $this->showmessage('保存失败',  array(),0);
        }

    }
    function  email(){

        return view('admin.install.email',$this->view );
    }
    function  mobile(){

        return view('admin.install.mobile',$this->view );
    }

    function  planning(){
        $list =  DB::table('pay_sms')->get()
            ->map(function ($value) {
                return (array)$value;
            })->toArray();


        $sum = array();
        for ($i = 1;$i <25;$i++){
            $sum[] =   $i;
        }
        $this->view['list'] = $list[0];
        $this->view['sum'] = $sum;
        return view('admin.install.planning',$this->view );
    }
    function savep(Request $request){

        $data['postnum']   = $request->input('postnum');
        $data['allowstart']       = $request->input('allowstart');
        $data['allowend']    = $request->input('allowend');

        $id = $request->input('id');
        $r =   DB::table('pay_sms') ->where('id', $id)->update($data);
        if($r){
            $this->showmessage('保存成功',  array(),1);
        }else{
            $this->showmessage('保存失败',  array(),0);
        }
    }

    function clearData(){

        return view('admin.install.clearData',$this->view );
    }
    function editPassword(){

        return view('admin.install.editPassword',$this->view );
    }
    function smssz(){

        $list =  DB::table('pay_sms')->get()
            ->map(function ($value) {
                return (array)$value;
            })->toArray();

        $this->view['list'] = $list[0];
        return view('admin.install.smssz',$this->view );
    }
    function savesm(Request $request){

        $data['sms_channel']   = $request->input('sms_channel');
        $data['app_key']       = $request->input('app_key');
        $data['app_secret']    = $request->input('app_secret');
        $data['smsbao_pass']   = $request->input('smsbao_pass');
        $data['smsbao_user']   = $request->input('smsbao_user');
        $data['is_receive']    = $request->input('is_receive');
        $id = $request->input('id');
        $r =   DB::table('pay_sms') ->where('id', $id)->update($data);
        if($r){
            $this->showmessage('保存成功',  array(),1);
        }else{
            $this->showmessage('保存失败',  array(),0);
        }
    }
    function object_array($array) {
        if(is_object($array)) {
            $array = (array)$array;
        } if(is_array($array)) {
            foreach($array as $key=>$value) {
                $array[$key] = object_array($value);
            }
        }
        return $array;
    }

}