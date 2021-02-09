<?php
include 'header.php';
include 'slider.php';

?>
<title>NoiseGarage | Add Service</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="pageotoparts.php">
                    <em class="fa fa-home"></em>
                </a>
            </li>
            <li class="active">Otoparts</li>
            <li class="active">Add Otoparts</li>
        </ol>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Form Input</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="config/addotoparts.php" method="POST">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input class="form-control" placeholder="Nama Barang" name="nama_otopart">
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input class="form-control" placeholder="Rp.5xx.xxx" name="harga_otopart">
                    </div>
                    <div class="form-group">
                        <label>Merk Barang</label>
                        <input class="form-control" placeholder="Merk Barang" name="merek_otopart">
                    </div>
                    <div class="form-group">
                        <label>Ukuran Barang</label>
                        <input class="form-control" placeholder="Ukuran Barang" name="ukuran_otopart">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi_otopart"></textarea>
                    </div>
                    <div class="form-group">
                        <label>File image</label>
                        <input type="file">
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
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