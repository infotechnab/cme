<!DOCTYPE HTML>
<html>
    <head>
        <title> Chitwan Money Express</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/styles/cme.css" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
       
    </head>
    <body>
        <div class="full">
            <div class="cme">
                <img src="<?php echo base_url(); ?>content/images/sagarmatha.png" /> </div> 
            <div class="rolelogout">
       <?php 
       $role = $this->session->userdata('username');
       $uname = $this->session->userdata('name');
         ?>
                <a href="<?php echo base_url()."index.php/view/useredit_self"; ?>" id ="sessionuser">
                    <img src="<?php echo base_url().'content/images/profile.png'; ?>" alt="prifileImage" /><?php echo $uname; ?></a>
                <?php 
          
        $bid = $this->session->userdata('bid');
        $user_id = $this->session->userdata('id');?>
            <?php echo anchor('view/logout','Log Out') ?> </div>
             <div class="cus_search_menu">
           <?php
           $admin = "admin";
           $user = "user";
           $adminMenuList = array("Home"=>"view/index", "Remittance Company"=>"view/get_agent",
               "User"=>"view/userlist","Customers"=>"view/cuslist","Remitance Claim"=>"view/tranzaction",
               "Branch"=>"view/branchlist","Transaction"=>"view/tranlist","Remittance Send"=>'view/sendremit',"Send Transaction List"=>"view/sendingTransaction");
           $userMenuList = array("Home"=>"view/index","Remitance Company"=>"view/get_useragent","Customers"=>"view/usercuslist","Add New Customer"=>"view/addcustomer","Remitance Claim"=>"view/tranzaction",
               "Transaction"=>"view/usertranlist","Remittance Send"=>'view/sendremit',"Send Transaction List"=>"view/sendUserTransaction");
          
           if($role==$admin)
           {
               $arrayPass = $adminMenuList;
           }
           else
           {
               $arrayPass = $userMenuList;
           }
               ?>
                 <ul id="menuList">
                 <?php 
                 
               foreach($arrayPass as $adminItemKey=>$adminItemLink)
               {
               ?>
              <li>
                     <a href="<?php echo base_url()."index.php/".$adminItemLink; ?>">
                         <?php echo $adminItemKey;?>
                     </a> 
                </li>
          <?php
               }
               ?> </ul>
                
           
</div>
            
                    