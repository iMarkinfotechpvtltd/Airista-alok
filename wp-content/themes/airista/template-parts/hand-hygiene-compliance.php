<?php
/*

 * Template Name: Hand Hygiene Compliance Page
 
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
	 viewBox="0 0 496.124 496.124" width="60px" height="50px">
<g>
	<path d="M420.001,219.7c3.666,14.313,5.811,29.238,5.811,44.676c0,99.828-81.199,181.024-181.022,181.024
		c-99.821,0-181.039-81.195-181.039-181.024c0-99.824,81.218-181.041,181.039-181.041c25.442,0,49.633,5.338,71.623,14.848
		l26.912-43.26c-29.949-14.15-63.27-22.307-98.535-22.307c-127.793,0-231.764,103.971-231.764,231.76
		c0,127.779,103.971,231.748,231.764,231.748c127.774,0,231.743-103.969,231.743-231.748c0-35.516-8.271-69.062-22.599-99.178
		L420.001,219.7z"/>
	<path d="M463.159,6.385c-19.811-12.32-45.882-6.279-58.217,13.533L236.88,289.985l-56.299-80.289
		c-13.389-19.104-39.775-23.729-58.879-10.338c-19.1,13.408-23.742,39.756-10.336,58.877l93.002,132.633
		c7.93,11.291,20.855,17.996,34.609,17.996c0.379,0,0.777,0,1.157-0.018c14.181-0.396,27.229-7.871,34.72-19.914L476.702,64.6
		C489.05,44.766,482.972,18.713,463.159,6.385z"/>
</g>

</svg>

                
                <!--<img src="images/hand-hygiene-compliance-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	           
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main hand-hygiene-main">
        <div class="container">
            <div class="food-hospitality-top">
                <h2><?php the_field('innovative_automated_system',$post->ID);?></h2>
                
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p><?php the_field('hospital-based_studies',$post->ID);?></p>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p><?php the_field('the_food_services_industry',$post->ID);?></p>
                    </div>
                </div>
                
                
            </div>
            
            <div class="hand-hygiene-mid-banner">
                     <?php
                       $saf=get_post_meta($post->ID,"image_for_innovative_automated_system",true);
                       $thumb = wp_get_attachment_image_src($saf, 'hand-hygiene-image' );?>
		               <?php if($thumb==""){?>
		              <img src="http://placehold.it/1440x533&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>"class="img-responsive"><?php } ?>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="hand-hygiene-list">
                       <?php the_field('how_airista_flow_hand_hygiene_solutions_work',$post->ID);?>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="hand-hygiene-list">
             
                        <?php the_field('solution_benefits',$post->ID);?>
                    </div>
                </div>
                
            </div>
            
            <ul class="go-bey-end-list hand-hygiene-end-list">
                    <li><p><?php the_field('download_the_hand_hygiene_for_healthcare',$post->ID);?></p>
                    <?php $health = get_post_meta($post->ID, 'upload_file_for_hand_hygiene_for_healthcare_', true); 
				       if ($health): ?>
                        <a href="<?php echo wp_get_attachment_url($health); ?>" class="org-btn">download</a>
                         <?php endif; ?>
                    </li>
                    
                    <li><p><?php the_field('download_the_hand_hygiene_for_food',$post->ID);?></p>
                      <?php $food = get_post_meta($post->ID, 'upload_file_for_hand_hygiene_for_food', true); 
				       if ($food): ?>
                     <a href="<?php echo wp_get_attachment_url($food); ?>" class="org-btn">download</a>
                     <?php endif; ?>
                    </li>
                    
                    
                </ul>
            

        </div>
     
    </div>
<?php endwhile;
wp_reset_query();
?>

<?php
get_footer(); ?>