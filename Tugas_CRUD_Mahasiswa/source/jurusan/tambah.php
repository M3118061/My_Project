<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Halaman Input Jurusan</title>
</head>
<body>

<div class="card">
  <div class="card-header text-center">
    Tambah Data Jurusan
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <section class="content">
          <form method="POST" action="jurusan_simpan.php">
          <div class="form-group">
            <label for="nama_jurusan">Nama Jurusan</label>
            <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" aria-describedby="nama_jurusan" placeholder="Masukkan nama jurusan">
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