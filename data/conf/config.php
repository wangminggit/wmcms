<?php
return array (
  'yfcmf_version' => 'V2.0.2',
  'update_check' => false,
  'think_sdk_qq' => 
  array (
    'app_key' => '203564',
    'app_secret' => 'bab1f3acc0c67b69a1f470ac5e8dc36a',
    'display' => true,
    'callback' => 'http://www.rainfer.cn/home/oauth/callback/type/qq.html',
  ),
  'think_sdk_sina' => 
  array (
    'app_key' => '602735229',
    'app_secret' => '66781cbeab9fdb9b014a387ab6e943fe',
    'display' => true,
    'callback' => 'http://www.rainfer.cn/home/oauth/callback/type/sina.html',
  ),
  'comment' => 
  array (
    't_open' => true,
    't_limit' => 60,
  ),
  'auth_config' => 
  array (
    'auth_on' => true,
    'auth_type' => 1,
    'auth_group' => 'auth_group',
    'auth_group_access' => 'auth_group_access',
    'auth_rule' => 'auth_rule',
    'auth_user' => 'admin',
  ),
  'app_debug' => true,
  'app_trace' => false,
  'baidumap_ak' => 'D91c810554767b49e3bdd2a7b25d97c1',
  'upload_validate' => 
  array (
    'size' => 10485760,
    'ext' => 
    array (
      0 => 'jpg',
      1 => 'gif',
      2 => 'png',
      3 => 'jpeg',
    ),
  ),
  'upload_path' => '/data/upload',
  'url_route_on' => false,
  'url_route_must' => false,
  'url_complete_matcht' => false,
  'url_html_suffix' => 'html',
  'storage' => 
  array (
    'storage_open' => false,
    'accesskey' => '',
    'secretkey' => '',
    'bucket' => '',
    'domain' => '',
  ),
  'lang_switch_on' => false,
  'default_lang' => 'zh-cn',
  'geetest' => 
  array (
    'geetest_on' => false,
    'captcha_id' => '',
    'private_key' => '',
  ),
  'log' => 
  array (
    'clear_on' => false,
    'timebf' => 2592000,
    'level' => 
    array (
    ),
  ),
  'web_log' => 
  array (
    'weblog_on' => false,
    'not_log_module' => 
    array (
      0 => 'install',
    ),
    'not_log_controller' => 
    array (
      0 => 'home/Error',
      1 => 'home/Token',
      2 => 'admin/Ajax',
      3 => 'admin/Error',
      4 => 'admin/Ueditor',
      5 => 'admin/WebLog',
    ),
    'not_log_action' => 
    array (
    ),
    'not_log_data' => 
    array (
    ),
    'not_log_request_method' => 
    array (
      0 => 'GET',
    ),
  ),
  'url_route_mode' => '2',
  'think_sdk_facebook' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
  'payment' => 
  array (
    'alipay' => 
    array (
      'email' => '',
      'key' => '',
      'partner' => '',
      'display' => '1',
    ),
    'aliwappay' => 
    array (
      'email' => '',
      'key' => '',
      'partner' => '',
    ),
    'wxqrcode' => 
    array (
      'appid' => '',
      'appsecret' => '',
      'mchid' => '',
      'key' => '',
    ),
    'wxjspi' => 
    array (
      'appid' => '',
      'appsecret' => '',
      'mchid' => '',
      'key' => '',
    ),
    'tenpay' => 
    array (
      'key' => '',
      'partner' => '',
    ),
    'unionpay' => 
    array (
      'key' => '',
      'partner' => '',
    ),
    'palpay' => 
    array (
      'business' => '',
    ),
  ),
  'think_sdk_weixin' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
  'think_sdk_wechat' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
  'think_sdk_google' => 
  array (
    'app_key' => '',
    'app_secret' => '',
    'display' => false,
    'callback' => '',
  ),
);