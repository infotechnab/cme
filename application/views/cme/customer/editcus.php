 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
          <script type="text/javascript" src="<?php echo base_url(); ?>/content/script/jquery.min.js"></script>
          
         <script type="text/javascript" src="<?php echo base_url(); ?>/content/script/salyani-script.js">            
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/content/script/jquery.min.js">
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/content/script/moment+langs.js">        
        </script>
        
         <script>
             
             $(document).ready(function(){
             $("img").bind({                 
             click:function()
             {
                 $("#c-m-h").toggle();
                  // $("#c-m-h").css("position","relative");
                  // $("#c-m-h").css("top","-150px");
                 var imgid = $(this).attr("id");
                
                 //calculate(imgid);
                merodata(imgid);
                 
             }
              
   });
   
   function merodata(mgid)
   {
        $("#datapass").val(mgid);
   }
   
   $("#okbutton").bind({
   click:function()
   {
       //alert(imgid);
       calculate();
       $("#c-m-h").hide();
   }

   });
   
});
          
            
            
    </script>
 
    <script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{ This is an example of what the full configuration offers.
				day:5,	For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>
 <?php
       $role = $this->session->userdata('username');
       $bid = $this->session->userdata('bid');
       $user_id = $this->session->userdata('id');
       
            foreach ($query as $data)
            {
                $cid = $data->c_id;
                $fullid = $data->full_id;
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
  <?php echo validation_errors();
         if(isset($error))
         {echo $error;} ?>
    </p></div> 
           
        <div class="cus_detail">
            <b>Edit Customer </b>
            <hr/>
            <div class="form">  
            <?php echo form_open_multipart('view/updatecus'); ?>
                <table >
                    <tr>
                        <td > <b> Customer ID </b>   </td>
                    </tr>
                    <tr>
                        <td colspan="2" > <input class="intext"  type="hidden" name="cid" value="<?php echo $cid; ?>" readonly /> <input class="intext"  type="text" name="fullid" value="<?php echo $fullid; ?>" readonly /> </td>
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
                       
                        <td colspan="2">
                            
                            <input class="intextd"  type="text" name="dobyear" id="db_y" placeholder="Year" value=" <?php if($dob == 0000-00-00){echo "Year"; } else echo date('Y',  strtotime($dob)); ?>" />
                            <select class="intextd" name="dobmonth" id="db_m" >
                                
                                <?php if($dob == 0000-00-00)
                                {
                                    
                                ?>
                                    <option value="0"  Selected="Selected">Month</option>
                                    <option value="1" >January</option>
                                    <option value="2">February </option>
                                <option value="3" >March</option>
                                <option value="4" >April</option>
                                <option value="5" >May</option>
                                <option value="6" >June</option>
                                <option value="7" >July</option>
                                <option value="8" >August</option>
                                <option value="9" >September</option>
                                <option value="10" >October</option>
                                <option value="11" >November</option>
                                <option value="12" >December</option>
       
                                    
                                   <?php } else { ?>
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
                                <?php } ?>
                                
                            </select>
                            <input class="intextd" type="text" name="dobday" id="db_d" placeholder="Day" value=" <?php if($dob == 0000-00-00){echo "Day"; } else echo date('d',  strtotime($dob)); ?>" /> </td>
                                <td> <img src="<?php echo base_url()."content/images/calender.png"?>" id="db" /> </td>
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
                                 <td><input class="intexth" type="text" name="contactpersonal" placeholder="Mobile" value="<?php echo $conpersonal; ?>" /> </td>
                                 <td><input class="intexth" type="text" name="contacthome" placeholder="Land Line" value="<?php echo $conhome; ?>" /> </td>
                                 
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
<td>Issued Date <input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data->type."_year"; ?>" id="<?php echo $data->type."_issue_date_y"; ?>" value="<?php $date=$data->issue_date; echo  date('Y',  strtotime($date));  ?>" /> </td> 
<td> <select style=" padding:3px;" name="<?php echo $data->type."_month"; ?>" id="<?php echo $data->type."_issue_date_m"; ?>" >
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
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" name="<?php echo $data->type."_day"; ?>" id="<?php echo $data->type."_issue_date_d"; ?>" value="<?php echo  date('d',  strtotime($date)); ?>" /></td>
<td><img class="dateConverterImage"src="<?php echo base_url()."content/images/calender.png"?>" id="<?php echo $data->type."_issue_date" ;?>" /> </td>
</tr>
<?php if($data->type == 'Citizenship')
{?>
<tr>
<td></td>
</tr> <?php } 
else { ?>
<tr>
<td> Expiry Date <input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data->type."_yeare"; ?>" id="<?php echo $data->type."_ex_date_y" ;?>" value="<?php $edate=$data->expire_date; echo  date('Y',  strtotime($edate));  ?>" /> </td>
<td> <select style=" padding:3px;" name="<?php echo $data->type."_monthe"; ?>" id="<?php echo $data->type."_ex_date_m" ;?>" ><option>Month</option>
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
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" id="<?php echo $data->type."_ex_date_d" ;?>" name="<?php echo $data->type."_daye"; ?>" value="<?php echo  date('d',  strtotime($edate)); ?>" /></td>
<td><img src="<?php echo base_url()."content/images/calender.png"?>" id="<?php echo $data->type."_ex_date" ;?>" /> </td>
</tr> <?php } ?>
<tr>
    <td colspan="3"><input type="hidden" name="<?php echo $data->type."image";?>" value="<?php echo $data->image; ?>" /><input type="file" name="<?php echo $data->type."file" ?>" /></td>
</tr>
</table> <?php } ?>
            

 
     <div style="clear: left;"/> 
            </div>
          
            </div>
                 <input type="submit" name="submit" value="Update" />
           <?php echo form_close(); ?>
        </div>         
            
            <!-- calender -->
        <div class="calendars-month-header" id="c-m-h" style="display:none;" >
            <select title="Change the year" class="calendars-month-year" id="yearInput">
                <?php
                for ($i = 2020; $i <= 2080; $i++) {
                    ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option> 

                    <?php
                }
                ?>


            </select>
            <select title="Change the month" class="calendars-month-year" id="monthInput">
                <?php
                $monthlist = array(1 => "Baisakh", 2 => "Jestha", 3 => "Ashadh", 4 => "Shrawn", 5 => "Bhadra", 6 => "Ashwin", 7 => "Kartik", 8 => "Mangsir", 9 => "Paush", 10 => "Mangh", 11 => "Falgun", 12 => "Chaitra");
                foreach ($monthlist as $monthid => $month) {
                    ?>
                    <option value="<?php echo $monthid ?>"><?php echo $month . '(' . $monthid . ')'; ?> </option>
                    <?php
                }
                ?>

            </select> 
            <select title="Change the  day" class="calendars-month-year" id="dayInput">
                <?php
                for ($i = 1; $i <= 32; $i++) {
                    echo '<option value=' . $i . '>' . $i . '</option>';
                }
                ?>
            </select>
            <br/>
            <button id="okbutton">Ok</button>
           <!-- <button id="closebutton">Close</button> -->
            <input type="hidden" id="datapass" value=""/>
           
        </div>