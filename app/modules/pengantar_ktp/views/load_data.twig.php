{{ pesan_flash_data|raw }}
<table class="table table-striped" id="table_pengantar_ktp" width="100%">
    <thead>
        <tr>
            <th><div align="center">#</div></th>
            <th><div align="center">Tanggal</div></th>
            <th><div align="center">Permohonan KTP</div></th>
            <th><div align="center">Nama</div></th>
            <th><div align="center">No KK</div></th>
            <th><div align="center">NIK</div></th>
            <th><div align="center">Downloaded</div></th>
            <th><div align="center">Action</div></th>
        </tr>
    </thead>
    {% if count_result != 0 %}
        {% for result_key,result_val in results %}
        <tr>
            <td align="center">{{ result_key + 1 }}</td>
            <td align="center">{{ format_datepicker(result_val.date) }}</td>
            <td>{{ result_val.jenis }}</td>
            <td>{{ result_val.nama }}</td>
            <td align="center">{{ result_val.no_kk }}</td>
            <td align="center">{{ result_val.nik }}</td>
            <td align="center">{{ result_val.download }}x</td>
            <td align="right">

                <a class="btn btn-success show-tooltip btn-xs" title="" href="javascript:;" onclick="upload_data({{ result_val.id }})" data-original-title="Upload Data">
                <i class="fa fa-upload"></i>
                </a>

                <a class="btn btn-primary show-tooltip btn-xs" title="" href="{{ download_url }}{{ result_val.id }}" data-original-title="Download Data">
                <i class="fa fa-download"></i>
                </a>
                {% if flag_modify_data == 1 %}
                    <a class="btn btn-info show-tooltip btn-xs" title="" onclick="edit_data({{ result_val.id }})" href="javascript::" data-original-title="Edit Data">
                    <i class="fa fa-edit"></i>
                    </a>
                {% endif %}
                {% if flag_delete_data == 1 %}
                    <a class="btn btn-danger show-tooltip btn-xs" title="" onclick="hapus_data({{ result_val.id }})" href="javascript:;" data-original-title="Hapus Data">
                    <i class="fa fa-trash-o"></i>
                    </a>
                {% endif %}
            </td>
        </tr>
        {% endfor %}
    {% endif %}
</table>