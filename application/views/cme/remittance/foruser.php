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
           <label> <b>Remittance Company List</b></label> <br/>
         
            <hr/>
             
            <div class="form">
                <table class="tbllist">
                    <tr class="trlist">
                        <td class="tdlist"> S.N </td>
                        <td class="tdlist"> Company Name</td>
                        <td class="tdlist"> Nepali Name</td>
                        <td class="tdlist"> Address</td>
                        <td class="tdlist"> Contact </td>
                        
                        <td class="tdlist">Email</td>
                        <td class="tdlist">Image</td>
                        <td class="tdlist"> Principal Agent</td>
                        
                    </tr>
                    <?php foreach ($query as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->id; ?></td>
                        <td class="tdlist"> <?php echo $data->a_name; ?></td>
                        <td class="tdlist"> <?php echo $data->n_name; ?></td>
                        <td class="tdlist"> <?php echo $data->a_address; ?></td>
                        <td class="tdlist"> <?php echo $data->a_number; ?></td>
                        <td class="tdlist"> <?php echo $data->a_email; ?></td>
                        <td class="tdlist"> <img class="listimg" src="<?php echo base_url()."agentimg/".$data->image; ?>" /></td>
                        <td class="tdlist"> <?php echo $data->a_principal; ?></td>
                       
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                
            </div>
        </div>          