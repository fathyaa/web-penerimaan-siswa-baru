<?php session_start();
include 'koneksi.php';
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit();
} else { ?>
    <?php include 'header-nav.php' ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang Calon Siswa VSGA High School</h1><br>
            <div class="card mb-4">
                <div class="card-header">
                    Pengumuman
                </div>
                <p class="card-body px-xxl-3 py-xxl-3">
                    Persyaratan pendaftaran : <br>
                    1. Foto 3x4 <br>
                    2. Mengisi form pendaftaran dengan benar <br>
                    3. Nilai Ujian Nasional SMP <br>
                </p>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
<?php
}
?>