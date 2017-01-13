<?php
if (!defined('BASEPATH')) exit('gak boleh akses selain function helper!!!');

if (!function_exists('__nama')) {
    function __nama($tb, $primary, $parameter, $field) {
        $selectArg = mysqli_connect("localhost", "root", "", "db_project");
        $selectDB = mysqli_query($selectArg, "select * from `" . $tb . "` where `" . $primary . "`='$parameter'");
        while ($row = mysqli_fetch_array($selectDB, MYSQLI_ASSOC)) {
            $row[$field];
            return $row[$field];
        }
    }
}

if (!function_exists('nilai_satu')) {
    function nilai_satu($value){
        if($value >= 90){
            return $value = 5;
        }elseif($value >= 80){
            return $value = 4;
        }elseif($value >= 70){
            return $value = 3;
        }elseif($value >= 60){
            return $value = 2;
        }elseif($value >= 50){
            return $value = 1;
        }else{
            return $value = 0;
        }
    }
}

if (!function_exists('nilai_dua')) {
    function nilai_dua($value){
        if($value >= 5){
            return $value = 1;
        }elseif($value >= 4){
            return $value = 2;
        }elseif($value >= 3){
            return $value = 3;
        }elseif($value >= 2){
            return $value = 4;
        }elseif($value >= 1){
            return $value = 5;
        }else{
            return $value = 0;
        }
    }
}

if (!function_exists('nilai_tiga')) {
    function nilai_tiga($value){
        if($value == 4){
            return $value = 3;
        }elseif($value == 3){
            return $value = 4;
        }elseif($value == 2){
            return $value = 5;
        }elseif($value == 1){
            return $value = 5;
        }else{
            return $value = 0;
        }
    }
}

if (!function_exists('nilai_empat')) {
    function nilai_empat($value){
        if($value == 'sb' || $value == 'SB'){
            return $value = 5;
        }elseif($value == 'b' || $value == 'B'){
            return $value = 4;
        }elseif($value == 'c' || $value == 'C'){
            return $value = 3;
        }elseif($value == 'd' || $value == 'D'){
            return $value = 2;
        }elseif($value == 'e' || $value == 'E'){
            return $value = 1;
        }else{
            return $value = 0;
        }
    }
}

if (!function_exists('nilai_lima')) {
    function nilai_lima($value){
        if($value == 'sb' || $value == 'SB'){
            return $value = 5;
        }elseif($value == 'b' || $value == 'B'){
            return $value = 4;
        }elseif($value == 'c' || $value == 'C'){
            return $value = 3;
        }elseif($value == 'd' || $value == 'D'){
            return $value = 2;
        }elseif($value == 'e' || $value == 'E'){
            return $value = 1;
        }else{
            return $value = 0;
        }
    }
}
if (!function_exists('tgl_indo')) {
    function __tgl($sekarang) {
        $tanggal = substr($sekarang, 8, 2) + 0;
        $bulan = substr($sekarang, 5, 2);
        $tahun = substr($sekarang, 0, 4);

        $judul_bln = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $wk = $tanggal . " " . $judul_bln[(int) $bulan] . " " . $tahun;
        return $wk;
    }
}
function pdf_create($html, $filename='', $stream=TRUE) {
    require_once("!!/dompdf/dompdf_config.inc.php");

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } else {
        return $dompdf->output();
    }
}
?>
