<?php
    //подключаем базу
    require_once "db/db.php";
    //получаем открытую статью
    $article = $db->query('SELECT * FROM news WHERE id = ?', [$_GET['id']])[0];
    if($article == null) {header('Location: /news.php'); exit();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article['NAME'];?></title>

    <noscript>
        <link rel="stylesheet" href="compiled.min.css">
    </noscript>
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="_addon.css">
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
                        <a href="/#!" class="brand-logo">
                            <img class="logo-big" style="height: 50px; margin-top: 7px;" src="/img/logo_w2.png" alt="">
                            <img class="logo-small" style="height: 50px; margin-top: 7px;" src="/img/logo_big.png" width="50" alt="">
                        </a>
                        <a href="/#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                        <ul class="right hide-on-med-and-down sidenav" id="mobile-demo">
                            <li><a href="/#about-us">О проекте</a></li>
                            
                            <li><a href="/#directions">Направления</a></li>

                            <li><a href="/#news">Новости</a></li>
                            <!-- <li><a href="/#activity">Расписание</a></li> -->
                            <li><a href="/#faq">Вопросы</a></li>
                            <!-- <li><a href="team.php">Команда</a></li> -->
                            <li><a href="/#about_us">О нас</a></li>
                            <li><a href="/#document">Документы</a></li>
                            <!-- Dropdown Trigger -->
    <!--                        <li><a class="dropdown-trigger" href="/#!" data-target="dropdown1">Dropdown<i-->
    <!--                                        class="material-icons right">arrow_drop_down</i></a></li>-->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <div id="news" class="section article">
        <div class="container-fluid cover" style="background-image: url(<?php echo $article['PHOTO'];?>);"></div>
        <div class="container">
            <h2 class="title"><?php echo $article['NAME'];?></h2>
            <pre class="text"><?php echo $article['TEXT'];?></pre>
            <pre class="text"><?php echo $article['DATE'];?></pre>
        </div>
    </div>

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
</body>
</html>