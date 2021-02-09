<?php
require_once "../../config/koneksi.php";
$id_otopart = $_POST['id_otopart'];

$q = $db->prepare("DELETE FROM `tabel_otoparts` WHERE `tabel_otoparts`.`id_otopart` = ?");
$q->execute([$id_otopart]);
header("Location: ../pageotoparts.php");
