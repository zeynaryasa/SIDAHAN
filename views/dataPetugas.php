<?php
session_start();
include '../conf/dataPetugas.php';
?>
<?php include '../template/header.php' ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h3>Data Petugas</h3>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <form action="simple-results.html">
                                            <div class="input-group">
                                                <input type="search" class="form-control form-control-sm" placeholder="Type your keywords here">
                                                <div class="input-group-append">
                                                    <button type="submit" name="search" class="btn btn-sm btn-default">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-1">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <a href="#">
                                                    <button type="submit" name="print" class="btn btn-sm btn-default">
                                                        <i class="fa fa-print"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <a href="<?= $baseUrl; ?>views/insertDataPetugas.php">
                                                    <button type="submit" name="print" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">No. Identitas</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th class="text-center col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($queryPetugas)) {
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td><?= $row['no_identPetugas']; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row['jenisKelamin']; ?></td>
                                        <td class="text-center col-2 ">
                                            <a href="../views/editDataPetugas.php?id=<?= $row['id']; ?>"><button class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></button></a>
                                            <a href="../views/detailDataPetugas.php?id=<?= $row['id']; ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-folder"></i></button></a>
                                            <a href="../conf/dataPetugas.php?id=<?= $row['id']; ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></button></a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>


<?php include '../template/foother.php' ?>