<?php include 'koneksi.php';

if (isset($_POST['submitfoto'])) {

    $id = $_POST['id'];

    $target_dir    = "users/";
    $file_name     = basename($_FILES["foto"]["name"]);
    $target_file   = $target_dir . $file_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {

        $sql = "UPDATE pendaftaran_siswa SET foto = '$target_file' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if ($result == true) {
            echo "<script> alert('Foto telah disimpan.'); </script>";
            echo "<script>window.location = 'form_pendaftaran.php';</script>";
        } else {
            echo "<script> alert('Foto gagal disimpan.'); </script>";
        }
    } else {
        echo "<script> alert('Foto tidak masuk ke dalam sistem.'); </script";
    }
}
