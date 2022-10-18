<?php session_start();
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header-nav.php'; ?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Selamat Datang Calon Siswa</h1><br>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Isi form di bawah ini untuk mendaftar menjadi siswa baru.</li>
        </ol>
        <div class="card-body">
            <h4 class="mb-4">Data diri</h4>
            <?php
            $id = $_SESSION['id_siswa'];
            $result = mysqli_query($conn, "SELECT * FROM pendaftaran_siswa WHERE id = '$id'");
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <form action="upload_foto.php" id="uploadPhoto" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $_SESSION['id_siswa'] ?>">
                    <div class="form-group">
                        <label for="foto">Foto</label><br>
                        <input name="foto" id="foto" type="file" <?= $row['foto'] ?> required />
                        <button type="submit" class="btn btn-primary" name="submitfoto">Simpan</a>
                    </div>
                </form>
                <form action="proses_pendaftaran.php" method="POST" id="formPendaftaran">
                    <input type="hidden" name="id" value="<?= $_SESSION['id_siswa'] ?>">
                    <div class="form-group">
                        <label for="nama">Nama lengkap</label>
                        <input class="form-control" name="nama" id="nama" type="text" value="<?= $row['nama'] ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text" value="<?= $row['tempat_lahir'] ?>" required />
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal lahir</label>
                                <input class="form-control" name="tgl_lahir" id="tgl_lahir" type="date" min="2004-12-31" max="2007-12-31" value="<?= $row['tgl_lahir'] ?>" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input class="form-control" name="umur" id="umur" type="number" value="<?= $row['umur'] ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?= $row['jenis_kelamin'] ?>" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" id="alamat" name="alamat" type="text" value="<?= $row['alamat'] ?>" required />
                    </div>

                    <h4 class="mb-4">Data sekolah asal</h4>
                    <div class="form-group">
                        <label for="sekolah_asal">Sekolah asal</label>
                        <input class="form-control" name="sekolah_asal" id="sekolah_asal" type="text" value="<?= $row['sekolah_asal'] ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input class="form-control" id="nisn" name="nisn" type="number" value="<?= $row['nisn'] ?>" required />
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nilai_bindo">Nilai UN B. Indonesia</label>
                                <input class="form-control" id="nilai_bindo" name="nilai_bindo" type="number" value="<?= $row['nilai_bindo'] ?>" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nilai_binggris">Nilai UN B. Inggris</label>
                                <input class="form-control" id="nilai_binggris" name="nilai_binggris" type="number" value="<?= $row['nilai_binggris'] ?>" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nilai_ipa">Nilai UN IPA</label>
                                <input class="form-control" id="nilai_ipa" name="nilai_ipa" type="number" value="<?= $row['nilai_ipa'] ?>" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nilai_mtk">Nilai UN Matematika</label>
                                <input class="form-control" id="nilai_mtk" name="nilai_mtk" type="number" value="<?= $row['nilai_mtk'] ?>" required />
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</a>
                </div>
                </form>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>