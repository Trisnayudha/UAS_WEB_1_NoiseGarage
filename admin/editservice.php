<?php
include 'header.php';
include 'slider.php';
$id_service = $_POST['id_service'];
$nama_service = $_POST['nama_service'];
$harga_service = $_POST['harga_service'];
$merek_service = $_POST['merek_service'];
$ukuran_service = $_POST['ukuran_service'];
$deskripsi_service = $_POST['deskripsi_service'];
$image_service = $_POST['image_service'];

?>
<title>NoiseGarage | Edit Service</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="pageservice.php">
                    <em class="fa fa-home"></em>
                </a>
            </li>
            <li class="active">Service</li>
            <li class="active">Edit Service</li>
        </ol>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Forms</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="config/editservice.php" method="POST">
                    <div class="form-group">
                        <label>Nama Service</label>
                        <input class="form-control" name="nama_service" value="<?= $nama_service ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Service</label>
                        <input class="form-control" name="harga_service" value="<?= $harga_service ?>">

                    </div>
                    <div class="form-group">
                        <label>Merk Service</label>
                        <input class="form-control" name="merek_service" value="<?= $merek_service ?>">

                    </div>
                    <div class="form-group">
                        <label>Ukuran Service</label>
                        <input class="form-control" name="ukuran_service" value="<?= $ukuran_service ?>">

                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi_service"><?= $deskripsi_service ?></textarea>

                    </div>
                    <div class="form-group">
                        <label>File image</label>
                        <input type="file" name="image_service">

                    </div>
                    <input type="hidden" name="id_service" value="<?= $id_service ?>" />
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