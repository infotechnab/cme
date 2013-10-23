 <?php
       $role = $this->session->userdata('username');
       $bid = $this->session->userdata('bid');
       $user_id = $this->session->userdata('id');?>
<div class="cme">   <p id="sucessmsg">
  <?php echo validation_errors();?>

         <?php  if(isset($error))
         {echo $error;}

         if(isset($mess))
         {
             echo $mess;
         }
         
         $branch = $this->dbmodel->get_branch($bid);
        foreach ($branch as $data) {
            $bname = $data->b_name;
        }
?>
    </p></div>

        <div class="cus_detail">
            <b>Remittance  Collection Form</b>
            <hr/>
<?php   foreach ($customer as $data)
                {

                     $cid = $data->c_id;
                     $cusid = $data->cus_id;
                     $fname = $data->fname;
                     $mname = $data->mname;
                     $lname= $data->lname;
                     $vdc = $data->vdc;
                     $ward = $data->ward;
                     $city = $data->city;
                     $address = $data->address;
                     $distirc = $data->distric;
                     $tole = $data->tole;
                     $zone = $data->zone;
                     $country = $data->country;
                     $conpersonal = $data->conpersonal;
                     $conhome = $data->conhome;
                     $image = $data->image;
                     $email = $data->email;
                     $title = $data->title;

                }
                //$identity = $this->dbmodel->get_identity($cid);
               
               //echo '<script type="text/javascript">'.'var dat='.json_encode($identity).'</script>';
               ?>
        
                   
                        
               <?php

                $detail = $this->dbmodel->get_identity($cid);
               // print_r($detail);

                foreach ($detail as $data)
                {
                    $id = $data->ci_id;
                    $type = $data->type;
                    $idnum = $data->id_number;
                    $idplace  = $data->issue_place;
                    $iddate = $data->issue_date;
                    $exdate = $data->expire_date;
                }
                ?>
       

            <div class="form">
            <?php echo form_open_multipart('view/addSendTransaction_get'); ?>
                <input type="hidden" name="uid" value="<?php echo $user_id; ?>" />
                <input type="hidden" name="customerid" value="<?php echo $cid;?>" />
                 <input type="hidden" name="cusid" value="<?php echo $cusid;?>" />
                 <input type="hidden" name="branch" value="<?php echo $bname;?>" />
                <table >
                <tr>
                    <td> <input class="intexth"   type="text" name="ref_number" placeholder="Refrence Number" /> </td>

                    <td> Remittance Company:</td>

                    <td> <select class="a_name" name="a_name">
                            <?php
                            foreach ($query as $data) {
                                ?>
                                <option value="<?php echo $data->a_name; ?>">
                                <?php echo $data->a_name; ?>
                                </option> <?php } ?>
                        </select> </td>

                    <td><input class="intexth" type="text" name="auth_code" placeholder="Authorization Code" /></td>
                </tr>


            </table>


            <div class="cidentitytran">

                <div class="t_left">
            <label id="clpid"> <b > Sender Info </b></label> <hr/>
             <table>
                <tr>
                    <td>
                         <input type="radio" name="title" value="Mr." <?php if($title=='Mr.') { ?> checked <?php } ?> /> Mr. &nbsp; <input type="radio" name="title" value="Mrs."<?php if($title=='Mrs.') { ?> checked <?php } ?> /> Mrs. &nbsp; <input type="radio" name=title" value="Miss."<?php if($title=='Miss.') { ?> checked <?php } ?> /> Miss. &nbsp; <input type="radio" name="title" value="Ms."<?php if($title=='Ms.') { ?> checked <?php } ?> /> Ms.
                    </td>
                </tr>
            </table>
            <br/>
            <input class="intexth" type="text" name="s_name" placeholder="Sender Name" value="<?php echo $fname." " .$mname." ".$lname; ?>"/> <br/> <br/>
            <input type="text" name="senderContact" placeholder="Contact Number" value="<?php echo $conpersonal.", ".$conhome; ?>" /> <br/> <br/>
            <lable><b>Address</b></lable> <br/> <br/>
            
            <input type="text" name="village" placeholder="Village / Municipality" value="<?php echo $vdc; ?>" />
            <input type="text" name="ward" placeholder="Ward No." value="<?php echo $ward; ?>" /> <br/><br/>
            <input type="text" name="tole" placeholder="Tole" value="<?php echo $tole; ?>"/>
            <input type="text" name="city" placeholder="City" value="<?php echo $city; ?>"/> <br/><br/>
            <input type="text" name="distric" placeholder="Distric" value="<?php echo $distirc; ?>" />
            <input type="text" name="zone" placeholder="Zone" value="<?php echo $zone; ?>" /> <br/><br/>
            

            <select class="" name="country">

