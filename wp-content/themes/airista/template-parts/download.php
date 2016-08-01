<?php
/*

 * Template Name: Downloads Page
 
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
	 width="70px" height="60px" viewBox="0 0 533.333 533.334" >
<g>
	<path d="M266.667,283.333L400,150H300V16.667h-66.667V150h-100L266.667,283.333z M387.878,228.787l-37.365,37.366l135.459,50.514
		l-219.306,81.779L47.361,316.667l135.458-50.514l-37.366-37.366L0,283.333v133.334l266.667,100l266.667-100V283.333
		L387.878,228.787z"/>
</g>
</svg>
               <!-- <img src="images/downloads-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                <?php the_content(); ?>
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="rs-download-cvr">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="rs-download-inner">
                        <div class="rs-heading">
                            <h3>Brochures</h3>   
                        </div>
                        <div class="rs-download-list">
                            <ul>
                          <?php
                          $args = array(
                         'post_type' => 'download',
			             'showposts' => 5,
			             'order' => 'DESC',
			    
                         'tax_query' => array(
                      array(
                           'taxonomy' => 'download_category',
                           'field' => 'slug',
                           'terms' => 'Brochures'
                   )
                )
           );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
               ?>
                            
                            <li>
                             <?php $file = get_post_meta($post->ID, 'pdf_file_upload', true); ?>
					         <?php if ($file): ?> 
                            <a href="<?php echo wp_get_attachment_url($file); ?>"><?php the_title(); ?><i class="fa fa-download" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            </li>
                             <?php 
				             endwhile;
				             wp_reset_query();?>
                             
                            </ul>
							<?php $broch = get_post_meta($post->ID, 'zip_file_upload_for_brochures', true); ?>
					        <?php if ($broch): ?> 
                            <a href="<?php echo wp_get_attachment_url($broch); ?>" class="rs-download-btn">download ALL</a>
							<?php endif; ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="rs-download-inner">
                        <div class="rs-heading">
                            <h3>White Papers</h3>   
                        </div>
                        <div class="rs-download-list">
                            <ul>
                              <?php
                          $args = array(
                         'post_type' => 'download',
			             'showposts' => 5,
			             'order' => 'DESC',
			    
                         'tax_query' => array(
                      array(
                           'taxonomy' => 'download_category',
                           'field' => 'slug',
                           'terms' => 'White Papers'
                   )
                )
           );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
               ?>
                            
                            <li>
                             <?php $second = get_post_meta($post->ID, 'pdf_file_upload', true); ?>
					         <?php if ($second): ?> 
                            <a href="<?php echo wp_get_attachment_url($second); ?>"><?php the_title(); ?><i class="fa fa-download" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            </li>
                               
                                
                                
                              <?php 
				             endwhile;
				             wp_reset_query();?>  
                                
                            </ul>
							<?php $white = get_post_meta($post->ID, 'zip_file_upload_for_white_papers', true); ?>
					        <?php if ($white): ?> 
                            <a href="<?php echo wp_get_attachment_url($white); ?>" class="rs-download-btn">download ALL</a>
							<?php endif; ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="rs-download-inner">
                        <div class="rs-heading">
                            <h3>Datasheets</h3>   
                        </div>
                        <div class="rs-download-list">
                            <ul>
                            <?php
                          $args = array(
                         'post_type' => 'download',
			             'showposts' => 5,
			             'order' => 'DESC',
			    
                         'tax_query' => array(
                      array(
                           'taxonomy' => 'download_category',
                           'field' => 'slug',
                           'terms' => 'Datasheets'
                   )
                )
           );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
               ?>
                            
                             <li>
                             <?php $third = get_post_meta($post->ID, 'pdf_file_upload', true); ?>
					         <?php if ($third): ?> 
                            <a href="<?php echo wp_get_attachment_url($third); ?>"><?php the_title(); ?><i class="fa fa-download" aria-hidden="true"></i></a>
                            <?php endif; ?>
                            </li>
                                
                                <?php 
				             endwhile;
				             wp_reset_query();?>
                            </ul>
							<?php $data = get_post_meta($post->ID, 'zip_file_upload_for_datasheets', true); ?>
					        <?php if ($data): ?> 
                            <a href="<?php echo wp_get_attachment_url($data); ?>" class="rs-download-btn">download ALL</a>
							<?php endif; ?>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php endwhile; wp_reset_query(); ?>
<?php
get_footer();	?>