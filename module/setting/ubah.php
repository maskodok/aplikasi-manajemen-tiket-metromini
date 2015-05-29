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

<div class="theme-content-title">Setting Tarif</div>
<div class="theme-content-area">
	<?php
		$query=mysql_query("SELECT * FROM tiket_setting WHERE id_setting='1'");
		$data=mysql_fetch_array($query);
	?>
	<form action="admin.php?page=setting&action=proses_ubah" method="post">
		<input type="hidden" name="id_setting" value="1" />
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="200" align="right">Setting Tarif Rp.</td>
				<td align="center" width="7">:</td>
				<td><input type="text" name="setting_tarif" style="width:60%" value="<?php echo $data['setting_tarif']; ?>"  /></td>
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