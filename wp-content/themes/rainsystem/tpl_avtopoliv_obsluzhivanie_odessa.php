<?php
/*
Template Name: autopoliv_obsluzhivanie
*/
?>


<?php get_template_part( 'header' );?>


<div class="bg-top bg-top_apoliv">
    <div class="uk-container  uk-container-center" >

        <h1>Обслуживание, ремонт систем автополива </h1>

        <ul class="list-repairs">
            <li class="list-repairs__el"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:500}"
            >Консервация (осень) и расконсервация (весна)</li>
            <li class="list-repairs__el"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:600}"
            >Диагностика</li>
            <li class="list-repairs__el" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:700}"
            >Ремонт неполадок</li>
            <li class="list-repairs__el" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:800}"
            >Регулярное, либо разовое техобслуживание</li>
        </ul>

        <div class="form-header bg-top__form-btn">
            <h4 class="title title_mini title_white">Оставить заявку</h4>
            <form class="uk-form" method="post" onsubmit="ga('send', 'event', 'form', 'form_otpravit');">

                <fieldset data-uk-margin>
                    <input class="input input_white"  name="phone"type="text" required placeholder="Номер телефона*">
                    <button class="uk-button" type="submit" >Перезвоните мне</button>
                </fieldset>

            </form>

        </div>
        <div class="arrow">
            <a href="#text-uslugi">
                <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/down-1screen.png">
            </a>
        </div>
    </div>
</div>

<section class="cnt cnt_grey text-uslugi" id="text-uslugi">
    <div class="uk-container uk-container-center " data-uk-scrollspy="{cls:'uk-animation-fade'}">
        <div class="uk-grid uk-grid-small grid-systems " data-uk-grid-margin>
            <div class="uk-width-medium-5-10 image-systems image-systems_poliv-ob">

            </div>
            <div class="uk-width-medium-5-10 text-systems">
                <p>Ваша система полива протекает или не работает? Вы давно не пользовались системой полива и не
                    уверены, что она по-прежнему работает правильно? Мы приедем к вам и выясним, какие проблемы у вас
                    есть, а также отремонтируем, исправим или модернизируем вашу систему полива, чтобы она работала
                    должным образом. Мы осуществляем ремонт системы автополива, как спринклеров, так и капельного орошения.
                </p>
                <p>
                    Также мы проводим сервисное обслуживание системы автополива, чтобы проверить ее готовность к
                    предстоящему сезону. Даем рекомендации относительно того, как часто и как долго вы
                    поливаете газон и сад. Советуем, как настроить программы полива, чтобы вы меньше поливали в холодное время года, когда растениям требуется
                    меньше воды, и экономили воду.
                </p>
            </div>
        </div>
    </div>
