<?php
/*

 * Template Name: Workflow & Process Capture Page
 
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

                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>

                <?php the_content();?>

            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>
    
    <div class="wokflow-pro-top-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <?php the_field('wi-fi_rtls_solutions',$post->ID);?>
                </div>
                <div class="col-lg-offset-1 col-lg-5 col-md-6  col-sm-6 col-xs-12">
                
                 <?php
                       $wifi=get_post_meta($post->ID,"image_for_wi-fi_rtls_solutions",true);
                       $thumb = wp_get_attachment_image_src($wifi, 'first-workflow-process-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/582x467&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive"/>
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                </div>
            </div>
        </div>
    
    </div>
    
      <div class="wokflow-pro-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <?php
                       $graphic=get_post_meta($post->ID,"upload_image_for_dashboard_graphic",true);
                       $thumb = wp_get_attachment_image_src($graphic, 'second-workflow-process-image' );?>
		               <?php if($thumb==""){?>
		               <img src="http://placehold.it/583x386&amp;text=No image found" alt="Image" class="img-responsive"/>
		                <?php
		                }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                </div>
                
                <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <?php the_field('dashboard_graphic',$post->ID);?>
                </div>
                
            </div>
        </div>
    
    </div>
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer(); ?>