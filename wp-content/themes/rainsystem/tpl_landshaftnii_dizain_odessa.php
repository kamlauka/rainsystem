<?php
/*
Template Name: landshaftnii-dizain
*/
?>

<?php get_template_part( 'header' );?>

<div class="bg-top bg-top_landshaft">
    <div class="uk-container  uk-container-center">

        <h1>Ландшафтный дизайн под ключ<br>в Одессе и Одесской области</h1>
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
            <div class="uk-width-medium-5-10 image-systems image-systems_land">

            </div>
            <div class="uk-width-medium-5-10 text-systems">
                <h4>Ландшафтный дизайн - </h4>
                <p> это анализ, планирование и организация пространства вокруг зданий, общественных мест, зон отдыха
                    и парков. Хорошие ландшафтные дизайнеры разбираются в архитектуре, географии, почвах,
                    геодезии, ботанике и ремеслах.  </p>
                <p>Ландшафтный дизайн - это соединение растений, дорожек, водоемов, площадок и различных композиций в
                    цельный и неповторимый образ вашей территории. Мы разрабатываем ландшафтный дизайн под
                    ключ: создаем и реализуем проекты любой сложности, занимаемся их обслуживанием. Таким
                    образом, вы получите благоустроенную территорию без лишних хлопот.</p>
                <p>Думайте о своем ландшафте
                    как о продолжении
                    жилого пространства вашего дома. Мы готовы помочь вам превратить участок в ваш личный рай.
               </p>

            </div>
        </div>
    </div>
</section>
<!--
Коммерческий ландшафт
-->

