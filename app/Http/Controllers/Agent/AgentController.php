<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/2/13
 * Time: 20:10
 */

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\BaseController;

class AgentController extends BaseController
{

    public function __construct()
    {
        parent::__construct();

        $this->view = $this->views();
    }
    function index(Request $request){


        $page = $request->input('page');
        $memberid = $request->input('memberid');
        $parentid = $request->input('parentid');
        $agent_cate = $request->input('sagent_cate');
        $s_date = $request->input('s_date');
        $e_date = $request->input('e_date');

        $where=array();
        if(!empty($memberid)){
            $where[] = array('id','=',$memberid);

        }
        if(!empty($parentid)){
            $where[] = array('parentid','=',$parentid);

        }
        if(!empty($agent_cate)){
            $where[] = array('agent_cate','=',$agent_cate);
        }
        if(!empty($s_date)){
            $where[] = array('regdatetime','>=',strtotime($s_date));
        }
        if(!empty($e_date)){
            $where[] = array('regdatetime','<=',strtotime($e_date));
        }

        $count = DB::table('pay_member')->where($where)->count();//总订单数

        $members =  DB::table('pay_member')->where($where)->paginate($this->view['pages_sum'])->map(function ($value) {
            return (array)$value;
        })->toArray();
        $channel = DB::table('pay_channel')->get();



        $pages = ceil($count / $this->view['pages_sum']);
        $page_s = $this->pageN($page,$pages);

        $this->view['infos'] = $count;
        $this->view['agent_cate'] = $agent_cate;
        $this->view['lists'] = $members;
        $this->view['page_s'] = $page_s;
        $this->view['currentPage'] = $page;
        $this->view['memberid'] = $memberid?$memberid:'';
        $this->view['parentid'] = $parentid?$parentid:'';
        $this->view['channels'] = $channel?$channel:'';
        $this->view['s_date'] = $s_date?$s_date:'';
        $this->view['e_date'] = $e_date?$e_date:'';
        $this->view['pages'] = ceil($count / $this->view['pages_sum']);
        $this->view['sum_1'] = 0;
        if($count<= $this->view['pages_sum']+1){
            $this->view['page_s'] =array(1);
        }

        return view('admin.agent.index',$this->view );
    }


}