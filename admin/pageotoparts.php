<?php
include 'header.php';
include 'slider.php';

?>
<?php
require_once('data_otoparts.php');
?>
<title>NoiseGarage | Otoparts</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Otoparts</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Otoparts</h3>
        </div>
    </div>

    <div class="table-responsive">
        <div>
            <a href="addotoparts.php" class="btn btn-primary">
                <i class="fa fa-edit"></i>
                Tambah data
            </a>
        </div>
        <br>

        <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Merk Barang</th>
                    <th>Ukuran/Jenis Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Foto Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($row = $q->fetch()) :
                    $no++;
                    $id_otopart = $row['id_otopart'];
                    $nama_otopart = $row['nama_otopart'];
                    $harga_otopart = $row['harga_otopart'];
                    $merek_otopart = $row['merek_otopart'];
                    $ukuran_otopart = $row['ukuran_otopart'];
                    $deskripsi_otopart = $row['deskripsi_otopart'];
                    $image_otopart = $row['image_otopart'];
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $nama_otopart ?></td>
                        <td><?php echo $harga_otopart ?></td>
                        <td><?php echo $merek_otopart ?></td>
                        <td><?php echo $ukuran_otopart ?></td>
                        <td><?php echo $deskripsi_otopart ?></td>
                        <td align="center">
                            <img src="vendor/img/otoparts/<?php echo $image_otopart ?>" class="img-responsive" width="150px">
                        </td>

                        <td>
                            <form action="editotoparts.php" method="POST">
                                <input type="hidden" name="id_otopart" value="<?= $id_otopart ?>" />
                                <input type="hidden" name="nama_otopart" value="<?= $nama_otopart ?>" />
                                <input type="hidden" name="harga_otopart" value="<?= $harga_otopart ?>" />
                                <input type="hidden" name="merek_otopart" value="<?= $merek_otopart ?>" />
                                <input type="hidden" name="ukuran_otopart" value="<?= $ukuran_otopart ?>" />
                                <input type="hidden" name="deskripsi_otopart" value="<?= $deskripsi_otopart ?>" />
                                <input type="hidden" name="image_otopart" value="<?= $image_otopart ?>" />

                                <button type=" submit" class="btn btn-primary">Edit</button>

                            </form>
                            <form action="config/hapusotoparts.php" method="POST">
                                <input type="hidden" name="id_otopart" value="<?= $id_otopart ?>" />
                                <button type="submit" class="btn btn-danger">Hapus</button>
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