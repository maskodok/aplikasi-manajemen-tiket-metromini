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

<div class="theme-content-title">Manajemen Angkutan Umum</div>
<div class="theme-content-area">
	<div class="theme-content-menu">
		<div class="xleft">
			<form action="admin.php?page=angkot&action=cari_redirect" method="post">
				<input type="text" name="q" placeholder="cari data.." />
			</form>
		</div>
		<div class="xright">
			<a href="admin.php?page=angkot&action=tambah">+ Tambah Data</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<table cellspacing="0" cellpadding="0" border="0" class="index">
		<tr>
			<th width="150">Kode Angkot</th>
			<th>Tujuan</th>
			<th width="130">Aksi</th>
		</tr>
		<?php
			$p       = new Paging;
			$batas   = 10;
			$posisi  = $p->cariPosisi($batas);
			$no      = 1;
			$query = mysql_query("SELECT * FROM tiket_angkot ORDER BY id_angkot DESC LIMIT $posisi,$batas");
			while($data=mysql_fetch_array($query)){
		?>
		<tr>
			<td align="center"><?php echo $data['kode_angkot']; ?></td>
			<td><?php echo $data['tujuan']; ?></td>
			<td align="center">
				<a href="admin.php?page=angkot&action=ubah&id=<?php echo $data['id_angkot']; ?>">Ubah</a> | 
				<a href="admin.php?page=angkot&action=hapus&id=<?php echo $data['id_angkot']; ?>" onClick="return warning();">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php
		/* Buat Tombol Pagging */
		$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM tiket_angkot"));
		$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		$linkHalaman = $p->navHalaman($_GET["hal"], $jmlhalaman);
		echo "<div id=\"result-pagging\">$linkHalaman</div>";
	?>
</div>

<?php
	}
}
?>