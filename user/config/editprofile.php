<?php
require_once '../../config/koneksi.php';
require_once('../../auth.php');

$id = $_POST["id"];
$username = $_POST["username"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$telepon = $_POST["telepon"];
$photo = $_POST["photo"];

$q = $db->prepare("UPDATE `tabel_pengguna` SET `username` = ?, `email` = ?, `alamat` = ?, `telepon` = ? WHERE `tabel_pengguna`.`id` = ?");

$q->execute([$username, $email, $alamat, $telepon, $id]);



header("Location: ../../logout.php");
