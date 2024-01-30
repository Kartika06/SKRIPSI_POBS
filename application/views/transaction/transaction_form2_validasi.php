<?php 
error_reporting(0);
$data=$row->row_array();
$row1=$count_item->row_array();
$row2=$count_item_actual->row_array();
$dtbatch=$batch->row_array();

// exit(var_dump($row1));
//  foreach($row->result() as $key => $data) {}
//  foreach($count_item->result() as $key => $row1) {}
//foreach($count_item_actual->result() as $key => $row2) {}
//  foreach ($batch->result() as $dt_batch) {}
//    $counter_item = $dtbatch['complete_batch'];

    $blend_order=ceil($row1['jml_item']/ceil($row1['total_blend']));
    $itungan = intval($dtbatch['complete_batch'] / $blend_order)+1;


// PERUBAHAN BARU //

    // if ($data['batch_no'] == 'PD-3969A-1') {
    //   $counter = $max_count_no['counter']+1;
    // }else{
    //   $counter = substr(ceil($dtbatch['complete_batch'] / $blend_order)+1, 0, 2);
    // }

      $counter = $max_count_no['counter']+1;


    // exit(var_dump($counter));
    // exit(var_dump($dtbatch['complete_batch'],$blend_order,($dtbatch['complete_batch'] / $blend_order)+1));
//    $counter= round($dtbatch['complete_batch'] / $item) + 1;
    $items=$this->transaction_m2->get_item2($data['batch_no'],$counter);
    $item_proses = 0;
    $item = $items->num_rows();

    foreach ($items->result() as $key) {
      if ($key->status == 1) {
        $item_proses++;
      }
    }

    $hitung=round($counter/$row1['jml_item']);
?>     
<style>
  input[type="checkbox"][readonly] {
  pointer-events: none;
}
</style>
<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
  <ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item active">Transaction</li>
  </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
<h3 class="page-header"><b>Transaction Of WIP</b> || <?php echo $data['item_description']; ?></h3>
<!-- begin card -->
            <!-- begin row -->
      <div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-white text-inverse">
            <div class="stats-content">
             
              <div class="stats-title"><span class="badge badge-success">DATE : <?=date("l, d/m/Y")?> / <?php 
              date_default_timezone_set('Asia/Jakarta'); // CDT
              $current_date = date('H');
              if ($current_date >= 7 && $current_date < 15) {
                 echo "SHIFT 1";
              }elseif($current_date >=15 && $current_date < 23) {
                  echo "SHIFT 2";
              }elseif($current_date >=23 && $current_date < 7) {
                  echo "SHIFT 3";
              }else{
                echo "Zona Waktu Alien";
              }
              
              ?></div>
              <div class="form-group row m-b-10">
              <input type="hidden" name="id" value="11">
              </br>
              <input type="hidden" name="id" value="11">
              <label class="col-md-3 col-form-label text-md-right">Batch<span class="text-danger"> :</span></label>
              <div class="col-md-9">
              <input type="text" name="batch_no" value="<?=$data['batch_no']?>" id="bitch" data-parsley-group="step-1" data-parsley-required="true" class="form-control" readonly="true" /> 
            </div>
              </br>
              </br>
              <input type="hidden" name="id" value="11">
              <!--<label class="col-md-3 col-form-label text-md-right">Product<span class="text-danger"> :</span></label>
              <div class="col-md-9">
                
              <input type="text" name="qty" value="<?=$data->item_description?>" data-parsley-group="step-1" data-parsley-required="true" class="form-control" readonly="true" />  </div>-->
              </div>
            </div>
          </div>
        </div>
        <!-- end col-3 -->

        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-6 col-md-6">
          <div class="widget widget-stats bg-white text-inverse">
            <div class="stats-content">
              <div class="stats-title"><span class="badge badge-success"> TRANSACTIONS NOW !!</span></div>
              <div class="form-group row m-b-10">
                <label class="col-md-3 col-form-label text-md-right">Line <span class="text-danger"> :</span></label>
                <div class="col-md-9">
                  <select class="form-control" name="line_proses" required="" id="line_proses">
                    <option value="kosong">--------</option>
                    <option value="Sachet-A">Sachet-A</option>
                    <!-- <option value="Sachet-D">Sachet-D</option> -->
                    <option value="Sachet-E">Sachet-E</option>
                    <option value="Canning">Canning</option>
                    <option value="Jumbo Pack">Jumbo Pack</option>
