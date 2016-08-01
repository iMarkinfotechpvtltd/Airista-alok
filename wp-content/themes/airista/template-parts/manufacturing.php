<?php
/*

 * Template Name: Manufacturing Page
 
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
	 width="70" height="60px" viewBox="0 0 476.518 476.518" >
<g>
	<path d="M276.619,38.115c-2.046-3.158-2.703-5.292-2.703-5.292l0.975-0.897c0,0,1.896,0.788,5.21,2.146
		c1.564,0.624,3.479,1.39,5.674,2.254c2.162,0.783,4.515,1.696,7.037,2.308c1.242,0.385,2.507,0.768,3.814,0.915
		c0.658,0.087,1.285,0.268,1.937,0.388c0.646,0.044,1.294,0.065,1.938,0.147c2.605,0.35,5,0.067,7.626-0.07
		c1.218-0.448,2.572-0.574,3.897-1.144c1.214-0.717,2.801-1.133,3.928-2.052c0.597-0.41,1.217-0.837,1.882-1.259
		c0.69-0.388,1.424-0.695,2.157-1.488l4.64-3.896c0.044-0.06-0.271,0.399-0.12,0.185l0.032-0.033l0.079-0.07l0.153-0.131
		l0.305-0.273l0.612-0.547l1.217-1.067l2.297-2.178c1.444-1.488,3.261-2.648,4.717-4.082c1.434-1.484,3.361-2.392,4.894-3.831
		c1.64-1.292,3.557-2.26,5.406-3.513c3.885-1.828,8.425-3.185,12.49-2.615c1.019,0.109,2.009,0.268,2.983,0.448
		c0.942,0.262,1.827,0.586,2.703,0.914c1.794,0.592,3.339,1.439,4.795,2.276c2.909,1.681,5.221,3.628,7.069,5.511
		c1.837,1.888,3.218,3.727,4.212,5.33c1.042,1.569,1.644,2.955,2.068,3.902c0.351,0.974,0.536,1.499,0.536,1.499l-0.974,0.908
		c0,0-2.089-0.706-5.297-2.047c-1.563-0.623-3.459-1.405-5.635-2.281c-2.101-0.865-4.412-1.817-6.853-2.643
		c-1.215-0.449-2.472-0.914-3.742-1.221c-0.645-0.158-1.279-0.411-1.927-0.596c-0.646-0.131-1.29-0.296-1.938-0.509
		c-2.621-0.854-5.329-1.696-8.682-2.046c-1.54,0.203-3.379,0.137-4.981,0.805c-1.541,0.782-3.311,1.384-4.548,2.774
		c-1.247,1.34-2.67,2.512-3.544,4.219l-1.271,2.544l-0.584,1.281l-0.284,0.635l-0.14,0.328l-0.07,0.147l-0.033,0.077l-0.022,0.049
		c0.126-0.186-0.196,0.296-0.174,0.268l-2.501,5.516c-0.821,1.779-2.704,3.787-4.241,5.554c-1.56,1.926-3.649,3.032-5.509,4.542
		c-1.947,1.368-4.324,2.156-6.5,3.146c-4.631,1.323-9.469,1.56-13.54,0.471c-2.079-0.459-3.992-1.062-5.678-1.937
		c-1.765-0.745-3.286-1.674-4.72-2.572c-2.85-1.887-5.109-3.885-6.894-5.844C278.973,41.573,277.622,39.702,276.619,38.115z
		 M476.518,351.03v113.6H0v-113.6h32.459V223.42l91.47-64.177v64.177l91.456-64.177v64.177l91.475-64.177v126.143h31.56
		l17.14-223.139h52.313l15.002,223.139h35.196v65.653h18.446V351.03z M149.375,301.975H77.461v66.387h71.914V301.975z
		 M273.293,301.975h-71.916v66.387h71.916V301.975z M398.768,301.975h-71.914v66.387h71.914V301.975z"/>
</g>

</svg>

                
                <!--<img src="images/manufa-icon-1.png" class="img-responsive">-->
                
                
                <h1> <?php the_title(); ?> </h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	           
            </div>
           
      </div>
        
        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
               
            </div>
    
    </div>
    
    <div class="manufa-main">
        <div class="container">
            <div class="manufa-main-top">
               <?php the_field('production_information',$post->ID);?>
            </div>
        </div>
        
        
        <div class="manfa-gray">
            <div class="container">
                <div class="go-beyond-left">
                    <div class="go-beyond-left-inner">
                        <?php the_field('staff_safety_and_lone_worker_solutions',$post->ID);?>
                    <div class="go-beyond-left-list">
                    <?php the_field('man_down_alerting',$post->ID);?>
                    
                    </div>
                    
                    </div>
                    
                </div>
                 <?php 
		        $down = get_post_meta($post->ID,"image_for_staff_safety_and_lone_worker_solutions",true);
				$thumb = wp_get_attachment_image_src($down, 'manufacturing-image');
		        if($thumb==""){
			    ?>
                <div class="go-beyond-right" style="background-image:url(http://placehold.it/705x726&amp;text=705x726);)">
			    <?php }	else{  ?>
                <div class="go-beyond-right" style="background-image:url(<?php echo $thumb[0]; ?>);">
		        <?php } ?>
                
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 make-va">   <div class="manfa-bottom-item">
                        <?php the_field('first_download_title_and_content',$post->ID);?>
                        <?php $first = get_post_meta($post->ID, 'first_file_upload', true); 
				        if ($first): ?>
                        <a href="<?php echo wp_get_attachment_url($first); ?>" class="org-btn">DOWNLOAD</a>
                        <?php endif; ?>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 make-va">   <div class="manfa-bottom-item">
                        <?php the_field('download_second_content_and_tile',$post->ID);?>
                        <?php $second = get_post_meta($post->ID, 'second_file_upload', true); 
				        if ($second): ?>
                        <a href="<?php echo wp_get_attachment_url($second); ?>" class="org-btn">DOWNLOAD</a>
                        <?php endif; ?>
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