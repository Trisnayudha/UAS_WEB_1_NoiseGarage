<?php
include 'header.php';
include 'slider.php';
?>
<title>NoiseGarage | Add Pengguna</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="pagepengguna.php">
                    <em class="fa fa-home"></em>
                </a>
            </li>
            <li class="active">Pengguna</li>
            <li class="active">Add Pengguna</li>
        </ol>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Form Input</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" placeholder="Username">
                        <label>Email</label>
                        <input class="form-control" placeholder="Ex: Trisnayudha@gmail.com">
                        <label>Alamat</label>
                        <input class="form-control" placeholder="Jl kenangan">
                        <label>Telepon</label>
                        <input class="form-control" placeholder="+62">
                        <label>Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <button type="button" class="btn btn-md btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>