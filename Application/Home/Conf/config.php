<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES'=>array(
		'myfirst' => array('my/myFirstR', 'status = 1'),
		'userinfo' => array('login/showUser', 'status = 1'),
		'usersql' => array('login/sqlUser')
	),

	'DB_CONFIG1' => array(
		'db_type' => 'mysql',
		'db_user' => 'root',
		'db_pwd' => 'root',
		'db_host' => 'localhost',
		'db_port' => '3306',
		'db_name' => 'yii2basic'
	),

);