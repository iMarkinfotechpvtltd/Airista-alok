<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
	
	
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.css?v=2.1.5" media="screen"/>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.js"></script>
     <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/jquery.mousewheel.pack.js"></script>
   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="preloader">
<img src="<?php echo get_template_directory_uri(); ?>/images/bars-loader.gif">
   </div>
    <header>
        <div class="top-black-bar">
            <div class="container">
                <div class="top-left">
                    <ul class="social-list">
					  <li>
				        <?php
		                $face=get_option_tree('facebook');
		                if($face==""){}else{ ?>
				        <a target="_blank" href="<?php echo $face; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
					  </li>
                      <li>
				       <?php 
				       $twi=get_option_tree('twitter');
				       if($twi==""){}else { ?>
				       <a target="_blank" href="<?php echo $twi; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php }?>
					 </li>
                     <li>
				      <?php
				      $din=get_option_tree('linkedin');
				      if($din==""){}else { ?>
				      <a target="_blank" href="<?php echo $din; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php }?>
					 </li>
					
                    </ul>
                </div>

                <div class="top-right">
                    <ul>
					<?php 
                    $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'top_menu',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>
				
                        

                    </ul>

                </div>
				<script>
jQuery(document).ready(function() {
	jQuery("#menu-item-55>a").addClass("dropdown-toggle");
	jQuery("#menu-item-55>a").attr("aria-expanded","false");
	jQuery("#menu-item-55>a").attr("data-toggle","dropdown");
	
	
				});
</script>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_option_tree('logo'); ?>" alt="logo" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                    <ul class="nav navbar-nav">
					
					<?php 
                    $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'header_menu',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>					
			    
                      
                    </ul>
														
					
                </div>
				<script>
jQuery(document).ready(function() {
	jQuery(".navbar-nav>li>ul").removeClass("sub-menu");
               jQuery(".navbar-nav>li>ul").addClass("dropdown-menu");
			   
                // jQuery( "#menu-item-55,#menu-item-237,#menu-item-245,#menu-item-109,#menu-item-110,#menu-item-121" ).addClass( "dropdown" );
				jQuery("#menu-item-55>ul").removeClass("sub-menu").addClass("dropdown-menu");
                jQuery('<i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>').insertAfter("li#menu-item-237>a,li#menu-item-245>a,li#menu-item-109>a,li#menu-item-110>a,li#menu-item-121>a");
				});
                </script>
            </div>
        </nav>
    </header>