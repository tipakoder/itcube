<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
$info = json_encode(json_decode(file_get_contents('info.json'), true), JSON_UNESCAPED_UNICODE);
$slider = json_decode(file_get_contents('slider.json'), true);

//подключаем базу
require_once "db/db.php";
?>
<head>

    <meta charset="utf-8">

    <title>Центр цифрового образования детей IT-Куб, г. Оренбург, ГАПОУ "ОКЭИ"</title>
    <meta name="description" content="">

    <!-- Bootstrap v3.3.4 Grid Styles -->
    <!-- Header CSS (First Sections of Website: compress & paste after release from _header.css here) -->
    <style></style>
    <link rel="stylesheet" href="_addon.css">

    <!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
    <script>!function () {
            function e(e, t, n) {
                e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
            }

            function t(e) {
                return window.localStorage && localStorage.font_css_cache && localStorage.font_css_cache_file === e
            }

            function n() {
                if (window.localStorage && window.XMLHttpRequest) if (t(o)) a(localStorage.font_css_cache); else {
                    var n = new XMLHttpRequest;
                    n.open("GET", o, !0), e(n, "load", function () {
                        4 === n.readyState && (a(n.responseText), localStorage.font_css_cache = n.responseText, localStorage.font_css_cache_file = o)
                    }), n.send()
                } else {
                    var c = document.createElement("link");
                    c.href = o, c.rel = "stylesheet", c.type = "text/css", document.getElementsByTagName("head")[0].appendChild(c), document.cookie = "font_css_cache"
                }
            }

            function a(e) {
                var t = document.createElement("style");
                t.innerHTML = e, document.getElementsByTagName("head")[0].appendChild(t)
            }

            var o = "_fonts.css";
            window.localStorage && localStorage.font_css_cache || document.cookie.indexOf("font_css_cache") > -1 ? n() : e(window, "load", n)
        }();</script>

    <!-- Load CSS Compilled without JS -->
    <noscript>
        <link rel="stylesheet" href="compiled.min.css">
    </noscript>
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap-grid.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
    <script>var info = JSON.parse('<?= $info ?>');</script>
    <link rel="stylesheet" href="/libs/f.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

<script>
    function loadCSS(hf) {
        var ms = document.createElement("link");
        ms.rel = "stylesheet";
        ms.href = hf;
        document.getElementsByTagName("head")[0].appendChild(ms);
    }

    loadCSS("/libs/slick-1.8.1/slick/slick.css");
    loadCSS("/libs/slick-1.8.1/slick/slick-theme.css");
    loadCSS('/libs/materialize/css/materialize.min.css')
    loadCSS('/libs/fontawsome/fontawesome-free-5.13.0-web/css/all.min.css')
    loadCSS("_main.css");                //User Styles: Main
    loadCSS("_header.css");              //Header Styles (compress & paste to header after release)
    loadCSS("_media.css");               //User Styles: Media
</script>

<header>
    <div class="navbar-fixed">
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">
                        <img class="logo-big" style="height: 50px; margin-top: 7px;" src="/img/logo_w2.png" alt="">
                        <img class="logo-small" style="height: 50px; margin-top: 7px;" src="/img/logo_big.png" width="50" alt="">
                    </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down sidenav" id="mobile-demo">
                        <li><a href="#about-us">О проекте</a></li>
                        
                        <li><a href="#directions">Направления</a></li>

                        <li><a href="#news">Новости</a></li>
                        <!-- <li><a href="#activity">Расписание</a></li> -->
                        <li><a href="#faq">Вопросы</a></li>
                        <!-- <li><a href="team.php">Команда</a></li> -->
                        <li><a href="#about_us">О нас</a></li>
                        <li><a href="#document">Документы</a></li>
                        <!-- Dropdown Trigger -->
<!--                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i-->
<!--                                        class="material-icons right">arrow_drop_down</i></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>

<div class="header-slider">

    <div class="header-slider-item">
        <div class="header-slide-image" style="background-image: url('/img/1.jpg');"></div>
        <div class="overview"></div>
        <div class="header-slider-container">
            <h2>Центр цифрового образования детей "IT-куб"</h2>
            <!-- <a class="primary-btn modal-trigger slider-button" href="#directions">Подать заявку</a> -->
            <!--                <button class="primary-btn slider-button"-->
            <!--                        data-name="sisAdmin"></button>-->
        </div>
    </div>


