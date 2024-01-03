<?php
require '../db/conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['noIdentitas'] = $row['no_identitas'];
    $_SESSION['login'] = "ya";
    $_SESSION['reLogin'] = "tidak";

    header("Location: ../views/index.php");
} else {
    echo '<script>alert("login gagal")</script>';
    header("Location: ../index.php");
}
