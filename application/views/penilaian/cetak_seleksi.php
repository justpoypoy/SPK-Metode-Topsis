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
                <form role="form" method="POST" action="<?= site_url('form-cetak-seleksi'); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Periode</label>
                            <select name="periode" class="form-control">
                                <option>-- Pilih Periode --</option>
                                <?php if (!empty($editnilai)) { ?>
                                    <?php
                                    foreach ($periode as $p) {
                                        echo '<option value="' . $p->id_periode . '"';
                                        echo $period == $p->id_periode ? 'selected="selected"' : '';
                                        echo '>' . $p->nama_periode . '</option>';
                                    }
                                } else {
                                    foreach ($periode as $p) {
                                        echo '<option value="' . $p->id_periode . '">' . $p->nama_periode . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
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