</div>


<div>
    <!-- Modal Structure -->
    <div id="image_modal" class="modal modal-fixed-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
        <img src="" alt="">
    </div>

    <div id="about-us" class="section">
        <div class="container">
        <h2>О проекте</h2>
        <div class="row">
            <div class="col-md-6 text-main">
                <p>
                    Центр «IT-куб» – площадка дополнительного образования детей по программам, направленным на ускоренное освоение актуальных и востребованных знаний, навыков и
                    компетенций в сфере информационных технологий.
                    <br><br>
                    Целью создания центра цифрового образования детей «IT-куб» является - создание инфраструктурной площадки для приобщения учащихся к инновационной, практико-ориентированной деятельности в сфере информационных технологий, робототехники и IT-инжиниринга. Данный проект нацелен на популяризацию технических профессий, увеличение охвата учащихся IT-технологиями и направлен на раннюю профессиональную ориентацию.
                    <br><br>
                    Центр цифрового образования детей «IT-куб» в Оренбургской области создаётся на базе Государственного автономного профессионального образовательного учреждения «Оренбургский колледж экономики и информатики».
                    <br><br>
                    По дополнительным образовательным программам на базе созданного центра ежегодно будет заниматься более 400 детей в возрасте 7 - 17 лет. Обучение для детей бесплатное - за счет средств регионального бюджета. Более 1500 человек ежегодно будут принимать участие в мероприятиях, акциях, мастер-классах, воркшопах и т.д.
                    Предполагаемая дата начала занятий - сентябрь 2020 года.
                </p>
            </div>
            <div class="col-md-6">
                <div class="prev prev-next"><i class="material-icons">navigate_next</i></div>
                <div class="next prev-next"><i class="material-icons">navigate_before</i></div>
                <div class="about-image">
                    <div class="about-image-item item1" data-img="/img/slider_rooms/python.jpg" style="background-image: url('/img/slider_rooms/python.jpg')">

                    </div>
                    <div class="about-image-item item1" data-img="/img/slider_rooms/mobile.jpg" style="background-image: url('/img/slider_rooms/mobile.jpg')">

                    </div>
                    <div class="about-image-item item1" data-img="/img/slider_rooms/net.jpg" style="background-image: url('/img/slider_rooms/net.jpg')">

                    </div>
                    <div class="about-image-item item1" data-img="/img/slider_rooms/robo.jpg" style="background-image: url('/img/slider_rooms/robo.jpg')">

                    </div>
                    <div class="about-image-item item1" data-img="/img/slider_rooms/vr.jpg" style="background-image: url('/img/slider_rooms/vr.jpg')">

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    

    <div id="directions" class="section">
        <div class="container">
            <h2>Направления</h2>
            <div class="directions">
                <div class="directions-sidebar">
                    <ul>
                        <li>
                            <a class="dir-href selected-direction" onclick="event.preventDefault()" data-steps="true" data-dir="1">
                                <i class="fab fa-python dir-icon" style="font-size: 35px;margin-left: 11px;"></i>
                                <p class="dir-title">Программирование на Python / Яндекс.Лицей</p>
                            </a>
                        </li>
                        <li>
                            <a class="dir-href" onclick="event.preventDefault()" data-steps="true" data-dir="2">
                                <i class="fas fa-mobile dir-icon" style="font-size: 34px;
    margin-left: 16px;"></i>
                                <p class="dir-title">Мобильная разработка / IT Школа Samsung</p>
                            </a>
                        </li>
                        <li>
                            <a class="dir-href" onclick="event.preventDefault()" data-dir="3">
                                <i class="fas fa-vr-cardboard dir-icon" style="    font-size: 31px;
    margin-left: 8px;"></i>
                                <p class="dir-title">Разработка VR/AR приложений</p>
                            </a>
                        </li>
                        <li>
                            <a class="dir-href" onclick="event.preventDefault()" data-dir="4">
                                <i class="fas fa-brain dir-icon" style="font-size: 35px;
    margin-left: 8px;"></i>
                                <p class="dir-title">Искусственный Интеллект</p>
                            </a>
                        </li>
                        <li>
                            <a class="dir-href" onclick="event.preventDefault()" data-dir="5">
                                <i class="fas fa-network-wired dir-icon" style="font-size: 30px;margin-left: 10px;"></i>
                                <p class="dir-title">Сетевое администрирование</p>
                            </a>
                        </li>
                        <li>
                            <a class="dir-href" onclick="event.preventDefault()" data-dir="6">
                                <i class="fas fa-robot dir-icon" style="    font-size: 32px;
    margin-left: 8px;"></i>
                                <p class="dir-title">Мобильная робототехника</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="direction-body">
                    <div class="direction-item" id="direction1">
                        <div class="row">
                            <div class="col-md-12 direction-body-text">
                                <div class="direction1 dir-current">
                                    <h4>Программирование на Python / Яндекс.Лицей</h4>
                                    Выпускники получат практические навыки программирования на языке Python, научатся решать задачи на анализ статистических данных, обработке графической информации (построение графических фильтров)
                                    <br><br>
                                    Яндекс.Лицей — это образовательный проект Яндекса по обучению школьников программированию.
                                    <br><br>
                                    Python — один из самых популярных языков в мире, применение ему находится и в YouTube, и в NASA, и в Яндексе. А ещё он называется в честь «Летающего цирка Монти Пайтона».
                                    Учебная программа разработана в Школе анализа данных, а будущие преподаватели проходят там специальное обучение. Программа делится на две части, каждая продолжается один учебный год. Курсы можно проходить только последовательно.
                                    <br><br>
                                    Возраст: 14 – 16 лет (8-9 класс)<br><br>

                                    Как поступить:
                                    <ul class="browser-default">
                                       <li>Заполнить заявку на обучение на сайте программы, указав площадку ГАПОУ "ОКЭИ": <a target="_blank" href="https://yandexlyceum.ru/okei">yandexlyceum.ru/okei</a></li>
                                        <li>Пройти конкурсный отбор: инструкции придут на ящик почты, указанный при регистрации.</li>
                                    </ul>
                                </div>
                                <div class="direction2 dir-hide">
                                    <h4>Мобильная разработка / IT Школа Samsung</h4>
                                    Партнер программы: Samsung<br><br>
                                    В течение года, шаг за шагом, учащимся предлагается пройти 5 учебных модулей, включая: основы программирования на языке Java, объектно-ориентированное программирование, алгоритмы и структуры данных, основы программирования Android приложений, алгоритмы и структуры данных на языке Java, основы разработки серверной части мобильных приложений.
                                    Преимущества обучения: <br>
                                    <br>
                                    •	Очный годовой курс с сертифицированным преподавателем;
                                    <br>
                                    •	Навыки самостоятельной разработки на языке Java на платформе Android;
                                    <br>
                                    •	Выпускной проект – собственное мобильное приложение;
                                    <br>
                                    •	По результатам успешного окончания программы и защиты проекта учащимся вручается сертификат от компании Samsung.
                                    <br>
                                    •	Возможность получить дополнительные баллы при поступлении в 19 ведущих вузов России.
                                    <br>
                                    <br>
                                    Программа ориентирована на учащихся старших классов (9-10 класс) и колледжей (возраст до 17 лет на момент начала обучения)
                                    1 учебный год, с сентября по май. Занятия проходят 2 раза в неделю по 2 ак. часа в очном формате в группах с преподавателем.
                                    Лучшие проекты выпускников: https://myitschool.ru/apps/index.php
                                    <br><br>


                                    Как поступить:
                                    <ul class="browser-default">
                                        <li>Заполнить заявку на обучение на сайте программы: <a
                                                    href="https://myitschool.ru/" target="_blank">myitschool.ru</a></li>
                                        <li>Пройти конкурсный отбор: инструкции придут на ящик почты, указанный при регистрации.</li>
                                    </ul>
                                </div>
                                <div class="direction3 dir-hide">
                                    <h4>Разработка VR/AR приложений</h4>
                                    Партнер программы: ФГАУ «Фонд новых форм развития образования».
                                    <br><br>
                                    Virtual Reality или Виртуальная реальность – это искусственный мир, созданный средствами компьютерного моделирования, имитация реального мира.
                                    <br><br>
                                    Augmented Reality или Дополненная реальность – технология интерактивной компьютерной визуализации, которая дополняет реальный мир виртуальными элементами и дает возможность взаимодействовать с ними.
                                    <br><br>
                                    Курс научит разрабатывать собственные виртуальные миры (с помощью платформы Unity3D и программы 3Dmax) и управлять ими.
                                    <br><br>
                                    Будущие VR-щики не просто изучат программирование и моделирование, но и самостоятельно придумают приложения на интересную тему – образовательную, медицинскую или туристическую, например. Параллельно с работой в команде обучающийся прокачает востребованные сегодня навыки программирования и моделирования.
                                    <br><br>
                                    Возраст: 12-17 лет.
                                </div>
                                <div class="direction4 dir-hide">
                                    <h4>Искусственный интеллект</h4>
                                    Ассоциация лабораторий по развитию искусственного интеллекта (АЛРИИ) - некоммерческая организация, объединяющая в себе более 50 научных коллективов, малых и средних технологических компаний, лабораторий в области машинного/глубокого обучения
                                    <br>
                                    Программа направлена на исследования и построение искусственного интеллекта (а именно базовых алгоритмов машинного обучения и глубокого обучения) с помощью простого языка и серии кейсов для детей 9-11 классов.
                                    <br><br>
                                    <b>О курсе</b> <br>
                                    - 72 часовой блок <br>
                                    - 1 раз в неделю 2 академических часа подряд <br>
                                    - Обучение исключительно через лабораторные работы и прикладную деятельность <br>
                                    - 100% вовлеченности (интерактив и защита работ) <br>
                                    - Дистанционное подключения реальных разработчиков <br>
                                    - Бизнес задачи от реальных заказчиков - Пятерочка \ Wildberries \ X5 Retail \ Концерн Калашников \ Швабе Медицина \ SkolTech и др. <br>

                                    <br><br>
                                    Возраст: от 14 лет (8-11 классы).

                                </div>
                                <div class="direction5 dir-hide">
                                    <h4>Сетевое администрирование</h4>
                                    Партнер программы: Cisco <br><br>
                                    Изучение функционирования компьютерных сетей, администрирование и настройка компьютеров и других устройств, обучение принципов построения сети с нуля и правил управления ею. Изучение как создаются электронные устройства и компоненты, создание их на практике, разбор, сборка, настройка и диагностика разных видов компьютеров и устройств, изучение основ функционирования сети Интернет
                                    <br><br>
                                    Возраст: 12-17 лет.

                                </div>
                                <div class="direction6 dir-hide">
                                    <h4>Мобильная робототехника</h4>
                                    Создание и программирование роботов и автоматизированных устройств на базе конструкторов LEGO, Arduino, VEX и др.
                                    <br><br>
                                    Возраст: 7-17 лет.
                                </div>
                            </div>

                            <div class="col-md-5 get-it-now">
                                <div class="how-to-get" style="display:none;">
                                    <h4>Как поступить</h4>
                                    <div class="htgd how-to-get-dir-1" style="display: none">
                                        <ul>
                                            <li data-step="1">Заполнить заявку на обучение на сайте программы: <a target="_blank" href="https://yandexlyceum.ru/okei">yandexlyceum.ru/okei</a></li>
                                            <li data-step="2">Пройти конкурсный отбор: инструкции придут на ящик почты, указанный при регистрации.</li>
                                        </ul>
                                    </div>
                                    <div class="htgd how-to-get-dir-2" style="display:none;">
                                        <ul>
                                            <li data-step="1">Заполнить заявку на обучение на сайте программы: <a target="_blank" href="https://myitschool.ru/">myitschool.ru</a></li>
                                            <li data-step="2">Пройти конкурсный отбор: инструкции придут на ящик почты, указанный при регистрации.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="requisition">
                                    <h4>Подать заявку</h4>

                                    <div class="row">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input id="first_name" type="text" class="validate">
                                                    <label for="first_name">Имя</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="last_name" type="text" class="validate">
                                                    <label for="last_name">Фамилия</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="direction">
                                                        <option value="" disabled selected>Выберите</option>
                                                        <option value="1">Программирование на Python / Яндекс.Лицей</option>
                                                        <option value="2">Мобильная разработка / IT Школа Samsung</option>
                                                        <option value="3">Разработка VR/AR приложений</option>
                                                        <option value="4">Искусственный интеллект</option>
                                                        <option value="5">Сетевое администрирование</option>
                                                        <option value="6">Мобильная робототехника</option>
                                                    </select>
                                                    <label>Направление</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input id="phone" type="text" class="validate" data-mask="+7 (000) 000 00 00" placeholder="+7 (___) ___ __ __">
                                                    <label for="phone">Номер телефона</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="email" type="email" class="validate">
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div style="display: flex;justify-content: center;"><button class="btn waves-effect waves-light" type="submit" name="action">Отправить</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<!-- Новости -->
	
    <?php 
        //получаем список новостей из базы
        $_news = $db->query('SELECT * FROM news ORDER BY ID DESC LIMIT 3');
    ?>

    <div id="news" class="section">
        <div class="container">
        <h2>Новости</h2>
        <div class="row list">
            <?php foreach($_news as $news): ?>
                <div class="card item" id="news_<?php echo $news['ID'];?>">
                    <div class="card-image cover">
                        <img src="<?php echo $news['PHOTO']; ?>">
                    </div>
                    <div class="card-content text-main">
                        <span class="card-title title"><?php echo $news['NAME']; ?></span>
                        <p><?php echo $news['SHORT_TEXT']; ?></p>
                    </div>
                    <div class="card-action">
                        <a href="/article.php?id=<?php echo $news['ID']; ?>">Подробнее</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <a href="/news.php" class="all-news styledbox">Все новости</a>
        </div>
        </div>
    </div>
	

	<!-- Расписание -->
	<!--
    <div id="activity" class="section">
        <div class="container">
            <h2>Расписание</h2>
            <div class="active">
                <iframe src="https://calendar.yandex.ru/week?embed&layer_ids=10598121&tz_id=Asia/Yekaterinburg" height="600" frameborder="0" style="border: 1px solid #eee"></iframe>
            </div>
        </div>
    </div>
	-->
	
    <div id="faq" class="section">
        <div class="container">
            <h2>Ответы на вопросы</h2>
            <div class="faq-items col-md-7 center-block">
                <ul>
                    <li>
                        <p class="question">Я хочу записаться в "IT-куб". Мои действия?</p>
                        <p class="answer">
                            <!-- Для того, чтобы записаться на обучение необходимо нажать кнопку «Записаться» или перейти по ссылке: -->
                            Для того, чтобы записаться на обучение, позвоните по телефону +7 (3532) 42-09-30 (предпочтительный, альтернативный номер телефона: +7 (3532) 31-72-39) или отправьте сообщение на адрес itcube56@oksei.ru, указав ФИО ученика, выбранное направление обучения и номер телефона для связи
                            <!-- <a href="http://itcubekng.ru/enrollment-algorithm/" target="_blank">Алгоритм зачисления</a> -->
                        </p>
                    </li>
                    <li>
                        <p class="question">Это бесплатно?</p>
                        <p class="answer">Дети могут получить образование по перспективным направлениям ИТ-отрасли БЕСПЛАТНО, главное — успеть записаться. Следите за новыми наборами в социальных сетях и на сайте IT-Куб г.Оренбурга</p>
                    </li>
                    <li>
                        <p class="question">Я хочу заниматься, но я совсем не программист</p>
                        <p class="answer">Предусмотрена большая вариативность программ для любого из возрастов от 7 лет – каждая отвечает современным запросам ИТ-отрасли. Не обязательно уметь кодить — есть программы для самых начинающих программистов</p>
                    </li>
                    <li>
                        <p class="question">Где находится IT-Куб?</p>
                        <p class="answer">
                            IT-Куб находится по адресу: 460058 Оренбургская область, г. Оренбург, ул. Чкалова, 11
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="partners">
    <div class="container">
        <h2>Наши партнеры</h2>
        <div class="row partners-slider">
            <div class="col-sm-3"><img src="/img/136_logo.png" alt=""></div>
            <div class="col-sm-3"><img src="/img/ITCube_logo_CMYK+.png" alt=""></div>
            <div class="col-sm-3"><img src="/img/netacad logo 4_6.png" alt=""></div>
            <div class="col-sm-3"><img src="/img/1.svg" alt=""></div>
            <div class="col-sm-3"><img src="/img/SAMSUNG_IT_School_Logo_Colored.png" alt=""></div>
        </div>
    </div>
