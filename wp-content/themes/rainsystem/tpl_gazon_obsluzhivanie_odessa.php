<?php
/*
Template Name: gazon_obsluzhivanie
*/
?>

<?php get_template_part( 'header' );?>

<div class="bg-top bg-top_gazon-ob">
    <div class="uk-container  uk-container-center">

        <h1>Обслуживание рулонного газона
            <br>в Одессе и Одесской области</h1>
        <ul class="list-repairs">
            <li class="list-repairs__el"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}"
            >Покос газона</li>
            <li class="list-repairs__el"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:300}"
            >Установка <a class="link link_white" href="<?php echo get_bloginfo('url'); ?>/avtopoliv_odessa">
                    автополива</a></li>
            <li class="list-repairs__el" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:500}"
            >Подкормка удобрениями</li>
            <li class="list-repairs__el" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:700}">
                Аэрация и скарификация
            </li>
        </ul>
        <div class="form-header bg-top__form-btn">
            <h4 class="title title_mini title_white">Заказать бесплатную консультацию</h4>
            <form class="uk-form" method="post" onsubmit="ga('send', 'event', 'form', 'form_otpravit');">

                <fieldset data-uk-margin>
                    <input  name="phone"type="text" required placeholder="Номер телефона*">
                    <button class="uk-button" type="submit" >Отправить</button>
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
            <div class="uk-width-medium-5-10 image-systems  image-systems_gazon-ob">
                <!--                <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/system3.png">-->
            </div>
            <div class="uk-width-medium-5-10 text-systems">
                <p> <strong>Уход за рулонным газоном </strong>требует практики и большого количества времени. Как ухаживать за здоровым газоном, чтобы
                        он оставался привлекательным и радовал глаз в следующие сезоны? </p>
                <p>Прежде всего, не забывайте поливать его регулярно. Если вы пренебрегли
                    этим занятием в течение нескольких недель, за один вечер газон не восстановится. </p>
                <p>Во-вторых, не забывайте о систематическом покосе. Труднодоступные для косилки места подрезаются
                    специальными ножницами для дерна.  Третий важный шаг - подкормка удобрениями</p>
                <p>В зависимости от состояния травы корректируйте уход. Если газон слишком редкий, проводите аэрацию
                    (разрезание дерна и извлечение мха и пожухлой травы). А если трава чахнет, то стоит провести
                    скарификацию - прокалывание грунта для проникновения воздуха и влаги.
                </p>
                <p>Мы предоставляем все вышеперечисленные услуги и помогаем вам сэкономить ваше время. </p>
            </div>
        </div>
    </div>
</section>

<!--<section class="cnt cnt_black">-->
<!--    <div class="uk-container uk-container-center">-->
<!--        <h2 class="title title_white">Цены</h2>-->
<!--        <table class="uk-table uk-table-striped uk-table-middle table-price table-price_white"> -->
<!--            <thead class="table-price__thead table-price__thead_white">-->
<!--            <tr>-->
<!--                <td >Работы</td>-->
<!--                <td>Цена грн за сотку</td>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    Покос газона-->
<!--                </td>-->
<!--                <td>от 200</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Подкормка удобрениями-->
<!--                </td>-->
<!--                <td>от 400</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Аэрация и скарификация</td>-->
<!--                <td>от 500</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Замена части газона</td>-->
<!--                <td>от 800</td>-->
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


            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}"
            >После стрижки кончики у стеблей травы засыхают</h3>
            <div class="uk-accordion-content">
                <p>
                    Или вы низко стрижете газон, или лезвия газонокосилки затупились и она не срезает стебли, а рвет
                    их. А неровные края желтеют и сохнут.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}"
            >На газоне есть проплешины желтого цвета</h3>
            <div class="uk-accordion-content">
                <p>
                    Возможно, неравномерно распределили минеральные удобрения, либо проблема в кислотности почвы.
                    Также обратите внимание на полив желтеющих участков - может его недостаточно, или наоборот, есть
                    переизбыток.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}"
            >Когда осенью нужно последний раз подстригать газон?</h3>
            <div class="uk-accordion-content">
                <p>
                    Подстригайте, пока не выпал снег, или пока видите, что газон растет. Обычно к зиме рост травы
                    замедляется.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}"
            >Когда нужно проводить аэрацию и скарификацию газона?</h3>
            <div class="uk-accordion-content">
                <p>
                    Аэрацию проводят раз в месяц, либо если сильно переувлажнили почву. Скарификацию - не более 2 раз
                    в году, т.к. она существенно влияет на газон, повреждая корни травы.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}"
            >Можно ли восстановить газон, если его долго не поливали?</h3>
            <div class="uk-accordion-content">
                <p>
                    Попробуйте его прочесать, покосить и регулярно поливать. В благоприятном случае в течение 20 дней
                    появятся новые побеги травы.
                </p>
            </div>

        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/voprosi' );?>
<?php get_template_part( 'template-parts/uslugi' );?>

<?php get_template_part( 'footer' );?>