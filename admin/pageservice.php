<?php
include 'header.php';
include 'slider.php';
?>

<?php
require_once('data_service.php');
?>
<title>NoiseGarage - Service</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">
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
                <?php
                $no = 0;
                while ($row = $q->fetch()) :
                    $no++;
                    $id_service = $row['id_service'];
                    $nama_service = $row['nama_service'];
                    $harga_service = $row['harga_service'];
                    $merek_service = $row['merek_service'];
                    $ukuran_service = $row['ukuran_service'];
                    $deskripsi_service = $row['deskripsi_service'];
                    $image_service = $row['image_service'];
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $nama_service ?></td>
                        <td><?php echo $harga_service ?></td>
                        <td><?php echo $merek_service ?></td>
                        <td><?php echo $ukuran_service ?></td>
                        <td><?php echo $deskripsi_service ?></td>
                        <td align="center">
                            <img src="vendor/img/servis/" <?php echo $image_service
                                                            ?> width="150px">
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
                <?php endwhile; ?>
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