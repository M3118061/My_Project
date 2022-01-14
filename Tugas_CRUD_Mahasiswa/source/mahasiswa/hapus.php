<?php 
// koneksi database
include '../../config.php';

// menangkap data id yang di kirim dari url
$id_mahasiswa = $_GET['id_mahasiswa'];


// menghapus data dari database
mysqli_query($db,"delete from mahasiswa where id_mahasiswa='$id_mahasiswa'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>