<?php
/**
 * Created by PhpStorm.
 * User: 陈东东
 * Date: 19/4/12
 * Time: 上午10:22
 */
namespace app\api\controller;

use think\Controller;
use app\common\lib\exception\ApiException;
use app\common\lib\Aes;

class Time extends Controller {

    public function index() {
        return show(1, 'OK', time());
    }
}