<!-- 
                    <option value="Blending & Dumping">Blending & Dumping</option>
                    <option value="Spray Drier">Spray Drier</option>
                    <option value="Wet Process">Wet Process</option>
                    <option value="Tote Bin Washing">Tote Bin Washing</option>

 -->                  </select>
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-md-3 col-form-label text-md-right">Bin No <span class="text-danger"> :</span></label>
                <div class="col-md-7">
                  <input type="number" class="form-control" placeholder="Masukan Nomor Bin. . ." required="" readonly="" autofocus="" value="<?=$detail->bin_no?>" id="bin_no" />
                </div>
                <div class="col-md-2">
                  <img id="loading_bin" src="<?=base_url('asset/img/loading.gif')?>">
                </div>
              </div>
              <div class="form-group row m-b-10">
                <input type="hidden" name="id" value="11">
                <label class="col-md-3 col-form-label text-md-right">Scan Me <span class="text-danger"> :</span></label>
                <div class="col-md-9">
                  <input type="text"  id="search" onkeyup="search(this)" placeholder="Typing Code/Name or scan barcode ..." data-parsley-group="step-1" data-parsley-required="true" readonly="" class="form-control"/>
                </div>
              </br>
              </br>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">Type Me <span class="text-danger"> :</span></label>
                <div class="col-md-9">
					<select class="default-select2 form-control" id="manual-ingredient" disabled="">
						<option value="kosong"> </option>
						<?php foreach ($items->result() as $key) { ?>
							<option value="<?=$key->data_barcode?>" ><?=$key->item_code?> : <?=$key->actual_weight?> <?=$key->uom_ingredient?></option>
						<?php } ?>
					</select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->

        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-white text-inverse">
            <div class="stats-content">
              <div class="stats-number" style="">
                <div class="">
                    <font color="red" size="5%"><b><?php echo $item; ?><font size="4%"> item</font></b></font>
                    <font size="5%">/</font>
                    <font color="red" size="5%"><b><?php echo ceil($row1['total_blend']); ?><font size="4%"> Blend</font></b></font>
<!--                    <font color="red" size="5%"><b><?php echo round($row1['total_blend']); ?><font size="4%"> Blend</font></b></font>-->
                  <hr>
                    <font size="4%">item ke- </font>
                    <font color="red" size="5%" id="item"><b><?=$item_proses?></b></font>
                    <font size="4%">Untuk</font>
                    <font size="4%">Blend ke- </font>
                    <font color="red" size="5%" id="batch"><b><?=$counter?></b></font>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end col-3 -->
<!-- end page-header -->
            <div class="col-md-12">       
      <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
          <h4 class="panel-title">Data Transaction </h4>
        </div>
       </br>
     <div>
   </a>
