       <div class="cme">   <p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
  echo validation_errors();
  if(isset($error))
  {
      echo $error;
  }
  ?>
    </p> </div>       
<div class="cus_search_list">
            <div class="form">  
                <?php foreach ($query as $data)
                {
                    $id = $data->id;
                    $bname = $data->b_name;
                    $btitle = $data->b_title;
                    $bcode = $data->b_code;
                    $person = $data->person;
                    $phnumber = $data->ph_number;
                    $mbnumber = $data->mb_number;
                    $address = $data->address;
                    
                   
                }
?>
                <?php echo form_open('view/updatebranch');?>
                    <label> <b>Edit Branch</b></label> <hr/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input class="intexth" type="text" name="bname" placeholder="Branch Name" value="<?php echo $bname; ?>" /> <br/><br/>
                    <input class="intexth" type="text" name="btitle" placeholder="Branch Title" value="<?php echo $btitle; ?>" /> <br/><br/>
                    <input class="intexth" type="text" name="bcode" placeholder="Branch Code" value="<?php echo $bcode; ?>" /> <br/><br/>
                    <input class="intexth" type="text" name="bperson" placeholder="Contact Person" value="<?php echo $person; ?>" /> <br/><br/>
                    
                    <input class="intexth" type="text"  name="bphnumber" placeholder="Phone Number" value="<?php echo $phnumber; ?>" /> <br/><br/>
                    <input class="intexth" type="text" name="bmbnumber" placeholder="Mobile Number" value="<?php echo $mbnumber; ?>"/> <br/><br/>
                    <input class="intexth" type="text" name="baddress" placeholder="Address" value="<?php echo $address; ?>"/> <br/><br/>
                                        
                   
                    <input type="submit" name="submit" value="Update" /> 
                </form>
                <br/>
                
            </div>
        </div>          