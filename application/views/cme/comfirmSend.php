<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chitwan Money Express</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/styles/cme.css" />
</head>
    <style>
        @media print{
            .pageprint{
                display: none;
            }
            .officestamp{
                color: #D0D0D0;
            }
            
        }
        
        
    </style>

<body class="printview">
     <?php 
        $this->session->userdata('username');
       $user_id = $this->session->userdata('id');
       $bid = $this->session->userdata('bid');
       //$branch = $this->session->userdata('branch');
      ?>
     <?php 
                 foreach ($query as $data)
                 {
                      $authcode = $data->auth_code;
                     $agent = $data->agent;
                     $refcode = $data->ref_number;
                      $rtitle = $data->r_title;
                     $rname = $data->r_name;
                     $address = $data->r_address;
                     $reciverCon = $data->r_contact;
                     $idtype = $data->r_id_type;
                     $idnum = $data->r_id_number;
                     $amount = $data->amount;
                     $camount = $data->c_amount;
                      $cdate = $data->date;

                      $stitle = $data->s_title;
                     $sname = $data->s_name;
                     $country = $data->s_country;
                     $village = $data->s_village;
                     $ward = $data->s_ward;
                     $tole = $data->s_tole;
                     $city = $data->s_city;
                     $distirc = $data->s_distric;
                     $zone = $data->s_zone;
                     $Scountry = $data->s_country;
                     $relation = $data->s_relation;
                     $contact = $data->s_contact;
                    // $income = $data->source;
                  
                 }
                 //$date = date('20y-m-d ',intval($date));
                 //$date = strtotime($date);
                 
               // print_r($cdate);
                 
                //$date1 = new DateTime();
                //$date1->setDate(2013, 12,12);
                
                 $agentimg = $this->dbmodel->get_agentimg($agent);
                 $branch = $this->dbmodel->get_branch($bid);
                
                  //$time_stamp=time(); //gives timestamp
//$date_format=date("m:d:y",$time_stamp); // formats timestamp in mm:dd:yy 
 
                // die($date);
                foreach ($branch as $data)
                {
                    $bname = $data->b_name;
                    $baddress = $data->address;
                    $bnumber = $data->ph_number;
                }
                foreach ($agentimg as $data)
                {
                    $img = $data->image;
                    $nepali = $data->n_name;
                }
         ?> 
    <div id="officecopy" style="float: left; font-size: 11px;">
