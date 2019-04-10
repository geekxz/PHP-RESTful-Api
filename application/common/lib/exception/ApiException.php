<?php
/**
 * Created by PhpStorm.
 * User: 陈东东
 * Date: 19/4/10
 * Time: 上午10:48
 */
namespace app\common\lib\exception;
use think\Exception;
//  Api异常类
class ApiException extends Exception {

    public $message = '';
    public $httpCode = 500;
    public $code = 0;
    /**
     * @param string $message   信息
     * @param int $httpCode     http状态码
     * @param int $code         业务状态码
     */
    public function __construct($message = '', $httpCode = 0, $code = 0) {
        $this->httpCode = $httpCode;
        $this->message = $message;
        $this->code = $code;
    }
}