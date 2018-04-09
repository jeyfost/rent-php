<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 06.04.2018
 * Time: 11:28
 */

include("../scripts/connect.php");

$pagerResult = $mysqli->query("SELECT * FROM rent_pages WHERE url = 'apartments'");
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
    <script type='text/javascript' src='/js/slider.js'></script>
    <script type='text/javascript' src='/js/sliderButtons.js'></script>
    <script type='text/javascript' src='/js/photosChange.js'></script>
    <script type='text/javascript' src='/js/preload.js'></script>

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
                <div id='point2Active'>
                    <div class='pointText'>
                        <span class='menuTextWhite'>Квартиры</span>
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
                <div id='point4' onmouseover='changePoint("point4Text", 1)' onmouseout='changePoint("point4Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point4Text'>Прицепы</span>
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
    <div id='sliderCars'>
        <div id='sliderContent'>
            <div id='slideWrap'>
                <div class='slideItem'>
                    <img src='/images/apartments/flat11.jpg' class='noBorder' id='flat1img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/apartments/flat12.jpg' class='noBorder' id='flat2img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/apartments/flat13.jpg' class='noBorder' id='flat3img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/apartments/flat14.jpg' class='noBorder' id='flat4img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/apartments/flat15.jpg' class='noBorder' id='flat5img' />
                </div>
            </div>
            <div id='sliderButtonsBG' style='bottom: 25px;'>
                <div id='slideSwitchContainer'>
                    <div class='slideSwitch' id='switch1' name='active' style='cursor: default; background-color: #62aab8;'>
                        <img src='/images/apartments/preview/flat11.jpg' class='noBorder' id='switch1B' />
                    </div>
                    <div class='slideSwitch' id='switch2' name='notActive' style=''>
                        <img src='/images/apartments/preview/flat12.jpg' class='noBorder' id='switch2B' />
                    </div>
                    <div class='slideSwitch'  id='switch3' name='notActive' style=''>
                        <img src='/images/apartments/preview/flat13.jpg' class='noBorder' id='switch3B' />
                    </div>
                    <div class='slideSwitch'  id='switch4' name='notActive' style=''>
                        <img src='/images/apartments/preview/flat14.jpg' class='noBorder' id='switch4B' />
                    </div>
                    <div class='slideSwitch'  id='switch5' name='notActive' style=''>
                        <img src='/images/apartments/preview/flat15.jpg' class='noBorder' id='switch5B' />
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div id='buttonsBlock'>
            <div class='sliderButton' style='cursor: pointer' name='active' id='sliderButton1' onmouseover='textColor1(1)' onmouseout='textColor1(0)'>
                <img src='images/blueRoundButton.png' class='noBorder' id='roundButton1' />
                <div class='innerSliderButtonTextPosition'>
                    <span class='sliderHeaderStyle' id='b1bt' style='color: #62aab8'>&nbsp;&nbsp;&nbsp;&nbsp;Однокомнатная</span>
                    <div class='addressPosition'>
                        <span class='addressStyle' id='b1st' style='color: #62aab8'>г. Могилев, ул. Бурденко, 12</span>
                    </div>
                </div>
            </div>
            <div id='sliderButtonsDivider'></div>
            <div class='sliderButton' style='cursor: pointer' name='notActive' id='sliderButton2' onmouseover='textColor2(1)' onmouseout='textColor2(0)'>
                <img src='images/roundButton.png' class='noBorder' id='roundButton2' />
                <div class='innerSliderButtonTextPosition'>
                    <span class='sliderHeaderStyle' id='b2bt'>&nbsp;&nbsp;&nbsp;&nbsp;Трехкомнатая</span>
                    <div class='addressPosition'>
                        <span class='addressStyle' id='b2st'>г. Могилев, ул. Орловского, 4</span>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
</div>
<div id='greetingsBlockInner'>
    <div id='greetingsHeader'>
        <span class='headerStyle'>О квартире</span>
    </div>
    <center><img src='/images/horizontalLine.png' class='noBorder line' /></center>
    <div id='greetingsText'>
        <?php
            $apartmentResult = $mysqli->query("SELECT * FROM rent_apartments WHERE id = '1'");
            $apartment = $apartmentResult->fetch_assoc();

            echo $apartment['text'];
        ?>
        <br /><br />
        <b class='blue'>Стоимость: <?= $apartment['price'] ?> руб. в сутки.</b>
        <br /><br />
        <b class='blue'>Возможен наличный и безналичный расчёт.</b>
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
        <a href='https://airlab.by/' class='noBorder'><img src='/images/airlab.png' class='noBorder' /></a>
    </div>
</footer>
</body>

</html>

