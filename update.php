<?php  

include "database.php";

$id = $_POST['id']
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi,"update info set nama='$nama',npm='$npm',alamat='$alamat' where id='$id'");
header("location:index.php");

?>