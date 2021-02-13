<?php
require_once '../../config/koneksi.php';

$id_otopart = $_POST["id_otopart"];
$id = $_POST["id"];
$harga_otopart = $_POST["harga_otopart"];
$status = "Diskonfirmasi";


$q = $db->prepare("INSERT INTO `tabel_transaksi` (`id_transaksi`, `id`, `id_service`, `totalpembelian`, `id_otopart`, `status`) VALUES (NULL, ?, NULL, ?, ?, ?);");
$q->execute([$id, $harga_otopart, $id_otopart, $status]);


header("Location: ../views/otoparts.php");
