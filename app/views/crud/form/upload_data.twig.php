{% if already_uploaded == true %}
	<div class="form-group">
		<div class="col-sm-2 col-lg-2 controls">&nbsp;</div>
		<div class="col-sm-9 col-lg-9 controls">
		<a href="{{ download_file_url }}" target="_blank"><i class="fa fa-download"></i> Download File</a>
		<br/>
		<br/>
		</div>
	</div>
{% endif %}
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="#" id="form_upload_data" name="form_upload_data">
	<input type="hidden" id="{{ table_pk }}" name="{{ table_pk }}" value="{{ pk }}" />
	<div class="form-group">
	<label class="col-sm-3 col-lg-3 control-label">{{ upload_label }}</label>
	<div class="col-sm-7 col-lg-7 controls">

		    <div class="fileupload fileupload-new" data-provides="fileupload">
		        <div class="input-group">
		            <div class="form-control uneditable-input">
		                <span class="fileupload-preview"></span>
		            </div>
		            <div class="input-group-btn">
		                <a class="btn bun-default btn-file">
		                    <span class="fileupload-new">Pilih file</span>
		                    <span class="fileupload-exists">Ganti</span>
		                    <input type="file" id="file" name="file" class="file-input"/>
		                </a>
		                <a href="javascript:;" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Hapus</a>
		            </div>
		        </div>
		    </div>
	</div>
	</div>
</form>