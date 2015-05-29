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

<div class="theme-content-title">Proses Ubah - Manajemen Tiket</div>
<div class="theme-content-area">
	<?php
		$id_order=strip_tags($_POST['id_order']);
		$nama=strip_tags($_POST['nama']);
		$jenis_kelamin=strip_tags($_POST['jenis_kelamin']);
		$alamat=strip_tags($_POST['alamat']);
		$id_angkot=strip_tags($_POST['id_angkot']);
		$jumlah_beli=strip_tags($_POST['jumlah_beli']);
		
		
		if(empty($_POST['nama'])){
			echo 'Nama Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=tiket&action=ubah&id='.$id_order.'">Di Sini</a>';
		}
		else if(empty($_POST['jenis_kelamin'])){
			echo 'Jenis Kelamin Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=tiket&action=ubah&id='.$id_order.'">Di Sini</a>';
		}
		else if(empty($_POST['alamat'])){
			echo 'Alamat Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=tiket&action=ubah&id='.$id_order.'">Di Sini</a>';
		}
		else if(empty($_POST['id_angkot'])){
			echo 'Tujuan Harus Dipilih. Isi Lagi <a href="admin.php?page=tiket&action=ubah&id='.$id_order.'">Di Sini</a>';
		}
		else if(empty($_POST['jumlah_beli'])){
			echo 'Jumlah Beli Harus Diisi. Isi Lagi <a href="admin.php?page=tiket&action=ubah&id='.$id_order.'">Di Sini</a>';
		}
		else{
			/* GET Tarif */
			$qtarif=mysql_query("SELECT * FROM tiket_setting WHERE id_setting='1'");
			$qdata=mysql_fetch_array($qtarif);
			
			$tarif=$qdata['setting_tarif'];
			$total=$tarif*$jumlah_beli;
			
			$tanggal=date('d M Y - h:i:s A');
			
			mysql_query("update tiket_order set id_angkot='$id_angkot',
												nama='$nama',
												alamat='$alamat',
												jenis_kelamin='$jenis_kelamin',
												jumlah_beli='$jumlah_beli',
												tarif='$tarif',
												total='$total',
												tanggal='$tanggal' WHERE id_order='$id_order'");
			echo "<meta http-equiv='refresh' content='0; url=admin.php?page=tiket'>";
		}
	?>
</div>

<?php
	}
}
?>