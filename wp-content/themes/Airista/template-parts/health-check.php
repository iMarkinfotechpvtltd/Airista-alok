<?php
/*

 * Template Name: Health check Page
 
*/

get_header(); ?>  

    <div class="banner banner-main-inner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/healthcheck-banner.jpg)">
        <div class="container">
            <div class="banner-inner-text wow fadeIn" data-wow-duration="1s">
                <svg x="0px" y="0px"
	 width="60px" height="55px" viewBox="0 0 97.302 97.302" >
<g>
	<g>
		<path d="M51.581,45.473c-10.848,2.372-16.271-2.68-16.552-2.95c-1.37-1.367-3.587-1.379-4.97-0.021
			c-1.393,1.366-1.414,3.604-0.048,4.996c0.271,0.276,5.706,5.671,16.019,5.671c2.144,0,4.499-0.231,7.061-0.793
			c1.906-0.417,3.113-2.302,2.695-4.206C55.37,46.263,53.487,45.058,51.581,45.473z"/>
		<path d="M93.031,68.812l-14.884-6.012c-0.516-0.207-1.066-0.314-1.621-0.314h-3.793v-0.824c0-0.422-0.109-0.814-0.291-1.165
			l14.032,3.829c0.37,0.101,0.743,0.15,1.11,0.15c1.851,0,3.545-1.23,4.057-3.102c0.611-2.242-0.709-4.557-2.951-5.167
			l-18.484-5.046c-0.367-0.1-0.728-0.149-1.13-0.148l-12.601,0.062c-0.588,1.387-1.812,2.48-3.391,2.826
			c-2.08,0.455-4.194,0.686-6.292,0.686c-10.229,0-17.198-5.469-17.489-5.702c-1.002-0.799-1.634-1.941-1.777-3.215
			c-0.145-1.275,0.216-2.53,1.017-3.534c0.916-1.15,2.286-1.809,3.757-1.809c1.074,0,2.131,0.367,2.976,1.034
			c0.142,0.11,2.877,2.199,7.226,3.151l-7.761-5.004c-0.208-0.134-0.513-0.488-0.513-0.488c-0.821-0.704-2.216-2.47-3.335-3.889
			c-0.414-0.524-0.794-1.006-1.111-1.391c-1.118-1.297-1.505-3.236-0.938-4.716c0.306-0.8,0.865-1.399,1.641-1.781h7.786v-4.269
			h-2.203V4.401H7.417v18.575H5.415v2.005c-1.697,0.148-3.052,0.921-3.416,2.071c-0.184,0.578-0.339,2.071,2.171,3.459
			c0.83,0.435,1.872,0.608,2.88,0.775c1.223,0.204,2.488,0.414,3.264,1.066c0.597,0.552,0.923,1.31,1.237,2.042
			c0.06,0.14,0.121,0.271,0.182,0.406c-0.576,3.08,0.707,6.34,3.503,8.145c3.688,2.377,8.607,1.317,10.985-2.373
			c2.38-3.689,1.317-8.607-2.371-10.986s-8.608-1.317-10.987,2.371c-0.282,0.438-0.513,0.894-0.699,1.36
			c-0.282-0.595-0.634-1.203-1.188-1.715c-1.002-0.844-2.404-1.077-3.761-1.303c-0.974-0.162-1.892-0.314-2.569-0.669
			c-1.306-0.722-1.922-1.552-1.692-2.276c0.207-0.653,1.133-1.241,2.463-1.376v1.267h23.398c-0.387,0.403-0.695,0.876-0.905,1.424
			c-0.691,1.808-0.232,4.162,1.108,5.717c0.307,0.372,0.682,0.849,1.091,1.366c0.761,0.965,1.644,2.08,2.414,2.949
			c-2.175-0.279-4.415,0.747-5.888,2.14c0,0-0.664,0.567-1.13,1.326c-0.446,0.726-0.794,1.631-0.794,1.631l-0.011,0.021
			c-0.899,2.602-0.61,6.175,2.136,7.947l14.744,9.508c0.175,0.113,0.354,0.215,0.532,0.305c0,0.027-0.008,0.055-0.008,0.082v0.824
			H37.91l-19.613-13.61c0.097-0.106,0.19-0.22,0.27-0.347c0.72-1.15,0.371-2.667-0.78-3.389l-6.677-4.182
			c-1.121-0.703-2.584-0.384-3.327,0.698c-1.888-0.923-4.214-0.372-5.449,1.407c-1.363,1.964-0.876,4.662,1.089,6.025l30.665,21.285
			c0.724,0.504,1.586,0.772,2.468,0.772h5.717c0.364,0.981,1.302,1.684,2.407,1.684h5.439V93.15H47.47
			c-1.146,0-2.074,0.93-2.074,2.076s0.929,2.075,2.074,2.075h19.927c1.146,0,2.074-0.929,2.074-2.075s-0.93-2.076-2.074-2.076h-2.68
			V72.828h5.439c1.105,0,2.043-0.702,2.408-1.684h3.119l14.105,5.697c0.53,0.215,1.08,0.316,1.618,0.316
			c1.716,0,3.337-1.024,4.017-2.709C96.319,72.23,95.249,69.708,93.031,68.812z M9.814,6.797h23.855v8.25v0.822v6.307H9.814V6.797z"
			/>
		<path d="M33.716,34.479c0,1.86,1.508,3.367,3.366,3.367c7.871,0,12.233-2.105,15.077-4.597v5.456
			c-0.254,1.096-0.72,3.132-1.27,5.574c0.211-0.042,0.419-0.076,0.63-0.122c0.342-0.075,0.688-0.112,1.032-0.112
			c2.246,0,4.228,1.594,4.709,3.791c0.14,0.643,0.144,1.283,0.031,1.893l11.99-0.06c0.527,0,0.989,0.062,1.475,0.192l1.756,0.48
			c-0.998-4.874-2.133-9.672-2.602-11.613v-6.485c1.288,2.681,2.092,6.522,2.01,12.41c-0.026,1.858,1.459,3.387,3.318,3.413
			c0.018,0,0.032,0,0.049,0c1.836,0,3.34-1.476,3.363-3.319c0.225-16.004-5.669-22.637-15.5-26.364
			c-0.008-0.002-0.016-0.002-0.021-0.004l-2.096,2.199l-2.16-2.175c-1.201,0.295-3.464,1.591-3.492,1.607
			c-2.289,1.404-3.715,3.33-4.969,5.03c-2.409,3.259-4.49,6.072-13.331,6.072C35.225,31.112,33.716,32.62,33.716,34.479z"/>
		<path d="M61.163,17.722c4.487,0,8.127-3.638,8.127-8.127c0-1.877-0.65-3.592-1.724-4.965h-2.628V3.397h1.443
			c-0.506-0.425-1.055-0.799-1.653-1.092C64.112,0.949,62.749,0,61.165,0c-1.582,0-2.941,0.947-3.562,2.302
			c-0.601,0.293-1.152,0.669-1.659,1.095h1.65V4.63h-2.834c-1.068,1.373-1.723,3.088-1.723,4.965
			C53.038,14.084,56.677,17.722,61.163,17.722z M61.165,1.714c1.219,0,2.207,0.99,2.207,2.208S62.384,6.13,61.165,6.13
			c-1.217,0-2.207-0.99-2.207-2.208S59.948,1.714,61.165,1.714z"/>
		<path d="M23.913,9.611c-0.816,0-1.551,0.344-2.071,0.893c-0.521-0.549-1.255-0.893-2.071-0.893c-1.578,0-2.857,1.279-2.857,2.858
			c0,3.963,4.929,6.476,4.929,6.476s4.929-2.512,4.929-6.476C26.771,10.89,25.49,9.611,23.913,9.611z"/>
	</g>
