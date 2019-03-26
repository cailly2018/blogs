<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/2/15
 * Time: 12:53
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\BaseController;
class UserController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->view = $this->views();
    }
    function index(){
        return view('admin.user.index',$this->view );
    }

}