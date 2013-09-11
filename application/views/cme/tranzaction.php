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
          foreach ($branch as $data)
                {
                    $bname = $data->b_name;
                }
?>
    </p>
        <div class="cus_detail">
            <h2>Remit Claim Form</h2>
            <hr/>
            
           
            
            
            <div class="form">  
            <?php echo form_open_multipart('view/addtranzaction'); ?>
                <input type="hidden" name="uid" value="<?php echo $user_id; ?>" />
                 <input type="hidden" name="branch" value="<?php echo $bname; ?>" />
                <table >
                    <tr>
                         <td> <input class="intexth"   type="text" name="ref_number" placeholder="refrence number" /> </td>
                    </tr>
                    <tr>
                        <td> <b> Rmittance Company </b> </td>
                    </tr>
                    <tr>
                        <td> <select class="a_name" name="a_name">
                                <?php 
 foreach ($query as $data)
 {    ?>
                                <option value="<?php echo $data->a_name; ?>">
                                   <?php echo $data->a_name; ?>
                                </option> <?php } ?>
                            </select> </td>
                    </tr>
                    <tr>
                         <td><input class="intexth" type="text" name="auth_code" placeholder="authentication code" /></td>
                    </tr>
                   
                    
                </table>
                
              
            <div class="cidentitytran"> 
                
                <div class="t_left">
            <label id="clpid"> <b > Sender Info </b></label> <hr/> 
             <table>
                <tr>
                    <td>
                        <input type="radio" name="title" value="Mr." /> Mr. &nbsp; <input type="radio" name="title" value="Mrs." /> Mrs. &nbsp;<input type="radio" name="title" value="Miss." /> Miss. &nbsp; <input type="radio" name="title" value="Ms." /> Ms.
                    </td>
                </tr>
            </table>
            <input class="intexth" type="text" name="s_name" placeholder="sender name" /> <br/> <br/>
            
            <select class="intexthc" name="country">
<option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select> <br/> <br/>
 
            
          <input class="intexth" type="text" name="s_amount" placeholder="amount" /> <br/> <br/>
          
          <select class="intexthc" name="income">
<option value="">Income Source</option>
<option value="Business"> Business</option>
<option value="Salary"> Salary</option>
 </select> <br/> <br/>
          
           <select class="intexthc" name="relation">
               <option value="" >Relation...</option>
               <option value="Father" >Father</option>
              <option value="Mother">Mother</option>
              <option value="Brother" >Brother</option>
              <option value="Sister" > Sister </option>
              <option value="Daughter" > Daughter </option>
              <option value="Son" > Son </option>
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
          </select>
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
             <input class="intexth" type="text" name="r_name" placeholder="Reciver Name" /> <br/> <br/>
             <input class="intexth" type="text" name="r_add" placeholder="Reciver Address" /> <br/> <br/>
             <input class="intexth" type="text" name="r_city" placeholder="Reciver Tole" /> <br/> <br/>
             <input class="intexth" type="text"  name="r_number" placeholder="Contact Number" /> <br/> <br/>
              <select class="intexthc" name="identity">
<option value="">Identity Type....</option>
<option value="citizenship">Citizenship</option>
<option value="license">License</option>
<option value="passport">Passport</option>
<option value="other">Other</option>

              </select> <br/> <br/>
              <?php $mydate=getdate(date("U"));?> 
              <input type="hidden" value="<?php echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" name="date">
              <input class="intids" type="text" name="r_idnumber" placeholder="Id Number" /> 
               <input class="intids" type="text" name="r_issueplace" placeholder="Issue Place" /> <br/> <br/> <br/>
               <label style="width:24%;">Isseu Date </label>
               
               <input type="text" pattern="\d*" class="issued" name="r_year" placeholder="Year" style="width:24%;" />
               
                <select class="issued" name="r_month" style="width:24%;">
                    
                                <option value="">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
               
               <input type="text" pattern="\d*" class="issued" name="r_day" placeholder="Day" style="width:23%;" /> <br/> <br/>
               
               <label style="width:24%;" >Expire Date </label>
               <input type="text" pattern="\d*" class="tran" name="e_year" placeholder="Year" style="width:24%;" /> 
                <select class="tran" name="e_month" style="width:24%;">
                                <option value="">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
               <input type="text" pattern="\d*" class="tran" name="e_day" placeholder="Day" style="width:24%;" /> 
            </div>
                <div class="clear"> </div>
              
          
           
            </div>
                 <input type="submit" name="submit" value="Add Details" />
           <?php echo form_close(); ?> <br/>
            <?php echo form_open('view/index'); ?>
                 <input type="submit" name="submit" value="Cancel" />
                 <?php echo form_close(); ?>
            </div> 
        </div>