
<style type="text/css">
/* popup_box DIV-Styles*/
#popup_box { 
	display:none; /* Hide the DIV */
	position:fixed;  
	_position:absolute; /* hack for internet explorer 6 */  
	height:400px;  
	width:500px;  
	background:#FFFFFF;  
	left: 300px;
	top: 50px;
	z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
	margin-left: 15px;  
	
	/* additional features, can be omitted */
	border:2px solid #073d0d;  	
	padding:25px;  
	font-size:15px;  
	-moz-box-shadow: 0 0 5px #073d0d;
	-webkit-box-shadow: 0 0 5px #073d0d;
	box-shadow: 0 0 5px #073d0d;
        opacity: 1;
	
}
a{  
cursor: pointer;  
text-decoration:none;  
} 

/* This is for the positioning of the Close Link */
#popupBoxClose {
	font-size:20px;  
	line-height:15px;  
	right:5px;  
	top:5px;  
	position:absolute;  
	color:#6fa5e2;  
	font-weight:500;  	
}</style>

  <script type="text/javascript">

	$(document).ready( function() {
	// When site loaded, load the Popupbox First
		$('.srcimage').click(function(){
  			$('#popup_box').fadeIn(1000);
			var srcimg = $(this).attr('src');
			
			$("#pqr").attr({
			src: srcimg
			
			});
			$('#popup_box').css({"display":"Block"});
			
			//$('#pqr').fadeIn(3000);
			$('.srcimage').css({"opacity":".3"});
			
     	});
		
$('#popupBoxClose').click( function() {
			unloadPopupBox();
		});
		
		function unloadPopupBox() {	// TO Unload the Popupbox
			$('#popup_box').fadeOut("slow");
			$(".srcimage").css({ // this is just for style		
				"opacity": "1"  
			}); 
		}		
		
		
		
		/**********************************************************/
		
	});
	
	
</script> 
<div id="popup_box">	<!-- OUR PopupBox DIV-->
    <img  src="" width="500px" height="400px" id="pqr"  />
	<a id="popupBoxClose">Close</a>	
</div> 
<div class="cus_search_detail">
    <div class="cme"> 
    <p id="sucessmsg">
  <?php echo validation_errors();?>
            
         <?php  if(isset($error))
         {echo $error;}
         
         if(isset($mess))
         {
             echo $mess;
         }
?>
    </p>
    <div class="cus_detail">
    <b> Customer Information </b>
            <hr/>
    
    
             <?php
             //print_r($query);
             if(!empty($query))
             {
                 foreach($query as $data)
                 {
                     $id = $data->c_id;
                     $cus_id = $data->cus_id;
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
                      $fullId = $data->full_id;
                 }
              ?>
            <div class="form">              
                 <p>Customer Basic Info </p>
                <div class="userdetail">
                    <table id="cmeTable" class="tbllist">
                        <tr>
                        <th>
                            Info
                        </th>
                        <th>
                            Detail
                        </th>
                    </tr>
                        <tr>
                            <td class="det_info"> <b> Customer ID: </b></td>
                            <td class="det_info">
                                <b> <?php echo $fullId; ?> </b>
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
                       
                        <p>Associated Document </p> 
                        <table id="cmeTable" class="tbllist">
                            <tr>
                                <th class="tdlist">ID type</th>
                                <th class="tdlist">ID Number </th>
                                <th class="tdlist">Issued Place</th>
                                <th class="tdlist">Issued Date</th>
                                <th class="tdlist">Expiry Date</th>
                                <th class="tdlist">ID Image</th>
                            </tr>              
                            <?php
                            $detail = $this->dbmodel->get_identity($id);
                            foreach ($detail as $data) {
                                ?>
                                                    <tr>

                                                        <td class="tdlist"> <b> <?php echo $data->type; ?> </b></td>
                                                        <td class="tdlist"> <b> <?php echo $data->id_number; ?></b></td>
                                                        <td class="tdlist"> <b> <?php echo $data->issue_place; ?></b></td>
                                                        <td class="tdlist"> <b> <?php echo $data->issue_date; ?></b></td>
                                                        <td class="tdlist"> <b> <?php echo $data->expire_date; ?></b></td>
                                                        <td class="tdlist"> <img class="srcimage" id="idCardImage" src="<?php echo base_url() . "custmr_detail_image/" . $data->image; ?>" width="25px" height="25px" /></td>
                                                    </tr> <?php
                                        }
                            ?>                  </table>
                        
                    </div>  
                    <br/>
                   
                                 <?php echo form_open('view/get_tran'); ?>
                                <input type="hidden" value="<?php echo $cus_id ?>" name="id" />
                 <input class="frminp" type="submit" name="conform" value="Receive Money">
                <?php echo form_close(); ?>
                           
                 <?php echo form_open('view/send_tran'); ?>
                                <input type="hidden" value="<?php echo $cus_id ?>" name="id" />
                 <input class="frminp" type="submit" name="conform" value="Send Money">
                <?php echo form_close(); ?>
            
                 
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
    </div>
</div>