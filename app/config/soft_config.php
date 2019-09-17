<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

/*
path must end with "/"
*/
/* ADDITIONAL KONFIG */
$config['web_import_data_penduduk_upload_path'] = 'public/documents/data_penduduk/';
$config['web_import_data_penduduk_upload_allowed_files'] = 'xls|xlsx|XLS|XLSX';
$config['web_import_data_penduduk_upload_max_size'] = '20MB';

$config['web_upload_path'] 			= 'public/assets/uploads/files/';

$config['web_foto_upload_path'] 	= $config['web_upload_path'];

/* SECURITY CONCERN */
$config['web_foto_upload_allowed_file_types'] = "gif|jpg|jpeg|png|JPG|JPEG";
$config['web_foto_upload_max_size'] = '20MB';

$config['web_document_upload_path'] = 'public/documents/';
$config['web_document_upload_allowed_file_types'] = "pdf|PDF|xls|XLS|xlsx|XLSX|doc|jpg|jpeg|png|JPG|JPEG";
$config['web_document_upload_max_size'] = "8MB";


/* END OF ADDITIONAL KONFIG */
$config['web_logo'] 		= 'public/images/logo_kab_tangerang.png';
$config['logo_width'] = 783;
$config['logo_height'] = 927;
$config['web_title'] 		= 'SIMAKEL';
$config['web_description']	= 'KELURAHAN BABAKAN';
$config['vendor_name']		= 'PT. SINTECH BERKAH ABADI';
$config['vendor_email'] 	= 'info@sintechabadi.com';
$config['vendor_hp']		= '0813-8345-1482';
$config['keyLogin'] 		= 'YmFiYWthbi0xMS0yMDE4LW50';
$config['authentication'] 	= FALSE;
$config['page_num']			= '10';
$config['page_num_setup']	= '20';
$config['page_num_emp']		= '30';
$config['page_num_report']	= '20';
$config['autocomplete_limit']= '100';
$config['separator']		= '.';

$config['currency_format']['thousand_sep']		= ','; 	// Separator ribuan
$config['currency_format']['decimal_sep']		= '.'; 	// Separator Desimal
$config['currency_format']['decimal_use']		= TRUE; // Desimal Digunakan TRUE OR FALSE
$config['currency_format']['decimal_digit']		= 2;	// Jumlah Digit dibelakang koma

$config['default_prop']		= '36';
$config['default_kab']		= '3';
$config['default_kec']		= '20';
$config['default_kel']		= '1011';

$config['default_no_prop']		= $config['default_prop'];
$config['default_no_kab']		= $config['default_kab'];
$config['default_no_kec']		= $config['default_kec'];
$config['default_no_kel']		= $config['default_kel'];

$config['default_nama_prop']	= 'Banten';
$config['default_nama_kab']		= 'Tangerang';
$config['default_nama_kec']		= 'Legok';
$config['default_nama_kel']		= 'Babakan';
$config['default_nama_instansi'] = 'Kelurahan Babakan';

$config['default_ttd_nama'] = 'RAHMAT HIDAYAT,S.Ikom,M.Si';
$config['default_ttd_jabatan'] = 'LURAH BABAKAN';
$config['default_ttd_nip'] = '196406051989031017';
$config['no_surat_suffix'] = '-Kel.Bbk/'.date('Y',time());
$config['no_surat_suffix_2'] = '-Kel.Bbk';
$config['no_bapl_suffix'] = '/BAPL-SKDTU/Kel.Bbk';
$config['no_baply_suffix'] ='/BAPL-SKDTY/Kel.Bbk';
$config['gender'] = array(
	'l' => 'Laki-laki',
	'p' => 'Perempuan',
);

$config['hari'] = array(
	'0' => 'Minggu',
	'1' => 'Senin',
	'2' => 'Selasa',
	'3' => 'Rabu',
	'4' => 'Kamis',
	'5' => 'Jumat',
	'6' => 'Sabtu'
);

$config['gol_darah'] = array(
	'A' => 'A',
	'B' => 'B',
	'AB' => 'AB',
	'O' => 'O',
);

$config['ket_cacat'] = array(
	'Cacat Badan' => 'Cacat Badan',
	'Cacat Mental' => 'Cacat Mental',
	'Tuna Netra' => 'Tuna Netra',
	'Tuna Rungu' => 'Tuna Rungu',
	'Tuna Wicara' => 'Tuna Wicara',
	'Jompo' => 'Jompo',
);

$config['opt_golongan_darah'] = [
	'01' => 'A',
	'02' => 'B',
	'03' => 'AB',
	'04' => 'O',
	'05' => 'A+',
	'06' => 'B+'
];
$config['kode_mutasi'] = array(
	'Lahir' => 'Lahir',
	'Datang' => 'Datang',
	'Pindah' => 'Pindah',
	'Mati' => 'Mati',
	'Tetap' => 'Tetap',
);

$config['alasan_permohonan_kk'] = array(
	'Karena Membentuk Rumah Tangga Baru' => 'Karena Membentuk Rumah Tangga Baru',
	'Karena Kartu Keluarga Hilang/Rusak' => 'Karena Kartu Keluarga Hilang/Rusak',
	'Lainnya' => 'Lainnya',
);

