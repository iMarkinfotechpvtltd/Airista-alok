<?php
/*

 * Template Name: Deployment Page
 
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
                
                <svg  viewBox="0 0 64 64" width="64px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,5.815c0,0-10.073,7.816-10.073,27.016c0,12.314,3.724,20.013,8.573,21.329V41.766c0-0.828,0.671-1.5,1.5-1.5   s1.5,0.672,1.5,1.5V54.16c4.849-1.315,8.573-9.015,8.573-21.329C42.073,13.409,32,5.815,32,5.815z M31.882,20.633   c-1.729,0-3.418-0.155-4.914-0.438c1.465-4.721,3.531-7.901,5.051-9.761c1.516,1.837,3.572,4.989,5.027,9.715   C35.492,20.463,33.712,20.633,31.882,20.633z"/><path d="M19.224,41.319c-3.007,0-5.444,2.081-5.444,4.648v12.218l9.862-7.296c-1.463-2.496-2.556-5.737-3.201-9.57H19.224z"/><path d="M44.776,41.319H43.56c-0.645,3.833-1.738,7.074-3.201,9.57l9.862,7.296V45.967C50.22,43.4,47.783,41.319,44.776,41.319z"/></g></svg>
                
                <!--<img src="images/deployment-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	            
                
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
           
        </div>

    

    <div class="food-hospitality-main deployment-main">
        <div class="container">
            <div class="food-hospitality-top">
                <?php the_field('our_rtls_deployment_and_our_experienced_team',$post->ID);?>
            </div>

            

        </div>
        
        <div class="deployment-gray-sec">
            
                <div class="depl-gray-top">
                    <div class="container">
                    <div class="depl-gray-left ">
                        <?php the_field('site_survey_and_on-site_facility',$post->ID);?>
                        
                        
                    </div>
                    <div class="depl-gray-right">
                        <?php the_field('installation_and_each_project_receives',$post->ID);?>
                    </div>
                </div>
                    </div>
                <div class="container">
                <div class="depl-gray-bottom">
                    <div class="depl-gray-center  " >
                         <?php the_field('rough-order-of_magnitude_and_blueprints_are_obtained',$post->ID);?>
                    </div>
                    
                </div>
                </div>
                
                
            
        
        </div>
     
        <div class="site-survey-bottom depl-white-sec">
            <div class="container">
                <h5> <?php the_field('ready_to_take_the_next_step',$post->ID);?></h5>
                <a href="#" data-toggle="modal" data-target="#contactPopUp"" class="org-btn"><?php the_field('get_a_quote',$post->ID);?></a>
            </div>
        </div>
        

    </div>
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer(); ?>