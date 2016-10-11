jQuery(document).ready(function () {
	jQuery('#movers_form_2').submit(function (evt) {
	        evt.preventDefault();

	            jQuery.ajax({
	                type: "POST",
	                url: "contact-movers-2.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	                document.location.href = "./thanks.html";
	                jQuery("#movers_form_2").trigger("reset");
	                });
	            return false;
	    });
	    
	    jQuery('#movers_form_3').submit(function (evt) {
	        evt.preventDefault();

	            jQuery.ajax({
	                type: "POST",
	                url: "contact-movers-3.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	                document.location.href = "./thanks.html";
	                jQuery("#movers_form_3").trigger("reset");
	                });
	            return false;
	    });
	    
	    jQuery('#movers_form_4').submit(function (evt) {
	        evt.preventDefault();

	            jQuery.ajax({
	                type: "POST",
	                url: "contact-movers-4.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	                document.location.href = "./thanks.html";
	                jQuery("#movers_form_4").trigger("reset");
	                });
	            return false;
	    });
});
           