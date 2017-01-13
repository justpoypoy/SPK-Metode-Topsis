<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="POST" action="<?= site_url('rubah-data-siswa'); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK Siswa</label>
                            <input type="text" class="form-control" value="<?= $edit->nik; ?>" placeholder="" disabled="">
                            <input type="hidden" name="nik" value="<?= $edit->nik; ?>"/>
                            <input type="hidden" name="id" value="<?= $edit->id_siswa; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" value="<?= $edit->nm_siswa; ?>" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="" required=""> <?= $edit->alamat; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input type="text" name="tgl" id="tgl" class="form-control" value="<?= $edit->tgl_lahir; ?>" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input type="text" name="tempat" class="form-control" value="<?= $edit->tempat_lahir; ?>" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input type="text" name="ayah" class="form-control" value="<?= $edit->nama_ayah; ?>" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input type="text" name="ibu" class="form-control" value="<?= $edit->nama_ibu; ?>" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaan" class="form-control" value="<?= $edit->pekerjaan_ayah; ?>" placeholder="" required="">
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
                        <a href="<?= site_url('data-siswa') ?>" class="btn btn-danger">BATAL</a>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->