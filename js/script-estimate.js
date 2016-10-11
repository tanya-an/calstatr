jQuery(document).ready(function () {
	jQuery('#estimate_form').submit(function (evt) {
	        evt.preventDefault();

	            jQuery.ajax({
	                type: "POST",
	                url: "contact-estimate.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	                document.location.href = "./thanks.html";
	                jQuery("#estimate_form").trigger("reset");
	                });
	            return false;
	    });
});