</div>
<!-- default -->
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body table-responsive">
          
            <table id="table_transaction" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align: center;" width="1%">No</th>
                  <th style="text-align: center;" class="text-nowrap">Item Code</th>
                  <th style="text-align: center;" class="text-nowrap">Ingredients</th>
                  <th style="text-align: center;" class="text-nowrap">Qty</th>
                  <th style="text-align: center;" class="text-nowrap">Uom</th>
                  <!--<th style="text-align: center;" class="text-nowrap">Total</th>-->
                  <!--<th style="text-align: center;" class="text-nowrap">Date Weight</th>-->
                  <!--<th style="text-align: center;" class="text-nowrap">Count No</th>-->
                  <th style="text-align: center;" class="text-nowrap"><center>Action</center></th>
                </tr>
              </thead>
            <tbody> 
               <form id="form_transaction" method="POST" action="<?php echo base_url();?>c_transaction2/update_checklist">
              <?php 
                $no = 1;
                  foreach ($items->result() as $datam) {
              ?>
              <tr>
                <?php
                 $barcode_str[] = $datam->data_barcode; 

                 if ($datam->status==1) {
                  $checked = "checked";
                 }else{
                  $checked = "";
                 }
                    //$tetes = explode(',',$barcode_str);
                   //var_dump(explode(',',$data->uom_ingredient));
                ?>
                <input type='hidden' id='barcode' class='barcode' name='barcode' value='<?php echo $datam->data_barcode?>' style='border:0px;background: transparent;' readonly/>
                <input type='hidden' id='batch_no' class='batch_no' name='batch_no' value='<?php echo $datam->batch_no?>' style='border:0px;background: transparent;' readonly/>
                <input type='hidden' id='count_no' class='count_no' name='count_no' value='<?php echo $datam->count_no?>' style='border:0px;background: transparent;' readonly/>
                <input type='hidden' id='validator' class=''  value='' readonly/>
                <td><?php echo $no++ ?>.</td>
                <td><input style="border:none;width:100%;background: none;" type="text" name="item_code" value="<?php echo $datam->item_code; ?>" /></td>
                <td><input style="border:none;width:100%;background: none;" type="text" name="item_description" value="<?php echo $datam->item_description ?>" /></td>
                <td><input style="border:none;width:100%;background: none;text-align: center;" type="text" name="qty_formula" value="<?php echo $datam->actual_weight ?>" /> </td>
                <td><input style="border:none;width:100%;background: none;text-align: center;" type="text" name="uom_formula" value="<?php echo $datam->uom_ingredient ?>" /> </td>
                <!--<td><?php echo $datam->total_blend ?> </td>-->
                <!--<td><?php echo $datam->date_weight ?></td>-->
                <!--<td><?php echo $datam->count_no ?></td>-->
                <td style="text-align: center;"><input style="border:none"  name='check-tab1[]' type="checkbox" id='check-tab1' value="<?php echo $datam->data_barcode ?>" class='check-tab1' <?=$checked?>  readonly></td>
                
              </tr>
            <?php } ?>
              
            </tbody>
            </table>

        </div>
      </div>
        <!-- end panel-body -->
      </div>
      <!-- end panel -->
    <!-- end #content -->
      <!-- begin col-3 
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-stats bg-white text-inverse">
            <div class="stats-content">
              <div class="stats-title">NEW ORDERS</div>
             <div class="form-group row m-b-10">
              <input type="hidden" name="id" value="11">
              </br>
              <input type="hidden" name="id" value="11">
              <label class="col-md-3 col-form-label text-md-right">Grand Total<span class="text-danger"> :</span></label>
              <div class="col-md-9">
              <input type="text" name="qty" placeholder="45kg/20 Item" data-parsley-group="step-1" data-parsley-required="true" class="form-control" readonly="true" /> </div>
              </br>
              </br>
              <input type="hidden" name="id" value="11">
              <label class="col-md-3 col-form-label text-md-right">Transaction<span class="text-danger"> :</span></label>
              <div class="col-md-9">
              <input type="text" name="qty" placeholder="Transaction" data-parsley-group="step-1" data-parsley-required="true" class="form-control" /> </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="widget widget-stats bg-white text-inverse">
            <div class="stats-content">
              <div class="stats-title">Remark:</div>
              <div class="form-group row m-b-15">
                  <div class="col-md-12">
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>
             
            </div>
          </div>
        </div>

        <div class="pull-right">
                      <button type="button" style='padding:5px' id="finish_button" class='btn btn-info btn-sm' onclick="return handleChange();"> Finished</button>
                      <button style="display:none;" type="submit"  id="next_button" class='btn btn-warning btn-sm'>Next Blend</button>

                      <a href='http://localhost/manggaleh/app/transaksi_tunggu/18'><button type='button' style='padding:5px' class='btn btn-warning btn-sm'>(F2) Wait</button></a>
                      <a href='http://localhost/manggaleh/app/transaksi_batal/18'><button type='button' style='padding:5px' class='btn btn-danger btn-sm'>(F3) Cancel</button></a>
                      <a href='http://localhost/manggaleh/app/transaksi_penjualan_print/18' onclick="return popitup('http://localhost/manggaleh/app/transaksi_penjualan_print/18')"><button type='button' class='btn btn-success btn-sm'>(F4) Print <i class='fa fa-print'></i></button></a>
        </div>
      -->
         </form>
                </div>
                  </div>
              </div>
          </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        </div>
      </div>
        <!-- end panel-body -->
      </div>
      <!-- end panel -->
    </div>
    <!-- end #content -->

	<div class="modal fade" id="modal-validasi">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Validasi Manual Input Ingredient</h4>
				</div>
				<div class="modal-body">
					<div class="login-content">
						<form action="" method="POST" class="margin-bottom-0 form-validasi">
							<div class="row form-group m-b-7">
								<label class="col-md-3 col-form-label">Username Leader</label>
								<div class="col-md-9">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text">@</span></div>
										<input type="text" name="username" id="username" class="form-control is-valid" required autofocus />
										<input type="hidden" name="qrcode" id="ingredient-valid" value="">
										
									</div>
								</div>
							</div>

							<div class="row form-group m-b-7">
								<label class="col-md-3 col-form-label">Password Leader</label>
								<div class="col-md-9">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text">@</span></div>
										<input type="password" name="password" id="password" class="form-control is-valid" required />
										
									</div>
								</div>
							</div>
							<!--
							<div class="checkbox checkbox-css m-b-10">
								<input type="checkbox" id="remember_me_checkbox" value="" />
								
								<label for="remember_me_checkbox">
								Remember Me
								</label>
								
							</div>
							<button type="submit" name="check" class="btn btn-success pull-right">Check</button>
							-->
							<div class="form-group">
							<button type="button" class="btn btn-success pull-right" id="tombol-cek" data-dismiss="modal" aria-hidden="true">Check</button>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>


    <script src="<?php echo base_url();?>assets/js/jQuery-2.1.4.min.js"></script>
