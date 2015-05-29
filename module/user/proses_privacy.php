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

<div class="theme-content-title">Proses Ubah Password - Manajemen User</div>
<div class="theme-content-area">
	<?php
		$id=strip_tags($_POST['id']);
		$password=md5($_POST['password']);
		
		if(empty($_POST['password'])){
			echo 'Password Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=user&action=privacy&id='.$id.'">Di Sini</a>';
		}
		else{
			mysql_query("update tiket_user set password='$password' WHERE id='$id'");
			echo "<meta http-equiv='refresh' content='0; url=admin.php?page=user'>";
		}
	?>
</div>

<?php
	}
}
?>