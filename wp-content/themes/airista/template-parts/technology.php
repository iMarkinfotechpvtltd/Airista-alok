<?php
/*

 * Template Name: Technology Page
 
*/

get_header(); ?>    
<?php while ( have_posts() ) : the_post(); ?> 
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
                
                <?php the_content();?>
	           
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main technology-main">
        <div class="container">
            <div class="food-hospitality-top">
                <h2><?php the_field('airista_flow_technology',$post->ID);?></h2>

            </div>

            <div class="rfid-technology">

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php the_field('rfid_technology',$post->ID);?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php
                       $tec=get_post_meta($post->ID,"image_for_rfid_technology",true);
                       $thumb = wp_get_attachment_image_src($tec, 'technofirst-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/628x430&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive tech-img" />
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive tech-img"><?php } ?>
                        
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p><?php echo get_post_meta($post->ID,"this_platform_has_opened_up_the_door",true) ?>	</p>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tech-tabs-cvr">                        <ul class="nav nav-tabs tech-tabs">
                            <li ><a data-toggle="tab" href="#home"><?php the_field('passive_rfid_tags',$post->ID);?></a></li>
                            <li><a data-toggle="tab" href="#menu1"><?php the_field('active_and_semi-passive_rfid_tags',$post->ID);?></a></li>
                            <li><a data-toggle="tab" href="#menu2"><?php the_field('ble',$post->ID);?></a></li>
                            <li class="active"><a data-toggle="tab" href="#menu3"><?php the_field('gps',$post->ID);?></a></li>
                            <li><a data-toggle="tab" href="#menu4"><?php the_field('ir',$post->ID);?></a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in ">
                                
                                <p>
                                <?php
                       $tech=get_post_meta($post->ID,"image_for_airista_flows_gps_technology_could_be_used",true);
                       $thumb = wp_get_attachment_image_src($tech, 'technosecond-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/374x258&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive tech-img-right">
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive tech-img-right""><?php } ?>
                             
                                    <?php echo get_post_meta($post->ID,"airista_flows_gps_technology_could_be_used_text",true) ?>	</p>
                                
                                
                            </div>
                            
                            <div id="menu1" class="tab-pane fade in ">
                                
                                <p>
                                    <?php
                       $techn=get_post_meta($post->ID,"image_for_airista_flows_gps_technology_could_be_used_outdoors",true);
                       $thumb = wp_get_attachment_image_src($techn, 'technosecond-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/374x258&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive tech-img-right">
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive tech-img-right""><?php } ?>
                                    <?php echo get_post_meta($post->ID,"airista_flows_gps_technology_could_be_used_outdoors",true) ?></p>
                                
                                
                            </div>
                            <div id="menu2" class="tab-pane fade in ">
                                
                                <p>
                                    <?php
                       $techno=get_post_meta($post->ID,"airista_flows_image",true);
                       $thumb = wp_get_attachment_image_src($techno, 'technosecond-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/374x258&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive tech-img-right">
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive tech-img-right""><?php } ?>
                                   <?php echo get_post_meta($post->ID,"airista_flows_text",true) ?></p>
                                
                                
                            </div>
                            <div id="menu3" class="tab-pane fade in active">
                                
                                <p>
                                     <?php
                       $technol=get_post_meta($post->ID,"image_for_airista_flows_gps_technology_could_be_used_outdoors_since",true);
                       $thumb = wp_get_attachment_image_src($technol, 'technosecond-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/374x258&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive tech-img-right">
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive tech-img-right""><?php } ?>
                                   <?php echo get_post_meta($post->ID,"airista_flows_gps_technology_could_be_used_outdoors_since_text",true) ?></p>
                                
                                
                            </div>
                            <div id="menu4" class="tab-pane fade in ">
                                
                                <p>
                                    <?php
                       $technolo=get_post_meta($post->ID,"image_for_gps_technology_could_be_used_outdoors_since_it_relies",true);
                       $thumb = wp_get_attachment_image_src($technolo, 'technosecond-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/374x258&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive tech-img-right">
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive tech-img-right""><?php } ?>
                                   <?php echo get_post_meta($post->ID,"gps_technology_could_be_used_outdoors_since_it_relies_text",true) ?></p>
                                
                                
                            </div>
                        </div>
                            </div>

                    </div>


                </div>
            </div>


        </div>


    </div>
<?php endwhile;
wp_reset_query();
?><?php
get_footer(); ?>