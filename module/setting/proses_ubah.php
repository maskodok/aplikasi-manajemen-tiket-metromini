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
		$setting_tarif=strip_tags($_POST['setting_tarif']);
		
		if(empty($_POST['setting_tarif'])){
			echo 'Tarif Tidak Boleh Kosong. Isi Lagi <a href="admin.php?page=setting">Di Sini</a>';
		}
		else{
			mysql_query("update tiket_setting set setting_tarif='$setting_tarif' WHERE id_setting='1'");
			echo "<meta http-equiv='refresh' content='0; url=admin.php?page=setting'>";
		}
	?>
</div>

<?php
	}
}
?>