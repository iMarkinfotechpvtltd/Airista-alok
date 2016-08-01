<?php
include('../../../../wp-config.php');
?>
<?php 
$count=3;
$offSet=$_GET['page_value'];
$offSet = ( $offSet - 1 ) * $count; 

$args = array ( 'post_type' => 'post','ORDER' => 'DESC','showposts'=>$count,'offset'=>$offSet  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
                    <div class="blog-post  wow fadeIn" data-wow-duration="1s">
					
                        <div class="blog-date">
                            <div class="blog-date-inner">
                                <span><?php the_time("d") ; ?><br><?php the_time("M") ; ?></span>
                            </div>
                        </div>

                        <div class="blog-content">
                            <div class="blog-img">
							
							<?php if ( has_post_thumbnail() ) {
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-image' );
				            ?>
                            <img src="<?php echo $image[0]; ?>" class="img-responsive"/>
                            <?php
                            } else { ?>
                           <img src="http://placehold.it/597x381&amp;text=No image found" alt="<?php the_title(); ?>"/>
                           <?php } ?>	
							
                            </div>
                            <div class="blog-descp">
                                <h4><?php the_title();?></h4>
                                <ul class="blog-detail">
                                    <li><a href="javascript:void(0)" title=""><i class="fa fa-user" aria-hidden="true"></i> By <?php the_author() ?></a></li>
                                    <li><a href="javascript:void(0)" title=""><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time("d F Y") ; ?></a></li>
                                    <li><a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i> 2 Comments</a></li>
                                </ul>
								<p><?php  $content = get_the_content(); echo wp_trim_words( $content , '39' ); ?></p>
                                <a href="<?php the_permalink(); ?>"  class="blog-btn-link">read more </a>
                            </div>
                        </div>


						
						
						
                    </div>
<?php endwhile;?>
