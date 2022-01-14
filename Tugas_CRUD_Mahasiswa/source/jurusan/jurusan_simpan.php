<?php
  include "../../config.php";

  $nama_jurusan = $_POST["nama_jurusan"];
  
  //buat query
  $sql = "INSERT INTO jurusan(nama_jurusan)
          VALUE('$nama_jurusan')";
  $query = mysqli_query($db, $sql);

  if ($query) {
    header('Location: index.php?status=SUKSES');
  }else{
    header('Location: index.php?status=GAGAL');
  }
  die("AKSES DILARANG");
?>