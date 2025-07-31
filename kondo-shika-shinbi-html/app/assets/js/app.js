import $ from './app/jquery-shim.js';
import Utils from './app/utils.js';
import Accordion from './app/accordion.js';
import Anchor from './app/anchor.js';
import FixedHeader from './app/fixedheader.js';
import HeightLine from './app/heightline.js';
import ResponsiveTable from './app/responsive-table.js';
import Slidebar from './app/slidebar.js';
import Tab from './app/tab.js';
import CurrentNav from './app/current-nav.js';
import buildFormat from './app/format.js';
import OwlCarousel from 'owl.carousel';

import fontAwesome from "font-awesome/scss/font-awesome.scss"
import OwlCss from "owl.carousel/dist/assets/owl.carousel.css"
import OwlThemeCss from "owl.carousel/dist/assets/owl.theme.default.css"
import ScrollReveal from "scrollreveal"


class App {
  constructor() {
    this.Utils = new Utils();
    this.Accordion = new Accordion();
    this.Anchor = new Anchor();
    this.FixedHeader = new FixedHeader();
    this.HeightLine = new HeightLine();
    this.ResponsiveTable = new ResponsiveTable();
    this.Slidebar = new Slidebar();
    this.CurrentNav = new CurrentNav();
    this.Tab = new Tab();
    $(function() {
        var owls = $('.owl-carousel');
        if (owls.length === 0) {
            return false;
        }
        owls.imagesLoaded(function () {

            $('.c-main-visual__slider').owlCarousel({
                items: 1,
                margin: 0,
                dots: false,
                loop: true,
                nav: true,
                autoplayHoverPause: true,
                autoplay: true,
                autoplaySpeed: 500,
                center: true,
                navText: ['<img src="/wp-content/themes/kondo-shika-shinbi-html/dist/assets/images/icon-slider-prev.png" />','<img src="/wp-content/themes/kondo-shika-shinbi-html/dist/assets/images/icon-slider-next.png" />'],
            });
        });
      //buildFormat();
    });
  }
}

window.GApp = new App();




(function ($) {

    var growApp = function () {
    };
    /*
     * userAgent取得
     * */
    var Agent = window.navigator.userAgent.toLowerCase();
    var _ua = (function (u) {
        return {
            Tablet: (u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
            || u.indexOf("ipad") != -1
            || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
            || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
            || u.indexOf("kindle") != -1
            || u.indexOf("silk") != -1
            || u.indexOf("playbook") != -1,
            Mobile: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
            || u.indexOf("iphone") != -1
            || u.indexOf("ipod") != -1
            || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
            || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
            || u.indexOf("blackberry") != -1
        }
    })(Agent);

    //ボタンをspanでラップする
    growApp.prototype.buttonWrap = function () {
        var button = $(".c-button");
        button.wrapInner("<span></span>");
    }

    //scrollreveal
    growApp.prototype.scrollreveal = function () {
        //- スクロールリーバル
        window.sr = ScrollReveal({duration: 600,mobile:false});
        function domEach(items, callback) {
            if (typeof items === "string") {
                var items = $(items);
            }
            for (var i = 0; i < items.length; i++) {
                var item = items[i];
                // callback = callback.bind(item)
                callback(i, item);
            }
        }

        //common
        sr.reveal(".js-fadein", {scale: 1, duration: 800,origin:'bottom',distance: '20px',}, 100);
        //page-header
        sr.reveal(".c-page-header__title,.c-ortho-top__content,.c-aboutus-power__text-block,.c-lower-content__block", {scale: 1, duration: 800,origin:'bottom',distance: '20px',}, 100);



        var blocks01 = $(".c-about-top__blocks,.c-lower-about-top__conts,.c-overview-normal__inner,.c-overview-number__inner,.c-staff-list__conts");
        domEach(blocks01, function (key, item) {
            sr.reveal(item, {scale: 1,duration: 1000,delay: 700}, 200);
            sr.reveal(item.children[1], {delay: 1000, duration: 1000,scale: 1,origin: 'bottom', distance: '20px'}, 300);
            sr.reveal(item.children[2], {delay: 1000, duration: 1000,scale: 1,origin: 'bottom', distance: '20px'}, 300);
            sr.reveal(item.children[3], {delay: 1000, duration: 1000,scale: 1,origin: 'bottom', distance: '20px'}, 300);
            sr.reveal(item.children[4], {delay: 1000, duration: 1000,scale: 1,origin: 'bottom', distance: '20px'}, 300);
            sr.reveal(item.children[5], {delay: 1000, duration: 1000,scale: 1,origin: 'bottom', distance: '20px'}, 300);
            sr.reveal(item.children[6], {delay: 1000, duration: 1000,scale: 1,origin: 'bottom', distance: '20px'}, 300);
            sr.reveal(item.children[7], {delay: 1000, duration: 1000,scale: 1,origin: 'bottom', distance: '20px'}, 300);
        });
    }

    $(function () {
        var app = new growApp();
        app.buttonWrap();
        app.scrollreveal();

    });

})(jQuery);
