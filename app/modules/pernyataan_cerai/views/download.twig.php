<style>
td{
	font-size:16px;
	font-family: "Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><strong style="font-size:18px"><u>SURAT PERNYATAAN IKRAR TALAK</u></strong></td>
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
        <td width="67%">{{ detail.pria_nama }}</td>

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
        <td colspan="4"><strong>Pihak Pertama (I) / Suami :</strong></td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">Dengan kesadaran bersama tanpa paksaan atau tekanan dari pihak manapun juga, maka dengan ini pada hari ini <strong>{{ format_tanggal_hari(detail.date) }}</strong> saya <strong>Pihak Pertama (Suami)</strong> menyatakan <strong>IKRAR TALAK ({{ detail.talak_ke }})</strong> terhadap <strong>Pihak Kedua (Isteri)</strong> :</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
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
        <td colspan="4">Bahwa sejak hari {{ format_tanggal_hari(detail.date) }} Saudari (Pihak II) <strong>{{ detail.perempuan_nama }}</strong> sudah bukan menjadi isteri dan tanggung jawab saya lagi menurut syari'at ajaran Islam dan pada hari ini persoalan yang berkaitan dengan isteri saya bukan menjadi  tanggung jawab saya lagi. Dan bilamana Saudari <strong>{{ detail.perempuan_nama }}</strong> (Pihak II) mendapatkan jodoh dengan orang lain maka dengan rasa ikhlas dan ridho, lahir dan bathin, saya persilahkan untuk menikah dan saya tidak akan menuntut atau menggugat kepada siapapun dan begitu juga dengan sebaliknya.</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian <strong>SURAT PERNYATAAN IKRAR TALAK</strong> ini saya buat dan saya tanda tangani secara bersama tanpa ada paksaan dari pihak manapun. Semoga Allah senantiasa memberikan petunjuk kepada kita semua. Amin Ya Rabbal 'Alamin.</td>
    </tr>
    <tr>
        <td colspan="4">Surat Pernyataan Ikrar Talak ini dapat dilanjutkan atau dipergunakan sebagai bahan bukti ke <strong>PENGADILAN AGAMA</strong> agar yang berwajib maklum adanya.</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="60%">&nbsp;</td>
        <td width="40%" align="center">Tagerang, {{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td align="center">Yang Dijatuhi Talak</td>
        <td align="center">Yang Menyatakan Talak</td>
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
        <td align="center"><strong>{{ detail.perempuan_nama }}</strong></td>

        <td align="center"><strong>{{ detail.pria_nama }}</strong></td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3">Saksi - saksi :</td>
    </tr>
	{% for i in 1..5 %}
    {% set saksi_key="saksi_#{i}" %}
    {% if detail[saksi_key] %}
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td width="15%" align="right">{{ i }}.&nbsp;&nbsp;</td>

            <td width="30%">{{ detail[saksi_key] }}</td>
            <td width="55%">( ........................................ )</td>
        </tr>
	{% endif %}
    {% endfor %}
</table>