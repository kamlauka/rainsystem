<?php
/*
Template Name: gazon
*/
?>

<?php get_template_part( 'header' );?>

<div class="bg-top bg-top_gazon">
    <div class="uk-container  uk-container-center">

        <h1>Рулонный газон под ключ<br>в Одессе и Одесской области</h1>
        <h2 class="bg-top__title">Укладка и <a  class="link link_white" href="<?php echo get_bloginfo('url'); ?>/gazon_obsluzhivanie_odessa">обслуживание газона</a></h2>
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
            <div class="uk-width-medium-5-10 image-systems  image-systems_gazon">

            </div>
            <div class="uk-width-medium-5-10 text-systems">
                <h4>Рулонный газон -  </h4>
                <p>важная составляющая приусадебного участка. Газон выполняет как эстетическую функцию, так и
                    оздоровительную, ведь «живой» зеленый ковер частично нейтрализует множество вредных веществ,
                    находящихся в воздухе. </p>
                <p>Рулонный газон является одним из наиболее удобных и быстрых решений по реализации зеленого участка на вашем дворе. Что для этого необходимо? Заранее перед настилом газона проработать участок (прополка от сорняков, обработка удобрениями и т.д.), после чего на участок перевозятся и выстилаются порезанные на определенные размеры рулоны газона. Через определенное время дернина укореняется, и травяной настил становится полноценным газоном. </p>

            </div>
        </div>
    </div>
</section>

<!--<section class="cnt cnt_black">-->
<!--    <div class="uk-container uk-container-center">-->
<!--        <h2 class="title title_white calc__title">Калькулятор рулонного газона</h2>-->
<!--        <p class="title title_white calc__title-mini">Выберите нужные услуги и узнайте их стоимость</p>-->
<!---->
<!---->
<!--        <form class="uk-form calc">-->
<!---->
<!--            <div class="uk-grid">-->
<!--                <div class="uk-width-medium-1-2 uk-width-small-1-1">-->
<!--                    <fieldset>-->
<!--                        <label class="checkbox">-->
<!--                            <input id="lawn-full" class="checkbox__input" type="checkbox" onchange="                             document.querySelector-->
<!--                            ('#lawn-trash')-->
<!--                            .checked = true;-->
<!--            document.querySelector('#lawn-soil').checked = true; document.querySelector('#lawn-fertilizer')-->
<!--            .checked = true; document.querySelector('#lawn-install')-->
<!--            .checked = true;"/>-->
<!--                            <div class="checkbox__text">Рулонный газон под ключ</div>-->
<!--                        </label>-->
<!--                        <label class="checkbox">-->
<!--                            <input id="lawn-trash" class="checkbox__input" type="checkbox"/>-->
<!--                            <div class="checkbox__text">Очистка участка от сорняков, вывоз мусора и выравнивание-->
<!--                                земли</div>-->
<!--                        </label>-->
<!--                        <label class="checkbox">-->
<!--                            <input id="lawn-soil" class="checkbox__input"  type="checkbox"/>-->
<!--                            <div class="checkbox__text">Завоз плодородной почвы</div>-->
<!--                        </label>-->
<!--                        <label class="checkbox">-->
<!--                            <input id="lawn-trash" class="checkbox__input" type="checkbox"/>-->
<!--                            <div class="checkbox__text">Заказ и доставка газона в рулонах</div>-->
<!--                        </label>-->
<!--                        <label class="checkbox">-->
<!--                            <input id="lawn-fertilizer" class="checkbox__input"  type="checkbox"/>-->
<!--                            <div class="checkbox__text">Внесение удобрений</div>-->
<!--                        </label>-->
<!--                        <label class="checkbox">-->
<!--                            <input id="lawn-install" class="checkbox__input"  type="checkbox"/>-->
<!--                            <div class="checkbox__text">Укладка и укатывание газона</div>-->
<!--                        </label>-->
<!--                    </fieldset>-->
<!--                </div>-->
<!--                <div class="uk-width-medium-1-2 uk-width-small-1-1">-->
<!--                    <label for="sotka" class="calc__label">Площадь участка под газон в сотках</label>-->
<!--                    <input id="sotka" class="input_white" type="number" name="name"  min="1"-->
<!--                           onKeyUp="if(this.value===''){this.value='1';}else if(this.value<0){this.value='1';}"-->
<!--                           value="10">-->
<!---->
<!--                    <div>-->
<!--                        <div id="calc-lawn" class="uk-button zayavka-btn calc__btn">Посчитать</div>-->
<!--                        <div>-->
<!--                            <p class="calc__answer-text">Примерная стоимость <span class="calc__answer"></span> ₴*</p>-->
<!--                            <span class="calc__mini-text">*На окончательную стоимость влияют особенности местности: укладка газона на ровную поверхность прямоугольного участка выйдет дешевле, чем те же работы на сложном ландшафте.</span>-->
<!--                                                            <span class="calc__err"></span>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--</section>-->
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
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:200}" class="uk-width-1-3 container-snake__el  container-snake__el_two">  Приезжаем к вам и делаем замеры, обсуждаем тз </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:300}"  class="uk-width-1-3 container-snake__el container-snake__el_three">  Рассчитываем стоимость и составляем коммерческое предложение </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:400}" class="uk-width-1-3
            container-snake__el container-snake__el_four">  Вносите предоплату за газон </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:500}" class="uk-width-1-3
            container-snake__el container-snake__el_five">  Подвозим и укладываем плодородный грунт и удобрения</p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:500}" class="uk-width-1-3
            container-snake__el container-snake__el_six"> Доставляем газон в рулонах </p>
            <p
                    data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:600}" class="uk-width-1-3
            container-snake__el container-snake__el_seven">  Стелим и укатываем рулоны</p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:700}" class="uk-width-1-3
            container-snake__el container-snake__el_eight">  Оплачиваете выполненную работу </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:800}" class="uk-width-1-3
            uk-container-center container-snake__el container-snake__el_nine">  Готово! Наслаждайтесь зеленым
                газоном</p>

        </div>
        <div class="wrap-center">
            <span class="uk-button zayavka-btn">Оставить заявку на рулонный газон</span>
        </div>

    </div>
