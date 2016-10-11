jQuery(document).ready(function () {

    
    jQuery('#form_banner').submit(function (evt) {
        evt.preventDefault();
        window.history.back();

        document.location.href = "./estimate.html";

    });
    
     jQuery('#storage_form').submit(function (evt) {
	        evt.preventDefault();

	            jQuery.ajax({
	                type: "POST",
	                url: "contact-storage.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	                document.location.href = "./thanks.html";
	                jQuery("#storage_form").trigger("reset");
	                });
	            return false;
	});
	
	jQuery('#long_form').submit(function (evt) {
	        evt.preventDefault();

	            jQuery.ajax({
	                type: "POST",
	                url: "contact-long.php",
	                data: jQuery(this).serialize()
	            }).done(function() {
	                document.location.href = "./thanks.html";
	                jQuery("#long_form").trigger("reset");
	                });
	            return false;
	});
	
	
	
	

    jQuery('#form, #form2, #form3, #form4').submit(function (evt) {
        evt.preventDefault();
        

            jQuery.ajax({
                type: "POST",
                url: "contact-form.php",
                data: jQuery(this).serialize()
            }).done(function() {


                document.location.href = "./thanks.html";
                jQuery("#form, #form2, #form3, #form4").trigger("reset");
                });
            return false;
    });
    
});