<section id="uslugi" class="cnt">
    <div class="uk-container uk-container-center">
        <h2 class="title">Наши услуги</h2>

        <div class="uk-grid uk-grid-match uslugi-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2 uk-width-large-1-4 uk-width-small-1-2" data-uk-modal="{target:'#project'}">

                <div class="uslugi-all">
                    <div class="uslugi-block">
                        <div class="uslugi-img">
                            <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rain-06.jpg">
                        </div>
                        <h4>Ландшафтное проектирование</h4>
                    </div>
                    <span class="uk-button off-canv-button uslugi-button">Подробнее</span>
                </div>
            </div>
            <div class="uk-width-medium-1-2 uk-width-large-1-4 uk-width-small-1-2" data-uk-modal="{target:'#trees'}">

                <div class="uslugi-all">
                    <div class="uslugi-block">
                        <div class="uslugi-img">
                            <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rain-07.jpg">
                        </div>
                        <h4>Деревья, кустарники и многолетники</h4>
                    </div>
                    <span class="uk-button off-canv-button uslugi-button">Подробнее</span>
                </div>
            </div>
            <div class="uk-width-medium-1-2 uk-width-large-1-4 uk-width-small-1-2"  data-uk-modal="{target:'#compos'}">

                <div class="uslugi-all">
                    <div class="uslugi-block">
                        <div class="uslugi-img">
                            <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rain-08.jpg">
                        </div>
                        <h4>Ландшафтные композиции</h4>
                    </div>
                    <span class="uk-button off-canv-button uslugi-button">Подробнее</span>
                </div>
            </div>
            <div class="uk-width-medium-1-2 uk-width-large-1-4 uk-width-small-1-2" data-uk-modal="{target:'#flower'}">

                <div class="uslugi-all">
                    <div class="uslugi-block">
                        <div class="uslugi-img">
                            <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rain-09.jpg">
                        </div>
                        <h4>Клумбы и цветники</h4>
                    </div>
                    <span class="uk-button off-canv-button uslugi-button">Подробнее</span>
                </div>
            </div>
            <div class="uk-width-medium-1-2 uk-width-large-1-4 uk-width-small-1-2">

                <a  href="<?php echo get_bloginfo('url'); ?>/autopoliv_odessa" class="uslugi-all">
                    <div class="uslugi-block">
                        <div class="uslugi-img">
                            <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rain-01.jpg">
                        </div>
                        <h4>Системы автополива</h4>
                    </div>
                    <span class="uk-button off-canv-button uslugi-button">Перейти</span>
                </a>
            </div>
            <div class="uk-width-medium-1-2 uk-width-large-1-4 uk-width-small-1-2">

                <a  href="<?php echo get_bloginfo('url'); ?>/tumanoobrazovanie_odessa" class="uslugi-all">
                    <div class="uslugi-block">
                        <div class="uslugi-img">
                            <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rain-02.png">
                        </div>
                        <h4>Системы туманообразования</h4>
                    </div>
                    <span class="uk-button off-canv-button uslugi-button">Перейти</span>
                </a>
            </div>
            <div class="uk-width-medium-1-2 uk-width-large-1-4 uk-width-small-1-2">

                <a  href="<?php echo get_bloginfo('url'); ?>/gazon_odessa" class="uslugi-all">
                    <div class="uslugi-block">
                        <div class="uslugi-img">
                            <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/rain-04.png">
                        </div>
                        <h4>Рулонный газон</h4>
                    </div>
                    <span class="uk-button off-canv-button uslugi-button">Перейти</span>
                </a>
            </div>
        </div>
        <div class="wrap-center block-top">

            <p class="big-text">Также мы занимаемся <strong>обслуживанием</strong> <a href="<?php echo get_bloginfo
                ('url'); ?>/gazon_obsluzhivanie_odessa"
                                                                                      class="link">рулонного
                    газона</a>,
                <a href="<?php echo get_bloginfo('url'); ?>/autopoliv-obsluzhivanie-odessa"
                   class="link">автополива</a>
                <a href="<?php echo get_bloginfo('url'); ?>/tumanoobrazovanie_obsluzhivanie_odessa" class="link">и
                    туманной
                    системы</a></p>
        </div>

    </div>
    <div id="project" class="uk-modal ">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Проект ландшафтного дизайна участка в Одессе</h5>

                    <p class="modal-dg__title-mini"> При проектировании на участке предусматриваются следующие
                        объекты</p>
                    <ul class="uk-list uk-list-striped">
                        <li>дорожки, площадки, газон</li>
                        <li>беседки и другие постройки</li>
                        <li>клумбы</li>
                        <li>расположение деревьев и кустарников</li>
                        <li>искусственные водоемы</li>
                        <li>и многое другое</li>
                    </ul>
                <p>Перед тем, как разработать каждый ландшафтный проект, мы выезжаем на ваш участок,
                    внимательно его исследуем и производим замеры. Далее мы предлагаем возможные
                    решения и выслушиваем ваши предпочтения и пожелания. </p>
                <p>
                    Конечный результат: 2 варианта дизайна, из которы вы выбираете наиболее понравившийся. На
                    данном этапе до окончательного утверждения вы можете внести любые изменения, скомпоновать
                    понравившиеся элементы из обоих эскизных вариантов.</p>
                <p class="modal-dg__utp">Создаем действительно особенный дизайн в соответствии с вашим бюджетом </p>
            </div>

    </div>
    <div id="trees" class="uk-modal ">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Посадка деревьев и кустарников в Одессе</h5>

            <p class="modal-dg__title-mini">Примерный план действий</p>
            <ul class="uk-list uk-list-striped">
                <li>устройство посадочных ям</li>
                <li>подсыпка плодородного грунта</li>
                <li>посадка деревьев</li>
                <li>внесение удобрений</li>
                <li>мульчирование</li>
                <li>полив</li>
                <li>установка растяжек при необходимости</li>
                <li>консультация по уходу</li>
            </ul>
            <p>Если у вас нет ландшафтного проекта, мы поможем вам определиться с видом растений и местом для их
                посадки. Работаем в соответствии с правилами высадки и ухода, поэтому гарантируем, что саженцы и
                крупномеры отлично приживутся.
            </p>
            <p>Имейте ввиду, что оптимальным временем для посадки считается ранняя весна или осень. Лето -
                худшее время для посадки любых растений.
            </p>

            <p class="modal-dg__utp">Бережно посадим выбранные вами растения </p>
        </div>
    </div>
    <div id="compos" class="uk-modal ">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Ландшафтные композиции в Одессе</h5>

            <p class="modal-dg__title-mini">Виды композиций</p>
            <ul class="uk-list uk-list-striped">
                <li>Альпинарий</li>
                <li>Рокарий</li>
                <li>Подпорная стенка</li>
                <li>Японский сад камней</li>
                <li>Композиция из кустарников, деревьев</li>
            </ul>
            <p>Ландшафтная композиция помогает придать вашему саду смысловую законченность и правильно расставляет
                акценты.
            </p>
            <p>
            </p>
            <p class="modal-dg__utp">Бережно посадим выбранные вами растения </p>
        </div>
    </div>
    <div id="flower" class="uk-modal ">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Посадка цветников в Одессе</h5>

            <p class="modal-dg__title-mini">Примерный план действий</p>
            <ul class="uk-list uk-list-striped">
                <li>устройство посадочных ям</li>
                <li>подбор и подсыпка оптимальной почвосмеси для разных видов растений</li>
                <li>посадка деревьев</li>
                <li>внесение удобрений</li>
                <li>мульчирование</li>
                <li>полив</li>
                <li>установка растяжек при необходимости</li>
            </ul>
            <p>Если у вас нет ландшафтного проекта, мы поможем вам определиться с видом растений и местом для их
                посадки. Работаем в соответствии с правилами высадки и ухода, поэтому гарантируем, что саженцы и
                крупномеры отлично приживутся.
            </p>
            <p>Имейте ввиду, что оптимальным временем для посадки считается ранняя весна или осень. Лето -
                не лучшее время для посадки любых растений.
            </p>
            <p>
                Конечный результат: посаженные деревья и кустарники, консультация по дальнейшему уходу за
                ними.
                .</p>
            <p class="modal-dg__utp">Бережно посадим выбранные вами растения </p>
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
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:400}" class="uk-width-1-3 container-snake__el container-snake__el_four">  Вносите предоплату </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:500}" class="uk-width-1-3
            container-snake__el container-snake__el_four">  Подготавливаем территорию (убираем лишнее,вывозим мусор,
                готовим
                котлованы и траншеи) </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:600}" class="uk-width-1-3
            container-snake__el container-snake__el_five">  Проводим инженерно-строительные работы (прокладываем
                коммуникации, засыпаем грунт, проводим разметку под декоративные и растительные элементы) </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:700}" class="uk-width-1-3
            container-snake__el container-snake__el_six">  Располагаем декоративные элементы и садим растения </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:800}" class="uk-width-1-3
            container-snake__el container-snake__el_seven">  Оплачиваете выполненную работу </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:900}" class="uk-width-1-3
            uk-container-center container-snake__el container-snake__el_eight">  Готово!  </p>

        </div>
        <div class="wrap-center">
            <form class="uk-form" method="post" onsubmit="ga('send',
            'event', 'form', 'form_otpravit');">
                <button class="uk-button zayavka-btn" type="submit" >Оставить заявку на разработку ландшафтного дизайна</button>
            </form>
        </div>



    </div>
