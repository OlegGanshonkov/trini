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

(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0 && !$('#menu').hasClass('scrolled')) {
            $('#menu').addClass('scrolled');
        }
        if ($(this).scrollTop() == 0 && $('#menu').hasClass('scrolled')) {
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
            $('#menu').css("background", "rgba(255, 255, 255, 0.97)");
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

// Payment

(function ($) {
    function increase() {
        var value = $('#live_payment_value').html();
        value = value.replace(/\s/g, '');
        value = parseFloat(value);
        value = value + 1.98;
        value = value.toFixed(2);

        value = String(value).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
        $('#live_payment_value').html(value);
    }

    setInterval(increase, 1000);
})(jQuery);