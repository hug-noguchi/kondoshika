jQuery(window).load(function() {

var ad_box = jQuery('.side_col .ad_widget');
var ad_box_height = ad_box.height();

if (jQuery('#side_col').children().hasClass('ad_widget')) {
 var side_height = jQuery("#side_col").height();
 var side_top = jQuery("#side_col").offset().top;
} else if (jQuery('#side_col2').children().hasClass('ad_widget')) {
 var side_height = jQuery("#side_col2").height();
 var side_top = jQuery("#side_col2").offset().top;
} else {
 var side_height = jQuery("#side_col").height();
 var side_top = jQuery("#side_col").offset().top;
};

var main_height = jQuery("#content_wrap").height();
var main_top = jQuery("#content_wrap").offset().top;

var left_content_height = jQuery("#main_col_wrap").height();

if( left_content_height > side_height ) {

jQuery(window).scroll(function () {
  if(jQuery(window).scrollTop() > side_height + side_top -35) {
    ad_box.addClass('fixed_ad');
  } else {
    ad_box.removeClass('fixed_ad');
  };
  if(jQuery(window).scrollTop() > main_height + main_top - ad_box_height) {
    ad_box.removeClass('fixed_ad');
    ad_box.addClass('fixed_ad2');
  } else {
    ad_box.removeClass('fixed_ad2');
  };
});

};

});