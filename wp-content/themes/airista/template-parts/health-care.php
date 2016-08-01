<?php
/*

 * Template Name: health-care Page
 
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
	 viewBox="0 0 63.449 63.449" width="70px" height="60px">
<g>
	<g>
		<path style="fill:#010002;" d="M61.877,50.723c1.663-0.524,1.799-2.342,1.353-3.51l-4.585-10.805
			c-0.643-1.294-1.557-1.821-3.252-1.867c-0.32-0.01-0.643-0.003-0.964-0.006c1.468-0.504,2.455-2.406,0.988-3.763
			c-2.768-2.562-5.062-5.396-7.61-8.173c-0.268-0.292-0.939-1.009-1.938-1.327c-1.886-0.601-4.462,0.641-4.822,2.75
			c-0.657,3.854-1.261,7.722-1.521,11.621c-0.159,2.38,1.042,3.93,3.076,3.978c4.38,0.103,11.96,0.009,11.96,0.009l3.943,9.4
			C58.726,49.598,59.767,51.389,61.877,50.723z M47.501,34.415c0.153-1.517,0.331-3.027,0.539-4.535
			c1.311,1.441,2.68,2.827,4.113,4.154c0.25,0.232,0.52,0.39,0.792,0.49C51.132,34.508,49.314,34.481,47.501,34.415z"/>
		<circle  cx="46.173" cy="15.877" r="4.502"/>
		<path style="fill:#010002;" d="M57.237,47.551c-0.433-0.271-1.002-0.141-1.272,0.29c-2.031,3.231-5.52,5.161-9.327,5.161
			c-6.072,0-11.013-4.938-11.013-11.01c0-2.94,1.149-5.705,3.229-7.785c0.359-0.358,0.359-0.946,0-1.305
			c-0.254-0.253-0.621-0.324-0.942-0.219l-0.382-5.624c-0.024-0.351-0.243-0.656-0.566-0.793L36.39,26.03
			c0.303-0.833,0.105-1.794-0.933-2.313c-3.338-1.668-6.671-3.335-10.008-5.004c-0.184-0.424-0.456-0.831-0.835-1.203
			c-1.391-1.375-4.216-1.652-5.542,0.029c-2.975,3.771-5.605,7.738-7.923,11.946c-0.356,0.646-0.674,1.441-0.612,2.656
			c0.323,6.327-3.023,10.827-8.883,13.158c-3.091,1.229-1.536,6.13,2.073,4.757c6.205-2.549,10.217-6.796,11.593-13.055
			c2.796,3.955,4.636,7.95,5.664,12.797c0.697,3.295,5.959,2.808,5.139-0.935c-1.277-6.028-3.916-11.585-7.661-16.396
			c1.845-3.275,3.856-6.466,6.188-9.421c0.015-0.017,0.026-0.037,0.041-0.055c2.887,1.442,5.772,2.886,8.66,4.33
			c0.588,0.292,1.152,0.298,1.647,0.123l0.734,0.305l0.462,6.767c-1.56,2.166-2.408,4.751-2.408,7.472
			c0,7.09,5.768,12.855,12.855,12.855c4.448,0,8.52-2.253,10.892-6.023C57.799,48.393,57.669,47.824,57.237,47.551z"/>
		<circle  cx="27.433" cy="12.972" r="4.366"/>
	</g>
</g>

</svg>

                <h1> <?php the_title(); ?> </h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	        
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>


    <div class="education-main healthcare-main">
        <div class="education-grey">
            <div class="container">
                <div class="education-white healthcare-white">
                    <?php the_field('whole_hospital_visibilty',$post->ID);?>

                </div>
            </div>

        </div>

        <div class="healthcare-panel-sec">
            <div class="container">
                <div class="custm-accordion">
				 <div class="panel-group" id="accordion">
				<?php
			$i=1;
              $args = array(
             'post_type' => 'industries',
			 'showposts' => -1,
			 'order' => 'DESC',
			 
             'tax_query' => array(
              array(
                   'taxonomy' => 'industries_category',
                   'field' => 'slug',
                    'terms' => 'healthcare'
                   )
                )
           );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
               ?>
				
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" class="collapsed">
      <?php the_title(); ?><span><i class="fa fa-minus" aria-hidden="true"></i>
                    <i class="fa fa-plus" aria-hidden="true"></i></span></a>
      </h4>
                            </div>
                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" aria-expanded="false" >
                                <div class="panel-body">
                                    <div class="hth-care-img-left">
                                    
                                    <?php if ( has_post_thumbnail() ) {
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'healthcheck-image' );
		                            ?>
                                   <img src="<?php echo $image[0]; ?>" class="img-responsive"/>
                                   <?php
                                    } else { ?>
                                   <img src="http://placehold.it/553x987&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
                                   <?php } ?>	
                                   
                                    </div>
                                    <div class="hth-care-text-right">
                                        <?php the_content(); ?>
                                        <div class="go-beyond-left-list">
                                         <?php the_field('airista_flow_solution_highlights_text',$post->ID);?>   

 
                                           </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                       
                        
                
						<?php 
				       $i++;
			           endwhile;
			      	  echo '</div>';
				     wp_reset_query();?>
						
                    </div>
					
                </div>
            </div>

        </div>
        
        <div class="container">
                <ul class="go-bey-end-list">
                    <li>
                    <?php $first = get_post_meta($post->ID, 'first_file_upload', true); 
				     if ($first): ?>
                    <p> <?php echo get_post_meta($post->ID,"first_file_text",true) ?></p>
                        <a href="<?php echo wp_get_attachment_url($first); ?>" class="org-btn">download</a>
                         <?php endif; ?>
                    </li>
                    
                    <li>
                    <?php $secnd = get_post_meta($post->ID, 'second_file_upload', true); 
				     if ($secnd): ?>
                     <p> <?php echo get_post_meta($post->ID,"second_file_text",true) ?></p>
                     <a href="<?php echo wp_get_attachment_url($secnd); ?>" class="org-btn">download</a>
                     <?php endif; ?>
                    </li>
                    
                    <li>
                     <?php $thir = get_post_meta($post->ID, 'third_file_upload', true); 
				     if ($thir): ?>
                    <p> <?php echo get_post_meta($post->ID,"third_file_text",true) ?> </p>
                    <a href="<?php echo wp_get_attachment_url($thir); ?>" class="org-btn">Watch Now</a>
                    <?php endif; ?>
                    </li>
                </ul>
            
            </div>

    </div>    
<?php endwhile;
wp_reset_query();
?> 
<?php
get_footer();	?>