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

<div class="theme-content-title">Tambah - Manajemen User</div>
<div class="theme-content-area">
	<form action="admin.php?page=user&action=proses_tambah" method="post">
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Username</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td width="200" align="right">Password</td>
				<td align="center" width="7">:</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td width="200" align="right">Nama</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="nama" /></td>
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