<?php  

$koneksi = mysqli_connect('localhost','root','','siswa');

if (mysqli_connect_errno()) {
	echo "gagal konek ke database";
}

?>