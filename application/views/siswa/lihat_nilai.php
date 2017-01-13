<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
                    <?= $this -> session -> flashdata('pesan'); ?>  
                    <form action="<?= site_url('cari-nilai-siswa'); ?>" method="POST">
                        <label>Pilih Periode Penilaian</label>
                        <select name="periode" class="form-control">
                            <option>-- Pilih Periode --</option>
                            <?php if(!empty($editnilai)){ ?>
                            <?php foreach($periode as $p){
                                echo '<option value="'.$p -> id_periode.'"';
                                echo $period == $p -> id_periode ? 'selected="selected"' : '';
                                echo '>'.$p -> nama_periode.'</option>';
                                } 
                            }else{
                                foreach($periode as $p){
                                    echo '<option value="'.$p -> id_periode.'">'.$p -> nama_periode.'</option>';
                                }
                            }?>
                        </select>
                        <div class="box-footer">
                            <button type="submit" name="pilih" class="btn btn-primary"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                    </form>
                </div><!-- /.box-body --> 
            </div><!-- /.box --> 
        </div>
    </div><!-- /.row --> 
    <?php if(!empty($editnilai)){ ?>
    <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                <form role="form" method="POST" action="<?= site_url('tambah-nilai-siswa'); ?>">
                    <div class="box-body">
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="25%"><?= strtoupper('periode'); ?></th>
                                    <th colspan="6"><?php echo __nama('tb_periode', 'id_periode', $period, 'nama_periode');?></th>
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
                                <?php foreach ($editnilai as $s) { ?>
                                    <tr>
                                        <td>
                                            <input type="text" value="<?= __nama('tb_siswa', 'nik', $s->id_siswa, 'nm_siswa'); ?>" class="form-control" disabled=""/>
                                            <input type="hidden" name="nama[]" value="<?= $s->id_siswa; ?>" class="form-control"/>
                                            <input type="hidden" name="periode[]" value="<?= $s->id_periode; ?>" class="form-control"/>
                                        </td>
                                        <td><input type="text" name="na[]" value="<?= $s -> nilai_c1; ?>" onkeypress="return isNumberKey(event)" class="form-control"/></td>
                                        <td><input type="text" name="nb[]" value="<?= $s -> nilai_c2; ?>" onkeypress="return isNumberKey(event)" class="form-control"/></td>
                                        <td><input type="text" name="nc[]" value="<?= $s -> nilai_c3; ?>" onkeypress="return isNumberKey(event)" class="form-control"/></td>
                                        <td><input type="text" name="nd[]" value="<?= $s -> nilai_c4; ?>" class="form-control"/></td>
                                        <td><input type="text" name="ne[]" value="<?= $s -> nilai_c5; ?>" class="form-control"/></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            <a href="" class="btn btn-danger">Cancel</a>
                        </div>
                    </div><!-- /.box-body --> 
                </form>
                </div><!-- /.box --> 
            </div>
        </div><!-- /.row --> 
    <?php }else{ } ?>
</section><!-- /.content --> 
