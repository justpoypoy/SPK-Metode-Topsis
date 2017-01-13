<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
                    <?= $this->session->flashdata('pesan'); ?>  
                    <?php if (!empty($data)) { ?>
                    <form action="<?= site_url('pilih-siswa'); ?>" method="POST">
                        <label>Periode</label>
                        <select name="periode" class="form-control" required="required">
                            <option>-- Pilih Periode --</option>
                            <?php foreach($periode as $p){
                                echo '<option value="'.$p -> id_periode.'">'.$p -> nama_periode.'</option>';
                            } ?>
                        </select>
                        <hr>
                        <label>Pilih Siswa</label>
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%"><?= strtoupper('All'); ?><br><input type="checkbox" onClick="toggle(this)"></th>
                                    <th><?= strtoupper('nik siswa'); ?></th>
                                    <th><?= strtoupper('nama siswa'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $d) {
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" id="cekbox" name="nik[]" value="<?php echo $d ->nik; ?>"/></td>
                                        <td><?= $d->nik; ?></td>
                                        <td><?= strtoupper($d->nm_siswa); ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <input type="submit" name="pilih" class="btn btn-primary" value="Next" />
                    </form>
                    <?php } else { ?>
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%"><?= strtoupper('All'); ?><br><input type="checkbox" onClick="toggle(this)"></th>
                                    <th><?= strtoupper('no'); ?></th>
                                    <th><?= strtoupper('nik siswa'); ?></th>
                                    <th><?= strtoupper('nama siswa'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="4"><?= 'Maaf data siswa belum tersedia ...'; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } ?>    
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
</section><!-- /.content -->
