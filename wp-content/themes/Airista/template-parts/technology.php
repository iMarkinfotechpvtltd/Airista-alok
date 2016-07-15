<?php
/*

 * Template Name: Technology Page
 
*/

get_header(); ?>    

    <div class="banner banner-main-inner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/technology-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                
                <svg  x="0px" y="0px"
	 viewBox="0 0 498.078 498.078" width="60px" height="50px">
<g>
	<path d="M476.578,71.734H21.5c-11.855,0-21.5,9.645-21.5,21.5v311.609c0,11.855,9.645,21.5,21.5,21.5h455.078
		c11.855,0,21.5-9.645,21.5-21.5V93.234C498.078,81.379,488.433,71.734,476.578,71.734z M23,94.734h356v308.609H23V94.734z
		 M475.078,403.344H402V94.734h73.078V403.344z"/>
	<path d="M437.5,284.539c6.352,0,11.5-5.148,11.5-11.5v-48c0-6.352-5.148-11.5-11.5-11.5s-11.5,5.148-11.5,11.5v48
		C426,279.39,431.148,284.539,437.5,284.539z"/>
	<path d="M349.5,317.144h-19.23l-59.543-49.818c14.047-22.489,31.008-53.365,31.008-71.346
		c-0.001-31.658-25.757-57.415-57.419-57.418c-15.335,0-29.752,5.972-40.595,16.815c-10.843,10.843-16.815,25.261-16.814,40.596
		c0.001,17.266,15.642,46.429,29.325,68.635l-53.244,43.045l-66.558-78.164c3.334-2.014,5.571-5.661,5.571-9.84v-39
		c0-6.352-5.149-11.5-11.5-11.5h-39c-6.351,0-11.5,5.148-11.5,11.5v39c0,6.351,5.149,11.5,11.5,11.5h16.133l85.11,99.951
		c2.271,2.667,5.504,4.044,8.762,4.044c2.541,0,5.098-0.838,7.224-2.557l60.045-48.543c2.69,3.99,4.848,7.083,6.153,8.932
		c2.155,3.051,5.658,4.865,9.394,4.865c3.735,0,7.238-1.815,9.393-4.865c1.002-1.42,2.505-3.568,4.366-6.295l42.88,35.535
		c-1.238,1.836-1.962,4.047-1.962,6.428v39c0,6.352,5.148,11.5,11.5,11.5h39c6.352,0,11.5-5.148,11.5-11.5v-39
		C361,322.293,355.851,317.144,349.5,317.144z M63,192.149h16v16H63V192.149z M244.32,265.856
		c-16.503-25.245-34.414-57.364-34.414-69.883c0-9.192,3.579-17.834,10.078-24.333c6.499-6.499,15.14-10.078,24.333-10.078
		c18.977,0.001,34.415,15.441,34.416,34.418C278.734,208.484,260.824,240.604,244.32,265.856z M338,356.144h-16v-16h16V356.144z"/>
</g>

