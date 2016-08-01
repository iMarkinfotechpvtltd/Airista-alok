<?php
/*

 * Template Name: Event& News Page
 
*/

get_header(); ?> 
<?php while ( have_posts() ) : the_post(); ?> 
                 <?php 
		        $events = get_post_meta(10,"banner_for_news&events",true);
				$thumb = wp_get_attachment_image_src($events, 'banner-image');
		        if($thumb==""){
			    ?>
                <div class="banner banner-main-inner blog-banner" style="background-image:url(http://placehold.it/1920x690&amp;text=1920x690);">
			
			    <?php }	else{  ?>
                <div class="banner banner-main-inner blog-banner" style="background-image:url(<?php echo $thumb[0]; ?>);">
		        <?php } ?>
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                
                <svg  x="0px" y="0px"
	 width="70px" height="60px" viewBox="0 0 200 200" >
<path fill="#F26722" d="M171.042,49.047l-13.337-14.145l-14.149,14.145l-14.148-14.145l-14.149,14.145l-13.337-14.145L87.777,49.047
	L74.432,34.903L60.287,49.047L46.142,34.903L32.796,49.047L18.652,34.903V168.14c0,9.152,7.486,16.623,16.675,16.623h133.194
	c9.188,0,16.671-7.471,16.671-16.623V34.903L171.042,49.047z M101.921,168.14H35.327v-58.303h66.595V168.14z M168.521,168.14
	h-58.259v-8.334h58.259V168.14z M168.521,151.474h-58.259v-8.346h58.259V151.474z M168.521,134.843h-58.259v-8.336h58.259V134.843z
	 M168.521,118.171h-58.259v-8.334h58.259V118.171z M168.521,101.498H35.327v-24.96h133.194V101.498z M168.521,101.498"/>
<rect x="-380.885" y="27.658" fill="none" width="65.34" height="61.875"/>
</svg>
                
               <!-- <img src="images/event-news-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
              <?php the_content(); ?>
                
	            
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
            </div>

    <div class="food-hospitality-main event-news-main">
        <div class="container">
            <div class="food-hospitality-top">
                <h2><?php the_title(); ?></h2>
                
            </div>
            
            <div class="event-news-list">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" >
					  <?php 
					  $i==1;
                      $args = array('post_type' => 'news','posts_per_page' => 3,'order' => 'DESC', 'offset'=> 0);
                      $loop = new WP_Query( $args );
                      while ( $loop->have_posts() ) : $loop->the_post();
                      ?>
                        <article class="wow fadeIn hhh" data-wow-duration="1.4s" id="test">
						  <?php 
		                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news-image' );
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
						$i++;
						endwhile;
						wp_reset_query();
						?>
                     <?php
					if($i==3){
					?>
                 
			<input type="hidden" name="page" class="pagination" value="1">

		   <div class="see-more-cvr"> <a class="org-btn" href="javascript:void(0);">See more<i class="fa fa-plus" aria-hidden="true"></i></a>
                    <?php } ?> 
					  <div id="loadingevent" style="display:none" align="center">
				           <img src="<?php echo  get_template_directory_uri(); ?>/images/kloader.gif" id="loadingevent">
		               </div>
					</div></div>
                </div>
            </div>
            
            
            
        </div>
        
       
    </div>
    
    
<?php endwhile;
wp_reset_query();
?>    
<script>

jQuery(document).ready(function(){

	jQuery(".see-more-cvr").each(function(){

		jQuery(this).click(function(){
            jQuery('#loadingevent').show();
			var class_section = jQuery(this).siblings(".pagination").val();
			var name = jQuery(".col-md-10").attr("id");
			var page_value=parseInt(class_section)+1;
				
			// alert(class_section);
			// alert(page_value);
			// alert(name);
			jQuery.ajax({

			type: "GET",

			url:"<?php bloginfo('template_url'); ?>/ajax/newspage.php",

			data:{page_value:page_value},

			success:function(abc) 

			{
					if(abc!="")
					{
						jQuery(abc).insertAfter(jQuery(".hhh:last")).fadeIn('slow');

						jQuery(".pagination").val(page_value);
						jQuery('#loadingevent').hide();
					}
					else if(abc=="")
					{
						jQuery(".see-more-cvr").hide();
						jQuery('#loadingevent').hide();
					}
			} 

			});

		});

	});

});

</script>
<?php
get_footer();
?>	