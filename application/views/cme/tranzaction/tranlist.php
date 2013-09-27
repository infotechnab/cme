<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
 $( "#datepicker1" ).datepicker({ dateFormat: "yy-mm-dd" });

});
$(function() {
$( "#datepicker2" ).datepicker({ dateFormat: "yy-mm-dd" });
});

</script>      
<div class="cme">   <p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
  echo validation_errors();
  if(isset($error))
  {
      echo $error;
  }
  ?>
    </p> 
       </div>        
        
        <div class="cus_search_list">
           <label> <b>Tranzaction List</b></label> <br/>
         
            <hr/>
            
           <br/> 
           <?php
           //fetching previous data 
          // print_r($previousRecord);
           if(!empty($previousRecord))
           {
               foreach ($previousRecord as $preData)
               {
               // $fromDate = $preData->fromDate;
               // $toDate = $preData["toDate"];
              // $userData = $preData->userData;
              // $branchPre = $preData->branch;
              //$agent = $preData->agent;
              // $timePeriod = $preData->timePeriod;
               }
               
           }
           ?>
            <div class="form">
                
                <lable>Search Tranzaction</lable> 
                <?php echo form_open('view/searchtran');?>
                    <input type="text" name="dfrom" id="datepicker1" placeholder="From" value="<?php if(isset($fromDate)){ echo $fromDate; } else { echo "";} ?>" />
                    <input type="text" name="dto" id="datepicker2" placeholder="To" value="<?php if(isset($toDate)){ echo $toDate;} else{ echo "";} ?>"/>
                    
                    <select name="user">                        
                    <option value="">User...</option>
                   <?php 
                   if(isset($userData))
                   {
                       $userData = $userData;
                   }
                   else{
                       $userData = " ";
                   }
                   
                   foreach ($user as $data)
                        {?><option <?php if($userData==$data->u_id) { echo 'Selected="Selected"'; } ?> value="<?php echo $data->u_id; ?>"><?php echo $data->uname; ?></option> <?php } ?>                                   
                </select>
                    
                    <select name="branch">
                        <option value="">Branch...</option>
                        <?php 
                         if(isset($branchPre))
                   {
                       $branchPre = $branchPre;
                   }
                   else{
                       $branchPre = " ";
                   }
                        foreach ($branch as $data)
                        {?><option <?php if($branchPre==$data->b_name) { echo 'Selected="Selected"'; } ?> value="<?php echo $data->b_name; ?>"><?php echo $data->b_name; ?></option> <?php } ?>
                        
                    </select>
                    
                    <select name="agent">
                        <option value="">Remittance Company...</option>
                         <?php 
                          if(isset($agent))
                   {
                       $agent = $agent;
                   }
                   else{
                       $agent = " ";
                   }
                         foreach ($query as $data)
                        {?><option <?php if($agent==$data->a_name) { echo 'Selected="Selected"'; } ?> value="<?php echo $data->a_name; ?>"><?php echo $data->a_name; ?></option> <?php } ?>
                    </select>
                    <?php 
 $tdate = date("Y-m-d");
 $dateWeek = date('Y-m-d',strtotime($tdate."- 1 weeks"));
 ?>
                    
  <?php 
 $tdate = date("Y-m-d");
 $dateMonth = date('Y-m-d',strtotime($tdate."- 4 weeks"));
 ?>                  
     <?php 
 $tdate = date("Y-m-d");
$dateYear = date('Y-m-d',strtotime($tdate."- 52 weeks"));
 
 if(isset($timePeriod))
                   {
                       $timePeriod = $timePeriod;
                   }
                   else{
                       $timePeriod = " ";
                   }



?>
                    <select name="tranperiod">
                        <option value="">Transaction by..</option>
                        <option <?php if($timePeriod==date("Y-m-d")) { echo 'Selected="Selected"'; } ?> value="<?php echo date("Y-m-d"); ?>">Today</option>
                        <option <?php if($timePeriod==$dateWeek) { echo 'Selected="Selected"'; } ?> value="<?php echo $dateWeek; ?> ">This Week</option>
                        <option <?php if($timePeriod==$dateMonth) { echo 'Selected="Selected"'; } ?> value="<?php echo $dateMonth; ?> ">This Month</option>
                        <option <?php if($timePeriod==$dateYear) { echo 'Selected="Selected"'; } ?> value="<?php echo $dateYear; ?>">This Year</option>
                    </select>
                    <input type="submit" name="search" value="Search" />
                    
               <?php echo form_close(); ?>
                
                <br/>
                 <br/>
                <table id="cmeTable" class="tbllist">
                    <tr class="trlist">
                        <th class="tdlist"> S.N </th>
                        <th class="tdlist"> Remittance Company</th>
                        <th class="tdlist"> Branch</th>
                        <th class="tdlist"> Sender Name </th>
                         <th class="tdlist"> Amount </th>
                          <th class="tdlist"> Receiver Name </th>
                           <th class="tdlist"> Contact Number </th>
                            <th class="tdlist"> Transaction Date </th>
                      
                     <!--   <th class="tdlist"> Action </th> -->
                    </tr>
                    <?php $sn = 1; 
                    foreach ($tranlist as $data) { ?>
                    <tr  class="trlist">
                        <td class="tdlist"> <?php echo $sn++; ?></td>
                        <td class="tdlist"> <?php echo $data->agent; ?></td>
                        <td class="tdlist"> <?php echo $data->branch; ?></td>
                        <td class="tdlist"> <?php echo $data->s_name; ?></td>
                         <td class="tdlist"> Rs.  <?php echo $data->amount; ?></td>
                          <td class="tdlist"> <?php echo $data->r_name; ?></td>
                           <td class="tdlist"> <?php echo $data->contact; ?></td>
                            <td class="tdlist"> <?php echo $data->date; ?></td>
                      <!--  <td class="tdlist"><?php //echo anchor('view/getedituser/'.$data->u_id,'Edit'); ?> / <?php //echo anchor('view/deleteuser/'.$data->u_id,'Delete'); ?> </td> -->
                        <?php } ?>                   
                        
                    </tr>
                </table>     
                 <lable> <b>Total Amount Rs. &nbsp;
                 <?php
                       
               foreach ($tran as $data)
               {
                  echo $data->amount;
               }
              
                 ?>
                         </b></lable>
                 
                <br/>
                 <?php  echo $links; ?>
                
            </div>
        </div> 
