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
        <td align="center"><strong>No.</strong></td>
        <td align="center"><strong>Kelurahan</strong></td>
        <td align="center"><strong>Tanggal</strong></td>
        <td align="center"><strong>Nomor</strong></td>
        <td align="center"><strong>Nama</strong></td>
        <td align="center"><strong>Jenis Kelamin</strong></td>
        <td align="center"><strong>Tempat Lahir</strong></td>
        <td align="center"><strong>Tanggal Lahir</strong></td>
        <td align="center"><strong>Kewarganegaraan</strong></td>
        <td align="center"><strong>Nomor Keterangan</strong></td>
        <td align="center"><strong>STMD Polres</strong></td>
        <td align="center"><strong>Pasport</strong></td>
        <td align="center"><strong>Visa</strong></td>
        <td align="center"><strong>Kim.S/ Kim</strong></td>
        <td align="center"><strong>Izin Kerja (IMTA)</strong></td>
        <td align="center"><strong>NPWPD</strong></td>
        <td align="center"><strong>Maksud Tujuan Kunjungan</strong></td>
        <td align="center"><strong>Tempat Berkunjung Indonesia</strong></td>
        <td align="center"><strong>Nama Penanggung Jawab</strong></td>
        <td align="center"><strong>Alamat Penanggung Jawab</strong></td>
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
                <td>{{ result_val.no_ket }}</td>
                <td>{{ result_val.stmd_polres }}</td>
                <td>{{ result_val.pasport }}</td>
                <td>{{ result_val.visa }}</td>
                <td>{{ result_val.kim }}</td>
                <td>{{ result_val.izin_kerja }}</td>
                <td>{{ result_val.npwpd }}</td>
                <td>{{ result_val.tujuan_kunjungan }}</td>
                <td>{{ result_val.tempat_kunjungan }}</td>
                <td>{{ result_val.nama_penanggung_jawab }}</td>
                <td>{{ result_val.alamat_penanggung_jawab }}</td>
            </tr>
    
{% endfor %}
{% endif %}
</table>
