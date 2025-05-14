<?php
include_once 'top.php';
require_once 'koneksi.php';

// Aktifkan error reporting (debug)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Hitung jumlah data
$jumlah_dosen = $pdo->query("SELECT COUNT(*) FROM dosen")->fetchColumn();
$jumlah_penelitian = $pdo->query("SELECT COUNT(*) FROM penelitian")->fetchColumn();
$jumlah_kegiatan = $pdo->query("SELECT COUNT(*) FROM kegiatan")->fetchColumn();
$jumlah_kegiatan_dosen = $pdo->query("SELECT COUNT(*) FROM dosen_kegiatan")->fetchColumn();
?>

<div class="app-wrapper">
  <?php include_once 'navbar.php'; ?>
  <?php include_once 'sidebar.php'; ?>

  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h3 class="mb-0">Dashboard</h3>
          </div>
          <div class="col-sm-6 text-end">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row">
          <!-- Dosen -->
          <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white h-100 shadow">
              <div class="card-body">
                <h5>Jumlah Dosen</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="display-6"><?= $jumlah_dosen ?></span>
                  <i class="bi bi-person-lines-fill fs-1"></i>
                </div>
              </div>
              <div class="card-footer text-white">
                <a href="dosen_list.php" class="text-white text-decoration-none">
                  Lihat Detail <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Penelitian -->
          <div class="col-md-3 mb-4">
            <div class="card bg-success text-white h-100 shadow">
              <div class="card-body">
                <h5>Jumlah Penelitian</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="display-6"><?= $jumlah_penelitian ?></span>
                  <i class="bi bi-journal-check fs-1"></i>
                </div>
              </div>
              <div class="card-footer text-white">
                <a href="penelitian_list.php" class="text-white text-decoration-none">
                  Lihat Detail <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Kegiatan -->
          <div class="col-md-3 mb-4">
            <div class="card bg-warning text-white h-100 shadow">
              <div class="card-body">
                <h5>Jumlah Kegiatan</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="display-6"><?= $jumlah_kegiatan ?></span>
                  <i class="bi bi-easel3 fs-1"></i>
                </div>
              </div>
              <div class="card-footer text-white">
                <a href="kegiatan_list.php" class="text-white text-decoration-none">
                  Lihat Detail <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Kegiatan Dosen -->
          <div class="col-md-3 mb-4">
            <div class="card bg-danger text-white h-100 shadow">
              <div class="card-body">
                <h5>Kegiatan Dosen Aktif</h5>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="display-6"><?= $jumlah_kegiatan_dosen ?></span>
                  <i class="bi bi-clipboard-data fs-1"></i>
                </div>
              </div>
              <div class="card-footer text-white">
                <a href="kegiatan_dosen_list.php" class="text-white text-decoration-none">
                  Lihat Detail <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>
        </div> <!-- /.row -->
        <div class="col-lg-12 connectedSortable">
                <!-- <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Sales Value</h3></div>
                  <div class="card-body"><div id="revenue-chart"></div></div>
                </div> -->
                <!-- /.card -->
                <!-- DIRECT CHAT -->
               
    </div> <!-- /.app-content-header -->
  </main>

  <?php include_once 'footer.php'; ?>
</div>
