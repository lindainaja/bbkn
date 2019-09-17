<style>
td{
	font-size:16px;
	font-family: "Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="right"><font style="font-size:13px">lampiran 12 KMA No 298 Tahun 2003</font></td>
    </tr>
    <tr>
        <td align="right"><font style="font-size:13px">-pasal 8 ayat (1) hurup i</font></td>
    </tr>
    <tr>
        <td align="right"><strong style="font-size:16px">Model N-6</strong></td>
    </tr>
</table>
<br/>
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
        <td width="100%" align="center"><strong><u>SURAT KETERANGAN KEMATIAN SUAMI/ISTRI</u></strong></td>
    </tr>
    <tr>
        <td width="100%" align="center">Nomor : {{ detail.no }}</td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td width="10%" align="right">I.&nbsp;&nbsp;</td>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="67%">{{ detail.meninggal_nama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>{{ detail.meninggal_tempat_lahir }} {{ format_tanggal_khusus_indo(detail.meninggal_tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>{{ detail.meninggal_kewarganegaraan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Agama</td>
        <td>:</td>
        <td>{{ detail.meninggal_agama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.meninggal_pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat Terakhir</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.meninggal_alamat)|raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Telah meninggal Dunia Pada Tanggal</td>
        <td valign="top">:</td>
        <td valign="top">{{ format_tanggal_khusus_indo(detail.tanggal_meninggal) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Di</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.tempat_meninggal }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Disebabkan karena</td>
        <td valign="top">:</td>
        <td valign="top">{{ detail.sebab_meninggal }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td align="right">II.&nbsp;&nbsp;</td>
        <td>Nama</td>
        <td>:</td>
        <td>{{ detail.nama }}</td>

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
    <?php
	if(detail.jk=='l'){

		$ket = 'SUAMI';
	} else {
		$ket = 'ISTRI';
	}
	 }}
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adalah <strong>{{ ket }}</strong> orang yang telah meninggal dunia tersebut diatas.</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian surat keterangan ini dibuat dengan mengingat sumpah Jabatan dan untuk dipergunakan seperlunya.</td>
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
