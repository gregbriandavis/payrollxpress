

/**************** Headroom Nav *****************/
$('.navbar-fixed-top').headroom();

  /***************** Smooth Scrolling ******************/

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 2000);
        return false;
      }
    }
  });
});

$(window).on('load', function() {
  $('iframe[id^=twitter-widget-]').each(function () {
    var head = $(this).contents().find('head');
    if (head.length) {
      head.append('<style>.timeline { max-width: 100% !important; width: 100% !important; background: #222222;} .timeline .stream { max-width: none !important; width: 100% !important; }</style>');
    }
    $('#twitter-widget-0').append($('<div class=timeline>'));
  })
});

/***************** Waypoints ******************/

$(document).ready(function() {
  $(window).load(function(){
    $('.flexslider').flexslider({
      animation: 'slide',
      start: function(){
        $('body').removeClass('loading');
      }
    });
  });

  $('.wp1').waypoint(function() {
    $('.wp1').addClass('animated fadeInLeft');
  }, {
    offset: '75%'
  });
  $('.wp2').waypoint(function() {
    $('.wp2').addClass('animated fadeInUp');
  }, {
    offset: '75%'
  });
  $('.wp3').waypoint(function() {
    $('.wp3').addClass('animated fadeInDown');
  }, {
    offset: '55%'
  });
  $('.wp4').waypoint(function() {
    $('.wp4').addClass('animated fadeInDown');
  }, {
    offset: '75%'
  });
  $('.wp5').waypoint(function() {
    $('.wp5').addClass('animated fadeInUp');
  }, {
    offset: '75%'
  });
  $('.wp6').waypoint(function() {
    $('.wp6').addClass('animated fadeInDown');
  }, {
    offset: '75%'
  });

});
