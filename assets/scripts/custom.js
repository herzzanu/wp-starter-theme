(function($) {
    var header = $(".navbar");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            header.addClass("navbar-white");
        } else {
            header.removeClass("navbar-white");
        }
    });

    // Fullscreen menu
    $('.navbar-toggle').click(function() {
        $(this).toggleClass('active');
        $('.menu-overlay').toggleClass('open');
        $('body').toggleClass('hidden-overflow');
    });

    // Animations
    var contentAnimation = 'animated fadeInUp';
    var navAnimation = 'animated fadeInDown';
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    $('.navbar').addClass(navAnimation).one(animationEnd, function() {
        $(this).removeClass(navAnimation);
    });

    $('.hero h1').addClass(contentAnimation).one(animationEnd, function() {
       $(this).removeClass(contentAnimation);
    });
    $('.hero h4').addClass(contentAnimation).one(animationEnd, function() {
        $(this).removeClass(contentAnimation);
    });
    $('.hero a').addClass(contentAnimation).one(animationEnd, function() {
        $(this).removeClass(contentAnimation);
    });
    $('.single-service-section h1').addClass(contentAnimation).one(animationEnd, function() {
        $(this).removeClass(contentAnimation);
    });
    $('.single-service-section .description').addClass(contentAnimation).one(animationEnd, function() {
        $(this).removeClass(contentAnimation);
    });
})(jQuery);

