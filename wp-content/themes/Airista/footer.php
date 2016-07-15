<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

      <footer class="wow fadeIn" data-wow-duration="1.2s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12 hv-me">
                    <h3>REAL-TIME LOCATION SYSTEMS</h3>
                    <ul class="footer-links">
                        <li><a href="#">Industries</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
                
                 <div class="col-md-3 col-sm-3 col-xs-12 hv-me">
                    <h3>applications</h3>
                    <ul class="footer-links">
                        <li><a href="#">Asset Tracking</a></li>
                        <li><a href="#">Personal Safety</a></li>
                        <li><a href="#">Hand Hygiene</a></li>
                        <li><a href="#">Temperature Monitor</a></li>
                        <li><a href="#">Workflow & Process Capture</a></li>
                        
                    </ul>
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12 hv-me">
                    <h3>COmpany</h3>
                    <ul class="footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                
                 <div class="col-md-2 col-sm-3 col-xs-12 hv-me follow-cvr">
                    <h3>FOLLOW US</h3>
                    <ul class="footer-social-link">
                       
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
                     
                    <h3 style="margin-top:40px;">Call US</h3>
                     <a href="tel:<?php echo get_option_tree('phone_number'); ?>" class="call-text"><?php echo get_option_tree('phone_number'); ?></a>
                     
                     <img src="<?php echo get_option_tree('footer_logo'); ?>" alt="footer-logo" class="img-responsive footer-logo">
                     
                </div>
                
                
                
            </div>
        </div>
        
        <div class="copyright-cvr">
            <div class="container">
                <p><?php echo get_option_tree('copyright'); ?> <?php the_time("Y") ; ?><?php echo get_option_tree('copyright_text'); ?></p>
            </div>
        </div>
        
    </footer>

    <?php wp_footer(); ?>
    <!-- Contact Us -->

    <div id="contactPopUp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="contact-cvr">
                        <h3>Contact <small>AiRISTA FLOW</small> for further information</h3>
                        
                        <p>Please fill in the form below and we'll get back to you ASAP.</p>
                        
                        <form>
                            <div class="form-group">
                                <label>First Name:</label>
                                <input type="name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Last Name:</label>
                                <input type="name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Company:</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="tel" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Industry:</label>
                                <select class="form-control">
                                    <option>- Please Select -</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Region:</label>
                                <select class="form-control">
                                    <option>- Please Select -</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Country:</label>
                                <select class="form-control">
                                    <option>- Please Select -</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>I am interested in (select all that apply):</label>
                                
                                <label class="custm-label">
                                    <input type="checkbox">
                                    <span class="custm-check"></span>
                                    Asset tracking
                                </label>
                                <label class="custm-label">
                                    <input type="checkbox">
                                    <span class="custm-check"></span>
                                    Safety and security solutions
                                </label>
                                <label class="custm-label">
                                    <input type="checkbox">
                                    <span class="custm-check"></span>
                                    Temperature and humidity monitoring
                                </label>
                                <label class="custm-label">
                                    <input type="checkbox">
                                    <span class="custm-check"></span>
                                    Wi-Fi site survey validation services
                                </label>
                                <label class="custm-label">
                                    <input type="checkbox">
                                    <span class="custm-check"></span>
                                    Development or reseller opportunities
                                </label>

                            </div>
                            
                            <div class="form-group full-size">
                                <label>Your message: </label>
                                <textarea class="form-control">
                                    
                                </textarea>
                            </div>
                            
                            <button type="submit" class="org-btn">submit</button>
                            
                            
                            
                            
                        
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Contact Us End -->
    
    <!-- Call Us -->
        
    <div id="callPopUp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="contact-cvr call-cvr">
                        <h3>Contact <small>AiRISTA FLOW</small> for further information</h3>
                        <div class="call-us-cvr">
                            <p>Call Us <br><a href="tel:<?php echo get_option_tree('phone_number'); ?>"><?php echo get_option_tree('phone_number'); ?></a></p>
                        </div>
                    </div>
                 </div>

            </div>

        </div>
    </div>
    
    
    <!-- Call Us End -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
	<script>
        new WOW().init();
    </script>

</body>

</html>

