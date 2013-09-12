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
                     $cdate = $data->date;
                     $idplace = $data->d_place;
                     $iddate = $data->d_date;
                     $idexpire = $data->d_expire;
                     $income = $data->source;
                     $relation = $data->relation;
                     $stitle = $data->s_title;
                     $rtitle = $data->r_title;
                     $city = $data->city;
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
                }
         ?> 
    <div id="officecopy" style="float: left; font-size: 11px;">
<table  border="1" cellpadding="1" style="border-collapse:collapse; width: 715px;  ">
  <tr>
      <th colspan="4" scope="col"><img src="<?php echo base_url(); ?>content/images/sagarmatha.png" width="500" height="58"/><img src="<?php echo base_url(); ?>agentimg/<?php echo $img; ?>" width="150" height="50" /></th>
  </tr>
  <tr>
    <td colspan="4" style="text-align: center; font-size: 13px;font-family: 'Arial Black', Gadget, sans-serif;"> <strong><?php echo $baddress." ".","." "."Phone Number : ".$bnumber; ?></strong></td>
  </tr>
  <tr>
    <td width="130" > <b> Reference/Code Number </b></td>
    <td width="250" ><?php echo $refcode; ?></td>
    <td> <b> Authorization Code If any </b></td>
    <td width="142"><?php echo $authcode; ?></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Receiver's Info</strong></td>
    <td class="officestamp" colspan="2" rowspan="6" style="text-align:center; color: #D0D0D0;"><strong>Office Stamp</strong></td>
  </tr>
  
  <tr>
    <td> <b>Name: </b></td>
    <td><?php echo $rtitle." ".$rname; ?></td>
  </tr>
  <tr>
    <td> <b>Address: </b></td>
    <td><?php echo $address; ?></td>
  </tr>
  <tr>
    <td><b>Tole : </b></td>
    <td><?php echo $city; ?></td>
  </tr>
  <tr>
    <td><b>Country:</b></td>
    <td>Nepal</td>
    
  <tr>
    <td><b>Relationship with Sender:</b></td>
    <td><?php echo $relation; ?></td>
    
  </tr>
  <tr>
    <td><b>Contact Number:</b></td>
    <td><?php echo $phone; ?></td>
    <td colspan="2"><strong>Receiver's ID Detail</strong></td>
    
  </tr>
  <tr>
    <td colspan="2"><strong>Sender's Info</strong></td>
    <td><strong>Type: </strong></td>
    <td><?php echo $idtype; ?></td>
   
  </tr>
  <tr>
    <td> <b>Name:</b> </td>
    <td><?php echo $stitle." ".$sname; ?></td>
    <td><strong>ID Number: </strong></td>
    <td><?php echo $idnum; ?></td>
    
    
  </tr>
  <tr>
   <td><b>Country:</b></td>
    <td><?php echo $country; ?></td>
    <td><strong>Issued Place:</strong></td>
    <td><?php echo $idplace; ?></td>
   
  </tr>
 
  <tr>
    <td><b>Income Source:</b></td>
    <td><?php echo $income; ?></td>
     <td><strong>Issued Date: </strong></td>
    <td><?php echo $iddate; ?></td>
    
    
  </tr>
  <tr>
    <td><strong>Amount: </strong></td>
    <td><?php echo $amount; ?></td>
     <td><strong>Expiry Date: </strong></td>
    <td><?php echo $idexpire; ?></td>
   
  </tr>
  <tr>
    <td colspan="4"><strong>Transaction Disclaimer</strong></td>
  </tr>
  <tr>
    <td colspan="4"><p>I hereby declare that the information furnished above is true and   correct and guarantee to indemnify the <b> <?php echo $agent; ?> </b> in the event of the third party claim or any loss   arising out of the above transaction.माथि उल्लेख गरिएको विवरण साँचो छ । अन्यथा भएमा / अरु व्यक्तिले दाबि गरेमा मैले बुझिलिएको रकम चितवन मनी एक्सप्रेसलाई तिरी बुझाउने छु । साथै झुठो ठहरिएमा कानुन बमोजिम सहुँला बुझाउँला ।</p>

  
    <p>&nbsp;</p>
        <div class="recive_sign">
                    <div class="sign"> <hr/> <br/> Receiver Signature </div>
                    <div class="sign" style="margin-top: -13px;"> <?php echo date('Y-M-d',  strtotime($cdate)); ?> <hr/> <br/> Date </div>
                      <div class="sign"> <hr/> <br/> Prepared By </div>
                       <div class="sign"> <hr/> <br/> Check and Approved by</div>
                </div>
    </td>
       
  </tr>
  <tr>
    <td colspan="4"><strong>web: www.cmeremit.com.np Email: info@cmeremit.com Facebook: www.facebook.com/cmeremit</strong></td>
  </tr>
