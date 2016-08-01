<?php
/*

 * Template Name: Case Studies Page
 
*/

get_header(); ?>
<?php  while ( have_posts() ) : the_post(); ?>  

               <?php 
		        $casestudy = get_post_meta(275,"case_studies_banner",true);
				$thumb = wp_get_attachment_image_src($casestudy, 'banner-image');
		        if($thumb==""){
			    ?>
                <div class="banner banner-main-inner" style="background-image:url(http://placehold.it/1920x690&amp;text=1920x690);">
			
			    <?php }	else{  ?>
                <div class="banner banner-main-inner" style="background-image:url(<?php echo $thumb[0]; ?>);">
		        <?php } ?>	
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <svg  x="0px" y="0px"
	 width="80px" height="70px" viewBox="0 0 283.46 283.46" >
<g>
	<g>
		<path  d="M170.928,154.822c-0.75-0.651-1.525-1.243-2.313-1.776c22.6-27.851,20.947-68.968-4.957-94.877
			c-27.678-27.675-72.707-27.675-100.383,0c-27.676,27.677-27.676,72.707,0,100.381c25.107,25.107,64.497,27.435,92.256,6.987
			c0.594,0.913,1.256,1.813,2.006,2.676l0.873,1.007l13.525-13.524L170.928,154.822z M72.834,148.99
			c-22.404-22.402-22.402-58.855,0.001-81.261c22.403-22.403,58.855-22.404,81.26,0c22.404,22.405,22.404,58.854,0,81.261
			C131.692,171.394,95.239,171.395,72.834,148.99z"/>
		<polygon fill="#fff"  points="177.004,160.092 162.807,174.288 168.381,180.717 183.434,165.666 		"/>
		<path  d="M236.252,211.472l-47.75-41.41l-15.725,15.725l41.41,47.75c5.18,5.973,13.986,6.285,19.58,0.694
			l3.178-3.18C242.537,225.461,242.223,216.649,236.252,211.472z"/>
	</g>
	<g>
		<path  d="M115.266,102.332h-3.548c-0.265,0-0.438,0.148-0.438,0.283v6.665c0,0.136,0.173,0.296,0.438,0.296h3.548
			c0.258,0,0.437-0.16,0.437-0.296v-6.665C115.703,102.48,115.524,102.332,115.266,102.332z"/>
		<path  d="M107.504,73.639h11.975v3.523h4.996v-4.288c0-2.328-1.903-4.213-4.219-4.213h-13.528
			c-2.316,0-4.213,1.885-4.213,4.213v4.288h4.989V73.639z"/>
		<path  d="M115.266,100.102c1.472,0,2.673,1.133,2.673,2.514v1.725h27.485c3.469,0,6.764-1.552,8.857-4.164V86.771
			c0-3.867-3.135-6.985-6.984-6.985H79.686c-3.856,0-6.985,3.118-6.985,6.985v13.404c2.082,2.612,5.384,4.164,8.858,4.164h27.492
			v-1.725c0-1.381,1.188-2.514,2.667-2.514H115.266z"/>
		<path  d="M111.718,111.807c-1.479,0-2.667-1.135-2.667-2.526v-1.712H81.559c-3.24,0-6.344-1.035-8.858-2.934v25.293
			c0,3.869,3.129,6.998,6.985,6.998h2.563l0.129,0.443c0.092,0.346,0.413,0.58,0.757,0.58h0.616c0.357,0,0.666-0.234,0.77-0.58
			l0.13-0.443h57.687l0.129,0.443c0.099,0.346,0.413,0.58,0.757,0.58h0.623c0.352,0,0.664-0.234,0.752-0.58l0.135-0.443h2.563
			c3.85,0,6.984-3.129,6.984-6.998v-25.293c-2.52,1.898-5.623,2.934-8.857,2.934h-27.485v1.712c0,1.392-1.201,2.526-2.673,2.526
			H111.718z"/>
	</g>
</g>
</svg>
                
                
                <!--<img src="images/case-studies-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	            
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
        </div>

   

    <div class="case-studies-main">
	<?php 
	                $i==1;
                    $args = array('post_type' => 'case','posts_per_page' => 5,'order' => 'DESC','offset'=> 0);
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
$i++;
endwhile;
wp_reset_query();
?>

<?php
					if($i==5){
					?>
                 
			<input type="hidden" name="page" class="pagination" value="1">

		    <div class="see-more-cvr"><a class="case-see-more org-btn" href="javascript:void(0);">See more <i class="fa fa-plus" aria-hidden="true"></i></a>
                   <div id="loadingcase" style="display:none" align="center">
				           <img src="<?php echo  get_template_directory_uri(); ?>/images/kloader.gif" id="loadingcase">
		               </div>
                   
                   </div>
                    <?php } ?>
    </div> 
	                   
    <?php 
endwhile;
wp_reset_query();
?>  

<script>

jQuery(document).ready(function(){

	jQuery(".see-more-cvr").each(function(){

		jQuery(this).click(function(){
            jQuery('#loadingcase').show();
			var class_section = jQuery(this).siblings(".pagination").val();
			var name = jQuery(".case-studies-main").attr("id");
			var page_value=parseInt(class_section)+1;
				
			// alert(class_section);
			// alert(page_value);
			// alert(name);
			jQuery.ajax({

			type: "GET",

			url:"<?php bloginfo('template_url'); ?>/ajax/casepage.php",

			data:{page_value:page_value},

			success:function(abc) 

			{
					if(abc!="")
					{
						jQuery(abc).insertAfter(jQuery(".cas:last")).fadeIn('slow');

						jQuery(".pagination").val(page_value);
						jQuery("#loadingcase").hide();
					}
					else if(abc=="")
					{
						jQuery(".see-more-cvr").hide();
						jQuery("#loadingcase").hide();
						
					}
			} 

			});

		});

	});

});

</script>
<?php
get_footer();?>	