<?php
if (isset($_SESSION['user']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: ../login.php');
}
