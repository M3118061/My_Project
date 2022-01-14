<?php 
// koneksi database
include '../../config.php';

// menangkap data yang di kirim dari form
$id_mahasiswa = $_POST['id_mahasiswa'];
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$nama_jurusan = $_POST['nama_jurusan'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];

if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar

// jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE mahasiswa SET nim = '$nim', nama_lengkap = '$nama_lengkap', jk = '$jk', alamat = '$alamat', tgl_lahir = '$tgl_lahir', nama_jurusan = '$nama_jurusan', email = '$email', foto = '$nama_gambar_baru'";
                    $query .= "WHERE id_mahasiswa = '$id_mahasiswa'";
                    $result = mysqli_query($db, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE mahasiswa SET nim = '$nim', nama_lengkap = '$nama_lengkap', jk = '$jk', alamat = '$alamat', tgl_lahir = '$tgl_lahir', nama_jurusan = '$nama_jurusan', email = '$email'";
      $query .= "WHERE id_mahasiswa = '$id_mahasiswa'";
      $result = mysqli_query($db, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }
?>