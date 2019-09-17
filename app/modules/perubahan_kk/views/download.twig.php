<!DOCTYPE html>
<head>
<style>
td{
    font-size:11.8px;
    font-family: Tahoma,Calibri, Verdana, Geneva, sans-serif
}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="100%" align="center"><strong>FORMULIR PERMOHONAN  KARTU KELUARGA (KK) BARU WARGA NEGARA INDONESIA</strong></td>
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
        <td>2. Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor Desa/Kelurahan</td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="25%">Pemerintah Propinsi</td>
      <td width="1%">:</td>
      <td width="12%">{{ detail.no_prop }}</td>

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
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="25%">1. Nama Lengkap Pemohon</td>
        <td width="1%">:</td>
        <td width="74%" colspan="5">{{ detail.nama }}</td>

    </tr>
    <tr>
        <td>2. NIK Pemohon</td>
        <td>:</td>
        <td colspan="5">{{ detail.nik }}</td>

    </tr>
    <tr>
        <td>3. Nama Kepala Keluarga</td>
        <td>:</td>
        <td colspan="5">{{ detail.nama_kk }}</td>

    </tr>
    <tr>
        <td>4. No KK Semula</td>
        <td>:</td>
        <td colspan="5">{{ detail.no_kk }}</td>

    </tr>
    <tr>
        <td width="25%" valign="top">5. Alamat</td>
        <td width="1%" valign="top">:</td>
        <td width="42%" valign="top">{{ nl2br(detail.alamat)|raw }}</td>

        <td width="7%" valign="top" align="right">RT </td>
        <td width="8%" valign="top">: {{ detail.rt }}</td>

        <td width="7%" valign="top" align="right">RW </td>
        <td width="10%" valign="top">: {{ detail.rw }}</td>

    </tr>
    <tr>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. Desa/Kelurahan</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.nama_kel|upper }}</td>

        <td valign="top" colspan="2">b. Kecamatan</td>
        <td valign="top" colspan="2">: {{ detail.nama_kec|upper }}</td>

    </tr>
    <tr>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c. Kabupaten/Kota</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.nama_kab|upper }}</td>

        <td valign="top" colspan="2">d. Provinsi</td>
        <td valign="top" colspan="2">: {{ detail.nama_prop|upper }}</td>

    </tr>
    <tr>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kode Pos</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.kodepos }}</td>

        <td valign="top" colspan="2">Telepon</td>
        <td valign="top" colspan="2">: {{ detail.tlp }}</td>

    </tr>
    <tr>
        <td>6. Nama Kep. Keluarga Lama</td>
        <td>:</td>
        <td colspan="5">{{ detail.nama_kk_lama }}</td>

    </tr>
    <tr>
        <td>7. No KK Lama</td>
        <td>:</td>
        <td colspan="5">{{ detail.no_kk_lama }}</td>

    </tr>
    <tr>
        <td width="25%" valign="top">8. Alamat</td>
        <td width="1%" valign="top">:</td>
        <td width="42%" valign="top">{{ nl2br(detail.alamat_lama)|raw }}</td>

        <td width="7%" valign="top" align="right">RT </td>
        <td width="8%" valign="top">: {{ detail.rt_lama }}</td>

        <td width="7%" valign="top" align="right">RW </td>
        <td width="10%" valign="top">: {{ detail.rw_lama }}</td>

    </tr>
    <tr>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. Desa/Kelurahan</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.kel_lama|upper }}</td>

        <td valign="top" colspan="2">b. Kecamatan</td>
        <td valign="top" colspan="2">: {{ detail.kec_lama|upper }}</td>

    </tr>
    <tr>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c. Kabupaten/Kota</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.kab_lama|upper }}</td>

        <td valign="top" colspan="2">d. Provinsi</td>
        <td valign="top" colspan="2">: {{ detail.prop_lama|upper }}</td>

    </tr>
    <tr>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kode Pos</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.kodepos_lama }}</td>

        <td valign="top" colspan="2">Telepon</td>
        <td valign="top" colspan="2">: {{ detail.tlp_lama }}</td>

    </tr>
    <tr>
        <td>9. Alasan Permohonan</td>
        <td>:</td>
        <td colspan="5">{{ alasan[detail.alasan_permohonan] }}</td>

    </tr>
    <tr>
        <td>10. Jumlah Anggota Keluarga</td>
        <td>:</td>
        <td colspan="5">{{ detail.jml_anggota }}</td>

    </tr>
</table>
<br/>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">11. DAFTAR ANGGOTA KELUARGA PEMOHON (hanya diisi Anggota keluarga saja)</td>
    </tr>
    <tr>
        <td width="5%" align="center"><strong>NO</strong></td>
        <td width="20%" align="center"><strong>NIK</strong></td>
        <td width="35%" align="center"><strong>NAMA</strong></td>
        <td width="40%" align="center"><strong>SHDK</strong></td>
    </tr>
   {% if count(anggota) > 0 %}
        {% for anggota_key, anggota_val in anggota %}
            <tr>
                <td align="center">{{ anggota_key+1 }}</td>
                <td>{{ anggota_val.nik }}</td>

                <td>{{ anggota_val.nama }}</td>

                <td>{{ anggota_val.shdk }}</td>

            </tr>
       {% endfor %}
    {% endif %}
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="25%" align="center">Kepala Dinas Kependudukan</td>
        <td width="25%" align="center">Mengetahui</td>
        <td width="25%" align="center">&nbsp;</td>
        <td width="25%">&nbsp;</td>
    </tr>
    <tr>
        <td align="center">dan Pencatatan Sipil Kota</td>
        <td align="center">Camat {{ detail.nama_kec|upper }}</td>

        <td align="center">{{ text_1 }}</td>

        <td align="center">{{ detail.nama_kel|upper }} {{ format_tanggal_khusus_indo(detail.date)|upper }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">{{ text_2 }}</td>

        <td align="center">Pemohon</td>
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">( ..................................... )</td>
      <td align="center"><u>{{ detail.nama_pej }}</u></td>

      <td align="center"><u>{{ detail.ttd_nama }}</u></td>

      <td align="center">{{ detail.nama }}</td>

    </tr>
    <tr>
      <td align="center">NIP .....................................</td>
      <td align="center">NIP {{ detail.nip_pej }}</td>

      <td align="center">NIP {{ detail.ttd_nip }}</td>

      <td>&nbsp;</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="10%">&nbsp;</td>
        <td width="30%">&nbsp;</td>
        <td width="30%">Tanggal Pemasukan Data</td>
        <td width="30%">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Tgl. {{ format_tanggal_khusus_indo(detail.create_on) }}</td>

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
        <td>Paraf Petugas</td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>