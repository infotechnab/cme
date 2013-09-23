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
             <lable>Search Customer</lable> 
                <?php echo form_open('view/searchcus');?>
                    <input type="text" name="id"  placeholder="ID" />
                    <input type="text" name="cusname"  placeholder="Name" />
                    
                   <input type="text" name="address"  placeholder="Address" />
                    <input type="text" name="phone"  placeholder="Phone Number" />
                    
                    <select name="branch">
                        <option value="">Branch...</option>
                        <?php foreach ($branch as $data)
                        {?><option value="<?php echo $data->b_name; ?>"><?php echo $data->b_name; ?></option> <?php } ?>
                        
                    </select>
                   
                    <input type="submit" name="search" value="Search" />
                    
               <?php echo form_close(); ?>
                    
             <?php echo anchor('view/addcustomer','Add New Customer');?> <br/> <br/>
            <div class="form">
                <table class="tbllist">
                    <tr class="trlist">
                        <td class="tdlist"> S.N </td>
                        <td class="tdlist">ID</td>
                        <td class="tdlist">Name</td>
                        <td class="tdlist"> Address</td>
                        <td class="tdlist"> Contact </td>
                         <td class="tdlist">Image</td>
                        <td class="tdlist"> Action </td>
                    </tr>
                    <?php foreach ($cuslist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->c_id; ?></td>
                         <td class="tdlist"> <?php echo $data->full_id; ?></td>
                        <td class="tdlist"> <?php echo $data->title." ".$data->fname." ".$data->mname." ".$data->lname; ?></td>
                       
                        
                        <td class="tdlist"> <?php echo $data->address.", ".$data->vdc.", ".$data->tole.", ".$data->distric.", ".$data->zone; ?></td>
                         
                          <td class="tdlist"> <?php echo $data->conpersonal.", ".$data->conhome; ?></td>
                         
                        <td class="tdlist"> <img class="listimg" src="<?php echo base_url()."custmr_detail_image/".$data->image; ?>" /></td>
                        
                        <td class="tdlist"><?php echo anchor('view/cusdetail/'.$data->c_id,'View'); ?> /<?php echo anchor('view/editcus/'.$data->c_id,'Edit'); ?> / <?php echo anchor('view/deletecus/'.$data->c_id,'Delete'); ?> </td>
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                <?php // echo $links; ?> 
            </div>
        </div>     