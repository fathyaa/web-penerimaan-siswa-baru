<?php include 'koneksi.php'; ?>
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
                                    <h3 class="text-center font-weight-light my-4">Registrasi Akun Calon Siswa</h3>
                                </div>
                                <div class="card-body">
                                    <form action="proses_regist.php" method="POST" id="formRegist">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="email">Email </label>
                                                <input class="form-control" name="email" id="email" type="email" placeholder="Masukkan email..." required />
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password </label>
                                                <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan password..." required />
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Konfirmasi password</label>
                                                <input class="form-control" id="confirm_pass" name="confirm_pass" type="password" placeholder="Masukkan password sekali lagi..." required />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Registrasi</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script type="text/javascript" src="valid.js"></script>
</body>

</html>