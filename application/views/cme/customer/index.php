 <?php
       $role = $this->session->userdata('username');
       $bid = $this->session->userdata('bid');
       $user_id = $this->session->userdata('id');
       $btid = $this->session->userdata('btitle');
       $bcodid = $this->session->userdata('bcode');
       
       
            $cid='0';
            foreach ($query as $data)
            {
                $cid = $data->c_id;
            }   
                   
             $cid = $cid+1;
?>
            <div class="cme">   <p id="sucessmsg">
  <?php echo validation_errors();?>
            
         <?php  if(isset($error))
         {echo $error;} ?>
    </p></div> 
           
        <div class="cus_detail">
            <h2>Customer Entry </h2>
            <hr/>
            <div class="form">  
            <?php echo form_open_multipart('view/addcustomerdetail'); ?>
                
                <input type="hidden" name="userid" value="<?php echo $user_id; ?>"/>
                <input type="hidden" name="brid" value="<?php echo $bid; ?>"/>
                 <input type="text" name="btid" value="<?php echo $btid; ?>"/>
                  <input type="text" name="bcodid" value="<?php echo $bcodid; ?>"/>
                
                
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
                       
                        <td><input type="radio" name="title" value="Mr." /> <b> Mr.</b> &nbsp; <input type="radio" name="title" value="Mrs." /><b> Mrs.</b> &nbsp; <input type="radio" name="title" value="Miss." /><b> Miss.</b> &nbsp; <input type="radio" name="title" value="Ms." /><b> Ms.</b></td>
                        
                       
                    </tr>
                    <tr>
                         <td> <b> Name </b>  </td>
                    </tr>
                          <tr>
                         <td colspan="2"> <input class="intexna"   type="text" name="fname" placeholder="First Name" /> 
                         
                          <input class="intexna"  type="text" name="mname" placeholder="Middle Name" /> 
                         <input class="intexna"  type="text" name="lname" placeholder="Last Name" /> </td>
                    </tr>
                    <tr>
                        <td> <b>Gender </b></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="sex" value="male" /> <b> Male</b> &nbsp;
                        <input type="radio" name="sex" value="female" /><b> Female</b> &nbsp;
                        <input type="radio" name="sex" value="other" /><b> Other</b> &nbsp;</td>
                    </tr>
                    <tr>
                       <td> <b> Date Of Birth </b></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="intextd"  type="text" name="dobyear" placeholder="Year" />
                            <select class="intextd" name="dobmonth">
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
                            <input class="intextd" type="text" name="dobday" placeholder="Day" /> </td>
                    </tr>
                    
                    <tr>
                           <td> <b>Address </b> </td>
                    </tr>
                    <tr>
                            <td colspan="2"> <input class="intext"  type="text" name="address" placeholder="Adderss" /> </td>
                    </tr>
                    <tr>                         
                             <td> <input class="intexth"   type="text" name="vdc" placeholder="VDC / Municipality"/> </td>
                             <td> <input class="intexth"  type="text" name="tole" placeholder="Tole"/> </td>
                    </tr>
                    
                   <tr> 
                              <td> <input class="intexth" type="text" name="distric" placeholder="Distric"/> </td>
                               <td> <input class="intexth" type="text" name="zone" placeholder="Zone" /> </td>
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
                                 <td><input class="intexth" type="text" name="contactpersonal" placeholder="Personal" /> </td>
                                 <td><input class="intexth" type="text" name="contacthome" placeholder="Home" /> </td>
                                 
                    </tr>
                    <tr>
                                  <td> <b> Email <b> </td>
                    </tr>
                    <tr>
                                 <td colspan="2"> <input class="intext" type="email" name="email"  placeholder="Email ID" /> </td>
                </tr>
                <tr>
                                   <td> <b>Customer Image </b> </td> 
                                   <td> <input type="file" name="customerfile" /> </td>
                    </tr>
                    
                </table>
              
            <div class="cidentity"> 
            <label id="clpid"> <b > Customer Identity </b></label> <hr/> 
            
            <?php
           
            $array= array( 'Citizenship','Licences','Passport','Other');
            
             
           
            foreach ($array as $data)
            {
               ?>
            
            
           
<table  style="float: left; margin-right: 3%; ">
<tr>
<td colspan="3" style="text-align:center"  > <b> <?php echo $data; ?> </b> <input type="hidden" name="<?php echo $data;?>" value="<?php echo $data;?>"/></td>
</tr>
<tr>
<td colspan="3"> <input type="text" style="width:265px; padding:5px;" name="<?php echo $data."_id"; ?>" placeholder="ID Number" /></td>
</tr>
<tr>
<td colspan="3"> <input type="text" style="width:265px; padding:5px;" name="<?php echo $data."_place"; ?>" placeholder="Issued Place" /></td>
</tr>
<tr>
<td><input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data."_year"; ?>" /> </td> 
<td> <select style=" padding:3px;" name="<?php echo $data."_month"; ?>" >
       <option>Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
    </select> </td>
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" name="<?php echo $data."_day"; ?>" /></td>
</tr>
<?php if($data == 'Citizenship')
{?>
<tr>
<td></td>
</tr> <?php } 
else { ?>
<tr>
<td><input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data."_yeare"; ?>" /> </td>
<td> <select style=" padding:3px;" name="<?php echo $data."_monthe"; ?>" ><option>Month</option>
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
                                <option value="12">December</option> </select> </td>
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" name="<?php echo $data."_daye"; ?>" /></td>
</tr> <?php } ?>
<tr>
    <td colspan="3"><input type="file" name="<?php echo $data."file" ?>" /></td>
</tr>
</table> <?php } ?>
            

 
     <div style="clear: left;"/>      
            
  
            </div>
                  
            
            
            </div>
           <input type="submit" name="submit" value="Add Details" />
           <?php echo form_close(); ?>
            </div>
        </div>            