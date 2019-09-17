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
        <td width="100%" align="center"><strong style="font-size:16px"><u>SURAT KETERANGAN KELAHIRAN</u></strong></td>
    </tr>
    <tr>
        <td width="100%" align="center">Nomor {{ detail.no }}</td>

    </tr>
</table>
<br/>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda Tangan dibawah ini ,menerangkan bahwa pada :</td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td width="19%">Hari, Tanggal</td>
         <td width="1%">:</td>
        <td width="80%">{{ format_tanggal_hari(detail.tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>Pukul</td>
         <td>:</td>
        <td>{{ format_jam_2(detail.pukul) }} WIB</td>

    </tr>
    <tr>
        <td>Tanggal Didaftarkan</td>
         <td>:</td>
        <td>{{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">Telah Lahir Seorang Anak {{ gender[detail.jk] }}, Bernama :</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3" align="center"><strong>{{ detail.nama }}</strong></td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">Dari seorang ibu</td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><strong>{{ detail.ibu_nama }}</strong></td>

    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{ detail.ibu_nik }}</td>

    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td>{{ round(detail.ibu_umur) }} Tahun</td>

    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.ibu_pekerjaan }}</td>

    </tr>
    <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.ibu_alamat) }}</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">Istri dari</td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><strong>{{ detail.ayah_nama }}</strong></td>

    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{ detail.ayah_nik }}</td>

    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td>{{ round(detail.ayah_umur) }} Tahun</td>

    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.ayah_pekerjaan }}</td>

    </tr>
    <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.ayah_alamat) }}</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">Surat Keterangn ini dibuat berdasarkan keterangan Pelapor :</td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><strong>{{ detail.pelapor_nama }}</strong></td>

    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{ detail.pelapor_nik }}</td>

    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td>{{ round(detail.pelapor_umur) }} Tahun</td>

    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.pelapor_pekerjaan }}</td>

    </tr>
    <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.pelapor_alamat) }}</td>

    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">Hubungan pelapor dengan bayi : {{ detail.hubungan_pelapor }}</td>

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
</body>
</html>