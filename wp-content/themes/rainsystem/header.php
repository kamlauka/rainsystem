<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rainsystem
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'VKehMPkHnA';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//code.jivosite.com/script/widget/'+widget_id
            ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
            if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
            else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    

    <header  id="masthead" class="site-header">
        <div class="uk-grid uk-grid-collapse grid-top">
            <div class="uk-width-medium-1-4 mobile-width">
                <div class="logo">
                    <a href="<?php echo get_bloginfo('url'); ?>">
                        <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/water-icon.png">
                        <h2>RainSystem</h2>
                    </a>
                </div>
            </div>
            <div class="uk-width-medium-2-4 mobile-hidden">
                <div class="menu ">
                    <ul class="uk-subnav flex-center">
                        <li><a href="#uslugi">Услуги</a></li>
                        <li id="menu__hide-el"><a href="#accordion">ЧАВО</a></li>
                        <li><a href="#kontakt">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-medium-1-4  mobile-width">
                <div class="block-tel mobile-hidden">
                    <a style="font-size: 20px;" href="tel:+380675840103">+38(067) 584-01-03</a>
                    <a href="#tel" data-uk-modal><p><span class="zvonok link">Обратный звонок</span></p></a>
                </div>
                <div class="menu-small-canvas">
                    <!-- This is a button toggling the off-canvas sidebar -->
                    <button class="uk-button canv-button off-canv-button " data-uk-offcanvas="{target:'#my-menu',mode:'slide'}">Меню</button>
                </div>
            </div>
        </div>

    </header><!-- #masthead -->



    <div id="tel" class="uk-modal">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close uk-close"></a>
            <div class="uk-modal-header">
                <div class="logo modal">
                    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/water-icon.png">
                    <h2 class="black">RainSystem</h2>
                </div>
            </div>
            <div class="uk-modal-body">
                <div class="form-header modal-header">
                    <form class="uk-form header_form" method="POST">
                        <fieldset data-uk-margin>
                            <input  name="phone" type="tel" placeholder="Номер телефона*" required  autocomplete="on">
                            <input name="name" type="text"  required placeholder="Ваше имя*"  autocomplete="on">
                            <button class="uk-button" type="submit" value="Отправить" >Отправить</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="result-form" class="uk-modal">
        <div class="uk-modal-dialog uk-margin-auto-vertical">
            <a class="uk-modal-close uk-close"></a>
            <div class="uk-modal-header">
                <div class="logo modal">
                    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/water-icon.png">
                    <h2 class="black">RainSystem</h2>
                </div>
            </div>
            <div class="uk-modal-body">
                <p class="modal-dg__title" ></p>
            </div>
        </div>
    </div>


    <!-- This is the off-canvas sidebar -->
    <div id="my-menu" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <div class="butt-close-canvas">
                <a href="#offcanvas" class="canvas-menu" data-uk-offcanvas=""><i class="uk-icon-close"></i></a>
            </div>
            <ul class="">
                <li class="uk-active"><a href="#uslugi">Услуги</a></li>
                <li><a href="#accordion">ЧАВО</a></li>
                <li><a href="#kontakt">Контакты</a></li>
            </ul>
        </div>
    </div>




    <a class="social" href="https://www.instagram.com/rainsystem.com.ua/" target="_blank"><img class="social__logo" alt="Rainsystem инстаграм канал" src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/insta.png"></a>

    <!-- Полоски поверх-->
    <div class="uk-container uk-container-center line-grids" id="container-width">
        <div class="uk-grid uk-grid-collapse border-fixed" id="line-fix">
            <div class="uk-width-1-4"></div>
            <div class="uk-width-1-4"></div>
            <div class="uk-width-1-4"></div>
            <div class="uk-width-1-4"></div>
        </div>
    </div>

