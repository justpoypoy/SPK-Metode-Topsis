
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" method="POST" action="<?= site_url('tambah-nilai-siswa'); ?>">
                    <div class="box-body">
                            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="25%"><?= strtoupper('periode'); ?></th>
                                        <th colspan="6"><?php $period =  $siswa -> row(); echo __nama('tb_periode', 'id_periode', $period -> id_periode, 'nama_periode'); ?></th>
                                    </tr>
                                    <tr>
                                        <th><?= strtoupper('nama siswa'); ?></th>
                                        <th><?= strtoupper('nilai c1'); ?></th>
                                        <th><?= strtoupper('nilai c2'); ?></th>
                                        <th><?= strtoupper('nilai c3'); ?></th>
                                        <th><?= strtoupper('nilai c4'); ?></th>
                                        <th><?= strtoupper('nilai c5'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($siswa -> result() as $s) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" value="<?= __nama('tb_siswa', 'nik', $s -> id_siswa, 'nm_siswa'); ?>" class="form-control" disabled=""/>
                                                <input type="hidden" name="nama[]" value="<?= $s -> id_siswa; ?>" class="form-control"/>
                                                <input type="hidden" name="periode[]" value="<?= $s -> id_periode; ?>" class="form-control"/>
                                                <input type="hidden" name="tgl[]" value="<?= $s -> tanggal_create; ?>" class="form-control"/>
                                            </td>
                                            <td><input type="text" name="na[]" onkeypress="return isNumberKey(event)" class="form-control"/></td>
                                            <td><input type="text" name="nb[]" onkeypress="return isNumberKey(event)" class="form-control"/></td>
                                            <td><input type="text" name="nc[]" onkeypress="return isNumberKey(event)" class="form-control"/></td>
                                            <td><input type="text" name="nd[]" class="form-control"/></td>
                                            <td><input type="text" name="ne[]" class="form-control"/></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-success">SUBMIT</button>
                        <a href="<?= site_url('hapus-penilaian/'.$period -> tanggal_create); ?>" onclick="return confirm('Anda yakin ingin membatalkan penilaian siswa-siswa berikut ini?')" class="btn btn-danger">BATAL</a>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->