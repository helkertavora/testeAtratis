<?php

$config = array(
	'host'		=> 'localhost',
	'username' 	=> 'postgres',
	'password' 	=> '12345',
	'dbname' 	=> 'php'
);

$db = pg_connect("host=".$config['host']." dbname=".$config['dbname']." user=".$config['username']." password=".$config['password']);



date_default_timezone_set("America/Santiago");
pg_query("SET NAMES 'UTF8'");
?>