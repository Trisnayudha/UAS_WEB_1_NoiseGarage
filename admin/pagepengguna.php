<?php
include 'header.php';
include 'slider.php';

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
                <tr>
                    <td>1</td>
                    <td>Trisnayudha</td>
                    <td>083121257</td>
                    <td>Jl kenangan</td>
                    <td>Trisna@gmail.com</td>
                    <td>
                        <form action="editpengguna.php" method="POST">
                            <input type="hidden" name="id_reg" />
                            <input type="hidden" name="namadepan" />
                            <input type="hidden" name="namabelakang" />
                            <input type="hidden" name="email" />
                            <input type="hidden" name="username">

                            <button type=" submit" class="btn btn-primary">Edit</button>

                        </form>
                        <form action="#" method="POST">
                            <input type="hidden" name="id_reg" />
                            <button type="submit" class="btn btn-danger">Hapus</button>
                    </td>
                    </form>
                </tr>

            </tbody>
        </table>
    </div>


</div>

<?php
include 'footer.php';
?>