<table  border="1" cellpadding="2" style="border-collapse:collapse; width: 715px;  ">
  <tr>
      <th colspan="8" scope="col"><img src="<?php echo base_url(); ?>content/images/sagarmatha.png" width="500" height="58"/><img src="<?php echo base_url(); ?>agentimg/<?php echo $img; ?>" width="150" height="50" /></th>
  </tr>
  <tr>
    <td colspan="8" style="text-align: center; font-size: 13px;font-family: 'Arial Black', Gadget, sans-serif;"> <strong><?php echo $baddress." ".","." "."Phone Number : ".$bnumber; ?></strong></td>
  </tr>
  <tr>
    <td width="130" > <b> Reference/Code Number </b></td>
    <td  colspan="3" ><?php echo $refcode; ?></td>
    <td colspan="2" width="140"> <b> Authorization Code If any </b></td>
    <td width="150" colspan="2"><?php echo $authcode; ?></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Sender's Info</strong></td>
    <td class="officestamp" colspan="4" rowspan="7" style="text-align:center; color: #D0D0D0;"><strong>Office Stamp</strong></td>
  </tr>
  
  <tr>
    <td> <b>Name: </b></td>
    <td colspan="3"><?php echo $stitle." ".$sname; ?></td>
  </tr>
  <tr>
    <td> <b>Address: </b></td>
    <td colspan="3"><?php echo $village."-".$ward.",".$tole.",".$city.",".$distirc.",".$zone; ?></td>
  </tr>
  <tr>
   
    <td  width="100" ><b>Country:</b></td>
    <td colspan="3"><?php echo $Scountry; ?></td>
  </tr>
 
  <tr>
    <td><b>Relationship with Sender:</b></td>
    <td colspan="3"><?php echo $relation; ?></td>
    
  </tr>
  <tr>
    <td><b>Contact Number:</b></td>
    <td colspan="3"><?php echo $contact; ?></td>
    
  </tr>
  <tr>
  <td colspan="4"><strong>Receiver's ID Detail</strong></td>
      
  </tr>
  <tr>
  <td><strong>Type: </strong></td>
    <td colspan="3"><?php echo $idtype; ?></td>
  <td colspan="4"><strong>Receiver's Info</strong></td>
  </tr>
  <tr>
    <td><strong>ID Number: </strong></td>
    <td colspan="3"><?php echo $idnum; ?></td>
    <td> <b>Name:</b> </td>
    <td colspan="3"><?php echo $rtitle." ".$rname; ?></td>
    
  </tr>
  <tr>
  
   <td ><b>Country:</b></td>
    <td colspan="3"><?php echo $country; ?></td>
     <td><b>Address</b></td>
    <td colspan="3"><?php echo $address; ?></td>
     
    
  </tr>
    
 
  <tr>
    
    <td><strong>Amount: </strong></td>
    <td > <b> Rs. <?php echo $amount; ?></b></td>
     <td><strong>Service Charge: </strong></td>
    <td colapsn="3"><b>Rs.<?php echo $camount; ?></b></td>
  </tr>
 
  <tr>
    <td colspan="8"><strong>Transaction Disclaimer</strong></td>
  </tr>
  <tr>
    <td colspan="8"><p>I hereby declare that the information furnished above is true and   correct and guarantee to indemnify the <b> <?php echo $agent; ?> </b> in the event of the third party claim or any loss   arising out of the above transaction.
            माथि उल्लेख गरिएको विवरण साँचो छ । अन्यथा भएमा / अरु व्यक्तिले दाबि गरेमा मैले बुझिलिएको रकम <b> <?php echo $nepali; ?> </b>लाई तिरी बुझाउने छु । साथै झुठो ठहरिएमा कानुन बमोजिम सहुँला बुझाउँला ।</p>

  
    <p>&nbsp;</p>
       <div class="recive_sign" style="width: 98%; padding: 2%; text-align: center;">
                    <div class="sign" style="width: 20%; float: left; margin-right: 3%;"> <hr/> <br/> Receiver Signature </div>
                    <div class="sign" style="margin-top: -13px; width: 20%; float: left; margin-right: 3%;"> <?php echo date('Y-M-d',  strtotime($cdate)); ?> <hr/> <br/> Date </div>
                      <div class="sign" style="width: 20%; float: left; margin-right: 3%;"> <hr/> <br/> Prepared By </div>
                       <div class="sign" style="width: 20%; float: left; margin-right: 3%;"> <hr/> <br/> Check and Approved by</div>
                </div>
    </td>
       
  </tr>
  <tr>
    <td colspan="8"><strong>web: www.cmeremit.com.np Email: info@cmeremit.com Facebook: www.facebook.com/cmeremit</strong></td>
  </tr>
</table>
        <br/>


