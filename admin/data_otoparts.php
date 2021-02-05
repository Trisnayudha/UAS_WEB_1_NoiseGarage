<?php
require_once '../config/koneksi.php';

try {
    $sql = 'SELECT * FROM `tabel_otoparts`';
    $q = $db->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}
