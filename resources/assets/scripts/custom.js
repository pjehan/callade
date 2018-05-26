$(function() {
  // HEADER

  $('header nav').hide();

  // Burger : click header no toggle burger
  $(document).on('click', 'header', function(e){
    e.stopPropagation();
  });

  // Burger : click body toggle burger
  $(document).on('click', 'body', function(){
    $('#burger').removeClass('show').addClass('hidden')
    $('header nav').hide();
  });

  //Burger : toogle if mobile
  $(document).on('click', '#burger, header .menu a', function(e){
    e.stopPropagation();
    if ((window.innerWidth < 992)) {
      var burger = $('#burger');
      if (burger.hasClass('show') || burger.hasClass('hidden')) {
        burger.toggleClass('show').toggleClass('hidden')
        $('header').toggleClass('bg-if-menu-open');
        $('header nav').fadeToggle(200);
      } else {
        burger.toggleClass('show');
        $('header').addClass('bg-if-menu-open');
        $('header nav').fadeIn(200);
      }
    }
  });

  // Function show nav
  function show_nav() {
    if (($(window).width() >= 992) && ($('header nav').css('display') == 'none')) {
      $('header nav').show();
    } else if ((($(window).width() < 992) && ($('header nav').css('display') != 'none'))) {
      $('header nav').hide();

    }
  }

  $(window).scroll(function(){
    if ($(window).scrollTop() > 0) {
      $('.header-fixe').addClass('bg-if-scrolled');
    } else {
      $('.header-fixe').removeClass('bg-if-scrolled');
    }
  });

  show_nav();

  $(window).resize(function() {
    show_nav()
  });

});
