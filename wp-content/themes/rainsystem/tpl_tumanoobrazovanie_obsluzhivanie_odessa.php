<?php
/*
Template Name: tumanoobrazovanie-obsluzhivanie
*/
?>

<?php get_template_part( 'header' );?>


<div class="bg-top bg-top_tuman-ob">
    <div class="uk-container  uk-container-center">

        <h1>Обслуживание и ремонт системы тумана<br>в Одессе и Одесской области</h1>
        <ul class="list-repairs">
            <li class="list-repairs__el"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}" >Консервация (осень) и расконсервация (весна)</li>
            <li class="list-repairs__el"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:300}" >Диагностика</li>
            <li class="list-repairs__el" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:500}" >Ремонт неполадок</li>
            <li class="list-repairs__el" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:700}" >Регулярное, либо разовое техобслуживание</li>
        </ul>
        <div class="form-header bg-top__form-btn">
            <h4 class="title title_mini title_white">Заказать бесплатную консультацию</h4>
            <form class="uk-form" method="post" onsubmit="ga('send', 'event', 'form', 'form_otpravit');">

                <fieldset data-uk-margin>
                    <input  name="phone"type="text" required placeholder="Номер телефона*">
                    <button class="uk-button" type="submit" >Отправить</button>
                </fieldset>

            </form>
            <div class="arrow">
                <a href="#text-uslugi">
                    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/down-1screen.png">
                </a>
            </div>
        </div>

    </div>
</div>

<section class="cnt cnt_grey text-uslugi" id="text-uslugi">
    <div class="uk-container uk-container-center " data-uk-scrollspy="{cls:'uk-animation-fade'}">
        <div class="uk-grid uk-grid-small grid-systems " data-uk-grid-margin>
            <div class="uk-width-medium-5-10 image-systems image-systems_tuman">

            </div>
            <div class="uk-width-medium-5-10 text-systems">Чтобы ваша система туманообразования под высоким
                давлением прослужила долгие годы, сохраняя при этом свою эффективность, необходимо проводить
                ежегодное обслуживание. Мы приедем к вам и выясним, какие проблемы у вас есть, а также отремонтируем,
                исправим или модернизируем вашу систему тумана, чтобы она работала как новая. </p>
                <p>Мы предоставляем весь комплекс услуг по ремонту и обслуживанию систем тумана. И как профессионалы,
                    прошедшие специализированное обучение, даем гарантию на выполненные работы.
</p>

            </div>
        </div>
    </div>
</section>



<section class="cnt cnt_black">
    <div class="uk-container uk-container-center">
        <h2 class="title title_white">Цены</h2>
        <div class="uk-overflow-container">
            <table class="uk-table uk-table-striped uk-table-middle table-price table-price_white">
                <thead class="table-price__thead table-price__thead_white">
                <tr>
                    <td >Работы</td>
                    <td>Цена грн</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Расконсервация системы тумана (Весеннее обслуживание)
                        <ul class="table-price__ul uk-list">
                            <li>Проверка фильтров, форсунок</li>
                            <li>Проверка на утечки</li>
                            <li>Проверка и настройка контроллера, датчиков</li>
                            <li>Монтаж снятого насоса и питающих элементов</li>
                        </ul>
                        </span>
                    </td>
                    <td>от 600</td>
                </tr>
                <tr>
                    <td>Консервация системы тумана (Осеннее обслуживание)
                        <ul class="table-price__ul uk-list">
                            <li>Чистка фильтров и форсунок</li>
                            <li>Осушение водного бака</li>
                            <li>Консервация системы воздушным компрессором</li>
                            <li>Демонтаж насосной станции и питающих элементов (при необходимости)</li>
                        </ul>
                    </td>
                    <td>от 800</td>
                </tr>
                <tr>
                    <td>Ремонт системы туманообразования (не гарантийные случаи)
                        <ul class="table-price__ul uk-list">
                            <li>Замена форсунок, фитингов, уплотнителей, помпы и т.д.</li>
                            <li>Устранение протечек</li>
                            <li>Ремонт электропроводки тумана</li>
                        </ul></td>
                    <td>от 600</td>
                </tr>
                <tr>
                    <td>Ремонт системы  туманообразования (гарантийные случаи)</td>
                    <td>Бесплатно</td>
                </tr>
                <tr>
                    <td>Профилактическое обслуживание системы тумана
                        <ul class="table-price__ul uk-list">
                            <li>Чистка форсунок</li>
                            <li>Замена масла в насосе</li>
                            <li>Замена картриджей фильтра</li>
                        </ul></td>
                    <td>от 600</td>
                </tr>
                <tr>
                    <td>Реконструкция и модернизация системы тумана
                        <ul class="table-price__ul uk-list">
                            <li>Добавление\удаление форсунок</li>
                            <li>Установка нового контроллера</li>
                        </ul></td>
                    <td>от 600</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="wrap-center">
            <span class="uk-button zayavka-btn">Оставить заявку</span>
        </div>
    </div>

</section>


<?php get_template_part( 'template-parts/preimushestva' );?>


<section id="accordion" class="cnt cnt_black accordion" >
    <div class="uk-container uk-container-center">
        <h2 class="title title_white">Часто задаваемые вопросы</h2>

        <div class="uk-accordion" data-uk-accordion>
            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}"
            >Зачем нужно консервировать систему туманообразования на зиму?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}">
                <p> Когда наступают морозы, вода в трубах и узлах системы замерзает и расширяется, ломая
                    оборудование. Если насос системы находится на открытом воздухе, он также подвержен этой опасности
                    . Поэтому необходимо полностью выкачать всю воду из системы и демонтировать насос.
                </p>
                <p>
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:300}"
            >Когда нужно проводить консервацию и расконсервацию системы тумана?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:300}">
                <p>
                    Мы рекомендуем консервировать систему тумана в период с конца сентября до конца октября, а
                    запускать систему весной - в апреле, когда температура воздуха достигла и не опускается ниже
                    отметки +5С на протяжении 1 – 2 недель.
                </p>
            </div>
            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  delay:400}" >Система тумана
                стала хуже работать, в чем проблема?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:400}">
                <p>
                    Проблема может быть в пониженном давлении воды, либо некачественной воде, которая
                    засоряет фильтры и  образует налет на форсунках.
                </p>
            </div>




        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/voprosi' );?>
<?php get_template_part( 'template-parts/uslugi' );?>

<?php get_template_part( 'footer' );?>