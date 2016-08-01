<?php
/*

 * Template Name: Training Page
 
*/
global $post;
get_header(); ?>    
<?php while ( have_posts() ) : the_post(); ?>  

<?php
function get_numerics ($str) 
{
preg_match_all('/\d+/', $str, $matches);
return $matches[0];
}
?>
               <?php 
		        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'banner-image' );
		        if($image==""){
			    ?>
                <div class="banner banner-main-inner" style="background-image:url(http://placehold.it/1920x690&amp;text=1920x690);">
			    <?php }	else{  ?>
                <div class="banner banner-main-inner" style="background-image:url(<?php echo $image[0]; ?>);">
		        <?php } ?>
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                
                <svg  x="0px" y="0px"
	 width="60px" height="70px" viewBox="0 0 34.891 34.891" >
<g>
	<g>
		<path d="M32.43,33.652c0-1.398-1.609-3.285-3.783-3.836c0.907-0.611,1.533-1.816,1.533-2.902c0-1.532-1.242-2.774-2.771-2.774
			c-1.534,0-2.774,1.242-2.774,2.774c0,1.086,0.627,2.291,1.533,2.902c-2.173,0.551-3.783,2.438-3.783,3.836
			C22.384,35.304,32.43,35.304,32.43,33.652z"/>
		<path d="M9.028,6.278c1.239,0,2.247-1.442,2.247-2.682c0-1.244-1.008-2.249-2.247-2.249c-1.242,0-2.25,1.005-2.25,2.249
			C6.778,4.836,7.786,6.278,9.028,6.278z"/>
		<path d="M32.6,12.888V3.371c0-0.875-0.712-1.586-1.587-1.586h-6.146v-1.19C24.867,0.266,24.6,0,24.271,0s-0.596,0.267-0.596,0.595
			v1.19H17.53c-0.874,0-1.586,0.711-1.586,1.586v4.873l-3.079-1.027c-0.193-0.068-1.919-0.671-3.509-0.75L9.143,6.892H9.139
			l0.599,4.663l-0.711,1.244l-0.712-1.244l0.598-4.663H8.908L8.696,6.467C7.047,6.55,5.248,7.196,5.168,7.224
			C5.135,7.237,5.114,7.262,5.084,7.276C5.03,7.303,4.982,7.33,4.935,7.367C4.887,7.401,4.85,7.439,4.812,7.481
			C4.775,7.525,4.743,7.567,4.715,7.616C4.683,7.669,4.66,7.72,4.641,7.78C4.631,7.811,4.61,7.834,4.602,7.866L3.18,14.267
			c-0.106,0.479,0.195,0.955,0.675,1.062c0.065,0.012,0.128,0.018,0.194,0.018c0.408,0,0.775-0.28,0.865-0.694l1.314-5.907
			c0.092-0.029,0.195-0.06,0.31-0.092v6.071l-0.709,8.799c-0.027,0.34,0.12,0.645,0.354,0.858c-0.966,0.435-1.642,1.399-1.642,2.528
			c0,1.086,0.626,2.291,1.533,2.902c-2.173,0.551-3.783,2.438-3.783,3.836c0,1.652,10.046,1.652,10.046,0
			c0-1.398-1.61-3.285-3.783-3.836c0.908-0.611,1.534-1.816,1.534-2.902c0-1.375-1.001-2.508-2.314-2.729
			c0.095-0.145,0.168-0.304,0.183-0.488l0.639-7.953c0.133,0.057,0.278,0.091,0.433,0.091c0.152,0,0.297-0.034,0.429-0.091
			l0.64,7.953c0.047,0.56,0.513,0.981,1.064,0.981c0.027,0,0.057-0.001,0.085-0.003c0.587-0.047,1.026-0.561,0.979-1.148
			l-0.708-8.798V8.655c0.451,0.128,0.756,0.237,0.764,0.241c0.006,0.002,0.009,0.002,0.012,0.003
			c0.005,0.001,0.007,0.002,0.01,0.003l3.643,1.215v2.771c0,0.875,0.712,1.586,1.586,1.586h2.887l-2.533,9.454
			c-0.023,0.09-0.021,0.178-0.005,0.262c-0.168-0.031-0.341-0.052-0.519-0.052c-1.532,0-2.774,1.242-2.774,2.774
			c0,1.086,0.627,2.291,1.535,2.902c-2.174,0.551-3.784,2.438-3.784,3.836c0,1.652,10.046,1.652,10.046,0
			c0-1.398-1.61-3.285-3.782-3.836c0.907-0.611,1.533-1.816,1.533-2.902c0-0.998-0.529-1.864-1.32-2.354
			c0.104-0.076,0.186-0.188,0.221-0.322l2.615-9.763h2.027v6.919c0,0.327,0.268,0.594,0.596,0.594s0.596-0.267,0.596-0.594v-6.919
			h2.025l2.615,9.763c0.071,0.266,0.312,0.44,0.575,0.44c0.051,0,0.103-0.007,0.153-0.021c0.316-0.086,0.506-0.412,0.422-0.729
			l-2.533-9.454h2.887C31.888,14.474,32.6,13.763,32.6,12.888z M17.531,13.681c-0.438,0-0.794-0.356-0.794-0.793v-2.535
			c0.038,0.005,0.076,0.019,0.114,0.019c0.372,0,0.72-0.236,0.844-0.607c0.154-0.467-0.097-0.97-0.563-1.125l-0.396-0.132V3.371
			c0-0.438,0.355-0.793,0.794-0.793h13.482c0.438,0,0.794,0.355,0.794,0.793v9.517c0,0.437-0.354,0.793-0.794,0.793H17.531z"/>
	</g>
