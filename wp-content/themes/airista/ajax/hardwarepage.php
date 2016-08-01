<?php
include('../../../../wp-config.php');
$count=5;
$offSet=$_GET['page_value'];
$offSet = ( $offSet - 1 ) * $count; 

              $args = array(
             'post_type' => 'products',
			 'order' => 'DESC',
			 'offset'=>$offSet,
             'tax_query' => array(
              array(
                   'taxonomy' => 'products_category',
                   'field' => 'slug',
                    'terms' => 'Hardware'
                   )
                )
           );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();?>
  <article class="wow fadeIn hardpost" data-wow-duration="1.2s">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="hardware-text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                             <?php $file = get_post_meta($post->ID, 'download_brochure_file_upload', true); ?>
					         <?php if ($file): ?>  
                            <a href="<?php echo wp_get_attachment_url($file); ?>" class="org-btn">Download Brochure</a>
                            <?php endif; ?>
                                </div>
                        </div>
                        <div class="col-md-5 col-sm-7 col-xs-12">
                        <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hardcate-image' );
		                ?>
                        <img src="<?php echo $image[0]; ?>" class="img-responsive hardware-img"/>
                        <?php
                         } else { ?>
                       <img src="http://placehold.it/1440x533&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive hardware-img"/>
                       <?php } ?>
                        </div>
                    </div>
                </article>
                <?php  endwhile;
				wp_reset_query(); ?>