</div>

<div id="about_us" class="section">
    <div class="container">
    <h2>О нас </h2>
    <div class="col-md-10 text-main">
        <p>
            Государственное автономное профессиональное образовательное учреждение «Оренбургский колледж экономики и информатики» <br>
            Адрес: Оренбургская область, г. Оренбург, ул. Чкалова, д.11 <br> 
            Учредитель: Министерство образования Оренбургской области <br>
            Телефоны для связи: <br> 
            &nbsp;&nbsp;&nbsp;&nbsp;+7 (3532) 42-09-30 <br>
            &nbsp;&nbsp;&nbsp;&nbsp;+7 (3532) 31-72-39 <br>
            Mail: <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:spo08@mail.orb.ru">spo08@mail.orb.ru</a><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:itcube56@oksei.ru">itcube56@oksei.ru</a><br>
            Ссылка на наш сайт: <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://oksei.ru/">https://oksei.ru</a><br>
            Центр цифрового образования детей «IT-куб» <br>
            Руководитель структурного подразделения «IT-куб»: Дубская Екатерина Сергеевна <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Тел: +79878832424 <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Эл.почта: <a href="mailto:ekaterina.dubskaya@yandex.ru">ekaterina.dubskaya@yandex.ru</a><br>
            Заместитель руководителя структурного подразделения «IT-куб»: Горюнова Анна Михайловна <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Тел: +79226286657 <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Эл.почта:<a href="mailto:gorjynv@yandex.ru">gorjynv@yandex.ru</a><br><br>
            Режим работы: <br>
            Понедельник - пятница с 8:00 до 18:00 <br>
            Суббота с 9:00 до 17:00, воскресенье — выходной <br>
        </p>
    </div>
    </div>
