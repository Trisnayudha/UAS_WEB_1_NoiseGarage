<?php
include 'header.php';
include 'slider.php';
?>
<title>NoiseGarage | Transaksi</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../index.php">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Transaksi</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Transaksi</h3>
        </div>
    </div>
    <!--/.row-->

    <div class="table-responsive">
        <table id="datatransaksi" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>ID Transaksi</th>
                    <th>ID Pengguna</th>
                    <th>ID Service</th>
                    <th>ID Otoparts</th>
                    <th>Tanggal</th>
                    <th>Total Harga Pembelian</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>13352</td>
                    <td>24</td>
                    <td>31412</td>
                    <td>512512</td>
                    <td>24-07-2021</td>
                    <td>Rp.1.500.000</td>
                    <td>Approve</td>
                    <td>
                        <form action="#" method="POST">
                            <input type="hidden" name="id_reg" />
                            <button type="submit" class="btn btn-danger">Konfirmasi</button>
                    </td>
                    </form>
                </tr>

            </tbody>
        </table>
    </div>

</div>