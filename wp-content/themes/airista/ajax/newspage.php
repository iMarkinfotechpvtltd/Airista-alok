<?php
include('../../../../wp-config.php');
?>
<?php 
$count=3;
$offSet=$_GET['page_value'];
$offSet = ( $offSet - 1 ) * $count; 

$args = array ( 'post_type' => 'news','ORDER' => 'DESC','showposts'=>$count,'offset'=>$offSet  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
      <article class="wow fadeIn hh" data-wow-duration="1.4s">
						  <?php 
		                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->ID ), 'news-image' );
		                  if($image==""){
			              ?>
                          <div class="event-news-img" style="background-image:url(http://placehold.it/583x490&amp;text=583x490);)">
			              <?php }	else{  ?>
                          <div class="event-news-img" style="background-image:url(<?php echo $image[0]; ?>);">
		                    <?php } ?>  
                          </div>
                            <div class="en-text">
                            <h3><?php the_title(); ?></h3>
                            <p class="en-date"><?php the_time('F j, Y'); ?></p>
                            <p><?php  $content = get_the_content(); echo wp_trim_words( $content , '49' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="org-btn">Read more</a></div>
                        </article>
<?php 
			
			endwhile;
			wp_reset_query(); ?>
