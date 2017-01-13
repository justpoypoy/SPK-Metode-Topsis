    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= site_url('Form/add');?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pegawai</label>
                                <input type="text" value="<?= $this->session->userdata('nama') ?>" disabled="" class="form-control"/>
                                <input type="hidden" value="<?= $this->session->userdata('id_pegawai') ?>" name="id"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kriteria Akreditasi</label>
                                <select name="akreditasi" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($akre as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_akreditasi."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenjang Pendidikan</label>
                                <select name="jenjang" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($jenjang as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_jenjang."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">IPK</label>
                                <select name="ipk" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($ipk as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_ipk."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sertifikasi</label>
                                <select name="serti" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($serti as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_sertifikasi."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Usia</label>
                                <select name="usia" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($usia as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_usia."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pengalaman</label>
                                <select name="peng" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($pengalaman as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_pengalaman."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Organisasi</label>
                                <select name="org" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($org as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_organisasi."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">TOEFL / Bahasa Asing</label>
                                <select name="toefl" class="form-control" required=""> 
                                    <option value="">-- PILIH --</option>
                                    <?php foreach ($toefl as $a):
                                        echo "<option value='".$a->id."'>".$a->nama_toefl."</option>";
                                    endforeach; ?>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="done" class="btn btn-primary">SUBMIT</button>
                            <a href="<?= base_url('index.php/bpjs') ?>" class="btn btn-danger">KEMBALI</a>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->