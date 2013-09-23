       <div class="cme">   <p id="sucessmsg">
  <?php if(isset($mess))
  {
      echo $mess;
  }
  ?>
    </p> 
       </div>            
<div class="cus_search">
            <div class="form">                
                <?php echo form_open('view/adduser');?>
                    <label> <b>Add new user</b></label> <br/> <br/>
                    <input class="intexth" type="text" name="uname" placeholder="User Name" /> * <br/><br/>
                    <input class="intexth" type="text" name="fullname" placeholder="Full Name" /> * <br/><br/>
                    <input class="intexth" type="text" name="address" placeholder="Address" /> * <br/><br/>
                    <input class="intexth" type="text" name="phone" placeholder="Phone Number" /> * <br/><br/>
                    <input class="intexth" type="email" name="email" placeholder="Email" />  <br/><br/>
                    <input class="intexth" type="password" name="newpass" placeholder="Password" /> * <br/><br/>
                    <input class="intexth" type="password" name="pass" placeholder="Confirm Password" /> * <br/><br/>
                    <select class="intexth" name="role"  style="width:420px;">
                        <option value=""> Select role...</option>
                        <option value="admin"> Admin </option>
                        <option value="user"> User </option>
                    </select> * <br/> <br/>
                    
                    <select class="intexth" name="branch" style="width:420px;">
                        <?php foreach ($branch as $data)
                        { ?>
                             <option value="<?php echo $data->id; ?>"><?php echo $data->b_name; ?> </option>
                   <?php     }
?>
                       
                    </select>
                    <input type="submit" name="submit" value="Add" /> 
                </form>
                <br/>
                
            </div>
        </div>          