 <?php
       $role = $this->session->userdata('username');
       $bid = $this->session->userdata('bid');
       $user_id = $this->session->userdata('id');
       
       
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
                             <td> <input class="intexth"   type="text" name="vdc" placeholder="VDC"/> </td>
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
                   <?php $mydate=getdate(date("U"));?> 
                    <td><input type="hidden" name="citizenship" value="citizenship" /><input type="text" name="ctznid" placeholder="ID Number" /></td>
                    <td><input type="hidden" name="license" value="license" /><input type="text" name="lid" placeholder="ID Number" /></td>
                    <td><input type="hidden" name="passport" value="passport" /><input type="text" name="pid" placeholder="ID Number"/></td>
                  <!--  <td><input type="text" name="ctznexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" /></td> -->
                    <td><input type="hidden" name="other" value="other" /><input type="text" name="oid" placeholder="ID Number" /></td>
                </tr>
                <tr>
                    <td>Issued Place</td>
                    <td><input type="text" name="ctznplace" placeholder="Issued Place" /></td>
                    <td><input type="text" name="lplace" placeholder="Issued Place" /></td>
                    
                    <td><input type="text" name="pplace" placeholder="Issued Place" /></td>
                    <!--<td><input type="text" name="pexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" /></td> -->
                    <td><input type="text" name="oplace" placeholder="Issued Place" /></td>
                </tr>
                <tr>
                    <td>Issue Date</td>
                    <td><input type="text" class="issued" name="ctznyear" placeholder="Year" /> 
                        <select class="issued" name="ctznmonth">
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
                        <input type="text" class="issued" name="ctznday" placeholder="Day" /></td>
                    
                    <td><input type="text" class="issued" name="lyear" placeholder="Year" /> 
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
                    <!--<td><input type="text" name="lexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>"/></td> -->
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
                        <input type="text" class="issued" name="oday" placeholder="Day" /></td>
                </tr>
                
                <tr>
                    <td>Expiry Date</td>
                    <td><input type="text" class="issued" name="ctznyeare" placeholder="Year" /> 
                        <select class="issued" name="ctznmonthe">
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
                        <input type="text" class="issued" name="ctzndaye" placeholder="Day" /></td>
                    
                    <td><input type="text" class="issued" name="lyeare" placeholder="Year" /> 
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
                    <!--<td><input type="text" name="lexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>"/></td> -->
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
                        <input type="text" class="issued" name="odaye" placeholder="Day" /></td>
                </tr>
                 
                 <tr>
                    <td>Select Image</td>
                    <td><input type="file" name="ctznfile" /></td>
                    
                    <td><input type="file" name="lfile" /></td>
                    <td><input type="file" name="pfile" /></td>
                  <!--  <td><input type="text" name="oexpire" value="<?php //echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" /></td> -->
                    <td><input type="file" name="ofile" /></td>
                </tr>
            </table>
            </div>
           <input type="submit" name="submit" value="Add Details" />
           <?php echo form_close(); ?>
            </div>
        </div>            