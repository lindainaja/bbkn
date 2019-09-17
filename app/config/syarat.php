<?php

/*
Pengantar dari lingkungan, 
KTP/KK, Ijazah terakhir, Foto 3x4, akta cerai/keterangan kematian bagi janda atau duda dan PBB tahun berjalan
*/
$config['syarat_descriptions'] = array(
	'kk' => 'Kartu Keluarga',
	'pl' => 'Pengantar Lingkungan',
	'tp' => 'Tanda Pengenal',
	'ktp' => 'Kartu Tanda Penduduk',
	'pbb' => 'PBB',
	'an' => 'Akta Notaris',
	'ser'=>'Sertifikat',
	'skpd_asal' => 'SK Pindah Datang dari daerah asal',
	'ktp_kk' => 'KTP/KK',
	'foto_3x4' => 'Foto 3x4',
	'ac' => 'Akta Cerai',
	'skk_duja'=> 'Surat Keterangan Kematian bagi duda atau janda',
	'ijazah' => 'Ijazah',
	'ac_skk_duja'=>'Akta Cerai/Surat Keterangan Kematian bagi duda atau janda',
	'sucer' => 'Surat Cerai',
	'kkm' => 'Surat Keterangan Kematian',
	'sspo' => 'Sertifikat/Sporadik',
	'ktpp'=>'KTP penjual/pembeli',
	'pbbt'=> 'PBB terakhir',
	'kwpb'=> 'Kwitansi pembelian',
	'skph'=>'SK Pembelian atau hibah'
);
$config['syarat_sp_pfbt_sporadik'] 	= array('ktpp','pbbt','kwpb','skph');
$config['syarat_sp_kepemilikan_tanah'] 	= array('ktpp','pbbt','kwpb','skph');
$config['syarat_rpdy_pb'] 	= array('ktpp','pbbt','kwpb','skph');
$config['syarat_sp_batas_tanah'] 	= array('ktpp','pbbt','kwpb','skph');
$config['syarat_sp_pertahanan'] 	= array('ktpp','pbbt','kwpb','skph');
$config['syarat_sp_jual_beli'] 	= array('ktpp','pbbt','kwpb','skph');
$config['syarat_sk_hibah'] 	= array('ktpp','pbbt','kwpb','skph');
 

$config['syarat_pengantar_ktp'] 	= array('kk','pl');
$config['syarat_permohonan_ktp'] 	= array('kk','pl');
$config['syarat_ralat_ktp'] 		= array('kk','pl');
$config['syarat_proses_ktp'] 		= array('kk','pl');
$config['syarat_hilang_ktp'] 		= array('kk','pl');

$config['syarat_permohonan_kk'] = array('kk');
$config['syarat_perubahan_kk'] 	= array('kk');
$config['syarat_hilang_kk'] 	= array('kk');

$config['syarat_domisili_wni'] 	= array('ktp','kk','pl');
$config['syarat_domisili_wna'] 	= array('tp','pl');
$config['syarat_domisili_kk'] 	= array('ktp','pl');
$config['syarat_domisili_kantor'] 	= array('pbb','ktp','pl');

$config['syarat_lahir_baru'] 	= array('kk','pl');
$config['syarat_lahir_lama'] 	= array('kk','ktp','pl');

$config['syarat_sk_kematian'] 	= array('kk','pl');

$config['syarat_domisili_usaha'] 	= array('pl','pbb','ktp','an');
$config['syarat_skck'] 	= array('ktp','kk','pl');
$config['syarat_sk_tidak_mampu'] 	= array('kk','ktp','pl');
$config['syarat_sk_tidak_memiliki_rumah'] 	= array('kk','ktp','pl');
$config['syarat_sk_harga_pasaran_tanah'] 	= array('ser','ktp','pl');
$config['syarat_sk_imb'] 	= array('ktp','ser','pl');
$config['syarat_sk_izin_keramaian'] 	= array('ktp', 'pl');
$config['syarat_sk_kehilangan'] 	= array('ktp', 'pl');
$config['syarat_sk_sppt'] 	= array('ktp', 'pl');
$config['syarat_ikrar_masuk_islam'] 	= array('ktp', 'pl');
$config['syarat_sk_pernyataan'] 	= array('ktp', 'pl');
$config['syarat_surat_pernyataan'] 	= array('ktp', 'pl');
$config['syarat_sk_ghoib'] 	= array('ktp', 'pl');
$config['syarat_datang'] 	= array( 'pl','skpd_asal');
$config['syarat_pindah'] 	= array( 'pl','kk');

$config['syarat_sk_untuk_nikah'] = array('pl','ktp_kk','ijazah','foto_3x4','ac_skk_duja','ijazah');
$config['syarat_sk_asal_usul'] = array('pl','ktp_kk','ijazah','foto_3x4','ac_skk_duja','ijazah');
$config['syarat_sk_persetujuan_mempelai'] = array('pl','ktp_kk','ijazah','foto_3x4','ac_skk_duja','ijazah');
$config['syarat_sk_keterangan_ortu'] = array('pl','ktp_kk','ijazah','foto_3x4','ac_skk_duja','ijazah');
$config['syarat_sk_izin_ortu'] = array('pl','ktp_kk','ijazah','foto_3x4','ac_skk_duja','ijazah');

$config['syarat_sk_kematian_suami_istri'] = array('pl');
$config['syarat_verbal_wali_hakim'] = array('ktp','pl');
$config['syarat_sk_numpang_nikah'] = array('pl','ktp_kk','ijazah','foto_3x4','ac_skk_duja','ijazah');
$config['syarat_sk_penghasilan'] = array('ktp','pl');
$config['syarat_sk_belum_pernah_nikah'] = array('kk','ktp','pl');
$config['syarat_sk_duda_janda'] = array('ktp','pl');
$config['syarat_sk_suami_istri'] = array('ktp','pl');
$config['syarat_sk_wali_nikah'] = array('ktp','pl');
$config['syarat_pernyataan_cerai'] = array('sucer','ktp','pl');


$config['syarat_sk_izin_usaha'] = array('pl','pbb','ktp','an');
$config['syarat_sk_tempat_usaha'] = array('pl','pbb','ktp','an');
$config['syarat_sk_usaha_pasar'] = array('pl','pbb','ktp','an');


$config['syarat_skck'] = array('ktp','kk','pl');
$config['syarat_sk_tidak_mampu_kesehatan'] = array('kk','ktp','pl');
$config['syarat_sk_tidak_mampu_pendidikan'] = array('kk','ktp','pl');

$config['syarat_sk_hilang_ktp'] = array('kk','ktp','pl');
$config['syarat_sk_hilang_kk'] = array('kk','ktp','pl');
$config['syarat_sk_domisili_kk'] = array('ktp','pl');
$config['syarat_sk_domisili_kantor'] = array('ktp','pl');

$config['syarat_sk_ahli_waris'] = array('kkm','kk','ktp','sspo');
$config['syarat_sk_ahli_waris_tanah'] = array('kkm','kk','ktp','sspo');
$config['syarat_sk_hak_milik_kapal'] = array('ktp','pl');
$config['syarat_sk_kebakaran'] = array('ktp','pl');
$config['syarat_sk_pas_jalan'] = array('ktp','pl');
$config['syarat_sk_penghasilan_lainya'] = array('ktp','kk');

