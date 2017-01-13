    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= site_url('rubah-kriteria'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kriteria Penilaian</label>
                                <input type="text" name="kripe" class="form-control" value="<?= $result->kriteria_penilaian; ?>">
                                <input type="hidden" name="id_" value="<?= $this -> uri -> segment(2); ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kriteria</label>
                                <input type="text" name="krit" class="form-control" value="<?= $result->kriteria; ?>">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="done" class="btn btn-primary">SUBMIT</button>
                            <a href="<?= site_url('data-kriteria') ?>" class="btn btn-danger">KEMBALI</a>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->