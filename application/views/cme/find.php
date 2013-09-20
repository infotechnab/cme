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
<div class="cus_search">
             <div class="form">
                
                <?php echo form_open('view/detail');?>
                    <label>Customer ID :</label>
                    <input type="text" name="fcid" placeholder="Customer ID" />
                    <select>
                        <option>Name</option>
                        <option>ID</option>
                    </select><br/><br/>
                    <input type="submit" name="submit" value="Search" /> 
                </form>
                <br/>
                
            </div>
            </div>
           