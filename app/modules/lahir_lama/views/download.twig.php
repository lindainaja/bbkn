<style>
td{
	font-size:13px;
	font-family"Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3"><strong>SURAT KETERANGAN KENAL KELAHIRAN</strong></td>
    </tr>
    <tr>
        <td width="24%">Nomor</td>
        <td width="1%">:</td>
        <td width="75%">{{ detail.no }}</td>

    </tr>
    <tr>
        <td>Untuk Anak</td>
        <td>:</td>
        <td>{{ gender[detail.jk] }}</td>

    </tr>
    <tr>
        <td>Nama kecil Kel</td>
        <td>:</td>
        <td>{{ detail.nama }}</td>

    </tr>
    <tr>
        <td>Nama dewasa Kel </td>
        <td>:</td>
        <td>{{ detail.nama_dewasa }}</td>

    </tr>
    <tr>
        <td>Tanggal Kelahiran</td>
        <td>:</td>
        <td>{{ format_tanggal_hari(detail.tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>Tanggal di daftarkan</td>
        <td>:</td>
        <td>{{ format_tanggal_khusus(detail.date) }}</td>

    </tr>
    <tr>
        <td>Kelahiran anak ini</td>
        <td>:</td>
        <td>{{ detail.jenis_kelahiran }}</td>

    </tr>
    <tr>
        <td>Dilahirkan</td>
        <td>:</td>
        <td>{{ detail.tempat_lahir }}</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3"><strong>TEMPAT MELAPORKAN KELAHIRAN</strong></td>
    </tr>
    <tr>
        <td>DT I</td>
        <td>:</td>
        <td>{{ detail.nama_prop|upper }}</td>

    </tr>
    <tr>
        <td>DT II</td>
        <td>:</td>
        <td>{{ detail.nama_kab|upper }}</td>

    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{ detail.nama_kec|upper }}</td>

    </tr>
    <tr>
        <td>Dilahirkan</td>
        <td>:</td>
        <td>{{ detail.nama_kel|upper }}</td>

    </tr>
    <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.alamat_kelahiran)|raw }}</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3"><strong>NAMA ORANG TUA</strong></td>
    </tr>
    <tr>
        <td valign="top">Ibu Nama</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.ibu_nama }}</td>

    </tr>
    <tr>
        <td valign="top">Ibu Umur</td>
        <td valign="top">:</td>
        <td valign="top">{{ round(detail.ibu_umur) }} Tahun</td>

    </tr>
    <tr>
        <td valign="top">Ayah Nama</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.ayah_nama }}</td>

    </tr>
    <tr>
        <td valign="top">Ayah Nama</td>
        <td valign="top">:</td>
        <td valign="top">{{ round(detail.ayah_umur) }} Tahun</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3"><strong>ALAMAT ORANG TUA</strong></td>
    </tr>
    <tr>
        <td>DT I</td>
        <td>:</td>
        <td>{{ detail.nama_prop|upper }}</td>

    </tr>
    <tr>
        <td>DT II</td>
        <td>:</td>
        <td>{{ detail.nama_kab|upper }}</td>

    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{ detail.nama_kec|upper }}</td>

    </tr>
    <tr>
        <td>Dilahirkan</td>
        <td>:</td>
        <td>{{ detail.nama_kel|upper }}</td>

    </tr>
    <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.alamat_ortu) |raw}}</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td valign="top">Kelahiran anak yang ke</td>
        <td valign="top">:</td>
        <td valign="top">{{  convert_number(detail.kelahiran_ke) |raw }}</td>

    </tr>
    <tr>
        <td valign="top">Pekerjaan Ayah</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.ayah_pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="60%">&nbsp;</td>
        <td width="40%" align="center">{{ detail.nama_kel|upper }} {{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
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
        <td>&nbsp;</td>
        <td align="center"><strong><u>{{ detail.ttd_nama }}</u></strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center">NIP. {{ detail.ttd_nip }}</td>

    </tr>
</table>
