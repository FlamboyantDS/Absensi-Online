<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/head");?>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Logo</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Usernya <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url()?>admin/login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?=base_url()?>admin" class="active"><i class="fa fa-dashboard fa-fw"></i>
                                Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-database fa-fw"></i> Data Master<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>admin/data_karyawan">Data Karyawan</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>admin/data_jabatan">Data Jabatan</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>admin/data_jam_kerja">Data Jam Kerja</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>admin/data_lokasi">Data Lokasi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>admin/data_absensi"><i class="fa fa-list-alt fa-fw"></i> Data
                                Absensi</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>admin/pengaturan"><i class="fa fa-cogs fa-fw"></i> Pengaturan</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>admin/administrator"><i class="fa fa-user fa-fw"></i>
                                Administrator</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>admin/keluar"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tambah Pengguna</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tambah Pengguna
                            </div>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="<?php echo base_url()?>" form="form-horizontal validate add-karyawan" novalidate="novalidate"> 
                                <div class="box-body"></div>
                                <div class="form-group"><br>
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jabatan</label>
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option>Accounting</option>
                                            <option>Manager</option>
                                            <option>Staff</option>
                                        </select>
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Shift</label>
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option>--Pilih--</option>
                                            <option>Accounting</option>
                                            <option>Manager</option>
                                            <option>Staff</option>
                                        </select>
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Penempatan</label>
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option value="">--PILIH--</option>
                                            <option value="#">Lokasi</option>
                                        </select>
                                        <label class="error" for="#" generated="true">Harap pilih jabatan</label>
                                    </div>
                                </div><br><br>
                                <div class="form-group"><br>
                                    <label class="col-sm-2 control-label"><br> FOTO</label>
                                    <div class="col-sm-6">
                                        <img class="preview" src="" width="80">
                                        <input class="btn btn-default error" type="file" name="" id="">
                                        <label class="error" for="" generated="true">Kolom ini harus disi</label>
                                    </div>
                                </div><br><br>
                        </div>
                        <!-- /.panel -->
                    </div>
                    <div class="form-footer">
                        <div class="col-sm-2"></div>
                        <button class="btn btn-primary" type="Submit"><i class="fa fa-check"></i> Simpan </button>
                        <a class="btn btn-danger" href="#"><i class="fa fa-remove"></i> batal </a>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view("admin/script");?>

    <!-- DataTables JavaScript -->
    <script src="<?=base_url()?>asset/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>asset/js/dataTables/dataTables.bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>