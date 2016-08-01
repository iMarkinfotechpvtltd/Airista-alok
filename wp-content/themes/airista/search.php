<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
        <div class="banner banner-main-inner blog-banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/blog-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <svg  x="0px" y="0px"
	 width="60px" height="50px" viewBox="0 0 469.862 469.863" >
<g>
	<g>
		<g>
			<path d="M447.633,39.537H256.443c-12.261,0-22.232,9.972-22.232,22.23v98.652c0,12.258,9.973,22.229,22.232,22.229h16.787v39.161
				c0,2.707,1.579,5.165,4.043,6.292c0.92,0.42,1.901,0.627,2.875,0.627c1.631,0,3.243-0.576,4.524-1.685l51.379-44.396h111.58
				c12.258,0,22.23-9.973,22.23-22.23v-98.65C469.863,49.509,459.891,39.537,447.633,39.537z M296.686,127.45
				c-9.743,0-17.642-7.9-17.642-17.644s7.897-17.644,17.642-17.644c9.746,0,17.646,7.899,17.646,17.644
				C314.33,119.549,306.432,127.45,296.686,127.45z M352.037,127.45c-9.742,0-17.644-7.9-17.644-17.644s7.9-17.644,17.644-17.644
				c9.744,0,17.645,7.899,17.645,17.644C369.682,119.549,361.781,127.45,352.037,127.45z M407.391,127.45
				c-9.743,0-17.643-7.9-17.643-17.644s7.898-17.644,17.643-17.644c9.745,0,17.644,7.899,17.644,17.644
				C425.033,119.549,417.133,127.45,407.391,127.45z"/>
			<path d="M140.857,134.958c-43.093,0-66.941,22.33-66.506,65.358c0.631,58.932,25.673,94.682,66.506,94.058
				c0,0,66.473,2.695,66.473-94.058C207.33,157.288,184.873,134.958,140.857,134.958z"/>
			<path d="M258.434,339.103l-66.419-26.48l-15.554-13.107c-4.108-3.471-10.176-3.215-13.986,0.574l-21.624,21.504l-21.688-21.511
				c-3.813-3.782-9.872-4.026-13.975-0.566l-15.556,13.106l-66.423,26.484C1.82,347.626,1.836,423.371,0,430.326h281.674
				C279.842,423.388,279.831,347.615,258.434,339.103z"/>
		</g>
	</g>
</g>
</svg>
                
                <!--<img src="images/blog-banner-icon.png" class="img-responsive">-->
               <h1>Search result</h1>
                <div class="spacer"></div>
                
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            
        </div>

   

<div class="blog-main">
        <div class="container">
            <div class="blog-cover">
                <div class="blog-left">
                    

				<?php
				// Start the loop.
				 if ( have_posts() ) {
					while ( have_posts() ) : the_post(); ?>
				
					
					
                        
                        <div class="blog-content blog-search-rs">
                            <div class="blog-descp">
                                <h4><?php the_title();?></h4>
								<p><?php  $content = get_the_content(); echo wp_trim_words( $content , '39' ); ?></p>
                                <a href="<?php the_permalink(); ?>"  class="blog-btn-link">read more </a>
                            </div>
                        </div>	
                    
                    
                    
                    
                    <?php 
					endwhile; wp_reset_query();
						}
					else
					{?>	
					<!--<div class="blog-post">
                        <a href=" <?php the_permalink(); ?> "><h3><?php the_title();  ?></h3></a>
						<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'blog-images' );
								$url = $image_attributes[0];
						?>
                        
                        -->
                            
                          <div class="blog-content blog-search-rs">
                            <div class="blog-descp">
                                <h4>No Result found</h4>
								
                            </div>
                        </div>	  
                            
                        
                        <!--<div class="blog-post-text">
                            <div class="blog-auth">
                                <p class="blog-nf">No Result found</p>
                            </div>
                            
                            <div class="blog-main-text">
                                <p></p>
                            </div>
                            
                            <div class="blog-more">
                                <div class="blog-btn-cvr">
                                    
                                </div>
                                <div class="blog-social">
                                    
                                </div>
                            </div>
                            
                        </div>-->
                    
                        
                    <!--</div>-->
					<?php }	
					?>
                    
                
				
						<?php if ( have_posts() ) {?>
								<div class="pagi-cvr">  
								<?php
								if($loopb->max_num_pages>1){?>
						   <ul class="pagination">
						   <?php
							 if ($paged > 1) { ?>
							   <li><a href="<?php echo '?paged=' . ($paged -1); //prev link ?>"><i class="fa fa-chevron-left" aria-hidden="true"></a></i></li>
											   <?php }
						   for($i=1;$i<=$loopb->max_num_pages;$i++){?>
							   <li><a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a></li>
							   <?php
						   }
						   if($paged < $loopb->max_num_pages){?>
							   <li><a href="<?php echo '?paged=' . ($paged + 1); //next link ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
						   <?php } ?> 
						   
						   </ul>

								<?php } } ?>	
									
									
									
						</div>	
                    
                    <?php if ( have_posts() ) {?>
               </div>
                
                <?php } ?>
               
               <div class="blog-sidebar">
                    <div class="blog-search wow slideInRight" data-wow-duration="1.2s">
                    
                       <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="text" placeholder="Search" name="s" id="s" value="<?php echo get_search_query(); ?>">
                            <button class="blog-search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>

                    </div>

                    <div class="blog-recent-post">
                        <h4><?php the_field('recent_post');?></h4>
                        <ul>
                        
                        <?php
						$args = array('post_type'  => 'post',
									   'posts_per_page' => 4,
										'order'   => 'DESC'
											);
										$loop = new WP_Query( $args );
										while ( $loop->have_posts() ) : $loop->the_post();
								?>
                            <li class="wow slideInDown" data-wow-duration="1.2s">
                                <div class="rectpost-img img-responsive">
                                    <?php the_post_thumbnail(array(93,94));?>
                                </div>
                                <div class="rectpost-text">
                                    <p class="date"><?php the_time('j F Y'); ?></p>
                                    <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                                </div>



                            </li>
                            
                          
                          <?php
				       endwhile;
					   wp_reset_query();
					?>
                        </ul>

                    </div>

                </div>
                
                
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>
