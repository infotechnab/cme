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
             <div class="form">
                
                <?php echo form_open('view/detail');?>
                    <label>Customer:</label>
                    <input type="text" name="fcid" placeholder="Customer ID" />
                    <input type="submit" name="submit" value="Find" /> 
                </form>
                <br/>
                
            </div>
            </div>
           