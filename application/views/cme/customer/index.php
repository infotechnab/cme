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
                 //$("#c-m-h").css("position","absolute");
                 // $("#c-m-h").css("top","350px");
                 //  $("#c-m-h").css("left","700px");
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
           
        <div class="cus_search_list">
            <b>Customer Entry </b>
            <hr/>
            <div class="form">  
            <?php echo form_open_multipart('view/addcustomerdetail'); ?>
                
                <input type="hidden" name="userid" value="<?php echo $user_id; ?>"/>
                <input type="hidden" name="brid" value="<?php echo $bid; ?>"/>
                 <input type="hidden" name="btid" value="<?php echo $btid; ?>"/>
                  <input type="hidden" name="bcodid" value="<?php echo $bcodid; ?>"/>
                
                
                <table >
                   
                    <tr>
                         <td> <b>Title </b> </td>
                    </tr>
                    <tr>
                       
                        <td><input type="radio" name="title" value="Mr." /> <b> Mr.</b> &nbsp; <input type="radio" name="title" value="Mrs." /><b> Mrs.</b> &nbsp; <input type="radio" name="title" value="Miss." /><b> Miss.</b> &nbsp; <input type="radio" name="title" value="Ms." /><b> Ms.</b> &nbsp; *</td>
                        
                       
                    </tr>
                    <tr>
                         <td> <b> Name </b>  </td>
                    </tr>
                          <tr>
                         <td colspan="2"> <input class="intexna"   type="text" name="fname" placeholder="First Name" /> 
                         
                          <input class="intexna"  type="text" name="mname" placeholder="Middle Name" /> 
                         <input class="intexna"  type="text" name="lname" placeholder="Last Name" /> * </td>
                    </tr>
                    <tr>
                        <td> <b>Gender </b></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="sex" value="male" /> <b> Male</b> &nbsp;
                        <input type="radio" name="sex" value="female" /><b> Female</b> &nbsp;
                        <input type="radio" name="sex" value="other" /><b> Other</b> &nbsp; *</td>
                    </tr>
                    <tr>
                       <td> <b> Date Of Birth </b></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="intextd"  type="text" name="dobyear" placeholder="Year" id="db_y" />
                            <select class="intextd" id="db_m" name="dobmonth">
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
                            <input class="intextd" type="text" name="dobday" placeholder="Day" id="db_d" /> </td>
                        <td> <img src="<?php echo base_url()."content/images/calender.png"?>" id="db" /> </td>
                        
                    </tr>
                    <tr>
                        <td><b>Current Address</b></td>
                    </tr>
                    
                    
                    <tr>                         
                             <td> <input class="intexth"   type="text" name="vdc" placeholder="VDC / Municipality"/> </td>
                             <td> <input class="intexth"  type="text" name="ward" placeholder="Ward No."/> </td>
                    </tr>
                    
                     <tr> 
                              <td> <input class="intexth" type="text" name="tole" placeholder="Tole"/> </td>
                               <td> <input class="intexth" type="text" name="city" placeholder="City" /> * </td>
                    </tr>
                    
                   <tr> 
                              <td> <input class="intexth" type="text" name="distric" placeholder="Distric"/> </td>
                               <td> <input class="intexth" type="text" name="zone" placeholder="Zone" /> * </td>
                    </tr>
                    
                    <tr>
                           <td> <b>Permanent Address </b> </td>
                    </tr>
                    <tr>
                            <td colspan="2"> <input class="intext"  type="text" name="address" placeholder="Adderss" /> </td>
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
                                 <td><input class="intexth" type="text" name="contactpersonal" placeholder="Mobile" /> </td>
                                 <td><input class="intexth" type="text" name="contacthome" placeholder="Land Line" /> </td>
                                 
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
<td>Issued Date <input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data."_year"; ?>" id="<?php echo $data."_issue_date_y"; ?>" /> </td> 
<td> <select style=" padding:3px;" name="<?php echo $data."_month"; ?>" id="<?php echo $data."_issue_date_m"; ?>" >
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
    </select> </td>
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" name="<?php echo $data."_day"; ?>" id="<?php echo $data."_issue_date_d"; ?>" /></td>
<td><img class="dateConverterImage"src="<?php echo base_url()."content/images/calender.png"?>" id="<?php echo $data."_issue_date" ;?>" /> </td>
</tr>
<?php if($data == 'Citizenship')
{?>
<tr>
<td></td>
</tr> <?php } 
else { ?>
<tr>
<td> Expiry Date <input type="text" style="width:80px; padding:3px;" placeholder="Year" name="<?php echo $data."_yeare"; ?>" id="<?php echo $data."_ex_date_y" ;?>" /> </td>
<td> <select style=" padding:3px;" name="<?php echo $data."_monthe"; ?>" id="<?php echo $data."_ex_date_m" ;?>" ><option>Month</option>
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
<td> <input type="text" style="width:80px; padding:3px;" placeholder="Day" name="<?php echo $data."_daye"; ?>" id="<?php echo $data."_ex_date_d" ;?>"/></td>
<td><img src="<?php echo base_url()."content/images/calender.png"?>" id="<?php echo $data."_ex_date" ;?>" /> </td>
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