 <?php
       $role = $this->session->userdata('username');
       $bid = $this->session->userdata('bid');
       $user_id = $this->session->userdata('id');
       
       
     
            foreach ($query as $data)
            {
                $cid = $data->c_id;
                $title = $data->title;
                $fname = $data->fname;
                $mname = $data->mname;
                $lname = $data->lname;
                $gender = $data->gender;
                $dob = $data->dob;
                $address = $data->address;
                $distirc = $data->distric;
                $vdc = $data->vdc;
                $tole = $data->tole;
                $zone = $data->zone;
                $country = $data->country;
                $conpersonal = $data->conpersonal;
                $conhome = $data->conhome;
                $image = $data->image;
                $email = $data->email; 
            } 
            
            
           
           
                   
           
?>
            <div class="cme">   <p id="sucessmsg">
  <?php echo validation_errors();?>
            
         <?php  if(isset($error))
         {echo $error;} ?>
    </p></div> 
           
        <div class="cus_detail">
            <h2>Edit Customer </h2>
            <hr/>
            <div class="form">  
            <?php echo form_open_multipart('view/updatecus'); ?>
                
             <!--   <input type="text" name="userid" value="<?php // echo $user_id; ?>"/>
                <input type="text" name="brid" value="<?php // echo $bid; ?>"/> -->
            
                
                <table >
                    <tr>
                        <td > <b> Customer ID </b>   </td>
                    </tr>
                    <tr>
                        <td colspan="2" > <input class="intext"  type="text" name="cid" value="<?php echo $cid; ?>" readonly /> </td>
                    </tr>
                    <tr>
                         <td> <b>Title </b> </td>
                    </tr>
                    <tr>
                       
                        <td><input type="radio" name="title" value="Mr." <?php if($title=='Mr.') { ?> checked <?php } ?> /> <b> Mr.</b> &nbsp; <input type="radio" name="title" value="Mrs."<?php if($title=='Mrs.') { ?> checked <?php } ?> /><b> Mrs.</b> &nbsp; <input type="radio" name="title" value="Miss."<?php if($title=='Miss.') { ?> checked <?php } ?> /><b> Miss.</b> &nbsp; <input type="radio" name="title" value="Ms."<?php if($title=='Ms.') { ?> checked <?php } ?> /><b> Ms.</b></td>
                        
                       
                    </tr>
                    <tr>
                         <td> <b> Name </b>  </td>
                    </tr>
                         <tr>
                         <td colspan="2"> <input class="intexna"   type="text" name="fname" placeholder="First Name" value="<?php echo $fname; ?>" /> 
                         
                          <input class="intexna"  type="text" name="mname" placeholder="Middle Name" value="<?php echo $mname; ?>" /> 
                         <input class="intexna"  type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>" /> </td>
                    </tr>
                    <tr>
                        <td> <b>Gender </b></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="sex" value="male" <?php if($gender=='male') { ?> checked <?php } ?>/> <b> Male &nbsp;</b>
                        <input type="radio" name="sex" value="female"  <?php if($gender=='female') { ?> checked <?php } ?> /><b> Female &nbsp;</b>
                        <input type="radio" name="sex" value="other"  <?php if($gender=='other') { ?> checked <?php } ?>/><b> Other &nbsp;</b></td>
                    </tr>
                    <tr>
                       <td> <b> Date Of Birth </b></td>
                    </tr>
                    <tr>
                       
                        <td colspan="2"><input class="intextd"  type="text" name="dobyear" placeholder="Year" value=" <?php echo date('Y',  strtotime($dob)); ?>" />
                            <select class="intextd" name="dobmonth">
                                <option>Month</option>
                                <option value="1" <?php if((date('m',  strtotime($dob)))=='1') { echo 'Selected="Selected"'; } ?> >January</option>
                                <option value="2" <?php if((date('m',  strtotime($dob)))=='2') { echo 'Selected="Selected"'; } ?>>February</option>
                                <option value="3" <?php if((date('m',  strtotime($dob)))=='3') { echo 'Selected="Selected"'; } ?>>March</option>
                                <option value="4" <?php if((date('m',  strtotime($dob)))=='4') { echo 'Selected="Selected"'; } ?>>April</option>
                                <option value="5" <?php if((date('m',  strtotime($dob)))=='5') { echo 'Selected="Selected"'; } ?>>May</option>
                                <option value="6" <?php if((date('m',  strtotime($dob)))=='6') { echo 'Selected="Selected"'; } ?>>June</option>
                                <option value="7" <?php if((date('m',  strtotime($dob)))=='7') { echo 'Selected="Selected"'; } ?>>July</option>
                                <option value="8" <?php if((date('m',  strtotime($dob)))=='8') { echo 'Selected="Selected"'; } ?>>August</option>
                                <option value="9" <?php if((date('m',  strtotime($dob)))=='9') { echo 'Selected="Selected"'; } ?>>September</option>
                                <option value="10" <?php if((date('m',  strtotime($dob)))=='10') { echo 'Selected="Selected"'; } ?>>October</option>
                                <option value="11" <?php if((date('m',  strtotime($dob)))=='11') { echo 'Selected="Selected"'; } ?>>November</option>
                                <option value="12" <?php if((date('m',  strtotime($dob)))=='12') { echo 'Selected="Selected"'; } ?>>December</option>
                            </select>
                            <input class="intextd" type="text" name="dobday" placeholder="Day" value=" <?php echo date('d',  strtotime($dob)); ?>" /> </td>
                    </tr>
                    
                    <tr>
                           <td> <b>Address </b> </td>
                    </tr>
                    <tr>
                            <td colspan="2"> <input class="intext"  type="text" name="address" placeholder="Adderss" value="<?php echo $address; ?>" /> </td>
                    </tr>
                    <tr>                         
                             <td> <input class="intexth"   type="text" name="vdc" placeholder="VDC / Municipality" value="<?php echo $vdc; ?>"/> </td>
                             <td> <input class="intexth"  type="text" name="tole" placeholder="Tole" value="<?php echo $tole; ?>"/> </td>
                    </tr>
                    
                   <tr> 
                              <td> <input class="intexth" type="text" name="distric" placeholder="Distric" value="<?php echo $distirc; ?>"/> </td>
                               <td> <input class="intexth" type="text" name="zone" placeholder="Zone" value="<?php echo $zone; ?>" /> </td>
                    </tr>
                   
                    <tr>
                              
                              
                                <td> <b>Country </b>  </td>
                    </tr>
                    <tr>
                               <td> <select name="country">
                <option value="Nepal"> Nepal </option>
                <option value="India"> India </option>
            </select> </td>
                    </tr>
                     <tr>
                                 <td> <b> Contact Number (98********) </b> </td>
                     </tr>
                     <tr>
                                 <td><input class="intexth" type="text" name="contactpersonal" placeholder="Personal" value="<?php echo $conpersonal; ?>" /> </td>
                                 <td><input class="intexth" type="text" name="contacthome" placeholder="Home" value="<?php echo $conhome; ?>" /> </td>
                                 
                    </tr>
                    <tr>
                                  <td> <b> Email <b> </td>
                    </tr>
                    <tr>
                                 <td colspan="2"> <input class="intext" type="email" name="email"  placeholder="Email ID" value="<?php echo $email; ?>" /> </td>
                </tr>
                <tr>
                    <td> <input type="hidden" name="image" value="<?php echo $image; ?>" /><img src="<?php echo base_url()."custmr_detail_image/".$image; ?>" width="120" height="150" /></td>
                </tr>
                <tr>
                                   <td> <b>Customer Image </b> </td> 
                                   <td> <input type="file" name="customerfile" /> </td>
                    </tr>
                    
                </table>
              
            <div class="cidentity"> 
            <label id="clpid"> <b > Customer Identity </b></label> <hr/> 
         <?php  foreach ($identy as $data) { ?>
           <table  style="float: left; margin-right: 3%; ">
<tr>
<td colspan="3" style="text-align:center"  > <b> <?php echo $data->type; ?> </b> <input type="hidden" name="<?php echo $data->type;?>" value="<?php echo $data->type;?>"/></td>
</tr>
<tr>
<td colspan="3"> <input type="text" style="width:265px; padding:5px;" name="<?php echo $data->type."_id"; ?>" placeholder="ID Number" value="<?php echo $data->id_number; ?>" /></td>
</tr>
<tr>
<td colspan="3"> <input type="text" style="width:265px; padding:5px;" name="<?php echo $data->type."_place"; ?>" placeholder="Issued Place" value="<?php echo $data->issue_place; ?>" /></td>
</tr>
<tr>
<td><input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data->type."_year"; ?>" value="<?php $date=$data->issue_date; echo  date('Y',  strtotime($date));  ?>" /> </td> 
<td> <select style=" padding:3px;" name="<?php echo $data->type."_month"; ?>" >
       <option>Month</option>
                                <option value="01" <?php if((date('m',  strtotime($date)))=='1') { echo 'Selected="Selected"'; } ?> >January</option>
                                <option value="02" <?php if((date('m',  strtotime($date)))=='2') { echo 'Selected="Selected"'; } ?> >February</option>
                                <option value="03" <?php if((date('m',  strtotime($date)))=='3') { echo 'Selected="Selected"'; } ?>>March</option>
                                <option value="04" <?php if((date('m',  strtotime($date)))=='4') { echo 'Selected="Selected"'; } ?>>April</option>
                                <option value="05" <?php if((date('m',  strtotime($date)))=='5') { echo 'Selected="Selected"'; } ?>> May</option>
                                <option value="06" <?php if((date('m',  strtotime($date)))=='6') { echo 'Selected="Selected"'; } ?>>June</option>
                                <option value="07" <?php if((date('m',  strtotime($date)))=='7') { echo 'Selected="Selected"'; } ?>>July</option>
                                <option value="08" <?php if((date('m',  strtotime($date)))=='8') { echo 'Selected="Selected"'; } ?>>August</option>
                                <option value="09" <?php if((date('m',  strtotime($date)))=='9') { echo 'Selected="Selected"'; } ?>>September</option>
                                <option value="10" <?php if((date('m',  strtotime($date)))=='10') { echo 'Selected="Selected"'; } ?>>October</option>
                                <option value="11" <?php if((date('m',  strtotime($date)))=='11') { echo 'Selected="Selected"'; } ?>>November</option>
                                <option value="12" <?php if((date('m',  strtotime($date)))=='12') { echo 'Selected="Selected"'; } ?>>December</option>
    </select> </td>
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" name="<?php echo $data->type."_day"; ?>" value="<?php echo  date('d',  strtotime($date)); ?>" /></td>
</tr>
<?php if($data == 'Citizenship')
{?>
<tr>
<td></td>
</tr> <?php } 
else { ?>
<tr>
<td><input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data->type."_yeare"; ?>" value="<?php $edate=$data->expire_date; echo  date('Y',  strtotime($edate));  ?>" /> </td>
<td> <select style=" padding:3px;" name="<?php echo $data->type."_monthe"; ?>" ><option>Month</option>
                                <option value="1" <?php if((date('m',  strtotime($edate)))=='1') { echo 'Selected="Selected"'; } ?>>January</option>
                                <option value="2"  <?php if((date('m',  strtotime($edate)))=='2') { echo 'Selected="Selected"'; } ?>>February</option>
                                <option value="3"  <?php if((date('m',  strtotime($edate)))=='3') { echo 'Selected="Selected"'; } ?>>March</option>
                                <option value="4"  <?php if((date('m',  strtotime($edate)))=='4') { echo 'Selected="Selected"'; } ?>>April</option>
                                <option value="5"  <?php if((date('m',  strtotime($edate)))=='5') { echo 'Selected="Selected"'; } ?>>May</option>
                                <option value="6"  <?php if((date('m',  strtotime($edate)))=='6') { echo 'Selected="Selected"'; } ?>>June</option>
                                <option value="7"  <?php if((date('m',  strtotime($edate)))=='7') { echo 'Selected="Selected"'; } ?>>July</option>
                                <option value="8"  <?php if((date('m',  strtotime($edate)))=='8') { echo 'Selected="Selected"'; } ?>>August</option>
                                <option value="9"  <?php if((date('m',  strtotime($edate)))=='9') { echo 'Selected="Selected"'; } ?>>September</option>
                                <option value="10"  <?php if((date('m',  strtotime($edate)))=='10') { echo 'Selected="Selected"'; } ?>>October</option>
                                <option value="11"  <?php if((date('m',  strtotime($edate)))=='11') { echo 'Selected="Selected"'; } ?>>November</option>
                                <option value="12"  <?php if((date('m',  strtotime($edate)))=='12') { echo 'Selected="Selected"'; } ?>>December</option> </select> </td>
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" name="<?php echo $data->type."_daye"; ?>" value="<?php echo  date('d',  strtotime($edate)); ?>" /></td>
</tr> <?php } ?>
<tr>
    <td colspan="3"><input type="hidden" name="<?php echo $data->type."image";?>" value="<?php echo $data->image; ?>" /><input type="file" name="<?php echo $data->type."file" ?>" /></td>
</tr>
</table> <?php } ?>
            

 
     <div style="clear: left;"/> 
            </div>
           <input type="submit" name="submit" value="Update" />
           <?php echo form_close(); ?>
            </div>
        </div>            