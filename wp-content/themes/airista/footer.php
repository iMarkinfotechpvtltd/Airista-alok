<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

      <footer class="wow fadeIn" data-wow-duration="1.2s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12 hv-me">
                    <h3>REAL-TIME LOCATION SYSTEMS</h3>
                    <ul class="footer-links">
                        <?php 
                    $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'realtime_footer',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>	
                    </ul>
                </div>
                
                 <div class="col-md-3 col-sm-3 col-xs-12 hv-me">
                    <h3>applications</h3>
                    <ul class="footer-links">
                       <?php 
                    $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'appliction_footer',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>	
                        
                    </ul>
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12 hv-me">
                    <h3>COmpany</h3>
                    <ul class="footer-links">
                        <?php 
                    $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'company_footer',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>	
                    </ul>
                </div>
                
                 <div class="col-md-2 col-sm-3 col-xs-12 hv-me follow-cvr">
                    <h3>FOLLOW US</h3>
                    <ul class="footer-social-link">
                       
                      <li>
				        <?php
		                $face=get_option_tree('facebook');
		                if($face==""){}else{ ?>
				        <a target="_blank" href="<?php echo $face; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
					  </li>
                      <li>
				       <?php 
				       $twi=get_option_tree('twitter');
				       if($twi==""){}else { ?>
				       <a target="_blank" href="<?php echo $twi; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php }?>
					 </li>
                     <li>
				      <?php
				      $din=get_option_tree('linkedin');
				      if($din==""){}else { ?>
				      <a target="_blank" href="<?php echo $din; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php }?>
					  </li>
                    
                    </ul>
                     
                    <h3 style="margin-top:40px;">Call US</h3>
                     <a href="tel:<?php echo get_option_tree('phone_number'); ?>" class="call-text"><?php echo get_option_tree('phone_number'); ?></a>
                     
                     <img src="<?php echo get_option_tree('footer_logo'); ?>" alt="footer-logo" class="img-responsive footer-logo">
                     
                </div>
                
                
                
            </div>
        </div>
        
        <div class="copyright-cvr">
            <div class="container">
                <p><?php echo get_option_tree('copyright'); ?> <?php the_time("Y") ; ?><?php echo get_option_tree('copyright_text'); ?></p>
            </div>
        </div>
        
    </footer>

    <?php wp_footer(); ?>
    <!-- Contact Us -->

    <div id="contactPopUp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="contact-cvr">
                        <h3>Contact <small>AiRISTA FLOW</small> for further information</h3>
                        
                        <p>Please fill in the form below and we'll get back to you ASAP.</p>
                        
                      <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//airistaflow.us13.list-manage.com/subscribe/post?u=f05cf6c65f020929ddc5aa59a&amp;id=3d9dd899be" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="form-group">
	<label for="mce-FNAME">First Name:  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
</div>
<div class="form-group">
	<label for="mce-LNAME">Last Name: </label>
	<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
</div>
<div class="form-group">
	<label for="mce-MMERGE4">Company:  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="MMERGE4" class="required form-control" id="mce-MMERGE4">
</div>
<div class="form-group">
	<label for="mce-EMAIL">Email Address:  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
</div>
<div class="form-group">
	<label for="mce-MMERGE7">Phone:  <span class="asterisk">*</span>
</label>
	<input type="text" name="MMERGE7" class="required form-control" value="" id="mce-MMERGE7">
</div>
<div class="form-group">
	<label for="mce-MMERGE8">Industry:  <span class="asterisk">*</span>
</label>
	<select name="MMERGE8" class="required form-control" id="mce-MMERGE8">
<option disabled value="" selected>- Please Select -</option>
<option value="Healthcare">Healthcare</option>
<option value="Eduction">Eduction</option>
<option value="Government">Government</option>
<option value="Wholesale/Retail">Wholesale/Retail</option>
<option value="Industrial">Industrial</option>
<option value="Hospitality">Hospitality</option>
<option value="Services">Services</option>
<option value="Other">Other</option>

	</select>
</div>
<div class="form-group">
	<label for="mce-MMERGE3">Region:  <span class="asterisk">*</span>
</label>
	<select name="MMERGE3" class="required form-control" id="mce-MMERGE3">
	<option disabled value="" selected>- Please Select -</option>
	<option value="Asia">Asia</option>
<option value="Africa">Africa</option>
<option value="Australia">Australia</option>
<option value="Europe">Europe</option>
<option value="Middle East">Middle East</option>
<option value="Americas">Americas</option>

	</select>
</div>
<div class="form-group">
	<label for="mce-MMERGE5">Country:  <span class="asterisk">*</span>
</label>
	<select name="MMERGE5" class="required form-control" id="mce-MMERGE5">
	<option disabled value="" selected>- Please Select -</option>
	<option value="United States of America">United States of America</option>
<option value="Aaland Islands">Aaland Islands</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua And Barbuda">Antigua And Barbuda</option>
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
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'Ivoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curacao">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
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
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey">Guernsey</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
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
<option value="Jersey  (Channel Islands)">Jersey  (Channel Islands)</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
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
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="North Korea">North Korea</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Kosovo">Republic of Kosovo</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa (Independent)">Samoa (Independent)</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Sint Maarten">Sint Maarten</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
<option value="South Korea">South Korea</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor-Leste">Timor-Leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Uruguay">Uruguay</option>
<option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>

	</select>
</div>
<div class="form-group full-size">
	<label for="mce-MMERGE6">Your message:  <span class="asterisk">*</span>
</label>
	<textarea  value="" name="MMERGE6" class="required form-control" id="mce-MMERGE6"></textarea>
</div>

<div class="form-group">
    <label class="custm-label">I am interested in (select all that apply):</label>
    <label class="custm-label">
        <input name="group[7753][1]" type="checkbox" value="1" id="mce-group[7753]-7753-0"> <span for="mce-group[7753]-7753-0" class="custm-check"></span>
      Asset tracking
    </label>
    <label class="custm-label">
        <input name="group[7753][2]" type="checkbox" value="2" id="mce-group[7753]-7753-1"> <span for="mce-group[7753]-7753-1" class="custm-check"></span>
      Safety and security solutions
    </label>
    <label class="custm-label">
        <input name="group[7753][3]" type="checkbox" value="4" id="mce-group[7753]-7753-2"> <span for="mce-group[7753]-7753-2" class="custm-check"></span>
      Temperature and humidity monitoring
    </label>
    <label class="custm-label">
        <input name="group[7753][4]" type="checkbox" value="8" id="mce-group[7753]-7753-3"> <span for="mce-group[7753]-7753-3" class="custm-check"></span>
      Wi-Fi site survey validation services
    </label>
    <label class="custm-label">
        <input name="group[7753][5]" type="checkbox" value="16" id="mce-group[7753]-7753-4"> <span for="mce-group[7753]-7753-4" class="custm-check"></span>
      Development or reseller opportunities
    </label>
 </div>


	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f05cf6c65f020929ddc5aa59a_3d9dd899be" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="org-btn"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[7]='MMERGE7';ftypes[7]='phone';fnames[8]='MMERGE8';ftypes[8]='dropdown';fnames[3]='MMERGE3';ftypes[3]='dropdown';fnames[5]='MMERGE5';ftypes[5]='dropdown';fnames[6]='MMERGE6';ftypes[6]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Contact Us End -->
    
    <!-- Call Us -->
        
    <div id="callPopUp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="contact-cvr call-cvr">
                        <h3>Contact <small>AiRISTA FLOW</small> for further information</h3>
                        <div class="call-us-cvr">
                            <p>Call Us <br><a href="tel:<?php echo get_option_tree('phone_number'); ?>"><?php echo get_option_tree('phone_number'); ?></a></p>
                        </div>
                    </div>
                 </div>

            </div>

        </div>
    </div>
    
    
    <!-- Call Us End -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/form.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom_script.js"></script>	
    
   
	
	
	<script>
        new WOW().init();
    </script>
<script>
 jQuery(".fancybox-youtube").click(function() {
    jQuery.fancybox({
            'padding'       : 0,
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'title'         : this.title,
            'width'     : 680,
            'height'        : 495,
            'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
            'type'          : 'swf',
            'swf'           : {
                 'wmode'        : 'transparent',
                'allowfullscreen'   : 'true'
            }
			 
        });

    return false;
});
 </script>
<script> 
jQuery(document).ready(function () {
  //called when key is pressed in textbox
  jQuery("#mce-MMERGE7").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        jQuery("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
</script>
 <script>
     jQuery(window).load(function() {
	 jQuery('#preloader').fadeOut('slow', function() {
		jQuery(this).remove();
	});  
     });
</script>

<script>
 jQuery(function() {
    jQuery('#mce-FNAME,#mce-LNAME,#fname,#lname').keydown(function(e) {
      if (e.shiftKey || e.ctrlKey || e.altKey) {
        e.preventDefault();
		
      } else {
        var key = e.keyCode;
        if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
          e.preventDefault();
        }
      }
    });
  });
  </script>

</body>

</html>

