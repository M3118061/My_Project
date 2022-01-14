<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Halaman Input Mahasiswa</title>
</head>
<body>

<div class="card">
  <div class="card-header text-center">
    Tambah Data Mahasiswa
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <section class="content">
          <form method="POST" action="mahasiswa_simpan.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama_lengkap">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" aria-describedby="nama_lengkap" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" aria-describedby="nim" placeholder="Masukkan nim">
          </div>
          <div class="form-group">
            <label for="nama_jurusan">Jenis Kelamin</label>
            <br>
            <label class="radio-inline">
              <input type="radio" class="styled" value="Laki-laki" name="jk"
                  {{ old('jk') == 'Laki-laki' ? 'checked' : '' }}>
              Laki-laki
            </label>
            <label class="radio-inline">
                <input type="radio" class="styled" value="Perempuan" name="jk"
                    {{ old('jk') == 'Perempuan' ? 'checked' : '' }}>
                Perempuan
            </label>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" rows="5"
            placeholder="Masukkan alamat"></textarea>
          </div>
          <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" aria-describedby="tgl_lahir">
          </div>
          <div class="form-group">
            <label for="nama_jurusan">Jurusan</label>
            <select name="nama_jurusan" class="form-control">
              <option disabled selected>--pilih--</option>
              <?php
                include'../../config.php';
                $hasil = mysqli_query($db,"Select nama_jurusan from jurusan");
                while($data = mysqli_fetch_assoc($hasil)){
              ?>
              <option value="<?php echo $data['nama_jurusan'];?>"><?php echo $data['nama_jurusan'];?></option>
              <?php
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Masukkan email">
          </div>
          <div class="form-group">
            <label>Foto :</label>
            <input type="file" name="foto">
            <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg </p>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </section>
      </div>
    </div>
  </div>
</div>
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>