<?php
/**
 * APP应用配置
 */

return array(
    // 调式模式
    'app_debug'          => false,

    // 应用目录名
    'app_path' => 'App',

    // 控制器目录名
    'ctrl_path'     =>    'Controller',

    // 视图目录名
    'view_path'       => 'View',

    // 默认模块 
    'default_module'     => 'Home',

    // 默认控制器
    'default_controller' => 'Index',

    // 默认方法
    'default_action'     => 'index',

    // 默认时区
    'default_timezone'   => 'Asia/Shanghai',

    // 是否开启多语言
    'i18n_start'         => false,

    // 多语言识别标识
    'i18n_code'       => 'lang',

    // 默认语言
    'i18n_default'       => 'zh-cn',

    // 存放语言包的目录名称
    'i18n_dirname'      => 'language',

    // url 伪静态后缀  html|shtml|php|...
    'url_suffix'         => 'html|php|json',

    // url 分页标识
    'page_code'         => 'page',

    /*****************************  SESSION  *****************************/
    // SESSION 前缀 
    'session_prefix'     => 'prfox_',

    // 保存session的驱动 file,redis 
    // swoole 模式下必须为 redis驱动，且需安装并配置好redis服务
    'session_drive'       => 'file',

    //SESSION ID 也就是发给客户端cookie的名字 ，默认留空即可
    'session_id'         => '',

    // 过期时间
    'session_expire'     => 0,

    /*****************************  COOKIE  *****************************/

    // cookie前缀
    'cookie_prefix'      => 'prfox_',

    // cookie有效期
    'cookie_expires'      => 0,

    /*****************************  缓存  *****************************/
    // 缓存类型，默认 file 可选 memcache redis  需服务器支持相应服务
    'cache_driver'         => 'file',

    // 缓存前缀 
    'cache_pre'          => 'fox_',


    /*****************************  对称加解密  *****************************/
    // 加密token
    'openssl_token' => 'maoamoaisansan',
    
    // 加密方法
    'openssl_method' => 'AES-256-CBC',
);
