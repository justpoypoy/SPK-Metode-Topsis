<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['halaman-utama'] = 'Welcome';

$route['data-siswa'] = 'Siswa';
$route['tambah-data-siswa'] = 'Siswa/addSiswa';
$route['rubah-data-siswa/?(:num)?'] = 'Siswa/editSiswa/$1';
$route['hapus-data-siswa/?(:num)?'] = 'Siswa/deleteSiswa/$1';
$route['cek-nik'] = 'Siswa/cekNik';


$route['data-nilai-siswa'] = 'Siswa/nilaiSiswa';
$route['pilih-siswa'] = 'Siswa/pilihSiswa';
$route['tambah-nilai-siswa'] = 'Siswa/addNilaiSiswa';
$route['hapus-penilaian/?(:num)?'] = 'Siswa/deleteNilai/$1';
$route['lihat-nilai-siswa'] = 'Siswa/lihatNilaiSiswa';
$route['cari-nilai-siswa'] = 'Siswa/lihatNilaiSiswa';

$route['data-periode-siswa'] = 'Konfigurasi/dataPeriode';
$route['tambah-periode'] = 'Konfigurasi/addPeriode';
$route['rubah-periode/?(:num)?'] = 'Konfigurasi/editPeriode/$1';
$route['hapus-periode/?(:num)?'] = 'Konfigurasi/hapusPeriode/$1';

$route['data-kriteria'] = 'Konfigurasi/dataKriteria';
$route['tambah-kriteria'] = 'Konfigurasi/addKriteria';
$route['rubah-kriteria/?(:num)?'] = 'Konfigurasi/editKriteria/$1';
$route['hapus-kriteria/?(:num)?'] = 'Konfigurasi/hapusKriteria/$1';

$route['data-bobot'] = 'Konfigurasi/dataBobot';
$route['tambah-bobot'] = 'Konfigurasi/addBobot';
$route['rubah-bobot/?(:num)?'] = 'Konfigurasi/editBobot/$1';
$route['hapus-bobot/?(:num)?'] = 'Konfigurasi/hapusBobot/$1';

$route['seleksi-penilaian'] = 'Penilaian/seleksi';
$route['hasil-seleksi'] = 'Siswa/matrik_ternormalisasi';

$route['data-pengguna'] = 'User';
$route['form-cetak-seleksi'] = 'Penilaian/cetak';
$route['cetak-seleksi'] = 'Penilaian/cetak_seleksi';
$route['print-seleksi'] = 'Penilaian/print_seleksi';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';
$route[''] = '';



$route['penilaian-murid'] = 'Penilaian';
$route['tambah-nilai'] = 'Penilaian/tambah_data';

$route['matrix-normalisasi'] = 'Penilaian/matrik_ternormalisasi';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
