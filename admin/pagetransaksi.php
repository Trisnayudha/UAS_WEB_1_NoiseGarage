<?php
include 'header.php';
include 'slider.php';
?>
<?php
require_once 'data_transaksi.php';
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
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>ID Pengguna</th>
                    <th>ID Service</th>
                    <th>Total Pembelian</th>
                    <th>ID Otoparts</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($row = $q->fetch()) :
                    $no++;
                    $id_transaksi = $row['id_transaksi'];
                    $id = $row['id'];
                    $id_service = $row['id_service'];
                    $totalpembelian = $row['totalpembelian'];
                    $id_otopart = $row['id_otopart'];
                    $status = $row['status'];
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $id_transaksi ?></td>
                        <td><?= $id ?></td>
                        <td><?= $id_service ?></td>
                        <td><?= $totalpembelian ?></td>
                        <td><?= $id_otopart ?></td>
                        <td><?= $status ?></td>
                        <td>
                            <form action="config/konfirmasi.php" method="POST">
                                <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>" />
                                <input type="hidden" name="status" value="<?= $status ?>" />
                                <button type="submit" class="btn btn-danger">Konfirmasi</button>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</div>
<script src="modul/JQuery/jquery.min.js"></script>

<!-- CSS dan JS DataTable -->
<script src="modul/DataTable/datatables.min.js"></script>
<script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
</script>