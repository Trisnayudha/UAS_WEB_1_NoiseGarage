<?php
include 'header.php';
include 'slider.php';

?>
<title>NoiseGarage | Add Service</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="pageservice.php">
                    <em class="fa fa-home"></em>
                </a>
            </li>
            <li class="active">Service</li>
            <li class="active">Add Service</li>
        </ol>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Forms</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form">
                    <div class="form-group">
                        <label>Nama Service</label>
                        <input class="form-control" placeholder="Nama Barang">
                        <label>Harga Service</label>
                        <input class="form-control" placeholder="Rp 5x.xxx">
                        <label>Merk Service</label>
                        <input class="form-control" placeholder="Merk Service">
                        <label>Ukuran Service</label>
                        <input class="form-control" placeholder="Ukuran Service">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3"></textarea>
                        <label>File image</label>
                        <input type="file">
                    </div>
                    <button type="button" class="btn btn-md btn-primary">Submit</button>
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