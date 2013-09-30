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
           <label> <b>Customer List</b></label> &nbsp; <?php echo anchor('view/addcustomer','Add New Customer');?> 
         
            <hr/>
             <lable>Search Customer</lable> 
                <?php echo form_open('view/usersearchcus');?>
                    <input type="text" name="id"  placeholder="ID" />
                    <input type="text" name="cusname"  placeholder="First Name" />
                     <input type="text" name="cusLname"  placeholder="Last Name" />
                   <input type="text" name="address"  placeholder="Address" />
                    <input type="text" name="phone"  placeholder="Phone Number" />
                    
                    <select name="branch">
                        <option value="">Branch...</option>
                        <?php foreach ($branch as $data)
                        {?><option value="<?php echo $data->id; ?>"><?php echo $data->b_name; ?></option> <?php } ?>
                        
                    </select>
                   
                    <input type="submit" name="search" value="Search" />
                    
               <?php echo form_close(); ?>
                  
                    <br/>
                    
            
            <div class="form">
                <table id="cmeTable" class="tbllist">
                    <tr class="trlist">
                        <th class="tdlist"> S.N </th>
                        <th class="tdlist">ID</th>
                        <th class="tdlist">Name</th>
                        <th class="tdlist"> Address</th>
                        <th class="tdlist"> Contact </th>
                         <th class="tdlist">Image</th>
                        
                    </tr>
                    <?php foreach ($cuslist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->c_id; ?></td>
                         <td class="tdlist"> <?php echo $data->full_id; ?></td>
                        <td class="tdlist"> <?php echo $data->title." ".$data->fname." ".$data->mname." ".$data->lname; ?></td>
                       
                        
                        <td class="tdlist"> <?php echo $data->vdc.", ".$data->tole.", ".$data->distric.", ".$data->zone; ?></td>
                         
                          <td class="tdlist"> <?php echo $data->conpersonal.", ".$data->conhome; ?></td>
                         
                        <td class="tdlist"> <img class="listimg" src="<?php echo base_url()."custmr_detail_image/".$data->image; ?>" /></td>
                        
                       
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                <?php  //echo $links; ?> 
            </div>
        </div>     