</g>


</svg>
                
               <!-- <img src="images/training-classes-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                <?php the_content(); ?>
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main training-classes-main">
        <div class="container">
            <div class="food-hospitality-top">
            <?php the_field('certification_training');?>
            </div>

            

        </div>
        
        <div class="training-dates-cvr">
            <div class="container">
                <h4><?php the_field('us_training_dates_for_2016'); ?></h4>
                
                <div class="training-dates-list">
  
                 <ul>
                <?php
				
                $one1 = get_post_meta(get_the_ID(),'us_training_dates_for_2016_images',true);
                $arr1=get_numerics($one1);
                $res=count($arr1);
                foreach($arr1 as $val1)
                {
                $small_image_url1 = wp_get_attachment_image_src($val1, 'cal-image');
                ?> 
           
                        <li><img src="<?php echo $small_image_url1[0]; ?>" class="img-responsive"></li>
                       
                        <?php }
		
                       wp_reset_query(); ?> 
                    </ul>
                    
					
					
					
					
                    <a href="javascript: void(0)" data-toggle="modal" data-target="#ecrePopUp" class="org-btn">REGISTER FOR ECRE</a>
					
					<!-----------form--------------------------------------->
					 <div id="ecrePopUp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="contact-cvr">
                        <form id="registration" action="" method="post">
						
<div class="form-group">
<label>First Name:</label>
<input type="text" id="fname" name="fname" class="form-control">
</div>
                            
                            
<div class="form-group">
<label>Last Name:</label>
<input type="text" id="lname" name="lname"  class="form-control">
</div>
                            
<div class="form-group">
<label>Company:</label>
<input type="text" id="company" name="company" class="form-control">
</div>
                            
<div class="form-group">
<label>Email:</label>
<input type="text" id="email" name="email" class="form-control">
</div>
                            
<div class="form-group">
<label>Phone:</label>
<input type="text" id="phone" name="phone" class="form-control">
</div>
<div class="form-group"> 
<label>Region:</label>
<select class="form-control name="dropdownMenu" id="region" name="region">
    <option value="" selected>- Please Select -</option>
    <option>Asia</option>
    <option>Africa</option>
    <option>Australia</option>
    <option>Europe</option>
    <option>Middle East</option>
    <option>Americas</option>
</select>
</div>
                            
