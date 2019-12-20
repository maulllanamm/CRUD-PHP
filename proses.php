<?php  

include "database.php";

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi,"insert into info values('','$nama','$npm','$jurusan')");

header("location:index.php");

?>