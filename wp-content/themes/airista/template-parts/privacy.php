<?php
/*

 * Template Name: Privacy Page
 
*/

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>   
    <div class="food-hospitality-main privacy-main">
        <div class="container">
            <div class="food-hospitality-top">
			   
                <h2><?php the_title(); ?></h2>
				
                <?php the_content(); ?>
				
            </div>

            <div class="privacy-text">
       
                <?php the_field('any_of_the_information'); ?>
				
            </div>

        </div>
        
        <div class="privacy-terms-sec">
            <div class="container">
                <div class="food-hospitality-top">
				
                  <?php the_field('terms_of_use'); ?>
				  
                </div>
                
                <div class="privacy-text">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
                            <?php the_field('changes_to_our_privacy_policy'); ?>
							
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h6>Contacting Us  </h6>
                            <p>If there are any questions regarding this privacy policy you may contact us on: <a href="http://www.airista.com" target="_blank">http://www.airista.com</a>, 913 Ridgebrook Road, <br>
Suite 110, Sparks, MD 21152</p>
                        </div>
                    </div>
                
                    <?php the_field('privacy_policy'); ?>
                    
                </div>
            
                
            </div>
        
        </div>


    </div>
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer();	?>
	