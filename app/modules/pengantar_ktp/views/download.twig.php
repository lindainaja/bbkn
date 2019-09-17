<style>
td{
	font-size:11px;
	font-family: Calibri, Verdana, Geneva, sans-serif
}
</style>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="100%" align="center"><strong>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</strong></td>
    </tr>
</table>
<table width="100%" border="0" style="border:1px solid #000" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%"><strong>Perhatian</strong></td>
    </tr>
    <tr>
        <td>1. Harap diisi dengan huruf cetak dan menggunakan tinta hitam</td>
    </tr>
    <tr>
        <td>2. Untuk kolom pilihan, harap memberi tanda silang (X) pada kotak pilihan</td>
    </tr>
    <tr>
        <td>3. Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor Desa/Kelurahan</td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="25%">Pemerintah Propinsi</td>
      <td width="3%">:</td>
      <td width="10%">{{ detail.no_prop }}</td>
      <td width="5%">&nbsp;</td>
      <td width="57%">{{ detail.nama_prop }}</td>
    </tr>
    <tr>
        <td>Pemerintah Kabupaten/Kota</td>
        <td>:</td>
      <td>{{ detail.no_kab }}</td>
      <td>&nbsp;</td>
      <td>{{ detail.nama_kab }}</td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{ detail.no_kec }}</td>
        <td>&nbsp;</td>
        <td>{{ detail.nama_kec }}</td>
    </tr>
    <tr>
        <td>Kelurahan</td>
        <td>:</td>
        <td>{{ detail.no_kel }}</td>
        <td>&nbsp;</td>
        <td>{{ detail.nama_kel }}</td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="25%"><i><u>PERMOHONAN KTP</u></i></td>
        <td width="3%">:</td>
      <td width="72%">{{ detail.jenis }}</td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="25%">1. Nama Lengkap</td>
        <td width="3%">:</td>
      <td width="72%" colspan="5">{{ detail.nama }}</td>
    </tr>
    <tr>
        <td>2. No KK</td>
        <td>:</td>
      <td colspan="5">{{ detail.no_kk }}</td>
    </tr>
    <tr>
        <td>3. NIK</td>
        <td>:</td>
      <td colspan="5">{{ detail.nik }}</td>
    </tr>
    <tr>
        <td>4. Alamat</td>
        <td>:</td>
      <td colspan="5">{{ detail.alamat }}</td>
    </tr>
    <tr>
      <td width="25%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="10%">RT</td>
      <td width="10%">{{ detail.rt }}</td>
      <td width="20%">&nbsp;</td>
      <td width="10%">RW</td>
      <td width="22%">{{ detail.rw }}</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="15%" style="border:1px solid #000;" align="center">Pas Photo (2x3)</td>
        <td width="10%" style="border:1px solid #000;" align="center">Cap Jempol</td>
        <td width="17%" style="border:1px solid #000;" align="center">Specimen Tanda Tangan</td>
        <td width="23%">&nbsp;</td>
        <td width="33%" align="center">{{ detail.nama_kel }} {{ format_tanggal_khusus_indo(detail.date) }} </td>
    </tr>
    <tr>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;border-right:1px solid #000;">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">Pemohon</td>
    </tr>
    <tr>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;border-right:1px solid #000;">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;border-right:1px solid #000;">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;border-right:1px solid #000;">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left:1px solid #000;border-bottom:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;border-bottom:1px solid #000;">&nbsp;</td>
        <td style="border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">{{ detail.nama }}</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="10%">&nbsp;</td>
        <td width="40%">&nbsp;</td>
        <td width="40%" align="center">Mengetahui,</td>
        <td width="10%">&nbsp;</td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td align="center">Camat {{ detail.nama_kec|upper }}</td>
        <td align="center">{{ text_1 }}</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">{{ text_2 }}</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><u>{{ detail.nama_pej }}</u></td>
      <td align="center"><u>{{ detail.ttd_nama }}</u></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center">NIP {{ detail.nip_pej }}</td>
      <td align="center">NIP {{ detail.ttd_nip }}</td>
      <td>&nbsp;</td>
    </tr>
</table>