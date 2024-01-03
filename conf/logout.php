<?php
session_start();
require '../conf/validasiPage.php';
session_destroy();

header("Location: ../index.php");