<option value="Nepal">Nepal</option>
</select> <br/> <br/>
        
          <select class="" name="relation">
              <option value="" >Relation...</option>
              <option value="Father" >Father</option>
              <option value="Mother">Mother</option>
              <option value="Brother" >Brother</option>
              <option value="Sister" > Sister </option>
              <option value="Daughter" > Daughter </option>
              <option value="Son" > Son </option>
              <option value="Friend" > Friend </option>
              <option value="Husband" > Husband </option>
              <option value="Wife" > Wife </option>
              <option value="Aunt" > Aunt </option>
              <option value="Uncle" > Uncle </option>
              <option value="Nephew" > Nephew </option>
              <option value="Cousin" > Cousin </option>
              <option value="Grandmother" > Grandmother </option>
              <option value="Grandfather" > Grandfather </option>
              <option value="Granddaughter" > Granddaughter </option>
              <option value="Grandson" > Grandson </option>
              <option value="Sister-in-law" > Sister-in-law </option>
              <option value="Brother-in-law" > Brother-in-law </option>
              <option value="Mother-in-law" > Mother-in-law </option>
              <option value="Father-in-law" > Father-in-law</option>
              <option value="Daughter-in-law" > Daughter-in-law </option>
              <option value="Son-in-law" > Son-in-law </option>
              <option value="Other">Other</option>
          </select> <br/> <br/>
          
          

            </div>
                 <div class="t_right">
                    <label id="clpid"> <b > Receiver Info </b></label> <hr/> 
                    <table>
                        <tr>
                            <td>
                                <input type="radio" name="rtitle" value="Mr." /> Mr. &nbsp; <input type="radio" name="rtitle" value="Mrs." /> Mrs. &nbsp;<input type="radio" name="rtitle" value="Miss." /> Miss. &nbsp; <input type="radio" name="rtitle" value="Ms." /> Ms.
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <input class="intexth" type="text" name="r_name" placeholder="Reciver Name" /> <br/> <br/>
                    <input class="intexth" type="text" name="r_add" placeholder="Reciver Address" /> <br/> <br/>
                    <input class="intexth" type="text"  name="r_number" placeholder="Contact Number" /> <br/> <br/>
                    <select class="" name="identity">
                        <option value="">Identity Type....</option>
                        <option value="citizenship">Citizenship</option>
                        <option value="license">License</option>
                        <option value="passport">Passport</option>
                        <option value="other">Other</option>

                    </select> <br/> <br/>                   
                    <input class="intexth" type="text" name="r_idnumber" placeholder="Id Number" /> 
                    <br/> <br/>
                     <input class="intexth" type="text" name="r_amount" placeholder="Amount" /> <br/> <br/>
                    <input class="intexth" type="text" name="r_coll_amount" placeholder="Service Charge" /> <br/> <br/>
                    <input class="amountFigure" type="text"  name="r_amt_word" placeholder="Amount In Figure" /> <br/> <br/>
                     </div>
                <div class="clear"> </div>
 <?php $mydate = getdate(date("U")); ?> 
                    <input type="hidden" value="<?php echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" name="date">


            </div>
                <div class="clear"> </div>

            </div>
            <br/>
                 <input class="frminp" type="submit" name="submit" value="Add Details" />
           <?php echo form_close(); ?> 
                 
            <?php echo form_open('view/index'); ?>
                 <input class="frminp" type="submit" name="submit" value="Cancel" />
                 <?php echo form_close(); ?>
            </div>