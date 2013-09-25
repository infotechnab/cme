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
            <label> <b>User List</b></label> &nbsp;  <?php echo anchor('view/user','Add New User');?> 
         
            <hr/>
            
            
            <div class="form">
                <table id="cmeTable" class="tbllist">
                    <tr class="trlist">
                        <th class="tdlist"> S.N </th>
                        <th class="tdlist"> User Name</th>
                        <th class="tdlist"> Role</th>
                        <th class="tdlist"> Branch ID </th>
                      
                        <th class="tdlist"> Action </th>
                    </tr>
                    
                    <?php  $sn = 1;
                    foreach ($userlist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $sn++; //$data->u_id; ?></td>
                        <td class="tdlist"> <?php echo $data->uname; ?></td>
                        <td class="tdlist"> <?php echo $data->role; ?></td>
                        <td class="tdlist"> <?php echo $data->id; ?></td>
                        <td class="tdlist"><?php echo anchor('view/getedituser/'.$data->u_id,'Edit'); ?> / <?php echo anchor('view/deleteuser/'.$data->u_id,'Delete'); ?> </td>
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                 <?php  echo $links; ?>
                
            </div>
        </div> 