$config['alasan_perubahan_kk'] = array(
	'Karena Penambahan Anggota Keluarga (Kelahiran,Kedatangan)' => 'Karena Penambahan Anggota Keluarga (Kelahiran,Kedatangan)',
	'Karena Pengurangan Anggota Keluarga (Kematian,Kepindahan)' => 'Karena Pengurangan Anggota Keluarga (Kematian,Kepindahan)',
	'Lainnya' => 'Lainnya',
);
$config['exclude_top_menu_ids'] = [
	91
];
$config['bulan'] = array(
	1 => 'Januari',
	2 => 'Februari',
	3 => 'Maret',
	4 => 'April',
	5 => 'Mei',
	6 => 'Juni',
	7 => 'Juli',
	8 => 'Agustus',
	9 => 'September',
	10 => 'Oktober',
	11 => 'Nopember',
	12 => 'Desember',
);
$config['opt_alasan_pindah'] = array(
	'1' => '1. Pekerjaan',
	'2' => '2. Pendidikan',
	'3' => '3. Keamanan',
	'4' => '4. Kesehatan',
	'5' => '5. Perumahan',
	'6' => '6. Keluarga',
	'7' => '7. Lainnya'
);
$config['opt_shdk'] = [
	'01'=>'Kepala Keluarga',
	'02'=>'Suami',
	'03'=>'Istri',
	'04'=>'Anak',
	'05'=>'Menantu',
	'06'=>'Cucu',
	'07'=>'Orangtua',
	'08'=>'Mertua',
	'09'=>'Famili Lain',
	'10'=>'Pembantu',
	'11'=>'Lainnya'
];
$config['opt_shdk_reverse']= [
	'Kepala Keluarga'=>'01',
	'Suami'=>'02',
	'Istri'=>'03',
	'Anak'=>'04',
	'Menantu'=>'05',
	'Cucu'=>'06',
	'Orangtua'=>'07',
	'Mertua'=>'08',
	'Famili Lain'=>'09',
	'Pembantu'=>'10',
	'Lainnya'=>'11',
];
$config['opt_klasifikasi_pindah'] = array(
	'1' => '1. Dalam Satu Desa/Kelurahan',
	'2' => '2. Antar Desa/Kelurahan Dalam Satu Kecamatan',
	'3' => '3. Antar Kecamatan Dalam Satu Kabupaten/Kota',
	'4' => '4. Antar Kabupaten/Kota atau Antar Provinsi',
	'5' => '5. Antar Kabupaten/Kota atau Provinsi',
	'6' => '6. Antar Kabupaten dan Antar Provinsi'
);
$config['opt_klasifikasi_pindah_2'] = array(
	'1' => '1. Dalam Satu Desa/Kelurahan',
	'2' => '2. Antar Desa/ Kelurahan',
	'3' => '3. Antar Kecamatan',
	'4' => '4. Antar Kab/Kota',
	'5' => '5. Antar Provinsi'
);
$config['opt_jenis_kepindahan'] = array(
	'1' => '1. Kep. Keluarga',
	'2' => '2. Kep. Keluarga dan Seluruh Anggota Keluarga',
	'3' => '3. Kep. Keluarga dan Sebagian Angg. Keluarga',
	'4' => '4. Anggota Keluarga'
);
$config['opt_sn_kk_menetap'] = array(
	'1' => '1. Numpang KK',
	'2' => '2. Membuat KK Baru',
	'3' => '3. Tidak ada Angg. Keluarga Yang Tinggal',
	'4' => '4. Nomor KK Tetap'
);
$config['opt_sn_kk_pindah'] = array(
	'1' => '1. Numpang KK',
	'2' => '2. Membuat KK Baru',
	'3' => '3. Nama Kep. Keluarga dan Nomor KK Tetap'
);

$config['opt_lingkungan'] = array(
 
	'BABAKAN' => 'Babakan',
	// 'KAYU LANGKA' => 'Kayu Langka',
	// 'KASIWA INDUK' => 'Kasiwa Induk',
	// 'KASIWA TENGAH' => 'Kasiwa Tengah',
	// 'KASIWA TIMUR' => 'Kasiwa Timur',
	// 'PUNCAK UTARA' => 'Puncak Utara',
	// 'PUNCAK SELATAN' => 'Puncak Selatan',
	// 'DANGA BARAT' => 'Danga Barat',
	// 'DANGA TIMUR' => 'Danga Timur',
	// 'SO\'DO' => 'So\'do'

);

$config['opt_pangkat'] = array(
	'Penata' => 'Penata'
);

$config['opt_golongan'] = array(
	'III/c' => 'III/c'
);

// $config['opt_jabatan'] = array(

// );
$config['opt_unit_kerja'] = array(

);
$config['opt_jenis_pegawai'] = array(
	'PNS' => 'PNS',
	'CPNS' => 'CPNS',
	'Honor' => 'Honor',
	'PTT' => 'PTT',
);

// $config['inject_menu'] = [
// 	[
// 		'60'=>[
// 			['pindah_datang',]
// 		]
// 	]
// ]