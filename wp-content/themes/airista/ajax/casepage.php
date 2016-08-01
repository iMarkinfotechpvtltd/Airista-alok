<?php
include('../../../../wp-config.php');
?>
<?php 
$count=5;
$offSet=$_GET['page_value'];
$offSet = ( $offSet - 1 ) * $count; 

$args = array ( 'post_type' => 'case','ORDER' => 'DESC','showposts'=>$count,'offset'=>$offSet  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
     
	        <article class="cas">
		
            <div class="container">
			
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="case-sdy-img">
						<?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'case-image' );
				        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-responsive"/>
                        <?php
                        } else { ?>
                        <img src="http://placehold.it/597x381&amp;text=No image found" alt="<?php the_title(); ?>"/>
                        <?php } ?>	
                        </div>
                    </div>
                    <div class="col-md-6  col-sm-6 col-xs-12">
                        <div class="case-sdy-text">
                            <h5><?php the_title(); ?></h5>
                           <p><?php  $content = get_the_content(); echo wp_trim_words( $content , '71' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="org-btn">Read more</a>
                        </div>

                    </div>
                </div>
				
            </div>

        </article>
	 
	 
	 
	 
<?php 
			
			endwhile;
			wp_reset_query(); ?>