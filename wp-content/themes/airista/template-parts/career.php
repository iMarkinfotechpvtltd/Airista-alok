<?php
/*

 * Template Name: Career Page
 
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
                <svg x="0px" y="0px"
	 width="70px" height="60px" viewBox="0 0 200 200" >
<g>
	<g>
		<defs>
			<rect id="SVGID_1_" x="13.215" y="22.371" width="179.57" height="160.265"/>
		</defs>
		<clipPath id="SVGID_2_">
			<use xlink:href="#SVGID_1_"  overflow="visible"/>
		</clipPath>
		<path clip-path="url(#SVGID_2_)" fill="#F26722" d="M96.307,60.648c9.745,2.46,19.64-3.446,22.102-13.192l4.734-18.756
			c0.613-2.431-1.111-4.828-3.61-5.022c-4.989-0.385-15.934-0.947-23.679-1.325c-4.972-0.243-9.421,3.056-10.64,7.881l-2.099,8.313
			C80.655,48.293,86.561,58.188,96.307,60.648L96.307,60.648z M96.307,60.648"/>
		<path clip-path="url(#SVGID_2_)" fill="#F26722" d="M116.893,135.426l-23.424-11.468l9.128-36.516l11.739,17.333
			c1.147,1.693,2.933,2.847,4.947,3.196c0.428,0.074,0.857,0.11,1.283,0.11c1.59,0,3.151-0.505,4.451-1.457l19.646-14.406
			c3.351-2.458,4.076-7.168,1.618-10.52c-2.459-3.352-7.168-4.076-10.52-1.619l-13.345,9.786c0,0-9.596-14.086-13.04-19.14
			c-0.78-1.146-1.955-1.961-3.3-2.293l-26.58-6.551c-1.429-0.352-2.914-0.406-4.363-0.157l-27.893,4.788
			c-3.936,0.687-6.651,4.33-6.181,8.298l2.619,22.155c0.453,3.828,3.703,6.644,7.464,6.644c0.286,0,0.575-0.017,0.866-0.051
			c4.127-0.472,7.089-4.368,6.601-8.495L56.844,80.12l16.816-2.931l-11.979,47.915l-17.977,21.489l-15.358-15.586
			c-3.433-3.482-9.039-3.524-12.521-0.092s-3.523,9.038-0.092,12.521l22.202,22.529c1.667,1.691,3.939,2.639,6.305,2.639
			c0.12,0,0.241-0.002,0.361-0.008c2.494-0.102,4.829-1.251,6.431-3.165l25.33-30.28c0.409,0.296,0.845,0.563,1.313,0.792
			l24.744,12.114l-6.76,23.236c-1.366,4.694,1.333,9.609,6.028,10.975c0.825,0.24,1.658,0.355,2.476,0.355
			c3.838,0,7.373-2.515,8.498-6.385l8.841-30.386C122.703,141.718,120.759,137.32,116.893,135.426L116.893,135.426z
			 M116.893,135.426"/>
		<path clip-path="url(#SVGID_2_)" fill="#F26722" d="M184.689,115.205c0.667-1.187,0.625-2.701-0.23-3.871l-12.423-16.96
			c-0.201-0.274-0.432-0.514-0.686-0.718c-1.313-1.059-3.223-1.15-4.648-0.106l-8.196,6.003l-0.925,0.678l-0.172,0.126l-3.023-4.128
			c-0.908-1.241-2.371-1.98-3.913-1.98c-1.034,0-2.022,0.322-2.857,0.934l-14.38,10.532c-1.043,0.764-1.726,1.889-1.923,3.17
			c-0.197,1.278,0.114,2.558,0.878,3.601l3.023,4.129l-0.172,0.126l-0.924,0.677l-8.391,6.146c-1.594,1.166-1.939,3.405-0.772,4.999
			l12.563,17.153c0.855,1.169,2.288,1.665,3.62,1.388l7.21,9.845c1.246,1.7,3.633,2.069,5.334,0.825l37.394-27.388
			c1.7-1.245,2.069-3.634,0.823-5.334L184.689,115.205z M152.569,103.901l-0.523,0.385l-0.4,0.292l-10.668,7.814l-0.923,0.675
			l-0.174,0.127l-2.468-3.369l12.861-9.419l2.468,3.369L152.569,103.901z M168.12,134.865l-3.239,2.373
			c-1.359,0.995-3.27,0.7-4.267-0.66l-1.976-2.697l8.166-5.98l1.976,2.696C169.775,131.957,169.481,133.867,168.12,134.865
			L168.12,134.865z M168.12,134.865"/>
	</g>
</g>
</svg>

                
                
              <!--  <img src="images/career-banner-icon.png" class="img-responsive">-->
                <h1><?php the_title(); ?></h1>
                <div class="spacer"></div>
               
                <?php the_content();?>
	           
            </div>

        </div>

        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
        </div>

    

    <div class="food-hospitality-main career-main">
        <div class="container">
            <div class="food-hospitality-top">
                <?php the_field('we_need_you');?>
            </div>


            <div class="currt-open-cvr">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="currt-open-img">
                        <?php
                          $care=get_post_meta($post->ID,"image_for_we_need_you",true);
                          $thumb = wp_get_attachment_image_src($care, 'career-image' );?>
		                  <?php if($thumb==""){?>
		                 <img src="http://placehold.it/672x499&amp;text=No image found" alt="<?php the_title(); ?>"/>
		                  <?php
		                   }else{?>
		                <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"><?php } ?>
                       
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="currt-open-text">
                            <?php the_field('current_job_openings');?>
                             <a target="_blank" href="<?php the_field('current_job_openings_link');?>" class="org-btn">apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            
            
        </div>
        
        <div class="currt-open-btm">
                <div class="container">
                    <a target="_blank" href="<?php the_field('current_openings_link');?>" class="org-btn">CURRENT OPENINGS</a>
                    <p> <?php the_field('visit_us');?> <a href="mailto:<?php the_field('enter_mail');?>"><?php the_field('enter_mail');?></a></p>
                </div>
            </div>


    </div>
<?php endwhile;
wp_reset_query();
?>
<?php
get_footer(); ?>