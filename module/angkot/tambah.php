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

<div class="theme-content-title">Tambah - Manajemen Angkutan Umum</div>
<div class="theme-content-area">
	<form action="admin.php?page=angkot&action=proses_tambah" method="post">
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Kode Angkot</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="kode_angkot" style="width:20%" /></td>
			</tr>
			<tr>
				<td width="200" align="right">Tujuan</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="tujuan" /></td>
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