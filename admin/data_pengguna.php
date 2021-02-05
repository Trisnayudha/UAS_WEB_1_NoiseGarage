<?php
require_once '../config/koneksi.php';

try {
    $sql = 'SELECT * FROM `tabel_pengguna`';
    $q = $db->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    // var_dump($q);
    // die;
} catch (PDOException $e) {
    die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}
