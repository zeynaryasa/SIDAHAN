<?php
session_start();
include '../db/conn.php';
$sqlCariDataById = "SELECT * FROM tb_user WHERE id_user = '" . $_GET['id_user'] . "'";
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
                <h3 class="card-title ">Update Data Admin </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <form action="<?= $baseUrl; ?>conf/dataAdmin.php" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" value="<?= $row['id_user']; ?>" name="id_user" hidden>
                            <div class="form-group">
                                <label>No. Identitas</label>
                                <input type="text" class="form-control" name="no_identitas" required placeholder="no. identitas Admin" autocomplete="off" value="<?= $row['no_identitas']; ?>">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Nama Admin</label>
                                <input type="text" class="form-control" name="nama" required placeholder="Masukan nama lengkap" autocomplete="off" value="<?= $row['nama']; ?>">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-1">

                        </div>

                        <!-- /.form-group -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control select2bs4" name="jenisKelamin" style="width: 100%;" required>
                                    <option selected="selected" value="<?= $row['jenisKelamin']; ?>"><?= $row['jenisKelamin']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required placeholder="masukan username" autocomplete="off" value="<?= $row['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required placeholder="masukan password" autocomplete="off" value="<?= $row['password']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit" name="btnEditAdmin">Simpan</button>
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