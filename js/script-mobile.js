jQuery(document).ready(function () {
	jQuery('#form_mobile').submit(function (evt) {
	        evt.preventDefault();
	        
	
	            jQuery.ajax({
	                type: "POST",
	                url: "contact-form-mobile.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	
	                alert("Thank you for your application! Soon we will contact you.");
	                jQuery("#form_mobile").trigger("reset");
	                });
	            return false;
	    });
});

