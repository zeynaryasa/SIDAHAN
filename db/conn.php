<?php
$conn = new mysqli("localhost", "root", "root", "si-pt_db");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
