<?php
session_start();
include '../db/conn.php';
$sqlCariDataById = "SELECT * FROM tb_tahanan WHERE id='" . $_GET['id'] . "'";
$queryCariDataById = mysqli_query($conn, $sqlCariDataById);
$row = mysqli_fetch_array($queryCariDataById);
?>
<?php include "../template/header.php" ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <h5 class="mb-4 text-center">Detail Informasi Untuk <b><?= $row['nama']; ?></b></h5>

        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- /.col -->
            <div class="col-md-10">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username"><?= $row['nama']; ?></h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src=" <?= $baseUrl; ?>asset/template/dist/img/avatar2.png" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Nama</h5>
                                    <span class="description-text"><?= $row['nama']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">Usia</h5>
                                    <span class="description-text"><?= $row['usia']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">jenis Kelamin</h5>
                                    <span class="text-center"><?= $row['jenisKelamin']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">Alamat</h5>
                                    <span class="text-center"><?= $row['alamat']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">Tgl. Penahanan</h5>
                                    <span class="text-center"><?= $row['tglPenahanan']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">Alasan Penahanan</h5>
                                    <span class="text-center"><?= $row['alasanPenahanan']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">Hukuman</h5>
                                    <span class="text-center"><?= $row['hukuman']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">NO. Identitas Petugas</h5>
                                    <span class="text-center"><?= $row['petugas']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">No. Sel</h5>
                                    <span class="text-center"><?= $row['noSel']; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <div class="text-center">
                    <a href="<?= $baseUrl; ?>views/dataTahanan.php"> <button class="btn btn-primary text-center">Kembali</button>
                    </a>
                </div>
                <!-- /.widget-user -->
            </div>
            <!-- /.col -->
            <div class="col-md-1">
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<?php include '../template/foother.php' ?>