<?php
require_once '../../config/koneksi.php';

$id_service = $_POST["id_service"];
$id = $_POST["id"];
$harga_service = $_POST["harga_service"];
$status = "Diskonfirmasi";
// var_dump($id);
// var_dump($id_service);
// var_dump($harga_service);
// die;

$q = $db->prepare("INSERT INTO `tabel_transaksi` (`id_transaksi`, `id`, `id_service`, `totalpembelian`, `id_otopart`, `status`) VALUES (NULL, ?, ?, ?, NULL, ?);");
$q->execute([$id, $id_service, $harga_service, $status]);


header("Location: ../views/service.php");
