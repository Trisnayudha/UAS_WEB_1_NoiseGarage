<?php
require_once '../../config/koneksi.php';

$nama_otopart = $_POST['nama_otopart'];
$harga_otopart = $_POST['harga_otopart'];
$merek_otopart = $_POST['merek_otopart'];
$ukuran_otopart = $_POST['ukuran_otopart'];
$deskripsi_otopart = $_POST['deskripsi_otopart'];
$image_otopart = $_FILES['image_otopart']['name'];
$namaSementara = $_FILES['image_otopart']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../vendor/img/otoparts/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $image_otopart);

$q = $db->prepare("INSERT INTO `tabel_otoparts` (`id_otopart`,`nama_otopart`,`harga_otopart`,`merek_otopart`,`ukuran_otopart`,`deskripsi_otopart`, `image_otopart`) VALUES (NULL, ?, ?, ?, ?, ?, ? )");
$q->execute([$nama_otopart, $harga_otopart, $merek_otopart, $ukuran_otopart, $deskripsi_otopart, $image_otopart]);

header("Location: ../pageotoparts.php");
