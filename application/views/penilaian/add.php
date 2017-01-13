<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box-header">
                <?= $this -> session -> flashdata('pesan'); ?>
            </div><!-- /.box-header -->
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="POST" action="<?= site_url('tambah-nilai'); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Murid <span style="color: #FF0000;">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama murid" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rata – rata nilai rapot 1 semester terakhir ( C1 ) <span style="color: #FF0000;">*</span></label>
                            <input type="text" name="c1" class="form-control" placeholder="Input nilai C1" onkeypress="return isNumberKey(event)" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ranking ( C2 ) <span style="color: #FF0000;">*</span></label>
                            <input type="text" name="c2" class="form-control" placeholder="Input nilai C2" onkeypress="return isNumberKey(event)" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Absensi (Jumlah ijin dan tanpa keterangan) (C3) <span style="color: #FF0000;">*</span></label>
                            <input type="text" name="c3" class="form-control" placeholder="Input nilai C3" onkeypress="return isNumberKey(event)" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kegiatan Ekstrakurikuler ( C4 ) <span style="color: #FF0000;">*</span></label>
                            <input type="text" name="c4" class="form-control" placeholder="Input nilai C4" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sikap ( C5 ) <span style="color: #FF0000;">*</span></label>
                            <input type="text" name="c5" class="form-control" placeholder="Input nilai C5" required="required">
                        </div>
                        <span style="color: #FF0000;">*</span> Required
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->