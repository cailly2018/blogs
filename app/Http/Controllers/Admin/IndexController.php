<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->view = $this->views();
    }


    /**
     * 显示后台管理模板首页
     */
    public function index(Request $request)
    {

        $count = DB::table('pay_order')/*->where(['third_key' => $third_key])*/->count();//总订单数

        $this->view['infos'] = $count;

       // print_r( $this->view);die;

        return view('admin.index.index',  $this->view  );

    }
}