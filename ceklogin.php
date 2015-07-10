<?php
/* CATATAN
** Tak tambahkan kondisi jika user mengakses file ceklogin.php di url tanpa melalui login terlebih dahulu maka akan di redirect ke halaman login.
** Kondisi ini untuk autentikasi.
*/
if (isset($_POST['submit'])) {
	/*
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

	// mengambil data username dan password dari index.php
	// bila form method nya GET maka ganti POST menjadi GET
	$username = $_POST['username'];
	$password = $_POST['password'];


	$query = "SELECT * FROM member WHERE username='$username' and password='$password'";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);


	// if($result->num_rows > 1) {

	/* CATATAN
	** Seharusnya $result->num_rows >= 1 karena kondisi ini mengecek apa ada username di database.
	*/
	if($result->num_rows >= 1) {
		// echo "anda berhasil login.";
		
		/* 
		** Disini jika kondisi berhasil maka terlebih dahulu kita mengeset session. Kemudian mengisi nilai session ke $username.
		** Setelah itu baru redirect ke template.php
		*/
		session_start();
		$_SESSION['username'] = $username;
		header("Location:template.php");
	}
	else {
		echo 'username/password yang anda masukkan salah. Silahkan ulang kembali';	
	}
} else {
	header("Location:index.php");
}
?>

<p><a href="index.php">back</a></p>
