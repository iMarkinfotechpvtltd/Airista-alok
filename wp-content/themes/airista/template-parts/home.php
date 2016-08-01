<?php
/*

 * Template Name: Home Page
 
*/

get_header(); ?>    
<?php while ( have_posts() ) : the_post(); ?>
<div class="banner">

        <div id="myCarouselBanner" class="carousel slide" data-ride="carousel">
		 <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
            <!-- Indicators -->
           <!-- <ol class="carousel-indicators">
                <li data-target="#myCarouselBanner" data-slide-to="0" class="active"></li>
                <li data-target="#myCarouselBanner" data-slide-to="1"></li>
                <li data-target="#myCarouselBanner" data-slide-to="2"></li>
                <li data-target="#myCarouselBanner" data-slide-to="3"></li>
                <li data-target="#myCarouselBanner" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
           <!-- <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg);">
                    <div class="container">
                        <div class="item-text">
                             <h1>Real-Time Location Systems <small>(RTLS) solutions</small></h1>
                        </div>
                    </div>
                </div>

                <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg);">
                    <div class="container">
                        <div class="item-text">
                             <h1>Real-Time Location Systems <small>(RTLS) solutions</small></h1>
                        </div>
                    </div>
                </div>

                <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg);">
                    <div class="container">
                        <div class="item-text">
                             <h1>Real-Time Location Systems <small>(RTLS) solutions</small></h1>
                        </div>
                    </div>
                </div>

                <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg);">
                    <div class="container">
                        <div class="item-text">
                             <h1>Real-Time Location Systems <small>(RTLS) solutions</small></h1>
                        </div>
                    </div>
                </div>
                
                <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/home-banner.jpg);">
                    <div class="container">
                        <div class="item-text">
                             <h1>Real-Time Location Systems <small>(RTLS) solutions</small></h1>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>

 <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
    </div>
<div class="airista-flow-cvr">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-sm-12">
                    <div class="airista-flow-inner">
                        <div class="airista-flow-img wow zoomIn" data-wow-duration="2s">
                        
                        <?php if ( has_post_thumbnail() ) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'airsta-image' );
				        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-responsive"/>
                        <?php
                        } else { ?>
                        <img src="http://placehold.it/659x647&amp;text=No image found" alt="<?php the_title(); ?>"/>
                        <?php } ?>
                        </div>

                        <div class="airista-flow-text">
                            
						
                        <?php the_content();?>
	                    
							
                            <a href="<?php the_field('find_your_industry_link');?>" class="org-btn">FIND YOUR INDUSTRY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<div class="our-service-cvr">
        <div class="container">
            <div class="row make-table">
                <div class="col-md-3 col-sm-12 col-xs-12 make-va">
                    <div class="our-service-text">
                        <?php the_field('our_services_and_text');?>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 make-va">
                    <div class="our-service-list wow slideInLeft" data-wow-duration="2s">
					<?php
					global $post;
                      $args = array('post_type' => 'service','posts_per_page' => -1,'order' => 'DESC');
                      $loop = new WP_Query( $args );
                      while ( $loop->have_posts() ) : $loop->the_post();
                      ?>
					
                        <div class="our-ser-item">
                            <div class="our-ser-icon">
                  
                                <?php echo get_post_meta($post->ID,"svg_image",true) ?>
                                <!--<img src="images/our-service-icon-1.png" class="img-responsive">-->
                            </div>
                            <div class="our-ser-info">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_field('home_page_content',$post->ID);?></p><a href="<?php the_permalink(); ?>" class="ser-read-link">Read more</a>

                            </div>
                        </div>
						<?php 
						endwhile;wp_reset_query();
						?>
                   

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="appli-cvr">
        <div class="container">
            <div class="appli-text">
                <?php the_field('applications_no_two_business_are_the_same');?>
                <a href="<?php the_field('link_for_applications');?>" class="org-btn">More information</a>
            </div>


          <div class="row">
		  <?php
					global $post;
					   $i=1;
                      $args = array('post_type' => 'application','posts_per_page' => -1,'order' => 'DESC');
                      $loop = new WP_Query( $args );
                      while ( $loop->have_posts() ) : $loop->the_post();
                           if($i==1){ ?>	
							<div class="col-lg-offset-1 col-md-2 col-sm-3 col-xs-12">
								<?php } else { ?>
											<div class="col-md-2 col-sm-3 col-xs-12">
								<?php } ?>
          
                    <div class="appli-list wow bounceInDown" data-wow-duration="1.2s">
                        <div class="appli-icon">
                            
                            
							 <?php echo get_post_meta($post->ID,"svg_image",true) ?>
							
							
                        </div>
                        <div class="appli--list-text">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_field('home_page_content',$post->ID);?></p>
                            <a href="<?php the_permalink(); ?>" class="appli-btn">view detail</a>
                        </div>
                    </div>
					 
                </div>
                

              <?php 
			  $i++;
			  endwhile;
			  wp_reset_query();
			  ?> 

            
            </div>

        </div>
    </div>

    <div class="products-cvr">
        <div class="container">
            <div class="products-inner">
                <div class="desktop-img wow slideInLeft" data-wow-duration="1.4s">
                
                
                <?php
                       $pro=get_post_meta($post->ID,"image_for_product",true);
                       $thumb = wp_get_attachment_image_src($pro, 'homeproduct-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/499x440&amp;text=No image found" alt="Image" class="img-responsive"/>
		                <?php
		                }else{?>
		                 <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                
                </div>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-5 col-xs-12">
                        <div class="products-text wow fadeIn" data-wow-duration="1.6s">
                            <h2><?php the_field('product_heading');?></h2>
                            <ul class="products-list">
                                 <?php {
	                              $sidebarBoxcontent1 = get_post_meta($post->ID, 'products_home_page', true);
	                              if($sidebarBoxcontent1 != ''){
	                              echo '<h4>'.$sidebarBoxcontent1.'</h4>';
                                } ;} ?>

								
                            </ul>
                            <a href="<?php the_field('link_for_products_hardware');?>" class="org-btn">More information</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-cvr wow fadeIn" data-wow-duration="1.2s">
        <div class="container">
            <h2>news</h2>

            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
						<?php	
		                $args = array('post_type' => 'news','posts_per_page'=>'3','order'=>'DESC');
                        $loop = new WP_Query( $args );
	                    $i=0;
                        while ( $loop->have_posts() ) : $loop->the_post();
                        if($i==0){ ?>	
		                <div class="item active">
		                <?php } else { ?>
		                <div class="item">
		                <?php } ?>
						
                                <div class="news-item">
								
								<?php 
		                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news-image' );
		                        if($image==""){
			                    ?>
                                <div class="news-img" style="background-image:url(http://placehold.it/583x490&amp;text=583x490);)">
			                    <?php }	else{  ?>
                                <div class="news-img" style="background-image:url(<?php echo $image[0]; ?>);">
		                        <?php } ?>

                                    </div>
                                    <div class="news-text">
                                        <h4><?php the_title(); ?></h4>
                                        <div class="date">
                                            <p><?php the_time('F j, Y'); ?></p>
                                        </div>
                                        <?php the_content(); ?>
                                        <a href="<?php the_permalink(); ?>" class="news-btn">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <?php	
		                    $i++;
		                    endwhile;
		                    ?>

                        </div>


                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a>

                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a>
                    </div>
                </div>

            </div>


        </div>
    </div>
    </div>
    </div>
    </div> 

<?php endwhile; wp_reset_query(); ?>
<?php
get_footer(); ?>
	