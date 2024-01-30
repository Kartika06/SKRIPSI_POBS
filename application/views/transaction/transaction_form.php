<?php 
error_reporting(0);
$data=$row->row_array();
$row1=$count_item->row_array();
$row2=$count_item_actual->row_array();
//$batch=$dt_batch->row_array();
//  foreach($row->result() as $key => $data) {}
//  foreach($count_item->result() as $key => $row1) {}
//foreach($count_item_actual->result() as $key => $row2) {}
//  foreach ($batch->result() as $dt_batch) {}
    $counter = $batch->num_rows()+1;
    $items=$this->transaction_m2->get_item($data['batch_no'],$counter);
    $item=round($row1['jml_item']/$row1['total_blend']);
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
              <input type="text" name="batch_no" value="<?=$data['batch_no']?>" data-parsley-group="step-1" data-parsley-required="true" class="form-control" readonly="true" /> 
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
                <input type="hidden" name="id" value="11">
                <label class="col-md-3 col-form-label text-md-right">Scan Me <span class="text-danger"> :</span></label>
                <div class="col-md-9">
                <input type="text" autocomplete="off" id="search" onkeyup="search(this)" placeholder="Typing Code/Name or scan barcode ..." data-parsley-group="step-1" data-parsley-required="true" class="form-control"/>
              </div>
              </br>
              </br>
              <input type="hidden" name="id" value="11">
              <!--<label class="col-md-3 col-form-label text-md-right">QTY<span class="text-danger"> :</span></label>
              <div class="col-md-3">
              <input type="text" name="qty" placeholder="Qty" data-parsley-group="step-1" data-parsley-required="true" class="form-control" /> </div>
              <button type="button" class="btn btn-success btn-sm fa fa-shopping-cart pu"> Check Out</button>-->
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
                    <font color="red" size="5%"><b><?php echo round($row1['total_blend']); ?><font size="4%"> Blend</font></b></font>
                  <hr>
                    <font size="4%">item ke- </font>
                    <font color="red" size="5%" id="item"><b>0</b></font>
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
               <form id="form_transaction" method="POST" action="<?php echo base_url();?>c_transaction/simpan_data">
              <?php 
                $no = 1;
                  foreach ($items->result() as $datam) {
              ?>
              <tr>
                <?php
                 $barcode_str[] = $datam->data_barcode; 
                    //$tetes = explode(',',$barcode_str);
                   //var_dump(explode(',',$data->uom_ingredient));
                ?>
                <input type='hidden' id='barcode' class='barcode' name='barcode[]' value='<?php echo $datam->data_barcode?>' style='border:0px;background: transparent;' readonly/>
                <input type='hidden' id='batch_no' class='batch_no' name='batch_no' value='<?php echo $datam->batch_no?>' style='border:0px;background: transparent;' readonly/>
                <input type='hidden' id='count_no' class='count_no' name='count_no' value='<?php echo $datam->count_no?>' style='border:0px;background: transparent;' readonly/>
                <input type='hidden' id='validator[]' class=''  value='' readonly/>
                <td><?php echo $no++ ?>.</td>
                <td><input style="border:none;width:100%;background: none;" type="text" name="item_code" value="<?php echo $datam->item_code; ?>" /></td>
                <td><input style="border:none;width:100%;background: none;" type="text" name="item_description" value="<?php echo $datam->item_description ?>" /></td>
                <td><input style="border:none;width:100%;background: none;text-align: center;" type="text" name="qty_formula" value="<?php echo $datam->actual_weight ?>" /> </td>
                <td><input style="border:none;width:100%;background: none;text-align: center;" type="text" name="uom_formula" value="<?php echo $datam->uom_ingredient ?>" /> </td>
                <!--<td><?php echo $datam->total_blend ?> </td>-->
                <!--<td><?php echo $datam->date_weight ?></td>-->
                <!--<td><?php echo $datam->count_no ?></td>-->
                <td style="text-align: center;"><input style="border:none"  name='check-tab1[]' type="checkbox" id='check-tab1' value="<?php echo $datam->data_barcode ?>" class='check-tab1'  readonly></td>
                
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
            <!-- begin col-3 -->
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
        <!-- end col-3 -->
         <!-- begin col-3 -->
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
        <!-- end col-3 -->
        <div class="pull-right">
                      <button type="button" style='padding:5px' id="finish_button" class='btn btn-info btn-sm' onclick="return handleChange();"> Finished</button>
                      <button style="display:none;" type="submit"  id="next_button" class='btn btn-warning btn-sm'>Next Blend</button>
                      <!--
                      <a href='http://localhost/manggaleh/app/transaksi_tunggu/18'><button type='button' style='padding:5px' class='btn btn-warning btn-sm'>(F2) Wait</button></a>
                      <a href='http://localhost/manggaleh/app/transaksi_batal/18'><button type='button' style='padding:5px' class='btn btn-danger btn-sm'>(F3) Cancel</button></a>
                      <a href='http://localhost/manggaleh/app/transaksi_penjualan_print/18' onclick="return popitup('http://localhost/manggaleh/app/transaksi_penjualan_print/18')"><button type='button' class='btn btn-success btn-sm'>(F4) Print <i class='fa fa-print'></i></button></a>-->
        </div>

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
    <script src="<?php echo base_url();?>assets/js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>transact.js"></script>
    <script src="<?php echo base_url();?>assets/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      window.onload = function() {
      document.getElementById("search").focus();
      };

  </script>
    <script type="text/javascript">
      var array = <?php echo json_encode($barcode_str); ?>;
        var proses = <?php echo $hitung; ?>;
        var blend = <?php echo round($row1['total_blend']); ?>;
        if (proses==blend) {
            swal("SUCCESS","SCAN COMPLETE","success");
            text1.value = '';
            window.location.href = "<?=site_url('c_transaction/')?>"
      }
      //console.log(array);
    </script>
    <script>
      function search(ele,value) {
//        var validator = [];
        var array = <?php echo json_encode($barcode_str); ?>;
        var proses = <?php echo $counter; ?>;
        var blend = <?php echo $row2['total_item']; ?>;
        var allCheckBox = $("[id^='check-tab1']");
        var count_checked = allCheckBox.filter(":checked").length;
        var data = $('#form_transaction').serialize();
        var validator = { data:[] };
        var validator = $('#validator').val();
                var inputs = $(".barcode");
                var checkboxes = document.getElementsByClassName("check-tab1");
                var text1  = document.getElementById("search");
                for(var i = 0; i < array.length; i++){
                  var rieut = array[i];
                  var tes = array.indexOf(text1.value);
                  if(event.key === 'Enter') {
                      if (validator==text1.value) {
                        swal("WOOOPS","ITEM BARU SAJA DI SCAN","warning");
                        text1.value = '';
                      }else if (array.indexOf(text1.value) >=0 )
                    {
                      var variable = text1.value
                        $('#validator').add("variable");
                      console.log(variable)
                        var valueAtIndex1 = array[tes];
                        checkboxes[tes].checked = true;
                        ele.value = '';
                        var nilai = count_checked+1
                        $("#item").html('<b>'+nilai+'</b>');
                      if (nilai==blend) {
                        swal({
                          title: "SUCCESS",
                          text: "ITEM LENGKAP!",
//                          icon: "<?php echo site_url('assets/slim/lib/sweetalert/icon/cancel.svg'); ?>",
                          type:"success",
                          button: false,
                          timer: 3000,
                        }).then(function(){
                            $('#form_transaction').submit();
                        });
//                        swal("SUCCESS","ITEM LENGKAP","success");
                        text1.value = '';
/*
                        $.ajax({
                            type: 'POST',
                            url : "<?php echo base_url();?>c_transaction/simpan_data",
                            data: data,
                            cache : false,
                            success : function(data){
                              die();
//                                window.location.href = "<?=site_url('c_transaction/transaction/'.$data->batch_no.'/')?>"
                            }
                        });
*/
                      }
                    }else{
                        swal("PERINGATAN!","CEK, ITEM TIDAK ADA!!!","warning");
                        ele.value = '';
                    }
                  
                  }
                  return false;
                }
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
    


    
              