<!--    <script src="<?php echo base_url();?>transact.js"></script> -->
    <script src="<?php echo base_url();?>assets/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      window.onload = function() {
      // document.getElementById("search").focus();
      };


$(document).ready(function(){
  $('#loading_bin').hide();  

    $('#line_proses').change(function(){
      $('#bin_no').removeAttr('readonly');
      $('#bin_no').focus();
    });

    $('#bin_no').change(function(){
      var bin_no    = $(this).val();
      var batch_no  = "<?php echo $data['batch_no'];?>";

      // cek_isi_bin(bin_no);
        $('#loading_bin').show();
        $.ajax({
            type: 'POST',
            url : "<?php echo base_url();?>index.php/c_transaction2/cek_bin",
            data: {txtBinNumber : bin_no, txtBatchNo : batch_no},
            cache : false,

            success : function(result){
              $('#loading_bin').hide();
              if (result == "Wooops") {
                swal("PERINGATAN!","BIN DARI PLANET NAMEX, TOLONG INPUT KEMBALI !!!","warning");
                $('#bin_no').val('');
                $('#bin_no').focus();
              }else if (result == "sudah blend") {
                swal("PERINGATAN!","BIN SUDAH DI BLENDING, SILAHKAN LANJUTKAN DENGAN BIN YANG LAIN !!!","warning");
                $('#bin_no').val('');
                $('#bin_no').focus();
              }else{
                var str = "<?php echo $data['batch_no'];?>";
                var okp = str.substring(0, 7);
                console.log(result,okp)
                if (okp == result) {
                  $('#search').removeAttr('readonly');
                  $('#manual-ingredient').removeAttr('disabled');
                  $('#search').focus();
                }else{
                  swal("PERINGATAN!","WOOPS SEPERTINYA OKP BERBEDA, TOLONG INPUT DENGAN BENAR !!!","warning");
                  $('#bin_no').val('');
                  $('#bin_no').focus();
                  console.log(result,"<?php echo $data['batch_no'];?>")
                }
              }
            }
        })
      // $('#search').removeAttr('readonly');
      // $('#manual-ingredient').removeAttr('disabled');
      // $('#search').focus();
    });

    $('#manual-ingredient').change(function(){
    	var qrcode = $(this).val();
    	$('#modal-validasi').modal('show');
    	$('#ingredient-valid').val(qrcode);
    });

		$("#tombol-cek").click(function(){
			var data = $('.form-validasi').serialize();
			var kode = document.getElementById("ingredient-valid").value;
			$.ajax({
				type: 'POST',
				url: "<?=base_url()?>c_transaction2/manual_ingredient",
				data: data,
				success: function(hasil) {
				console.log(hasil)
					if (hasil == "berhasil") {
						manual_scan(kode);
					}else if (hasil == "gagal") {
						$(function() {
							$("#username").val("");
							$("#password").val("");
							$(".default-select2 option[value=kosong]").attr('selected', 'selected');
						});
 
						swal("PERINGATAN!","Kesalahan Input Validasi Login Supervisor !!!","error");
					}
				}
			});
		});
    });
   
  </script>
    <script type="text/javascript">
      var array = <?php echo json_encode($barcode_str); ?>;
        var proses = <?php echo $counter; ?>;
        var blend = <?php echo ceil($row1['total_blend']); ?>;
        console.log(blend,proses)

        var batch_no      = "<?php echo $data['batch_no'];?>";
        var formula_no    = "<?php echo $data['formula_no'];?>";
        var formula_desc  = "<?php echo $data['formula_description'];?>";
        var formula_ver   = "<?php echo $data['formula_version'];?>";
        var item_code     = "<?php echo $data['item_code'];?>";
        var item_desc     = "<?php echo $data['item_description'];?>";
        var item_type     = "<?php echo $data['item_type'];?>";
        var qty_actual    = "<?php echo $data['qty_actual'];?>";
        var uom_scale     = "<?php echo $data['uom_scale'];?>";

        if (blend < proses) {
            swal({
              title: "SCAN COMPLETE",
              text: "INGREDIENT TELAH SELESAI DI SCAN !!!",
              icon:"success",
              button: false,
              timer: 3000,
            }).then(function(){
              $.ajax({
                  type: 'POST',
                  url : "<?php echo base_url();?>c_transaction2/complete",
                  data: {batch_no     : batch_no, 
                         formula_no   : formula_no, 
                         formula_desc : formula_desc,
                         formula_ver  : formula_ver,
                         item_code    : item_code,
                         item_desc    : item_desc,
                         item_type    : item_type,
                         qty_actual   : qty_actual,
                         uom_scale    : uom_scale,
                         total_blend  : blend,
                       },
                  cache : false,
                  success : function(data){
                        window.location.href = "<?=site_url('c_transaction2/okp_validasi')?>"            
                  }
              });
            });
        }
      //console.log(array);
    </script>
    <script>
      function search(ele,value) {
        var array = <?php echo json_encode($barcode_str); ?>;
        var proses = <?php echo $counter; ?>;
        var blend = <?php echo $item; ?>;
        var okp = "<?php echo $data['batch_no'];?>";
//        var blend = <?php echo $row2['total_item']; ?>;

        var bin_no = $('#bin_no').val();
        var line_proses = $('#line_proses').val();
        var allCheckBox = $("[id^='check-tab1']");
        var count_checked = allCheckBox.filter(":checked").length;
        var data = $('#form_transaction').serialize();
        var validator = $('#validator').val();
                var inputs = $(".barcode");
                var checkboxes = document.getElementsByClassName("check-tab1");
                var text1  = document.getElementById("search");
                var kode = text1.value
                for(var i = 0; i < array.length; i++){
                  var rieut = array[i];
                  var tes = array.indexOf(text1.value);
                  if(event.key === 'Enter') {
                    console.log(bin_no, line_proses)
                    if (line_proses == 'kosong') {
                      swal("PERINGATAN!","NOMOR BIN PERLU DI ISI !!!","warning");
                    }else if (bin_no == '') {
                      swal("PERINGATAN!","NOMOR BIN PERLU DI ISI !!!","warning");
                    }else{           
                    console.log(array.indexOf(text1.value))           
                        if (array.indexOf(text1.value) >=0 )
                        {
    //                        var kode = text1.value
                            var nilai = count_checked+1
                            var valueAtIndex1 = array[tes];
                            checkboxes[tes].checked = true;
                            ele.value = '';
    //                        $('#form_transaction').submit();

                          console.log(valueAtIndex1)
                          validasi(kode,nilai,bin_no,line_proses);
                          if (nilai==blend) {
                            // input_tracebin("<?=$data['batch_no']?>");
                            swal({
                              title: "SUCCESS",
                              text: "ITEM LENGKAP!",
                              icon: "success",
                              button: false,
                              timer: 2500,
                            }).then(function(){
                                // input_tracebin("<?=$data['batch_no']?>",<?=$counter?>,bin_no);
                                input_tracebin(kode,proses,bin_no,line_proses);
                                window.location.href = "<?=site_url('c_transaction2/transaction/').$data['batch_no']?>"
    //                            $('#form_transaction').submit();
                            });
    //                        swal("SUCCESS","ITEM LENGKAP","success");
                            text1.value = '';
                          }
                        }else{
    //                        validasi_blend(batch,nilai,text1.value);
    //                        swal("PERINGATAN!","CEK, ITEM TIDAK ADA!!!","warning");
                          var error = '';
                          $.ajax({
                              type: 'POST',
                              url : "<?php echo base_url();?>c_transaction2/get_batch_no",
                              data: {kode : kode},
                              cache : false,

                              success : function(batch){
                                if (batch == okp) {
                                  error = 'salah blend';
                                  swal("PERINGATAN!","ITEM Tidak Ada Dalam List Blend !!!","warning");
                                }else{
                                  error = 'item tidak terdaftar';              
                                  swal("PERINGATAN!","CEK, ITEM TIDAK ADA!!!","error");
                                }
                                $.ajax({
                                    type: 'POST',
                                    url : "<?php echo base_url();?>c_transaction2/error_scan",
                                    data: {kode : kode, batch : batch, error : error},
                                    cache : false,
                                });
                              }
                          });
                            ele.value = '';
                        }      
                      }
                    }
                  return false;
                }
              }  

    function validasi(kode,nilai,bin_no,line_proses) {
      $.ajax({
          type: 'POST',
          url : "<?php echo base_url();?>c_transaction2/validasi",
          data: {kode : kode},
          cache : false,

          success : function(data){
            if (data==1) {
            	var error = 'scan 2x';
              swal("PERINGATAN!","ITEM SUDAH DI SCAN !!!","error");
              $.ajax({
                  type: 'POST',
                  url : "<?php echo base_url();?>c_transaction2/error_scan",
                  data: {kode : kode, error : error},
                  cache : false,
              });
            }else{
              $.ajax({
                  type: 'POST',
                  url : "<?php echo base_url();?>c_transaction2/update_checklist",
                  data: {kode : kode, bin :bin_no, line_proses,line_proses},
                  cache : false,

                  success : function(data){
                    $("#item").html('<b>'+nilai+'</b>');
                  }
              });
            }
          }
      });
      return false;
    }
