<?php
$config['host'] = 'localhost';
$config['database'] = 'log';
$config['user'] = 'root';
$config['password'] = '123456';
$con = mysql_connect($config['host'], $config['user'], $config['password']);

mysql_select_db($config['database']);

?>