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
				<div class="theme-login-title">Login Aplikasi Tiket MetroMini</div>
				<div class="theme-login-form">
					<form action="cek_login.php" method="post">
						<table cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td width="110" align="right" valign="top">Username</td>
								<td width="30" align="center" valign="top">:</td>
								<td><input type="text" name="tiket_username" required="required" />
							</tr>
							<tr>
								<td width="110" align="right" valign="top">Password</td>
								<td width="30" align="center" valign="top">:</td>
								<td><input type="password" name="tiket_password" required="required" />
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td colspan="3"><input type="submit" name="submit" value="LOGIN" /></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>