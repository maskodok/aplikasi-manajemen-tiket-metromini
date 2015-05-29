<?php
session_start();
if(empty($_SESSION['session_tiket_user']) && empty($_SESSION['session_tiket_pass'])){
	echo "Anda Harus Login. Login <a href=\"index.php\">Di Sini</a>";
}
else{
	if(access!="yes"){ echo "Denied."; } else {
?>
<div class="theme-content-title">Ubah - Manajemen Angkutan Umum</div>
<div class="theme-content-area">
	<?php
		$id_angkot=mysql_real_escape_string(strip_tags($_GET['id']));
		$query=mysql_query("SELECT * FROM tiket_angkot WHERE id_angkot='$id_angkot'");
		$data=mysql_fetch_array($query);
	?>
	<form action="admin.php?page=angkot&action=proses_ubah" method="post">
		<input type="hidden" name="id_angkot" value="<?php echo $data['id_angkot']; ?>" />
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Kode Angkot</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="kode_angkot" style="width:20%" 
				value="<?php echo $data['kode_angkot']; ?>"  /></td>
			</tr>
			<tr>
				<td width="200" align="right">Tujuan</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="tujuan" value="<?php echo $data['tujuan']; ?>"  /></td>
			</tr>
			<tr class="saveit">
				<td width="200">&nbsp;</td>
				<td width="7">&nbsp;</td>
				<td colspan="3"><input type="submit" name="submit" value="SIMPAN DATA" /></td>
			</tr>
		</table>
	</form>
</div>
<?php } } ?>
