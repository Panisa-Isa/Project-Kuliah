
<?php
$base_url = "http://localhost/PPDB/";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login - PPDB Kecamatan Pauh</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        background: #f0f4ff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-card {
        width: 100%;
        max-width: 430px;
        padding: 28px;
        border-radius: 18px;
    }
</style>
</head>

<body>

<div class="card shadow login-card">

    <!-- Logo -->
    <div class="text-center mb-3">
        <img src="<?= $base_url ?>image/logo_pauh.png" 
             alt="Logo" 
             style="height: 60px;">
    </div>

    <!-- Judul -->
    <h4 class="text-center fw-bold mb-1 text-primary">PPDB KECAMATAN PAUH</h4>
    <p class="text-center text-secondary mb-4">Tahun Ajaran 2025 / 2026</p>

    <!-- Form Login -->
    <form action="dashboard.php" method="POST">

        <div class="mb-3">
            <label class="form-label fw-semibold">Email / Username</label>
            <input type="text" class="form-control rounded-pill" name="username" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control rounded-pill" name="password" required>
        </div>

        <button class="btn btn-primary w-100 rounded-pill py-2 fw-semibold">
            Login
        </button>

        <p class="text-center mt-3">
            <a href="#" class="text-primary">Lupa Password?</a>
        </p>
    </form>

</div>

</body>
</html>
