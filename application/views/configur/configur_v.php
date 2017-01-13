<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this -> session -> userdata('done'); ?>
                    <hr>
                    <a href="<?= site_url('tambah-periode') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH PERIODE</a>
                </div><!-- /.box-header -->
                <?php if(!empty($periode)){ ?>
                <div class="box-body">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><?= strtoupper('no'); ?></th>
                                <th><?= strtoupper('periode'); ?></th>
                                <th><?= strtoupper('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($periode as $p) {
                                ?>        
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= __nama('tb_periode', 'id_periode', $p -> id_periode, 'nama_periode'); ?></td>
                                    <td>
                                        <a href="<?= site_url('rubah-periode/'.$p -> id_periode); ?>" title="EDIT" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="<?= site_url('hapus-periode/'.$p -> id_periode); ?>" title="DELETE" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <?php } ?>
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
</section><!-- /.content -->
