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
           <label> <b>Add New Remittance Company</b></label> <br/>
         
            <hr/>
            <div class="form">
                
                <?php echo form_open_multipart('view/addagent');?>
                   
                    <input class="cme_a_add" type="text" name="cmea_name" placeholder="English Name" /> <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmen_name" placeholder="Nepali Name" /> <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmea_address" placeholder="Address" /> <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmea_number" placeholder="Phone Number" /> <br/> <br/>
                    <input class="cme_a_add" type="text" name="toll_number" placeholder="Toll Free Number" /> <br/> <br/>
                    <input class="cme_a_add" type="email" name="cmea_email" placeholder="Email" /> <br/> <br/>
                      <input class="cme_a_add" type="text" name="cmea_principal" placeholder="Principal Agent" /> <br/> <br/>
                    <input type="file" name="agentfile" /><br/> <br/>
                    <input type="submit" name="submit" value="Add" /> 
                </form>
                <br/>
                
            </div>
        </div>