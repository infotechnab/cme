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
<div class="cus_search_find">
             <div class="form" id="findMe">
                
                <?php echo form_open('view/detail');?>
                    <label>Find Customer:</label>
                    <input type="text" id="findInput" name="fcid" placeholder="Customer ID" style="padding:5px;" required="required"/>
                    <input type="image" id="findImage" src="<?php echo base_url(); ?>content/images/search.png" name="submit" /> 
                </form>
                
                
            </div>
    <br/>
            </div>
           