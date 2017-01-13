<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <a href="<?= site_url('tambah-data-siswa'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> TAMBAH DATA</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <?= $this->session->flashdata('pesan'); ?>  
                    <?php if (!empty($data)) { ?>
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= strtoupper('no'); ?></th>
                                    <th><?= strtoupper('nik siswa'); ?></th>
                                    <th><?= strtoupper('nama siswa'); ?></th>
                                    <th><?= strtoupper('tanggal lahir'); ?></th>
                                    <th><?= strtoupper('nama ayah'); ?></th>
                                    <th><?= strtoupper('nama ibu'); ?></th>
                                    <th><?= strtoupper('action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $d) {
                                    ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $d->nik; ?></td>
                                        <td><?= strtoupper($d->nm_siswa); ?></td>
                                        <td><?= __tgl($d->tgl_lahir); ?></td>
                                        <td><?= strtoupper($d->nama_ayah); ?></td>
                                        <td><?= strtoupper($d->nama_ibu); ?></td>
                                        <td>
                                            <a href="<?= site_url('rubah-data-siswa/' . $d->nik); ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a href="<?= site_url('hapus-data-siswa/' . $d->nik); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><?= strtoupper('no'); ?></th>
                                    <th><?= strtoupper('nik siswa'); ?></th>
                                    <th><?= strtoupper('nama siswa'); ?></th>
                                    <th><?= strtoupper('tanggal lahir'); ?></th>
                                    <th><?= strtoupper('nama ayah'); ?></th>
                                    <th><?= strtoupper('nama ibu'); ?></th>
                                    <th><?= strtoupper('action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="7"><?= 'Maaf data siswa belum tersedia ...'; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } ?>    
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
</section><!-- /.content -->
