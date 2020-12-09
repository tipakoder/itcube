<?php
?>

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
?>
<head>

    <meta charset="utf-8">

    <title>Заголовок</title>
    <meta name="description" content="">

    <!-- Bootstrap v3.3.4 Grid Styles -->
    <!-- Header CSS (First Sections of Website: compress & paste after release from _header.css here) -->
    <style></style>

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

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <script>var info = JSON.parse('<?= $info ?>');</script>
    <link rel="stylesheet" href="libs/f.css">
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

    loadCSS('/libs/materialize/css/materialize.min.css')
    loadCSS('/libs/fontawsome/fontawesome-free-5.13.0-web/css/all.min.css')
    loadCSS("_main.css");
    loadCSS("_header.css");
    loadCSS("_media.css");
</script>

<header>
    <div class="navbar-fixed">
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">
                        <img class="logo-big" style="height: 50px; margin-top: 7px;" src="https://itc60.ru/app/itcube/assets/style/images/logo_w.png" alt="">
                        <img class="logo-small" style="height: 50px; margin-top: 7px;" src="/img/logo_big.png" width="50" alt="">
                    </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down sidenav" id="mobile-demo">
                        <li><a href="/#about-us">О проекте</a></li>
                        <li><a href="/#directions">Направления</a></li>
                        <li><a href="/#news">Новости</a></li>
                        <li><a href="/#faq">Вопросы</a></li>
                        <li><a href="/#activity">Расписание</a></li>
                        <li class="active"><a href="/team.php">Команда</a></li>

                        <!-- Dropdown Trigger -->
                        <!--                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i-->
                        <!--                                        class="material-icons right">arrow_drop_down</i></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<style>
    .team-image {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div id="team" class="section">
    <div class="container">
    <h2>Наша команда</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="team-image">
                <img class="materialboxed" src="https://it-cube48.ru/wp-content/uploads/2020/03/itcube48_1_2.png" alt="">
            </div>
            <p class="team-name">Василков Василий</p>
            <p class="team-dol">Профессор безделья</p>
        </div>
    </div>
</div>


<footer class="footer-distributed">
    <div class="container">
        <div class="row">
            <div class="footer-left col-md-4">

                <p class="footer-links">
                    <a href="/">Главная</a>
                    ·
                    <a href="/#activity">Расписание</a>
                    ·
                    <a href="/team.php">Команда</a>
                </p>

                <p class="footer-company-name">ГАПОУ «Оренбургский колледж экономики и информатики»</p>
            </div>

            <div class="footer-center col-md-4">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>ул. Чкалова, 11 </span> Оренбург, Россия</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+7 (3532) 31-72-39</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:oksei@esoo.ru">oksei@esoo.ru</a></p>
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
<script src="/libs/materialize/js/materialize.min.js"></script>

<script>
    window.onresize = resizing;
    function resizing() {
        //if ()


        if ($(document).width() < 994) {
            document.getElementById('mobile-demo').classList.remove('hide-on-med-and-down')
            document.getElementById('mobile-demo').classList.add('sidenav');
            document.getElementById('mobile-demo').style = '';
        } else {
            document.getElementById('mobile-demo').style = '';
            document.getElementById('mobile-demo').classList.add('hide-on-med-and-down')
            document.getElementById('mobile-demo').classList.remove('sidenav');
        }
    }
    resizing();
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
</script>
</body>
</html>

