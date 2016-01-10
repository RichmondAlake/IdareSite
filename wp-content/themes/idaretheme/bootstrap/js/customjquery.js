/**(Test to see if Jquery is loaded and working) 
window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
**/

jQuery(function(){
    jQuery("#divtrans").on('mouseenter', function (){
        jQuery(this).css({
            "background":"#fff",
            "opacity":"0.8"
        });
    });
});

jQuery (function(){
    jQuery("#imgactive").on('mousenter', function (){
        jQuery(this).src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarepictures/logo2.jpg";
    })
});

jQuery("imgactive").on({
 "mouseover" : function() {
    this.src = "<?php bloginfo('template_url'); ?>/bootstrap/img/idarepictures/logo2.jpg";
  },
  "mouseout" : function() {
    this.src= "<?php bloginfo('template_url'); ?>/bootstrap/img/idarelogo.jpg";
  }
});

