    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= site_url('User/editUser'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $result->nama; ?>" placeholder="Input nama pegawai">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text"class="form-control" value="<?= $result->username; ?>" placeholder="Input nama pegawai" disabled="">
                                <input type="hidden" name="user" value="<?= $result->username; ?>"/>
                                <input type="hidden" name="id_" value="<?= $this->uri->segment(3); ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" value="<?= $result->email; ?>" placeholder="Input no telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level akses</label>
                                <select name="level" class="form-control" required="" > 
                                    <?php if($result->level == 1){
                                        echo "<option value='1'>Administrator</option>";
                                    } ?>
                                    <?php if($result->level == 0){
                                        echo "<option value='0'>Staff</option>";
                                    } ?>
                                    <option value="1">Administrator</option>
                                    <option value="0">Staff</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status akses</label>
                                <select name="status" class="form-control" required="" > 
                                    <?php if($result->status == 1){
                                        echo "<option value='1'>Aktif</option>";
                                    } ?>
                                    <?php if($result->level == 2){
                                        echo "<option value='2'>Nonaktif</option>";
                                    } ?>
                                    <option value="1">Aktif</option>
                                    <option value="2">Nonaktif</option>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="done" class="btn btn-primary">SUBMIT</button>
                            <a href="<?= site_url('User') ?>" class="btn btn-danger">KEMBALI</a>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->