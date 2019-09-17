<style>
td{
	font-size:16px;
	font-family: "Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center"><strong style="font-size:25px">PEMBINA PENGAMALAN AGAMA</strong></td>
    </tr>
    <tr>
        <td align="center"><strong style="font-size:25px">( P 2 A )</strong></td>
    </tr>
    <tr>
        <td align="center"><strong style="font-size:21px">KECAMATAN {{ detail.nama_kec|upper }}</strong></td>

    </tr>
    <tr>
        <td align="center"><strong style="font-size:13.5px">{{ detail.alamat_kec }}</strong></td>

    </tr>
</table>
<hr size="1" color="#000">
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><img src="{{ agama_yg_diridhai }}"  height="{{ newheight }}" width="{{ newwidth }}" /></td>

    </tr>
    <tr>
        <td width="100%" align="center">"Sesungguhnya agama yang diridhai Allah adalah agama Islam"(Q.3:19)</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><strong style="font-size:18px">PERNYATAAN MEMELUK AGAMA ISLAM</strong></td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4"><strong>Bismillahirrahmanirrahiem</strong></td>
    </tr>
    <tr>
        <td colspan="4">Saya, yang bertanda tangan di bawah ini :</td>
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
        <td>Agama</td>
        <td>:</td>
        <td>{{ detail.agama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.alamat)|raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">dengan penuh  kesadaran, pada hari ini {{ format_tanggal_hari(detail.date) }}, tanpa paksaan dari pihak mana pun di hadapan para saksi, saya berikrar menyatakan MENINGGALKAN AGAMA <strong>{{ detail.agama }}</strong> dan MEMELUK AGAMA <strong>ISLAM</strong> dengan mengucapkan dua kalimat syahadat:</td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><img src="{{ syahadat }}"  height="{{ newheight_2 }}" width="{{ newwidth_2 }}" /></td>

    </tr>
    <tr>
        <td align="center"><strong>( ASYHADU ALLA ILAAHA ILLALLOH WA ASYHADU ANNA MUHAMMADAN ROSULULLOH )</strong></td>
    </tr>
    <tr>
        <td align="center">&nbsp;</td>
    </tr>
    <tr>
        <td align="center"><strong>Artinya: "Aku bersaksi sesungguhnya tidak ada Tuhan selain Allah dan aku bersaksi bahwasanya Muhammad adalah utusan Allah."</strong></td>
    </tr>
    <tr>
        <td align="center">&nbsp;</td>
    </tr>
    <tr>
        <td><strong>{{ detail.nama }}</strong></td>

    </tr>
    <tr>
        <td>Pernyataan ini, saya ucapkan dan saya tandatangani dengan sebenarnya, seraya mengharap keridloan Allah untuk dipergunakan sebagaimana mestinya.</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center"><strong>Pembimbing</strong></td>
        <td align="center"><strong>Yang berikrar</strong></td>
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="center"><strong>{{ detail.pembimbing }}</strong></td>

        <td align="center"><strong>{{ detail.nama }}</strong></td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2" align="center"><strong>SAKSI-SAKSI</strong></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    {% for i in 1..6 %}
    {% set saksi_key="saksi_#{i}" %}

    <tr>
        <td>{{ no }}. {{ detail[saksi_key] }}</td>

        <td>( ........................................ )</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    {% endfor %}
</table>