</div>
<div id="document">
    <div class="container">
        <h2>Документы</h2>
        <p style="text-indent:20px">1. <a href="#">Устав организации</a></p>
        <p style="text-indent:20px">2. <a href="#">Лицензия на осуществление образовательной деятельности</a></p>
        <p style="text-indent:20px">3. <a href="#">План работы организации</a></p>
        <p style="text-indent:20px">4. <a href="#">Информация о порядке зачисления детей</a></p>
        <p style="text-indent:20px">5. <a href="#">Расписание</a></p>
        <p style="text-indent:20px">6. Утвержденные и реализуемые образовательные программы (таблица ниже)</p>
    </div>    
</div>
<div class="tab-5">
    <div class="container">
    <b><span><center>Центр цифрового образования детей "IT-КУБ"</center></span></b>
    <table class="table" border="1" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td>Наименование программы</td>
                    <td><span>Форма обучения</span></td>
                    <td><span>Нормативный срок обучения, количество часов</span></td>
                </tr>
               <tr>
                   <td><a href="https://yadi.sk/i/eplVBQmErt_rwg">Дополнительная общеобразовательная (общеразвивающая) программа «Основы искусственного интеллекта»</a></td>
                   <td>Очная</td>
                   <td>72</td>
               </tr>
               <tr>
                   <td><a href="https://yadi.sk/i/a2yfXmAZw0bRRA">Дополнительная общеобразовательная
                        (общеразвивающая) программа
                        «Разработка AR/VR приложений»</a></td>
                   <td>Очная</td>
                   <td>72</td>
               </tr>
               <tr>
                   <td><a href="https://yadi.sk/i/s39koBEGNE1zOw">Дополнительная общеобразовательная
                        (общеразвивающая) программа
                        «Основы работы с микроконтроллерами
                        Arduino»</a></td>
                   <td>Очная</td>
                   <td>72</td>
               </tr>
               <tr>
                   <td><a href="https://yadi.sk/i/SExSUd3Ft26eTw">Дополнительная общеобразовательная
                        (общеразвивающая) программа
                        «Робототехника»</a></td>
                   <td>Очная</td>
                   <td>72</td>
               </tr>
                <tr>
                   <td><a href="#">Дополнительная общеобразовательная
                        (общеразвивающая) программа
                        «Основы программирования на языке
                        Python (углубленный уровень)»</a></td>
                   <td>Очная</td>
                   <td>144</td>
               </tr>
               <tr>
                   <td><a href="https://yadi.sk/i/7_RfewX_o8NR1w">Дополнительная общеобразовательная
                        (общеразвивающая) программа
                        «Мобильная разработка»</a></td>
                   <td>Очная</td>
                   <td>132</td>
               </tr>
                <tr>
                   <td><a href="https://yadi.sk/i/vWaSzJ2vIKBXpA">Дополнительная общеобразовательная
                        (общеразвивающая) программа
                        «Системное администрирование.
                        Базовый уровень»</a></td>
                   <td>Очная</td>
                   <td>72</td>
               </tr>
               <tr>
                   <td><a href="https://yadi.sk/i/IoNgcX3XtPjCGA">Дополнительная общеобразовательная
                        (общеразвивающая) программа
                        «Основы промышленного
                        программирования»</a></td>
                   <td>Очная</td>
                   <td>168</td>
               </tr>
                </tbody>
            </table>
    </div>
