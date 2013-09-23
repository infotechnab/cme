<div class="cus_search">
            <h2> Customer Details </h2>
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
                    <div class="id_details">
                        <b> ID Dtails </b> <hr/>
                        <table>
                            <tr>
                            <th>ID type</th>
                            <th>ID Number </th>
                            <th>Issued Place</th>
                            <th>Issued Date</th>
                            <th>Expiry Date</th>
                            </tr>              
                            <?php $detail = $this->dbmodel->get_identity($id);
                                          foreach ($detail as $data)
                                          { ?>
                         <tr>
                            
                             <td> <b> <?php echo $data->type; ?> </b></td>
                            <td> <b> <?php echo $data->id_number; ?></b></td>
                            <td> <b> <?php echo $data->issue_place; ?></b></td>
                            <td> <b> <?php echo $data->issue_date; ?></b></td>
                            <td> <b> <?php echo $data->expire_date; ?></b></td>
                        </tr> <?php
                                          }
?>                  </table>
                    </div>  
                    
                    <table>   
                        
                        <tr>
                            <td class="det_info" colspan="2">
                                 <?php echo form_open('view/get_tran'); ?>
                                <input type="hidden" value="<?php echo $id ?>" name="id" />
                 <input class="frminp" type="submit" name="conform" value="Conform">
                <?php echo form_close(); ?>
                            
              
                <?php echo form_open('view/index'); ?>
                <input class="frminp" type="submit" name="cancel" value="Cancel">
                <?php echo form_close(); ?>
                 
                            </td>
                        </tr>
                        
                    </table>
                </div>
                <div class="userdetailimg">
                   <img class="userdetailimg" src="<?php echo base_url()."custmr_detail_image/". $image; ?>" width="150px" height="160px" />
                </div>
                <div class="clear" > </div>
                
               </div>
             <?php 
             }
                 else{?>
                 file not found <?php } ?>
        </div>