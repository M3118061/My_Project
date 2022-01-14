<?php
  $servername = "localhost";
  $database = "dbuts_1435";
  $username = "root";
  $password = "";

  $db = mysqli_connect($servername, $username, $password, $database);

  if (!$db) {
    die("GAGAL TERHUBUNG KE DATABASE: " . mysqli_connect_error());
  }
?>