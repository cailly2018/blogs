<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/2/13
 * Time: 20:10
 */

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\BaseController;

class OrderController extends BaseController
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
        $status = $status?$status:0;
        if(!empty($status)){
            $where[] = array('pay_status','=',$status);
        }

        if(!empty($s_date)){
            $where[] = array('pay_applydate','>=',strtotime($s_date));
        }
        if(!empty($e_date)){
            $where[] = array('pay_applydate','<=',strtotime($e_date));
        }


        $count = DB::table('pay_order')->where($where)->count();//总订单数

        $this->view['infos'] = $count;

        $lists =  DB::table('pay_order')->where($where)->paginate($this->view['pages_sum']) ->map(function ($value) {
            return (array)$value;
        })->toArray();

        $channel = DB::table('pay_channel')->get();
        $pages = ceil($count / $this->view['pages_sum']);
        $page_s = $this->pageN($page,$pages);

        $this->view['status'] = $status;
        $this->view['channel_id'] = $channel_id;
        $this->view['lists'] = $lists;
        $this->view['page_s'] = $page_s;

        $this->view['currentPage'] =$page?$page:1;
        $this->view['orderid'] = $orderid?$orderid:'';
        $this->view['channels'] = $channel?$channel:'';

        $this->view['s_date'] = $s_date?$s_date:'';
        $this->view['e_date'] = $e_date?$e_date:'';
        $this->view['pages'] = $pages;
        $this->view['sum_1'] = 0;
        if($count<= $this->view['pages_sum']+1){
            $this->view['page_s'] =array(1);
        }

        return view('admin.order.index',$this->view );
    }

    function changeRecord(Request $request){
        $page = $request->input('page');
        $s_date = $request->input('s_date');
        $e_date = $request->input('e_date');
        $channel_id = $request->input('channel');
        //通道
        $banklist =  DB::table('pay_product')->pluck('id','name','code')->map(function ($value) {
            return (array)$value;
        })->toArray();

        $where    = array();
        $memberid = $request->input('memberid');
        if ($memberid) {
            $where['userid'] = array('eq', ($memberid - 10000) > 0 ? ($memberid - 10000) : 0);
        }
        $where=array();
        if(!empty($memberid)){
            $where[] = array('memberid','=',($memberid - 10000) > 0 ? ($memberid - 10000) : 0);

        }
        $orderid = $request->input('orderid');

        if ($orderid) {
            $where[] = array('orderid','=', $orderid);
        }
        $tongdao = $request->input('tongdao');

        if ($tongdao) {
            $where[] = array('tongdao','=', $tongdao);
        }

        $count = DB::table('pay_moneychange')->where($where)->count();
        $lists = DB::table('pay_moneychange')->where($where)->paginate($this->view['pages_sum'])->map(function ($value) {
            return (array)$value;
        })->toArray();


        $pages = ceil($count / $this->view['pages_sum']);
        $page_s = $this->pageN($page,$pages);

        $channel = DB::table('pay_channel')->get() ->map(function ($value) {
            return (array)$value;
        })->toArray();
        $this->view['channels'] = $channel?$channel:'';
        $this->view['memberid'] = $memberid;
        $this->view['orderid'] = $orderid;
        $this->view['lists'] = $lists;
        $this->view['page_s'] = $page_s;
        $this->view['channel_id'] = $channel_id;
        $this->view['s_date'] = $s_date?$s_date:'';
        $this->view['e_date'] = $e_date?$e_date:'';
        $this->view['currentPage'] = $page?$page:1;
        $this->view['orderid'] = $orderid?$orderid:'';
        $this->view['pages'] = $pages;
        $this->view['sum_1'] = 0;
        if($count<= $this->view['pages_sum']+1){
            $this->view['page_s'] =array(1);
        }

        return view('admin.order.changerecord',$this->view );
    }
}