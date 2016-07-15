/*****************************/
        //new WOW().init();

/*****************************/

/*****************************/

       jQuery(document).ready(function () {
            jQuery(window).bind('scroll', function () {
                if (jQuery(window).scrollTop() > 10) {
                    jQuery('header').addClass("fixed");
                    jQuery('.banner-side-cnt ').addClass("fixed-btn");
                } else {
                    jQuery('header').removeClass("fixed ");
                    jQuery('.banner-side-cnt ').removeClass("fixed-btn");
                }
            });
        });
 
    
/*****************************/


/*****************************/

       if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
           jQuery('body').on("mousewheel", function () {
               // remove default behavior
               event.preventDefault();

               //scroll without smoothing
               var wheelDelta = event.wheelDelta;
               var currentScrollPosition = window.pageYOffset;
               window.scrollTo(0, currentScrollPosition - wheelDelta);
           });
       }

/*****************************/

