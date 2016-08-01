<?php
/*

 * Template Name: Food hospitality Page
 
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
                <h1><?php the_title();?></h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	           
            </div>
           
      </div>
        
        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
               
            </div>
    
    </div>
    
    <div class="food-hospitality-main">
        <div class="container">
            <div class="food-hospitality-top">
                 <?php the_field('instant_lifeline_to_help',$post->ID);?>
            
            </div>
        
        </div>
        
        <div class="food-hosp-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="food-hosp-gray-img">
                        <?php
                          $fod=get_post_meta($post->ID,"image_for_airista_flow_hand_hygiene_compliance_solutions",true);
                          $thumb = wp_get_attachment_image_src($fod, 'food-image' );?>
		                  <?php if($thumb==""){?>
		                    <img src="http://placehold.it/426x390&amp;text=No image found" alt="<?php the_title(); ?>"/>
		                  <?php
		                   }else{?>
		                   <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="food-hosp-gray-text">
                            <?php the_field('airista_flow_hand_hygiene_compliance_solutions',$post->ID);?>
                            <a href="<?php the_field('go_to_application_link',$post->ID);?>" class="org-btn">go to application </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            
        </div>
        
        <div class="manfa-drek-gray">
                <div class="container">
                    <p><?php echo get_option_tree('change_text_for_download_the_airista_flow_manufacturing'); ?> <a href="<?php echo get_option_tree('download_the_airista_flow_manufacturing_solution_brochure_file_upload'); ?>" class="org-btn">Download</a></p>
                    
                
                </div>
            
            </div>
        
    </div> 
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer(); ?>