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
		$id=mysql_real_escape_string(strip_tags($_GET['id']));
		mysql_query("DELETE FROM tiket_user WHERE id='$id'");
		echo "<meta http-equiv='refresh' content='0; url=admin.php?page=user'>";
		
	}
}
?>