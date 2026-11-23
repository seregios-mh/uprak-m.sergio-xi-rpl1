<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Informasi SMK</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/tema.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="card shadow-sm border-0 form-shell">
                <div class="card-body p-4">

                    <h3 class="form-title">Daftar Akun</h3>
                    <p class="text-muted form-description">Isi data profil dan akun untuk mendaftar.</p>

                        <form action="../aksi/aksi_tambah.php" method="POST">
                            <h5 class="fw-bold mb-3">Data Profil</h5>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Contoh: rio12@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Contoh: XI RPL 1">
                            </div>
                            
                            <!-- ROLE -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Role
                            </label>
                            <select
                                name="role"
                                id="role"
                                class="form-select"
                                onchange="ubahForm()"
                                required
                            >
                                <option value="">
                                    -- Pilih Role --
                                </option>
                                <option value="admin">
                                    Admin
                                </option>
                                <option value="anggota">
                                    Siswa
                                </option>
                            </select>
                        </div>

                            <hr>
                            <h5 class="fw-bold mb-3">Akun</h5>
                            <div class="mb-3">
                                <label for="username" class="form-label">nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Masukkan password">
                            </div>
                            <input type="hidden" name="role" value="anggota">
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                                <a href="login.php" class="btn btn-secondary">Sudah punya akun? Login</a>
                            </div>
                        </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>