<?php
/*

 * Template Name: Personal-safety Page
 
*/

get_header(); ?>    

    <div class="banner banner-main-inner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/personal-safety-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <svg  x="0px" y="0px"
	 width="70px" height="60px" viewBox="0 0 500 500" >
<g>
	<defs>
		<rect id="SVGID_1_" x="14.96" y="45.735" width="475.04" height="407.51"/>
	</defs>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  overflow="visible"/>
	</clipPath>
	<path clip-path="url(#SVGID_2_)" d="M480.951,419.248L266.129,57.56c-4.434-7.5-11.445-11.825-19.14-11.825
		c-7.774,0-14.814,4.396-19.249,12.047L18.522,419.286c-4.434,7.656-4.737,15.88-0.876,22.627
		c3.87,6.708,11.19,10.574,20.016,10.574h424.376c8.868,0,16.146-3.866,20.012-10.65
		C485.878,435.091,485.499,426.866,480.951,419.248L480.951,419.248z M444.377,424.44H54.983c-3.861,0-5.425-2.729-3.482-6.063
		L243.573,86.474c1.942-3.326,5.122-3.363,7.093-0.028l197.16,331.969C449.797,421.75,448.28,424.44,444.377,424.44L444.377,424.44z
		 M444.377,424.44"/>
</g>
<path d="M251.684,339.998c8.381,0,15.507-7.382,15.886-16.525l5.533-135.344c0.38-9.167-6.746-16.563-15.88-16.563H242.02
	c-9.168,0-16.104,7.396-15.492,16.525l8.864,135.382C235.993,332.616,243.27,339.998,251.684,339.998L251.684,339.998z
	 M251.684,339.998"/>
<path d="M257.374,356.598h-15.16c-9.167,0-16.601,7.391-16.601,16.563v15.161c0,9.172,7.434,16.601,16.601,16.601h15.16
	c9.172,0,16.601-7.429,16.601-16.601V373.16C273.975,363.988,266.546,356.598,257.374,356.598L257.374,356.598z M257.374,356.598"/>
</svg>
                
                
               <!-- <img src="images/personal-safety-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
	            <?php endwhile; ?>
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main personal-safety-main">
        <div class="container">
            <div class="personal-safety-top">
                 <?php the_field('an_instant_lifeline_to_help',$post->ID);?> 
            </div>
            
            <div class="personal-safety-list">
                <div class="personal-safety-item">
                    <div class="personal-safety-tm-left">
                    
                    <figure> 
					<?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'personal-safety-image-image' );
				        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-responsive" />
                        <?php
                        } else { ?>
                        <img src="http://placehold.it/583x473&amp;text=No image found" alt="<?php the_title(); ?>"/>
                        <?php } ?>
                        </figure>
                    </div>
                    <div class="personal-safety-tm-right">
                         <?php the_field('highly_customizable_and_features',$post->ID);?> 
                         <?php $first = get_post_meta($post->ID, 'upload_file_for_highly_customizable_and_features', true); 
				          if ($first): ?>
                        <a href="<?php echo wp_get_attachment_url($first); ?>" class="org-btn">Download Brochure</a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="personal-safety-item">
                    
                    <div class="personal-safety-tm-right">
                        <?php the_field('staff_safety',$post->ID);?> 
                        <?php $staff = get_post_meta($post->ID, 'upload_file_for_staff_safety_', true); 
				        if ($staff): ?>
                        <a href="<?php echo wp_get_attachment_url($staff); ?>" class="org-btn">Download Brochure</a>
                        <?php endif; ?>
                    </div>
                    <div class="personal-safety-tm-left">
                       <?php
                       $staffs=get_post_meta($post->ID,"upload_image_staff_safety",true);
                       $thumb = wp_get_attachment_image_src($staffs, 'personal-safety-image' );?>
		               <?php if($thumb==""){?>
		               <figure> <img src="http://placehold.it/583x473&amp;text=No image found" alt="Image" class="img-responsive"/><figure>
		                <?php
		                }else{?>
		                <figure>  <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?><figure> 
                    
                    </div>
                    
                </div>
            
                <div class="personal-safety-item">
                    <div class="personal-safety-tm-left">
                       <?php
                       $safety=get_post_meta($post->ID,"upload_image_for_motion_detection",true);
                       $thumb = wp_get_attachment_image_src($safety, 'personal-safety-image' );?>
		               <?php if($thumb==""){?>
		               <figure> <img src="http://placehold.it/583x473&amp;text=No image found" alt="Image" class="img-responsive"/><figure>
		               <?php
		                }else{?>
		                <figure><img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?><figure>
                    </div>
                    <div class="personal-safety-tm-right">
                       <?php the_field('motion_detection',$post->ID);?>
                       <?php $broch = get_post_meta($post->ID, 'upload_file_for_motion_detection', true); 
				       if ($broch): ?>
                        <a href="<?php echo wp_get_attachment_url($broch); ?>" class="org-btn">Download Brochure</a>
                        <?php endif; ?>
                    </div>
                </div>
               
                
                
            </div>
            

        </div>
     
    </div>

<?php
get_footer();