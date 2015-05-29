<?php
session_start();
if(empty($_SESSION['session_tiket_user']) && empty($_SESSION['session_tiket_pass'])){
	echo "Anda Harus Login. Login <a href=\"index.php\">Di Sini</a>";
}
else{
	if(access!="yes"){ 
		echo "Denied."; 
	} 
	else {
		$cari=mysql_real_escape_string(strip_tags($_POST['q']));
		echo "<meta http-equiv='refresh' content='0; url=admin.php?page=user&action=cari&q=$cari'>";
	}
}
?>