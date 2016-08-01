<?php
include('../../../../wp-config.php');
$count=6;
$offSet=$_GET['page_value'];
$offSet = ( $offSet - 1 ) * $count; 


$args = array ( 'post_type' => 'video','ORDER' => 'DESC','showposts'=>$count,'offset'=>$offSet  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();?>
				
                    <div class="col-md-6 col-sm-6 col-xs-12 videosmore">
                        <div class="videos-list">
                            <h4><?php the_title(); ?></h4>
						<div class="video-img"	>
						<?php $videoID = get_post_meta($post->ID, 'video', true); ?>
						<img src="http://img.youtube.com/vi/<?php echo $youtube_video_id = extractUTubeVidId($videoID);?>/0.jpg"/>

                           <!-- <div class="video-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/video-img-1.jpg);">-->
							
                                 <a class="video-btn fancybox-youtube" href="<?php the_field('video');?>?autoplay=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                            </div>
                            
                            <?php the_content(); ?>
                        
                        </div>
                    </div>
                             
                        <?php 
						
						endwhile;
						wp_reset_query();
						?>