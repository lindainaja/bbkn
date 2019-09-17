<style>
td{
	font-size:16px;
	font-family: "Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="25%"><strong>KELURAHAN</strong></td>
        <td width="3%">:</td>
        <td width="72%"><strong>{{ detail.nama_kel|upper }}</strong></td>

    </tr>
    <tr>
        <td><strong>KECAMATAN</strong></td>
        <td>:</td>
        <td><strong>{{ detail.nama_kec|upper }}</strong></td>

    </tr>
    <tr>
        <td><strong>KOTA/KABUPATEN</strong></td>
        <td>:</td>
        <td><strong>{{ detail.nama_kab|upper }}</strong></td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><strong><u>PROSES VERBAL WALI HAKIM</u></strong></td>
    </tr>
    <tr>
        <td width="100%" align="center">Nomor : {{ detail.no }}</td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">Yang bertanda tangan dibawah ini :</td>
    </tr>
    <tr>
        <td width="10%" align="right">&nbsp;&nbsp;</td>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="67%">{{ detail.ttd_nama }}</td>

    </tr>
    <tr>
        <td>&nbsp;&nbsp;</td>
        <td>Jabatan</td>
        <td>:</td>
        <td>{{ detail.ttd_jabatan }}</td>

    </tr>
    <tr>
        <td colspan="4">Menerangkan dengan sebenarnya :</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Nama</td>
        <td>:</td>
        <td>{{ detail.perempuan_nama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>{{ detail.perempuan_tempat_lahir }} {{ format_tanggal_khusus_indo(detail.perempuan_tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>{{ detail.perempuan_kewarganegaraan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Agama</td>
        <td>:</td>
        <td>{{ detail.perempuan_agama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.perempuan_pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.perempuan_alamat)|raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">Yang akan dinikahi oleh seorang Laki Laki :</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Nama</td>
        <td>:</td>
        <td>{{ detail.pria_nama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>{{ detail.pria_tempat_lahir }} {{ format_tanggal_khusus_indo(detail.pria_tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>{{ detail.pria_kewarganegaraan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Agama</td>
        <td>:</td>
        <td>{{ detail.pria_agama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.pria_pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.pria_alamat)|raw }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">Pernikahan tersebut mohon dengan wali hakim disebabkan :</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    {% for i in 1..5 %}
        {% set sebab_key="sebab_#{i}" %}
        {% set value=detail[sebab_key] %}
        {% if detail[sebab_key] %}
        <tr>
            <td align="right">{{ i }}.&nbsp;&nbsp;</td>

            <td colspan="3">{{ detail[sebab_key] }}</td>
        </tr>
        {% endif %}
    {% endfor %}
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian ,Proses Verbal wali hakim kami buat dengan sebenarnya  semoga menjadi maklum dan periksa adanya.</td>
    </tr>
</table>
<br/>
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
