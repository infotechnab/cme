<div class="cus_search_list">
            <b> Customer Details </b>
            <hr/>
             <?php
             //print_r($query);
             if(!empty($query))
             {
                 foreach ($query as $data)
                 {
                     $id = $data->c_id;
                     $fname = $data->fname;
                     $lname= $data->lname;
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
              ?>
            <div class="form">              
                
                <div class="userdetail">
                    <table >
                        <tr>
                            <td class="det_info"> <b> ID: </b></td>
                            <td class="det_info">
                                <b> <?php echo $id; ?> </b>
                            </td>
                        </tr>
                        <tr>
                            <td class="det_info"> <b> Name: </b></td>
                            <td class="det_info"> <b><?php echo $fname." ".$lname; ?> </b></td>
                        </tr>
                        <tr>
                            <td class="det_info" > <b>Address: </b> </td>
                            <td class="det_info"> <b><?php echo $address.",".$tole; ?> </b></td>
                        </tr>
                        <tr>
                            <td class="det_info"> </td>
                            <td class="det_info"> <b> <?php echo $distirc.",".$zone;  ?> </b></td>
                        </tr>
                        <tr>
                            <td class="det_info"> </td>
                            <td class="det_info"> <b> <?php echo $country;  ?> </b></td>
                        </tr>
                        <tr>
                            <td class="det_info"> <b>Contact: </b></td>
                            <td class="det_info"> <b><?php echo $conpersonal.",".$conhome; ?></b></td>
                        </tr>
                        <tr>
                            <td class="det_info"> <b> Email: </b></td>
                            <td class="det_info"><b><?php echo $email; ?></b></td>
                        </tr>
                   
                         </table>
                    
                    <div class="customer_id_details">
                        <b> ID Dtails </b> 
                        <table class="tbllist">
                            <tr>
                            <th class="tdlist">ID type</th>
                            <th class="tdlist">ID Number </th>
                            <th class="tdlist">Issued Place</th>
                            <th class="tdlist">Issued Date</th>
                            <th class="tdlist">Expiry Date</th>
                            <th class="tdlist">ID Image</th>
                            </tr>              
                            <?php $detail = $this->dbmodel->get_identity($id);
                                          foreach ($detail as $data)
                                          { ?>
                         <tr>
                            
                             <td class="tdlist"> <b> <?php echo $data->type; ?> </b></td>
                            <td class="tdlist"> <b> <?php echo $data->id_number; ?></b></td>
                            <td class="tdlist"> <b> <?php echo $data->issue_place; ?></b></td>
                            <td class="tdlist"> <b> <?php echo $data->issue_date; ?></b></td>
                            <td class="tdlist"> <b> <?php echo $data->expire_date; ?></b></td>
                            <td class="tdlist"> <img src="<?php echo base_url()."custmr_detail_image/".$data->image;?>" width="30px" height="30px" /></td>
                        </tr> <?php
                                          }
?>                  </table>
                       
                    </div>  
                          </div>
                <div class="userdetailimg">
                   <img class="userdetailimg" src="<?php echo base_url()."custmr_detail_image/". $image; ?>" width="150px" height="160px" />
                </div>
                
                <div class="clear" > </div>
                
                <br/>
                <hr/>
                
                
                
               <table class="tbllist">
                    <tr class="trlist">
                        <td class="tdlist"> S.N </td>
                        <td class="tdlist"> Remittance Company</td>
                        <td class="tdlist"> Branch</td>
                        <td class="tdlist"> Sender Name </td>
                         <td class="tdlist"> Amount (Rs.) </td>
                          <td class="tdlist"> Receiver Name </td>
                           <td class="tdlist"> Contact Number </td>
                            <td class="tdlist"> Tranzaction Date </td>
                      
                     <!--   <td class="tdlist"> Action </td> -->
                    </tr>
                    <?php //$tranlist = $this->dbmodel->get_user_tran($id);  
                    foreach ($tranlist as $data) { ?>
                    <tr class="trlist">
                        <td class="tdlist"> <?php echo $data->t_id; ?></td>
                        <td class="tdlist"> <?php echo $data->agent; ?></td>
                        <td class="tdlist"> <?php echo $data->branch; ?></td>
                        <td class="tdlist"> <?php echo $data->s_name; ?></td>
                         <td class="tdlist"> <?php echo $data->amount; ?></td>
                          <td class="tdlist"> <?php echo $data->r_name; ?></td>
                           <td class="tdlist"> <?php echo $data->contact; ?></td>
                            <td class="tdlist"> <?php echo $data->date; ?></td>
                      <!--  <td class="tdlist"><?php //echo anchor('view/getedituser/'.$data->u_id,'Edit'); ?> / <?php //echo anchor('view/deleteuser/'.$data->u_id,'Delete'); ?> </td> -->
                        <?php } ?>                   
                        
                    </tr>
                </table>
                
                
                  <?php echo form_open('view/index'); ?>
                <input class="frminp" type="submit" name="cancel" value="Cancel">
                <?php echo form_close(); ?>
               </div>
             <?php 
             }
                 else{?>
                 file not found <?php } ?>
        </div>