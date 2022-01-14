<?php 
include '../../config.php';
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$nama_jurusan = $_POST['nama_jurusan'];
$email = $_POST['email'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($db, "INSERT INTO mahasiswa VALUES(NULL,'$nim','$nama_lengkap','$jk','$alamat','$tgl_lahir','$nama_jurusan','$email','$xx')");
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagal_ukuran");
	}
}