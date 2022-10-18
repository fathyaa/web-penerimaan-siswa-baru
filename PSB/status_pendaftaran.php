<?php session_start();
include 'koneksi.php';
include 'header-nav.php'; ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Selamat Datang Calon Siswa VSGA High School</h1><br>
        <div class="card mb-4">
            <div class="card-header">
                Data Calon Siswa
            </div>
            <?php
            $id = $_SESSION['id_siswa'];
            $result = mysqli_query($conn, "SELECT * FROM pendaftaran_siswa WHERE id = '$id'");
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="card-body px-xxl-3 py-xxl-3">
                    <div class="form-row">
                        <div class="col-md-4 px-xxl-5 py-xxl-5 img-fluid">
                            <img src="<?= $row['foto'] ?>" alt="" width="300px" height="400px">
                        </div>
                        <div class="col py-xxl-5">
                            <ol class="list-group list-group-flush ">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Nama lengkap</div>
                                        <?= $row['nama'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Tempat lahir</div>
                                        <?= $row['tempat_lahir'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Tanggal lahir</div>
                                        <?= $row['tgl_lahir'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Umur</div>
                                        <?= $row['umur'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Jenis kelamin</div>
                                        <?= $row['jenis_kelamin'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Alamat</div>
                                        <?= $row['alamat'] ?>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col py-xxl-5">
                            <ol class="list-group list-group-flush ">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Sekolah asal</div>
                                        <?= $row['sekolah_asal'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">NISN</div>
                                        <?= $row['nisn'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Nilai UN B. Indonesia</div>
                                        <?= $row['nilai_bindo'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Nilai UN B. Inggris</div>
                                        <?= $row['nilai_binggris'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Nilai UN Matematika</div>
                                        <?= $row['nilai_mtk'] ?>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Nilai UN IPA</div>
                                        <?= $row['nilai_ipa'] ?>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Status Kelulusan Siswa
            </div>
            <div class="card-body px-xxl-5 py-xxl-5">
                <h5 style="text-align: center;">Hasil seleksi VSGA High School menyatakan bahwa saudara <?= $row['nama'] ?> <?= $row['status_pendaftaran'] ?> menjadi siswa baru.</h5>
            </div>
        </div>
    <?php } ?>
    </div>
</main>
<?php include 'footer.php'; ?>