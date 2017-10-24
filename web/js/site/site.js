/*
 (function () {
 
 function resizer() {
 var height = $(window).height();
 var width = $(window).width();
 var header = $('header');
 var top = 0;
 header.height(height);
 if (width > 768) {
 top = height / 3;
 } else {
 top = height / 6;
 }
 header.find('.container').css("paddingTop", top + "px");
 }
 
 resizer();
 
 $(window).resize(function () {
 resizer();
 });
 
 
 })();
 */

(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 30 && !$('#menu').hasClass('scrolled')) {
            $('#menu').addClass('scrolled');
        }
        if ($(this).scrollTop() <= 30 && $('#menu').hasClass('scrolled')) {
            $('#menu').removeClass('scrolled');
        }
    });

    $('#menu').on('click', '.menu_call', function (e) {
        $('html, body').animate({scrollTop: $('#container').offset().top + 'px'});
        return false;
    });

    $('#menu').on('click', '.navbar-toggle', function (e) {
        var opened = $('.navbar-collapse').hasClass('in');

        if (opened) {
            $('#menu').css("position", "fixed");
            $('#menu').css("background", "rgba(255, 255, 255, 0.97)");
        } else {
            // var top = $(window).scrollTop();
            $('#menu').css("position", "absolute");
            $('#menu').css("background", "rgba(255, 255, 255, 1)");
            $('html, body').scrollTop(0);
        }

        return true;
    });

    $(document).mouseup(function (e) { // событие клика по веб-документу
        var div = $("#menu"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.hide(); // скрываем его
            $('.navbar-collapse').removeClass('in');
            $('#menu').css("position", "fixed");
            $('#menu').css("display", "block");
        }
    });

})(jQuery);


// Menu
(function ($) {
    function onNavbar() {
        if (window.innerWidth >= 768) {
            $('#menu .dropdown').on('mouseover', function () {
                $('.dropdown-toggle', this).next('.dropdown-menu').show();
            }).on('mouseout', function () {
                $('.dropdown-toggle', this).next('.dropdown-menu').hide();
            });
            $('.dropdown-toggle').click(function () {
                if ($(this).next('.dropdown-menu').is(':visible')) {
                    window.location = $(this).attr('href');
                }
            });
        } else {
            $('#menu .dropdown').off('mouseover').off('mouseout');
        }
    }
    $(window).resize(function () {
        onNavbar();
    });
    onNavbar();

})(jQuery);

(function () {

    $(window).load(function () {
        if (window.location.hash) {
            var hash = window.location.hash.substring(1);
            var to = $('section.' + hash).offset().top - 60;

            $('html, body').animate({
                scrollTop: to
            }, 500);
        }
    });


    // Menu
    $('.navbar-nav li').each(function () {
        $(this).find('a').on('click', function (e) {
            // move to
            var hash = $(this).attr('href').split('#')[1];
            var to = $('section.' + hash).offset().top - 60;

            $('html, body').animate({
                scrollTop: to
            }, 500);

            if (window.location.hash) {
            }
        });
    });



})();