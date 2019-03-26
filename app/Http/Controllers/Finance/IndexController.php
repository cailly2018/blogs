<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/2/13
 * Time: 20:10
 */

namespace App\Http\Controllers\Finance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\BaseController;

class IndexController extends BaseController
{

    public function __construct()
    {

        parent::__construct();
        $this->view = $this->views();
    }
    function index(Request $request){

        $page = $request->input('page');
        $orderid = $request->input('orderid');
        $s_date = $request->input('s_date');
        $e_date = $request->input('e_date');
        $status = $request->input('status');
        $channel_id = $request->input('channel');

        $where=array();
        if(!empty($orderid)){
            $where[] = array('pay_orderid','=',$orderid);

        }
        if(!empty($channel_id)){
            $where[] = array('channel_id','=',$channel_id);

        }
        if(!empty($status)){
            $where[] = array('pay_status','=',$status);
        }

        if(!empty($s_date)){
            $where[] = array('pay_applydate','>=',strtotime($s_date));
        }
        if(!empty($e_date)){
            $where[] = array('pay_applydate','<=',strtotime($e_date));
        }


        $page_s = $this->pageN($page);

        $count = DB::table('pay_order')->where($where)->count();//总订单数

        $this->view['infos'] = $count;


        $orders =  DB::table('pay_order')->where($where)->paginate($this->view['pages_sum']);
        $channel = DB::table('pay_channel')->get();


        $this->view['status'] = $status;
        $this->view['channel_id'] = $channel_id;
        $this->view['orders'] = $orders;
        $this->view['page_s'] = $page_s;

        $this->view['currentPage'] = $page;
        $this->view['orderid'] = $orderid?$orderid:'';
        $this->view['channels'] = $channel?$channel:'';

        $this->view['s_date'] = $s_date?$s_date:'';
        $this->view['e_date'] = $e_date?$e_date:'';
        $this->view['pages'] = ceil($count / $this->view['pages_sum']);
        $this->view['sum_1'] = 0;
        if($count<= $this->view['pages_sum']+1){
            $this->view['page_s'] =array(1);
        }

        return view('admin.order.index',$this->view );
    }
    function cio(){
        return view('admin.order.cio',$this->view );
    }

}