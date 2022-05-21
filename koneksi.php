<?php
$host = "localhost";
$user = "adminklinik";
$pass = "3120100644";
$db = "klinik_312010064";
$conn = mysqli_connect('localhost','adminklinik','3120100644','klinik_312010064');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();

}
?>