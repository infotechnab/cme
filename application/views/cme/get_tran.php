<?php
$role = $this->session->userdata('username');
$bid = $this->session->userdata('bid');
$user_id = $this->session->userdata('id');
?>
<div class="cme">   <div id="sucessmsg">
        <?php echo validation_errors(); ?>

        <?php
        if (isset($error)) {
            echo $error;
        }

        if (isset($mess)) {
            echo $mess;
        }

        $branch = $this->dbmodel->get_branch($bid);
        foreach ($branch as $data) {
            $bname = $data->b_name;
        }
        if (!empty($cid)) {
            foreach ($cid as $data)
                ; {
                $cid = $data->cid;
            }
        }
        ?>
    </div></div>

<div class="cus_detail">
    <b>Remittance Claim Form</b>
    <hr/>
    <?php
    foreach ($customer as $data) {

        $cid = $data->c_id;
        $cusid = $data->cus_id;
        $fname = $data->fname;
        $lname = $data->lname;
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
    $identity = $this->dbmodel->get_identity($cid);

    echo '<script type="text/javascript">' . 'var dat=' . json_encode($identity) . '</script>';
    ?>
    <script type="text/javascript">
        $(document).ready(function(){   
            $.each(dat, function(i, dat){
                $("#idselector").append('<option value="'+dat.type+'" id="'+i+'">' + dat.type +'</option>');
            }); 
     
     
            $("#idselector").change(function(){
                var data = $("#idselector option:selected").attr("id");
               
               
                if(data=="default")
                {
                    $("#idnumber").val("");
                    $("#iplace").val("");
                    $("#isssuedate").val("");
                    $("#expiredate").val("");
                }
                else
                {
                    $("#idnumber").val(dat[data].id_number);
                    $("#iplace").val(dat[data].issue_place);
                    $("#isssuedate").val(dat[data].issue_date);
                    $("#expiredate").val(dat[data].expire_date);
                }
                       
            });
        });
    </script>

</script>

<?php
$detail = $this->dbmodel->get_identity($cid);
// print_r($detail);

foreach ($detail as $data) {
    $id = $data->ci_id;
    $type = $data->type;
    $idnum = $data->id_number;
    $idplace = $data->issue_place;
    $iddate = $data->issue_date;
    $exdate = $data->expire_date;
}
?>


<div class="form">
<?php echo form_open_multipart('view/addtranzaction_get'); ?>
    <input type="hidden" name="uid" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="customerid" value="<?php echo $cid; ?>" />
    <input type="hidden" name="cusid" value="<?php echo $cusid; ?>" />
    <input type="hidden" name="branch" value="<?php echo $bname; ?>" />
    <table >
        <tr>
            <td> <input class="intexth"   type="text" name="ref_number" placeholder="Refrence Number" value="<?php echo set_value('ref_number'); ?>" required="required"/> </td>

            <td> Remittance Company:</td>

            <td> <select class="a_name" name="a_name">
<?php
foreach ($query as $data) {
    ?>
                        <option value="<?php echo $data->a_name; ?>">
                        <?php echo $data->a_name; ?>
                        </option> <?php } ?>
                </select> </td>

            <td><input class="intexth" type="text" name="auth_code" placeholder="Authorization Code" value="<?php echo set_value('auth_code'); ?>" /></td>
        </tr>

    </table>



    <div class="cidentitytran">

        <div class="t_left">
            <label id="clpid"> <b > Sender Info </b></label> <hr/>
            <table>
                <tr>
                    <td>
                        <input type="radio" name="title" value="Mr." required="required"/>
                        Mr. &nbsp; <input type="radio" name="title" value="Mrs." required="required"/>
                        Mrs. &nbsp;<input type="radio" name="title" value="Miss." required="required"/> 
                        Miss. &nbsp; <input type="radio" name="title" value="Ms." required="required" /> Ms.
                    </td>
                </tr>
            </table>
            <br/>
            <input class="intexth" type="text" name="s_name" placeholder="Sender Name" required="required" value="<?php echo set_value('s_name'); ?>" /> <br/> <br/>

            <select class="" name="country">
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


            <input class="intexth" type="text" name="s_amount" placeholder="Amount" required="required" value="<?php echo set_value('s_amount'); ?>" /> <br/> <br/>

            <select class="" name="income">
                <option value="">Income Source</option>
                <option value="Business"> Business</option>
                <option value="Salary"> Salary</option>
            </select>
            <br/> <br/>
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
            </select>

        </div>
        <div class="t_right">
            <label id="clpid"> <b > Receiver Info </b></label> <hr/>

           <!-- <input type="hidden" name="rtitle" value=" <?php //echo $title;  ?>" /> -->
            <table>
                <tr>
                    <td>
                        <input type="radio" name="rtitle" value="Mr." <?php if ($title == 'Mr.') { ?> checked <?php } ?> /> <b> Mr.</b> &nbsp; 
                        <input type="radio" name="rtitle" value="Mrs."<?php if ($title == 'Mrs.') { ?> checked <?php } ?> /><b> Mrs.</b> &nbsp; 
                        <input type="radio" name="rtitle" value="Miss."<?php if ($title == 'Miss.') { ?> checked <?php } ?> /><b> Miss.</b> &nbsp; 
                        <input type="radio" name="rtitle" value="Ms."<?php if ($title == 'Ms.') { ?> checked <?php } ?> /><b> Ms.</b> 
                    </td>
                </tr>
            </table>
            <br/>
            <input class="intexth" type="text" name="r_name" placeholder="Reciver Name" value="<?php echo $fname . " " . $lname; ?>" /> <br/>  <br/>
            <input class="intexth" type="text" name="r_add" placeholder="Reciver Address" value="<?php echo $address; ?>" /> <br/> <br/>
            <input class="intexth" type="text" name="r_city" placeholder="Reciver Tole" value="<?php echo $tole; ?>"/> <br/> <br/>
            <input class="intexth" type="text" name="r_number"  placeholder="Contact Number" value="<?php echo $conpersonal . "," . $conhome; ?>" /> <br/> <br/>
            <select class="" name="identity" id="idselector">                              
                <option value="" id="default">Identity Type....</option>
            </select>

            <br/> <br/>
<?php $mydate = getdate(date("U")); ?>
            <input type="hidden" value="<?php echo "  $mydate[year]- $mydate[mon]- $mydate[mday]"; ?>" name="date">
            <input class="" type="text" name="r_idnumber" id="idnumber" placeholder="Id Number" required="required"  />
            <input class="" type="text" name="r_issueplace" id="iplace" placeholder="Issue Place" /> <br/> <br/> <br/>

            <input type="text"  class="" id="isssuedate" name="r_year" placeholder="Issued Date"  />

            <input type="text" class="" id="expiredate" name="e_year" placeholder="Expiry Date"/> 






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
</div>