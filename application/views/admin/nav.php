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
        <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
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
                    <a href="<?=base_url()?>admin" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                    <a href="<?=base_url()?>admin/data_absensi"><i class="fa fa-list-alt fa-fw"></i> Data Absensi</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/pengaturan"><i class="fa fa-cogs fa-fw"></i> Pengaturan</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/administrator"><i class="fa fa-user fa-fw"></i> Administrator</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/keluar"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>