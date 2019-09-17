{{ pesan_flash_data|raw }}

<table class="table table-striped" id="table_sk_sk_untuk_nikah" width="100%">
    <thead>
        <tr>
            <th><div align="center">#</div></th>
            <th><div align="center">Tanggal</div></th>
            <th><div align="center">No</div></th>
            <th><div align="center">Nama</div></th>
            <!-- <th><div align="center">Tgl Kehilangan</div></th>
            <th><div align="center">Lokasi Kehilangan</div></th> -->
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

            <td>{{ result_val.no }}</td>
            <td>{{ result_val.nama }}</td>

         <!--    <td align="center">{{ format_datepicker(result_val.tanggal_kehilangan) }}</td>

            <td>{{ result_val.kehilangan_di }}</td> -->

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