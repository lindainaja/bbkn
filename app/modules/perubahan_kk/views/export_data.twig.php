<style>
td{
	font-size:14px;
	font-family: Calibri, "Times New Roman", Times, serif, Verdana, Geneva, sans-serif;
	vertical-align:top;
}
</style>
{% set  colspan=7 %}
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" colspan="9"><strong style="font-size:21px;">LAPORAN PELAYANAN KELURAHAN {{ nama_bln }}{{ nama_thn }}</strong></td>
    </tr>
</table>
<br/>
<table width="100%" border="0" style="border:1px solid #000" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2">Propinsi</td>
        <td colspan="{{ colspan }}">: {{ default_nama_prop }}</td>

    </tr>
    <tr>
        <td colspan="2">Kota/Kabupaten</td>
        <td colspan="{{ colspan }}">: {{ default_nama_kab }}</td>

    </tr>
    <tr>
        <td colspan="2">Kecamatan</td>
        <td colspan="{{ colspan }}">: {{ default_nama_kec }}</td>

    </tr>
    <tr>
        <td colspan="2">Pelayanan</td>
        <td colspan="{{ colspan }}">: {{ title }}</td>

    </tr>
</table>
<br/>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center"><strong>No.</strong></td>
        <td align="center"><strong>Kelurahan</strong></td>
        <td align="center"><strong>Tanggal</strong></td>
        <td align="center"><strong>Nama</strong></td>
        <td align="center"><strong>NIK</strong></td>
        <td align="center"><strong>Nama KK</strong></td>
        <td align="center"><strong>Nomor KK</strong></td>
        <td align="center"><strong>Alamat</strong></td>
        <td align="center"><strong>Alasan Permohonan</strong></td>
    </tr>
{% if count_result != 0 %}
		
		{% for result_key,result_val in results %}
	 
<tr>
                <td align="center">{{ result_key+1 }}</td>
                <td>{{ result_val.nama_kel }}</td>
                <td>{{ format_tanggal(result_val.date) }}</td>
                <td>{{ result_val.nama }}</td>
                <td>&nbsp;{{ result_val.nik }}</td>
                <td>&nbsp;{{ result_val.nama_kk }}</td>
                <td>&nbsp;{{ result_val.no_kk }}</td>
                <td>{{ result_val.alamat }}</td>
                <td>{{ result_val.alasan_permohonan }}</td>
            </tr>
    
{% endfor %}
{% endif %}
</table>
