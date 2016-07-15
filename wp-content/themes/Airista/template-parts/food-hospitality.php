<?php
/*

 * Template Name: Food hospitality Page
 
*/

get_header(); ?> 
 
    <div class="banner banner-main-inner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/food-n-hospitality-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <h1><?php the_title();?></h1>
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
                        
                        <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'food-image' );
				        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-responsive" />
                        <?php
                        } else { ?>
                        <img src="http://placehold.it/426x390&amp;text=No image found" alt="<?php the_title(); ?>"/>
                        <?php } ?>
                        
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="food-hosp-gray-text">
                            <?php the_field('airista_flow_hand_hygiene_compliance_solutions',$post->ID);?>
                            <a href="#" class="org-btn">go to application </a>
                        </div>
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