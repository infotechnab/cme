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
            <div class="form">  
                <?php foreach ($query as $data)
                {
                    $id = $data->u_id;
                    $uname = $data->uname;
                    $pass = $data->upass;
                    $roel = $data->role;
                    $branchid = $data->id;
                }
?>
                <?php echo form_open('view/updateuser');?>
                    <label> <b>Edit user</b></label> <br/> <br/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input class="intexth" type="text" name="uname" placeholder="User Name" value="<?php echo $uname; ?>" /> <br/><br/>
                   <!-- <input class="intexth" type="password" name="pass" placeholder="Password" value="<?php // echo $pass; ?>"/> <br/><br/> -->
                    <select class="intexth" name="role" style="width:420px;">
                        <option <?php if($roel=='') { echo 'Selected="Selected"'; } ?> value=""> Select role...</option>
                        <option  <?php if($roel=='ad') { echo 'Selected="Selected"'; } ?> value="ad"  selected > Admin </option>
                        <option  <?php if($roel=='us') { echo 'Selected="Selected"'; } ?> value="us"> User </option>
                    </select> <br/> <br/>
                    
                    <select class="intexth" name="branch" style="width:420px;">
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