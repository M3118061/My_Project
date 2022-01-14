<?php 
// koneksi database
include '../../config.php';

// menangkap data id yang di kirim dari url
$nama_jurusan = $_GET['nama_jurusan'];


// menghapus data dari database
mysqli_query($db,"delete from jurusan where nama_jurusan='$nama_jurusan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>