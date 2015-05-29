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
?>

<div class="theme-content-title">Dashboard Aplikasi</div>
<div class="theme-content-area">
	<div style="text-align:center">
		<p><img src="img/logo.png" alt="Logo" width="130" /></p>
		<p>Selamat datang di Halaman Administrator Aplikasi Manajemen Tiket MetroMini Sederhana</p>
	</div>
</div>

<?php
	}
}
?>