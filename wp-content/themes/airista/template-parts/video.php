<?php
/*

 * Template Name: Video Page
 
*/

get_header(); ?>  
 <?php while ( have_posts() ) : the_post(); ?>
              <?php 
		        $imag = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'banner-image' );
		        if($imag==""){
			    ?>
                <div class="banner banner-main-inner" style="background-image:url(http://placehold.it/1920x690&amp;text=1920x690);">
			    <?php }	else{  ?>
                <div class="banner banner-main-inner" style="background-image:url(<?php echo $imag[0]; ?>);">
		        <?php } ?>	
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <svg  x="0px" y="0px"
	 width="60px" height="50px" viewBox="0 0 500 500" >
<g>
	<g>
		<defs>
			<rect id="SVGID_1_" x="11.134" y="4.53" width="467.554" height="489.36"/>
		</defs>
		<clipPath id="SVGID_2_">
			<use xlink:href="#SVGID_1_"  overflow="visible"/>
		</clipPath>
		<path clip-path="url(#SVGID_2_)" d="M104.333,211.132c-0.888-7.479-3.541-14.417-7.541-20.398L455.079,71.113l-18.806-56.34
			c-2.731-8.188-11.591-12.6-19.77-9.866L26.768,135.033c-8.179,2.725-12.609,11.583-9.878,19.771l9.223,27.614
			c-9.204,8.549-14.979,20.743-14.979,34.265c0,17.52,9.688,32.81,23.976,40.826v220.662c0,8.627,6.998,15.625,15.625,15.625H461.62
			c8.618,0,15.625-6.998,15.625-15.625V211.132H104.333z M332.699,51.263l47.436-15.83l-11.42,46.134l-47.435,15.84L332.699,51.263z
			 M215.5,90.392l47.444-15.833l-11.42,46.133l-47.435,15.841L215.5,90.392z M57.906,240.514c-13.134,0-23.831-10.688-23.831-23.831
			c0-13.134,10.696-23.821,23.831-23.821c13.133,0,23.83,10.687,23.83,23.821C81.735,229.826,71.039,240.514,57.906,240.514
			L57.906,240.514z M98.309,129.526l47.444-15.841l-11.42,46.136L86.897,175.66L98.309,129.526z M144.907,263.893H94.904
			l25.433-40.143h50.012L144.907,263.893z M243.888,223.75H293.9l-25.441,40.143h-50.003L243.888,223.75z M231.617,417.766V311.864
			l84.337,52.951L231.617,417.766z M392.011,263.893h-50.004l25.433-40.143h50.012L392.011,263.893z M392.011,263.893"/>
	</g>
</g>
</svg>

                
                
                <!--<img src="images/videos-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	           
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main video-main">
        <div class="container">
            <div class="food-hospitality-top">
                <h2><?php the_field('demos_&_case_study_videos');?></h2>
                
            </div>
            
            <div class="videos-list-outer">
                <div class="row videosec">
				
				<?php
					$i=1;
                      $args = array('post_type' => 'video','posts_per_page' => 6,'order' => 'DESC','offset'=> 0);
                      $loop = new WP_Query( $args );
                      while ( $loop->have_posts() ) : $loop->the_post();
                      ?>
				
                    <div class="col-md-6 col-sm-6 col-xs-12 videosmore">
                        <div class="videos-list">
                            <h4><?php the_title(); ?></h4>
						<div class="video-img"	>
						<?php $videoID = get_post_meta($post->ID, 'video', true); ?>
						<img src="http://img.youtube.com/vi/<?php echo $youtube_video_id = extractUTubeVidId($videoID);?>/0.jpg"/>

						
                           <!-- <div class="video-img" style="background-image:url(<?php// echo get_template_directory_uri(); ?>/images/video-img-1.jpg);">-->
							
                                 <a class="video-btn fancybox-youtube" href="<?php the_field('video');?>?autoplay=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                            </div>
                            
                            <?php the_content(); ?>
                        
                        </div>
                    </div>
                             
                        <?php 
						$i++;
						endwhile;
						wp_reset_query();
						?> 
						 <?php
					      if($i==7){
					    ?>
                
			        <input type="hidden" name="page" class="pagination" value="1">
		            <a class="post-video-sec" href="javascript:void(0);">See more</a>
                    <?php } ?> 	
			         <div id="videopost" style="display:none" align="center">
				           <img src="<?php echo  get_template_directory_uri(); ?>/images/kloader.gif" id="videopost">
		             </div>
                </div>
                
                
            </div>
            
        </div>
        
      
    </div>
 <?php endwhile; wp_reset_query(); ?>
 
<script>

jQuery(document).ready(function(){

	jQuery(".post-video-sec").each(function(){

		jQuery(this).click(function(){
            jQuery("#videopost").show();
			var class_section = jQuery(this).siblings(".pagination").val();
			var name = jQuery(".videosec").attr("id");
			var page_value=parseInt(class_section)+1;
				
			// alert(class_section);
			// alert(page_value);
			// alert(name);
			jQuery.ajax({

			type: "GET",

			url:"<?php bloginfo('template_url'); ?>/ajax/videopage.php",

			data:{page_value:page_value},

			success:function(abc) 
 
			{
				//alert(abc);
					if(abc!="")
					{
						jQuery(abc).insertAfter(jQuery(".videosmore:last")).fadeIn('slow');

						jQuery(".pagination").val(page_value);
						jQuery("#videopost").hide();
					}
					else if(abc=="")
					{
						jQuery('.post-video-sec').hide();
						jQuery("#videopost").hide();
					}
			} 

			});

		});

	});

});

</script>

<?php
get_footer();	?>