</svg>
                
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
	            <?php endwhile; ?>
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main technology-main">
        <div class="container">
            <div class="food-hospitality-top">
                <h2>AiRISTA Flow technology</h2>

            </div>

            <div class="rfid-technology">

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h3>RFID technology</h3>
                        <p>
                            AiRISTA Flow featuring Ekahau RTLS offers three types of RFID tags: passive, active, and semi-passive (also known as battery assisted passive or BAP.) AiRISTA Flow gives customers the option of RFID, Bluetooth Low Energy (BLE), GPS, or IR technology. An active RFID tag uses an internal power source (battery) within the tag to continuously power the tag and its RF communication circuitry, whereas a passive RFID tag has no internal power supply and relies on RF energy transferred from the reader to the tag. AiRISTA Flow recognized the need for creation of a single platform that combines the application of each technology. The result is the ability for organizations to deploy not only a single type of tag within their environment, but rather, any combination of the three types of tags. </p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/technology-img-1.jpg" class="img-responsive tech-img">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p>This platform has opened up the door to a plateau of new types of applications for facilities and hospitals that might be tracking large and expensive assets with active RFID tags, but smaller, less-expensive, or disposable inventory items with passive or semi-passive tag technologies. RFID, RTLS, and GPS solutions belong to a family of solutions referred to as location-based services (LBS.) Only Real-Time Location Systems can use active RFID tags to locate high-value assets and people on virtual maps as they move in real-time. Active RFID technology is enterprise-grade, not to be confused with passive RFID technology, which works only in proximity to specialized RFID readers and provides ‘point-in-time’ location.</p>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tech-tabs-cvr">                        <ul class="nav nav-tabs tech-tabs">
                            <li ><a data-toggle="tab" href="#home">Passive RFID Tags</a></li>
                            <li><a data-toggle="tab" href="#menu1">Active and Semi-Passive RFID Tags</a></li>
                            <li><a data-toggle="tab" href="#menu2">BLE</a></li>
                            <li class="active"><a data-toggle="tab" href="#menu3">gps</a></li>
                            <li><a data-toggle="tab" href="#menu4">ir</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in ">
                                
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/technology-img-2.jpg" class="img-responsive tech-img-right">
                                    AiRISTA Flow’s GPS technology could be used outdoors since it relies on latitude and longitude coordinates acquired from satellites to determine location of tagged assets and staff. Some of AiRISTA Flow’s third-party GPS hardware devices may use Wi-Fi, cellular, or Data Communication Satellite networks to transmit to AiRISTA Flow’s UVS server. Our GPS location engine can be deployed autonomously or in together with many of AiRISTA Flow’s other platforms,in order to provide seamless track and trace capability, both indoors and outdoors.</p>
                                
                                
                            </div>
                            
                            <div id="menu1" class="tab-pane fade in ">
                                
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/technology-img-2.jpg" class="img-responsive tech-img-right">
                                    AiRISTA Flow’s GPS technology could be used outdoors since it relies on latitude and longitude coordinates acquired from satellites to determine location of tagged assets and staff. Some of AiRISTA Flow’s third-party GPS hardware devices may use Wi-Fi, cellular, or Data Communication Satellite networks to transmit to AiRISTA Flow’s UVS server. Our GPS location engine can be deployed autonomously or in together with many of AiRISTA Flow’s other platforms,in order to provide seamless track and trace capability, both indoors and outdoors.</p>
                                
                                
                            </div>
                            <div id="menu2" class="tab-pane fade in ">
                                
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/technology-img-2.jpg" class="img-responsive tech-img-right">
                                    AiRISTA Flow’s GPS technology could be used outdoors since it relies on latitude and longitude coordinates acquired from satellites to determine location of tagged assets and staff. Some of AiRISTA Flow’s third-party GPS hardware devices may use Wi-Fi, cellular, or Data Communication Satellite networks to transmit to AiRISTA Flow’s UVS server. Our GPS location engine can be deployed autonomously or in together with many of AiRISTA Flow’s other platforms,in order to provide seamless track and trace capability, both indoors and outdoors.</p>
                                
                                
                            </div>
                            <div id="menu3" class="tab-pane fade in active">
                                
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/technology-img-2.jpg" class="img-responsive tech-img-right">
                                    AiRISTA Flow’s GPS technology could be used outdoors since it relies on latitude and longitude coordinates acquired from satellites to determine location of tagged assets and staff. Some of AiRISTA Flow’s third-party GPS hardware devices may use Wi-Fi, cellular, or Data Communication Satellite networks to transmit to AiRISTA Flow’s UVS server. Our GPS location engine can be deployed autonomously or in together with many of AiRISTA Flow’s other platforms,in order to provide seamless track and trace capability, both indoors and outdoors.</p>
                                
                                
                            </div>
                            <div id="menu4" class="tab-pane fade in ">
                                
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/technology-img-2.jpg" class="img-responsive tech-img-right">
                                    AiRISTA Flow’s GPS technology could be used outdoors since it relies on latitude and longitude coordinates acquired from satellites to determine location of tagged assets and staff. Some of AiRISTA Flow’s third-party GPS hardware devices may use Wi-Fi, cellular, or Data Communication Satellite networks to transmit to AiRISTA Flow’s UVS server. Our GPS location engine can be deployed autonomously or in together with many of AiRISTA Flow’s other platforms,in order to provide seamless track and trace capability, both indoors and outdoors.</p>
                                
                                
                            </div>
                        </div>
                            </div>

                    </div>


                </div>
            </div>


        </div>


    </div>

<?php
get_footer();