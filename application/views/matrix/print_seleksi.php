<?php
 header("Content-type: application/octet-stream");
 header("Content-Disposition: attachment; filename=export.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
?>
<!-- Matrix Ternormalisasi -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3><?= strtoupper('Matrix Ternormalisasi'); ?></h3>
                <?= $this->session->flashdata('pesan') ?>
                </div>
                <div class="box-body">
                    <table border="1">
                        <thead>
                            <tr>
                                <th width="10%"><?= strtoupper('no'); ?></th>
                                <th><?= strtoupper('nama'); ?></th>
                                <th><?= strtoupper('c1'); ?></th>
                                <th><?= strtoupper('c2'); ?></th>
                                <th><?= strtoupper('c3'); ?></th>
                                <th><?= strtoupper('c4'); ?></th>
                                <th><?= strtoupper('c5'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($hasil as $val){ ?>        
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= __nama('tb_siswa', 'nik', $val -> id_siswa, 'nm_siswa'); ?></td>
                                <td><?= round($val -> nilai_c1 / $a, 4); ?></td>
                                <td><?= round($val -> nilai_c2 / $b, 4); ?></td>
                                <td><?= round($val -> nilai_c3 / $c, 4); ?></td>
                                <td><?= round($val -> nilai_c4 / $d, 4); ?></td>
                                <td><?= round($val -> nilai_c5 / $e, 4); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Matrix Ternormalisasi -->
    
    <!-- Matrix Normalisasi Terbobot -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3><?= strtoupper('Matrix Normalisasi terbobot'); ?></h3>
                <?= $this->session->flashdata('pesan') ?>
                </div>
                <div class="box-body">
                    <table border="1">
                        <thead>
                            <tr>
                                <th width="10%"><?= strtoupper('no'); ?></th>
                                <th><?= strtoupper('nama'); ?></th>
                                <th><?= strtoupper('c1'); ?></th>
                                <th><?= strtoupper('c2'); ?></th>
                                <th><?= strtoupper('c3'); ?></th>
                                <th><?= strtoupper('c4'); ?></th>
                                <th><?= strtoupper('c5'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($hasil as $val){ ?>        
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= __nama('tb_siswa', 'nik', $val -> id_siswa, 'nm_siswa'); ?></td>
                                <td><?php echo round($val -> nilai_c1 / $a, 4) * 5; ?></td>
                                <td><?php echo round($val -> nilai_c2 / $b, 4) * 4; ?></td>
                                <td><?php echo round($val -> nilai_c3 / $c, 4) * 3; ?></td>
                                <td><?php echo round($val -> nilai_c4 / $d, 4) * 3; ?></td>
                                <td><?php echo round($val -> nilai_c5 / $e, 4) * 5; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Matrix Normalisasi Terbobot -->
    
    <?php if(!empty($hasil)){ ?>
    <!-- Solusi Ideal Positif & Negatif -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3><?= strtoupper('Solusi Ideal Positif &AMP Negatif'); ?></h3>
                <?= $this->session->flashdata('pesan') ?>
                </div>
                <div class="box-body">
                    <table border="1">
                        <thead>
                            <tr>
                                <th width="20%"><?= strtoupper('solusi'); ?></th>
                                <th><?= strtoupper('c1'); ?></th>
                                <th><?= strtoupper('c2'); ?></th>
                                <th><?= strtoupper('c3'); ?></th>
                                <th><?= strtoupper('c4'); ?></th>
                                <th><?= strtoupper('c5'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $maxa = array(); $maxb = array(); $maxc = array(); $maxd = array(); $maxe = array();
                                foreach ($hasil as $val){ 
                                   $maxa[] = round($val -> nilai_c1 / $a, 4) * 5; 
                                   $maxb[] = round($val -> nilai_c2 / $b, 4) * 4; 
                                   $maxc[] = round($val -> nilai_c3 / $c, 4) * 3; 
                                   $maxd[] = round($val -> nilai_c4 / $d, 4) * 3; 
                                   $maxe[] = round($val -> nilai_c5 / $e, 4) * 5;    
                                } ?>       
                            <tr>
                                <td><?= 'Ideal Positif'; ?></td>
                                <td><?php $am = max($maxa); echo max($maxa); ?></td>
                                <td><?php $bm = max($maxb); echo max($maxb); ?></td>
                                <td><?php $cm = max($maxc); echo max($maxc); ?></td>
                                <td><?php $dm = max($maxd); echo max($maxd); ?></td>
                                <td><?php $em = max($maxe); echo max($maxe); ?></td>
                            </tr>
                            <tr>
                                <td><?= 'Ideal Negatif'; ?></td>
                                <td><?php $ami = min($maxa); echo  min($maxa);?></td>
                                <td><?php $bmi = min($maxb); echo  min($maxb);?></td>
                                <td><?php $cmi = min($maxc); echo  min($maxc);?></td>
                                <td><?php $dmi = min($maxd); echo  min($maxd);?></td>
                                <td><?php $emi = min($maxe); echo  min($maxe);?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Solusi Ideal Positif & Negatif  -->
    <?php } ?>
    
    <?php if(!empty($hasil)){ ?>
    <!-- -->
    <div class="row">
        <div class="col-xs-4">
            <div class="box">
                <div class="box-header">
                    <h3><?= strtoupper('positif & negatif'); ?></h3>
                </div>
                <div class="box-body">
                    <table border="1">
                        <thead>
                            <tr>
                                <th width="5%"><?= strtoupper('no'); ?></th>
                                <th><?= strtoupper('hasil positif'); ?></th>
                                <th><?= strtoupper('hasil negatif'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                foreach ($hasil as $v){ 
                                   $ra  = round($v -> nilai_c1 / $a, 4) * 5;
                                   $rb  = round($v -> nilai_c2 / $b, 4) * 4;
                                   $rc  = round($v -> nilai_c3 / $c, 4) * 3;
                                   $rd  = round($v -> nilai_c4 / $d, 4) * 3;
                                   $re  = round($v -> nilai_c5 / $e, 4) * 5;
                                   $hasilpowmin = pow($ami - $ra, 2) + pow($bmi - $rb, 2) + pow($cmi - $rc, 2) + pow($dmi - $rd, 2) + pow($emi - $re, 2);
                                   $hasilpowmax = pow($am - $ra, 2) + pow($bm - $rb, 2) + pow($cm - $rc, 2) + pow($dm - $rd, 2) + pow($em - $re, 2);
                                   ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?php echo round(sqrt(round($hasilpowmax ,4)), 4); ?></td>
                                <td><?php echo round(sqrt(round($hasilpowmin ,4)), 4); ?></td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
        <div class="col-xs-4">
            <div class="box">
                <div class="box-header">
                    <h3><?= strtoupper('preferensi'); ?></h3>
                </div>
                <div class="box-body">
                    <table border="1">
                        <thead>
                            <tr>
                                <th width="5%"><?= strtoupper('no'); ?></th>
                                <th><?= strtoupper('nama'); ?></th>
                                <th><?= strtoupper('preferensi'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                arsort($hasil);
                                foreach ($hasil as $v){ 
                                    $ra  = round($v -> nilai_c1 / $a, 4) * 5;
                                    $rb  = round($v -> nilai_c2 / $b, 4) * 4;
                                    $rc  = round($v -> nilai_c3 / $c, 4) * 3;
                                    $rd  = round($v -> nilai_c4 / $d, 4) * 3;
                                    $re  = round($v -> nilai_c5 / $e, 4) * 5;
                                    $hasilpowmax = pow($am - $ra, 2) + pow($bm - $rb, 2) + pow($cm - $rc, 2) + pow($dm - $rd, 2) + pow($em - $re, 2);
                                    $hasilpowmin = pow($ami - $ra, 2) + pow($bmi - $rb, 2) + pow($cmi - $rc, 2) + pow($dmi - $rd, 2) + pow($emi - $re, 2);
                                    $prefa = round(sqrt(round($hasilpowmax ,4)), 4);
                                    $prefb = round(sqrt(round($hasilpowmin ,4)), 4);
                                ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= __nama('tb_siswa', 'nik', $v -> id_siswa, 'nm_siswa'); ?></td>
                                <td><?php echo round($prefb/($prefb+$prefa), 4); ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Solusi Ideal Positif & Negatif  -->
    <?php } ?>