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
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title ">Update Data Tahanan</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <form action="<?= $baseUrl; ?>conf/dataTahanan.php" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" value="<?= $row['id']; ?>" name="id" hidden>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" required value="<?= $row['nama']; ?>" autocomplete="off">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Usia</label>
                                <input type="text" class="form-control" name="usia" required value="<?= $row['usia']; ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control select2bs4" name="jenisKelamin" style="width: 100%;" required>
                                    <option selected="selected" value="<?= $row['jenisKelamin']; ?>"><?= $row['jenisKelamin']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>

                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" required value="<?= $row['alamat']; ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Tgl. Penahanan</label>
                                <input type="date" class="form-control" name="tglPenahanan" value="<?= $row['tglPenahanan']; ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Alasan Penahanan</label>
                                <input type="text" class="form-control" name="alasanPenahanan" value="<?= $row['alasanPenahanan']; ?>" required autocomplete="off">
                            </div>
                        </div>

                        <!-- /.form-group -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Hukuman</label>
                                <input type="text" name="hukuman" class="form-control" required value="<?= $row['hukuman']; ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Petugas</label>
                                <input type="text" name="petugas" class="form-control" required value="<?= $row['petugas']; ?>" readonly autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>No. Sel</label>
                                <input type="text" name="no_Sel" class="form-control" required value="<?= $row['noSel']; ?>" autocomplete="off">
                            </div>

                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit" name="btnEditTahanan">Simpan</button>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.row -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.card-body -->
</section>
<?php include '../template/foother.php' ?>