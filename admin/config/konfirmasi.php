<?php
require_once '../../config/koneksi.php';
$id_transaksi = $_POST["id_transaksi"];
$status = "Konfirmasi";

$q = $db->prepare("UPDATE `tabel_transaksi` SET `status` = ? WHERE `tabel_transaksi`.`id_transaksi` = ?");
$q->execute([$status, $id_transaksi]);

header("Location: ../pagetransaksi.php");
