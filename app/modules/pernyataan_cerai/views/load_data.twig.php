{{ pesan_flash_data|raw }}

<table class="table table-striped" id="table_pernyataan_cerai" width="100%">
    <thead>
        <tr>
            <th><div align="center">#</div></th>
            <th><div align="center">Tanggal</div></th>
            <th><div align="center">Pihak I</div></th>
            <th><div align="center">Pihak II</div></th>
            <th><div align="center">Talak</div></th>
            <th><div align="center">Downloaded</div></th>
            <th><div align="center">Action</div></th>
        </tr>
    </thead>
    
{% if count_result != 0 %}
		


    <tbody>
        
		
        {% for result_key, result_val in results %}


        <tr>
            <td align="center">{{ result_key + 1 }}</td>
            <td align="center">{{ format_datepicker(result_val.date) }}</td>

            <td>{{ result_val.pria_nama }}</td>

            <td>{{ result_val.perempuan_nama }}</td>

            <td align="center">{{ result_val.talak_ke }}</td>

            <td align="center">{{ result_val.download }}x</td>

            <td align="right">
                <a class="btn btn-success show-tooltip btn-xs" title="" href="javascript:;" onclick="upload_data({{ result_val.id }})" data-original-title="Upload Data">

                <i class="fa fa-upload"></i>
                </a>
                <a class="btn btn-primary show-tooltip btn-xs" title="" href="{{ download_url }}{{result_val.id}}" data-original-title="Download Data">


                <i class="fa fa-download"></i>
                </a>
				
{% if flag_modify_data %}



                    <a class="btn btn-info show-tooltip btn-xs" title="" onclick="edit_data({{ result_val.id }})" href="javascript:;" data-original-title="Edit Data">

                    <i class="fa fa-edit"></i>
                    </a>
                
{% endif %}
{% if flag_delete_data %}



                    <a class="btn btn-danger show-tooltip btn-xs" title="" onclick="hapus_data({{ result_val.id }})" href="javascript:;" data-original-title="Hapus Data">

                    <i class="fa fa-trash-o"></i>
                    </a>
                
{% endif %}


            </td>
        </tr>
	{% endfor %}


    </tbody>
    
{% endif %}


</table>
