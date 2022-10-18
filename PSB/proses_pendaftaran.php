<?php session_start();
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$sekolah_asal = $_POST['sekolah_asal'];
$nisn = $_POST['nisn'];
$nilai_bindo = $_POST['nilai_bindo'];
$nilai_binggris = $_POST['nilai_binggris'];
$nilai_ipa = $_POST['nilai_ipa'];
$nilai_mtk = $_POST['nilai_mtk'];
$status_pendaftaran = "Diproses";

$nilai_rata = ($nilai_bindo + $nilai_binggris + $nilai_mtk + $nilai_ipa) / 4;

$sql = "UPDATE pendaftaran_siswa SET nama = '$nama', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir',
       umur = '$umur', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', sekolah_asal = '$sekolah_asal',
       nisn = '$nisn', nilai_bindo = '$nilai_bindo', nilai_binggris = '$nilai_binggris', nilai_ipa = '$nilai_ipa',
       nilai_mtk = '$nilai_mtk', nilai_rata = '$nilai_rata', status_pendaftaran = 'Diproses' WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

$kelulusan = "UPDATE pendaftaran_siswa SET status_pendaftaran = IF(nilai_bindo < 75 OR nilai_bindo < 75 OR
              nilai_ipa < 75 OR nilai_mtk < 75 OR nilai_rata < 85, 'Tidak diterima', 'Diterima') WHERE id = '$id'";

$kelulusan = mysqli_query($conn, $kelulusan);

echo '<script language="javascript">
			alert("Form pendaftaran siswa berhasil disimpan.");
			window.location = "index_siswa.php";
			</script>';
