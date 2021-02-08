<?php
require_once '../../config/koneksi.php';

$nama_service = $_POST["nama_service"];
$harga_service = $_POST["harga_service"];
$merek_service = $_POST["merek_service"];
$ukuran_service = $_POST["ukuran_service"];
$deskripsi_service = $_POST["deskripsi_service"];
$image_service = $_POST["image_service"];

$q = $db->prepare("INSERT INTO `tabel_service` (`id_service`,`nama_service`,`harga_service`,`merek_service`,`ukuran_service`,`deskripsi_service`) VALUES (NULL, ?, ?, ?, ?, ? )");
$q->execute([$nama_service, $harga_service, $merek_service, $ukuran_service, $deskripsi_service]);

header("Location: ../pageservice.php");
