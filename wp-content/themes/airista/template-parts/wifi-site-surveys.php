<?php
/*

 * Template Name: Wifi site surveys Page
 
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
                
                <svg x="0px" y="0px"
	 width="60" height="50px" viewBox="0 0 482.781 482.781" >
<g>
	<g>
		<g>
			<path d="M71.895,248.373c-18.191,0-32.934,14.763-32.934,32.953s14.742,32.948,32.934,32.948
				c49.859,0,90.402,40.56,90.402,90.402c0,18.189,14.758,32.948,32.949,32.948s32.934-14.759,32.934-32.948
				C228.18,318.498,158.075,248.373,71.895,248.373z"/>
			<path d="M89.832,126.759c-18.191,0-32.934,14.762-32.934,32.953s14.742,32.949,32.934,32.949
				c107.012,0,194.094,87.066,194.094,194.094c0,18.189,14.742,32.934,32.935,32.934s32.948-14.742,32.948-32.934
				C349.809,243.408,233.18,126.759,89.832,126.759z"/>
			<path d="M96.383,0.15c-18.191,0-32.938,14.742-32.938,32.934s14.746,32.949,32.938,32.949
				c176.723,0,320.516,143.809,320.516,320.563c0,18.19,14.741,32.934,32.936,32.934c18.207,0,32.947-14.741,32.947-32.934
				C482.781,173.505,309.441,0.15,96.383,0.15z"/>
			<path d="M58.211,366.205C26.051,366.205,0,392.259,0,424.419c0,32.142,26.051,58.212,58.211,58.212
				c32.145,0,58.227-26.07,58.227-58.212C116.438,392.259,90.356,366.205,58.211,366.205z"/>
		</g>
	</g>
</g>
</svg>
                
                <!--<img src="images/site-servey-banner-icon.png" class="img-responsive">-->
                <h1>WI-FI site survey </h1>
                <div class="spacer"></div>
                
                <?php the_content();?>
	            
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main site-survey-main">
        <div class="container">
            <div class="food-hospitality-top">
                <?php the_field('site_survey_validation_services_short_lines',$post->id);?>
            </div>

            

        </div>
        
        <div class="site-survey-gray">
            <div class="container">
                <div class="site-survey-gray-inner">
                    <div class="site-survey-gray-left">
                    
                    <?php
                       $wif=get_post_meta($post->ID,"site_survey_validation_image",true);
                       $thumb = wp_get_attachment_image_src($wif, 'wifi-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/580x458&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                    
                    </div>
                    <div class="site-survey-gray-right">
                        <?php the_field('site_survey_validation_services',$post->id);?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="site-survey-bottom">
            <div class="container">
                <h5><?php the_field('site_survey_text',$post->id);?></h5>
                <a href="<?php the_field('site_survey_link',$post->id);?>" class="org-btn">CLICK HERE</a>
            </div>
        </div>

    </div>
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer(); ?>