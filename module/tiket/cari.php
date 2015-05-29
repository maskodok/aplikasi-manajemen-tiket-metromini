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

<div class="theme-content-title">Manajemen Tiket</div>
<div class="theme-content-area">
	<div class="theme-content-menu">
		<div class="xleft">
			<form action="admin.php?page=tiket&action=cari_redirect" method="post">
				<input type="text" name="q" placeholder="cari data.." />
			</form>
		</div>
		<div class="xright">
			<a href="admin.php?page=tiket&action=tambah">+ Tambah Data</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<table cellspacing="0" cellpadding="0" border="0" class="index">
		<tr>
			<th width="80">ID Order</th>
			<th>Nama</th>
			<th width="130">Kode Angkot</th>
			<th width="50">Qty</th>
			<th>Total</th>
			<th width="180">Aksi</th>
		</tr>
		
		<?php
			$cari = mysql_real_escape_string(strip_tags($_GET['q']));
			$p       = new PagingSearch;
			$batas   = 10;
			$posisi  = $p->cariPosisi($batas);
			$no      = 1;
			$query = mysql_query("SELECT * FROM tiket_angkot INNER JOIN tiket_order ON tiket_angkot.id_angkot=tiket_order.id_angkot WHERE tiket_angkot.kode_angkot LIKE '%$cari%' OR tiket_order.nama LIKE '%$cari%' OR tiket_order.alamat LIKE '%$cari%' OR tiket_order.jenis_kelamin LIKE '%$cari%' ORDER BY tiket_order.id_order DESC LIMIT $posisi,$batas");
			while($data=mysql_fetch_assoc($query)){
		?>
		<tr>
			<td align="center"><?php echo $data['id_order']; ?></td>
			<td align="center"><?php echo $data['nama']; ?></td>
			<td align="center"><?php echo $data['kode_angkot']; ?></td>
			<td align="center"><?php echo $data['jumlah_beli']; ?></td>
			<td align="center">Rp.<?php echo $data['total']; ?></td>
			<td align="center">
				<a href="admin.php?page=tiket&action=detail&id=<?php echo $data['id_order']; ?>">Detail</a> | 
				<a href="admin.php?page=tiket&action=ubah&id=<?php echo $data['id_order']; ?>">Ubah</a> | 
				<a href="admin.php?page=tiket&action=hapus&id=<?php echo $data['id_order']; ?>" onClick="return warning();">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php
		/* Buat Tombol Pagging */
		$jmldata = mysql_num_rows(mysql_query("SELECT * FROM tiket_angkot INNER JOIN tiket_order ON tiket_angkot.id_angkot=tiket_order.id_angkot WHERE tiket_angkot.kode_angkot LIKE '%$cari%' OR tiket_order.nama LIKE '%$cari%' OR tiket_order.alamat LIKE '%$cari%' OR tiket_order.jenis_kelamin LIKE '%$cari%'"));
		$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		$linkHalaman = $p->navHalaman($_GET["hal"], $jmlhalaman);
		echo "<div id=\"result-pagging\">$linkHalaman</div>";
	?>
</div>

<?php
	}
}
?>