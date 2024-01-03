<?php
include '../db/conn.php';

//query read
$sqlPetugas = "SELECT * FROM tb_petugas ORDER BY id DESC";
$queryPetugas = mysqli_query($conn, $sqlPetugas);


//insert petugas
if (isset($_POST['btnInsertPetugas'])) {
    $noIdentPetugas = $_POST['no_identitas'];
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'];

    $sqlInPetugas = "INSERT INTO tb_petugas VALUES (
        null,
        '" . $noIdentPetugas . "',
        '" . $nama . "',
        '" . $jenisKelamin . "'
    )";

    $queryInPetugas = mysqli_query($conn, $sqlInPetugas);
    if ($queryInPetugas) {
        $_SESSION['pesanInsertPetugas'] = "Insert Data Petugas Berhasil";
        header("Location: ../views/dataPetugas.php");
    } else {
        $_SESSION['pesanInsertDataPetugas'] = "Insert Data Petugas Gagal";
        header("Location: ../views/insertDataPetugas.php");
    }
}
//end insert petugas

//edit data petugas
if (isset($_POST['btnEditPetugas'])) {
    $id = $_POST['id'];
    $no_identPetugas = $_POST['no_identitas'];
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'];

    $sqlEditPetugas = "UPDATE tb_petugas SET
        no_identPetugas = '$no_identPetugas',
        nama = '$nama',
        jenisKelamin = '$jenisKelamin'
        WHERE id = '$id'  
    ";
    $queryEditPetugas = mysqli_query($conn, $sqlEditPetugas);
    if ($queryEditPetugas) {
        $_SESSION['pesanEditPetugas'] = "Update Data Petugas Berhasil";
        header("Location: ../views/dataPetugas.php");
    } else {
        $_SESSION['pesanEditPetugas'] = "Update Data Petugas Gagal";
        header("Location: ../views/dataPetugas.php");
    }
};
//end edit data petugas

//delete data petugas
if (isset($_GET['id'])) {
    $sqlDelPetugas = "DELETE FROM tb_petugas WHERE id ='" . $_GET['id'] . "'";
    $queryDelPetugas = mysqli_query($conn, $sqlDelPetugas);
    if ($queryDelPetugas) {
        $_SESSION['pesanHapusPetugas'] = "Hapus Data Petugas Berhasil";
        header("Location: ../views/dataPetugas.php");
    } else {
        $_SESSION['pesanHapusDataPetugas'] = "Hapus Data Petugas Gagal";
        header("Location: ../views/dataPetugas.php");
    }
}
//end delete data petugas