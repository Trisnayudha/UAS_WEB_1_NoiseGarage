<?php
require_once "../../config/koneksi.php";
$id_service = $_POST['id_service'];

$q = $db->prepare("DELETE FROM `tabel_service` WHERE `tabel_service`.`id_service` = ?");
$q->execute([$id_service]);
header("Location: ../pageservice.php");
