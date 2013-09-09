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
           <label> <b>User List</b></label> <br/>
         
            <hr/>
            
             <?php echo anchor('view/user','Add New User');?>  <br/> <br/>
            <div class="form">
                <table class="tbllist">
                    <tr class="trlist">
                        <td class="tdlist"> S.N </td>
                        <td class="tdlist"> User Name</td>
                        <td class="tdlist"> Role</td>
                        <td class="tdlist"> Branch ID </td>
                      
                        <td class="tdlist"> Action </td>
                    </tr>
                    <?php foreach ($userlist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->u_id; ?></td>
                        <td class="tdlist"> <?php echo $data->uname; ?></td>
                        <td class="tdlist"> <?php echo $data->role; ?></td>
                        <td class="tdlist"> <?php echo $data->id; ?></td>
                        <td class="tdlist"><?php echo anchor('view/getedituser/'.$data->u_id,'Edit'); ?> / <?php echo anchor('view/deleteuser/'.$data->u_id,'Delete'); ?> </td>
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                
            </div>
        </div> 