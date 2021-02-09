<?php
include 'header.php';
include 'slider.php';
$id_otopart = $_POST['id_otopart'];
$nama_otopart = $_POST['nama_otopart'];
$harga_otopart = $_POST['harga_otopart'];
$merek_otopart = $_POST['merek_otopart'];
$ukuran_otopart = $_POST['ukuran_otopart'];
$deskripsi_otopart = $_POST['deskripsi_otopart'];
$image_otopart = $_POST['image_otopart'];
?>
<title>NoiseGarage | Edit Service</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="pageotoparts.php">
                    <em class="fa fa-home"></em>
                </a>
            </li>
            <li class="active">Otoparts</li>
            <li class="active">Edit Otoparts</li>
        </ol>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Form Input</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="config/editotoparts.php" method="POST">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input class="form-control" name="nama_otopart" value="<?=$nama_otopart?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input class="form-control"name="harga_otopart" value="<?=$harga_otopart?>">
                    
                    </div>
                    <div class="form-group">
                        <label>Merk Barang</label>
                        <input class="form-control" name="merek_otopart" value="<?=$merek_otopart?>">
                    
                    </div>
                    <div class="form-group">
                        <label>Ukuran Barang</label>
                        <input class="form-control" name="ukuran_otopart" value="<?=$ukuran_otopart?>">
                    
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi_otopart" ><?= $deskripsi_otopart?></textarea>
                    
                    </div>
                    <div class="form-group">
                        <label>File image</label>
                        <input type="file">
                    
                    </div>
                    <input type="hidden" name="id_otopart" value="<?= $id_otopart ?>" />
                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../vendor/js/bootstrap.min.js"></script>
<script src="../vendor/js/chart.min.js"></script>
<script src="../vendor/js/chart-data.js"></script>
<script src="../vendor/js/easypiechart.js"></script>
<script src="../vendor/js/easypiechart-data.js"></script>
<script src="../vendor/js/bootstrap-datepicker.js"></script>
<script src="../vendor/js/custom.js"></script>