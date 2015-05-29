<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$database="tiket";
	mysql_connect($hostname, $username, $password);
	mysql_select_db($database);
	
	date_default_timezone_set('Asia/Jakarta');
?>