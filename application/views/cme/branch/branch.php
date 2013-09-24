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
                <?php echo form_open('view/addbranch');?>
                    <label> <b>Add new Branch</b></label> <hr/>
                    <input class="intexth" type="text" name="bname" placeholder="Branch Name" /> *<br/><br/>
                    <input class="intexth" type="text" name="btitle" placeholder="Branch Title" /> *<br/><br/>
                    <input class="intexth" type="text" name="bcode" placeholder="Branch Code" /> *<br/><br/>
                    <input class="intexth" type="text" name="bperson" placeholder="Contact Person" /> *<br/><br/>
                    
                    <input class="intexth" type="text"  name="bphnumber" placeholder="Phone Number" />* <br/><br/>
                    <input class="intexth" type="text" name="bmbnumber" placeholder="Mobile Number" /> <br/><br/>
                    <input class="intexth" type="text" name="baddress" placeholder="Address" /> *<br/><br/>
                                        
                   
                    <input type="submit" name="submit" value="Add" /> 
                </form>
                <br/>
                
            </div>
        </div>          