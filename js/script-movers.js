jQuery(document).ready(function () {

   jQuery('#movers_form').submit(function (evt) {
        evt.preventDefault();
                    
            jQuery.ajax({
                type: "POST",
                url: "contact-movers.php",
                data: jQuery(this).serialize()
            }).done(function() {
               
                document.location.href = "./thanks.html";
                jQuery("#movers_form").trigger("reset");
                });
            return false;
    });
   
});


           