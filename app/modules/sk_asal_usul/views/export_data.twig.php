<style>
td{
	font-size:14px;
	font-family: Calibri, "Times New Roman", Times, serif, Verdana, Geneva, sans-serif;
	vertical-align:top;
}
</style>
{% set  colspan=24 %}
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" colspan="26"><strong style="font-size:21px;">LAPORAN PELAYANAN KELURAHAN {{ nama_bln }}{{ nama_thn }}</strong></td>
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
        <td align="center"><strong>Nomor</strong></td>
        <td align="center"><strong>Nama</strong></td>
        <td align="center"><strong>Jenis Kelamin</strong></td>
        <td align="center"><strong>Tempat Lahir</strong></td>
        <td align="center"><strong>Tanggal Lahir</strong></td>
        <td align="center"><strong>Kewarganegaraan</strong></td>
        <td align="center"><strong>Agama</strong></td>
        <td align="center"><strong>Pekerjaan</strong></td>
        <td align="center"><strong>Alamat</strong></td>
        <td align="center"><strong>Nama Ayah</strong></td>
        <td align="center"><strong>Tempat Lahir Ayah</strong></td>
        <td align="center"><strong>Tanggal Lahir Ayah</strong></td>
        <td align="center"><strong>Kewarganegaraan Ayah</strong></td>
        <td align="center"><strong>Agama Ayah</strong></td>
        <td align="center"><strong>Pekerjaan Ayah</strong></td>
        <td align="center"><strong>Alamat Ayah</strong></td>
        <td align="center"><strong>Nama Ibu</strong></td>
        <td align="center"><strong>Tempat Lahir Ibu</strong></td>
        <td align="center"><strong>Tanggal Lahir Ibu</strong></td>
        <td align="center"><strong>Kewarganegaraan Ibu</strong></td>
        <td align="center"><strong>Agama Ibu</strong></td>
        <td align="center"><strong>Pekerjaan Ibu</strong></td>
        <td align="center"><strong>Alamat Ibu</strong></td>
    </tr>
{% if count_result != 0 %}
		
		{% for result_key,result_val in results %}
	 
<tr>
                <td align="center">{{ result_key+1 }}</td>
                <td>{{ result_val.nama_kel }}</td>
                <td>{{ format_tanggal(result_val.date) }}</td>
                <td>{{ result_val.no }}</td>
                <td>{{ result_val.nama }}</td>
                <td>{{ gender[result_val.jk] }}</td>
                <td>{{ result_val.tempat_lahir }}</td>
                <td>{{ format_tanggal(result_val.tanggal_lahir) }}</td>
                <td>{{ result_val.kewarganegaraan }}</td>
                <td>{{ result_val.agama }}</td>
                <td>{{ result_val.pekerjaan }}</td>
                <td>{{ result_val.alamat }}</td>
                <td>{{ result_val.ayah_nama }}</td>
                <td>{{ result_val.ayah_tempat_lahir }}</td>
                <td>{{ format_tanggal(result_val.ayah_tanggal_lahir) }}</td>
                <td>{{ result_val.ayah_kewarganegaraan }}</td>
                <td>{{ result_val.ayah_agama }}</td>
                <td>{{ result_val.ayah_pekerjaan }}</td>
                <td>{{ result_val.ayah_alamat }}</td>
                <td>{{ result_val.ibu_nama }}</td>
                <td>{{ result_val.ibu_tempat_lahir }}</td>
                <td>{{ format_tanggal(result_val.ibu_tanggal_lahir) }}</td>
                <td>{{ result_val.ibu_kewarganegaraan }}</td>
                <td>{{ result_val.ibu_agama }}</td>
                <td>{{ result_val.ibu_pekerjaan }}</td>
                <td>{{ result_val.ibu_alamat }}</td>
            </tr>
    
{% endfor %}
{% endif %}
</table>
