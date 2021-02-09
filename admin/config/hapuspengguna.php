<?php
require_once "../../config/koneksi.php";
$id = $_POST['id'];

$q = $db->prepare("DELETE FROM `tabel_pengguna` WHERE `tabel_pengguna`.`id` = ?");
$q->execute([$id]);
header("Location: ../pagepengguna.php");
