<?php
include '../db/conn.php';

//hitung jml admin
$sqlAdmin = "SELECT * FROM tb_user ORDER BY id_user";
$queryAdmin = mysqli_query($conn, $sqlAdmin);
$JmlAdmin = mysqli_num_rows($queryAdmin);

//hitung jml petugas
$sqlPetugas = "SELECT * FROM tb_petugas ORDER BY id";
$queryPetugas = mysqli_query($conn, $sqlPetugas);
$jmlPetugas = mysqli_num_rows($queryPetugas);

//hitung jml tahanan
$sqlTahanan = "SELECT * FROM tb_tahanan ORDER BY id";
$queryTahanan = mysqli_query($conn, $sqlTahanan);
$jmlTahanan = mysqli_num_rows($queryTahanan);
