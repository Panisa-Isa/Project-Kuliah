<?php
$base_url = "http://localhost/PPDB/";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Daftar Akun - PPDB Kecamatan Pauh</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        background: #eef3ff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    .signup-card {
        width: 100%;
        max-width: 480px;
        border-radius: 18px;
        padding: 28px;
    }
    .form-control {
        border-radius: 50px;
        padding: 10px 18px;
    }
    .btn-primary {
        border-radius: 50px;
        padding: 10px;
        font-weight: 600;
    }
</style>
</head>

<body>

<div class="card shadow-sm signup-card">

    <!-- LOGO -->
    <div class="text-center mb-3">
        <img src="<?= $base_url ?>logo_pauh.png"
             alt="Logo PPDB"
             style="height: 70px;">
    </div>

    <!-- JUDUL -->
    <h4 class="fw-bold text-center text-primary mb-1">
        Daftar Akun PPDB
    </h4>
    <p class="text-center text-secondary mb-4">
        Kecamatan Pauh • Tahun Ajaran 2025/2026
    </p>

    <!-- FORM SIGN UP -->
    <form action="proses_signup.php" method="POST">

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Nomor HP</label>
            <input type="text" name="nohp" class="form-control" placeholder="08xxxxxxxxxx" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Buat password" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Konfirmasi Password</label>
            <input type="password" name="password2" class="form-control" placeholder="Ulangi password" required>
        </div>

        <button class="btn btn-primary w-100 mt-2">
            Buat Akun
        </button>

        <p class="text-center mt-3">
            Sudah punya akun?  
            <a href="login.php" class="text-primary fw-semibold">Login di sini</a>
        </p>

    </form>

</div>

</body>
</html>
