<?php
include 'header.php';
include 'slider.php';

?>
<?php
require_once('data_pengguna.php');
?>
<title>NoiseGarage | Data Pengguna</title>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Data Pengguna</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Data Pengguna</h3>
        </div>
    </div>

    <div class="table-responsive">
        <div>
            <a href="addpengguna.php" class="btn btn-primary">
                <i class="fa fa-edit"></i>
                Tambah data
            </a>
        </div>
        <br>

        <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama User</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($row = $q->fetch()) :
                    $no++;
                    $id = $row ['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $alamat = $row['alamat'];
                    $telepon = $row['telepon'];
                    $password = $row['password'];
                    $photo = $row['photo'];
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $username ?></td>
                        <td><?php echo $telepon ?></td>
                        <td><?php echo $alamat ?></td>
                        <td><?php echo $email ?></td>
                        <td>
                            <form action="config/hapuspengguna.php" method="POST">
                                <input type="hidden" name="id" value="<?= $id ?>"/>
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