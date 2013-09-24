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
                        <option value="">Transaction Period..</option>
                        <option value="<?php echo date("Y-m-d"); ?>">Today</option>
                        <option value=" <?php 
 $tdate = date("Y-m-d");
 echo $date = date('Y-m-d',strtotime($tdate."- 1 weeks"));
 ?>">Weekly</option>
                        <option value="<?php 
 $tdate = date("Y-m-d");
 echo $date = date('Y-m-d',strtotime($tdate."- 52 weeks"));
 ?>">Yearly</option>
                    </select>
                    <input type="submit" name="search" value="Search" />
                    
               <?php echo form_close(); ?>
                
                <br/>
                 <br/>
                <table class="tbllist">
                    <tr class="trlist">
                        <td class="tdlist"> S.N </td>
                        <td class="tdlist"> Remittance Company</td>
                        <td class="tdlist"> Branch</td>
                        <td class="tdlist"> Sender Name </td>
                         <td class="tdlist"> Amount </td>
                          <td class="tdlist"> Receiver Name </td>
                           <td class="tdlist"> Contact Number </td>
                            <td class="tdlist"> Tranzaction Date </td>
                      
                     <!--   <td class="tdlist"> Action </td> -->
                    </tr>
                    <?php foreach ($tranlist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->t_id; ?></td>
                        <td class="tdlist"> <?php echo $data->agent; ?></td>
                        <td class="tdlist"> <?php echo $data->branch; ?></td>
                        <td class="tdlist"> <?php echo $data->s_name; ?></td>
                         <td class="tdlist"> <?php echo $data->amount; ?></td>
                          <td class="tdlist"> <?php echo $data->r_name; ?></td>
                           <td class="tdlist"> <?php echo $data->contact; ?></td>
                            <td class="tdlist"> <?php echo $data->date; ?></td>
                      <!--  <td class="tdlist"><?php //echo anchor('view/getedituser/'.$data->u_id,'Edit'); ?> / <?php //echo anchor('view/deleteuser/'.$data->u_id,'Delete'); ?> </td> -->
                        <?php } ?>                   
                        
                    </tr>
                </table>             
               
                <br/>
                 <?php  echo $links; ?>
                
            </div>
        </div> 
