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
                   .  anchor('view/tranzaction',' Remitance Claim')." /"." ".anchor('view/branchlist','Branch')." /"." ".anchor('view/tranlist','Tranzaction');
           }
 else 
     { echo  anchor('view/index','Home')." /".anchor('view/get_useragent','Remittance Company')." /".anchor('view/addcustomer','Add New Customer')."/".anchor('view/tranzaction',' Remitance Claim');
     
 }?> </div>
            
                    