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

<div class="theme-content-title">Ubah - Manajemen Tiket</div>
<div class="theme-content-area">
	<?php
		$id_order=mysql_real_escape_string(strip_tags($_GET['id']));
		$query=mysql_query("SELECT * FROM tiket_order WHERE id_order='$id_order'");
		$data=mysql_fetch_array($query);
	?>
	<form action="admin.php?page=tiket&action=proses_ubah" method="post">
		<input type="hidden" name="id_order" value="<?php echo $data['id_order']; ?>" />
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Nama</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="nama" style="width:70%" autocomplete="off" value="<?php echo $data['nama']; ?>" /></td>
			</tr>
			<tr>
				<td width="200" align="right">Jenis Kelamin</td>
				<td align="center" width="7">:</td>
				<td>
					<?php 
						if($data['jenis_kelamin']=='Pria'){
					?>
						<input type="radio" name="jenis_kelamin" value="Pria" checked>Pria 
						<input type="radio" name="jenis_kelamin" value="Wanita">Wanita
					<?php } else{ ?>
						<input type="radio" name="jenis_kelamin" value="Pria">Pria 
						<input type="radio" name="jenis_kelamin" value="Wanita" checked>Wanita
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td width="200" align="right">Alamat</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="alamat" autocomplete="off" value="<?php echo $data['alamat']; ?>" /></td>
			</tr>
			<tr>
				<td width="200" align="right">Tujuan</td>
				<td align="center" width="7">:</td>
				<td>
					<select name="id_angkot" style="width:100%">
						<?php
							$query=mysql_query("SELECT * FROM tiket_angkot ORDER BY kode_angkot ASC");
							$num=mysql_num_rows($query);
							for ($x = 1; $x <= $num; $x++) {
								$data2=mysql_fetch_array($query);
								if($data['id_angkot']==$data2['id_angkot']){
									echo '<option value="'.$data2['id_angkot'].'" selected>('.$data2['kode_angkot'].') - '.$data2['tujuan'].'</option>';
								}
								else{
									echo '<option value="'.$data2['id_angkot'].'">('.$data2['kode_angkot'].') - '.$data2['tujuan'].'</option>';
								}
							} 
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td width="200" align="right">Quantity</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="jumlah_beli" style="width:20%" autocomplete="off" value="<?php echo $data['jumlah_beli']; ?>" /></td>
			</tr>
			<tr class="saveit">
				<td width="200">&nbsp;</td>
				<td width="7">&nbsp;</td>
				<td colspan="3"><input type="submit" name="submit" value="SIMPAN DATA" /></td>
			</tr>
		</table>
	</form>
</div>

<?php
	}
}
?>