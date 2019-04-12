<?php
/**
 * Created by PhpStorm.
 * User: 陈东东
 * Date: 19/4/12
 * Time: 上午10:22
 */
namespace app\common\lib;

/**
 * 时间
 * Class Time
 */
class Time {

    /**
     * 获取13位时间戳
     * @return int
     */
    public static function get13TimeStamp() {
        list($t1, $t2) = explode(' ', microtime());
        return $t2 . ceil($t1 * 1000);
    }
}