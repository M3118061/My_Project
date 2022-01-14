<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="card card-into card card-outline card-header">
      <?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
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
            <th width='100'>Nama Lengkap</th>
            <th width='100'>NIM</th>
            <th width='100'>Jenis Kelamin</th>
            <th width='100'>Alamat</th>
            <th width='100'>Tanggal Lahir</th>
            <th width='100'>Jurusan</th>
            <th width='100'>Email</th>
            <th width='100'>Foto</th>
            <th class="text-center" width='100'>Kelola</th>
          </tr>
          <?php
            include "../../config.php";

            $sql = "SELECT id_mahasiswa, nim, nama_lengkap, jk, alamat, tgl_lahir, nama_jurusan, email, foto FROM mahasiswa ORDER BY id_mahasiswa";
            $hasil = mysqli_query($db, $sql);
            $no = 1;
            while($data = mysqli_fetch_array($hasil)){
          ?>

          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data['nama_lengkap'];?></td>
            <td><?php echo $data['nim'];?></td>
            <td><?php echo $data['jk'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['tgl_lahir'];?></td>
            <td><?php echo $data['nama_jurusan'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><img src="gambar/<?php echo $data['foto'] ?>" width="35" height="40"></a></td>
            <td align="center">
              <a class="btn btn-sm btn-warning" href="edit.php?id_mahasiswa=<?php echo $data['id_mahasiswa'];?>">Edit</a>
              <a class="btn btn-sm btn-danger" href="hapus.php?id_mahasiswa=<?php echo $data['id_mahasiswa'];?>">Hapus</a>
            </td>
          </tr>
          <?php
          $no++;
            }
          echo "</table>";
          ?>
      </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>