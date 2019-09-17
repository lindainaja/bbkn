<style>
td{
	font-size:16px;
	font-family: Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><strong style="font-size:18.5px"><u>SURAT KETERANGAN DOMISILI</u></strong></td>
    </tr>
    <tr>
        <td width="100%" align="center"><font style="font-size:18.5px">Nomor: {{ detail.no }}</font></td>

    </tr>
</table>
<br/>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan dibawah ini Lurah {{ detail.nama_kel|upper }} Kecamatan {{ detail.nama_kec|upper }} {{ detail.nama_kab|upper }}, menerangkan bahwa :</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td width="10%">&nbsp;</td>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="67%">{{ detail.nama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ gender[detail.jk] }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>{{ detail.tempat_lahir }} {{ format_tanggal_khusus_indo(detail.tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>{{ detail.kewarganegaraan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>No. Keterangan</td>
        <td>:</td>
        <td>{{ detail.no_ket }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>STMD.Polres Tangerang</td>
        <td>:</td>
        <td>{{ detail.stmd_polres }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pasport</td>
        <td>:</td>
        <td>{{ detail.pasport }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Visa</td>
        <td>:</td>
        <td>{{ detail.visa }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kim.S/ Kim</td>
        <td>:</td>
        <td>{{ detail.kim }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Izin Kerja ( IMTA)</td>
        <td>:</td>
        <td>{{ detail.izin_kerja }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>NPWPD</td>
        <td>:</td>
        <td>{{ detail.npwpd }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Maksud Tujuan Kunjungan</td>
        <td>:</td>
        <td>{{ detail.tujuan_kunjungan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Berkunjung Indonesia</td>
        <td>:</td>
        <td>{{ detail.tempat_kunjungan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Nama Penanggung Jawab</td>
        <td>:</td>
        <td>{{ detail.nama_penanggung_jawab }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat Penanggung Jawab</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.alamat_penanggung_jawab) |raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Surat keterangan ini berlaku sampai tanggal  : <strong>{{ format_tanggal_khusus_indo(detail.tgl_berlaku_dari) }} s/d {{ format_tanggal_khusus_indo(detail.tgl_berlaku_sampai) }}</strong></td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian Surat Keterangan  ini  dibuat dengan sebenarnya dan kepada yang berkepentingan agar maklum dan mohon bantuan seperlunya.</td>
    </tr>
</table>
<br/><br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="44%" align="center">Tanda Tangan yang</td>
        <td width="13%">&nbsp;</td>
        <td width="43%" align="center">{{ detail.nama_kel|upper }} {{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td align="center">Bersangkutan</td>
        <td>&nbsp;</td>
        <td align="center">{{ text_1 }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td rowspan="5">&nbsp;</td>
        <td align="center">{{ text_2 }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="center">{{ detail.nama }}</td>

        <td align="center"><strong><u>{{ detail.ttd_nama }}</u></strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">NIP. {{ detail.ttd_nip }}</td>

    </tr>
</table>
