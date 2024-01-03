<?php
session_start();
include '../conf/countData.php';
include '../conf/validasiPage.php';
include '../baseUrl.php';
?>
<?php include '../template/header.php' ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <h1>Dashboard</h1>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $jmlTahanan; ?></h3>

            <p>Tahanan</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?= $baseUrl; ?>views/dataTahanan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $jmlPetugas; ?></h3>

            <p>Petugas Lapas</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?= $baseUrl; ?>views/dataPetugas.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $JmlAdmin; ?></h3>

            <p>Administrator</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?= $baseUrl; ?>views/dataAdmin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- ./col -->
  </div>

</section>
<?php include '../template/foother.php' ?>