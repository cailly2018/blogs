<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\DB;
class BaseController extends CommonController
{

    public function __construct(){

        if(!isset($_COOKIE['auth']) ) {
            redirect("admin/login")->send();
        }else{
            if(empty($this->info_auth())){
                setcookie("auth","",time()-1);
            }
        }
    }
    function daohang($fun){
        //导航
        $rule = DB::table('pay_auth_rule')->get();
        $rule =   json_decode(json_encode($rule), true);

        $rules = array();
        if($rule){
            foreach ( $rule as $key=>$v){
                if($v['pid'] == 0){
                    $v['pid2'] =array();
                    $rules[] = $v  ;
                }
            }
        }
        if($rules){
            foreach ($rules as $ke=>$v1){
                $pid2 =  array();

                foreach ( $rule as $ke2=>$v2){
                    if($v2['pid'] == 0){
                        continue;
                    }

                    if($v1['id'] == $v2['pid']){
                        $v2['fun'] = '';
                        if($fun== 'index' && $v2['pid']==1){
                            $v2['fun'] =  'active' ;
                        }

                        $pid2[] =$v2;
                    }
                }
                $rules[$ke]['pid2'] =$pid2;
            }

            foreach ($rules as $ke=>$v1){

                if(!empty($v1['pid2'])){
                    foreach ($v1['pid2'] as $ke2=>$v2){
                        $v1['pid2'][$ke2]['pid3'] = array();
                        $pid3 =  array();
                        foreach ( $rule as $ke3=>$v3){
                            if($v2['pid'] == 0){
                                continue;
                            }
                            $v3['color'] = '';
                            if($v2['id'] == $v3['pid']){

                                if($fun== $v3['menu_name']  ){
                                    $v1['pid2'][$ke2]['fun'] = 'active' ;

                                    $v3['color'] = 'color: #0e7ae8';
                                }

                                $r[0] = 0;

                                $rs[0] = 0;
                                if(strpos($fun,'&') !== false){
                                    $r = explode('&',$fun);

                                    if(strpos($v3['menu_name'],$r[0]) !== false ){
                                        $v1['pid2'][$ke2]['fun'] = 'active' ;

                                        $v3['color'] = 'color: #0e7ae8';
                                    }
                                }
                                if(strpos($fun,'?s_date=') !== false){
                                    $rs = explode('?s_date=',$fun);
                                    if( strpos($v3['menu_name'],$rs[0]) !== false ){
                                        $v1['pid2'][$ke2]['fun'] = 'active' ;

                                        $v3['color'] = 'color: #0e7ae8';
                                    }
                                }
                                $pid3[] =$v3;
                            }

                        }
                        $v1['pid2'][$ke2]['pid3'] =  $pid3;
                    }
                }
                $rules[$ke]['pid2'] =  $v1['pid2'];
            }
        }


        return $rules;
    }
    function info_auth(){

        $info =   $this->getInfo("info_auth:".$_COOKIE['auth']);
        if($info){
            $info =  json_decode($info,true);
        }
        return $info?$info:array();
    }
    function views(){
        $this->url = explode('/',$_SERVER["REQUEST_URI"]) ;

        if(strpos($this->url[2],'?') !==false){

            $and =   explode('?',$this->url[2]) ;
            $method = $and[0];
        }else{

          $method = $this->url[2];

        }
        $page_s = '';
        $s_all = '';
        if(strpos($this->url[2],'?') !==false){
            $this->page= explode('?',$_SERVER["REQUEST_URI"]) ;
            $page_s = $this->page[0];
            $tt=  strstr($this->page[1], '&', 1);

            if(strpos($tt,'page=') !==false){

                $s_all = '&'. str_replace($tt.'&', '', $this->page[1]);

            }else{
                $s_all = '&'.$this->page[1];
                $RR =   explode('=',$this->page[1]);
                if($RR[0] == 'page'){
                    $s_all = '';
                }


            }
        }


        $view =array(
            'pages_sum'=> 20,
            'info'=>$this->info_auth(),
            'method'=> $method,
            'pages_all'=> $page_s,
            's_all'=> $s_all,
            'rule'=>$this->daohang($this->url[2]),
        );

/*
       echo '<pre>';
        print_r($view);die;*/
        return $view;
    }
    //自定义分页
    function pageN($page,$pages){

        $page = $page?$page:1;
        $page_s= array();
        if($page<=5 ){
            for ($i=1;$i<=6;$i++){
                $page_s[] = $i;
            }
        }else{
            if($pages-$page>6){
                for ($i=$page-1;$i<$page+2;$i++){
                    if($i>0){
                        $page_s[] = $i;
                    }
                }
                for ($i=$page+2;$i<$page+5;$i++){
                    $page_s[] = $i;
                }
            }else{
                for ($i=$page-4;$i<$page+2;$i++){
                    if($i>0){
                        $page_s[] = $i;
                    }
                }
            }

        }
        if($pages==$page){
            unset($page_s);
            for ($i=$page-5;$i<$page+1;$i++){
                if($i>0){
                    $page_s[] = $i;
                }

            }
        }

        return $page_s;
    }
}