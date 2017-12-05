修改 [https://github.com/walkor/shadowsocks-php.git](https://github.com/walkor/shadowsocks-php.git),使用 `composer` 管理 `workerman`

##Error
1. PHP Warning:  stream_socket_server(): unable to connect to tcp://0.0.0.0:443 (Unknown error)
`lsof -i:443` 查看端口被什么进程占用, 杀死这些进程， 应该就可以了