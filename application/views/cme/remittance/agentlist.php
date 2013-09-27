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
            <label> <b>Remittance Company List</b></label> &nbsp; <?php echo anchor('view/agent','Add New Remittance Company');?> 
         
            <hr/>
            
            <div class="form">
                <table id="cmeTable" class="tbllist">
                    <tr class="trlist">
                        <th class="tdlist"> S.N </th>
                        <th class="tdlist"> Company Name</th>
                       
                        <th class="tdlist"> Address</th>
                        <th class="tdlist"> Contact </th>
                        <th class="tdlist"> Toll Free Number </th>
                         <th class="tdlist">Email</th>
                           <th class="tdlist">Customer ID</th>
                             <th class="tdlist">User ID</th>
                               <th class="tdlist">Access Code</th>
                        <th class="tdlist">Image</th>
                        <th class="tdlist"> Principal Agent</th>
                          <th class="tdlist">Link</th>
                        <th class="tdlist"> Action </th>
                    </tr>
                    <?php $sn=1;
                    foreach ($query as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $sn++; //$data->id; ?></td>
                        <td class="tdlist"> <?php echo $data->a_name; ?></td>
                       
                        <td class="tdlist"> <?php echo $data->a_address; ?></td>
                        <td class="tdlist"> <?php echo $data->a_number; ?></td>
                        <td class="tdlist"> <?php echo $data->t_number; ?></td>
                        <td class="tdlist"> <?php echo $data->a_email; ?></td>
                        <td class="tdlist"> <?php echo $data->cus_id; ?></td>
                        <td class="tdlist"> <?php echo $data->user_id; ?></td>
                        <td class="tdlist"> <?php echo $data->access_code; ?></td>
                        <td class="tdlist"> <img class="listimg" src="<?php echo base_url()."agentimg/".$data->image; ?>" /></td>
                        <td class="tdlist"> <?php echo $data->a_principal; ?></td>
                        <td class="tdlist"> <a href="<?php echo "http://".$data->login; ?>" target="_blank" > Login </a> / <a href="<?php echo "http://". $data->web;  ?>" target="_blank" >Web</a></td>
                        <td class="tdlist"> <?php echo anchor('view/geteditagent/'.$data->id,'Edit'); ?> / <?php echo anchor('view/deleteagent/'.$data->id,'Delete'); ?> </td>
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                 <?php  echo $links; ?>
            </div>
        </div>          