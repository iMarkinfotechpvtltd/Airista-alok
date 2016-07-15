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
    <title>Airistaflow</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

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
				
                        <!--<li><a href="blog.html">Blog</a></li>
                        <li><a href="#">Support</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="career.html">career</a></li>
                                <li><a href="company-info.html">Company Information</a></li>
                                <li><a href="event-news.html">Event & News</a></li>
                                <li><a href="privacy.html">privacy Policy</a></li>
                            </ul>
                        </li>
                        <li><a href="event-news.html">News</a></li>-->

                    </ul>
                </div>
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
			    <script>
                jQuery( "ul li ul" ).addClass( "dropdown-menu" );
                jQuery( "#menu-item-55,#menu-item-80,#menu-item-105,#menu-item-109,#menu-item-110,#menu-item-121" ).addClass( "dropdown" );
                jQuery('#menu-item-55,#menu-item-80,#menu-item-105,#menu-item-109,#menu-item-110,#menu-item-121').append('<span class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></span>')
                </script>
                       <!-- <li class="dropdown">
                            <a href="industries.html">Industries</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu">
                                <li><a href="healthcare.html">Healthcare</a></li>
                                <li><a href="education.html">Education</a></li>
                                <li><a href="manufacturing.html">Manufacturing</a></li>
                                <li><a href="food-hospitality.html">Food Services & Hospitality</a></li>
                                <li><a href="government.html">Government</a></li>
                                <li><a href="industries-others.html">Other</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="application.html">Application</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu">
                                <li><a href="asset-tracking.html">Asset Tracking</a></li>
                                <li><a href="personal-safety.html">Personnel Safety</a></li>
                                <li><a href="hand-hygiene-compliance.html">Hand Hygiene Compliance</a></li>
                                <li><a href="temperature-monitoring.html">Temperature Monitoring</a></li>
                                <li><a href="workflow-process-capture.html">Workflow & Process Capture</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Products</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu">
                                <li><a href="hardware.html">Hardware</a></li>
                                <li><a href="software.html">Software</a></li>
                                <li><a href="technology.html">Technology</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
        <i class="fa fa-angle-down"  aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="training-classes.html">Training</a></li>
                                <li><a href="site-survey.html">Wi-Fi Site Surveys</a></li>
                                <li><a href="integration.html">Integrations</a></li>
                                <li><a href="deployment.html">Deployment</a></li>
                                <li><a href="healthcheck.html">HealthCheck</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Resources
        <i class="fa fa-angle-down"  aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="case-studies.html">Case Studies</a></li>
                                <li><a href="resources-downloads.html">Downloads</a></li>
                                <li><a href="knowledgebase.html">Knowledgebase</a></li>
                                <li><a href="videos.html">Videos</a></li>
                                <li><a href="blog.html">Blog</a></li>

                            </ul>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>