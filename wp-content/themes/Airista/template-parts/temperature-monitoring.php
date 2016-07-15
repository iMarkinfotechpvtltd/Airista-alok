<?php
/*

 * Template Name: Temperature Monitoring Page
 
*/

get_header(); ?>    

    <div class="banner banner-main-inner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/temperature-monitoring-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">

                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
	            <?php endwhile; ?>
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main temperature-monitoring-main">
        <div class="container">
            <div class="temp-monit-top-white">
                <?php 
		        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'first-temperature-image' );
		        if($image==""){
			    ?>
                <div class="temp-monit-img-top-left" style="background-image:url(http://placehold.it/654x577&amp;text=654x577);)">
			
			    <?php }	else{  ?>
                <div class="temp-monit-img-top-left" style="background-image:url(<?php echo $image[0]; ?>);">
		        <?php } ?>
                </div>
                <div class="temp-monit-img-top-right">
                    <?php the_field('product_temperature_monitoring',$post->ID);?>
                </div>
            </div>
            

        </div>
        
        <div class="temp-monit-gray">
            <div class="container">
                <div class="temp-monit-gray-inner">
                    <div class="temp-monit-gray-left">
                        <?php the_field('custom_solutions_from_the_airista',$post->ID);?>
                    </div>
                    
                 <?php 
		        $solu = get_post_meta($post->ID,"upload_image_for_custom_solutions",true);
				$thumb = wp_get_attachment_image_src($solu, 'second-temperature-image');
		        if($thumb==""){
			    ?>
                <div class="temp-monit-gray-right" style="background-image:url(http://placehold.it/582x444&amp;text=582x444);)">
			
			    <?php }	else{  ?>
                <div class="temp-monit-gray-right" style="background-image:url(<?php echo $url = $thumb['0'];?>);">
		        <?php } ?>
                        
                    </div>
                    
                    
                </div>
            
            </div>
        
        </div>
        
        <div class="manfa-drek-gray">
                <div class="container">
                    <p>Download the AiRISTA Flow Manufacturing Solution Brochure <a href="#" class="org-btn">Download</a></p>
                    
                
                </div>
            
            </div>

    </div>

<?php
get_footer();