/*fn is here */
function legend_before(modal,field_name,legend_text){
    var d_attr = legend_text.toLowerCase().replace(/\s/g,'-');
    var nd = modal.find('div[aria-label='+field_name+']');
    var legend = '<h4 dynamic="'+d_attr+'">'+legend_text+'</h4>';
    nd.before(legend);
}
function attach_after(modal,field_name,html){
    var nd = modal.find('div[aria-label='+field_name+']');
    nd.after(html);
}
function attach_ag_after(modal,field_name,target_field_name,legend_text_index){
    var legend_text = 'legend_text';
    if(typeof legend_text_index != 'undefined'){
        legend_text = 'legend_text['+legend_text_index+']';
    }
    if(typeof target_field_name == 'undefined'){
        target_field_name = 'daftar_keluarga_data';
    }
    var html = '<ag_f_126 :target_field_name="\''+target_field_name+'\'" :dks="dks" :shdks="shdks" :legend_text="'+legend_text+'" :extra_params="extraParams">ag_com_tag</ag_f_126>';
    if(typeof legend_text_index != 'undefined'){
        html = '<ag_f_126 :target_field_name="\''+target_field_name+'\'" :dks="dks['+legend_text_index+']" :shdks="shdks" :legend_text="'+legend_text+'" :extra_params="extraParams">ag_com_tag</ag_f_126>';

    }
    attach_after(modal,field_name,html);
}
//-------------------------------------------------------------------------------
function update_ac_data(modal,data,init,el,extraData){
   
    var ac_data = {
        attr:{
            prop :['id_prov'],
            kab :['id_prov','id_kab'],
            kec :['id_kab','id_kec'],
            kel :['id_kec','id_kel'],
            all :['id_prov','id_kab','id_kec','id_kel'] 
        },
        data:{
            asal:{
                id_prov:0,
                id_kab:0,
                id_kec:0,
                id_kel:0
            },
            pindah:{
                id_prov:0,
                id_kab:0,
                id_kec:0,
                id_kel:0
            }
        }
    };
    if(typeof extraData == 'object'){
        ac_data.data = $.extend(ac_data.data,extraData);
    }
    var ac_node = modal.find('#field-ac_data');
    var ac_data_raw = ac_node.val();
    try{
        ac_data = JSON.parse(ac_data_raw);
    }catch(e){
        
    }
    if(typeof extraData == 'object'){
        var extraData_keys = Object.keys(extraData);
        // var non_existent_extra_data = {};
        $.each(extraData_keys,function(ii,kk){
            if(typeof ac_data.data[kk] == 'undefined'){
                ac_data.data[kk] = extraData[kk];
            }
        });
    }
    if(init){
        if( modal.attr('init_ac_data') != '1' ){
            // var sufixes = ['asal','pindah'];
            var sufixes = Object.keys(ac_data.data);
            for(var k in ac_data.attr){
                var attr_list = ac_data.attr[k];
                $.each(sufixes,function(j,s){
                    var name = k + '_' + s;
                    var selector = '#field-' + name;

                   
                    $.each(attr_list,function(_i,attr_name){
                        var attr_value = ac_data.data[s][attr_name];
                        $(selector).attr(attr_name,attr_value);
                    });
                     
                });
            };

            modal.attr('init_ac_data','1');
        }
        
    }
    var reinit = false;
    if(typeof el != 'undefined' && el != false){
        // console.log(data);
        var field_name = el.replace(/\#field-/,'');
        var k_v = field_name.split('_');
        var cx_k_v = k_v.length;

        if(cx_k_v >= 2){

            var key = k_v[0];
            var suf = k_v[1];

            if(cx_k_v > 2){
                var key_arr = [];
                var max_index = cx_k_v - 1;
                var last_index = max_index;
                suf = k_v[max_index];
                key = 'all';
                reinit =true;
            }    
            for(var ac_key in data){
                var ac_value = data[ac_key];

                for(var k in ac_data.attr){
                    var attr_list = ac_data.attr[k];

                    if(k == key){
                        $.each(attr_list,function(_i,attr_name){

                            if(attr_name == ac_key){
                                ac_data.data[suf][ac_key] = ac_value;
                            }
                        });
                    }
                }
            }
        }  
    }
    ac_node.val(JSON.stringify(ac_data));
    if(reinit){
         modal.attr('init_ac_data','');
        update_ac_data(modal,{},true,false,extraData);
    }
}
/*-------------------------------------------*/
function exchange_field_array(modal,$config){
    for(var i in $config){
        var fields = $config[i];
        var sm = fields.pop(); 
        exchange_fields(modal,fields,sm);
    }
}
function exchange_fields(modal,fields,sm){
    var p_no_1 = modal.find('#field-'+fields[0]).parent();
        p_no_1.addClass('col-sm-3').removeClass('col-sm-9');    
    
    var p_nama_1 = modal.find('#field-'+fields[1]).parent();
    var v_b_c = p_nama_1.attr('v-bind:class');
    var label_nama_1 = p_nama_1.prev().clone().addClass('col-sm-'+sm).removeClass('col-sm-3');
    var uuid = uuidv4();
    var div_nama_1 = '<div id="'+uuid+'"><div/>';   
    var nama_1 = modal.find('#field-'+fields[1]).clone(true);
    var small_1 = p_nama_1.find('small').clone(true);
     
    // p_n
    p_no_1.parent().append(label_nama_1);
    p_no_1.parent().append(div_nama_1);
    modal.find('#'+uuid).empty();
    modal.find('#'+uuid).attr('v-bind:class',v_b_c).addClass('col-sm-3').append(nama_1);

    modal.find('#'+uuid).append(small_1);
    p_nama_1.prev().parent().remove();
} 
function or_minus(obj){
  for (var i in obj) {
    if(obj[i]==''||obj[i]==null){
      obj[i]='';
    }
  }
  return obj;
}
function ac_kelurahan(el,prop_selector,context,callback){
    var args = arguments;
    context.find(el).autocomplete(site_url() + "autocompletes/load_data_kelurahan",{ 
        parse: function(data){
                if(data.length == null)
                {
                    $(el).val('');
                }
                var parsed = new Array();
                for (var i=0; i < data.length; i++) {
                    parsed[i] = {
                        data: data[i],
                        value:  data[i].id_prov
                    };
                }
                return parsed;
        },                                              
       extraParams: {
           q: function () { return context.find(el).val(); },
           id_kec: function () { return context.find(prop_selector).attr('id_kec'); },
           limit: 20
        },                                      
        formatItem: function(data,i,max)
        {
            // var display = 'Pr : '+data.nik;
            // display += '<br/>Nama : '+data.nama;
            // display += '<br/>No KK : '+data.no_kk;
            return data.nama;
        },
        dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
        minChars:1,
        matchSubset:1,
        matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
    }).result(function(event, data,formated) {
        if(typeof callback == 'function'){
            callback(event,or_minus(data),formated,context,args);
        }

    });
}
function ac_kecamatan(el,kab_selector,context,callback){
    var args = arguments;
    context.find(el).autocomplete(site_url() + "autocompletes/load_data_kecamatan",{ 
        parse: function(data){
                if(data.length == null)
                {
                    $(el).val('');
                }
                var parsed = new Array();
                for (var i=0; i < data.length; i++) {
                    parsed[i] = {
                        data: data[i],
                        value:  data[i].id_prov
                    };
                }
                return parsed;
        },                                              
       extraParams: {
           q: function () { return context.find(el).val(); },
           id_kab: function () { return context.find(kab_selector).attr('id_kab'); },
           limit: 20
        },                                      
        formatItem: function(data,i,max)
        {
            // var display = 'Pr : '+data.nik;
            // display += '<br/>Nama : '+data.nama;
            // display += '<br/>No KK : '+data.no_kk;
            return data.nama;
        },
        dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
        minChars:1,
        matchSubset:1,
        matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
    }).result(function(event, data,formated) {
        if(typeof callback == 'function'){
            callback(event,or_minus(data),formated,context,args);
        }

    });
}
function ac_kabupaten(el,prop_selector,context,callback){
    var args = arguments;
    context.find(el).autocomplete(site_url() + "autocompletes/load_data_kabupaten",{ 
        parse: function(data){
                if(data.length == null)
                {
                    $(el).val('');
                }
                var parsed = new Array();
                for (var i=0; i < data.length; i++) {
                    parsed[i] = {
                        data: data[i],
                        value:  data[i].id_prov
                    };
                }
                return parsed;
        },                                              
       extraParams: {
           q: function () { return context.find(el).val(); },
           id_prov: function () { return context.find(prop_selector).attr('id_prov'); },
           limit: 20
        },                                      
        formatItem: function(data,i,max)
        {
            // var display = 'Pr : '+data.nik;
            // display += '<br/>Nama : '+data.nama;
            // display += '<br/>No KK : '+data.no_kk;
            return data.nama;
        },
        dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
        minChars:1,
        matchSubset:1,
        matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
    }).result(function(event, data,formated) {
        if(typeof callback == 'function'){
            callback(event,or_minus(data),formated,context,args);
        }

    });
}

function ac_provinsi(el,context,callback){
    var args = arguments;
    context.find(el).autocomplete(site_url() + "autocompletes/load_data_provinsi",{ 
        parse: function(data){
                if(data.length == null)
                {
                    $(el).val('');
                }
                var parsed = new Array();
                for (var i=0; i < data.length; i++) {
                    parsed[i] = {
                        data: data[i],
                        value:  data[i].id_prov
                    };
                }
                return parsed;
        },                                              
       extraParams: {
           q: function () { return context.find(el).val() },
           limit: 20
        },                                      
        formatItem: function(data,i,max)
        {
            // var display = 'NIK : '+data.nik;
            // display += '<br/>Nama : '+data.nama;
            // display += '<br/>No KK : '+data.no_kk;
            return data.nama;
        },
        dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
        minChars:1,
        matchSubset:1,
        matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
    }).result(function(event, data,formated) {
        if(typeof callback == 'function'){
            callback(event,or_minus(data),formated,context,args);
        }

    });
}
function get_object_prop_by_key(keys,src) {
    var data = {};
    if(typeof src == 'object'){
        for(var k in keys){
            var key = keys[k];
            if(typeof src[key] != 'undefined'){
                data[key] = src[key];
            }
        }
    }
    return data;
}
function ac_data_penduduk(el,no_kel_selector,context,callback,extraParams){
    var args = arguments;
    var _extraParams = {
       q: function () { return context.find(el).val() },
       f: function () { return context.find(el).attr('name') },
       limit: 20,
       no_kel: function () { return context.find(no_kel_selector).val() },
    };
    if(typeof extraParams == 'object'){
        _extraParams = $.extend(_extraParams,extraParams);
    }
    // console.log(_extraParams.q());
    // console.log(_extraParams);
    context.find(el).autocomplete(site_url() + "autocompletes/load_data_penduduk",{ 
        parse: function(data){
                if(data.length == null)
                {
                    $(el).val('');
                }
                var parsed = new Array();
                for (var i=0; i < data.length; i++) {
                    parsed[i] = {
                        data: data[i],
                        value:  data[i].nik
                    };
                }
                return parsed;
        },                                              
       extraParams: _extraParams,                                      
        formatItem: function(data,i,max)
        {
            var display = 'NIK : '+data.nik;
            display += '<br/>Nama : '+data.nama;
            display += '<br/>No KK : '+data.no_kk;
            display += '<br/>SHDK : '+data.shdk;
            return display;
        },
        dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
        minChars:1,
        matchSubset:1,
        matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
    }).result(function(event, data,formated) {
        if(typeof callback == 'function'){
            callback(event,or_minus(data),formated,context,args);
        }

    });
}
function ac_ttd(el,no_kel_selector,context,callback){
    var args = arguments;
    context.find(el).autocomplete(site_url() + "autocompletes/load_data_tdd",
    { 
        parse: function(data){
                if(data.length == null)
                {
                    $(el).val('');
                }
                var parsed = new Array();
                for (var i=0; i < data.length; i++) {
                    parsed[i] = {
                        data: data[i],
                        value:  data[i].nip_baru
                    };
                }
                return parsed;
        },                                              
       extraParams: {
           q: function () { return context.find(el).val() },
           limit: 20,
           no_kel: function () { return context.find(no_kel_selector).val() },
        },                                      
        formatItem: function(data,i,max)
        {
            var display = 'NIP : '+data.nip_baru;
            display += '<br/>Nama : '+data.nama_pegawai;
            display += '<br/>Jabatan : '+data.nama_jabatan;
            return display;
        },
        dataType: "json",
        width:470,
        cacheLength:0,
        delay:10,
        minChars:1,
        matchSubset:1,
        matchContains:1,                                           
        autoFill:false,
        scrollHeight:300,
        
    
    }).result(function(event, data,formated) {
        if(typeof callback == 'function'){
            callback(event,or_minus(data),formated,context,args);
        }
    });
} 
function addCss(fileName,$target) {
   var link = $("<link />",{
     rel: "stylesheet",
     type: "text/css",
     href: fileName
   })
   if(typeof $target!='undefined'){
    $target.append(link);
   }else{
    $('head').append(link);
   }    
}
function fixDataTableClass($target,src_selector){
  var ths = $(src_selector).find('th');
  var classes = [];

  $.each(ths,function(i,th){
    classes.push($(th).attr('field_name'));
  });
  var target_ths = $target.find('th');
  $.each(target_ths,function(i,th){
    $(th).attr('field_name',classes[i]);
  });
  var target_trs = $target.find('tbody > tr');
  $.each(target_trs,function(i,tr){
    var tds = $(tr).find('td');
    $.each(tds,function(i,td){
      $(td).addClass('field-'+classes[i]);
    });
  });
}
function applyInlineCss($target,css_map){
  $.each(css_map,function(selector,inline){
    $target.find(selector).each(function(i,tag){
      // var oldStyle = $(tag).attr('style');
      // if(oldStyle!=''){
        $(tag).attr('style',inline);
      // }
    });
  });
}
function tanggal_indo(tanggal)
{
    // $hari =[     '','Senin',
    //             'Selasa',
    //             'Rabu',
    //             'Kamis',
    //             'Jumat',
    //             'Sabtu',
    //             'Minggu'
    //         ];
            
    var bulan = ['',   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            ];
 
    var split    = tanggal.split('/');
    var tgl_indo = split[0].replace(/^0/,'') + ' ' + bulan[ split[1].replace(/^0/,'') ] + ' ' + split[2];
    
   
    return tgl_indo;
}
/*---------------------------------------------------------------------------------------*/
// function auto_hight_content_body(){
// // setTimeout(function(){
//     var maxHeight = 0;
//     $("div#main-content").each(function(){
//        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
//     });
//     $("div#main-content").height(maxHeight);
// // },10);
// }
function upload_data(pk,url){
    $.ajax({
        type : "POST",
        url : url,
        data : {pk:pk},
        cache : false,
        dataType : "html",
        beforeSend: lock_browser(),
        success : function(data) {
            unlock_browser();
            dialog_upload_data(data,url);
        },
        error : function(xhr, ajaxOptions, thrownError) {
            alert_warning(xhr.statusText);
            alert_warning(thrownError);
        }
    });
}

function dialog_upload_data(tpl_html,url){
    var title = 'Upload File';
    var btn = {Tutup: false, Simpan: true};
    //var btn = {};
    var defaultBtn = 1;
    url = url.replace(/\/upload\//,'/do_upload/');
    var temp = {
        state: {
            title: title,
            html: tpl_html,
            defaultButton: defaultBtn,
            buttons: btn,
            submit: function (e,v,m,f) {
                e.preventDefault();
                if (v == true) {//Save
                    $("#form_upload_data").attr('action',url).submit();
                } else {
                    $.prompt.close();
                }
            }
        },

    }
    
    var p = $.prompt(temp);
    process_upload_data(url);

    $('div.jqiclose').html('<button class="btn btn-inverse btn-flat btn-xs" data-toggle="tooltip" title="Close"><i class="fa fa-times"></i></button>');
    $('div.jqi').css('width', '500px');
    
    

}

function process_upload_data(url){
    var error_messages = {
        'acceptFileTypes' : 'Jenis File Tidak Diperbolehkan'
    };
    $("#form_upload_data").on('submit',(function(e) {
        var file  =  $("#file").val();
        if(file==''){
            alert_warning("Silahkan masukkan file","#file");
        } else {
            var imgname  =  $('input[type=file]').val();
            var imgname  =  $('input[type=file]').val();
            var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );
            var size  =  $('#file')[0].files[0].size;
    
            if( size > 8388608){
                alert_warning("Maksimal ukuran file 8MB","#file");
            } else {
                e.preventDefault();
                $.ajax({
                    url : url,
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: lock_browser(),
                    dataType : "json",
                    success: function(data)
                    {
                        console.log(data);
                        unlock_browser();
                        if(!data.error){
                            $.prompt.close();
                            swal({
                                title:'Informasi',
                                text:data.message,
                                type:'success',
                                html:1
                            });
                        }else{
                            swal({
                                title:'Terjadi Kesalahan',
                                text:data.message,
                                type:'warning',
                                html:1
                            });
                        }
                        
                        // load_data();
                    },
               });
            }
        }
    }));

} 
/*---------------------------------------------------------------------------------------*/
var base_url = site_url();
var dialog_forms = true;
var subject = 'Data';
var displaying_paging_string = "_START_ - _END_ dari _TOTAL_";
var filtered_from_string    = "(filtered from _MAX_ total entries)";
var show_entries_string     = "_MENU_";
var search_string           = "Search";
var list_no_items           = "Tidak ada item";
var list_zero_entries       = "0 - 0 dari 0 ";
var list_loading            = "Mohon Tunggu";
var paging_first    = "Awal";
var paging_previous = '← Prev';
var paging_next     = 'Next → ';
var paging_last     = "Terakhir";
var message_alert_delete = "Apakah anda yakin ingin menghapus data?";
var default_per_page = 10;
var unset_export = false;
var unset_print = false;
var export_text = 'Ekspor';
var print_text = 'Cetak';
var datatables_aaSorting = [[ 0, "asc" ]];

$(document).ready(function(){

Vue.filter('tanggal_indo', function (value) {
    return tanggal_indo(value)
});
Vue.filter('md5', function (value) {
    return md5(value)
});
Vue.component('ag_f_126',{
    props:['dks','shdks','legend_text','extra_params','target_field_name'],
    template:'#f-126-dk-template',
    ready:function(){
        // console.log(this.$get('shdks'));
        this.$nextTick(function(){
            this.update_ac();
        });
    },

    methods:{
        addRow:function(index){
            var dks = this.$get('dks');
            dks.push({nik:'',nama:'',shdk:''});
            this.$set('dks',dks);
            this.$nextTick(function(){
                this.update_ac();
            });
        },
        deleteRow: function(index){
            var dks = this.$get('dks');
            if (dks.length > 1) {
              dks.splice(index, 1);
            }
            this.$set('dks',dks);
            this.$nextTick(function(){
                this.update_ac();
            });
        },
        uniqid:function(prefix,index){
            var target_field_name = this.$get('target_field_name');
            return '#'+prefix+'_'+target_field_name+'_'+index.toString();
        },
        get_ctx:function(prefix,id){
            var target_field_name = this.$get('target_field_name');

            var rgx = new RegExp('\#'+prefix+'_'+'([a-zA-Z]+)'+'_'+target_field_name+'_\\d+');
            return id.replace(rgx,'$1');
        },
        update_ac:function(){
            var self = this;
            var context = $('.modal');
            var cls = 'input.ag-nik';
            var target_field_name = self.$get('target_field_name');
            $.each(this.dks,function(i,v){
                var ag_nik_id  = self.uniqid('ag_nik',i);
                var ag_nama_id = self.uniqid('ag_nama',i);
                //var ag_shdk_id = '#ag_shdk'+i;
                var aceds = [ag_nik_id,ag_nama_id];
                var _extraParams = self.$get('extra_params');
                
                if(typeof _extraParams != 'object'){
                    _extraParams = {};
                }
                $.each(aceds,function(j,id){
                    if(!context.find(id).hasClass('ac_input')){
                            var ctx  = self.get_ctx('ag',id);
                            if(ctx == 'nik'){
                                context.find(id).numeric({negatif:0});
                            };
                            var extraParam = typeof _extraParams[ctx] != 'undefined' ? _extraParams[ctx] : {};
                            ac_data_penduduk(id,'#field-no_kel',context,function(e,d,f,c,a){
                            var nd   = context.find(a[0]);
                            var p_nd = nd.closest('.form-group');
                            
                            // console.log(ctx);
                            switch(ctx){
                                case 'nik':
                                    nd.val(d.nik).trigger('change');
                                    p_nd.find('input.ag-nama').val(d.nama).trigger('change');
                                    p_nd.find('input.ag-shdk').val(d.shdk).trigger('change');
                                break;
                                case 'nama':
                                    nd.val(d.nama).trigger('change');
                                    p_nd.find('input.ag-nik').val(d.nik).trigger('change');
                                    p_nd.find('input.ag-shdk').val(d.shdk).trigger('change');
                                break;
                            }
                            self.update_form_data();
                            
                        },extraParam);
                    }
                        
                });
            });
            this.update_form_data();
        },
        update_form_data:function(){
            var target_field_name = this.$get('target_field_name');

            var context = $('.modal');
            var dks_raw = JSON.stringify(this.$get('dks'));
            // console.log(dks_raw);
            var selector = '#field-'+target_field_name;
            // console.log(selector);
            context.find(selector).val(dks_raw);
        },
        validate_form: function(){
            var target_field_name = this.$get('target_field_name');
            

            var dks = this.$get('dks'); 
            var error = false;
            var error_message = '';
            var error_key = '';
            var index = 0;
            for(var i in dks){
                index = i;
                var row = dks[i];

                if(row.nik.length < 16){
                    error_key = 'nik';
                    error = 1;
                    error_message = 'NIK minimal 16 karakter dan harus berupa angka';
                    break;
                }
                if(row.nik.length < 3){
                    error_key = 'nama';
                    error = 1;
                    error_message = 'Nama minimal 3 karakter alphabet';
                    break;
                }
                if(row.shdk.length < 4){
                    error_key = 'shdk';
                    error = 1;
                    error_message = 'Nama minimal 3 karakter alphabet';
                    break;
                }
            }
            return {e:error,m:error_message,f:error_key,i:index,s:'#ag_'+target_field_name+error_key+index};
        }
    }
});
// gc.init_ag_f_126('B');

/**-------------------------------------------------------------------------------------*/ 

App.blockUI = function(){
    console.log('blockUI called');
    indikator_sibuk();
}

App.unblockUI = function(){
    console.log('unblockUI called');
    indikator_stop();
}
gc.onUploadCallback = function(el){
    var upload_url = $(el).attr('url');
    var pk = upload_url.replace(/.*(\d)+/,'$1');
    upload_data(pk,upload_url);
};
gc.beforeSaveCallback = function($form,submit_fn){
    var continue_process = false;

    var validation = gc.form_vm.$children[0].validate_form();
    if(validation.e){
        // swal('Ooops...',validation.m,'warning');
        swal({
          title: "Ooops...",
          text: validation.m,
          type: "warning",
          showCancelButton: false,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Ok",
          closeOnConfirm: true
        },
        function(){
          setTimeout(function(){
           $(validation.s).focus();
          },500);
        });
        
    }else{
        continue_process = 1;
    }
    return continue_process;
} 
/**gc function */
gc.init_vm = function(modal,mode,legend_text,extraParams,dk_nodes){
    // console.log(dk_nodes);
    var tmp_shdk = [
        {nik:'',nama:'',shdk:''}
    ];
    var _dks = [];
    var multiple = false;
    var dk_node = [];
    var dk_raw = [];

    if(typeof dk_nodes != 'undefined'){
        if($.isArray(dk_nodes)){

            multiple = true;
               
            var prefix = 'field-';
            

            $.each(dk_nodes,function(i,field_name){
                var selector = '#' + prefix + field_name;
                var nd = modal.find(selector);
                dk_node.push(nd);
                dk_raw.push(nd.val());
            });
        }

    }else{
        dk_node = modal.find('#field-daftar_keluarga_data');
        dk_raw = dk_node.val();
    }
    if(multiple){
        _dks = [];
        $.each(dk_raw,function(i,raw_value){
            try{
                _dks[i] = JSON.parse(raw_value);
            }catch(e){
                _dks[i] =  tmp_shdk.slice(0);
            }
        }); 
    }else{
        try{
            _dks = JSON.parse(dk_raw);
        }catch(e){
            _dks =  tmp_shdk.slice(0);
        }
    }
    
    // console.log(_dks);
    gc.form_vm = new Vue({
        el:'#modalForm',
        data:{
          verror:{},
          dks:_dks,
          shdks: gc.opt.shdks,
          legend_text: legend_text,
          extraParams: extraParams
        },
        ready:function(){

        }
    });
};
gc.onDownloadCallback = function(d){
    var download_url = d.success_list_url.replace(/\/success\//,'/download/');

    var iframe = $('iframe#'+gc.activeIframeDlId);
        iframe.attr('src',download_url);
    // // $('btn.refresh-data').click();
    // setTimeout(function(){
    //     console.log('refreshing data');
    //     $('#'+gc.uniqid_table+'_wrapper').parent().find('button.btn.refresh-data').trigger('click');
    // },500);
}

/**end of gc function****/
    
     $("#filter_date").datepicker({
        autoclose: true,
        clearBtn: true,
        format: 'mm/yyyy',
        todayHighlight: true,
        minViewMode: 1,
        language:'id'
    });


    var PD = new Vue({
        el: '#PD',
        data:{
            //s=selector,t=target,c=caption,h=heaer
            filter: gc.getActiveFilterData(),
            filter_form_action_url:'',
            active_h:'',
            active_index:0,
            subject:'Data',
            tabs:[
                
                {s :{t:'f_126',c:'F.1-26'},h:'FORMULIR KETERANGAN PINDAH WNI',sub:'Antar Desa / Kelurahan Dalam Satu Kecamatan '},
                {s :{t:'f_128',c:'F.1-28'},h:'FORMULIR KETERANGAN PINDAH DATANG WNI',sub:'Antar Desa / Kelurahan Dalam Satu Kecamatan '},
                {s :{t:'f_130',c:'F.1-30'},h:'FORMULIR KETERANGAN PINDAH WNI',sub:'Antar Kecamatan Dalam Satu Kabupaten / Kota '},
                {s :{t:'f_131',c:'F.1-31'},h:'FORMULIR KETERANGAN PINDAH DATANG WNI',sub:'Antar Kecamatan Dalam Satu Kabupaten / Kota'},
                {s :{t:'f_129',c:'F-1.29'},h:'FORMULIR KETERANGAN PINDAH WNI',sub:'Antar Kecamatan Dalam Satu Kabupaten / Kota'},
                {s :{t:'f_132',c:'F-1.32'},h:'FORMULIR KETERANGAN PINDAH DATANG WNI',sub:'Antar Kecamatan Dalam Satu Kabupaten / Kota'},
                {s :{t:'f_134_133',c:'F.1-34 & F.1-33'},h:'FORMULIR PERMOHONAN PINDAH WNI',sub:'Antar Kabupaten / Kota atau Antar Provinsi'},
                {s :{t:'f_136_135',c:'F.1-36 & F.1-35'},h:'FORMULIR PERMOHONAN PINDAH WNI',sub:'Antar Kabupaten / Kota atau Antar Provinsi'},
                {s :{t:'f_137',c:'F-1.37'},h:'SURAT KETERANGAN PINDAH WNI',sub:'Antar Kabupaten / Kota atau Provinsi'},
                {s :{t:'f_138',c:'F-1.38'},h:'FORMULIR PERMOHONAN PINDAH DATANG WNI',sub:'Antar Kabupaten dan Antar Provinsi'},
                {s :{t:'f_139',c:'F-1.39'},h:'FORMULIR PERMOHONAN PINDAH DATANG WNI',sub:'Antar Kabupaten dan Antar Provinsi'},
                {s :{t:'f_108',c:'F-1.08'},h:'KETERANGAN PINDAH-DATANG WNI',sub:''}

            ]

        },
        ready:function(){
            $(".nav-tabs a").click(function(e){
                $(this).tab('show');
                var index = parseInt($(this).attr('index'));
                PD.setActiveIndex(index);
                PD.loadData();
                e.preventDefault();
                return false;
            });
            
            setTimeout(function(){
                $($(".nav-tabs a").get(gc.ACTIVE_TAB_INDEX)).click();
            },10);
        },
        methods:{
            loadData:function(){
                App.blockUI();
                this.setFilter();
                this.renderTabGrid();

            },
            setFilter:function(){
                var tab = this.getActiveTabData();
                var date = $("#filter_date").data("datepicker").getDate();
                PD.filter.bulan  = date.getMonth()+1;
                PD.filter.tahun  = date.getFullYear();
                PD.filter.no_kel = $('#filter_no_kel').val();
                var cookie_key = 'filter_'+tab.s.t;
                // console.log(cookie_key);
                $.cookie(cookie_key,JSON.stringify(PD.filter));
            },
            setActiveIndex:function(index){
                this.$set('active_index',index);
            },
            getActiveTabData: function(){
                return PD.tabs[PD.active_index];
            },
            renderTabGrid:function(){
                var tab = this.getActiveTabData();
                var fnk = $("#filter_no_kel");
                if(!fnk.attr('hasSelect2')){
                    fnk.select2({});
                    fnk.attr('hasSelect2','1');
                    // console.log('reinit select2');
                }
                
                //console.log(tab);
                var url_proxy = site_url()+'pindah-datang/grid/'+tab.s.t;
                var url_export_proxy = site_url()+'pindah-datang/export/'+tab.s.t;
                this.$set('filter_form_action_url',url_export_proxy);
                // console.log(url_proxy);
                // <-- AJAX -->
                this.$http({url: url_proxy, method: 'GET'})
                .then(function (response) {
                    App.unblockUI();

                    // console.log(response)
                    // success callback
                    var data = response.data;
                    $('.old-dt-entries').empty();
                    $('#'+tab.s.t).addClass('old-dt-entries').html(data);
                   
                }, function (response) {
                    // error callback
                    App.unblockUI();

                    var data = response.data;
                    swal('Terjadi Kesalahan',data,'warning');

                });
            }
        }
        
    });

});
