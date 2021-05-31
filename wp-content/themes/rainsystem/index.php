<!-- glavnaya stranica-->
<?php get_header(); ?>

<div class="bg-top bg-top_main">
    <div class="uk-container  uk-container-center">

        <h1> <br>Озеленение в Одессе и Одесской области</h1>
        <div class="form-header bg-top__form-btn">
            <h4 class="title title_mini title_white">Бесплатная консультация специалиста</h4>
            <form class="uk-form" method="post">

                <fieldset data-uk-margin>
                    <input  name="phone"type="text" required placeholder="Номер телефона*">
                    <button class="uk-button" type="submit" >Отправить</button>
                </fieldset>

            </form>

        </div>
        <div class="arrow">
            <a href="#uslugi">
                <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/down-1screen.png">
            </a>
        </div>
    </div>
</div>
<?php get_template_part( 'template-parts/uslugi' );?>
<?php get_template_part( 'template-parts/onas' );?>
<?php get_template_part( 'template-parts/preimushestva' );?>
<?php get_template_part( 'template-parts/reviews' );?>
<?php get_template_part( 'template-parts/works' );?>

<section id="accordion" class="accordion accordion_padding cnt cnt_black">
    <div class="uk-container uk-container-center">
        <h2 class="title title_white">Часто задаваемые вопросы</h2>

        <div class="uk-accordion" data-uk-accordion>
            <h3 class="uk-accordion-title">С каким оборудованием вы работаете?</h3>
            <div class="uk-accordion-content">
                <div class="uk-slidenav-position" data-uk-slider>
                    <div class="uk-container-center center" id="fix-width">
                        <div class="uk-slider-container">
                            <ul class="uk-slider uk-grid  uk-grid-medium uk-grid-width-medium-1-4 uk-grid-small
                            k-grid-width-small-1-1">
                                <li><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/hunter.png"> </li>
                                <li><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rainbird.png"> </li>
                                <li><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/irritec.png"> </li>
                                <li><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/matzer.png"> </li>
                                <li><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/idrobase.png"> </li>
                                <li><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/amiad.png"> </li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>

                </div>
                <p>
                    Наш выбор - качественное оборудование известных, проверенных временем марок
                </p>
            </div>


            <h3 class="uk-accordion-title">Сколько лет в бизнесе? Профессионализм?</h3>
            <div class="uk-accordion-content">
                <p>
                    Как мы уже упоминали, мы - ребята с опытом работы более 7 лет, плюс до открытия своей фирмы мы также работали в сфере озеленения. Наш профессионализм подтвержден отзывами наших клиентов и мы готовы показать выполненные объекты. За один год мы делаем более 20 проектов.

                </p>
                <p>
                    Также мы являемся сертифицированными специалистами компании Hunter.
                </p>
            </div>

            <h3 class="uk-accordion-title">Выезжаете на объект?</h3>
            <div class="uk-accordion-content">
                <p>
                    Да, если у вас нет плана участка. Мы бесплатно выезжаем на ваш участок для предварительных замеров, а после рассчитываем стоимость проекта.
                </p>
            </div>

            <h3 class="uk-accordion-title">Мне нужно, чтобы вы срочно приступили к работе. Такое возможно?</h3>
            <div class="uk-accordion-content">
                <p>
                    Да, конечно, мы занимаемся объектами с "горящими" сроками.
                </p>
            </div>

            <h3 class="uk-accordion-title">Есть ли какие-то гарантии?</h3>
            <div class="uk-accordion-content">
                <p>
                    Да, у нас есть гарантия до 2 лет на системы автополива и туманообразования при условии консервации и обслуживания системы. На приживаемость рулонного газона гарантия 2 недели, если установлена система автополива.
                </p>
            </div>

            <h3 class="uk-accordion-title">Работаете ли вы с НДС?</h3>
            <div class="uk-accordion-content">
                <p>

                    Работали и работаем. Среди наших заказчиков Академия спорта, СТО Ман, база отдыха Сан-Райз.
                </p>
            </div>

            <h3 class="uk-accordion-title">Как насчет дальнейшего обслуживания и ремонта?</h3>
            <div class="uk-accordion-content">
                <p>
                    Да, мы этим занимаемся. А если вы уже работали с нами, мы держим связь и напоминаем о
                    сезонном обслуживании.
                </p>
            </div>

        </div>

    </div>
</section>

<section id="voprosi" class="voprosi cnt">
    <div class="uk-container uk-container-center">
        <h4 class="title title_mini">Остались вопросы?</h4>
        <div class="form-header">
            <p class="voprosi__minititle voprosi__minititle_white-bck">Оставьте ваши контакты и мы Вам перезвоним!</p>
            <form class="uk-form"  method="post">

                <fieldset data-uk-margin>
                    <input class="input_in-wht-bkg" type="text" name="name" placeholder="Ваше имя">
                    <input class="input_in-wht-bkg" type="text"  name="phone" required placeholder="Номер телефона*">
                    <button class="uk-button" type="submit" >Отправить</button>
                </fieldset>

            </form>

        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/kontakt' );?>

<script>
    document.getElementsByClassName("hide")[0].style.display = 'none';
</script>
<?php get_footer(); ?>