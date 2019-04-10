<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/7/28
 * Time: 上午12:29
 */

return [
    'password_pre_halt' => '_#sing_ty',	// 密码加密盐
    'aeskey' => 'sgg45747ss223455',		//aes 密钥 , 服务端和客户端必须保持一致
    'apptypes' => [
        'ios',
        'android',
    ],
    'app_sign_time' => 7000,			// sign失效时间
    'app_sign_cache_time' => 7000,		// sign 缓存失效时间
];