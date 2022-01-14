<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Jurusan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="card card-into card card-outline card-header">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Jurusan</h1>
          </div>
        </div>
        
        <div class="card-header">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form method="post">
              <a href="tambah.php" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"> Tambah Data</i>
              </a>
            </form>
            <form method="post">
              <a href="../../index.php" class="btn btn-secondary btn-sm">
                <i class="fas fa-plus"> Back to menu</i>
              </a>
            </form>
          </div>
        </div>
          <table width='1200' border="1" cellpadding="5" cellspasing="0" class="table table-striped">
            <tr>
              <th width='30'>No.</th>
              <th width='100'>Nama Jurusan</th>
              <th width='100' class="text-center">Kelola</th>
            </tr>
            <?php
              include "../../config.php";

              $sql = "SELECT nama_jurusan FROM jurusan";
              $hasil = mysqli_query($db, $sql);
              $no = 1;
              while($data = mysqli_fetch_array($hasil)){
            ?>

            <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $data['nama_jurusan'];?></td>
              <td align="center">
                <a class="btn btn-sm btn-warning" href="edit.php?nama_jurusan=<?php echo $data['nama_jurusan'];?>">Edit</a>
                <a class="btn btn-sm btn-danger" href="hapus.php?nama_jurusan=<?php echo $data['nama_jurusan'];?>">Hapus</a>
              </td>
            </tr>
            <?php
            $no++;
              }
            echo "</table>";
            ?>
          </table>
      </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>