
<p>Klik di sini untuk masuk!!! <a href="index.php">Login </a> <br />


<?php
/* CATATAN
** Tak tambahkan kondisi jika user mengakses file register.php di url tanpa melalui login terlebih dahulu maka akan di redirect ke halaman register.
** Kondisi ini untuk autentikasi.
*/
if (isset($_POST['submit'])) {
	/* CATATAN
	** CONNECT TO THE DATABASE ini sebenarnya sama dengan config.php jadi kita hanya perlu mengincludekan config.php
	*/
	include "config.php";
	 // CONNECT TO THE DATABASE
	// $DB_NAME = 'login';
	// $DB_HOST = 'localhost';
	// $DB_USER = 'root';
	// $DB_PASS = 'fitri';
	// $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	// if (mysqli_connect_errno()) {
		// printf("Connect failed: %s\n", mysqli_connect_error());
		// exit();
	// }
	
	// mengambil data username dan password dari index.php
	// bila form method nya GET maka ganti POST menjadi GET
	$nama= $_POST['username'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$fakultas=$_POST['fakultas'];
	$password=$_POST['password'];
	/* CATATAN
	** disini variabel nim belum dibuat jadi perlu dibuat dulu.
	** 
	*/
	$nim = $_POST['nim'];

	/* CATATAN
	** disini saya menambahkan kondisi jika yang diinputkan ada maka diproses di database sebaliknya jika data kosong maka akan ada pesan error.
	*/
	if ($nama != "" && $alamat != "" && $email != "" && $fakultas != "" && $password != "" && $nim != "") {
	
		/* CATATAN
		** variabel username dan nim tidak ada di daftar atasnya sehingga tidak akan masuk ke databasenya
		** tanda $nama berarti sebutannya variabel nama
		*/
		// $query = "insert into member(username, password, alamat, email, fakultas, nim) values('$username','$password', '$alamat', '$email', '$fakultas', '$nim')";

		/* CATATAN
		** yang benar hasilnya seperti ini. rubah $username menjadi $nama.
		*/
		$query = "insert into member(username, password, alamat, email, fakultas, nim) values('$nama','$password', '$alamat', '$email', '$fakultas', '$nim')";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

		if($result) {
			echo "data berhasil di insert<br />";
		}
		else {
			echo "data gagal di insert<br />";

		}
	} else {
		echo "Semua data harus diisi.<br />";
	}
} else {
	header("Location:register.php");
}
?>
</p>

<p><a href="tampil_data.php">Tampilkan Data</a> </p>
<p><a href="register.php">back register </a>
</p>
