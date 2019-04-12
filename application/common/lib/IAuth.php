<?php
/**
 * Created by PhpStorm.
 * User: 陈东东
 * Date: 19/4/10
 * Time: 上午12:27
 */
namespace app\common\lib;
use app\common\lib\Aes;
use think\Cache;
/**
 * Iauth相关
 * Class IAuth
 */
class IAuth {

    /**
     * 生成每次请求的sign
     * @param array $data
     * @return string
     */
    public static function setSign($data = []) {
        // 1.按字段排序
        ksort($data);
        // 2.拼接字符串数据  &
        $string = http_build_query($data);
        // 3.通过aes来加密
        $string = (new Aes())->encrypt($string);

        return $string;
    }

    /**
     * 检查sign是否正常
     * @param array $data
     * @param $data
     * @return boolen
     */
    public static function checkSignPass($data) {
        $str = (new Aes())->decrypt($data['sign']);

        if(empty($str)) {
            return false;
        }

        // diid=xx&app_type=3
        parse_str($str, $arr);
        if(!is_array($arr) || empty($arr['did']) || $arr['did'] != $data['did'] ) {
            return false;
        }
        if(!config('app_debug')) {
            if ((time() - ceil($arr['time'] / 1000)) > config('app.app_sign_time')) {
                return false;
            }
            // echo Cache::get($data['sign']);exit;
            // 唯一性判定
            /*if (Cache::get($data['sign'])) {
                return false;
            }*/
        }
        return true;
    }
    /**
     * 生成登陆的Token
     * @param string $phone
     * @return string
     */
    public function setAPPLoginToken($phone=''){
        $token = md5(uniqid(md5(microtime(true)),true));
        $token =sha1($token.$phone);
        return $token;
    }
}