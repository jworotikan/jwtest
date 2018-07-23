<?php
date_default_timezone_set('Asia/Jakarta');

$db_host = "localhost";
$db_user = "bel10003_admin";
$db_pass = "b3l4nj4t3rus!";
$db_name = "mtrader";
 
$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	
	//Ubah url blog
	$home = 'http://' . $_SERVER['HTTP_HOST'] . '/';

}
?>