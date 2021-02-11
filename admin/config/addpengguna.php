<?php
require_once '../../config/koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$password = $_POST['password'];

$q = $db->prepare("INSERT INTO `tabel_pengguna` (`id`, `username`, `email`, `alamat`, `telepon`, `password`) VALUES (NULL, ?, ?, ?, ?, ?)");
$q->execute([$username, $email, $alamat, $telepon, $password]);

header("Location: ../pagepengguna.php");
