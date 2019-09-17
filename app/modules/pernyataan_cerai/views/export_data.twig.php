<style>
td{
	font-size:14px;
	font-family: Calibri, "Times New Roman", Times, serif, Verdana, Geneva, sans-serif;
	vertical-align:top;
}
</style>
{% set  colspan=15 %}
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" colspan="17"><strong style="font-size:21px;">LAPORAN PELAYANAN KELURAHAN {{ nama_bln }}{{ nama_thn }}</strong></td>
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
      <td rowspan="2" align="center"><strong>No.</strong></td>
      <td rowspan="2" align="center"><strong>Kelurahan</strong></td>
      <td rowspan="2" align="center"><strong>Tanggal</strong></td>
      <td colspan="7" align="center"><strong>Data Pihak I (SUAMI)</strong></td>
      <td colspan="7" align="center"><strong>Data Pihak II (ISTRI)</strong></td>
    </tr>
    <tr>
        <td align="center"><strong>Nama</strong></td>
        <td align="center"><strong>Tempat Lahir</strong></td>
        <td align="center"><strong>Tanggal Lahir</strong></td>
        <td align="center"><strong>Kewarganegaraan</strong></td>
        <td align="center"><strong>Agama</strong></td>
        <td align="center"><strong>Pekerjaan</strong></td>
        <td align="center"><strong>Alamat</strong></td>
        <td align="center"><strong>Nama</strong></td>
        <td align="center"><strong>Tempat Lahir</strong></td>
        <td align="center"><strong>Tanggal Lahir</strong></td>
        <td align="center"><strong>Kewarganegaraan</strong></td>
        <td align="center"><strong>Agama</strong></td>
        <td align="center"><strong>Pekerjaan</strong></td>
        <td align="center"><strong>Alamat</strong></td>
    </tr>
{% if count_result != 0 %}
		
		{% for result_key,result_val in results %}
	 
<tr>
                <td align="center">{{ result_key+1 }}</td>
                <td>{{ result_val.nama_kel }}</td>
                <td>{{ format_tanggal(result_val.date) }}</td>
                <td>{{ result_val.pria_nama }}</td>
                <td>{{ result_val.pria_tempat_lahir }}</td>
                <td>{{ format_tanggal(result_val.pria_tanggal_lahir) }}</td>
                <td>{{ result_val.pria_kewarganegaraan }}</td>
                <td>{{ result_val.pria_agama }}</td>
                <td>{{ result_val.pria_pekerjaan }}</td>
                <td>{{ result_val.pria_alamat }}</td>
                <td>{{ result_val.perempuan_nama }}</td>
                <td>{{ result_val.perempuan_tempat_lahir }}</td>
                <td>{{ format_tanggal(result_val.perempuan_tanggal_lahir) }}</td>
                <td>{{ result_val.perempuan_kewarganegaraan }}</td>
                <td>{{ result_val.perempuan_agama }}</td>
                <td>{{ result_val.perempuan_pekerjaan }}</td>
                <td>{{ result_val.perempuan_alamat }}</td>
            </tr>
    
{% endfor %}
{% endif %}
</table>
