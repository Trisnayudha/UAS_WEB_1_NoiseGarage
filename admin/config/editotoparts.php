<?php
require_once "../../config/koneksi.php";
$id_otopart = $_POST['id_otopart'];
$nama_otopart = $_POST['nama_otopart'];
$harga_otopart = $_POST['harga_otopart'];
$merek_otopart = $_POST['merek_otopart'];
$ukuran_otopart = $_POST['ukuran_otopart'];
$deskripsi_otopart = $_POST['deskripsi_otopart'];
$image_otopart = $_POST['image_otopart'];

$q = $db->prepare("UPDATE `tabel_otoparts` SET `nama_otopart` = ?, `harga_otopart` = ?, `merek_otopart` = ?, `ukuran_otopart` = ?, `deskripsi_otopart` = ? WHERE `tabel_otoparts`.`id_otopart` = ?");
$q->execute([$nama_otopart, $harga_otopart, $merek_otopart, $ukuran_otopart, $deskripsi_otopart, $id_otopart]);
header("Location: ../pageotoparts.php");
