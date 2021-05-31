<?php
/*
Template Name: tumanoobrazovanie
*/
?>


<?php get_template_part( 'header' );?>


<div class="bg-top bg-top_tuman">
    <div class="uk-container  uk-container-center">

        <h1>Системы тумана под ключ<br>в Одессе и Одесской области</h1>
        <h2 class="bg-top__title">Установка, <a  class="link link_white"
                                                 href="<?php echo get_bloginfo('url'); ?>/tumanoobrazovanie_obsluzhivanie_odessa">обслуживание, ремонт</a></h2>
        <div class="form-header bg-top__form-btn">
            <h4 class="title title_mini title_white">Заказать бесплатную консультацию</h4>
            <form class="uk-form" method="post" onsubmit="ga('send',
             'event', 'form', 'form_otpravit');">

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
            <div class="uk-width-medium-5-10 image-systems image-systems_tuman">

            </div>
            <div class="uk-width-medium-5-10 text-systems">
                <h4>Туманообразование - </h4>
                <p>разновидность полива, при которой специально подобранная система позволяет распылить воду в мелкую дисперсную каплю.</p>
                <p>Как это работает? Насос под высоким давлением (70 Barr) подает небольшое количество воды в систему, которая проходит через
                    форсунки высокого давления с отверстием 0,1 мм, образуя в воздухе дымку из мельчайших частиц, которые мгновенно испаряются
                    и моментально охлаждают воздух. </p>
                <p>На текущий момент туманообразование получило очень широкое применение в ландшафтном дизайне, с целью охлаждения
                    открытых зон отдыха и летних площадок, для увлажнения необходимых участков на промышленных объектах,
                    в тепличных хозяйствах и тд. </p>
                <p>Там, где есть система охлаждения туманом, всегда царит прохлада и комфорт.</p>

            </div>
        </div>
    </div>
</section>

