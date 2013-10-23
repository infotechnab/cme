       <div class="cme">       </div>
        <div class="cus_search_list">
           <label> <b>Add New Remittance Company</b></label> <br/>
         
            <hr/>
             <div id="sucessmsg">
            <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
            echo validation_errors();
            if(isset($error))
            {
                echo $error;
            }
            ?>
            </div>
            <table>
            <div class="form">
                
                <?php echo form_open_multipart('view/addagent');?>
                <tr>
                <td>
                    <br/>
                    <input class="cme_a_add" type="text" name="cmea_name" placeholder="English Name" /> * <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmen_name" placeholder="Nepali Name" /> * <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmea_address" placeholder="Address" /> * <br/> <br/>
                    <input class="cme_a_add" type="text" name="cmea_number" placeholder="Phone Number" /> * <br/> <br/>
                    <input class="cme_a_add" type="text" name="toll_number" placeholder="Toll Free Number" />  <br/> <br/>
                    <input class="cme_a_add" type="email" name="cmea_email" placeholder="Email" />  <br/> <br/>
                      <input class="cme_a_add" type="text" name="cmea_principal" placeholder="Principal Agent" /> 
                </td>
                <td style="padding-left: 50px;">
                    <br/>
                     <input class="cme_a_add" type="text" name="cmea_login" placeholder="Login Link" />  &nbsp; link with "http://" <br/> <br/>
                      <input class="cme_a_add" type="text" name="cmea_web" placeholder="Web Link" />  &nbsp; link with "http://" <br/> <br/>
                      <input class="cme_a_add" type="text" name="cmea_cusID" placeholder="Customer ID" /> <br/> <br/>
                      <input class="cme_a_add" type="text" name="cmea_userID" placeholder="User ID" /> <br/> <br/>
                      <input class="cme_a_add" type="text" name="cmea_aCode" placeholder="Access Code" /> <br/> <br/>
                    <input type="file" name="agentfile" /><br/> <br/>
                    <input type="submit" name="submit" value="Add" /> 
                    </td>
             <tr>
                </form>
                   </table>
                <br/>
                
            </div>
        </div>