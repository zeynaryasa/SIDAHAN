<?php
if (!$_SESSION['login'] == "ya") {
    header("Location: ../index.php");
}