</section>


<?php get_template_part( 'template-parts/preimushestva' );?>


<section id="accordion" class="cnt cnt_black accordion" >
    <div class="uk-container uk-container-center">
        <h2 class="title title_white">Часто задаваемые вопросы</h2>

        <div class="uk-accordion" data-uk-accordion>


            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}"
            >Есть ли гарантии на газон?</h3>
            <div class="uk-accordion-content">
                <p>
                   Да, на приживаемость рулонного газона гарантия 2 недели, если установлена система автополива.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}"
            >Какая разница между сеянным и рулонным газоном?</h3>
            <div class="uk-accordion-content">
                <p>
                    Главные отличия между этими видами газона в их стоимости и скорости получения зелёной
                    лужайки. Рулонный газон дороже, зато сразу готов к эксплуатации. Сеяный газон на первый
                    взгляд гораздо дешевле. Однако, чтобы сеянный газон выглядел так же хорошо, как и рулонный, вам
                    потребуется не менее 1.5 лет усилий и дополнительных материальных вложений на воду, удобрения и
                    средства защиты.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:300}"
            >Как быстро приживется рулонный газон? Сколько он прослужит?</h3>
            <div class="uk-accordion-content">
                <p>
                    Газон приживается в течение 8-12 дней. А служить он может до 9 лет при правильном уходе с вашей
                    стороны.
                </p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:400}"
            >Как нужно ухаживать за рулонным газоном первое время?</h3>
            <div class="uk-accordion-content">
                <p>
                    Для того, чтобы ваш газон прижился без проблем и быстрее пошел в рост, первые 2 недели обеспечьте
                    ему регулярный обильный полив. Впрочем, соблюдать регулярность в поливе следует и после этого
                    периода.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:600}"
            >Нужно ли готовить газон к зиме?</h3>
            <div class="uk-accordion-content">
                <p>
                    В середине октября нужно прекратить полив, провести последнюю стрижку,
                    скарификацию и аэрацию, подкормить
                    удобрениями.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:600}"
            >Занимаетесь ли вы обслуживанием и ремонтом газонов?</h3>
            <div class="uk-accordion-content">
                <p>
                    Да, конечно. Подробнее об этом вы можете узнать <a  href="<?php echo get_bloginfo('url'); ?>/gazon_obsluzhivanie_odessa">здесь</a>
                </p>
            </div>
        </div>
    </div>
</section>



<?php get_template_part( 'template-parts/voprosi' );?>
<?php get_template_part( 'template-parts/uslugi' );?>

<?php get_template_part( 'footer' );?>