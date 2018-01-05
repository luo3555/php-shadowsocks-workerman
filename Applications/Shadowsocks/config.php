<?php 
// 服务器地址
$SERVER = '127.0.0.1';
// 加密算法
$METHOD = 'aes-256-cfb';
// 密码
$PASSWORD = '12345678';
// 服务器端口
$PORT = 8080;
// 客户端端口
$LOCAL_PORT = 1080;
// 启动多少进程
$PROCESS_COUNT = 12;

define('STAGE_INIT', 0);
define('STAGE_ADDR', 1);
define('STAGE_UDP_ASSOC', 2);
define('STAGE_DNS', 3);
define('STAGE_CONNECTING', 4);
define('STAGE_STREAM', 5);
define('STAGE_DESTROYED', -1);

// 命令
define('CMD_CONNECT', 1);
define('CMD_BIND', 2);
define('CMD_UDP_ASSOCIATE', 3);