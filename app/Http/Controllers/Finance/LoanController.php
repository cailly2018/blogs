<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/22
 * Time: 12:57
 */

namespace App\Http\Controllers\Finance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\BaseController;
class LoanController  extends BaseController
{
    public function __construct()
    {

        parent::__construct();

        $this->view = $this->views();
    }
    function index(Request $request){

        $page = $request->input('page');
        $s_date = $request->input('s_date');
        $status = $request->input('status');

        $where=array();

        if(!empty($status)){
            $where[] = array('isback','=',$status);
        }
        if(!empty($s_date)){
            $where[] = array('backday','=',$s_date);
        }

        $count = DB::table('fin_bank_house_loan')->where($where)->count();
        $this->view['infos'] = $count;

        $banks =  DB::table('fin_bank_house_loan')->where($where)->paginate($this->view['pages_sum'])
            ->map(function ($value) {
               return (array)$value;
             })->toArray();

        $all = DB::table('fin_bank_house_loan')->sum('payments');
        $ball = DB::table('fin_bank_house_loan')->where(array(['isback','=',1]))->sum('payments');
        $nall = DB::table('fin_bank_house_loan')->where(array(['isback','=',2]))->sum('payments');
        $sum = DB::table('fin_bank_house_loan')->where(array(['isback','=',1]))->count();;


        $pages = ceil($count / $this->view['pages_sum']);
        $page_s = $this->pageN($page,$pages);

        $this->view['all'] = $all;
        $this->view['ball'] = $ball;
        $this->view['nall'] = $nall;
        $this->view['sum'] = $sum;

        $this->view['lists'] = $banks;
        $this->view['status'] = $status;
        $this->view['page_s'] = $page_s;
        $this->view['currentPage'] = $page;
        $this->view['s_date'] = $s_date?$s_date:'';
        $this->view['pages'] = $pages;
        $this->view['sum_1'] = 0;
        if($count<= $this->view['pages_sum']+1){
            $this->view['page_s'] =array(1);
        }

        return view('admin.finance.index',$this->view );
    }
    function save(Request $request){

        $data['isback'] =1;
        $data['uptime'] =time();
        $id = $request->input('id');
        $r =   DB::table('fin_bank_house_loan') ->where('id', $id)->update($data);
        if($r){
            $this->showmessage('保存成功',  array(),1);
        }else{
            $this->showmessage('保存失败',  array(),0);
        }

    }
}