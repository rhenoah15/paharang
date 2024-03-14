<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'paharang'; 

$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
date_default_timezone_set("Asia/Taipei");
mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");


//end academica calendar
?>