<div class="form-group">
<label>Country:</label>
<select class="form-control name="dropdownMenu" id="country" name="country">
   <option value="" selected>- Please Select -</option>
    <option>United States of America</option>
    <option>Aaland Islands</option>
    <option>Afghanistan</option>
    <option>Albania</option>
    <option>Algeria</option>
    <option>American Samoa</option>
    <option>Andorra</option>
    <option>Angola</option>
    <option>Anguilla</option>
    <option>Antarctica</option>
    <option>Antigua And Barbuda</option>
    <option>Argentina</option>
    <option>Armenia</option>
    <option>Aruba</option>
    <option>Australia</option>
    <option>Austria</option>
    <option>Azerbaijan</option>
    <option>Bahamas</option>
    <option>Bahrain</option>
    <option>Bangladesh</option>
    <option>Barbados</option>
    <option>Belarus</option>
    <option>Belgium</option>
    <option>Belize</option>
    <option>Benin</option>
    <option>Bermuda</option>
    <option>Bhutan</option>
    <option>Bolivia</option>
    <option>Bosnia and Herzegovina</option>
    <option>Botswana</option>
    <option>Bouvet Island</option>
    <option>Brazil</option>
    <option>British Indian Ocean Territory</option>
    <option>Brunei Darussalam</option>
    <option>Bulgaria</option>
    <option>Burkina Faso</option>
    <option>Burundi</option>
    <option>Cambodia</option>
    <option>Cameroon</option>
    <option>Canada</option>
    <option>Cape Verde</option>
    <option>Cayman Islands</option>
    <option>Central African Republic</option>
    <option>Chad</option>
    <option>Chile</option>
    <option>China</option>
    <option>Christmas Island</option>
    <option>Cocos (Keeling) Islands</option>
    <option>Colombia</option>
    <option>Comoros</option>
    <option>Congo</option>
    <option>Cook Islands</option>
    <option>Costa Rica</option>
    <option>Cote D'Ivoire</option>
    <option>Croatia</option>
    <option>Cuba</option>
    <option>Curacao</option>
    <option>Cyprus</option>
    <option>Czech Republic</option>
    <option>Democratic Republic of the Congo</option>
    <option>Denmark</option>
    <option>Djibouti</option>
    <option>Dominica</option>
    <option>Dominican Republic</option>
    <option>Ecuador</option>
    <option>Egypt</option>
    <option>El Salvador</option>
    <option>Equatorial Guinea</option>
    <option>Eritrea</option>
    <option>Estonia</option>
    <option>Ethiopia</option>
    <option>Falkland Islands</option>
    <option>Faroe Islands</option>
    <option>Fiji</option>
    <option>Finland</option>
    <option>France</option>
    <option>French Guiana</option>
    <option>French Polynesia</option>
    <option>French Southern Territories</option>
    <option>Gabon</option>
    <option>Gambia</option>
    <option>Georgia</option>
    <option>Germany</option>
    <option>Ghana</option>
    <option>Gibraltar</option>
    <option>Greece</option>
    <option>Greenland</option>
    <option>Grenada</option>
    <option>Guadeloupe</option>
    <option>Guam</option>
    <option>Guatemala</option>
    <option>Guernsey</option>
    <option>Guinea</option>
    <option>Guinea-Bissau</option>
    <option>Guyana</option>
    <option>Haiti</option>
    <option>Heard and Mc Donald Islands</option>
    <option>Honduras</option>
    <option>Hong Kong</option>
    <option>Hungary</option>
    <option>Iceland</option>
    <option>India</option>
    <option>Indonesia</option>
    <option>Iran</option>
    <option>Iraq</option>
    <option>Ireland</option>
    <option>Isle of Man</option>
    <option>Israel</option>
    <option>Italy</option>
    <option>Jamaica</option>
    <option>Japan</option>
    <option>Jersey (Channel Islands)</option>
    <option>Jordan</option>
    <option>Kazakhstan</option>
    <option>Kenya</option>
    <option>Kiribati</option>
    <option>Kuwait</option>
    <option>Kyrgyzstan</option>
    <option>Lao People's Democratic Republic</option>
    <option>Latvia</option>
    <option>Lebanon</option>
    <option>Lesotho</option>
    <option>Liberia</option>
    <option>Libya</option>
    <option>Liechtenstein</option>
    <option>Lithuania</option>
    <option>Luxembourg</option>
    <option>Macau</option>
    <option>Macedonia</option>
    <option>Madagascar</option>
    <option>Malawi</option>
    <option>Malaysia</option>
    <option>Maldives</option>
    <option>Mali</option>
    <option>Malta</option>
    <option>Marshall Islands</option>
    <option>Martinique</option>
    <option>Mauritania</option>
    <option>Mauritius</option>
    <option>Mayotte</option>
    <option>Mexico</option>
    <option>Micronesia, Federated States of</option>
    <option>Moldova, Republic of</option>
    <option>Monaco</option>
    <option>Mongolia</option>
    <option>Montenegro</option>
    <option>Montserrat</option>
    <option>Morocco</option>
    <option>Mozambique</option>
    <option>Myanmar</option>
    <option>Namibia</option>
    <option>Nauru</option>
    <option>Nepal</option>
    <option>Netherlands</option>
    <option>Netherlands Antilles</option>
    <option>New Caledonia</option>
    <option>New Zealand</option>
    <option>Nicaragua</option>
    <option>Niger</option>
    <option>Nigeria</option>
    <option>Niue</option>
    <option>Norfolk Island</option>
    <option>North Korea</option>
    <option>Northern Mariana Islands</option>
    <option>Norway</option>
    <option>Oman</option>
    <option>Pakistan</option>
    <option>Palau</option>
    <option>Palestine</option>
    <option>Panama</option>
    <option>Papua New Guinea</option>
    <option>Paraguay</option>
    <option>Peru</option>
    <option>Philippines</option>
    <option>Pitcairn</option>
    <option>Poland</option>
    <option>Portugal</option>
    <option>Puerto Rico</option>
    <option>Qatar</option>
    <option>Republic of Kosovo</option>
    <option>Reunion</option>
    <option>Romania</option>
    <option>Russia</option>
    <option>Rwanda</option>
    <option>Saint Kitts and Nevis</option>
    <option>Saint Lucia</option>
    <option>Saint Vincent and the Grenadines</option>
    <option>Samoa (Independent)</option>
    <option>San Marino</option>
    <option>Sao Tome and Principe</option>
    <option>Saudi Arabia</option>
    <option>Senegal</option>
    <option>Serbia</option>
    <option>Seychelles</option>
    <option>Sierra Leone</option>
    <option>Singapore</option>
    <option>Sint Maarten</option>
    <option>Slovakia</option>
    <option>Slovenia</option>
    <option>Solomon Islands</option>
    <option>Somalia</option>
    <option>South Africa</option>
    <option>South Georgia and the South Sandwich Islands</option>
    <option>South Korea</option>
    <option>South Sudan</option>
    <option>Spain</option>
    <option>Sri Lanka</option>
    <option>St. Helena</option>
    <option>St. Pierre and Miquelon</option>
    <option>Sudan</option>
    <option>Suriname</option>
    <option>Svalbard and Jan Mayen Islands</option>
    <option>Swaziland</option>
    <option>Sweden</option>
    <option>Switzerland</option>
    <option>Syria</option>
    <option>Taiwan</option>
    <option>Tajikistan</option>
    <option>Tanzania</option>
    <option>Thailand</option>
    <option>Timor-Leste</option>
    <option>Togo</option>
    <option>Tokelau</option>
    <option>Tonga</option>
    <option>Trinidad and Tobago</option>
    <option>Tunisia</option>
    <option>Turkey</option>
    <option>Turkmenistan</option>
    <option>Turks &amp; Caicos Islands</option>
    <option>Turks and Caicos Islands</option>
    <option>Tuvalu</option>
    <option>Uganda</option>
    <option>Ukraine</option>
    <option>United Arab Emirates</option>
    <option>United Kingdom</option>
    <option>Uruguay</option>
    <option>USA Minor Outlying Islands</option>
    <option>Uzbekistan</option>
    <option>Vanuatu</option>
    <option>Vatican City State (Holy See)</option>
    <option>Venezuela</option>
    <option>Vietnam</option>
    <option>Virgin Islands (British)</option>
    <option>Virgin Islands (U.S.)</option>
    <option>Wallis and Futuna Islands</option>
    <option>Western Sahara</option>
    <option>Yemen</option>
    <option>Zambia</option>
    <option>Zimbabwe</option>