</div>


<footer class="footer-distributed">
<div class="container">
    <div class="row">
        <div class="footer-left col-md-4">

            <!-- <p class="footer-links">
                <a href="/">Главная</a>
                ·
                <a href="/#activity">Расписание</a>
                ·
                <a href="/team.php">Команда</a>
            </p> -->

            <p class="footer-company-name"><a href="http://oksei.ru">ГАПОУ «Оренбургский колледж экономики и информатики»</a></p>
        </div>

        <div class="footer-center col-md-4">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>ул. Чкалова, 11 </span> Оренбург, Россия</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+7 (3532) 42-09-30</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+7 (3532) 31-72-39</p>
            </div>
			
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:oksei@esoo.ru">spo08@mail.orb.ru</a></p>
            </div>

        </div>

        <div class="footer-right col-md-4">

            <p class="footer-company-about">
                <span>Он нас</span>
                Государственное автономное профессиональное образовательное учреждение Оренбургский колледж экономики и информатики ждет всех желающих.
            </p>

            <div class="footer-icons">

                <a target="_blank" href="https://vk.com/gapou_okei"><i class="fab fa-vk"></i></a>
                <a target="_blank" href="https://www.instagram.com/okei_56/"><i class="fab fa-instagram"></i></a>

            </div>

        </div>
    </div>
