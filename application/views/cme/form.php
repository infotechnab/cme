<!DOCTYPE HTML>
<html>
    <head>
        <title> Chitwan Money Express</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/styles/cme.css" />
    </head>
    <body>
        <div class="full">
            <div class="cme">
         <img src="<?php echo base_url(); ?>content/images/sagarmatha.png" /> </div>
        <div class="cus_search">
            <h2>Login</h2>
            <hr/>
            <div class="form">
<div id="loginform"/>
 <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>
   <?php echo form_open('login/validate_credentials'); ?>
       
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/> <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/> <br/>
     <input type="submit" value="Login"/>
   </form>
</div>
            </div>
             </div>           