<?php
include 'header.php';
include 'slider.php';

?>
<title>NoiseGarage - Service</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../index.php">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Service</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Service</h3>
        </div>
    </div>
    <!--/.row-->


    <div class="table-responsive">
        <div>
            <a href="addservice.php" class="btn btn-primary">
                <i class="fa fa-edit"></i>
                Tambah data
            </a>
        </div>
        <br>

        <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Service</th>
                    <th>Harga Service</th>
                    <th>Merk Service</th>
                    <th>Ukuran Barang</th>
                    <th>Deskripsi Service</th>
                    <th>Foto Service</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Turun mesin</td>
                    <td>350.000</td>
                    <td>Yamaha</td>
                    <td>1 Buah mesin</td>
                    <td>Melakukan penurusan mesin</td>
                    <td>
                        <img src="../vendor/img/clients/sttb.png">
                    </td>
                    <td>
                        <form action="editservice.php" method="POST">
                            <input type="hidden" name="id_reg" />
                            <input type="hidden" name="namadepan" />
                            <input type="hidden" name="namabelakang" />
                            <input type="hidden" name="email" />
                            <input type="hidden" name="username">

                            <button type=" submit" class="btn btn-primary">Edit</button>

                        </form>
                        <form action="config/hapus.php" method="POST">
                            <input type="hidden" name="id_reg" />
                            <button type="submit" class="btn btn-danger">Hapus</button>
                    </td>
                    </form>
                </tr>

            </tbody>
        </table>
    </div>

</div>


<!-- <link rel="stylesheet" href="../vendor/css/bootstrap.min.css"> -->
<script language="Javascript" src="../vendor/js/bootstrap.min.js"> </script>
<script src="../vendor/JQuery/jquery.min.js"></script>

<!-- CSS dan JS DataTable -->
<script src="../vendor/DataTable/datatables.min.js"></script>
<script src="../vendor/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>