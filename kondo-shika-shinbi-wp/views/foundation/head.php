<?php
/**
 * サイト共通 head 内 タグ
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7VBN6VVKYV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7VBN6VVKYV');

    </script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TFW8KPS');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager 2022/08/14-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KFCHRZX');</script>
<!-- End Google Tag Manager -->
   
   
   
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(is_page('reservation')) { ?>
    <meta http-equiv="refresh" content="0; URL='https://appt.doctorsfile.jp/Patient/?hid=38731'" />
    <?php } ?>
    <link href="<?php GUrl::the_asset()?>/assets/images/favicon.ico" rel="icon" />
    <link href="<?php GUrl::the_asset()?>/assets/images/favicon.ico" rel="shortcut icon" />
    <link href="<?php GUrl::the_asset()?>/assets/images/web-clipicon.png" rel="apple-touch-icon" />
    <script src="//kitchen.juicer.cc/?color=cbI2HyQ964g=" async></script>
    <?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFW8KPS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) 2022/08/14 -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFCHRZX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->