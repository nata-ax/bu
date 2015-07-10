<html>
	<title>Form Login</title>
	<style type="text/css">
<!--
.style2 {
	font-size: medium;
	font-family: "Times New Roman", Times, serif;
	color: #660000;
	font-weight: bold;
}
.style3 {font-size: 24px; font-family: "Times New Roman", Times, serif; color: #660000; font-weight: bold; }
.style4 {font-size: 22px; font-family: "Times New Roman", Times, serif; color: #330000; font-weight: bold; }
-->
    </style>
	<head>
		<table width="360" align="center">
			<!-- <form name="form1" method="post" action="template.php"> -->
			
			<!-- CATATAN -->
			<!-- Seharusnya action mengarah ke ceklogin dulu untuk proses autentikasi apakah user ada di database atau tidak -->
			<form name="form1" method="post" action="ceklogin.php">
			<tr>
 
				<td colspan="3"><p align="center" class="style4">FORM LOGIN </p>
				  <p align="center" class="style3">UNIVERSITAS DARUL 'ULUM JOMBANG </p>
			    <p align="center" class="style2"><img src="../materi web/download.jpg" width="221" height="225"></p>
			    <p align="center" class="style2">&nbsp;</p></td>
			</tr>
			<tr>
			  <td height="35" colspan="3"></p>
<div align="center">Anda belum terdaftar sebagai user?
  [<a href="register.php">Daftar Sekarang</a>]
  &nbsp;</td>
			  </tr>
			<tr>
				<td width="83" height="31">Username</td>
				<td width="5">:</td>
				<td width="256"><input name="username" type="text" id="username" size="25"/>			  </td>
			</tr>
			<tr>
				<td height="35">Password</td>
				<td>:</td>
				<td><input name="password" type="password" id="password" size="15"/></td>
			</tr>
			<tr>
				<!-- <td><input type="submit" name="Submit" value="Login"/></td> -->
				<!-- name akan lebih baik dengan huruf kecil -->
				<td><input type="submit" name="submit" value="Login"/></td>
			</tr>
		</form>
		</table>
	</head>
</html>
