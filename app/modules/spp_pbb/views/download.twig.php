<style>
td{
	font-size:16px;
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
        <td width="13%">Nomor</td>
        <td width="40%">: {{ detail.no }}</td>

        <td width="47%" align="center">{{ detail.nama_kel|upper }} {{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td>Lamp</td>
        <td>: -</td>
        <td align="center">Kepada</td>
    </tr>
    <tr>
        <td>Perihal</td>
        <td>: <strong><u>SURAT PENGANTAR</u></strong></td>
        <td align="center">Yth <strong>Kepala Dinas PBB dan BPHTB</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="center">Di Tangerang</td>
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
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.alamat)|raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Benar nama tersebut diatas memiliki sebidang tanah yang dengan  Bukti Kepemilikan: {{ detail.bukti_kepemilikan }} Nomor : {{ detail.no_bukti_kepemilikan }}, Luas Bangunan {{ format_uang(detail.luas_bangunan) }} M<sup>2</sup> yang terletak di {{ detail.letak_tanah }}, dengan Nomor SPPT Asal {{ detail.no_sppt_asal }} Atas Nama {{ detail.atas_nama }}.</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Atas dasar Tersebut diatas kiranya Kepada Kepala Dinas Pelayanan Pajak Bumi Bangunan dan Bea Perolehan Hak atas Tanah Bangunan {{ detail.nama_kab|upper }} untuk dapat Menerbitkan SPPT atas nama tersebut diatas sesuai dengan keadaan yang sebenarnya karena tidak terbit.</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian surat pengantar ini kami buat dengan sebenarnya, agar menjadi maklum serta dapat memberikan bantuan seperlunya.</td>
    </tr>
</table>
<br/><br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="60%">&nbsp;</td>
        <td width="40%" align="center"><strong>{{ text_1 }}</strong></td>

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
