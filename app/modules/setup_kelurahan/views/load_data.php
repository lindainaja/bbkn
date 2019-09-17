<?=$this->session->flashdata('pesan')?>
<table class="table table-striped" id="table_adjustment_material" width="100%">
    <thead>
        <tr>
            <th><div align="center">No Kel</div></th>
            <th><div align="center">Kelurahan</div></th>
            <th><div align="center">Lurah</div></th>
            <th><div align="center">Tlp</div></th>
            <th><div align="center">Kodepos</div></th>
            <th><div align="center">Action</div></th>
        </tr>
    </thead>
    <?php
    if(count($result)>0){
    ?>
    <tbody>
        <?php
		$gender = config_item('gender');
        foreach($result as $result_key => $result_val){
        ?>
        <tr>
            <td align="center"><?=$result_val['no_kel']?></td>
            <td><?=$result_val['nama_kel']?></td>
            <td><?=$result_val['nama_lur']?></td>
            <td><?=$result_val['telp']?></td>
            <td><?=$result_val['kodepos']?></td>
            <td align="right">
                    <?php
					if($this->flag_modify_data){
					?>
                        <a class="btn btn-info show-tooltip btn-xs" title="" onclick="edit_data(<?=$result_val['no_prop']?>,<?=$result_val['no_kab']?>,<?=$result_val['no_kec']?>,<?=$result_val['no_kel']?>)" href="javascript:;" data-original-title="Edit Data">
                        <i class="fa fa-edit"></i>
                        </a>
                    <?php
					}
					if($this->flag_delete_data){
					?>
                        <a class="btn btn-danger show-tooltip btn-xs" title="" onclick="hapus_data(<?=$result_val['no_prop']?>,<?=$result_val['no_kab']?>,<?=$result_val['no_kec']?>,<?=$result_val['no_kel']?>)" href="javascript:;" data-original-title="Hapus Data">
                        <i class="fa fa-trash-o"></i>
                        </a>
                    <?php
					}
					?>
            
            </td>
        </tr>
        <?php
        }
        ?>
    
    </tbody>
    <?php
    }
    ?>
</table>
