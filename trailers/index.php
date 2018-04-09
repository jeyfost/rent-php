<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 06.04.2018
 * Time: 11:27
 */

include("../scripts/connect.php");

$pagerResult = $mysqli->query("SELECT * FROM rent_pages WHERE url = 'trailers'");
$page = $pagerResult->fetch_assoc();
?>

<!doctype html>

<html>

<head>

    <meta charset="utf-8">
    <meta name='description' content='<?= $page['description'] ?>'>
    <meta name='keywords' content='<?= $page['keywords'] ?>'>

    <title><?= $page['title'] ?></title>

    <link rel='stylesheet' type='text/css' href='/css/main.css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript' src='/js/menu.js'></script>
    <script type='text/javascript' src='/js/sliderTrailers.js'></script>
    <script type='text/javascript' src='/js/autoslideTrailers.js'></script>

    <!-- Yandex.Metrika counter -->
    <!--
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46912047 = new Ya.Metrika({
                        id:46912047,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/46912047" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    -->
    <!-- /Yandex.Metrika counter -->

</head>

<body>

<header>
    <div id='headerContent'>
        <a href='/' class='noBorder'>
            <div id='logo'>
                <img src='/images/logo.png' id='logoImage' class='noBorder' />
            </div>
        </a>
        <menu>
            <a href='/' class='noBorder'>
                <div id='point1' onmouseover='changePoint("point1Text", 1)' onmouseout='changePoint("point1Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point1Text'>Главная</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='/apartments/' class='noBorder'>
                <div id='point2' onmouseover='changePoint("point2Text", 1)' onmouseout='changePoint("point2Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point2Text'>Квартиры</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='/cars/' class='noBorder'>
                <div id='point3' onmouseover='changePoint("point3Text", 1)' onmouseout='changePoint("point3Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point3Text'>Автомобили</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='/trailers/'>
                <div id='point4Active'>
                    <div class='pointText'>
                        <span class='menuTextWhite'>Прицепы</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='/contacts/'>
                <div id='point5' onmouseover='changePoint("point5Text", 1)' onmouseout='changePoint("point5Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point5Text'>Контакты</span>
                    </div>
                </div>
            </a>
        </menu>
    </div>
</header>

<div id='page'>
    <div id='sliderTrailers'>
        <div id='sliderContentTrailers'>
            <div id='slideWrapTrailers'>
                <div class='slideItem'>
                    <img src='/images/trailers/trailer11.jpg' class='noBorder' id='flat1img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/trailers/trailer12.jpg' class='noBorder' id='flat2img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/trailers/trailer13.jpg' class='noBorder' id='flat3img' />
                </div>
            </div>
            <div id='sliderButtonsBGTrailers'>
                <div id='slideSwitchContainerTrailers'>
                    <div class='slideSwitch' id='switch1' name='active' style='cursor: default; background-color: #62aab8;'>
                        <img src='/images/trailers/preview/trailer11.jpg' class='noBorder' id='switch1B' />
                    </div>
                    <div class='slideSwitch' id='switch2' name='notActive' style=''>
                        <img src='/images/trailers/preview/trailer12.jpg' class='noBorder' id='switch2B' />
                    </div>
                    <div class='slideSwitch'  id='switch3' name='notActive' style=''>
                        <img src='/images/trailers/preview/trailer13.jpg' class='noBorder' id='switch3B' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id='greetingsBlockInner'>
    <div id='greetingsHeader'>
        <span class='headerStyle'>О прицепах</span>
    </div>
    <center><img src='/images/horizontalLine.png' class='noBorder line' /></center>
    <div id='greetingsText' style='font-size: 16px;'>
        <b class='blue'>Прицеп для легкового автомобиля</b>
        <br /><br />
        <?php
            $trailerResult = $mysqli->query("SELECT * FROM rent_trailers WHERE id = '1'");
            $trailer = $trailerResult->fetch_assoc();

            echo $trailer['text'];
        ?>
        <br /><br />
        Стоимость: <b class='blue'><?php if($trailer['price'] == 0) {echo "договорная";} else {echo $trailer['price'];} ?></b>
        <br /><br />
        <b class='blue'>Возможен наличный и безналичный расчёт.</b>
        <br /><br />
        Для проката автоприцепа требуется <b class='blue'>паспорт гражданина РБ</b> и <b class='blue'>водительское удостоверение категории «В»</b>.
        <br /><br />
        Заказывайте и бронируйте прицепы по телефонам: <b class='blue'>+375(29)2383828</b> и <b class='blue'>+375(29)3303120</b>.
        <br /><br />
        Желаем приятной поездки!
    </div>
</div>
<footer>
    <img src='/images/horizontalLine.png' class='noBorder line' />
    <div id='leftFooterBlock'>
        <a href='/' class='noBorder'><span class='footerStyle' id='footerLink'>rent.mogilev.by</span></a><span class='footerStyle'> &copy; 2016</span>
        <br/>
        <span class='footerStyle'>+375(29)3303120</span>
    </div>
    <div id='rightFooterBlock'>
        <span class='footerStyle'>Создание сайта</span>
        <br />
        <a href='http://airlab.by/' class='noBorder'><img src='/images/airlab.png' class='noBorder' /></a>
    </div>
</footer>

</body>

</html>
