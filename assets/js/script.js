// Smooth scroll between different sections
$('aside').localScroll();

// Open and hide tab content on clicking tabs
$(document).ready(function(){

  $('.tabs-menu a').click(function(event) {
    event.preventDefault();
    
    // Toggle active class on tab buttons
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
    
    // Display only active tab content
    var activeTab = $(this).attr("href");
    $('.tab-content').not(activeTab).css("display","none");
    $(activeTab).fadeIn();
  
  });
  
});