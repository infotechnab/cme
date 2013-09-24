<!DOCTYPE HTML>
<html>
    <head>
        <title> Chitwan Money Express</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/styles/cme.css" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
               "Branch"=>"view/branchlist","Transaction"=>"view/tranlist");
           $userMenuList = array("Home"=>"view/index","Remitance Company"=>"view/get_useragent","Add New Customer"=>"view/addcustomer","Remitance Claim"=>"view/tranzaction");
          
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
            
                    