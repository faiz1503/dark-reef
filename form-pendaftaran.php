<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Form Pendaftaran</title>
 <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="css/stylee.css">
</head>
<body>
 <form action="simpanuser.php" method="post">
 <h2><i class="fa fa-user"></i>Form Pendaftaran</h2>
 <br/>
 <div class="form-group">
  <input type="text" class="input-mode" name="username" placeholder="Masukkan Username Anda" required>
 </div>
 <div class="form-group">
 <input type="password" class="input-mode" name="password" placeholder="Masukkan Password Anda" required>
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" name="nama" placeholder="Masukkan Nama Anda" required>
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" name="email" placeholder="Email..." required> 
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" name="alamat" placeholder="Alamat Anda" required> 
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" name="no_hp" placeholder="Masukkan Nomor Hp" required> 
 </div>
 <br/>
 <div class="form-group">
  <button class="btn btn-submit" type="submit">Daftar &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
 </div>
 <br/>

 </form>


</body>
</html>