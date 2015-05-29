<?php
session_start();
if(empty($_SESSION['session_tiket_user']) && empty($_SESSION['session_tiket_pass'])){
	echo "Anda Harus Login. Login <a href=\"index.php\">Di Sini</a>";
}
else{
	define(access,"yes");
	include "koneksi.php";
	include "class.paging.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>::: [Tugas Kuliah] Aplikasi Penjualan Tiket MetroMini Sederhana :::</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript">
		function warning() {
			return confirm('Are You Sure To Delete This Data?');
		}
	</script>
</head>

<body>
	<div id="theme-content-wrapper">
		<div class="grid_12">
			<div class="theme-content-body">
				<div class="left">
					<div class="theme-content-menu">
						<div class="menu-title">Menu Navigasi</div>
						<div class="menu-list">
							<?php include "admin_menu.php"; ?>
						</div>
					</div>
				</div>
				<div class="right">
					<?php include "admin_page.php"; ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php } ?>