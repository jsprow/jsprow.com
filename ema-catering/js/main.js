$(document).ready(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
  $('.map')
    .click(function() {
      $(this).find('iframe').addClass('clicked');
    })
    .mouseleave(function() {
      $(this).find('iframe').removeClass('clicked')
    });
  $('.map-container').hover(function() {
        $(this).toggleClass('map-hover');
    });
  $('.map').hover(function() {
        $(this).find('.map-caption').fadeIn();
    });
  $('.map-container').click(function() {
        $(this).find('map-caption').fadeOut();
  })
  $(function() {
    $("#accordion").accordion({
      autoHeight: false,
      collapsible: true,
      heightStyle: "content",
      active: 0,
      animate: 300 // collapse will take 300ms
    });
    $('#accordion h3').bind('click', function() {
      var self = this;
      setTimeout(function() {
        theOffset = $(self).offset();
        $('body,html').animate({ scrollTop: theOffset.top - 100 });
      }, 310); // ensure the collapse animation is done
    });
    $(".ui-accordion [role=tab]").unbind('keydown');
  });
})
