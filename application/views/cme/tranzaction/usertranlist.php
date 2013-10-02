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
           <label> <b>Received Transactions</b></label> <br/>
         
            <hr/>
            
        
            <div class="form">
                
                <lable>Search Tranzaction</lable> 
                <?php echo form_open('view/usersearchtran');?>
                    <input type="text" name="dfrom" id="datepicker1" placeholder="From" />
                    <input type="text" name="dto" id="datepicker2" placeholder="To" />
                    
                                       
                    <select name="agent">
                        <option value="">Remittance Company...</option>
                         <?php foreach ($query as $data)
                        {?><option value="<?php echo $data->a_name; ?>"><?php echo $data->a_name; ?></option> <?php } ?>
                    </select>
                    
                    <select name="tranperiod">
                        <option value="">Transaction By..</option>
                        <option value="<?php echo date("Y-m-d"); ?>">Today</option>
                        <option value=" <?php 
 $tdate = date("Y-m-d");
 echo $date = date('Y-m-d',strtotime($tdate."- 1 weeks"));
 ?>">This Week</option>
                        
                        <option value=" <?php 
 $tdate = date("Y-m-d");
 echo $date = date('Y-m-d',strtotime($tdate."- 4 weeks"));
 ?>">This Month</option>
                        <option value="<?php 
 $tdate = date("Y-m-d");
 echo $date = date('Y-m-d',strtotime($tdate."- 52 weeks"));
 ?>">This Year</option>
                    </select>
                    <input type="submit" name="search" value="Search" />
                     <input type="reset" value="Reset"/>
               <?php echo form_close(); ?>
                
               
                 <br/>
               <table id="cmeTable" class="tbllist">
                    <tr class="trlist">
                        <th class="tdlist"> S.N </th>
                        <th class="tdlist">Company</th>
                        <th class="tdlist"> Branch</th>
                        <th class="tdlist"> Sender</th>
                         
                          <th class="tdlist"> Receiver</th>
                           <th class="tdlist"> Contact</th>
                           <th class="tdlist"> Amount </th>
                            <th class="tdlist"> Transaction Date </th>
                      
                     <!--   <th class="tdlist"> Action </th> -->
                    </tr>
                    <?php $sn = 1; 
                    foreach ($tranlist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $sn++; //$data->t_id; ?></td>
                        <td class="tdlist"> <?php echo $data->agent; ?></td>
                        <td class="tdlist"> <?php echo $data->branch; ?></td>
                        <td class="tdlist"> <?php echo $data->s_name; ?></td>
                         
                          <td class="tdlist"> <?php echo $data->r_name; ?></td>
                           <td class="tdlist"> <?php echo $data->contact; ?></td>
                           <td class="tdlist"> Rs. <?php echo $data->amount; ?></td>
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
