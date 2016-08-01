<?php
/*

 * Template Name: Hardware Page
 
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
                
                <svg  x="0px" y="0px"
	 width="80px" height="70px" viewBox="0 0 500 500" >
<g>
	<path fill-rule="evenodd" clip-rule="evenodd" d="M162.9,258.289c0,56.597,0.005,113.192-0.004,169.789
		c-0.002,15.04-5.211,20.233-20.222,20.234c-24.255,0-48.511,0.007-72.767-0.003c-11.996-0.005-18.075-6.107-18.109-18.369
		c-0.058-21.021-0.048-42.044-0.011-63.065c0.159-90.819,0.337-181.641,0.521-272.462c0.008-3.771,0.051-7.55,0.253-11.314
		c0.45-8.374,5.72-14.913,13.902-15.006c27.476-0.316,54.964-0.229,82.437,0.265c8.431,0.152,13.574,7.215,13.612,16.913
		c0.185,47.162,0.272,94.324,0.384,141.487C162.921,237.268,162.9,247.778,162.9,258.289z M107.882,387.139
		c14.439-0.133,25.325-11.212,25.374-25.829c0.05-14.351-12.139-26.331-26.373-25.927c-14.193,0.402-25.605,12.09-25.457,26.072
		C81.581,376.174,93.015,387.272,107.882,387.139z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" d="M195.227,99.613c0-11.113,0-20.947,0-31.916c15.285,0,30.029-0.032,44.774,0.005
		c58.756,0.145,117.523,1.033,176.262,0.114c23.316-0.363,48.262,21.867,47.896,47.501c-0.975,68.713-0.97,137.455,0.01,206.168
		c0.371,26.077-24.21,48.789-48.424,47.812c-26.361-1.064-52.813,0.092-79.225,0.269c-4.501,0.03-9.001,0.005-13.903,0.005
		c-0.425,5.926-0.698,10.729-1.126,15.52c-0.917,10.251-7.053,16.016-17.504,16.061c-18.866,0.083-37.737,0.163-56.599-0.152
		c-16.361-0.275-20.284-4.564-20.459-21.041c-0.031-2.944-0.004-5.891-0.004-9.987c-10.525,0-20.613,0-32.145,0
		c0-11.497,0-21.891,0-32.284c0-10.192,0-20.385,0-31.662c3.73,0,6.863,0.003,9.996,0c67.652-0.083,135.304-0.165,202.955-0.253
		c2.424-0.003,4.85-0.049,7.274-0.133c11.594-0.404,17.613-5.969,17.645-17.45c0.163-57.678,0.161-115.354,0.084-173.033
		c-0.013-9.286-7.378-15.508-17.847-15.521c-37.196-0.045-74.391-0.019-111.587-0.019c-32.612-0.002-65.224-0.002-97.837-0.002
		C202.265,99.613,199.066,99.613,195.227,99.613z"/>
	<path fill-rule="evenodd" clip-rule="evenodd" d="M195.467,447.754c-0.328-0.645-0.535-0.866-0.545-1.097
		c-1.126-26.113,2.895-29.521,26.585-29.23c37.126,0.455,74.26,0.104,111.39,0.201c15.813,0.041,20.466,4.885,20.515,20.812
		c0.008,2.919,0,5.839,0,9.314C300.529,447.754,248.207,447.754,195.467,447.754z"/>
</g>
</svg>

                
                
                <!--<img src="images/hardware-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
                <?php the_content(); ?>
            </div>
           
      </div>
        
        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
              
            </div>
    
    </div>
    
    <div class="food-hospitality-main hardware-main">
        <div class="container">
            <div class="food-hospitality-top">
            <?php the_field('airista_flows_family_of_wi-fi_tags');?>
               
            
            </div>
            
            <div class="hardware-list">
            <?php
			$i==1;
              $args = array(
             'post_type' => 'products',
			 'showposts' => 5,
			 'order' => 'DESC',
			 'offset'=> 0,
             'tax_query' => array(
              array(
                   'taxonomy' => 'products_category',
                   'field' => 'slug',
                    'terms' => 'Hardware'
                   )
                )
           );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
               ?>
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
                
                <?php 
				$i++;
				endwhile;
				wp_reset_query();?>
                 <?php
					if($i==5){
					?>
            
			 <input type="hidden" name="page" class="pagination" value="1">
		     <a class="post-hardware-sec" href="javascript:void(0);">See more</a>
               <?php } ?> 
			   <div id="loadinghard" style="display:none" align="center">
				           <img src="<?php echo  get_template_directory_uri(); ?>/images/kloader.gif" id="loadinghard">
		              </div>
            </div>
        
       </div>
        
       
    </div>
<?php endwhile;
wp_reset_query();
?>

<script>

jQuery(document).ready(function(){

	jQuery(".post-hardware-sec").each(function(){

		jQuery(this).click(function(){
            jQuery("#loadinghard").show();
			var class_section = jQuery(this).siblings(".pagination").val();
			var name = jQuery(".hardware-list").attr("id");
			var page_value=parseInt(class_section)+1;
				
			// alert(class_section);
			// alert(page_value);
			// alert(name);
			jQuery.ajax({

			type: "GET",

			url:"<?php bloginfo('template_url'); ?>/ajax/hardwarepage.php",

			data:{page_value:page_value},

			success:function(abc) 
 
			{
				//alert(abc);
					if(abc!="")
					{
						jQuery(abc).insertAfter(jQuery(".hardpost:last")).fadeIn('slow');

						jQuery(".pagination").val(page_value);
						jQuery("#loadinghard").hide();
					}
					else if(abc=="")
					{
						jQuery(".post-hardware-sec").hide();
						jQuery("#loadinghard").hide();
					}
			} 

			});

		});

	});

});

</script>

<?php
get_footer(); ?>