       <div class="cme">   <p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
  echo validation_errors();
  if(isset($error))
  {
      echo $error;
  }
  ?>
    </p>     </div>
        <div class="cus_search">
           <label> <b>Edit Remittance Company</b></label> <br/>
         
            <hr/>
            <div class="form">
                <?php foreach ($query as $data)
                {
                    $id = $data->id;
                    $name = $data->a_name;
                    $nname = $data->n_name;
                    $address = $data->a_address;
                    $phone = $data->a_number;
                     $tphone = $data->t_number;
                    $email = $data->a_email;
                    $principal = $data->a_principal;
                    $image = $data->image;
                }
?>
                
                <?php echo form_open_multipart('view/updatea');?>
                   <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input class="cme_a_add" type="text" name="cmea_name" placeholder="Name" value="<?php echo $name; ?>"/> <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmen_name" placeholder="Nepali Name" value="<?php echo $nname; ?>"/> <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmea_address" placeholder="Address" value="<?php echo $address; ?>"/> <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmea_number" placeholder="Phone Number" value="<?php echo $phone; ?>" /> <br/> <br/>
                    <input class="cme_a_add" type="text" name="t_number" placeholder="Toll Free Number" value="<?php echo $tphone; ?>" /> <br/> <br/>
                    <input class="cme_a_add" type="email" name="cmea_email" placeholder="Email" value="<?php echo $email; ?>" /> <br/> <br/>
                      <input class="cme_a_add" type="text" name="cmea_principal" placeholder="Principal Agent" value="<?php echo $principal; ?>" /> <br/> <br/>
                      <input type="hidden" name="image" value="<?php echo $image; ?>" />
                      <img name="image" src="<?php echo base_url()."agentimg/".$image; ?>" width="275"  height="100" /> <br/> <br/>
                    <input type="file" name="agentfile" /><br/> <br/>
                    <input type="submit" name="submit" value="Update" /> 
                </form>
                <br/>
                
            </div>
        </div>