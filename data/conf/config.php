<?php
return array (
  'yfcmf_version' => 'V2.0.1',
  'update_check' => false,
  'think_sdk_qq' => 
  array (
    'app_key' => '203564',
    'app_secret' => 'bab1f3acc0c67b69a1f470ac5e8dc36a',
    'callback' => 'http://www.rainfer.cn/home/oauth/callback/type/qq.html',
  ),
  'think_sdk_sina' => 
  array (
    'app_key' => '602735229',
    'app_secret' => '66781cbeab9fdb9b014a387ab6e943fe',
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
  'app_trace' => true,
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
  'url_route_on' => true,
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
  'lang_switch_on' => true,
  'default_lang' => 'zh-cn',
  'geetest' => 
  array (
    'geetest_on' => false,
    'captcha_id' => '',
    'private_key' => '',
  ),
  'log' => 
  array (
    'clear_on' => true,
    'timebf' => 2592000,
    'level' => 
    array (
    ),
  ),
);