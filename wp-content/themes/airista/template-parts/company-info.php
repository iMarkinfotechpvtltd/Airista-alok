<?php
/*

 * Template Name: Company Information Page
 
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
	 width="70px" height="60px" viewBox="0 0 200 200" >
<g>
	<path fill="#F26722" d="M160.743,34.885c-18.62,0-33.768,15.147-33.768,33.764c0,11.352,5.636,21.402,14.245,27.528v-9.302
		c0-5.103,3.254-9.614,8.094-11.228c0.034-0.01,2.779-0.854,2.779-0.854c1.036-0.318,2.154-0.234,3.135,0.23l5.515,2.623
		l5.516-2.623c0.979-0.464,2.099-0.548,3.134-0.23c0,0,2.745,0.844,2.779,0.854c4.841,1.614,8.092,6.125,8.092,11.228v9.302
		c8.611-6.126,14.247-16.176,14.247-27.528C194.51,50.033,179.363,34.885,160.743,34.885L160.743,34.885z M160.743,72.014
		c-7.34,0-13.308-5.971-13.308-13.308c0-7.34,5.968-13.311,13.308-13.311c7.339,0,13.308,5.971,13.308,13.311
		S168.082,72.014,160.743,72.014L160.743,72.014z M160.743,72.014"/>
	<path fill="#F26722" d="M160.743,54.069c-2.555,0-4.634,2.08-4.634,4.637c0,2.554,2.079,4.634,4.634,4.634s4.635-2.08,4.635-4.634
		C165.377,56.149,163.297,54.069,160.743,54.069L160.743,54.069z M160.743,54.069"/>
	<path fill="#F26722" d="M169.469,83.893l-1.008-0.312l-5.854,2.785c-1.18,0.561-2.548,0.561-3.726,0l-5.857-2.785l-1.008,0.312
		c-1.269,0.439-2.119,1.636-2.119,2.982v13.746c3.407,1.158,7.053,1.796,10.846,1.796s7.441-0.638,10.846-1.796V86.875
		C171.588,85.525,170.738,84.333,169.469,83.893L169.469,83.893z M169.469,83.893"/>
	<path fill="#F26722" d="M153.702,110.496l-3.226,12.525c3.71,0.021,7.176,1.072,10.134,2.881l3.861-14.984
		c-1.229,0.108-2.471,0.174-3.729,0.174C158.342,111.091,155.995,110.881,153.702,110.496L153.702,110.496z M153.702,110.496"/>
	<path fill="#F26722" d="M150.365,131.692c-6.063,0-10.997,4.933-10.997,10.997c0,6.063,4.934,10.996,10.997,10.996
		c6.064,0,10.997-4.933,10.997-10.996C161.362,136.625,156.429,131.692,150.365,131.692L150.365,131.692z M150.365,131.692"/>
	<path fill="#F26722" d="M104.67,170.571H12.357c-2.909,0-5.266,2.357-5.266,5.267c0,2.908,2.356,5.266,5.266,5.266h92.313
		c2.908,0,5.269-2.357,5.269-5.266C109.939,172.928,107.579,170.571,104.67,170.571L104.67,170.571z M104.67,170.571"/>
	<path fill="#F26722" d="M104.67,86.699l14.528-9.364c-0.586-2.804-0.897-5.709-0.897-8.686c0-1.131,0.059-2.252,0.146-3.361
		l-13.776,8.88V32.716c0-2.909-2.357-5.266-5.266-5.266H17.623c-2.909,0-5.266,2.357-5.266,5.266v132.896h92.316v-42.592
		l26.422,15.709c0.732-3.574,2.44-6.798,4.831-9.381l-31.253-18.582V86.699H104.67z M48.29,129.988h-10.22
		c-2.908,0-5.265-2.357-5.265-5.266s2.357-5.266,5.265-5.266h10.22c2.909,0,5.266,2.357,5.266,5.266S51.199,129.988,48.29,129.988
		L48.29,129.988z M48.29,109.541h-10.22c-2.908,0-5.265-2.357-5.265-5.266s2.357-5.266,5.265-5.266h10.22
		c2.909,0,5.266,2.357,5.266,5.266S51.199,109.541,48.29,109.541L48.29,109.541z M48.29,89.096h-10.22
		c-2.908,0-5.265-2.357-5.265-5.265c0-2.909,2.357-5.266,5.265-5.266h10.22c2.909,0,5.266,2.357,5.266,5.266
		C53.556,86.739,51.199,89.096,48.29,89.096L48.29,89.096z M48.29,68.649h-10.22c-2.908,0-5.265-2.357-5.265-5.265
		c0-2.909,2.357-5.266,5.265-5.266h10.22c2.909,0,5.266,2.357,5.266,5.266C53.556,66.292,51.199,68.649,48.29,68.649L48.29,68.649z
		 M78.96,129.988H68.737c-2.908,0-5.265-2.357-5.265-5.266s2.356-5.266,5.265-5.266H78.96c2.91,0,5.267,2.357,5.267,5.266
		S81.871,129.988,78.96,129.988L78.96,129.988z M78.96,109.541H68.737c-2.908,0-5.265-2.357-5.265-5.266s2.356-5.266,5.265-5.266
		H78.96c2.91,0,5.267,2.357,5.267,5.266S81.871,109.541,78.96,109.541L78.96,109.541z M78.96,89.096H68.737
		c-2.908,0-5.265-2.357-5.265-5.265c0-2.909,2.356-5.266,5.265-5.266H78.96c2.91,0,5.267,2.357,5.267,5.266
		C84.227,86.739,81.871,89.096,78.96,89.096L78.96,89.096z M78.96,68.649H68.737c-2.908,0-5.265-2.357-5.265-5.265
		c0-2.909,2.356-5.266,5.265-5.266H78.96c2.91,0,5.267,2.357,5.267,5.266C84.227,66.292,81.871,68.649,78.96,68.649L78.96,68.649z
		 M78.96,68.649"/>
</g>
</svg>

                
               <!-- <img src="images/company-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
               	
                <?php the_content(); ?>
				
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
        </div>

    

    <div class="food-hospitality-main company-info-main">
        <div class="container">
            <div class="food-hospitality-top">
                <?php the_field('what_we_do',23); ?>
            </div>
        </div>
        
        <div class="company-info-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 make-va">
                        <div class="company-info-gray-img">
                        
                        <?php
                          $miss=get_post_meta($post->ID,"image_for_mission_section",true);
                          $thumb = wp_get_attachment_image_src($miss, 'mission-image' );?>
		                  <?php if($thumb==""){?>
		                   <img src="http://placehold.it/672x499&amp;text=No image found" alt="<?php the_title(); ?>"/>
		                  <?php
		                   }else{?>
		                   <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                        
						</div>
                        
                        
                    </div>
                    
                    <div class="col-md-7 col-sm-7 col-xs-12 make-va">
                         <div class="company-info-gray-text">
						 
						 <?php the_field('mission_section_text'); ?>
						 
                        </div>
                                     
                    </div>
                </div>
            </div>
        
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="comp-btm-list">
                <ul>
                   <?php the_field('america,_airsta_flow,_finland'); ?> <a href="mailto:<?php the_field('enter_mail_adders'); ?>"><?php the_field('enter_mail_adders'); ?> </a><br> <a href="<?php the_field('linkof_name'); ?>"><?php the_field('link_name'); ?></a></li>
                </ul>
            </div>
                </div>
            </div>
        </div>

    </div>
<?php endwhile;
wp_reset_query();
?>	
<?php 
get_footer();	?>