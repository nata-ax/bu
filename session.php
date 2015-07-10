<?php
	// mengeset session dengan fungsi session_start
	session_start();
	// mengecek apakah session sudah di set apa belum, sebelum mengalihkan ke index.php
	if (!isset($_SESSION['username'])) {
		header("Location:index.php");
		exit;
	}
?>