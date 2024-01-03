<?php
session_start();
include '../db/conn.php';
include '../baseUrl.php';


//query read
$sqlAdmin = "SELECT * FROM tb_user ORDER BY id_user DESC";
$queryAdmin = mysqli_query($conn, $sqlAdmin);
//end query read


//insert Admin
if (isset($_POST['btnInsertAdmin'])) {
    $inNoiden = $_POST['no_identitas'];
    $inNama = $_POST['nama'];
    $inJenisKelamin = $_POST['jenisKelamin'];
    $inUsername = $_POST['username'];
    $inPassword = $_POST['password'];

    $sqlInAdmin = "INSERT INTO tb_user VALUES (
    null,
    '" . $inNoiden . "',
    '" . $inNama . "',
    '" . $inUsername . "',
    '" . $inPassword . "',
    '" . $inJenisKelamin . "'
    )";
    $queryInAdmin = mysqli_query($conn, $sqlInAdmin);
    if ($queryInAdmin) {
        $_SESSION['pesanInsertAdmin'] = "Insert Data Admin Berhasil";
        header("Location: ../views/dataAdmin.php");
    } else {
        $_SESSION['pesanInsertAdmin'] = "Insert Data Admin Gagal";
        header("Location: ../views/insertDataAdmin.php");
    }
};
//end insert


//edit data admin
if (isset($_POST['btnEditAdmin'])) {
    $id_user = $_POST['id_user'];
    $no_identitas = $_POST['no_identitas'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jenisKelamin = $_POST['jenisKelamin'];

    $sqlEditAdmin = "UPDATE tb_user SET
        no_identitas = '$no_identitas',
        nama = '$nama',
        username = '$username',
        password = '$password',
        jenisKelamin = '$jenisKelamin'
        WHERE id_user = '$id_user'
    ";

    $queryEditAdmin = mysqli_query($conn, $sqlEditAdmin);
    if ($queryEditAdmin) {
        $_SESSION['pesanEditAdmin'] = "Update Data Admin Berhasil";
        header("Location: ../views/dataAdmin.php");
    } else {
        $_SESSION['pesanEditAdmin'] = "Update Data Admin Gagal";
        header("Location: ../views/dataAdmin.php");
    };
};
//end edit data admin

//Delete Admin
if (isset($_GET['id_user'])) {
    $sqlDelAdmin = "DELETE FROM tb_user WHERE id_user ='" . $_GET['id_user'] . "'";
    $queryDelAdmin = mysqli_query($conn, $sqlDelAdmin);
    if ($queryDelAdmin) {
        $_SESSION['pesanHapusAdmin'] = "Hapus Data Admin Berhasil";
        header("Location: ../views/dataAdmin.php");
    } else {
        $_SESSION['pesanHapusAdmin'] = "Hapus Data Admin Gagal";
        header("Location: ../views/dataAdmin.php");
    };
};
//End delete admin
