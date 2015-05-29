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

<div class="theme-content-title">Detail - Manajemen Tiket</div>
<div class="theme-content-area">
	<?php
		$id_order=mysql_real_escape_string(strip_tags($_GET['id']));
		$query=mysql_query("SELECT * FROM tiket_angkot INNER JOIN tiket_order ON tiket_angkot.id_angkot=tiket_order.id_angkot WHERE tiket_order.id_order='$id_order'");
		$data=mysql_fetch_assoc($query);
	?>
		<table cellspacing="0" cellpadding="0" border="0" class="index2">
			<tr>
				<td width="200" align="right">ID Order</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['id_order']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Nama</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['nama']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Jenis Kelamin</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Alamat</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['alamat']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Kode Angkot</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['kode_angkot']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Tujuan</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['tujuan']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Tarif</td>
				<td align="center" width="7">:</td>
				<td>Rp.<?php echo $data['tarif']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Quantity</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['jumlah_beli']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Total</td>
				<td align="center" width="7">:</td>
				<td>Rp.<?php echo $data['total']; ?></td>
			</tr>
			<tr>
				<td width="200" align="right">Tanggal</td>
				<td align="center" width="7">:</td>
				<td><?php echo $data['tanggal']; ?></td>
			</tr>
		</table>
</div>

<?php
	}
}
?>