<?php
$base_url = "http://localhost/PPDB/";
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PPDB SD Negeri 2025/2026 - Jalur Zonasi Padang</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
      body { background-color: #f8f9fa;
        padding-top: 50px;
      }
      .logo {
        width: 60px; height: 60px;
        background: #0d6efd;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        color: #fff; font-weight: bold; font-size: 20px;
      }
      .navbar-brand {
        font-weight: bold;
      }
      .nav-link.active {
        font-weight: bold;
        color: #ffffff !important;
      }
</style>
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top px-4 p-3">
  <div class="container-fluid">

    <!-- Logo & Brand -->
     <img src="<?= $base_url ?>image/logo_sd.png" alt="Logo Sekolah" class="me-1" style="height:40px;">
    <img src="<?= $base_url ?>image/logo_pauh.png" alt="Logo Sekolah" class="me-2" style="height:33px;">
    <a class="navbar-brand fw-bold text-white" href="<?= $base_url ?>">PPDB Kecamatan Pauh</a>

    <!-- Toggle Mobile -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- Nav kiri -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white <?= ($current_page=='ppdb.php')?'active':'' ?>" 
             href="<?= $base_url ?>ppdb.php">Dashboard</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $base_url ?>ppdb.php">Profil</a>
        </li>
      </ul>

      <!-- Nav kanan (button) -->
      <ul class="navbar-nav ms-4 d-flex align-items-center gap-2">

        <li class="nav-item">
          <a class="btn btn-outline-light bg-white text-primary rounded-pill px-3 fw-bold" 
            href="<?= $base_url ?>sign_in.php">Sign In</a>
        </li>

        <li class="nav-item">
          <a class="btn btn-outline-light bg-white text-primary rounded-pill px-3 fw-bold" 
            href="<?= $base_url ?>login.php">Login</a>
        </li>


      </ul>

    </div>
  </div>
</nav>

