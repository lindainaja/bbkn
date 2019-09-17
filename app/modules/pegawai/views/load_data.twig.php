{% if keywords != '' %}
	<div class="alert alert-info">
			<button class="close" data-dismiss="alert" onclick="clear_search()">×</button>
			<div class="alert-content">
				<strong><i class="fa fa-search"></i>&nbsp;Searching :</strong> {{ keywords }}
			</div>
	</div>
{% endif %}

 
 
{% if count_result != 0 %}
 
<table class="table table-striped" width="100%">
    <thead>
 
    {% set tpl_head = '<tr>' %} 
    {% set tpl_head = tpl_head ~ '<th style="text-align:center">#</th>' %}
    {% for key_field,val_field in fields %}
        {% if sort_by == key_field %}
            {% set sort_order = sort_order|lower %}
            {% set class = 'sort-' ~ sort_order ~ ' sort-active' %}
        {% else %}
            {% set class = "sort-desc sort-asc" %}
        {% endif %}

        {% if sort_order == 'asc' and sort_by == key_field %}
            {% set sorting = 'desc' %}
        {% else %}
            {% set sorting = 'asc' %}

        {% endif %}
        
        {% set anchor = "<a class=\"sorting #{class}\" href=\"#\" field=\"#{key_field}\" name=\"#{sorting}\">#{val_field}</a>" %}
        {% set tpl_head = "#{tpl_head}<th style=\"text-align:center\">#{anchor}</th>" %}

    {% endfor %}
    
    {% set tpl_head = tpl_head ~ '<th style="text-align:center">Action</th>' %}
    {% set tpl_head = tpl_head ~ '</tr>' %}
   
    {{ tpl_head | raw}}
  
    </thead>
    <tbody>
    {% for result_key, result_val in results %}
        <tr>
            <td align="center">{{ result_key+1 }}</td>
            <td align="center">{{ result_val.nip }}</td>
            <td>
                {% set name = '' %}
                {% if result_val.gelar_nonakademis and result_val.gelar_nonakademis != '-' %}
                    {% set name = result_val.gelar_nonakademis  %}
                {% endif %}

                {% if result_val.gelar_depan and result_val.gelar_depan != '-' %}
                    {% set name = name ~ ' ' ~ result_val.gelar_depan %}
                {% endif %}
                
                {% set name = name ~ ' ' ~ result_val.nama_pegawai %}

                {% if result_val.gelar_belakang and result_val.gelar_belakang != '-' %}
                    {% set name = name ~ ' ' ~ result_val.gelar_belakang  %}
                {% endif %}
			 
                {{ name }}
			</td>
            <td align="center">{{ gender[result_val.gender] }}</td>
            <td>{{ result_val.tempat_lahir }}, {{ format_datepicker(result_val.tanggal_lahir) }} </td>
            <td>{{ result_val.agama }}</td>
            <td align="right">

			{% if flag_modify_data %}



                    <a class="btn btn-info show-tooltip btn-xs" title="" onclick="edit_data({{ result_val.id_pegawai }})" href="javascript:;" data-original-title="Edit Data">

                    <i class="fa fa-edit"></i>
                    </a>
                
            {% endif %}
            {% if flag_delete_data %}



                    <a class="btn btn-danger show-tooltip btn-xs" title="" onclick="hapus_data({{ result_val.id_pegawai }})" href="javascript:;" data-original-title="Hapus Data">

                    <i class="fa fa-trash-o"></i>
                    </a>
                
            {% endif %}
            
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<br/>
<div class="pull-right">
{{ pagination | raw }}
</div>
<div class="clearfix"></div>
{% else %}
	<div class="alert alert-warning">
			<div class="alert-content">
				<strong>Warning!</strong>
				No Data.
			</div>
	</div>
{% endif %}
