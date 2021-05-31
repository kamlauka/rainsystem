<?php
/*
Template Name: autopoliv
*/
?>

<?php get_template_part( 'header' );?>

<div class="bg-top bg-top_avtopoliv">
    <div class="uk-container  uk-container-center">

        <h1>Автоматический полив под ключ<br>в Одессе и Одесской области</h1>
        <h2 class="bg-top__title">Установка, <a class="link link_white" href="<?php echo get_bloginfo('url'); ?>/avtopoliv_obsluzhivanie_odessa">обслуживание, ремонт</a></h2>
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
            <div class="uk-width-medium-5-10 image-systems image-systems_poliv">

            </div>
            <div class="uk-width-medium-5-10 text-systems">
                <h4>Автоматический полив - </h4>
                <p>это комплекс оборудования, объединенного в одну инженерную сеть, которая осуществляет правильный полив газона и зеленых насаждений без вмешательства человека. Как это работает? Благодаря правильному размещению оборудования на заданной площади, с учетом специфики ваших насаждений, нам удается добиться равномерного и регулярного распределения влаги по земле, которого практически невозможно добиться при ручном поливе.
                    Система автополива устроена таким образом, что специалистом задается программа полива (регулярность, интенсивность и тд), а все остальное за Вас сделает автоматика.
                    <b>Преимущества автоматического полива:</b></p>
                <ul>
                    <li>профессиональный полив вашего газона и растений;</li>
                    <li>при максимальной эффективности полива, существенно снижается расход воды;</li>
                    <li>экономия самого ценного - вашего времени и сил;</li>
                    <li>прогресс в технологиях, который удачно подчеркнет вашу рациональность и современный взгляд на бытовые вопросы.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--    <section class="cnt cnt_black">-->
<!--        <div class="uk-container uk-container-center">-->
<!--            <h2 class="title title_white calc__title">Калькулятор стоимости автоматического полива</h2>-->
<!--            <p class="title title_white calc__title-mini">Выберите нужные услуги и узнайте их стоимость</p>-->
<!--            <form class="uk-form calc">-->
<!--                <div class="uk-grid">-->
<!--                    <div class="uk-width-medium-1-2 uk-width-small-1-1">-->
<!--                        <fieldset>-->
<!--                            <label class="checkbox">-->
<!--                                <input id="land-full" class="checkbox__input" type="checkbox" onchange="-->
<!--                             document.querySelector-->
<!--                            ('#land-project')-->
<!--                            .checked = true;-->
<!--            document.querySelector('#watering-install').checked = true; document.querySelector('#green-install')-->
<!--            .checked = true;"/>-->
<!--                                <div class="checkbox__text" >Ландшафтный дизайн "под ключ"</div>-->
<!--                            </label>-->
<!--                            <label class="checkbox">-->
<!--                                <input id="land-project" class="checkbox__input"  type="checkbox"/>-->
<!--                                <div class="checkbox__text">Проект ландшафтного дизайна</div>-->
<!--                            </label>-->
<!--                            <label class="checkbox">-->
<!--                                <input id="watering-install" class="checkbox__input"  type="checkbox"/>-->
<!--                                <div class="checkbox__text">Установка автополива</div>-->
<!--                            </label>-->
<!--                            <label class="checkbox">-->
<!--                                <input id="fog-install" class="checkbox__input"  type="checkbox"/>-->
<!--                                <div class="checkbox__text">Установка системы тумана</div>-->
<!--                            </label>-->
<!--                            <label class="checkbox">-->
<!--                                <input id="green-install" class="checkbox__input"  type="checkbox"/>-->
<!--                                <div class="checkbox__text">Озеленение</div>-->
<!--                            </label>-->
<!--                        </fieldset>-->
<!--                    </div>-->
<!--                    <div class="uk-width-medium-1-2 uk-width-small-1-1">-->
<!--                        <label for="sotka" class="calc__label">Площадь вашего участка в сотках</label>-->
<!--                        <input id="sotka" class="input_white" type="number" name="name"  min="1"-->
<!--                               onKeyUp="if(this.value===''){this.value='1';}else if(this.value<0){this.value='1';}"-->
<!--                               value="10">-->
<!---->
<!--                        <div>-->
<!--                            <div id="calcdesign" class="uk-button zayavka-btn calc__btn">Посчитать</div>-->
<!--                            <div>-->
<!--                                <p class="calc__answer-text">Примерная стоимость <span class="calc__answer"></span> ₴</p>-->
<!--                                <span class="calc__mini-text">*Точная стоимость зависит от индивидуальных особенностей-->
<!--                                участка</span>-->
<!--                                <span class="calc__err"></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </section>-->
    <section class="voprosi cnt">
        <div class="uk-container uk-container-center">
            <h4 class="title title_mini">Узнайте точную стоимость работ</h4>
            <div class="form-header">
                <p class="voprosi__minititle voprosi__minititle_white-bck">Оставьте ваши контакты и мы Вам перезвоним!</p>
                <form class="uk-form" method="post" onsubmit="ga('send', 'event', 'form', 'form_voprosu');">

                    <fieldset data-uk-margin="">
                        <input class="input_in-wht-bkg" type="text" name="name" placeholder="Ваше имя">
                        <input class="input_in-wht-bkg" type="text"  name="phone" required="" placeholder="Номер телефона*">
                        <button class="uk-button" type="submit">Уточнить стоимость</button>
                    </fieldset>

                </form>

            </div>
        </div>
    </section>

