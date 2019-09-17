 <!-- <select class="form-control select2" type="text" name="ag_shdk" v-model="o.shdk">
                            <option v-for="(k,v) in shdks" value="k"><span v-text="v"></span></option>
                        </select>   --> 
<template  id="f-126-dk-template">
    <h4><span v-text="legend_text"></span></h4>
    <div class="f-126-dk">
        <div class="form-group" v-for="o in dks" index="'row-'+$index">
            <div class="row">
                <div class="col-lg-10">
                    <label class="control-label col-lg-1"><span v-text="$index+1"></span>.</label>
                    <div class="col-sm-3">
                        <input v-bind:id="'ag_nik_'+target_field_name+'_'+$index" v-bind:class="{'form-control':1, 'ag-nik':1,'error':o.nik.length<16}" type="text" placeholder="NIK" v-model="o.nik"/>
                    </div>
                    <div class="col-sm-4">
                        <input v-bind:id="'ag_nama_'+target_field_name+'_'+$index" v-bind:class="{'form-control':1, 'ag-nama':1,'error':o.nama.length<3}" type="text" placeholder="Nama"  v-model="o.nama"/>
                    </div>
                    <div class="col-sm-4">
                        
                        <input v-bind:id="'ag_shdk_'+target_field_name+'_'+$index" v-bind:class="{'form-control':1, 'ag-shdk':1,'error':o.shdk.length<4}" type="text" placeholder="Nama"  v-model="o.shdk"/>

                    </div>
                </div>
                <div class="col-lg-2">
                    <a class="btn btn-info" @click="addRow($index)"><i class="fa fa-plus"></i></a>
                    <a v-if="$index>0" class="btn btn-danger" @click="deleteRow($index)"><i class="fa fa-minus"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>