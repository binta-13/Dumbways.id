<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Jawaban 4B</title>
  </head>
  <body>
    <div class="container col-md-6 mt-4">
    <h1>Table Course</h1>
    <div class="card">
      <div class="card-header bg-success text-white ">
        Edit Data
      </div>
      <div class="card-body">
        <?php
        include('koneksi.php');

        $id = $_GET['id']; //mengambil id barang yang ingin diubah

        //menampilkan barang berdasarkan id
        $data = mysqli_query($koneksi, "select * from course where id = '$id'");
        $row = mysqli_fetch_assoc($data);

        ?>
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" required="" class="form-control">
          </div>

          <div class="form-group">
            <label>Thumbnail</label>
            <input type="text" name="tumbnail" class="form-control">
          </div>

          <div class="form-group">
            <label>Id_author</label>
            <input type="text" name="id_author" class="form-control">
          </div>

          <div class="form-group">
            <label>Duration</label>
            <input type="time" name="duration" class="form-control">
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>

        <?php

        //jika klik tombol submit maka akan melakukan perubahan
        if (isset($_POST['submit'])) {
          $id = $_POST['id'];
          $name = $_POST['name'];
          $tumbnail = $_POST['tumbnail'];
          $id_author = $_POST['id_author'];
          $duration = $_POST['duration'];
          $description = $_POST['description'];
          //query mengubah barang
          mysqli_query($koneksi, "update course set name='$name', tumbnail='$tumbnail', id_author='$id_author',  duration='$duration' description='$description', where id ='$id'") or die(mysqli_error($koneksi));

          //redirect ke halaman index.php
          echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
        }



        ?>
      </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
