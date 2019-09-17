<style>
td{
	font-size:14px;
	font-family: Calibri, "Times New Roman", Times, serif, Verdana, Geneva, sans-serif;
	vertical-align:top;
}
</style>
{% set  colspan=18 %}
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" colspan="20"><strong style="font-size:21px;">LAPORAN PELAYANAN KELURAHAN {{ nama_bln }}{{ nama_thn }}</strong></td>
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
      <td rowspan="2" align="center"><strong>Nomor</strong></td>
      <td rowspan="2" align="center"><strong>Pengajuan</strong></td>
      <td colspan="8" align="center"><strong>Data Penggugat</strong></td>
      <td colspan="7" align="center"><strong>Data Tergugat</strong></td>
    </tr>
    <tr>
        <td align="center"><strong>Status</strong></td>
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
        <td align="center"><strong>Alamat Terakhir</strong></td>
    </tr>
{% if count_result != 0 %}
		
		{% for result_key,result_val in results %}
	 
<tr>
                <td align="center">{{ result_key+1 }}</td>
                <td>{{ result_val.nama_kel }}</td>
                <td>{{ format_tanggal(result_val.date) }}</td>
                <td>{{ result_val.no }}</td>
                <td>{{ result_val.pengajuan }}</td>
                <td>{{ result_val.status_pemohon }}</td>
                <td>{{ result_val.nama }}</td>
                <td>{{ result_val.tempat_lahir }}</td>
                <td>{{ format_tanggal(result_val.tanggal_lahir) }}</td>
                <td>{{ result_val.kewarganegaraan }}</td>
                <td>{{ result_val.agama }}</td>
                <td>{{ result_val.pekerjaan }}</td>
                <td>{{ result_val.alamat }}</td>
                <td>{{ result_val.tertuju_nama }}</td>
                <td>{{ result_val.tertuju_tempat_lahir }}</td>
                <td>{{ format_tanggal(result_val.tertuju_tanggal_lahir) }}</td>
                <td>{{ result_val.tertuju_kewarganegaraan }}</td>
                <td>{{ result_val.tertuju_agama }}</td>
                <td>{{ result_val.tertuju_pekerjaan }}</td>
                <td>{{ result_val.tertuju_alamat }}</td>
            </tr>
    
{% endfor %}
{% endif %}
</table>