<section class="cnt cnt_black onas" id="onas">
    <div class="uk-container uk-container-center">
        <div class="container-snake uk-grid">
            <h2 class="uk-width-1-1 title title_white">Как мы работаем</h2>
            <p data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}" class="uk-width-1-3 container-snake__el container-snake__el_one"> Оставляете заявку </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:200}" class="uk-width-1-3
            container-snake__el  container-snake__el_two">  Приезжаем к вам и делаем замеры участка, обсуждаем тз </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:300}"  class="uk-width-1-3
            container-snake__el container-snake__el_three"> Составляем детальный проект полива и 3 варианта сметы на
                разный бюджет</p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:400}" class="uk-width-1-3
            container-snake__el container-snake__el_four">  Вносите предоплату за выбранную систему </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:500}" class="uk-width-1-3
            container-snake__el container-snake__el_five">  Устанавливаем систему автополива </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:600}" class="uk-width-1-3 container-snake__el container-snake__el_six">  Оплачиваете выполненную работу </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:700}" class="uk-width-1-3
            uk-container-center container-snake__el container-snake__el_seven">  Готово! </p>

        </div>
        <div class="wrap-center">
            <a href="#tel" class="uk-button zayavka-btn"   uk-toggle">Оставить заявку на установку системы автоматического полива</a>
        </div>

    </div>
</section>


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
                    израильских и итальянских производителей, чье качество и надежность проверено годами.
                </p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}"
            >Есть ли какие-то гарантии?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}">
                <p>Да, при условии сезонного обслуживания системы автополива, гарантия на нее 2 года.</p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}"
            >Что такое спринклерный полив и капельное орошение, какая между ними разница?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:200}">
                <p>
                    Спринклерный полив (дождевание) распыляет в воздух и орошает всю поверхность почвы через
                    распылительные насадки, так что она разбивается на мелкие капли воды, которые падают на землю.
                    Это идеальный способ полива газонов и некоторых видов растений.
                </p>
                <p>
                    Вместо того, чтобы опрыскивать засаженный участок над землей, система капельного орошения
                    пропитывает землю водой из трубок на поверхности земли. Вода по трубке поступает в отверстия,
                    расположенные на определенном расстоянии друг от друга, и постепенно увлажняет почву.</p>
                <p>
                    Капельный полив получил широкое распространение как в коммерческих масштабах (полив овощных,
                    ягодных, кормовых культур в садах и полях), так и в ландшафтном дизайне, где имеются растения,
                    которым необходим прикорневой полив и нежелателен полив методом дождевания. Но для газонов такой
                    метод полива не годится.</p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:300}"
            >Будет ли автополив поливать так же хорошо, как я могу поливать вручную?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:300}">
                <p>
                    Она будет работать намного лучше, потому что профессионально разработанная система будет подавать
                    точно необходимое количество воды на отдельные участки лужайки и сада.
                </p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  delay:400}" >Будет ли автоматическая спринклерная система использовать больше воды, чем я использую сейчас?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:400}">
                <p>
                    Нет. Фактически, это сэкономит воду. Мы настроим контроллер системы
                    таким образом, чтобы растения получали только необходимое количество воды.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:500}"
            >Как насчет тех узких участков или участков неправильной формы, на которых нужно избежать разбрызгивания
                воды?
            </h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:500}">
                <p>
                    В каждом случае наш инженер спроектирует подходящее решение. Например, для определенных
                    растений капельное орошение решит проблему и позволит избежать попадания
                    брызг на стены, окна и заборы.  </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  delay:600}"
            >Зачем необходимо сезонное обслуживание системы автополива?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600}">
                <p>
                    Подробнее об этом вы можете узнать <a href="<?php echo get_bloginfo('url'); ?>/avtopoliv_obsluzhivanie_odessa#accordion">здесь</a>
                </p>
            </div>

        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/voprosi' );?>
<?php get_template_part( 'template-parts/uslugi' );?>

<?php get_template_part( 'footer' );?>