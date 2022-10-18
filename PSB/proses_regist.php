<?php
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];

$cek_akun = mysqli_query($conn, "SELECT * FROM pendaftaran_siswa WHERE email = '$email'");

if (mysqli_num_rows($cek_akun) == 0) {
    if ($password == $confirm_pass) {

        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO pendaftaran_siswa VALUES ('', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
        mysqli_query($conn, $sql);

        echo "<script> alert('Registrasi akun berhasil.');
          window.location = 'login.php'; </script>";
    } else {
        echo "<script> alert('Password dan konfirmasi password harus sama.');
          window.location = 'registrasi.php'; </script>";
    }
} else {
    echo "<script> alert('Email gagal didaftarkan.');
          window.location = 'registrasi.php'; </script>";
}
