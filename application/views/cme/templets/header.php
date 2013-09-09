<!DOCTYPE HTML>
<html>
    <head>
        <title> Chitwan Money Express</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/styles/cme.css" />
        
          <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
    </head>
    <body>
        <div class="full">
            <div class="cme">
                <img src="<?php echo base_url(); ?>content/images/sagarmatha.png" /> </div> 
            <div class="rolelogout">
       <?php 
       $role = $this->session->userdata('username');
       echo $role;
        $bid = $this->session->userdata('bid');
        $user_id = $this->session->userdata('id');?>
            <?php echo anchor('view/logout','Log Out') ?> </div>
             <div class="cus_search_menu">
           <?php
           $admin = "ad";
           $user = "us";
           if($role==$admin)
           {
               echo anchor('view/index','Home')." /".anchor('view/get_agent','Remittance Company')." /"." ".  anchor('view/userlist','Users')." / ". anchor('view/cuslist','Customers')."/"
                   .  anchor('view/tranzaction',' Remitance Claim')." /"." ".anchor('view/branchlist','Branch');
           }
 else 
     { echo  anchor('view/index','Home')." /".anchor('view/get_useragent','Remittance Company')." /".anchor('view/addcustomer','Add New Customer')."/".anchor('view/tranzaction',' Remitance Claim');
     
 }?> </div>