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
                             <td> <input class="intexth"   type="text" name="vdc" placeholder="VDC" value="<?php echo $vdc; ?>"/> </td>
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
            <table>
                <tr>
                    <th></th>
                    <th>Ctitzenship</th>
                    <th>License</th>
                    <th>Passport</th>
                  <!--  <th>Expire Date</th> -->
                    <th>Other</th>
                    
                </tr>
                <tr>
                    <td>Identity Number</td>
                  <?php $i = "ida"; foreach ($identy as $data)
                  {
    ?>
                    <td><input type="text" name="<?php echo $i++; ?>" placeholder="ID Number" value="<?php echo $data->id_number; ?>" /></td> <?php } ?>
                 <!--   <td><input type="hidden" name="license" value="license" /><input type="text" name="lid" placeholder="ID Number" /></td>
                    <td><input type="hidden" name="passport" value="passport" /><input type="text" name="pid" placeholder="ID Number"/></td>
                  <!--  <td><input type="text" name="ctznexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" /></td> 
                    <td><input type="hidden" name="other" value="other" /><input type="text" name="oid" placeholder="ID Number" /></td>-->
                </tr>
                <tr>
                    <td>Issued Place</td>
                <?php foreach ($identy as $data)
                  {
    ?>    
                    <td><input type="text" name="<?php echo $i++; ?>" placeholder="Issued Place" value="<?php echo $data->issue_place; ?>" /></td> <?php } ?>
                  <!--  <td><input type="text" name="lplace" placeholder="Issued Place" /></td>
                    
                    <td><input type="text" name="pplace" placeholder="Issued Place" /></td>
                    <!--<td><input type="text" name="pexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" /></td>
                    <td><input type="text" name="oplace" placeholder="Issued Place" /></td> -->
                </tr>
                <tr>
                    <td>Issue Date</td>
                     <?php foreach ($identy as $data)
                  {
    ?>
                    <?php $idate = $data->issue_date; ?>
                    <td><input type="text" class="issued" name="<?php echo $i++; ?>" placeholder="Year" value=" <?php echo date('Y',  strtotime($idate)); ?>" /> 
                        <select class="issued" name="<?php echo $i++; ?>">
                                <option>Month</option>
                                <option value="01"<?php if((date('m',  strtotime($idate)))=='01') { echo 'Selected="Selected"'; } ?>>January</option>
                                <option value="02"<?php if((date('m',  strtotime($idate)))=='02') { echo 'Selected="Selected"'; } ?>>February</option>
                                <option value="03"<?php if((date('m',  strtotime($idate)))=='03') { echo 'Selected="Selected"'; } ?>>March</option>
                                <option value="04"<?php if((date('m',  strtotime($idate)))=='04') { echo 'Selected="Selected"'; } ?>>April</option>
                                <option value="05"<?php if((date('m',  strtotime($idate)))=='05') { echo 'Selected="Selected"'; } ?>>May</option>
                                <option value="06"<?php if((date('m',  strtotime($idate)))=='06') { echo 'Selected="Selected"'; } ?>>June</option>
                                <option value="07"<?php if((date('m',  strtotime($idate)))=='07') { echo 'Selected="Selected"'; } ?>>July</option>
                                <option value="08"<?php if((date('m',  strtotime($idate)))=='08') { echo 'Selected="Selected"'; } ?>>August</option>
                                <option value="09"<?php if((date('m',  strtotime($idate)))=='09') { echo 'Selected="Selected"'; } ?>>September</option>
                                <option value="10"<?php if((date('m',  strtotime($idate)))=='10') { echo 'Selected="Selected"'; } ?>>October</option>
                                <option value="11"<?php if((date('m',  strtotime($idate)))=='11') { echo 'Selected="Selected"'; } ?>>November</option>
                                <option value="12"<?php if((date('m',  strtotime($idate)))=='12') { echo 'Selected="Selected"'; } ?>>December</option>
                            </select>
                        <input type="text" class="issued" name="<?php echo $i++; ?>" placeholder="Day" value=" <?php echo date('d',  strtotime($idate)); ?>"  /></td> <?php } ?>
                    
               <!--     <td><input type="text" class="issued" name="lyear" placeholder="Year" /> 
                        <select class="issued" name="lmonth">
                                <option>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        <input type="text" class="issued" name="lday" placeholder="Day" /></td>
                    
                    <td><input type="text" class="issued" name="pyear" placeholder="Year" /> 
                        <select class="issued" name="pmonth">
                                <option>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        <input type="text" class="issued" name="pday" placeholder="Day" /></td>
                    <!--<td><input type="text" name="lexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>"/></td> 
                    <td><input type="text" class="issued" name="oyear" placeholder="Year" /> 
                        <select class="issued" name="omonth">
                                <option>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        <input type="text" class="issued" name="oday" placeholder="Day" /></td> -->
                </tr>
                
                <tr>
                    <td>Expiry Date</td>
                     <?php foreach ($identy as $data)
                  {
    ?>
                    <?php $edate = $data->expire_date; ?>
                    <td><input type="text" class="issued" name="<?php echo $i++; ?>" placeholder="Year" value=" <?php echo date('Y',  strtotime($edate)); ?>"  /> 
                        <select class="issued" name="<?php echo $i++; ?>">
                                <option>Month</option>
                                <option value="01"<?php if((date('m',  strtotime($edate)))=='01') { echo 'Selected="Selected"'; } ?>>January</option>
                                <option value="02" <?php if((date('m',  strtotime($edate)))=='02') { echo 'Selected="Selected"'; } ?>>February</option>
                                <option value="03"<?php if((date('m',  strtotime($edate)))=='03') { echo 'Selected="Selected"'; } ?>>March</option>
                                <option value="04"<?php if((date('m',  strtotime($edate)))=='04') { echo 'Selected="Selected"'; } ?>>April</option>
                                <option value="05"<?php if((date('m',  strtotime($edate)))=='05') { echo 'Selected="Selected"'; } ?>>May</option>
                                <option value="06"<?php if((date('m',  strtotime($edate)))=='06') { echo 'Selected="Selected"'; } ?>>June</option>
                                <option value="07"<?php if((date('m',  strtotime($edate)))=='07') { echo 'Selected="Selected"'; } ?>>July</option>
                                <option value="08"<?php if((date('m',  strtotime($edate)))=='08') { echo 'Selected="Selected"'; } ?>>August</option>
                                <option value="09"<?php if((date('m',  strtotime($edate)))=='09') { echo 'Selected="Selected"'; } ?>>September</option>
                                <option value="10"<?php if((date('m',  strtotime($edate)))=='10') { echo 'Selected="Selected"'; } ?>>October</option>
                                <option value="11"<?php if((date('m',  strtotime($edate)))=='11') { echo 'Selected="Selected"'; } ?>>November</option>
                                <option value="12"<?php if((date('m',  strtotime($edate)))=='12') { echo 'Selected="Selected"'; } ?>>December</option>
                            </select>
                        <input type="text" class="issued" name="<?php echo $i++; ?>" placeholder="Day" value=" <?php echo date('d',  strtotime($edate));  ?>"  /></td> <?php } ?>
                    
                <!--    <td><input type="text" class="issued" name="lyeare" placeholder="Year" /> 
                        <select class="issued" name="lmonthe">
                                <option>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        <input type="text" class="issued" name="ldaye" placeholder="Day" /></td>
                    
                    <td><input type="text" class="issued" name="pyeare" placeholder="Year" /> 
                        <select class="issued" name="pmonthe">
                                <option>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        <input type="text" class="issued" name="pdaye" placeholder="Day" /></td>
                    <!--<td><input type="text" name="lexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>"/></td> 
                    <td><input type="text" class="issued" name="oyeare" placeholder="Year" /> 
                        <select class="issued" name="omonthe">
                                <option>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        <input type="text" class="issued" name="odaye" placeholder="Day" /></td> -->
                </tr>
                
                 <tr>
                                   
                     
                    <td>Select Image</td>
                    <td><input type="file" name="ctznfile" /></td>
                    
                    <td><input type="file" name="lfile" /></td>
                    <td><input type="file" name="pfile" /></td>
                  <!--  <td><input type="text" name="oexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" /></td> -->
                    <td><input type="file" name="ofile" /></td>
                </tr>
                <tr>
                     <?php foreach ($identy as $data)
                     {?>
                     <td><input type="hidden" name="<?php echo $i++; ?>" value="<?php echo $data->image; ?>" /> </td> <?php } ?>
                </tr>
                <tr>
                     <?php foreach ($identy as $data)
                     {?>
                     <td><input type="hidden" name="<?php echo $i++; ?>" value="<?php echo $data->type; ?>" /> </td> <?php } ?>
                    
                </tr>
            </table>
            </div>
           <input type="submit" name="submit" value="Update" />
           <?php echo form_close(); ?>
            </div>
        </div>            