<!DOCTYPE html>
<head>
<style>
table#header td{
    font-size:16px;
    font-family: Tahoma,"Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
table.body td{
    font-size:12pt;
    font-family:"Bookman Old Style";
}
div.hr{
    margin-top:6px;
    font-size:10%;
    border-left:none;
    border-right:none;
    border-top:solid 4px #000;
    border-bottom:solid 1px #000;
    width:100%;
    background:white;
}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="header">
    <tr>
        <td width="20%" rowspan="5" valign="top" align="center"><img src="{{ logo }}"  height="{{ newheight }}" width="{{ newwidth }}" /></td>

        <td colspan="3" align="center"><strong style="font-size:14pt">PEMERINTAH {{ detail.nama_kab|upper }}</strong></td>

    </tr>
    <tr>
        <td colspan="3" align="center"><strong style="font-size:15pt">KECAMATAN {{ detail.nama_kec|upper }}</strong></td>

    </tr>
    <tr>
        <td colspan="3" align="center"><strong style="font-size:25pt">KELURAHAN {{ detail.nama_kel|upper }}</strong></td>

    </tr>
    <tr>
        <td colspan="3" align="center"><strong style="font-size:9pt">{{ detail.alamat_kel }} email : kel.babakan.tgr@gmail.com  Kode Pos {{ detail.kodepos }}</strong></td>

    </tr>
    
</table>
<div class="hr">&nbsp;</div> 
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><strong style="font-size:21px"><u>SURAT PERNYATAAN</u></strong></td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan dibawah ini :</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td width="10%">&nbsp;</td>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="67%"><strong>{{ detail.nama }}</strong></td>

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
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Memberikan pernyataan Bahwa {{ detail.tertuju_status|upper }} saya :</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td width="10%">&nbsp;</td>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="67%"><strong>{{ detail.tertuju_nama }}</strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>{{ detail.tertuju_tempat_lahir }} {{ format_tanggal_khusus_indo(detail.tertuju_tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>{{ detail.tertuju_kewarganegaraan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Agama</td>
        <td>:</td>
        <td>{{ detail.tertuju_agama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.tertuju_pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat Terakhir</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.tertuju_alamat)|raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Telah meninggalkan saya dan sampai dengan saat ini tidak diketahui keberadaannya baik diwilayah Negara Kesatuan Republik Indonesuia (NKRI) maupun di luar Negara Kesatuan Republik Indonesuia (NKRI) serta sampai dengan dibuatkannya surat pernyataan ini tidak diketahui Keberadaannya / Ghoib</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian Surat Pernyataan ini saya  buat dengan sebenarnya, mohon kepada yang berkepentingan dapat mengetahuinya.</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="60%">&nbsp;</td>
        <td width="40%" align="center">{{ detail.nama_kel|upper }}, {{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center"><strong>Yang membuat Pernyataan</strong></td>
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
        <td colspan="2">&nbsp;</td>
    </tr>
<tr>
        <td>&nbsp;</td>
        <td align="center"><strong>{{ detail.nama }}</u></strong></td>

    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">SAKSI SAKSI :</td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td width="25%">1. <strong>{{ detail.saksi_1 }}</strong></td>

        <td width="75%">(........................................)</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>2. <strong>{{ detail.saksi_2 }}</strong></td>

        <td>(........................................)</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2" align="center">MENGETAHUI :</td>
    </tr>
    <tr>
        <td width="50%" align="center">Ketua RW {{ detail.rw }} Kel {{ detail.nama_kel|upper }}</td>

        <td width="50%" align="center">Ketua RT {{ detail.rt }}</td>

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
        <td align="center"><strong>{{ detail.rw_nama }}</strong></td>

        <td align="center"><strong>{{ detail.rt_nama }}</strong></td>

    </tr>
</table>
</body>
</html>