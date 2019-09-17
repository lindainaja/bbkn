 

gc.onShowForm = function(modal,mode,ajax_url,e){
	
	update_ac_data(modal,{},true);
	legend_before(modal,'no_kk_asal','Data Daerah Asal');
	legend_before(modal,'nik_pemohon','Data Pemohon');
	legend_before(modal,'status_no_kk_pindah_no','Data Daerah Tuj;uan');
	legend_before(modal,'ttd_nama','Data Tanda Tangan');
	attach_ag_after(modal,'kodepos_pindah');
	modal.find('a.datepicker-input-clear').parent().contents().eq(4).remove();
	$exchange_field_config = [
		['no','date','2'],
		['rt_asal','rw_asal','1'],
		['no_kk_asal','nama_kk_asal','2'],
		['prop_asal','kab_asal','2'],
		['kec_asal','kel_asal','2'],
		['rt_pindah','rw_pindah','1'],
		['no_kk_pindah','nik_kep_kel_pindah','2'],
		['nama_kep_kel_pindah','tgl_kedatangan','2'],
		['prop_pindah','kab_pindah','2'],
		['kec_pindah','kel_pindah','2'],	
		['nik_pemohon','nama_pemohon','2']
	];
	exchange_field_array(modal,$exchange_field_config);

	$('#field-kodepos_asal').parent().removeClass('col-sm-9').addClass('col-sm-3');
	$('#field-kodepos_pindah').parent().removeClass('col-sm-9').addClass('col-sm-3');

	setTimeout(function(){
		var numeric_fields = ['no_kk_asal','tlp_asal','kodepos_asal','kodepos_pindah','rt_asal','rw_asal','rt_pindah','rw_pindah','nik_pemohon','no_kk_pindah','nik_kep_kel_pindah'];
		$.each(numeric_fields,function(i,f){

			modal.find('input[name='+f+']').numeric({ negative: false});
		});	

		modal.removeAttr('tabindex');
		//
		modal.find('input[type=text]').attr('autocomplete','off');
		modal.find('input[name=pindah_antar_disabled]').attr('disabled',true).val('Antar Kabupaten dan Antar Provinsi');
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
		ac_data_penduduk('#field-nama_kep_kel_pindah','#field-no_kel',modal,function(e,d,f,c,a){
			var el = a[0];
			c.find(el).val(d.nama);
			c.find('#field-nik_kep_kel_pindah').val(d.nik);
			c.find('#field-no_kk_pindah').val(d.no_kk);
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

