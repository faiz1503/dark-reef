<?php
include 'config/koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$login    = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['username'] = $user['username'];
    echo "<script>alert('Selamat Datang $_SESSION[username]'); window.location = 'index.php'</script>";
  header('location:index.php?hal=home');
}
else{
 echo "<script>alert('Login Gagal, username atau password anda salah'); window.location = 'login.php'</script>";
}