</section>


<?php get_template_part( 'template-parts/preimushestva' );?>

<section id="accordion" class="accordion accordion_padding cnt cnt_black" >
    <div class="uk-container uk-container-center">
        <h2 class="title title_white">Часто задаваемые вопросы</h2>

        <div class="uk-accordion" data-uk-accordion>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}"
            >Из каких этапов состоит процесс создания ландшафтного дизайна?
            </h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}">
                <ol class="uk-list uk-list-line">
                    <li>Наш специалист выезжает на участок для проведения предпроектного анализа.</li>
                    <li> Составляем техническое задание - подгоняем ваши пожелания в реальные возможные воплощения
                    </li>
                    <li> Еще один выезд для точных замеров участка при помощи специальных технических
                        средств. Составляем ситуационный план - важный графический документ, который включает в себя
                        несколько схем земельного участка.
                    </li>
                    <li> Разрабатываем концепцию, выбираем стили, создаем предварительные эскизные предложения в 2-х
                        вариантах. На них в общем виде представлены элементы ландшафта, отвечающие утвержденному
                        техническому
                        заданию.
                    </li>
                    <li>Создаем рабочий дизайн-проект со всей технической документацией. В этом проекте включены все
                        понравившиеся вам элементы из обоих эскизных вариантов.
                    </li>
                    <li>Подготавливаем территорию. Очищаем все от мусора, раскапываем котлованы и разравниваем
                        неровности ландшафта, готовим траншеи под коммуникации.
                    </li>
                    <li>Прокладываем коммуникации (например, для автополива и системы тумана), завозим грунт, мостим
                        дорожки, делаем разметку под
                       растения и декоративные элементы
                    </li>
                    <li>Располагаем декоративные элементы, высаживаем растения, стелим рулонный газон.
                    </li>
                    <li>Готово! Все работы завершаем в срок и выдаем дальнейшие рекомендации по уходу за территорией
                        и установленным оборудованием.
                    </li>

                </ol>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}"
            >Сколько времени занимают все процессы?
            </h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}">
                <p>
                    Конкретные сроки зависят от размеров участка и сложности исполнения работ. В среднем это занимает от
                    одного-двух месяцев. К работам приступаем практически в любое время, учитывая правила посадки выбранных растений, кроме морозов и сильной жары.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:300}" >Бытует мнение, что ландшафтный дизайн, который показывают на картинках дизайнеры, не соответствует реальности. Так ли это?
            </h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:300}">
                <p>
                    И да, и нет. Все зависит от растений, а точнее от их возраста. Если использовать молодые растения, то дизайн действительно будет отличаться от картинки. Это происходит потому, что своего апогея растения достигают через некоторое время после посадки.</p>

                <p> Если вы хотите, чтобы было сразу красиво, как на картинке, можно использовать взрослые растения и крупномеры. Правда, стоит учесть, что такой вариант будет существенно дороже.
                    Иногда намного увлекательнее посадить молодые растения и наблюдать, как они растут и превращают ваш сад в сказку.

                </p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade', delay:400}" >Так что
                необходимо для начала работ?</h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}">
               <ul class="uk-list uk-list-line">
                   <li>Cогласование технического задания</li>
                   <li>Актуальный дизайн проект со всеми техническими данными</li>
                   <li>Определение объемов и видов работ</li>
                   <li>Согласование сметы</li>
                   <li>Подписание договора</li>
               </ul>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:500}" >Хочу, чтобы мой участок был красивым, но не до конца понимаю как именно он должен выглядеть. Вы можете с этим помочь?
            </h3>
            <div class="uk-accordion-content" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}">
                <p>
                    Мы довольно часто сталкиваемся с подобным вопросом. Основываясь на своем опыте, наши специалисты предложат разнообразные варианты и с радостью помогут вам визуализировать ваши представления об идеальном участке с помощью ландшафтного проектирования.
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
            <form class="uk-form" method="post" onsubmit="ga('send',
             'event', 'form', 'form_voprosu');">

                <fieldset data-uk-margin>
                    <input class="input_in-wht-bkg" type="text" name="name" placeholder="Ваше имя">
                    <input class="input_in-wht-bkg" type="text"  name="phone" required placeholder="Номер телефона*">
                    <button class="uk-button" type="submit" >Отправить</button>
                </fieldset>

            </form>

        </div>
    </div>
</section>

<?php get_template_part( 'footer' );?>
