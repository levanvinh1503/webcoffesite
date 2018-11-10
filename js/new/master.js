jQuery(document).ready(function ($) {
  var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent);
  if (iOS) {
    $(document.body).addClass('ios');
  };

  //Show/Hide scroll-top on Scroll
  // hide #back-top first
  $("#scroll-top").hide();
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {

      if ($(this).scrollTop() > 100) {
        $('#scroll-top').fadeIn();
      } else {
        $('#scroll-top').fadeOut();
      }

    });
    // scroll body to 0px on click
    $('#scroll-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 1000);
    });

  });
  $('.navbar-toggle').on('click', function (e) {
    $(this).toggleClass('open');
    $('body').toggleClass('menuin');
  });
  $('.nav-overlay').on('click', this, function (e) {
    $('.navbar-toggle').trigger('click');
  });
  $('.nav-ul .close > a').on('click', this, function (e) {
    $('.navbar-toggle').trigger('click');
  });
  $('.dropdown').hover(function () {
    var parent = $(this);
    parent.find('.sub-menu-wrap').stop().slideDown(300, function () {
      $(this).addClass('open');
    });
  }, function () {
    $(this).children('.sub-menu-wrap').stop().slideUp(300, function () {
      $(this).removeClass('open');
    });
  });

  //stickyHeader();
  //    $(window).scrollTop() > $("#header").height() ? $("#header").addClass("sticky") : $("#header").removeClass("sticky");
  $(window).scroll(function () {
    //        $(window).scrollTop() > $("#header").height() ? $("#header").addClass("sticky") : $("#header").removeClass("sticky");
    stickyHeader();
  });

  function stickyHeader() {
    var hdOffsetTop = $("#header").offset().top;
    if ($(window).scrollTop() > $("#header").height()) {
      $("#header").addClass("sticky");
    } else {
      $("#header").removeClass("sticky");
    }
  }

  function status_acc(element) {
    var offset = element.offset();
    var ele_width = $('#header .status-wrap').outerWidth();
    var offsetLeft_space = offset.left + element.outerWidth();
    var top_pos = offset.top + element.innerHeight();
    // var left_pos = Math.min(offset.left, $(window).innerWidth() - $('#header .status-wrap').outerWidth());
    var property = ((offsetLeft_space - ele_width < 0) ? ({'left': '0px', 'top': '' + top_pos + 'px' , 'position': 'fixed'}) : '');
    $('#header .status').css(property);
  }

  if ($('#header .acc-info').length && $('#header .status').length) {
    $('#header .acc-info').hover(function (e) {
      status_acc($(this))
    }, function (e) {
      $('#header .status').removeAttr('style');
    });
}

});
