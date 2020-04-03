$.fn.isOnScreen = function(shift) {
    if (!shift) {
        shift = 0;
    }
    var viewport = {};
    viewport.top = $(window).scrollTop();
    viewport.bottom = viewport.top + $(window).height();
    var bounds = {};
    bounds.top = this.offset().top + shift;
    bounds.bottom = bounds.top + this.outerHeight() - shift;
    return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
};


var scrollDetection = function(callback) {

    $('.js-scroll-detection').each(function() {
        var that = this;
        var shift = $(that).data('scroll-shift') || 20;

        if ($(that).isOnScreen(shift)) {
            $(that).addClass('js-isonscreen');

            //
            callback()
        }
    });
}

var start = true

var discounted = function() {

    setTimeout(function() {
        $('.sec12').addClass('discounted')
        $('.sec12 .secret').slideDown(500);
        clocks()
    }, 2000)

}

var popup = function() {
    if (start) {

        start = !start

        var popupEl = $('#popup1');

        setTimeout(function() {
            // $('body').addClass('fxdBody');
            popupEl.fadeIn(500);

            clocks()
            $('.popup__timer').addClass('blink')
            discounted()
        }, 2000)

        $('.popup__close').on('click', function(event) {
            $(this).closest(popupEl).fadeOut(500);
            $('body').removeClass('fxdBody');
        });

        $('.popup__btn').on('click', function(event) {
            $(this).closest(popupEl).fadeOut(500);
            $('body').removeClass('fxdBody');

            $("html, body").animate({
                scrollTop: $(".order").offset().top
            }, 700);
        });
    }
}

var clock1, clock2

var clocks = function() {
    clock1.start()
    clock2.start()
}


$(document).ready(function() {

    $('.pre_toform').click(function(e) {
        e.preventDefault();
        var a = $('.js_submit'),
            b = a.closest('form');
        if ($('form#order_form').length) a = $('#order_form .js_submit'), b = a.closest('form#order_form');
        if (b.length && a.is(':visible')) {
            $("html,body").animate({
                scrollTop: b.offset().top
            }, 1500);
        }
        return false;
    });

    $(".for_scroll").click(function() {
        $("html, body").animate({
            scrollTop: $("form").offset().top - 300
        }, 700);
        return false;
    });

    clock1 = $('.digits3').FlipClock({
        clockFace: 'HourlyCounter',
        countdown: true,
        autoStart: false
    });
    clock1.setTime(300);

    clock2 = $('.digits2').FlipClock({
        clockFace: 'HourlyCounter',
        countdown: true,
        autoStart: false
    });
    clock2.setTime(300);
});

$(document).ready(function () {

    $(".phone-js").on("focus", function () {
        if (this.value == false) {
            this.value = "+";
        }
        $(this).on("input", function () {
            if (this.value == false) {
                this.value = "+";
            }
        })
    });
});