</table>
        <br/>


<hr style="border: dotted 1px #000;" />
<br/>
    </div>
    
    
    
    
    <a class="pageprint" href="#" onclick="window.print(); return false;" style="margin-left: 100px; margin-right: 50px; "> Print </a>
    <?php echo anchor('view/index','Home','class="pageprint"'); ?> 
    
    <div id="customercopy" style=" float: left; font-size: 11px;">
   <table  border="1" cellpadding="1" style="border-collapse:collapse; width: 715px;  ">
  <tr>
      <th colspan="4" scope="col"><img src="<?php echo base_url(); ?>content/images/sagarmatha.png" width="500" height="58"/><img src="<?php echo base_url(); ?>agentimg/<?php echo $img; ?>" width="150" height="50" /></th>
  </tr>
  <tr>
    <td colspan="4" style="text-align: center; font-size: 13px;font-family: 'Arial Black', Gadget, sans-serif;"> <strong><?php echo $baddress." ".","." "."Phone Number : ".$bnumber; ?></strong></td>
  </tr>
  <tr>
    <td width="130" > <b> Reference/Code Number </b></td>
    <td width="250" ><?php echo $refcode; ?></td>
    <td> <b> Authorization Code If any </b></td>
    <td width="142"><?php echo $authcode; ?></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Receiver's Info</strong></td>
    <td class="officestamp" colspan="2" rowspan="6" style="text-align:center; color: #D0D0D0;"><strong>Office Stamp</strong></td>
  </tr>
  
  <tr>
    <td> <b>Name: </b></td>
    <td><?php echo $rtitle." ".$rname; ?></td>
  </tr>
  <tr>
    <td> <b>Address: </b></td>
    <td><?php echo $address; ?></td>
  </tr>
  <tr>
    <td><b>Tole : </b></td>
    <td><?php echo $city; ?></td>
  </tr>
  <tr>
    <td><b>Country:</b></td>
    <td>Nepal</td>
    
  <tr>
    <td><b>Relationship with Sender:</b></td>
    <td><?php echo $relation; ?></td>
    
  </tr>
  <tr>
    <td><b>Contact Number:</b></td>
    <td><?php echo $phone; ?></td>
    <td colspan="2"><strong>Receiver's ID Detail</strong></td>
    
  </tr>
  <tr>
    <td colspan="2"><strong>Sender's Info</strong></td>
    <td><strong>Type: </strong></td>
    <td><?php echo $idtype; ?></td>
   
  </tr>
  <tr>
    <td> <b>Name:</b> </td>
    <td><?php echo $stitle." ".$sname; ?></td>
    <td><strong>ID Number: </strong></td>
    <td><?php echo $idnum; ?></td>
    
    
  </tr>
  <tr>
   <td><b>Country:</b></td>
    <td><?php echo $country; ?></td>
    <td><strong>Issued Place:</strong></td>
    <td><?php echo $idplace; ?></td>
   
  </tr>
 
  <tr>
    <td><b>Income Source:</b></td>
    <td><?php echo $income; ?></td>
     <td><strong>Issued Date: </strong></td>
    <td><?php echo $iddate; ?></td>
    
    
  </tr>
  <tr>
    <td><strong>Amount: </strong></td>
    <td><?php echo $amount; ?></td>
     <td><strong>Expiry Date: </strong></td>
    <td><?php echo $idexpire; ?></td>
   
  </tr>
  <tr>
    <td colspan="4"><strong>Transaction Disclaimer</strong></td>
  </tr>
  <tr>
    <td colspan="4"><p>I hereby declare that the information furnished above is true and   correct and guarantee to indemnify the <b> <?php echo $agent; ?> </b> in the event of the third party claim or any loss   arising out of the above transaction.माथि उल्लेख गरिएको विवरण साँचो छ । अन्यथा भएमा / अरु व्यक्तिले दाबि गरेमा मैले बुझिलिएको रकम चितवन मनी एक्सप्रेसलाई तिरी बुझाउने छु । साथै झुठो ठहरिएमा कानुन बमोजिम सहुँला बुझाउँला ।</p>

  
    <p>&nbsp;</p>
        <div class="recive_sign">
                    <div class="sign"> <hr/> <br/> Receiver Signature </div>
                    <div class="sign" style="margin-top: -13px;"> <?php echo date('Y-M-d',  strtotime($cdate)); ?> <hr/> <br/> Date </div>
                      <div class="sign"> <hr/> <br/> Prepared By </div>
                       <div class="sign"> <hr/> <br/> Check and Approved by</div>
                </div>
    </td>
       
  </tr>
  <tr>
    <td colspan="4"><strong>web: www.cmeremit.com.np Email: info@cmeremit.com Facebook: www.facebook.com/cmeremit</strong></td>
  </tr>
</table>
  
    </div>
</body>
</html>