</div>
</footer>

<div class="info" id="info" style="display:none;"></div>


<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<!-- Load CSS -->


<!-- Load CSS compiled without Bootstrap & Header styles (after release) -->
<script>var ms = document.createElement("link");
    ms.rel = "stylesheet";
    // ms.href="compiled.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>

<script src="libs/jquery/jquery-1.11.2.min.js"></script>
<script src="libs/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
<script src="/libs/materialize/js/materialize.min.js"></script>
<script src="libs/slick-1.8.1/slick/slick.min.js"></script>
<script src="libs/f.js"></script>
<script src="js/common.js"></script>

<span style="display:none;">
    ,
  {
    "name": "Сетевое администрирование",
    "small_desc": "Партнер Cisco",
    "button_text": "Подробнее",
    "image": "img/2.jpg",
    "info_name": "sisAdmin"
  },
  {
    "name": "Программирование на Python",
    "small_desc": "Партнер Яндекс.Лицей",
    "button_text": "Подробнее",
    "image": "img/3.jpg",
    "info_name": "sisAdmin"
  },
  {
    "name": "Разработка VT/AR приложений",
    "small_desc": "Вритуальная реальность",
    "button_text": "Подробнее",
    "image": "img/4.jpg",
    "info_name": "sisAdmin"
  },
  {
    "name": "Программирование роботов",
    "small_desc": "Arduino, VEX и др.",
    "button_text": "Подробнее",
    "image": "img/1.jpg",
    "info_name": "sisAdmin"
  },
  {
    "name": "Программирование на Java",
    "small_desc": "",
    "button_text": "Подробнее",
    "image": "img/2.jpg",
    "info_name": "sisAdmin"
  },
  {
    "name": "Мобильная разработка",
    "small_desc": "Партнер Samsung",
    "button_text": "Подробнее",
    "image": "img/3.jpg",
    "info_name": "sisAdmin"
  }
</span>

</body>
</html>