<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>::: [Tugas Kuliah] Aplikasi Penjualan Tiket MetroMini Sederhana :::</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<div id="theme-login-wrapper">
		<div class="grid_12">
			<div class="theme-login-body">
				<div class="theme-login-title">Cek Login</div>
				<div class="theme-login-form" align="center">
					<?php
						include "koneksi.php";

						$username=strip_tags($_POST['tiket_username']);
						$password=md5($_POST['tiket_password']);
						
						if(empty($username)){
							echo "Maaf, Username Belum Diisi. Silahkan isi lagi <a href=\"index.php\">Di Sini</a>";
						}
						else if(empty($_POST['tiket_password'])){
							echo "Maaf, Password Belum Diisi. Silahkan isi lagi <a href=\"index.php\">Di Sini</a>";
						}
						else{
							$login_query = mysql_query("SELECT * FROM tiket_user WHERE username='$username' AND password='$password'");
							$found_query = mysql_num_rows($login_query);
							$view_login  = mysql_fetch_array($login_query);

							if ($found_query > 0){
								$_SESSION['session_tiket_user'] = $view_login["username"];
								$_SESSION['session_tiket_pass'] = $view_login["password"];

								echo "<meta http-equiv='Refresh' content='0; url=admin.php?page=dashboard'>";
							}
							else {
								echo "Maaf, Username atau Password Salah. Silahkan Coba lagi <a href=\"index.php\">Di Sini</a>";
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>