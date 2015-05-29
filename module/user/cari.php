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

<div class="theme-content-title">Manajemen User</div>
<div class="theme-content-area">
	<div class="theme-content-menu">
		<div class="xleft">
			<form action="admin.php?page=user&action=cari_redirect" method="post">
				<input type="text" name="q" placeholder="cari data.." />
			</form>
		</div>
		<div class="xright">
			<a href="admin.php?page=user&action=tambah">+ Tambah Data</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<table cellspacing="0" cellpadding="0" border="0" class="index">
		<tr>
			<th width="150">Username</th>
			<th>Nama</th>
			<th width="250">Aksi</th>
		</tr>
		<?php
			$cari = mysql_real_escape_string(strip_tags($_GET['q']));
			$p       = new PagingSearch;
			$batas   = 10;
			$posisi  = $p->cariPosisi($batas);
			$no      = 1;
			$query = mysql_query("SELECT * FROM tiket_user WHERE username LIKE '%$cari%' OR nama LIKE '%$cari%' ORDER BY id DESC LIMIT $posisi,$batas");
			while($data=mysql_fetch_array($query)){
		?>
		<tr>
			<td align="center"><?php echo $data['username']; ?></td>
			<td align="center"><?php echo $data['nama']; ?></td>
			<td align="center">
				<a href="admin.php?page=user&action=ubah&id=<?php echo $data['id']; ?>">Ubah</a> | 
				<a href="admin.php?page=user&action=privacy&id=<?php echo $data['id']; ?>">Ganti Password</a> | 
				<a href="admin.php?page=user&action=hapus&id=<?php echo $data['id']; ?>" onClick="return warning();">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php
		/* Buat Tombol Pagging */
		$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM tiket_user WHERE username LIKE '%$cari%' OR nama LIKE '%$cari%'"));
		$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		$linkHalaman = $p->navHalaman($_GET["hal"], $jmlhalaman);
		echo "<div id=\"result-pagging\">$linkHalaman</div>";
	?>
</div>

<?php
	}
}
?>