
/*global $:false */

/* ISOTOPE PORTFOLIO */

$(document).ready(function() {
  "use strict";
// cache container
var $container = $('#portfolio_container');
// initialize isotope
$container.isotope({
itemSelector : '.pfolio_item'
});
// filter items when filter link is clicked
$('#filters a').click(function(){
var selector = $(this).attr('data-filter');
$container.isotope({ filter: selector });
return false;
});        
});

$(window).resize(function(){
  "use strict";
var $filters = $("#filters");
$filters.find('li a.selected').trigger('click');
});

$(document).ready(function() {
  "use strict";
$('#filters li a').click(function() {
$('#filters li a').removeClass('selected');
$(this).addClass('selected');
});
});



$(window).load(function() {
  "use strict";
  var $filters = $("#filters");
$filters.find('li a.selected').trigger('click');

});


/* PORTFOLIO HOVER IMAGES */

$(document).ready(function () {
  "use strict";
$('.picture a').hover(function () {
$(this).find('.image-overlay-zoom, .image-overlay-link').stop().fadeTo('fast', 1);
},function () {
$(this).find('.image-overlay-zoom, .image-overlay-link').stop().fadeTo('fast', 0);
});
});



$(document).ready(function(){
  "use strict";
    $("a[class^='prettyPhoto']").prettyPhoto();
  });


 $(function(){
     // SyntaxHighlighter.all();
    });
    $(window).load(function(){
      "use strict";
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(){
          $('body').removeClass('loading');
        }
      });
    });



  //=================================== TABS AND TOGGLE ===================================//
  //jQuery tab
  /*global jQuery:false */
  jQuery(".tab-content").hide(); //Hide all content
  jQuery("ul.tabs li:first").addClass("active").show(); //Activate first tab
  jQuery(".tab-content:first").show(); //Show first tab content
  //On Click Event
  jQuery("ul.tabs li").click(function() {
    "use strict";
    jQuery("ul.tabs li").removeClass("active"); //Remove any "active" class
    jQuery(this).addClass("active"); //Add "active" class to selected tab
    jQuery(".tab-content").hide(); //Hide all tab content
    var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
    jQuery(activeTab).fadeIn(200); //Fade in the active content
    return false;
  });
  
  //jQuery toggle
  jQuery(".toggle_container").hide();
  jQuery("h2.trigger").click(function(){
    "use strict";
    jQuery(this).toggleClass("active").next().slideToggle("slow");
  });


   



