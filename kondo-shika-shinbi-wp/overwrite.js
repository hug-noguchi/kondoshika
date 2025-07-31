/*
 * ====================================================================
 * growp
 * @package  growp
 * @author   GrowGroup.Inc <info@grow-group.jp>
 * @license  MIT Licence
 * ====================================================================
 */

(function ($) {
    $(window).on('scroll', function() {
        var now = jQuery(window).scrollTop();

        if (now > 400 && isSmartPhone()) {
            $('.s-pagetop').fadeIn("slow");
            $('.s-pagetop').css('display', 'flex');
        } else {
            $('.s-pagetop').fadeOut('slow');
        }
    });

    var growApp = function () {

    };

    /************************
    * please insert your code
    *************************/
    growApp.prototype.myCode = function () {

    }

    $(function () {
        var app = new growApp();
        app.myCode();
    });

    function isSmartPhone() {
        if (window.matchMedia && window.matchMedia('(max-device-width: 59.3125em)').matches) {
            return true;
        } else {
            return false;
        }
    }
})(jQuery);
