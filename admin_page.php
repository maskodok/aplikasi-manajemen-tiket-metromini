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
	
		/* Build Dynamic Page */
		switch($_GET['page']){
			case 'dashboard':
				include "admin_dashboard.php";
			break;
			
			case 'tiket':
				include "module/tiket/index.php";
			break;
			
			case 'angkot':
				include "module/angkot/index.php";
			break;
			
			case 'user':
				include "module/user/index.php";
			break;
			
			case 'setting':
				include "module/setting/index.php";
			break;
			
			default:
				include "admin_dashboard.php";
			break;
		}
	}
}
?>