<?php 

// koenksi ke database
include "database.php";


// menangkap data yang dikirim
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from info where id='$id'");

// kembali ke index
header("location:index.php")

 ?>