<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <!--<a href="<?= site_url() ?>Pegawai/addPegawai" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH DATA</a>-->
                <?= $this->session->flashdata('done') ?>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><?= strtoupper('no'); ?></th>
                                <th><?= strtoupper('nama'); ?></th>
                                <th><?= strtoupper('ipk'); ?></th>
                                <th><?= strtoupper('action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($form as $u){ 
                            ?>        
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= strtoupper(getname('tb_pegawai','id',$u->id_pegawai,'nama')); ?></td>
                                <td><?= $u->ipk; ?></td>
                                <td>
                                    <a href="<?= site_url('Form/editForm')?>/<?= $u->id; ?>" title="EDIT" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= site_url('Form/delete')?>/<?= $u->id; ?>" title="DELETE" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menhapus?')"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php 
                            $no++;
                            } ?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
</section><!-- /.content -->
