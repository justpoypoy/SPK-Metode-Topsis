<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <?php if($idakses == 1){ ?>
            <li><a href="<?= site_url('halaman-utama');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<!--            <li><a href="<?= site_url('penilaian-murid');?>"><i class="fa fa-group"></i> <span>Form Penilaian</span></a></li>
            <li><a href="<?= site_url('matrix-normalisasi')?>"><i class="fa fa-user"></i> <span>Matrix , Solusi &AMP; Jarak</span></a></li>-->
            <li><a href="<?= site_url('data-periode-siswa');?>"><i class="fa fa-group"></i> <span>Input Periode Penilaian</span></a></li>
            <li><a href="<?= site_url('data-kriteria')?>"><i class="fa fa-user"></i> <span>Input Kriteria Penilaian</span></a></li>
            <li><a href="<?= site_url('data-bobot')?>"><i class="fa fa-list-alt"></i> <span>Input Bobot</span></a></li>
            <li><a href="<?= site_url('seleksi-penilaian')?>"><i class="fa fa-list-alt"></i> <span>Hasil Seleksi</span></a></li>
            <li><a href="<?= site_url('cetak-seleksi')?>"><i class="fa fa-list-alt"></i> <span>Cetak Hasil Seleksi</span></a></li>
            <li><a href="<?= site_url('data-pengguna')?>"><i class="fa fa-list-alt"></i> <span>Input Pengguna</span></a></li>
            <?php } ?>
            <?php if($idakses == 2){ ?>
            <li><a href="<?= site_url('halaman-utama');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="<?= site_url('data-siswa');?>"><i class="fa fa-group"></i> <span>Input Data Siswa</span></a></li>
            <li><a href="<?= site_url('data-nilai-siswa')?>"><i class="fa fa-user"></i> <span>Input Nilai Siswa</span></a></li>
            <li><a href="<?= site_url('lihat-nilai-siswa')?>"><i class="fa fa-list-alt"></i> <span>Data Nilai Siswa</span></a></li>
            <?php } ?>
            <?php if($idakses == 3){ ?>
            <li><a href="<?= site_url('seleksi-penilaian');?>"><i class="fa fa-group"></i> <span>Hasil Seleksi</span></a></li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>