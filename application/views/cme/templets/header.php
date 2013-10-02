<!DOCTYPE HTML>
<html>
    <head>
        <title>.:: CME - Chitwan Money Express</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/styles/cme.css" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="icon" href="<?php echo base_url(); ?>content/images/favicon.ico" type="image/gif" sizes="16x16"> 
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
           $adminMenuList = array("Home"=>"view/index","Receive Money"=>"view/tranzaction","Send Money"=>'view/sendremit',
               "Customers"=>"view/cuslist","Remittance Company"=>"view/get_agent",
               "User"=>"view/userlist",
               "Branch"=>"view/branchlist","Received Transaction"=>"view/tranlist",
               "Sent Transaction"=>"view/sendingTransaction");
           $userMenuList = array("Home"=>"view/index","Receive Money"=>"view/tranzaction","Send Money"=>'view/sendremit',
                 "Customers"=>"view/usercuslist", "Remitance Company"=>"view/get_useragent",  
               "Received Transaction"=>"view/usertranlist",
               "Sent Transaction"=>"view/sendUserTransaction");
          
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
            
                    