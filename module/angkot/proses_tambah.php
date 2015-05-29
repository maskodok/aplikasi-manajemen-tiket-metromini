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

<div class="theme-content-title">Proses Tambah - Manajemen Angkutan Umum</div>
<div class="theme-content-area">
	<?php
		$kode_angkot=strip_tags($_POST['kode_angkot']);
		$tujuan=strip_tags($_POST['tujuan']);
		
		if(empty($_POST['kode_angkot'])){
			echo 'Kode Angkot Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=angkot&action=tambah">Di Sini</a>';
		}
		else if(empty($_POST['tujuan'])){
			echo 'Tujuan Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=angkot&action=tambah">Di Sini</a>';
		}
		else{
			mysql_query("insert into tiket_angkot (kode_angkot, tujuan) values ('$kode_angkot', '$tujuan')");
			echo "<meta http-equiv='refresh' content='0; url=admin.php?page=angkot'>";
		}
	?>
</div>

<?php
	}
}
?>