<?php 
// koneksi database
include '../../config.php';

// menangkap data yang di kirim dari form
$nama_jurusan = $_POST['nama_jurusan'];

// update data ke database
mysqli_query($db,"update jurusan set nama_jurusan='$nama_jurusan' where nama_jurusan='$nama_jurusan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>