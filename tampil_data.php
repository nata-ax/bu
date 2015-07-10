<html>
	<head>
		<title>Tampilkan Data</title>
	    <style type="text/css">
<!--
.style1 {
	font-size: large;
	color: #660000;
}
.style2 {
	color: #660000;
	font-weight: bold;
}
-->
        </style>
</head>
	<body>
		<?php
			/* CATATAN
			** CONNECT TO THE DATABASE ini sebenarnya sama dengan config.php jadi kita hanya perlu mengincludekan config.php
			*/
			include "config.php";
			 // CONNECT TO THE DATABASE
			// $DB_NAME = 'login';
			// $DB_HOST = 'localhost';
			// $DB_USER = 'root';
			// $DB_PASS = '';
			// $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
			// if (mysqli_connect_errno()) {
				// printf("Connect failed: %s\n", mysqli_connect_error());
				// exit();
			// }

			// ubah $query menjadi seperti dibawah
			$query = "select * from member";
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		?>
		<table width="1084" height="200" border="1" align="center">
			<tr>
				<td height="23" colspan="2" align="center"><span class="style2">UNIVERSITAS DARUL 'ULUM JOMBANG</span> </td>
			</tr>
			<tr>
			  <th height="43" colspan="5" align="center"><p class="style1">DATA REGISTER </p>
		      <p class="style1"><img src="../materi web/download.jpg" width="187" height="182"></p></th>
		  </tr>
			<tr>
				<th width="140" height="35" align="center">Username</th>
				<th width="270" height="35" align="center">Alamat</th>
				<th width="285" height="35" align="center">Email</th>
				<th width="200" height="35" align="center">Fakultas</th>
				<th width="155" height="35" align="center">Nim</th>
			</tr>
			<!-- mengambil data dari database dengan fungsi fetch_array -->
			<?php while($data = $result->fetch_array()) { ?>
			<tr>
				<!-- kemudian memanggil data dengan $data[nama field di tabel] -->
				<td align="left"><?php echo $data['username'];?></td>
				<td align="left"><?php echo $data['alamat'];?></td>
				<td align="left"><?php echo $data['email'];?></td>
				<td align="left"><?php echo $data['fakultas'];?></td>
				<td align="left"><?php echo $data['nim'];?></td>
			</tr>
			<!-- menutup looping while -->
			<?php } ?>
	</table>
	    <p align="center"><a href="index.php">back</a></p>
	</body>
</html>