<hr style="border: dotted 1px #000;" />
<br/>
    </div>
    
    
    
    
    <a class="pageprint" href="#" onclick="window.print(); return false;" style="margin-left: 100px; margin-right: 50px; "> Print </a>
    <?php echo anchor('view/index','Home','class="pageprint"'); ?> 
    
    <div id="customercopy" style=" float: left; font-size: 11px;">
  <table  border="1" cellpadding="2" style="border-collapse:collapse; width: 715px;  ">
  <tr>
      <th colspan="8" scope="col"><img src="<?php echo base_url(); ?>content/images/sagarmatha.png" width="500" height="58"/><img src="<?php echo base_url(); ?>agentimg/<?php echo $img; ?>" width="150" height="50" /></th>
  </tr>
  <tr>
    <td colspan="8" style="text-align: center; font-size: 13px;font-family: 'Arial Black', Gadget, sans-serif;"> <strong><?php echo $baddress." ".","." "."Phone Number : ".$bnumber; ?></strong></td>
  </tr>
  <tr>
    <td width="130" > <b> Reference/Code Number </b></td>
    <td  colspan="3" ><?php echo $refcode; ?></td>
    <td colspan="2" width="140"> <b> Authorization Code If any </b></td>
    <td width="150" colspan="2"><?php echo $authcode; ?></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Sender's Info</strong></td>
    <td class="officestamp" colspan="4" rowspan="7" style="text-align:center; color: #D0D0D0;"><strong>Office Stamp</strong></td>
  </tr>
  
  <tr>
    <td> <b>Name: </b></td>
    <td colspan="3"><?php echo $stitle." ".$sname; ?></td>
  </tr>
  <tr>
    <td> <b>Address: </b></td>
    <td colspan="3"><?php echo $village."-".$ward.",".$tole.",".$city.",".$distirc.",".$zone; ?></td>
  </tr>
  <tr>
   
    <td  width="100" ><b>Country:</b></td>
    <td colspan="3"><?php echo $Scountry; ?></td>
  </tr>
 
  <tr>
    <td><b>Relationship with Sender:</b></td>
    <td colspan="3"><?php echo $relation; ?></td>
    
  </tr>
  <tr>
    <td><b>Contact Number:</b></td>
    <td colspan="3"><?php echo $contact; ?></td>
    
  </tr>
  <tr>
  <td colspan="4"><strong>Receiver's ID Detail</strong></td>
      
  </tr>
  <tr>
  <td><strong>Type: </strong></td>
    <td colspan="3"><?php echo $idtype; ?></td>
  <td colspan="4"><strong>Receiver's Info</strong></td>
  </tr>
  <tr>
    <td><strong>ID Number: </strong></td>
    <td colspan="3"><?php echo $idnum; ?></td>
    <td> <b>Name:</b> </td>
    <td colspan="3"><?php echo $rtitle." ".$rname; ?></td>
    
  </tr>
  <tr>
  
   <td ><b>Country:</b></td>
    <td colspan="3"><?php echo $country; ?></td>
     <td><b>Address</b></td>
    <td colspan="3"><?php echo $address; ?></td>
     
    
  </tr>
    
 
  <tr>
    
    <td><strong>Amount: </strong></td>
    <td > <b> Rs. <?php echo $amount; ?></b></td>
     <td><strong>Service Charge: </strong></td>
    <td colapsn="3"><b>Rs.<?php echo $camount; ?></b></td>
  </tr>
 
  <tr>
    <td colspan="8"><strong>Transaction Disclaimer</strong></td>
  </tr>
  <tr>
    <td colspan="8"><p>I hereby declare that the information furnished above is true and   correct and guarantee to indemnify the <b> <?php echo $agent; ?> </b> in the event of the third party claim or any loss   arising out of the above transaction.
            माथि उल्लेख गरिएको विवरण साँचो छ । अन्यथा भएमा / अरु व्यक्तिले दाबि गरेमा मैले बुझिलिएको रकम <b> <?php echo $nepali; ?> </b>लाई तिरी बुझाउने छु । साथै झुठो ठहरिएमा कानुन बमोजिम सहुँला बुझाउँला ।</p>

  
    <p>&nbsp;</p>
       <div class="recive_sign" style="width: 98%; padding: 2%; text-align: center;">
                    <div class="sign" style="width: 20%; float: left; margin-right: 3%;"> <hr/> <br/> Receiver Signature </div>
                    <div class="sign" style="margin-top: -13px; width: 20%; float: left; margin-right: 3%;"> <?php echo date('Y-M-d',  strtotime($cdate)); ?> <hr/> <br/> Date </div>
                      <div class="sign" style="width: 20%; float: left; margin-right: 3%;"> <hr/> <br/> Prepared By </div>
                       <div class="sign" style="width: 20%; float: left; margin-right: 3%;"> <hr/> <br/> Check and Approved by</div>
                </div>
    </td>
       
  </tr>
  <tr>
    <td colspan="8"><strong>web: www.cmeremit.com.np Email: info@cmeremit.com Facebook: www.facebook.com/cmeremit</strong></td>
  </tr>
</table>
  
    </div>
</body>
</html>