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
        <td width="100%" align="center"><strong style="font-size:21px"><u>SURAT KETERANGAN BELUM PERNAH MENIKAH</u></strong></td>
    </tr>
    <tr>
        <td width="100%" align="center">Nomor : {{ detail.no }}</td>

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
        <td width="67%"><strong>{{ detail.nama }}</strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>NIK</td>
        <td>:</td>
        <td>{{ detail.nik }}</td>

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
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Benar bahwa nama tersebut di atas adalah Warga penduduk Kelurahan {{ detail.nama_kel|upper }} Kecamatan {{ detail.nama_kec|upper }} {{ detail.nama_kab|upper }}.</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menurut Pengamatan kami dan Laporan dari ketua RT dan RW nya bahwa nama tersebut diatas sampai dengan dibuatkannya surat keterangan ini benar BELUM PERNAH NIKAH baik melalui Kantor Urusan Agama ( KUA ) maupun Kantor Dinas Catatan sipil kota Tangerang.</td>
    </tr>
    <tr>
        <td colspan="4">Dan surat Keterangan ini dapat di Pergunakan sebagai Persyaratan :</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4" align="center"><strong>{{ detail.persyaratan_untuk|upper }}</strong></td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian Surat Keterangan  ini  dibuat dengan sebenarnya dan kepada yang berkepentingan agar maklum adanya.</td>
    </tr>
</table>
<br/><br/>
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