/*
    function validasi_blend(batch,kode) {
      console.log(batch,kode)
      var error = '';
      $.ajax({
          type: 'POST',
          url : "<?php echo base_url();?>c_transaction2/validasi_blend",
          data: {batch : batch, kode : kode},
          cache : false,

          success : function(data){
            console.log(data)
            if (data < 1) {
              console.log(data)
              error = 'berbeda blend';
              swal("PERINGATAN!","ITEM BERBEDA BLEND !!!","warning");
            }else{
              error = 'item bukan material ingredients';              
              swal("PERINGATAN!","CEK, ITEM BUKAN MATERIAL INGREDIENT !!!","error");
            }
              $.ajax({
                  type: 'POST',
                  url : "<?php echo base_url();?>c_transaction2/error_scan",
                  data: {kode : kode, batch : batch, error : error},
                  cache : false,
              });
          }
      });
      return false;
    }
*/

function manual_scan(kode) {
   var array = <?php echo json_encode($barcode_str); ?>;
    var proses = <?php echo $counter; ?>;
    var blend = <?php echo $item; ?>;
    var okp = "<?php echo $data['batch_no'];?>";
    var line_proses = $('#line_proses').val();

    var bin_no = $('#bin_no').val();
    var allCheckBox = $("[id^='check-tab1']");
    var count_checked = allCheckBox.filter(":checked").length;
    var inputs = $(".barcode");
    var checkboxes = document.getElementsByClassName("check-tab1");
	var tes = array.indexOf(kode);
 
	var nilai = count_checked+1
	var valueAtIndex1 = array[tes];
	checkboxes[tes].checked = true;
	$("#manual-ingredient").find('option:selected').remove();
	$("#username").val("");
	$("#password").val("");
    
      console.log(valueAtIndex1)
      validasi(kode,nilai,bin_no);
      if (nilai==blend) {
          // input_tracebin("<?=$data['batch_no']?>",<?=$counter?>,bin_no);
        // input_tracebin("<?=$data['batch_no']?>");
        swal({
          title: "SUCCESS",
          text: "ITEM LENGKAP!",
          icon: "success",
          button: false,
          timer: 2500,
        }).then(function(){
            input_tracebin(kode,proses,bin_no,line_proses);
            window.location.href = "<?=site_url('c_transaction2/transaction/').$data['batch_no']?>"
        });
        text1.value = '';
      }
    };

    function input_tracebin(kode,nilai,bin_no,line_proses){
              var okp = "<?=$data['batch_no']?>";
      console.log(okp,kode,nilai,bin_no,line_proses)
              $.ajax({
                  type: 'POST',
                  url : "<?php echo base_url();?>c_transaction2/input_tracebin",
                  data: {okp : okp, kode : kode, count_no : nilai, bin_no : bin_no, line_proses : line_proses},
                  cache : false,

                  success : function(response){
                    console.log(response)
                    if (response == "berhasil") {
                  // window.location.href = "<?=site_url('c_transaction2/transaction/').$data['batch_no']?>"
                    }else if (response == "yaaaaaah :(") {
                      alert('yaaaaaah :(');
                    }
                  }
              });
    }

    function input_tracebin_old(kode,count_no,bin_no){
              $.ajax({
                  type: 'POST',
                  url : "http://10.175.11.66/smart_tracebin_beta/c_transaction/input_tracebin/",
                  data: {kode : kode, count_no : count_no, bin_no : bin_no},
                  cache : false,

                  success : function(data){
                    console.log(data)
                  }
              });
    }

    function handleChange(input) {
        var allCheckBox = $("[id^='check-tab1']");
        var count_checked = allCheckBox.filter(":checked").length; 
        var text1  = document.getElementById("search");
        if (count_checked == 0)  {
            //swal("Account Removed!", "Your account is removed permanently!", "warning"); 
            swal("PERINGATAN!","ANDA BELUM CEKLIS 1 ITEM PUN!!!","warning");
             text1.value = '';
             return false;
        } else if(count_checked != allCheckBox.length) {
            swal("BAHAYA!","AWAS ADA ITEM TERTINGGAL, PERIKSA KEMBALI!!!","error");
             return false;
        } else{    
           r = confirm("ITEM LENGKAP, klik OK untuk Next Blend!!!"); 
           if(r == true){
              isCheckAll() ? showFirstButton():hideFirstButton();
              isCheckAll() ? hideSecondButton():showSecondButton();
           }else{
              return false;
           }
        }
        
        return false;
        
        

    }

    
    </script>
    <script type="text/javascript">
      function checkALL(){
          var chk_arr =  document.getElementsByName("check-tab1[]");        
          for(k=0;k< chk_arr.length;k++)
          {
              chk_arr[k].checked = true;
          } 
      CheckIfChecked();
      }

      function unCheckALL(){
          var chk_arr =  document.getElementsByName("check-tab1[]");             
          for(k=0;k< chk_arr.length;k++)
          {
              chk_arr[k].checked = false;
          } 
          CheckIfChecked();
      }

      function checkAny(){
          var chk_arr =  document.getElementsByName("check-tab1[]");             
          for(k=0;k< chk_arr.length;k++)
          {
              if(chk_arr[k].checked==true){
              return true;
              }
          } 
          return false;
      }

      function isCheckAll(){
          var chk_arr =  document.getElementsByName("check-tab1[]");             
          for(k=0;k< chk_arr.length;k++)
          {
              if(chk_arr[k].checked==false){
              return false;
              }
          } 
          return true;
      }

      function showFirstButton(){
          document.getElementById('next_button').style.display = "block"; 
      }
      function hideFirstButton(){
          document.getElementById('next_button').style.display = "none"; 
      }
      function showSecondButton(){
          document.getElementById('finish_button').style.display = "block"; 
      }
      function hideSecondButton(){
          document.getElementById('finish_button').style.display = "none"; 
      }
      


      function CheckIfChecked(){
      checkAny() ? showFirstButton():hideFirstButton();
      isCheckAll() ? showSecondButton():hideSecondButton();
      }

    </script>
    


    
              
