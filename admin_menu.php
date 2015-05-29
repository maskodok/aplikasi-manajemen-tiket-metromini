<?php
session_start();
if(empty($_SESSION['session_tiket_user']) && empty($_SESSION['session_tiket_pass'])){
	echo "Anda Harus Login. Login <a href=\"index.php\">Di Sini</a>";
}
else{
	if(access!="yes"){ echo "Denied."; } else {
?>
<ul>
<li><a href="admin.php?page=dashboard">Dashboard</a></li>
<li><a href="admin.php?page=tiket">Manajemen Tiket</a></li>
<li><a href="admin.php?page=angkot">Manajemen Angkot</a></li>
<li><a href="admin.php?page=user">Manajemen User</a></li>
<li><a href="admin.php?page=setting">Setting Tarif</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
<?php 
	} 
}
?>