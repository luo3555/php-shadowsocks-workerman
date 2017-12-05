<?php
/**
 * run with command 
 * php start.php start
 */

ini_set('display_errors', 'on');
use Workerman\Worker;

// 检查扩展
if(!extension_loaded('pcntl'))
{
    exit("Please install pcntl extension. See http://doc3.workerman.net/install/install.html\n");
}

if(!extension_loaded('posix'))
{
    exit("Please install posix extension. See http://doc3.workerman.net/install/install.html\n");
}

// 标记是全局启动
define('GLOBAL_START', 1);
define('CROOT_DIR', __DIR__);

require_once CROOT_DIR . '/vendor/autoload.php';

// 加载所有Applications/*/start.php，以便启动所有服务
$files = [
    'Encryptor.php',
    'config.php',
    'local.php',
    'server.php',
    'start.php',
];
foreach ($files as $file) {
    require_once CROOT_DIR . '/Applications/Shadowsocks/' . $file;
}

// 运行所有服务
Worker::runAll();