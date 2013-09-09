<!DOCTYPE HTML>
<html>
    <head>
        <title> Chitwan Money Express</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/styles/cme.css" />
    </head>
    <body>
        <div class="full_form">
            <div class="cme">
        <h1> Chitwan Money Express </h1> </div> 
            <div class="rolelogout">
       <?php 
        $this->session->userdata('username');
       $user_id = $this->session->userdata('id');
       $bid = $this->session->userdata('bid');
        $branch = $this->session->userdata('branch');?>
          </div>
       
       
         <?php 
                 foreach ($query as $data)
                 {
                     $refcode = $data->ref_number;
                     $rname = $data->r_name;
                     $address = $data->address;
                     $phone = $data->contact;
                     $sname = $data->s_name;
                     $country = $data->country;
                     $amount = $data->amount;
                     $idtype = $data->d_type;
                     $idnum = $data->d_number;
                     $authcode = $data->auth_code;
                     $agent = $data->agent;
                     $date = $data->date;
                     $idplace = $data->d_place;
                     $iddate = $data->d_date;
                     $idexpire = $data->d_expire;
                 }
                 $date = date('20y-m-d ',intval($date));
                 //$date = strtotime($date);
                 $agentimg = $this->dbmodel->get_agentimg($agent);
                 $branch = $this->dbmodel->get_branch($bid);
                
                  //$time_stamp=time(); //gives timestamp
//$date_format=date("m:d:y",$time_stamp); // formats timestamp in mm:dd:yy 
 
                // die($date);
                foreach ($branch as $data)
                {
                    $bname = $data->b_name;
                }
                foreach ($agentimg as $data)
                {
                    $img = $data->image;
                }
         ?>   
            
        <div class="cme_agent_from">
            <div class="cme_n_a">
            <div class="cme_name"> CME </div>
            <div class="cme_agent_logo"> <img src="<?php echo base_url(),"agentimg/". $img;?>" width="150px" height="60px" /> </div>
            <div class="clear" > </div>
            <div> <b> <?php echo $bname; ?> </b></div>
            </div>
                <div class="clear" > </div>
                <hr/>
            <div class="cme_form">
                <div class="cme_customer">
                    <b>Customer Info</b> <br/>
                    <lable> <b> Remittance Claim Form </b> </lable> <br/>
                    <table>
                        <tr>
                            <td>  <lable >Reference Code </lable>  </td>
                    <td>  <input type="text" value="<?php echo $refcode; ?>"/>            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                 <lable> <b>Receiver's Info </b></lable>
                            </td>
                        </tr>
                       <!-- <tr>
                            <td>  <lable>Title </lable></td>
                    <td> <input type="checkbox"/> <input type="checkbox" /><input type="checkbox"/>  <input type="checkbox"/></td>
                        </tr> -->
                        <tr>
                            <td><lable>Name </lable></td>
                    <td><input type="text" value="<?php echo $rname; ?>"/></td>
                        </tr>
                        <tr>
                            <td><lable>Address</lable></td>
                    <td><input type="text" value="<?php echo $address; ?>"/></td>
                        </tr>
                        <tr>
                            <td><lable>Town/city </lable></td>
                    <td> <input type="text"/></td>
                        </tr>
                        <tr>
                            <td> <lable>Country </lable></td>
                    <td><input type="text" value="Nepal" /></td>
                        </tr>
                        <tr>
                            <td><lable>Relation With Sender</lable></td>
                    <td> <input type="text"/></td>
                        </tr>
                        <tr>
                            <td> <lable>Contact Number</lable></td>
                    <td><input type="text" value="<?php echo $phone; ?>"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Sender Info</b></td>
                        </tr>
                      <!--  <tr>
                            <td>  <lable>Title </lable></td>
                            
                    <td> <input type="checkbox"/> <input type="checkbox" /><input type="checkbox"/>  <input type="checkbox"/></td>
                        </tr> -->
                        <tr>
                            <td> <lable>Name</lable></td>
                    <td><input type="text" value="<?php echo $sname; ?>"/></td>
                        </tr>
                        <tr>
                            <td> <lable>Country</lable></td>
                    <td><input type="text" value="<?php echo $country; ?>"/></td>
                        </tr>
                        <tr>
                            <td> <lable>Expected Amount</lable></td>
                    <td><input type="text" value="<?php echo $amount; ?>"/></td>
                        </tr>
                        
                    </table>                      
                  </div>
                <div class="cme_official">
                    <b> official work </b> <br/>
                        <table>
                            <tr>
                            <td>Authorized Code If Any </td>
                              </tr>
                              <tr>
                                   <td> <input type="text" value="<?php echo $authcode; ?>"/> </td>
                              </tr>
                        </table>
                        <div id="owork"> office stamp </div>
                        <table>
                            <tr>
                                <td>Receiver's ID Detail</td>
                            </tr>
                            <tr>
                                <td> <lable>Document Type</lable></td>
                        <td> <input type="text" value="<?php echo $idtype; ?>"/></td>
                            </tr>
                             <tr>
                                <td> <lable>ID Number</lable></td>
                        <td> <input type="text" value="<?php echo $idnum; ?>"/></td>
                            </tr>
                            <tr>
                                <td> <lable>Issue Place</lable></td>
                        <td> <input type="text" value="<?php echo $idplace ?>"/></td>
                            </tr>
                             <tr>
                                <td> <lable>Issue Date</lable></td>
                        <td> <input type="text" value="<?php echo $iddate; ?>"/></td>
                            </tr>
                        </table>
                              
            </div> 
                 <div class="clear" > </div><br/>
                <div class="tra_dis"> <b> Transaction Disclaimer </b></div>
                <div> <p>I hereby declare that the information furnished above is true and correct and guarantee to indemnify the <b><?php echo $agent; ?> </b> in the event of the third party claim or any loss arising out of the above transaction.</p> </div>
               <br/>
               <br/>
                <div class="recive_sign">
                    <div class="sign"> <hr/> <br/> Receiver Signature </div>
                     <div class="sign" style="margin-top: -20px;"> <?php echo $date; ?> <hr/> <br/> Date </div>
                      <div class="sign"> <hr/> <br/> Prepared By </div>
                       <div class="sign"> <hr/> <br/> Check and Approved by</div>
                </div>
        </div>
                <div class="clear" > </div>
        </div>
            <br/>
        </div>
           
    </body>
</html>