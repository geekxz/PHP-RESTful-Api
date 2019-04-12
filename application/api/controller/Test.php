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

class Test extends Common {

    public function index() {
        // var_dump(phpinfo());
    }

    public function update($id = 0) {
        //echo $id;exit;
        halt(input('put.'));
        //return $id;
        //id   data
    }

    /**
     * post 新增
     * @return mixed
     */
    public function save() {
        $data = input('post.');
        // if ($data['mt'] != 1) {
        //     throw new ApiException('你提交的数据不合法',400);
        // }
        return show(1, 'ok', input('post.'));        
    }

    


}