</section>
<!--<section class="cnt cnt_black">-->
<!--    <div class="uk-container uk-container-center">-->
<!--        <h2 class="title title_white">Цены</h2>-->
<!--        <table class="uk-table uk-table-striped uk-table-middle table-price table-price_white">-->
<!--            <thead class="table-price__thead table-price__thead_white">-->
<!--            <tr>-->
<!--                <td >Работы</td>-->
<!--                <td>Цена грн</td>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr>-->
<!--                <td>-->
<!--                     Расконсервация автополива (Весеннее обслуживание)-->
<!--                        <ul class="table-price__ul uk-list">-->
<!--                            <li>Проверка фильтров, клапана, спринклеров</li>-->
<!--                            <li>Проверка на утечки</li>-->
<!--                            <li>Проверка и настройка контроллера, датчиков</li>-->
<!--                            <li>Монтаж снятого насоса</li>-->
<!--                            <li>Регулировка секторов полива</li>-->
<!--                        </ul>-->
<!--                    </span>-->
<!--                </td>-->
<!--                <td>от 600</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Консервация автополива (Осеннее обслуживание)-->
<!--                    <ul class="table-price__ul uk-list">-->
<!--                        <li>Чистка фильтров</li>-->
<!--                        <li>Продувка трубы долива и опустошение емкости</li>-->
<!--                        <li>Консервация системы воздушным компрессором</li>-->
<!--                        <li>Демонтаж насосной станции</li>-->
<!--                        <li>Отключение контроллера и подготовка датчиков погоды</li>-->
<!--                    </ul>-->
<!--                </td>-->
<!--                <td>от 800</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Ремонт системы автоматического полива (не гарантийные случаи)-->
<!--                    <ul class="table-price__ul uk-list">-->
<!--                        <li>Замена фильтров, спринклеров, контроллеров, клапанов и т.д.</li>-->
<!--                        <li>Ремонт механических повреждений системы</li>-->
<!--                        <li>Устранение протечек</li>-->
<!--                        <li>Ремонт электропроводки полива</li>-->
<!--                    </ul></td>-->
<!--                <td>от 600</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Ремонт системы автоматического полива (гарантийные случаи)</td>-->
<!--                <td>Бесплатно</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Профилактическое обслуживание системы полива-->
<!--                    <ul class="table-price__ul uk-list">-->
<!--                        <li>Чистка фильтров и промывка клапанов</li>-->
<!--                        <li>Регулировка секторов и радиусов полива</li>-->
<!--                        <li>Перепрограммирование системы под новые требования</li>-->
<!--                    </ul></td>-->
<!--                <td>от 600</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Реконструкция и модернизация системы полива-->
<!--                    <ul class="table-price__ul uk-list">-->
<!--                        <li>Добавление\удаление линий полива при перепланировке</li>-->
<!--                        <li>Установка умного контроллера</li>-->
<!--                    </ul></td>-->
<!--                <td>от 600</td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!--        <div class="wrap-center">-->
<!--            <span class="uk-button zayavka-btn">Оставить заявку</span>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</section>-->

<?php get_template_part( 'template-parts/preimushestva' );?>


<section id="accordion" class="cnt cnt_black accordion" >
    <div class="uk-container uk-container-center">
        <h2 class="title title_white">Часто задаваемые вопросы</h2>

        <div class="uk-accordion" data-uk-accordion>
            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:100}"
            >С каким оборудованием вы работаете?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:100}">
                <div class="uk-slidenav-position" data-uk-slider>
                    <div class="uk-container-center center" id="fix-width">
                        <div class="uk-slider-container">
                            <ul class="uk-slider uk-grid-width-medium-1-4 uk-grid-medium">
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
                    На наших объектах мы используем оборудование и системы автоматического полива от американских,
                    израильских и итальянских производителей, лидеров индустрии, чье качество и надежность
                    проверено
                    годами.
                </p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}"
            >Зачем нужно консервировать автополив на зиму?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}">
                <p> Когда наступают морозы, вода в трубах и узлах системы полива замерзает и расширяется, ломая
                    оборудование. Если насос системы находится на открытом воздухе, он также подвержен этой опасности
                    . Поэтому необходимо полностью выкачать всю воду из системы и демонтировать насос
                   </p>
                <p>
                    </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:300}"
            >Когда нужно проводить консервацию и расконсервацию автополива?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:300}">
                <p>
                    Мы рекомендуем консервировать систему полива в период с конца сентября до конца октября, а
                    запускать систему весной - в апреле, когда температура воздуха достигла и не опускается ниже отметки +5С на протяжении 1 – 2 недель
                </p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  delay:400}" >Мой
                автополив стал хуже поливать, в чем проблема?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:400}">
                <p>
                    Проблема может быть в пониженном давлении воды, либо некачественной воде, которая
                    засоряет фильтры и  образует налет на разбрызгивателях.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:500}"
            >На участке стоит болото, раньше такого не было..
            </h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:500}">
                <p>
                    Скорее всего у вас течь в трубе, либо избыточное давление воды.  </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:600}"
            >Не включается одна из линий полива</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600}">
                <p>
                    Основных причин две: повреждение или засор клапана, либо неисправна электропроводка
                    (из-за
                    грызунов или каких-либо работ на участке).
                </p>
            </div>

        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/voprosi' );?>
<?php get_template_part( 'template-parts/uslugi' );?>

<?php get_template_part( 'footer' );?>
