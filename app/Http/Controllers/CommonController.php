<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
/**
 * Description of BaseController
 * Date 2018/7/3
 * @author xiaoyukarl
 */

class CommonController extends Controller
{

    protected $imgExt = ['jpg','jpeg','png','gif'];

    protected $pageNum = 30;//分页大小
    function getInfo($key){
       // Redis::set('name', 'laravel');
        $user=Redis::get($key);

        return $user;

    }
    function setInfo($key,$data){

        return   Redis::set($key, json_encode($data));
    }


    /**
     * @return string
     * hank
     * 获取IP
     */
    protected static function getIP()
    {
        if (!empty($_SERVER["HTTP_SK_P_REAL_IP"])) {
            $cip = $_SERVER["HTTP_SK_P_REAL_IP"];
        } elseif (!empty($_SERVER["REMOTE_ADDR"])) {
            $cip = $_SERVER["REMOTE_ADDR"];
        } else {
            $cip = '';
        }

        preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $cip, $cips);
        $cip = isset($cips[0]) ? $cips[0] : '';
        return $cip;
    }

    /**
     * @param int $num
     * @return string
     * hank
     * 获取随机数据 用于初始化密码等
     */
    protected static function getAllRandCode($num = 20)
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $strRnds = '';
        for ($i = 0; $i < $num; $i++) {
            $strRnds .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $strRnds;
    }

    /**
     * @return string
     * hank
     * 获取昵称
     */
    protected static function getNickName()
    {
        $randName = self::getNumRand(5);
        return config('app.name'). $randName;
    }

    /**
     * @param $num
     * @return string
     * hank
     * 数字验证码
     */
    protected static function getNumRand($num) {
        $str = '';
        for ($i = 0; $i < $num; $i++) {
            $str .= mt_rand(0, 9);
        }
        return $str;
    }

    /**
     * @param string $preKey
     * @param int $num
     * @return string
     * hank
     * 随机数，文件名或订单号
     */
    protected static function getRandNum($preKey='', $num=5)
    {
        $str = '';
        for ($i = 0; $i < $num; $i++) {
            $str .= mt_rand(0, 9);
        }
        return $preKey . date("ymdHis", time()) . $str;
    }

    public function uploadFile($request,$key,$save_dir,$exts)
    {
        if ($request->hasFile($key)) {
            $file = $request->file($key);
            $extension = $file->extension();
            if(!in_array($extension,$exts)){
                return ['msg'=>'文件格式必须为'.implode(',',$exts)];
            }
            $dir = $save_dir.date('Ym');
            if(!is_dir(public_path('upload/'.$dir))){
                mkdir(public_path('upload/'.$dir));
            }
            $save_path = $file->store($dir);
            return $save_path;
        }else{
            return ['msg'=>'上传文件不存在'];
        }
    }
    function guid(){
        if (function_exists('com_create_guid')){
            return com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
            return $uuid;
        }
    }
     function showmessage($msg = '', $fields = array(),$code=0)
    {
        header('Content-Type:application/json; charset=utf-8');
        $data = array('code' => $code, 'msg' => $msg, 'data' => $fields);
        echo json_encode($data, 320);
        exit;
    }
}