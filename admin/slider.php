<?php
require_once('../auth.php');
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="../vendor/img/<?php echo $_SESSION['user']['photo'] ?>" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo  $_SESSION["user"]["username"] ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>

    <ul class="nav menu">
        <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Tambah items <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="pageservice.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Service
                    </a></li>
                <li><a class="" href="pageotoparts.php" id="sub-item-1">
                        <span class="fa fa-arrow-right">&nbsp;</span> Otoparts
                    </a></li>
            </ul>
        </li>
        <li><a href="pagepengguna.php"><em class="glyphicon glyphicon-user">&nbsp;</em>Data Pengguna</a></li>
        <li><a href="pagetransaksi.php"><em class="fa fa-balance-scale">&nbsp;</em> Data Transaksi</a></li>
        <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>

<!--/.main-->

<script src="../vendor/js/jquery-1.11.1.min.js"></script>
<script src="../vendor/js/bootstrap.min.js"></script>
<script src="..vendor/js/chart.min.js"></script>
<script src="../vendor/js/chart-data.js"></script>
<script src="../vendor/js/easypiechart.js"></script>
<script src="../vendor/js/easypiechart-data.js"></script>
<script src="../vendor/js/bootstrap-datepicker.js"></script>
<script src="../vendor/js/custom.js"></script>