<section class="cnt">
    <div class="uk-container uk-container-center uk-grid "    data-uk-scrollspy="{cls:'uk-animation-fade'}">
        <h2 class="uk-width-1-1 title">Где применяют системы тумана</h2>
        <figure data-uk-modal="{target:'#house'}" class="uk-width-1-4 uk-width-medium-1-2 uk-width-small-1-1 uk-overlay
          uk-overlay-hover info-block">
                <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/tuman-besedka.png" alt="" class="uk-overlay-scale info-block__img">
                <figcaption class="uk-overlay-panel uk-ignore uk-overlay-background uk-flex uk-flex-middle  uk-flex-center info-block__text">Домовладение</figcaption>
            </figure>
        <figure data-uk-modal="{target:'#garden'}" class="uk-width-1-4 uk-width-medium-1-2 uk-width-small-1-1 uk-overlay
          uk-overlay-hover info-block">
                <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/tuman-sad.png" alt="" class="uk-overlay-scale info-block__img">
                <figcaption class="uk-overlay-panel uk-ignore uk-overlay-background uk-flex uk-flex-middle  uk-flex-center info-block__text">Сады и сельское хозяйство</figcaption>
            </figure>
        <figure data-uk-modal="{target:'#cafe'}" class="uk-width-1-4 uk-width-medium-1-2 uk-overlay  uk-overlay-hover info-block">
                <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/tuman-kafe.png" alt="" class="uk-overlay-scale info-block__img">
                <figcaption class="uk-overlay-panel uk-ignore uk-overlay-background uk-flex uk-flex-middle  uk-flex-center info-block__text">Публичные места</figcaption>
            </figure>
        <figure data-uk-modal="{target:'#industry'}" class="uk-width-1-4 uk-width-medium-1-2 uk-overlay  uk-overlay-hover info-block">
                <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/tuman-promishlennost.png" alt="" class="uk-overlay-scale info-block__img">
                <figcaption class="uk-overlay-panel uk-ignore uk-overlay-background uk-flex uk-flex-middle  uk-flex-center info-block__text">Промышленность</figcaption>
            </figure>
    </div>
    <div id="house" class="uk-modal ">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Домовладение</h5>
            <div class="uk-grid">
                <div class="uk-width-1-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Туманообразование для</p>
                    <ul class="uk-list uk-list-striped">
                        <li>беседки</li>
                        <li>террасы</li>
                        <li>навеса</li>
                        <li>открытой веранды</li>
                    </ul>
                </div>
                <div class="uk-width-2-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Выгоды</p>
                    <ul class="uk-list advant-list advant-list_mini">
                        <li class="advant-list__1 advant-list__el advant-list__el_black">мгновенное понижение температуры на <span class="advant-list__big-text"> 10-12°C</span>    </li>
                        <li class="advant-list__2 advant-list__el advant-list__el_green">повышение влажности воздуха на <span class="advant-list__big-text advant-list__big-text_white"> 30%</span></li>
                        <li class="advant-list__3 advant-list__el advant-list__el_green">
                            нейтрализация аллергенов в воздухе до<span class="advant-list__big-text
                            advant-list__big-text_white"> 60% </span></li>
                        <li class="advant-list__4 advant-list__el advant-list__el_grey">уменьшение количества насекомых в<span class="advant-list__big-text"> 5 раз</span></li>
                    </ul>
                </div>
            </div>
            <p class="modal-dg__utp">Туманная система охлаждения - комфортное нахождение для вас и ваших гостей в жаркую погоду</p>
        </div>
    </div>
    <div id="garden" class="uk-modal">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Сады и сельское хозяйство</h5>
            <div class="uk-grid">
                <div class="uk-width-1-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Туманообразование для</p>
                    <ul class="uk-list uk-list-striped">
                        <li>сада</li>
                        <li>зимнего сада</li>
                        <li>огорода</li>
                        <li>теплицы</li>
                        <li>грибницы</li>
                        <li>гидропоники</li>
                    </ul>
                </div>
                <div class="uk-width-2-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Выгоды</p>
                    <ul class="uk-list advant-list advant-list_mini">
                        <li class="advant-list__1 advant-list__el advant-list__el_black">снижение потребления воды для орошения на <span class="advant-list__big-text">15%</span>    </li>
                        <li class="advant-list__2 advant-list__el advant-list__el_green">меньшая необходимость в поливе </li>
                        <li class="advant-list__3 advant-list__el advant-list__el_green">меньшая потребность в наличии тени</li>
                        <li class="advant-list__4 advant-list__el advant-list__el_grey">поддержание постоянного уровня влажности</li>
                        <li class="advant-list__5 advant-list__el advant-list__el_black">ускорение роста растений</li>
                    </ul>
                </div>
            </div>
            <p class="modal-dg__utp">Туманная система охлаждения - меньше мороки, больше урожай</p>
        </div>
    </div>
    <div id="cafe" class="uk-modal">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Публичные места</h5>
            <div class="uk-grid">
                <div class="uk-width-1-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Туманообразование для</p>
                    <ul class="uk-list uk-list-striped">
                        <li>кафе и ресторанов</li>
                        <li>летних площадок</li>
                        <li>гостинниц</li>
                        <li>развлекательных парков</li>
                        <li>пляжей</li>
                        <li>витрин магазинов</li>
                    </ul>
                </div>
                <div class="uk-width-2-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Выгоды</p>
                    <ul class="uk-list advant-list advant-list_mini">
                        <li class="advant-list__1 advant-list__el advant-list__el_black">мгновенное понижение температуры на <span class="advant-list__big-text"> 10-12°C</span>    </li>
                        <li class="advant-list__2 advant-list__el advant-list__el_green">повышение влажности воздуха на <span class="advant-list__big-text advant-list__big-text_white"> 30%</span></li>
                        <li class="advant-list__3 advant-list__el advant-list__el_green">блокирация аллергенов в воздухе более<span class="advant-list__big-text advant-list__big-text_white"> 60% </span></li>
                        <li class="advant-list__4 advant-list__el advant-list__el_grey">уменьшение количества насекомых в<span class="advant-list__big-text"> 5 раз</span></li>
                        <li class="advant-list__5 advant-list__el advant-list__el_black">снижение количества пыли на <span class="advant-list__big-text"> 85-90%</span></li>
                    </ul>
                </div>
            </div>
            <p class="modal-dg__utp">Туманная система охлаждения - рост привлекательности и имиджа заведения, увеличение времени
            нахождения посетителей</p>

        </div>
    </div>
    <div id="industry" class="uk-modal">
        <div class="uk-modal-dialog modal-dg">
            <a class="uk-modal-close uk-close"></a>
            <h5 class="modal-dg__title">Промышленность</h5>
            <div class="uk-grid">
                <div class="uk-width-1-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Туманообразование для</p>
                    <ul class="uk-list uk-list-striped"
                        <li>животноводства</li>
                        <li>птицеводства</li>
                        <li>текстильной фабрики</li>
                        <li>типографики</li>
                        <li>фармацевтики</li>
                        <li>деревообрабатывающей промышленности</li>
                    </ul>
                </div>
                <div class="uk-width-2-3 modal-dg__block">
                    <p class="modal-dg__title-mini">Выгоды</p>
                    <ul class="uk-list advant-list advant-list_mini">
                        <li class="advant-list__1 advant-list__el advant-list__el_black">мгновенное понижение температуры на <span class="advant-list__big-text"> 10-12°C</span>    </li>
                        <li class="advant-list__2 advant-list__el advant-list__el_green">локализованное охлаждение воздуха</li>
                        <li class="advant-list__3 advant-list__el advant-list__el_green">снижение пыли, газа, дыма и других вредных веществ до <span class="advant-list__big-text advant-list__big-text_white"> 90% </span></li>
                        <li class="advant-list__4 advant-list__el advant-list__el_grey">снижение тепловой нагрузки на  <span class="advant-list__big-text"> 50%</span></li>
                        <li class="advant-list__5 advant-list__el advant-list__el_black">снижение заболеваемости сотрудников на  <span class="advant-list__big-text"> 30%</span></li>
                    </ul>
                </div>
            </div>
            <p class="modal-dg__utp">Туманная система охлаждения - </p>

        </div>
    </div>
