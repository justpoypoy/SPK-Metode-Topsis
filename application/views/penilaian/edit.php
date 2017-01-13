    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= site_url('Pegawai/editPegawai'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pegawai</label>
                                <input type="text" name="nama" class="form-control" value="<?= $result->nama; ?>" placeholder="Input nama pegawai">
                                <input type="hidden" value="<?= $this->uri->segment(3); ?>" name="id"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Input alamat"><?= $result->alamat; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="text" name="tgl" id="tgl" class="form-control" value="<?= $result->tgl_lahir; ?>" placeholder="Input tanggal lahir YYYY-MM-DD">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telepon / Handphone</label>
                                <input type="text" name="no_hp" class="form-control" value="<?= $result->no_hp; ?>" placeholder="Input no telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bidang</label>
                                <select name="bidang" class="form-control" > 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($bidang as $a):
                                        echo "<option value='".$a->id."'";
                                        echo $result->bidang == $a->id ? 'selected' : '';
                                        echo ">".$a->nama_bidang."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="done" class="btn btn-primary">SUBMIT</button>
                            <a href="<?= site_url('Pegawai') ?>" class="btn btn-danger">KEMBALI</a>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->