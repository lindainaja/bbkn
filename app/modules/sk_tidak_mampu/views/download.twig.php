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
        <td width="100%" align="center"><strong style="font-size:21px"><u>SURAT KETERANGAN TIDAK MAMPU</u></strong></td>
    </tr>
    <tr>
        <td width="100%" align="center">Nomor : {{ detail.no }}</td>

    </tr>
</table>
<br/>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan dibawah ini Kepala Desa {{ detail.nama_kel|upper }} Kecamatan {{ detail.nama_kec|upper }} {{ detail.nama_kab|upper }}, menerangkan dengan sesungguhnya bahwa  :</td>

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
        <td colspan="4">Adalah benar-benar penduduk kami dan benar-benar orang tua/wali dari :</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Nama</td>
        <td>:</td>
        <td>{{ detail.anak_nama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>{{ detail.anak_tempat_lahir }} {{ format_tanggal_khusus_indo(detail.anak_tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Agama</td>
        <td>:</td>
        <td>{{ detail.anak_agama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.anak_pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.anak_alamat)|raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">Sesuai dengan pengamatan kami, yang bersangkutan adalah benar-benar keluarga tidak mampu</td>
    </tr>
    <tr>
        <td colspan="4">Apabila dikemudian hari pernyataan ini tidak sesuai dengan kenyataan, kami bersangkutan sanggup menanggung akibatnya.</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
</table>
<br/><br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="60%">&nbsp;</td>
        <td width="40%" align="center">{{ detail.nama_kel|upper }}, {{ format_tanggal_khusus_indo(detail.date) }}</td>

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
</body>
</html>