</g>

</svg>

                
                
              <!-- <img src="images/healthcheck-icon.png" class="img-responsive"> -->
                
                <h1> HEALTH CHECK </h1>
               <div class="spacer"></div>
                <p>Every smart investment deserves a check-in and tune-up to stay at peak performance</p>
            </div>
           
      </div>
        
        <div class="banner-side-cnt ">             <ul>                 <li title="Contact Us"><a href="#" data-toggle="modal" data-target="#contactPopUp"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>                 <li title="Call Us"><a href="#" data-toggle="modal" data-target="#callPopUp"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>             </ul>         </div>
                <ul>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>
                </ul>
            </div>
    
    </div>
    
    
    <div class="healthcheck-main">
        <div class="container">
            <div class="healthcheck-main-text">
            <h2>HealthCheck program</h2>
                <p>Every smart investment deserves a check-in and tune-up to stay at peak performance. The HealthCheck program is available to existing AiRISTA Flow and Ekahau RTLS customers who are active on a support plan. Enrollment in the HealthCheck program provides you with a convenient, two day, yearly check-up with our professional service team and is loaded with more special benefits.</p>
                <p>From implementation, we will work on-site at your facility, alongside your team, creating targeted action plans that optimize your RTLS deployment and address outstanding issues. The HealthCheck program is an easy way to keep your system set up for success in the long term. Our team also interacts with end users to ensure that we gather and document feedback impacting future features and software releases, which will be addressed at your scheduled HealthCheck visits. So don’t worry – we’ll do all of the work for you, guaranteeing system optimization.</p>
                </div>
        </div>
        
        <div class="healthcheck-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="health-list">
                            <h5>The AiRISTA Flow Health Check includes:</h5>
                            <ul>
                                <li>Two days of on-site services annually</li>
                                <li>Project management and on-site consulting conducted by a certified Ekahau systems engineer</li>
                                <li>Software upgrades and configuration services</li>
                                <li>An exclusive discount when you decide to service or grow your solution.</li>
                            </ul>
                        </div>
                        
                        <div class="health-list">
                            <h5>Why Enroll in AiRISTA Flow RTLS Health Check?</h5>
                            <ul>
                                <li>Keep your RTLS in Optimal Operational Configuration</li>
                                <li>Proactively Identify Needs & Reduce Support Calls</li>
                                <li>Improve User Satisfaction</li>
                                <li>Grow and Extend System ROI.</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            
            </div>
        
        </div>
    
        <div class="healthcheck-shd">
            <div class="container">
                <p> Schedule your next RTLS Health Check</p>
                <a href="#" class="org-btn">SCHEDULE NOW</a>
            </div>
        </div>
        
        
    </div>

<?php
get_footer();	