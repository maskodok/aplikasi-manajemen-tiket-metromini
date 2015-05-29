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

<div class="theme-content-title">Tambah - Manajemen Tiket</div>
<div class="theme-content-area">
	<form action="admin.php?page=tiket&action=proses_tambah" method="post">
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Nama</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="nama" style="width:70%" autocomplete="off" /></td>
			</tr>
			<tr>
				<td width="200" align="right">Jenis Kelamin</td>
				<td align="center" width="7">:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Pria" checked>Pria 
					<input type="radio" name="jenis_kelamin" value="Wanita">Wanita
				</td>
			</tr>
			<tr>
				<td width="200" align="right">Alamat</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="alamat" autocomplete="off" /></td>
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
								$data=mysql_fetch_array($query);
								echo '<option value="'.$data['id_angkot'].'">('.$data['kode_angkot'].') - '.$data['tujuan'].'</option>';
							} 
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td width="200" align="right">Quantity</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="jumlah_beli" style="width:20%" autocomplete="off" /></td>
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