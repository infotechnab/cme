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
           <label> <b>Customer List</b></label> <br/>
         
            <hr/>
             <?php echo anchor('view/addcustomer','Add New Customer');?> <br/> <br/>
            <div class="form">
                <table class="tbllist">
                    <tr class="trlist">
                        <td class="tdlist"> S.N </td>
                        <td class="tdlist">Name</td>
                        <td class="tdlist">Gender</td>
                        <td class="tdlist">Date Of Birth</td>
                        <td class="tdlist"> Address</td>
                        <td class="tdlist">Country</td>
                        <td class="tdlist"> Contact </td>
                        
                        <td class="tdlist">Email</td>
                        <td class="tdlist">Image</td>
                        <td class="tdlist"> Action </td>
                    </tr>
                    <?php foreach ($cuslist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->c_id; ?></td>
                        <td class="tdlist"> <?php echo $data->title." ".$data->fname." ".$data->mname." ".$data->lname; ?></td>
                        <td class="tdlist"> <?php echo $data->gender; ?></td>
                        <td class="tdlist"> <?php echo $data->dob; ?></td>
                        <td class="tdlist"> <?php echo $data->address.", ".$data->vdc.", ".$data->tole.", ".$data->distric.", ".$data->zone; ?></td>
                         <td class="tdlist"> <?php echo $data->country; ?></td>
                          <td class="tdlist"> <?php echo $data->conpersonal.", ".$data->conhome; ?></td>
                          <td class="tdlist"> <?php echo $data->email; ?></td>
                        <td class="tdlist"> <img class="listimg" src="<?php echo base_url()."custmr_detail_image/".$data->image; ?>" /></td>
                        
                        <td class="tdlist"><?php echo anchor('view/editcus/'.$data->c_id,'Edit'); ?> / <?php echo anchor('view/deletecus/'.$data->c_id,'Delete'); ?> </td>
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                
            </div>
        </div>     