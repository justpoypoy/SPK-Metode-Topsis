    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= site_url('User/addUser'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Input nama pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="user" class="form-control" placeholder="Input username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Passwords</label>
                                <input type="password" name="pass" class="form-control" placeholder="Input password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Input email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level akses</label>
                                <select name="level" class="form-control" required="" > 
                                    <option value="">-- PILIH --</option>
                                    <option value="1">Administrator</option>
                                    <option value="0">Staff</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status akses</label>
                                <select name="status" class="form-control" required="" > 
                                    <option value="">-- PILIH --</option>
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