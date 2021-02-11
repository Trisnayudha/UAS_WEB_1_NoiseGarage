<?php
require_once "../../config/koneksi.php";

$id_service = $_POST["id_service"];
$nama_service = $_POST["nama_service"];
$harga_service = $_POST["harga_service"];
$merek_service = $_POST["merek_service"];
$ukuran_service = $_POST["ukuran_service"];
$deskripsi_service = $_POST["deskripsi_service"];
$image_service = $_FILES['image_service']['name'];
$namaSementara = $_FILES['image_service']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../vendor/img/servis/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $image_service);

$q = $db->prepare("UPDATE `tabel_service` SET `nama_service` = ?, `harga_service` = ?, `merek_service` = ?, `ukuran_service` = ?, `deskripsi_service` = ?, `image_service` = ? WHERE `tabel_service`.`id_service` = ?");
$q->execute([$nama_service, $harga_service, $merek_service, $ukuran_service, $deskripsi_service, $image_service, $id_service]);

header("Location: ../pageservice.php");
