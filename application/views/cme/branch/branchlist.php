       <div class="cme">   <p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
  echo validation_errors();
  if(isset($error))
  {
      echo $error;
  }
  ?>
    </p> 
       </div>
        <div class="cus_search_list">
            <label> <b>Branch List</b></label> &nbsp; <?php echo anchor('view/branch','Add New Branch');?>
         
            <hr/>
            
            <div class="form">
                <table class="tbllist">
                    <tr class="trlist">
                        <td class="tdlist"> S.N </td>
                        <td class="tdlist"> Branch Name</td>
                        <td class="tdlist"> Branch Title</td>
                        <td class="tdlist"> Branch Code</td>
                        <td class="tdlist"> Contact Person</td>
                        <td class="tdlist"> Contact Number </td>
                        
                        <td class="tdlist"> Address</td>
                        <td class="tdlist"> Action </td>
                    </tr>
                    <?php foreach ($blist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->id; ?></td>
                        <td class="tdlist"> <?php echo $data->b_name; ?></td>
                        <td class="tdlist"> <?php echo $data->b_title; ?></td>
                        <td class="tdlist"> <?php echo $data->b_code; ?></td>
                        <td class="tdlist"> <?php echo $data->person; ?></td>
                        <td class="tdlist"> <?php echo $data->ph_number.",".$data->mb_number; ?></td>
                        
                        <td class="tdlist"> <?php echo $data->address; ?></td>
                        <td class="tdlist"> <?php echo anchor('view/editbranch/'.$data->id,'Edit'); ?> / <?php echo anchor('view/deletebranch/'.$data->id,'Delete'); ?> </td>
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                 <?php  echo $links; ?>
                
            </div>
        </div>          