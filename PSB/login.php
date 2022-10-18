<?php session_start();
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-success">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg my-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login Calon Siswa</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Masukkan email..." required />
                                            <label for="email">Email *</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan password" required />
                                            <label for="password">Password *</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary" name="submit">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="registrasi.php">Belum punya akun? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <?php
        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $cek_email = mysqli_query($conn, "SELECT * FROM pendaftaran_siswa WHERE email = '$email'");
            $sesi = mysqli_num_rows($cek_email);

            if ($sesi === 1) {
                $row = mysqli_fetch_assoc($cek_email);

                // if (password_verify($password, $row['password'])) {
                if ($password === $row['password']) { //langsung login pakai akun dari database. jika registrasi dulu, buka tag kode line 65 dan tutup line 66.
                    $_SESSION['login']        = true;
                    $query = mysqli_query($conn, "SELECT * FROM pendaftaran_siswa WHERE email = '$email'");
                    $data_siswa               = mysqli_fetch_array($query);
                    $_SESSION['id_siswa']     = $data_siswa['id'];

                    echo '<script language="javascript">
			            alert("Login berhasil.");
                        window.location = "index_siswa.php";
		        	  </script>';
                }
            } else {
                echo '<script language="javascript">
			alert("Email atau password salah.");
			window.location = "login.php";
			</script>';
            }
        }
        ?>

        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Pendaftaran Calon Siswa Baru VSGA School 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>