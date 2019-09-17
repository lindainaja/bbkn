<style>
td{
	font-size:12px;
	font-family: "Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="20%" rowspan="5" valign="top"><img src="{{ logo }}"  height="{{ newheight }}" width="{{ newwidth }}" /></td>

        <td colspan="3" align="center"><strong style="font-size:21px">PEMERINTAH {{ detail.nama_kab|upper }}</strong></td>

    </tr>
    <tr>
        <td colspan="3" align="center"><strong style="font-size:21px">{{ detail.nama_kec|upper }}</strong></td>

    </tr>
    <tr>
        <td colspan="3" align="center"><strong style="font-size:34.5px">KELURAHAN {{ detail.nama_kel|upper }}</strong></td>

    </tr>
    <tr>
        <td colspan="3" align="center"><strong style="font-size:13.5px">{{ detail.alamat_kel }}</strong></td>

    </tr>
    <tr>
        <td width="25%"></td>
        <td width="30%" align="center"><strong>T A N G E R A N G</strong></td>
        <td width="25%" align="center"><strong style="font-size:10.5px">Kode Pos {{ detail.kodepos }}</strong></td>

    </tr>
</table>
<hr size="1" color="#000">
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><strong style="font-size:16px"><u>SURAT KETERANGAN PINDAH ANTAR {{ detail.pindah_antar|upper }}</u></strong></td>

    </tr>
    <tr>
        <td width="100%" align="center">Nomor : {{ detail.no }}</td>

    </tr>
</table>
<br/>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan dibawah ini Lurah {{ detail.nama_kel|upper }} Kecamatan {{ detail.nama_kec|upper }} {{ detail.nama_kab|upper }}, menerangkan dengan sebenarnya bahwa :</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4"><strong><u>DAERAH ASAL</u></strong></td>
    </tr>
    <tr>
        <td width="20%">Nomor Kartu Keluarga</td>
        <td width="35%">: {{ detail.no_kk_asal }}</td>

        <td width="20%">Kab/Kota</td>
        <td width="25%">: {{ detail.nama_kab }}</td>

    </tr>
    <tr>
        <td>Nama Kepala Keluarga</td>
        <td>: {{ detail.nama_kk_asal }}</td>

        <td>Kecamatan</td>
        <td>: {{ detail.nama_kec }}</td>

    </tr>
    <tr>
        <td valign="top">Alamat Asal</td>
        <td valign="top">: {{ detail.alamat_asal }}</td>

        <td valign="top">Kelurahan</td>
        <td valign="top">: {{ detail.nama_kel }}</td>

    </tr>
    <tr>
        <td>RT / RW</td>
        <td>: {{ detail.rt_asal }} / {{ detail.rw_asal }}</td>

        <td>Kodepos</td>
        <td>: {{ detail.kodepos_asal }}</td>

    </tr>
    <tr>
        <td>Propinsi</td>
        <td>: {{ detail.nama_prop }}</td>

        <td>Telepon</td>
        <td>: {{ detail.tlp_asal }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4"><strong><u>PEMOHON</u></strong></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>: {{ detail.nik }}</td>

        <td>Agama</td>
        <td>: {{ detail.agama }}</td>

    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>: {{ detail.nama }}</td>

        <td>Status Perkawinan</td>
        <td>: {{ detail.status_perkawinan }}</td>

    </tr>
    <tr>
        <td>TTL</td>
        <td>: {{ detail.tempat_lahir }}, {{ format_tanggal_khusus_indo(detail.tanggal_lahir) }}</td>

        <td>Kecamatan</td>
        <td>: {{ detail.nama_kec }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4"><strong><u>KEPINDAHAN</u></strong></td>
    </tr>
    <tr>
        <td>Alasan Pindah</td>
        <td>: {{ detail.alasan_pindah }}</td>

        <td>No. Telepon</td>
        <td>: {{ detail.tlp_pindah }}</td>

    </tr>
    <tr>
        <td valign="top">Alamat Tujuan</td>
        <td valign="top">: {{ detail.alasan_pindah }}</td>

        <td valign="top">Propinsi</td>
        <td valign="top">: {{ detail.prop_pindah }}</td>

    </tr>
    <tr>
        <td>RT/RW</td>
        <td>: {{ detail.rt_pindah }}/{{ detail.rw_pindah }}</td>

        <td>Kab/Kota</td>
        <td>: {{ detail.kab_pindah }}</td>

    </tr>
    <tr>
        <td>Dusun</td>
        <td>: {{ detail.dusun_pindah }}</td>

        <td>Kecamatan</td>
        <td>: {{ detail.nama_kec }}</td>

    </tr>
    <tr>
        <td>Kode Pos</td>
        <td>: {{ detail.kodepos_pindah }}</td>

        <td>Kecamatan</td>
        <td>: {{ detail.kec_pindah }}</td>

    </tr>
    <tr>
        <td>Jumlah Pengikut</td>
        <td>: {{ detail.jml_pengikut }}</td>

        <td>Jenis Kepindahan</td>
        <td>: {{ detail.jenis_pindah }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
</table>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td width="5%" align="center"><strong>NO</strong></td>
        <td width="15%" align="center"><strong>NIK</strong></td>
        <td width="20%" align="center"><strong>NAMA</strong></td>
        <td width="25%" align="center"><strong>TTL</strong></td>
        <td width="25%" align="center"><strong>SHDK</strong></td>
    </tr>
   {% if count(anggota) > 0 %}
        {% for anggota_key, anggota_val in anggota %}     
        <tr>
                <td align="center">{{ anggota_key+1 }}</td>
                <td>{{ anggota_val.nik }}</td>

                <td>{{ anggota_val.nama }}</td>

                <td>{{ anggota_val.tempat_lahir }} {{ format_tanggal_khusus_indo(anggota_val.tanggal_lahir) }}</td>

                <td>{{ anggota_val.shdk }}</td>

            </tr>
	{% endfor %}
    {% endif %}
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">Demikian surat keterangan ini dibuat dengan sebenarnya, dan agar dapat dipergunakan sebagai syarat <strong>Pencatatan Kedatangan dan Perubahan Kartu Keluarga.</strong></td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="60%">&nbsp;</td>
        <td width="40%" align="center">{{ detail.nama_kel|upper }} {{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td align="center">Pemohon</td>
        <td align="center"><strong>{{ text_1 }}</strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center"><strong>{{ text_2 }}</strong></td>

    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
        <td align="center"><strong>{{ detail.nama }}</strong></td>

        <td align="center"><strong><u>{{ detail.ttd_nama }}</u></strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center">NIP. {{ detail.ttd_nip }}</td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">Pengesahan</td>
    </tr>
    <tr>
        <td align="center">Camat {{ detail.nama_kec|upper }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
	<tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="center"><strong><u>{{ detail.nama_pej }}</u></strong></td>

    </tr>
    <tr>
        <td align="center">NIP. {{ detail.nip_pej }}</td>

    </tr>
</table>
