<?php
/*

 * Template Name: Software Page
 
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
	 width="80px" height="70px" viewBox="0 0 500 500" >
<g>
	<path fill-rule="evenodd" clip-rule="evenodd" d="M243.295,70.907c85.174-6.667,143.836,68.512,138.809,132.074
		c-0.719,9.053,3.467,12.811,10.447,15.2c13.949,4.777,18.311,14.199,17.875,28.75c-0.959,31.887-0.299,63.827-0.299,95.733
		c0,24.84-0.137,24.54-23.104,34.128c-40.4,16.871-81.861,31.137-121.492,49.861c-3.7,0-7.408,0-11.117,0
		c-4.076-2.021-8.034-4.31-12.244-6.014c-38.963-15.719-77.852-31.621-117.032-46.789c-11.243-4.342-15.603-11.14-15.46-22.951
		c0.418-35.614,0.584-71.244-0.093-106.86c-0.233-12.378,3.524-20.864,15.368-24.504c11.492-3.541,13.164-10.976,12.82-22.068
		c-1.218-39.874,14.208-72.514,44.678-98.54c17.824-15.218,37.717-23.866,60.846-28.063L243.295,70.907z M355.459,195.529
		c-0.018-40.008-22.232-75.003-58.465-89.486c-37.91-15.152-72.682-8.286-102.975,18.843
		c-27.363,24.506-36.635,67.252-23.779,103.367c3.141,8.819,7.809,14.851,17.121,18.125c16.521,5.796,33.243,11.625,48.744,19.628
		c16.781,8.669,31.889,7.916,48.283-0.318c12.738-6.398,26.027-12.629,39.791-15.853c23.139-5.43,28.59-21.966,30.627-41.829
		C355.234,203.865,355.275,199.689,355.459,195.529z M260.22,350.229c0-12.963-0.034-25.942,0.017-38.905
		c0.016-4.342-0.36-7.517-5.588-9.538c-36.216-13.997-72.323-28.263-108.296-42.879c-8.136-3.292-9.521-0.518-9.455,6.848
		c0.21,25.008,0.191,50.013-0.009,75.021c-0.041,5.83,1.738,9.221,7.51,11.476c35.73,13.981,71.402,28.115,106.9,42.68
		c8.837,3.627,9.112-0.499,8.994-7.182C260.068,375.253,260.228,362.741,260.22,350.229z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="none" style="fill:transparent !important;" d="M355.479,195.529c-0.203,4.16-0.244,8.336-0.672,12.478
		c-2.037,19.863-8.359,32.956-30.627,41.829c-13.131,5.232-27.051,9.456-39.791,15.853c-16.395,8.234-28.433,8.506-48.283,0.318
		c-16.127-6.652-33.207-11.556-48.744-19.628c-7.465-3.878-13.98-9.306-17.121-18.125c-12.855-36.115-3.584-78.861,23.779-103.367
		c30.293-27.128,65.064-33.995,102.975-18.843C333.227,120.526,355.441,155.521,355.479,195.529z M260.168,139.886
		c-30.268-0.084-55.032,24.407-54.883,54.307c0.135,29.199,24.599,53.855,53.807,54.239c29.928,0.402,55.105-23.987,55.566-53.855
		C315.127,164.826,290.389,139.986,260.168,139.886z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="none" style="fill:transparent !important;" d="M260.22,350.229c0.008,12.512-0.151,25.023,0.073,37.52
		c0.118,6.683-0.157,10.809-8.994,7.182c-35.498-14.564-71.17-28.698-106.9-42.68c-5.771-2.255-7.551-5.646-7.51-11.476
		c0.2-25.008,0.219-50.013,0.009-75.021c-0.065-7.365,1.319-10.14,9.455-6.848c35.973,14.616,72.08,28.882,108.296,42.879
		c5.228,2.021,5.604,5.196,5.588,9.538C260.186,324.287,260.22,337.267,260.22,350.229z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" d="M260.168,139.886c30.221,0.1,54.959,24.94,54.49,54.69
		c-0.461,29.868-25.639,54.257-55.566,53.855c-29.208-0.383-53.672-25.04-53.807-54.239
		C205.136,164.293,229.9,139.802,260.168,139.886z M277.432,192.673c-1.135-9.522-6.848-16.254-17.639-16.071
		c-10.641,0.184-17.113,6.549-17.056,17.591c0.067,11.142,6.85,17.223,17.423,17.139
		C270.793,211.248,276.881,204.868,277.432,192.673z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="none" style="fill:transparent !important;" d="M277.432,192.673c-0.551,12.194-6.639,18.575-17.271,18.659
		c-10.573,0.084-17.355-5.997-17.423-17.139c-0.058-11.042,6.415-17.407,17.056-17.591
		C270.584,176.419,276.297,183.151,277.432,192.673z"/>
</g>
</svg>

                
                
              <!-- <img src="images/software-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                
                <?php the_content();?>
	            
            </div>
           
      </div>
        
        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>
    
    </div>
    
    <div class="food-hospitality-main software-main">
        <div class="container">
            <div class="food-hospitality-top">
                <h2><?php the_field('airista_flow_universal_visibility');?></h2>
                
            </div>
        </div>
        
        <div class="software-list">
             <?php
              $args = array(
             'post_type' => 'products',
			 'showposts' => -1,
			 'order' => 'DESC',
             'tax_query' => array(
              array(
                   'taxonomy' => 'products_category',
                   'field' => 'slug',
                    'terms' => 'Software'
	
                   )
                )
           );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
               ?>
        
        
            <article>
                <div class="container">
                    <div class="software-list-inner">
                         <figure>
                        <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'rtls-blog-image' );
		                ?>
                         <img src="<?php echo $image[0]; ?>" class="img-responsive"/>
                        <?php
                         } else { ?>
                        <img src="http://placehold.it/460x380&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive software-img" />
                        <?php } ?>	
                        
                         </figure>
                         <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        
                <?php 
				   endwhile;
			      	wp_reset_query();?>
               
            
            <article>
                <div class="container">
                    <div class="software-list-inner">
                        <h3><?php the_field('airista_flow_track_&_trace_and_vision_text')?></h3>
                        <?php
                       $fea=get_post_meta($post->ID,"features_and_benefit_image",true);
                       $thumb = wp_get_attachment_image_src($fea, 'features-image' );?>
		               <?php if($thumb==""){?>
		               <figure class="no-blue"> <img src="http://placehold.it/460x628&amp;text=No image found" alt="Image" class="img-responsive software-img"/>                        </figure>
		                <?php
		                }else{?>
		                <figure class="no-blue"> <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive software-img"><?php } ?>

                        </figure>
                        
                        <?php the_field('features_and_benefit_text',$post->ID);?>
                       
                    </div>
                </div>
            </article>
        </div>
        
        
        
    </div>
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer();?>