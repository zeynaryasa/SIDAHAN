<?php
include '../db/conn.php';

//query read
$sqlTahanan = "SELECT * FROM tb_tahanan ORDER BY id DESC";
$queryTahanan = mysqli_query($conn, $sqlTahanan);


//insert Tahanan
if (isset($_POST['btnInsertTahanan'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $alamat = $_POST['alamat'];
    $tglPenahanan = $_POST['tglPenahanan'];
    $alasanPenahanan = $_POST['alasanPenahanan'];
    $hukuman = $_POST['hukuman'];
    $petugas = $_POST['noIdentPetugas'];
    $noSel = $_POST['no_Sel'];


    $sqlInTahanan = "INSERT INTO tb_tahanan VALUES (
        null,
        '" . $nama . "',
        '" . $usia . "',
        '" . $jenisKelamin . "',
        '" . $alamat . "',
        '" . $tglPenahanan . "',
        '" . $alasanPenahanan . "',
        '" . $hukuman . "',
        '" . $petugas . "',
        '" . $noSel . "'
    )";
    $queryInTahanan = mysqli_query($conn, $sqlInTahanan);

    if ($queryInTahanan) {
        $_SESSION['pesanInsertTahanan'] = "Insert Data Tahanan Berhasil";
        header("Location: ../views/dataTahanan.php");
    } else {
        $_SESSION['pesanInsertTahanan'] = "Insert Data Tahanan Gagal";
        header("Location: ../views/insertDataTahanan.php");
    }
}
//end insert tahanan

//edit data tahanan
if (isset($_POST['btnEditTahanan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $alamat = $_POST['alamat'];
    $tglPenahanan = $_POST['tglPenahanan'];
    $alasanPenahanan = $_POST['alasanPenahanan'];
    $hukuman = $_POST['hukuman'];
    $petugas = $_POST['petugas'];
    $noSel = $_POST['no_Sel'];

    $sqlEditTahanan = "UPDATE tb_tahanan SET
        nama = '$nama',
        usia = '$usia',
        jenisKelamin = '$jenisKelamin',
        alamat = '$alamat',
        tglPenahanan = '$tglPenahanan',
        alasanPenahanan = '$alasanPenahanan',
        hukuman = '$hukuman',
        petugas = '$petugas',
        noSel = '$noSel'
        WHERE id = '$id'
    ";
    $queryEditTahanan = mysqli_query($conn, $sqlEditTahanan);
    if ($queryEditTahanan) {
        $_SESSION['pesanEditTahanan'] = "Update Data Tahanan Berhasil";
        header("Location: ../views/dataTahanan.php");
    } else {
        $_SESSION['pesanEditTahanan'] = "Update Data Tahanan Gagal";
        header("Location: ../views/dataTahanan.php");
    }
};
//end edit data tahanan

//Delete Admin
if (isset($_GET['id'])) {
    $sqlDelTahanan = "DELETE FROM tb_tahanan WHERE id ='" . $_GET['id'] . "'";
    $queryDelTahanan = mysqli_query($conn, $sqlDelTahanan);
    if ($queryDelTahanan) {
        $_SESSION['pesanHapusTahanan'] = "Hapus Data Tahanan Berhasil";
        header("Location: ../views/dataTahanan.php");
    } else {
        $_SESSION['pesanHapusTahanan'] = "Hapus Data Tahanan Gagal";
        header("Location: ../views/dataTahanan.php");
    }
}
//End delete admin
