<?php
ob_start();
session_start();
error_reporting(0);
include "config/koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=form-pendaftaran.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=form-pendaftaran.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=form-pendaftaran.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=form-pendaftaran.php'>";
}else{
$daftar = mysql_query("INSERT INTO login (username, password, nama, email, alamat, no_hp) values ('$username','$password','$nama','$email','$alamat','$no_hp')");
if ($daftar){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=form-pendaftaran.php'>";
}
}
?>