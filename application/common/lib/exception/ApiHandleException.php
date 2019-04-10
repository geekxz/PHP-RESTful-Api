<?php
/**
 * Created by PhpStorm.
 * User: 陈东东
 * Date: 19/4/10
 * Time: 上午10:48
 */
namespace app\common\lib\exception;
use think\exception\Handle;

class ApiHandleException extends  Handle {

    /**
     * http 状态码
     * @var int
     */
    public $httpCode = 500;

    public function render(\Exception $e) {

        if(config('app_debug') == true) {
            return parent::render($e);
        }
        if ($e instanceof ApiException) {
            $this->httpCode = $e->httpCode;
        }
        return  show(0, $e->getMessage(), [], $this->httpCode);
    }
}