var links = "http://airista.stagingdevsite.com/dev/";

/*-------------------Registration form -----------------------*/
jQuery(function($) 
{
	jQuery('#registration').validate
	({	
		rules: 
		{
			fname: {
					required: true,
					number: false
				   },
		    lname: {
					required: true,
					number: false
				   },		   
			email: {
					required: true,
					email: true,
					},
			phone: 
					{
						required: true,	
						number: true,
					},
			company: 
					{
						required: true,	
						number: false,
					},
            region: 
					{
						required: true,	
						number: false,
					},
            country: 
					{
						required: true,	
						number: false,
					},
            state: 
					{
						required: true,	
						number: false,
					},
            number: 
					{
						required: true,	
						number: true,
					},	
            date: 
					{
						required: true,	
						
					},
            				
		},
		
		submitHandler: function(form) {
			 jQuery("#loading").show();
			jQuery("#submit_erca").hide();			
            jQuery("#loading").show();
			jQuery(form).ajaxSubmit({
				type: "POST",
				data: jQuery(form).serialize(),
				url: links+'wp-content/themes/airista/ajax/register.php', 
				success: function(data) 
				{
					if(data==1)
					{
					    jQuery('#msg_success').show();
						jQuery("#fname").val('');
						jQuery("#lname").val('');
						jQuery("#email").val('');
						jQuery("#phone").val('');
						jQuery("#date").val('');
						jQuery("#company").val('');
						jQuery("#region").val('');
						jQuery("#country").val('');
						jQuery("#state").val('');
						jQuery("#number").val('');
						jQuery("#submit_erca").show();
						jQuery("#loading").hide();
						
                        				
					}
					else
					{
						 jQuery('#msg_error').show();
					}						
				}
			});
		}
	});
});
