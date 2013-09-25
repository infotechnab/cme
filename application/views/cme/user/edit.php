       <div class="cme">   <p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
  echo validation_errors();
  if(isset($error))
  {
      echo $error;
  }
 if(isset($mess))
  {
      echo $mess;
  }
  ?>
    </p>     </div>         
<div class="cus_search_list">
            <div class="form">  
                <?php foreach ($query as $data)
                {
                    $id = $data->u_id;
                    $uname = $data->uname;
                    $fname = $data->full_name;
                    $address = $data->address;
                    $phone = $data->phone_number;
                    $email = $data->email;
                    
                    $pass = $data->upass;
                    $roel = $data->role;
                    $branchid = $data->id;
                }
?>               <label> <b>Edit user</b></label> <hr/>
                <?php echo form_open('view/updateuser');?>
                   
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input class="intexth" type="text" name="uname" placeholder="User Name" value="<?php echo $uname; ?>" readonly/> <br/><br/>
                    <input class="intexth" type="text" name="fullname" placeholder="Full Name" value="<?php echo $fname; ?>" /> * <br/><br/>
                    <input class="intexth" type="text" name="address" placeholder="Address" value="<?php echo $address; ?>" /> * <br/><br/>
                    <input class="intexth" type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>" /> * <br/><br/>
                    <input class="intexth" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"/>  <br/><br/>
                    <input class="intexth" type="password" name="newpass" placeholder="Password" /> * <br/><br/>
                    <input class="intexth" type="password" name="pass" placeholder="Confirm Password" /> * <br/><br/>
                   <!-- <input class="intexth" type="password" name="pass" placeholder="Password" value="<?php // echo $pass; ?>"/> <br/><br/> -->
                    <select class="intexth" name="role" >
                        <option <?php if($roel=='') { echo 'Selected="Selected"'; } ?> value=""> Select role...</option>
                        <option  <?php if($roel=='admin') { echo 'Selected="Selected"'; } ?> value="admin"  > Admin </option>
                        <option  <?php if($roel=='user') { echo 'Selected="Selected"'; } ?> value="user"> User </option>
                    </select> <br/> <br/>
                    
                    <select class="intexth" name="branch" >
                        <?php foreach ($branch as $data)
                        { ?>
                        <option  <?php if($data->id==$branchid) { echo 'Selected="Selected"'; } ?> 
                                 value="<?php echo $data->id; ?>"><?php echo $data->b_name; ?> </option>
                   <?php     }
?>
                       
                    </select>
                    <input type="submit" name="submit" value="Update" /> 
                </form>
                <br/>
                
            </div>
        </div>         