</select>
</div>
                            <div class="form-group">
							
                                <label> State or Province:</label>
								
							<select class="form-control name="dropdownMenu" id="state" name="state">
                               <option value="" selected>- Please Select -</option>
								<option>Alaska</option>
								<option>Alabama</option>
								<option>Arkansas</option>
								<option>American Samoa</option>
								<option>Arizona</option>
								<option>California</option>
								<option>Colorado</option>
								<option>Connecticut</option>
								<option>D.C.</option>
								<option>Delaware</option>
								<option>Florida</option>
								<option>Micronesia</option>
								<option>Georgia</option>
								<option>Guam</option>
								<option >Hawaii</option>
								<option>Iowa</option>
								<option>Idaho</option>
								<option>Illinois</option>
								<option>Indiana</option>
								<option>Kansas</option>
								<option>Kentucky</option>
								<option>Louisiana</option>
								<option>Massachusetts</option>
								<option >Maryland</option>
								<option>Maine</option>
								<option>Marshall Islands</option>
								<option>Michigan</option>
								<option>Minnesota</option>
								<option>Missouri</option>
								<option>Marianas</option>
								<option>Mississippi</option>
								<option>Montana</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Nebraska</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>Nevada</option>
								<option>New York</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania</option>
								<option>Puerto Rico</option>
								<option>Palau</option>
								<option>Rhode Island</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Utah</option>
								<option>Virginia</option>
								<option>Virgin Islands</option>
								<option>Vermont</option>
								<option>Washington</option>
								<option>Wisconsin</option>
								<option>West Virginia</option>
								<option>Wyoming</option>
								<option>Military Americas</option>
								<option>Military Europe/ME/Canada</option>
								<option>Military Pacific</option>
								<option>Alberta</option>
								<option>Manitoba</option>
								<option>British Columbia</option>
								<option>New Brunswick</option>
								<option>Newfoundland and Labrador</option>
								<option>Nova Scotia</option>
								<option>Northwest Territories</option>
								<option>Nunavut</option>
								<option>Ontario</option>
								<option>Prince Edward Island</option>
								<option>Quebec</option>
								<option>Saskatchewan</option>
								<option>Yukon Territory</option>
								</select>
                            </div>
                           <div class="form-group">
						   <label> Number of interested attendees:</label>
						   <select class="form-control name="dropdownMenu" id="number" name="number">
						   <option value="" selected>- Please Select -</option>
						   <option>1</option>
						   <option>2</option>
						   <option>3</option>
						   <option>4</option>
						   <option>5</option>
						   <option>6</option>
						   <option>7</option>
						   <option>8</option>
						   <option>9 or more</option>
						   </select>
				
                            </div>
                            
                            <div class="form-group full-size">
                                <label>Dates Requested and Comments:</label>
                                <textarea id="date" name="date" class="form-control">
                                    
                                </textarea>
                            </div>
							
							
                            
                            <button type="submit" id="submit_erca" class="org-btn">submit</button>
							<div id="loading" style="display:none" align="center">
				           <img src="<?php echo  get_template_directory_uri(); ?>/images/kloader.gif" id="loader">
		                </div>
                            
                        </form>
						<div id="msg_success" class="alert alert-success" style="display:none">
				<strong>Success!</strong> Thank you for your message. It has been sent.
		  </div>
		  <div id="msg_error" class="alert alert-danger" style="display:none">
				<strong>Error!</strong> There was an error trying to send your message. Please try again later.
		  </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
					
					
					<!-------------------------------------------------->
                </div>
            </div>
        
        </div>
        
        <div class="training-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                    
                    <?php
                       $tra=get_post_meta($post->ID,"image_for_ekahau_certified_rtls",true);
                       $thumb = wp_get_attachment_image_src($tra, 'trainingcir-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/583x337&amp;text=No image found" alt="Image" class="img-responsive"/>
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                    </div>
                    <div class="col-md-6 col-md-offset-1 col-sm-7 col-xs-12">
                        <p><?php echo get_post_meta($post->ID,"ekahau_certified_rtls_administrator_(ecra)",true) ?></p>
						
						
						
                        <a href="javascript: void(0)" data-toggle="modal" data-target="#ecrePopUp" class="org-btn">REGISTER FOR ECRA</a>
						
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="custm-training-cvr">
                <?php the_field('custom_onsite_training_options'); ?>
                <a href=" <?php the_field('link_fo_custom_onsite_training_options'); ?>" class="org-btn">MORE INFO</a>
            </div>
            
        </div>
        

    </div>
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer(); ?>