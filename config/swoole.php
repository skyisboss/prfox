<?php

// swoole 配置

return array(
	// 监听地址
	'host' => '127.0.0.1',
	// 监听端口
	'port' => 5233,

	// 开启协程
	'enable_coroutine' => false,
	// 进程数
	'worker_num'       => 8,
	// 连接处理线程数
    'reactor_num'      => 8,		
	// 进程的最大任务数
	'max_request'      => 10000,
	// 异步安全重启
	'reload_async'     => true,
	// 退出等待时间
	'max_wait_time'    => 60,
	// PID 文件 已项目根目录计算
	'pid_file'         => dirname(__DIR__) . '/temp/logs/http.pid',
	// 日志文件路径 已项目根目录计算
	'log_file'         => dirname(__DIR__) . '/temp/logs/runtime.log',
	// swoole的运行日志分割 默认10Mb，大于这个值将日志备份为一个新文件
	'logsplit'         => 10,
);