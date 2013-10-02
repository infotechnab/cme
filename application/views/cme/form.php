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
<div id="logInFormDiv"/>
 
 <table id="logInForm">
   <?php echo form_open('login/validate_credentials'); ?>
     <tr>
         <td><label for="username">Username:</label></td>
         <td><input type="text" size="20" id="username" name="username" placeholder="username"/><img src="<?php echo base_url(); ?>content/images/profile.png" /></td>
     </tr>  
     <tr>
         <td><label for="password">Password:</label></td>
          <td><input type="password" size="20" id="passowrd" name="password" placeholder="******"/><img src="<?php echo base_url(); ?>content/images/password.png" /></td>
     </tr>
     <tr>
         <td>   </td>
         <td><input type="submit" value="Login"/></td>
     </tr>
     
     
   </form>
</table>

</div>

<div id="loginFormSucessMsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> 
 </div>
   <div class="clear"/>
            </div>
             </div>   
        </div>