</section>



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
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:400}" class="uk-width-1-3 container-snake__el container-snake__el_four">  Вносите предоплату за комплектующие </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:500}" class="uk-width-1-3 container-snake__el container-snake__el_five">  Устанавливаем систему тумана </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:600}" class="uk-width-1-3 container-snake__el container-snake__el_six">  Оплачиваете выполненную работу </p>
            <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true,  delay:700}" class="uk-width-1-3 uk-container-center container-snake__el container-snake__el_seven">  Готово! Наслаждайтесь туманом в любое время </p>

        </div>
        <div class="wrap-center">
            <span class="uk-button zayavka-btn">Оставить заявку на систему тумана</span>
        </div>

    </div>
</section>


<?php get_template_part( 'template-parts/preimushestva' );?>



<section id="accordion" class="cnt cnt_black accordion" >
    <div class="uk-container uk-container-center">
        <h2 class="title title_white">Часто задаваемые вопросы</h2>

        <div class="uk-accordion" data-uk-accordion>


            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:100}" >Почему системы высокого давления дороже систем низкого давления и в чем отличие между ними?</h3>
            <div class="uk-accordion-content">
                <p>
                    Разница в размере получаемых капель. В системах низкого давления капли на порядок больше (50-100 микрон), поэтому они менее эффективны для
                    охлаждения и увлажнения. Эта система не годится для установки, например, в кафе - пол, столы и посетители будут мокрыми.
                </p>
                <p>
                    Мы работаем только с системами высокого давления. В такой системе вода распадается на мельчайшие капли (1-15 микрон), а получившаяся
                    водяная завеса будет не только охлаждать, но и останавливать пыль, пыльцу и многих насекомых.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:200}" >На сколько градусов система тумана может снизить температуру?</h3>
            <div class="uk-accordion-content">
                <p>
                    Все зависит от температуры и влажности воздуха вокруг. Правильно
                    установленнная система туманообразования может понизить температуру до 10-12°C, а в сухую жаркую
                    погоду даже до 20°C.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:300}" >Какая гарантия на ваше оборудование?</h3>
            <div class="uk-accordion-content">
                <p>
                    На любую систему туманообразования гарантия 2 года.
                </p>
            </div>

            <h3 class="uk-accordion-title"  data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:400}" >Что лучше устанавливать: линии с форсунками, либо туманообразующие вентиляторы?</h3>
            <div class="uk-accordion-content">
                <p>
                    Линии с форсунками используются для охлаждения небольших площадей, либо для создания водяной завесы. Вентиляторы
                    покрывают большую площадь, мощный поток воздуха переносит
                    туман на расстояние до 15 м.
                </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:500}" >Сколько воды будет расходовать система?</h3>
            <div class="uk-accordion-content">
                <p>
                    Смотря насколько велика система. Одна форсунка за минуту расходует около 80 мл. </p>
            </div>

            <h3 class="uk-accordion-title" data-uk-scrollspy="{cls:'uk-animation-fade',  repeat: true,  delay:600}" >Нужно ли готовить систему тумана к зиме?</h3>
            <div class="uk-accordion-content">
                <p>
                    Да. Нужно демонтировать форсунки и насос (если он стот в неотапливаемом помещении).
                </p>
            </div>

        </div>
    </div>
</section>



<?php get_template_part( 'template-parts/voprosi' );?>
<?php get_template_part( 'template-parts/uslugi' );?>

<?php get_template_part( 'footer' );?>

