 
gc.onShowForm = function(modal,mode,ajax_url,e){
	
	update_ac_data(modal,{},true);
	legend_before(modal,'no_kk_asal','Data Daerah Asal');
	legend_before(modal,'nik_pemohon','Data Pemohon');
	legend_before(modal,'alasan_pindah_no','Data Kepindahan');
	legend_before(modal,'ttd_nama','Data Tanda Tangan');
	attach_ag_after(modal,'status_no_kk_pindah_no');

	var dd_alasan_pindah = $('#field-alasan_pindah_no');
	var div_alasan_pindah_lain = modal.find('div[aria-label=alasan_pindah_lain]');
	if(dd_alasan_pindah.attr('hasChangeHandler') != '1'){
		dd_alasan_pindah.change(function(){
			var alasan_pindah_no = this.value;

			if(alasan_pindah_no == '7'){
				div_alasan_pindah_lain.show();
			}else{
				div_alasan_pindah_lain.hide();
			}
		});
	}
	

	//
	modal.find('a.datepicker-input-clear').parent().contents().eq(4).remove();
	// NO date
	$exchange_field_config = [
		['no','date','2'],
		['rt_asal','rw_asal','1'],
		['kodepos_asal','tlp_asal','1'],
		['no_kk_asal','nama_kk_asal','2'],
		['prop_asal','kab_asal','2'],
		['kec_asal','kel_asal','2'],
		['rt_pindah','rw_pindah','1'],
		['kodepos_pindah','tlp_pindah','1'],
		['prop_pindah','kab_pindah','2'],
		['kec_pindah','kel_pindah','2'],	
		['nik_pemohon','nama_pemohon','2']
	];
	exchange_field_array(modal,$exchange_field_config);


	setTimeout(function(){
		var numeric_fields = ['no_kk_asal','tlp_asal','kodepos_asal','tlp_pindah','kodepos_pindah','rt_asal','rw_asal','rt_pindah','rw_pindah','nik_pemohon'];
		$.each(numeric_fields,function(i,f){

			modal.find('input[name='+f+']').numeric({ negative: false});
		});	

		dd_alasan_pindah.trigger('change');
		modal.removeAttr('tabindex');
		//
		modal.find('input[type=text]').attr('autocomplete','off');
		modal.find('input[name=pindah_antar_disabled]').attr('disabled',true).val('Antar Kecamatan Dalam Satu Kabupaten / Kota');
		modal.find('#field-no_kel').val(gc.default_no_kel);

		
		gc.init_vm(modal,mode,"Keluarga Yang Datang");

		ac_data_penduduk('#field-no_kk_asal','#field-no_kel',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.no_kk);
			if(d.shdk == 'KEPALA KELUARGA'){
				c.find('#field-nama_kk_asal').val(d.nama);
			}else{
				c.find('#field-nama_kk_asal').val(d.nama_kep_kel);
			}
			
			c.find('#field-alamat_asal').val(d.alamat);
			c.find('#field-rt_asal').val(d.rt);
			c.find('#field-rw_asal').val(d.rw);
			c.find('#field-tlp_asal').val(d.telp);
			c.find('#field-prop_asal').val(d.nama_prop);
			c.find('#field-kab_asal').val(d.nama_kab);
			c.find('#field-kec_asal').val(d.nama_kec);
			c.find('#field-kel_asal').val(d.nama_kel);
			
			update_ac_data(modal,get_object_prop_by_key(['id_prov','id_kab','id_kec','id_kel'],d),0,el);
		});
		ac_data_penduduk('#field-nama_kk_asal','#field-no_kel',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama);
			if(c.find('#field-no_kk_asal').val().length == 0){
				c.find('#field-no_kk_asal').val(d.no_kk);
			}
			c.find('#field-alamat_asal').val(d.alamat);
			c.find('#field-rt_asal').val(d.rt);
			c.find('#field-rw_asal').val(d.rw);
			c.find('#field-tlp_asal').val(d.telp);
			c.find('#field-prop_asal').val(d.nama_prop);
			c.find('#field-kab_asal').val(d.nama_kab);
			c.find('#field-kec_asal').val(d.nama_kec);
			c.find('#field-kel_asal').val(d.nama_kel);
			update_ac_data(modal,get_object_prop_by_key(['id_prov','id_kab','id_kec','id_kel'],d),0,el);
		},{ 
			no_kk : function(){
				return modal.find('#field-no_kk_asal').val();
			}
		});
		ac_data_penduduk('#field-nik_pemohon','#field-no_kel',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nik);
			c.find('#field-nama_pemohon').val(d.nama);
		});
		ac_data_penduduk('#field-nama_pemohon','#field-no_kel',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama);
			c.find('#field-nik_pemohon').val(d.nik);
		});
		ac_ttd('#field-ttd_nama','#field-no_kel',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama_pegawai);
			c.find('#field-ttd_nip').val(d.nip_baru);	
			c.find('#field-ttd_jabatan').val(d.nama_jabatan);	
		});

		ac_provinsi('#field-prop_pindah',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_prov',d.id_prov);
			update_ac_data(modal,d,0,el);
		});
		ac_kabupaten('#field-kab_pindah','#field-prop_pindah',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_prov',d.id_prov)
					  .attr('id_kab',d.id_kab);
			update_ac_data(modal,d,0,el);
		});
		ac_kecamatan('#field-kec_pindah','#field-kab_pindah',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_kec',d.id_kec)
					  .attr('id_kab',d.id_kab);
			update_ac_data(modal,d,0,el);		  
		});
		ac_kelurahan('#field-kel_pindah','#field-kec_pindah',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_kec',d.id_kec)
					  .attr('id_kel',d.id_kab);
			update_ac_data(modal,d,0,el);
		});

		/////////////////////////////////////////////////////////////////////////////////////
		ac_provinsi('#field-prop_asal',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_prov',d.id_prov);
			update_ac_data(modal,d,0,el);
		});
		ac_kabupaten('#field-kab_asal','#field-prop_asal',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_prov',d.id_prov)
					  .attr('id_kab',d.id_kab);
			update_ac_data(modal,d,0,el);

		});
		ac_kecamatan('#field-kec_asal','#field-kab_asal',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_kec',d.id_kec)
					  .attr('id_kab',d.id_kab);
			update_ac_data(modal,d,0,el);

		});
		ac_kelurahan('#field-kel_asal','#field-kec_asal',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama)
					  .attr('id_kec',d.id_kec)
					  .attr('id_kel',d.id_kab);
			update_ac_data(modal,d,0,el);

		});
	},10);


}	





