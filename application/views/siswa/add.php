<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="POST" action="<?= site_url('tambah-data-siswa'); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK Siswa</label>
                            <input type="text" name="nik" class="form-control" id="nik" onkeyup="cek_nik()" onkeypress="return isNumberKey(event)" placeholder="Input Nik Siswa" required="">
                            <span id="pesan_nik"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Input Nama Siswa" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Input Alamat" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input type="text" name="tgl" id="tgl" class="form-control" placeholder="Input Tanggal Lahir" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input type="text" name="tempat" class="form-control" placeholder="Input Tempat Lahir" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input type="text" name="ayah" class="form-control" placeholder="Input Nama Ayah" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input type="text" name="ibu" class="form-control" placeholder="Input Nama Ibu" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaan" class="form-control" placeholder="Input Pekerjaan" required="">
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <span id="bsubmit"></span>
                        <a href="<?= site_url('data-siswa') ?>" class="btn btn-danger">BATAL</a>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->