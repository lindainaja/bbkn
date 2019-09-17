<style>
td{
	font-size:16px;
	font-family: "Times New Roman", Times, serif, Calibri, Verdana, Geneva, sans-serif
}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center"><strong style="font-size:18px"><u>SURAT KETERANGAN {{ detail.status }}</u></strong></td>

    </tr>
    <tr>
        <td align="center">Nomor : {{ detail.no }}</td>

    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan dibawah ini Lurah {{ detail.nama_kel|upper }} Kecamatan {{ detail.nama_kec|upper }} {{ detail.nama_kab|upper }}, menerangkan bahwa :</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
<tr>
        <td width="10%" align="right">&nbsp;&nbsp;</td>
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
        <td colspan="4">Benar nama tersebut diatas adalah warga Kelurahan {{ detail.nama_kel|upper }} dan berdasarkan Laporan dari Para Ketua RT dan RW nya bahwa nama tersebut diatas berstatus <strong>{{ detail.status }}</strong> dari :</td>

    </tr>
<tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Nama</td>
        <td>:</td>
        <td><strong>{{ detail.dari_nama }}</strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td>{{ detail.dari_tempat_lahir }} {{ format_tanggal_khusus_indo(detail.dari_tanggal_lahir) }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kewarganegaraan</td>
        <td>:</td>
        <td>{{ detail.dari_kewarganegaraan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Agama</td>
        <td>:</td>
        <td>{{ detail.dari_agama }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ detail.dari_pekerjaan }}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top">{{ nl2br(detail.dari_alamat)|raw }}</td>

    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    {% if detail.keterangan %} 
        <tr>
            <td colspan="4">{{ nl2br(detail.keterangan)|raw }}</td>

        </tr>
        <tr>
            <td colspan="4">&nbsp;</td>
        </tr>
    {% endif %}
    <tr>
      <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian surat keterangan ini kami buat dengan sebenarnya, agar kepada yang berkepentingan menjadi bahan periksa dan bantuan sebagai mana mestinya.</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="60%" align="center">&nbsp;</td>
        <td width="40%" align="center" valign="top">{{ detail.nama_kel|upper }} {{ format_tanggal_khusus_indo(detail.date) }}</td>

    </tr>
    <tr>
        <td rowspan="9" valign="top">
        {% if detail.saksi_1 != '' or detail.saksi_2 != '' or detail.saksi_3 != '' or detail.saksi_4 != '' or detail.saksi_5 != '' %}
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="4"><strong>SAKSI :</strong></td>
                </tr>
                {% for i in 1..5 %}
                {% set saksi_key="saksi_#{i}" %}
                {% if detail[saksi_key] %}
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="15%" align="right" valign="top">{{ no }}.&nbsp;&nbsp;</td>

                        <td width="45%" valign="top">{{ detail[saksi_key] }}</td>
                        <td width="30%" valign="top">( ...................... )</td>
                        <td width="10%" valign="top">&nbsp;</td>
                    </tr>
                {% endif %}
                {% endfor %}
            </table>
        {% endif %}
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="center" valign="top"><strong>{{ text_1 }}</strong></td>

    </tr>
    <tr>
        <td align="center" valign="top"><strong>{{ text_2 }}</strong></td>

    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
<tr>
        <td align="center" valign="top"><strong><u>{{ detail.ttd_nama }}</u></strong></td>

    </tr>
    <tr>
        <td align="center" valign="top">NIP. {{ detail.ttd_nip }}</td>

    </tr>
</table>
