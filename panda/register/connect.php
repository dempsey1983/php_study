<?php
	$host="127.0.0.1";
	$db_user="bookmgr";//用户名
	$db_pass="wa1234#1";//密码
	$db_name="panda_dbase";//数据库
	$timezone="Asia/Shanghai";

	$link=mysql_connect($host,$db_user,$db_pass);
	mysql_select_db($db_name,$link);
	mysql_query("SET names UTF8");

	header("Content-Type: text/html; charset=utf-8");
	date_default_timezone_set($timezone); //北京时间
?>
