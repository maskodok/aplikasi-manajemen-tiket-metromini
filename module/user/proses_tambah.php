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

<div class="theme-content-title">Proses Tambah - Manajemen User</div>
<div class="theme-content-area">
	<?php
		$username=strip_tags($_POST['username']);
		$password=md5($_POST['password']);
		$nama=strip_tags($_POST['nama']);
		
		if(empty($_POST['username'])){
			echo 'Username Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=user&action=tambah">Di Sini</a>';
		}
		else if(empty($_POST['password'])){
			echo 'Password Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=user&action=tambah">Di Sini</a>';
		}
		else if(empty($_POST['nama'])){
			echo 'Nama Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=user&action=tambah">Di Sini</a>';
		}
		else{
			mysql_query("insert into tiket_user (username, password, nama) values ('$username', '$password', '$nama')");
			echo "<meta http-equiv='refresh' content='0; url=admin.php?page=user'>";
		}
	?>
</div>

<?php
	}
}
?>