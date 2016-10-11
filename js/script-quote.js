jQuery(document).ready(function () {
	jQuery('#quote_form').submit(function (evt) {
	        evt.preventDefault();

	            jQuery.ajax({
	                type: "POST",
	                url: "contact-quote.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	                document.location.href = "./thanks.html";
	                jQuery("#quote_form").trigger("reset");
	                });
	            return false;
	    });
});
           