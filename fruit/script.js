// JQUERY
$(function() {
  
    $('.openNav').click(function() {
      $('#body, nav, .navOverlay').addClass('toggle');
    });
    $('.closeNav').click(function() {
      $('#body, nav, .navOverlay').removeClass('toggle');
    });
    $(window).scroll(function() {
       if ($(this).scrollTop() >= $('.banner').outerHeight() - 50) {
          $('.openNav').addClass('change');
       }
       else {
          $('.openNav').removeClass('change');
       }
    });
    
    $('.smooth-scroll').click(function(e) {
      var linkHref = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(linkHref).offset().top
      }, 400);
      e.preventDefault();
    })
    
    
    
  });
  
  
  
