<?php 
// ini gag perlu dipake soalnya tidak ada proses php.
// include('config.php');
?>

<html>
	<title>Form Login - Jaranguda.com</title>
	<style type="text/css">
<!--
.style1 {
	color: #660000;
	font-weight: bold;
	font-size: 36px;
}
.style2 {font-size: 22px}
.style3 {font-size: 22px; color: #330000; }
-->
    </style>
	<head>
		<table width="362" align="center">
			<form name="form1" method="post" action="insert_reg.php">
			<tr>
 
				<td height="364" colspan="3"><div align="center" class="style1">
				  <p class="style3">FORM PENDAFTARAN</p>
				  <p class="style2">UNIVERSITAS DARUL 'ULUM JOMBANG </p>
				  <p><img src="../materi web/download.jpg" width="204" height="201"></p>
				  </div></td>
			</tr>
			<tr>
				<td width="85" height="31">Username</td>
				<td width="7">:</td>
				<td width="254"><input name="username" type="text" id="username" size="30"/>
			  </td>
			</tr>
			<tr>
				<td height="32">Nim</td>
				<td>:</td>
				<td><input name="nim" type="text" id="nim" size="15"/></td>
				</tr>
			<tr>
				<td height="32">Alamat</td>
				<td>:</td>
				<td><input name="alamat" type="text" id="alamat" size="40"/></td>
			</tr>
			<tr>
				<td height="31">Email</td>
				<td>:</td>
				<td><input name="email" type="text" id="email" size="30"/></td>
			</tr>
			<tr>
				<td height="31">Fakultas</td>
				<td>:</td>
				<td><input name="fakultas" type="text" id="fakultas" size="25"/></td>
			  </tr>
			<tr>
				<td height="30">Password</td>
				<td>:</td>
				<td><input name="password" type="password" id="password" size="15"/></td>
			  </tr>
			<tr>
				<!-- <td height="47"><input type="submit" name="Submit" value="Register"/></td> -->
				<!-- name akan lebih baik dengan huruf kecil -->
				<td height="47"><input type="submit" name="submit" value="Register"/></td>
			</tr>
		</form>
		</table>
	</head>
</html>
