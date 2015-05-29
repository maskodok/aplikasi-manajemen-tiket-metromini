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

<div class="theme-content-title">Ubah - Manajemen User</div>
<div class="theme-content-area">
	<?php
		$id=mysql_real_escape_string(strip_tags($_GET['id']));
		$query=mysql_query("SELECT * FROM tiket_user WHERE id='$id'");
		$data=mysql_fetch_array($query);
	?>
	<form action="admin.php?page=user&action=proses_ubah" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Username</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="username" style="width:20%" value="<?php echo $data['username']; ?>"  /></td>
			</tr>
			<tr>
				<td width="200" align="right">Nama</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"  /></td>
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