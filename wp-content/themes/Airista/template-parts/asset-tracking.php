<?php
/*

 * Template Name: Asset tracking Page
 
*/

get_header(); ?>   

     <div class="banner banner-main-inner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/asset-tracking-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="70px" height="70px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" d="M251.489,130.442c77.394,1.22,130.494,32.721,172.55,85.04
	c9.322,11.602,17.03,24.543,24.907,37.222c1.687,2.714,2.476,7.97,0.98,10.378c-31.545,50.843-71.701,92.68-129.265,113.173
	c-61.32,21.829-119.316,11.805-172.75-24.625c-32.359-22.063-57.233-51.172-76.188-85.293c-1.877-3.378-2.85-9.375-1.122-12.331
	c31.546-53.899,73.424-96.214,134.891-114.642C223.056,134.098,241.65,132.285,251.489,130.442z M341.629,176.968
	c25.074,59.328,20.851,100.083-14.906,132.895c-31.967,29.332-79.723,36.108-115.682,12.513
	c-55.234-36.244-61.827-85.78-31.332-144.632c-34.631,20.308-59.707,46.503-79.581,77.854c-1.39,2.191-0.052,7.407,1.715,10.104
	c15.542,23.734,34.361,44.581,57.278,61.398c41.211,30.239,86.864,42.544,137.095,29.823
	c53.949-13.663,91.855-49.582,123.078-93.592c1.544-2.173,1.101-7.777-0.668-9.965c-13.396-16.568-26.51-33.514-41.425-48.655
	C366.739,194.089,353.583,186.119,341.629,176.968z M268.518,220.1c0-15.898,0.412-31.384-0.371-46.806
	c-0.145-2.864-5.036-7.526-7.875-7.631c-2.78-0.101-8.091,4.435-8.227,7.14c-0.794,15.737-0.389,31.536-0.389,47.297
	C257.853,220.1,262.692,220.1,268.518,220.1z M242.464,229.222c-15.962,0-31.459-0.412-46.896,0.376
	c-2.824,0.142-7.464,5.126-7.512,7.939c-0.046,2.808,4.506,8.021,7.244,8.159c15.735,0.79,31.533,0.385,47.163,0.385
	C242.464,239.82,242.464,234.98,242.464,229.222z M277.561,246.204c15.755,0,30.364,0.545,44.878-0.391
	c3.562-0.229,6.808-5.316,10.195-8.17c-3.4-2.839-6.663-7.902-10.229-8.126c-14.791-0.925-29.676-0.388-44.844-0.388
	C277.561,235.248,277.561,240.108,277.561,246.204z M268.593,255.554c-6.406,0-11.476,0-17.043,0
	c0,15.585-0.474,30.431,0.366,45.201c0.188,3.299,4.99,6.334,7.668,9.49c3.004-3.203,8.381-6.25,8.6-9.632
	C269.139,285.869,268.593,271.028,268.593,255.554z"/>
</svg>
                
               <!-- <img src="images/asset-tracking-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
	            <?php endwhile; ?>
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            <ul>
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>
            </ul>
        </div>

    

    <div class="food-hospitality-main asset-tracking-main">
        <div class="container">
            <div class="food-hospitality-top">
                <?php the_field('rfid-over-wi-fi',$post->ID);?> 
              
            </div>

        </div>
        
        <div class="asset-flow-outer">
            <div class="container">
                <div class="asset-flow-inner">
                    <div class="asset-flow-img wow slideInDown" data-wow-duration="1s">
                    
                    <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'flow-image' );
				        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-responsive" />
                        <?php
                        } else { ?>
                        <img src="http://placehold.it/871x212&amp;text=No image found" alt="<?php the_title(); ?>"/>
                        <?php } ?>
                    </div>
                    <div class="asset-flow-list">
                        <ul>
                            <li class="wow fadeIn" data-wow-duration="1s"><strong><?php the_field('airista_flow_tags',$post->ID);?></strong> <?php the_field('wi-fi-based_tag_data',$post->ID);?></li>
                            <li class="wow fadeIn" data-wow-duration="1.4s"><strong><?php the_field('any_wi-fi_network',$post->ID);?></strong> <?php the_field('any_wifi-network_data',$post->ID);?></li>
                            <li class="wow fadeIn" data-wow-duration="1.8s"><strong><?php the_field('airista_flow_vison',$post->ID);?></strong><?php the_field('reveals_bi_through',$post->ID);?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="asset-help-list">
               <?php the_field('airista_flow__assets_tracking_helps_to',$post->ID);?>
            </div>
        
        </div>
        
        <div class="asset-gray">
             <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 make-va wow slideInLeft" data-wow-duration="1s">   <div class="manfa-bottom-item">
                         <?php the_field('first_content_and_title',$post->ID);?>
                         <?php $first = get_post_meta($post->ID, 'upload_first_file', true); 
				          if ($first): ?>
                        <a href="<?php echo wp_get_attachment_url($first); ?>" class="org-btn">DOWNLOAD</a>
                        <?php endif; ?>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 make-va wow slideInLeft" data-wow-duration="1.2s">   <div class="manfa-bottom-item">
                         <?php the_field('second_file_name_and_content',$post->ID);?>
                         <?php $first = get_post_meta($post->ID, 'second_file_upload', true); 
				          if ($first): ?>
                        <a href="<?php echo wp_get_attachment_url($first); ?>" class="org-btn">DOWNLOAD</a>
                        <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        
        
        </div>
        
    </div>

<?php
get_footer();