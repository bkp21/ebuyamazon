<?php //var_dump($customer['user'][0]['username']); exit;  ?>
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate(' User Data');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >




                        <div class="panel panel-bordered-primary">
                            <div>
                                <a onclick="window.history.back();" class="btn btn-danger btn-xs">Back</a>
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('contact_information');?>
                                </h3>
                            </div>
                            <div class="panel-body">





                                <div class="form-group">
                                    <label for="user-name">User Name</label>
                                    <input type="text" name="username" class="form-control" id="user-name" placeholder="User Name"value="<?php echo set_value("",$customer['user'][0]['username']) ?>" disabled="disabled">
                                </div>

								<div class="form-group">
                                    <label for="sur-name">SurName</label>
                                    <input type="text" name="surname" class="form-control" id="sur-name" placeholder="SurName"
                                    value="<?php echo set_value("",$customer['user'][0]['surname']) ?>" disabled="disabled">
                                </div>




								<div class="form-group">
                                    <label for="your-email">Email (login) </label>
                                    <input type="email" name="email" class="form-control" id="your-email" placeholder="Email Adresss"  value="<?php echo set_value("",$customer['user'][0]['email']) ?>" disabled="disabled">
                                </div>


                               <div class="form-group">
                                    <label for="your-mobile">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" id="your-mobile" placeholder="Mobile Phone Number" value="<?php echo set_value("",$customer['user'][0]['phone']) ?>" disabled="disabled">
                                </div>










                            </div>












                        </div>
                    </div> <!-- Contact Info  end--->


					  <div class="tab-pane fade active in"  id="" >



                        <div class="panel panel-bordered-primary">

                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('account_information');?>
                                </h3>
                            </div>
                            <div class="panel-body">


                                <div class="form-group">
                                    <label for="your-Company">Company</label>
                                    <input type="text" name="contact_company" class="form-control" id="your-Company" placeholder="Company Name" value="<?php echo set_value("",$customer['account'][0]['acc_company_name']) ?>" disabled="disabled">
                                </div>



								<div class="form-group">
                                    <label for="user-group-discount">User Group for Discount :</label>
                                    <select name="user_group_discount" class="form-control" id="user-group-discount" disabled="disabled">
                                        <option value="0" <?php echo $customer['account'][0]['acc_group_discount']== 0? " selected='selected'": null ?>>---</option>
                                        <option  <?php echo $customer['account'][0]['acc_group_discount']== 1? " selected='selected'": null ?> value="1">Free</option>

                                    </select>
                                </div>


                               <div class="form-group">
                                    <label for="user-group-product">User Group for Product/Category : </label>
                                    <select name="user_group_product" class="form-control" id="user-group-product" disabled="disabled">
                                        <option  <?php echo $customer['account'][0]['acc_group_of_product']== 0? " selected='selected'": null ?> value="0">---</option>
                                        <option value="1" <?php echo $customer['account'][0]['acc_group_of_product']== 1? " selected='selected'": null ?>>Free</option>

                                    </select>
                                </div>


								<div class="form-group">
                                    <label for="email-mode">Email Mode : </label>
                                    <select name="email_mode" class="form-control" id="email-mode" disabled="disabled">

                                        <option <?php echo $customer['account'][0]['acc_email_mode']== 1? " selected='selected'": null ?> value="1">HTML</option>
										<option  <?php echo $customer['account'][0]['acc_email_mode']== 2? " selected='selected'": null ?> value="2">Text</option>

                                    </select>
                                </div>



								<div class="form-group" >
                                    <label for="email-newsletters">Email Newsletters :</label>
                                    <select name="email_newsletters" class="form-control" id="email-newsletters" disabled="disabled">

                                        <option <?php echo $customer['account'][0]['acc_email_newsletter']== 1? " selected='selected'": null ?> value="1">Yes</option>
										<option <?php echo $customer['account'][0]['acc_email_newsletter']== 2? " selected='selected'": null ?> value="2">NO</option>

                                    </select>
                                </div>



								<div class="form-group">
                                    <label for="email-product">Email Product Update :</label>
                                    <select name="email_product_update" class="form-control" id="email-product" disabled="disabled">

                                        <option <?php echo $customer['account'][0]['acc_email_pro_update']== 1? " selected='selected'": null ?> value="1">Yes</option>
										<option <?php echo $customer['account'][0]['acc_email_pro_update']== 2? " selected='selected'": null ?> value="2">NO</option>

                                    </select>
                                </div>





                            </div>












                        </div>
                    </div>  <!-- Account Info --->



					<div class="tab-pane fade active in"  id="" >



                        <div class="panel panel-bordered-primary">

                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('billing_information');?>
                                </h3>
                            </div>
                            <div class="panel-body">




                                <div class="form-group">
                                    <label for="B-Address-Line-1">Address Line 1 :</label>
                                    <textarea class="form-control" name="billing_address_line1" id="B-Address-Line-1" disabled="disabled"><?php echo set_value("",$customer['billing'][0]['address1']) ?></textarea>
                                </div>

								<div class="form-group">
                                    <label for="B-Address-Line-2">Address Line 2 :</label>
                                    <textarea class="form-control" name="billing_address_line2" id="B-Address-Line-2" disabled="disabled"><?php echo set_value("",$customer['billing'][0]['address2']) ?></textarea>
                                </div>

								<div class="form-group">
                                    <label for="your-city">City</label>
                                    <input type="text" name="city" class="form-control" id="your-city" placeholder="City" value="<?php echo set_value("",$customer['billing'][0]['city']) ?>" disabled="disabled">
                                </div>





								<div class="form-group">
                                    <label for="country">Country:</label>
                                    <select name="country" class="form-control" id="country" disabled="disabled">
                                        <option value="">Select</option>
                                        <?php

											$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");



											foreach ($countries as $country) {
												  $selected = ($customer['billing'][0]['country'] === $country) ? ' selected="selected"' : '';
											?>
											  <option value="<?php echo $country; ?>"<?php echo $selected; ?>><?php echo $country; ?></option>
											<?php
											}
											?>

                                    </select>
                                </div>


								<div class="form-group">
                                    <label for="state">State/Province :</label>

                                    <select name="state" class="form-control" id="state" disabled="disabled">

                                    <option value="">Select </option>
                                    <?php   $states = array('AK'=>'Alaska', 'HI'=>'Hawaii', 'CA'=>'California', 'NV'=>'Nevada', 'OR'=>'Oregon', 'WA'=>'Washington', 'AZ'=>'Arizona', 'CO'=>'Colorada', 'ID'=>'Idaho', 'MT'=>'Montana', 'NE'=>'Nebraska', 'NM'=>'New Mexico', 'ND'=>'North Dakota', 'UT'=>'Utah', 'WY'=>'Wyoming', 'AL'=>'Alabama', 'AR'=>'Arkansas', 'IL'=>'Illinois', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri', 'OK'=>'Oklahoma', 'SD'=>'South Dakota', 'TX'=>'Texas', 'TN'=>'Tennessee', 'WI'=>'Wisconsin', 'CT'=>'Connecticut', 'DE'=>'Delaware', 'FL'=>'Florida', 'GA'=>'Georgia', 'IN'=>'Indiana', 'ME'=>'Maine', 'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NY'=>'New York', 'NC'=>'North Carolina', 'OH'=>'Ohio', 'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WV'=>'West Virginia');


									foreach ($states as $abbrev => $state) {
												  $selected = ($customer['billing'][0]['state'] === $abbrev) ? ' selected="selected"' : '';
 ?>


                                     <option value="<?php echo $abbrev; ?>"<?php echo $selected; ?>><?php echo $state; ?></option>
									<?php
											}
									?>

                                    </select>
                                </div>


								<div class="form-group">
                                    <label for="your-zip">Zip / Postal Code :</label>
                                    <input type="text" name="zip_code" class="form-control" id="your-zip" placeholder="Zip/Postal Code" value="<?php echo set_value("",$customer['billing'][0]['zip']) ?>" disabled="disabled">
                                </div>




                            </div>












                        </div>
                    </div> <!-- Billing Info  end--->


					<div class="tab-pane fade active in"  id="" >



                        <div class="panel panel-bordered-primary">

                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('shipping_information');?>
                                </h3>
                            </div>
                            <div class="panel-body">



							    <div class="form-group">
                                    <label for="shipping-name">Name</label>
                                    <input type="text" name="shipping_name" class="form-control" id="shipping-name" placeholder="Name"  value="<?php echo set_value("",$customer['shipping'][0]['sname']) ?>" disabled="disabled">
                                </div>


								<div class="form-group">
                                    <label for="shipping-company">Company</label>
                                    <input type="text" name="shipping_company" class="form-control" id="shipping-company" placeholder="Company Name" value="<?php echo set_value("",$customer['shipping'][0]['scompany']) ?>" disabled="disabled">
                                </div>


                                <div class="form-group">
                                    <label for="S-Address-Line-1">Address Line 1 :</label>
                                    <textarea class="form-control" name="shipping_address_line1" id="S-Address-Line-1" disabled="disabled"><?php echo set_value("",$customer['shipping'][0]['saddress1']) ?></textarea>
                                </div>

								<div class="form-group">
                                    <label for="S-Address-Line-2">Address Line 2 :</label>
                                    <textarea class="form-control" name="shipping_address_line2" id="S-Address-Line-2" disabled="disabled"><?php echo set_value("",$customer['shipping'][0]['saddress2']) ?></textarea>
                                </div>

								<div class="form-group">
                                    <label for="shipping-city">City</label>
                                    <input type="text" name="shipping_city" class="form-control" id="shipping-city" placeholder="City" value="<?php echo set_value("",$customer['shipping'][0]['scity']) ?>" disabled="disabled">
                                </div>




								<div class="form-group">
                                    <label for="shipping-country">Country:</label>
                                    <select name="shipping_country" class="form-control" id="shipping-country" disabled="disabled">

                                     <option value="">Select</option>
                                        <?php

											$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");



											foreach ($countries as $scountry) {
												  $selected = ($customer['shipping'][0]['scountry'] === $scountry) ? ' selected="selected"' : '';
											?>
											  <option value="<?php echo $scountry; ?>"<?php echo $selected; ?>><?php
											  echo $scountry; ?></option>
											<?php
											}
											?>



                                    </select>
                                </div>


								<div class="form-group">
                                    <label for="shipping-state">Stapte/Province :</label>
                                    <select name="shipping_state" class="form-control" id="shipping-state" disabled="disabled">

                                    <?php   $states = array('AK'=>'Alaska', 'HI'=>'Hawaii', 'CA'=>'California', 'NV'=>'Nevada', 'OR'=>'Oregon', 'WA'=>'Washington', 'AZ'=>'Arizona', 'CO'=>'Colorada', 'ID'=>'Idaho', 'MT'=>'Montana', 'NE'=>'Nebraska', 'NM'=>'New Mexico', 'ND'=>'North Dakota', 'UT'=>'Utah', 'WY'=>'Wyoming', 'AL'=>'Alabama', 'AR'=>'Arkansas', 'IL'=>'Illinois', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri', 'OK'=>'Oklahoma', 'SD'=>'South Dakota', 'TX'=>'Texas', 'TN'=>'Tennessee', 'WI'=>'Wisconsin', 'CT'=>'Connecticut', 'DE'=>'Delaware', 'FL'=>'Florida', 'GA'=>'Georgia', 'IN'=>'Indiana', 'ME'=>'Maine', 'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NY'=>'New York', 'NC'=>'North Carolina', 'OH'=>'Ohio', 'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WV'=>'West Virginia');


									foreach ($states as $abbrev => $state) {
												  $selected = ($customer['shipping'][0]['sstate'] === $abbrev) ? ' selected="selected"' : '';
 ?>


                                     <option value="<?php echo $abbrev; ?>"<?php echo $selected; ?>><?php echo $state; ?></option>
									<?php
											}
									?>



                                    </select>
                                </div>


								<div class="form-group">
                                    <label for="shipping-zip">Zip / Postal Code :</label>
                                    <input type="text" name="shipping_zip_code" class="form-control" id="shipping-zip" placeholder="Zip/Postal Code" value="<?php echo set_value("",$customer['shipping'][0]['szip']) ?>" disabled="disabled">
                                </div>




                            </div>












                        </div>
                    </div> <!-- Billing Info  end--->



					<div class="tab-pane fade active in"  id="" >



                        <div class="panel panel-bordered-primary">

                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('point_information');?>
                                </h3>
                            </div>
                            <div class="panel-body">



							    <div class="form-group">
                                    <label for="total-point">Total points:</label>
                                    <input type="text" name="total_point" class="form-control" id="total-point" placeholder=""
                                    value="<?php echo set_value("",$customer['point'][0]['total_point']) ?>" disabled="disabled">
                                </div>












                            </div>












                        </div>
                    </div> <!-- Billing Info  end--->

					 <div class="form-group">

                     </div>













                </div>
            </div>
        </div>
    </div>



</div>










