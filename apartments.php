<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 06.04.2018
 * Time: 11:28
 */
?>

<!doctype html>

<html>

<head>

    <meta charset="windows-1251">
    <meta name='description' content='Аренда квартир и автомобилей в Могилёве.'>
    <meta name='keywords' content='квартира на сутки могилёв, снять квартиру на сутки могилев, квартира по суткам могилев, снять квартиру на сутки могилёв, квартира на час, могилёв почасовые квартиры, гостиница на час могилев, квартира на ночь могилев, дешевые гостиницы могилев, недорогие гостиницы могилёв, гостиницы цены могилев, гостиницы эконом могилёв, частные гостиницы могилёв, мини гостиницы могилев, номер в гостинице могилев, отель на час могилев, гостиницы эконом класса могилев, мини отели могилев, посуточная аренда квартир могилев, номер на час, посуточно могилёв, квартира в аренду могилев, квартира на сутки могилев, гостиницы города могилева, квартира на ночь в могилеве, гостиница на час, почасовые гостиницы, снять квартиру на час, дешевые гостиницы, квартира на ночь, снять квартиру на сутки, почасовой отель, гостиница на ночь, почасовые квартиры, почасовая аренда квартир'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <title>Аренда квартир в Могилёве</title>

    <script type='text/javascript' src='js/jquery-1.8.3.min.js'></script>
    <script type='text/javascript' src='js/menu.js'></script>
    <script type='text/javascript' src='js/slider.js'></script>
    <script type='text/javascript' src='js/sliderButtons.js'></script>
    <script type='text/javascript' src='js/photosChange.js'></script>
    <script type='text/javascript' src='js/preload.js'></script>

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
        <a href='index.html' class='noBorder'>
            <div id='logo'>
                <img src='images/logo.png' id='logoImage' class='noBorder' />
            </div>
        </a>
        <menu>
            <a href='index.html' class='noBorder'>
                <div id='point1' onmouseover='changePoint("point1Text", 1)' onmouseout='changePoint("point1Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point1Text'>Главная</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='appartments.html' class='noBorder'>
                <div id='point2Active'>
                    <div class='pointText'>
                        <span class='menuTextWhite'>Квартиры</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='cars.html' class='noBorder'>
                <div id='point3' onmouseover='changePoint("point3Text", 1)' onmouseout='changePoint("point3Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point3Text'>Автомобили</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='trailers.html'>
                <div id='point4' onmouseover='changePoint("point4Text", 1)' onmouseout='changePoint("point4Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point4Text'>Прицепы</span>
                    </div>
                </div>
            </a>
            <div class='space'></div>
            <a href='contacts.html'>
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
                    <img src='images/appartments/flat11.jpg' class='noBorder' id='flat1img' />
                </div>
                <div class='slideItem'>
                    <img src='images/appartments/flat12.jpg' class='noBorder' id='flat2img' />
                </div>
                <div class='slideItem'>
                    <img src='images/appartments/flat13.jpg' class='noBorder' id='flat3img' />
                </div>
                <div class='slideItem'>
                    <img src='images/appartments/flat14.jpg' class='noBorder' id='flat4img' />
                </div>
                <div class='slideItem'>
                    <img src='images/appartments/flat15.jpg' class='noBorder' id='flat5img' />
                </div>
            </div>
            <div id='sliderButtonsBG' style='bottom: 25px;'>
                <div id='slideSwitchContainer'>
                    <div class='slideSwitch' id='switch1' name='active' style='cursor: default; background-color: #62aab8;'>
                        <img src='images/appartments/preview/flat11.jpg' class='noBorder' id='switch1B' />
                    </div>
                    <div class='slideSwitch' id='switch2' name='notActive' style=''>
                        <img src='images/appartments/preview/flat12.jpg' class='noBorder' id='switch2B' />
                    </div>
                    <div class='slideSwitch'  id='switch3' name='notActive' style=''>
                        <img src='images/appartments/preview/flat13.jpg' class='noBorder' id='switch3B' />
                    </div>
                    <div class='slideSwitch'  id='switch4' name='notActive' style=''>
                        <img src='images/appartments/preview/flat14.jpg' class='noBorder' id='switch4B' />
                    </div>
                    <div class='slideSwitch'  id='switch5' name='notActive' style=''>
                        <img src='images/appartments/preview/flat15.jpg' class='noBorder' id='switch5B' />
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
    <center><img src='images/horizontalLine.png' class='noBorder line' /></center>
    <div id='greetingsText'>
        Однокомнатная уютная квартира расположена в центре Могилёва на берегу реки Дубровенка по адресу ул. Бурденко, 12 в 10-ти этажном кирпичном доме на 7-м этаже.
        <br /><br />
        Площадь квартиры — 46 м.кв. Большая комната — спальня с отдельной кухней. Имеется большая двуспальная кровать с ортопедическими матрасами и угловой диван.
        <br /><br />
        Спальных мест: 2 + 2 + 1.
        <br /><br />
        Имеется всё необходимое для проживания: СВЧ, холодильник, стиральная машина, мелкая бытовая техника. Есть балкон, выходящий в тихий двор на стоянку авто.
        <br /><br />
        В квартире выполнен современный евроремонт, санузел раздельный, мебель и сантехника новые.
        <br /><br />
        Квартира оборудована скоростным Интернетом ADSL + Wi-Fi с круглосуточным бесплатным доступом, и интерактивным IP-телевидением, спутниковой антенной.
        <br /><br />
        В непосредственной близости находятся:
        <br />
        <ul>
            <li>река "Дубровенка" с пешеходной зоной с летними барами, кафе и прокатом лодок/катамаранов вдоль реки;</li>
            <li>кинотеатр «Октябрь» (DOLBY, 3D);</li>
            <li>развлекательный комплекс «На дубровке» (ресторан, кафе, клуб, боулинг);</li>
            <li>ФОК с бассейном;</li>
            <li>дворец пионеров.</li>
        </ul>
        В шаговой доступности:
        <br />
        <ul>
            <li>гостиница «Могилев»; </li>
            <li>ЦУМ;</li>
            <li>торговые центры;</li>
            <li>центральный продуктовый рынок;</li>
            <li>баня, сауна;</li>
            <li>салоны красоты;</li>
            <li>медицинские центры;</li>
            <li>кафе;</li>
            <li>рестораны.</li>
        </ul>
        <br />
        Возможна встреча иногородних гостей на вокзале с доставкой до квартиры на комфортабельном автомобиле.
        <br /><br />
        <b class='blue'>Стоимость: 35 руб. в сутки.</b>
        <br /><br />
        <b class='blue'>Возможен наличный и безналичный расчёт.</b>
    </div>
</div>
<footer>
    <img src='images/horizontalLine.png' class='noBorder line' />
    <div id='leftFooterBlock'>
        <a href='index.html' class='noBorder'><span class='footerStyle' id='footerLink'>rent.mogilev.by</span></a><span class='footerStyle'> &copy; 2016</span>
        <br/>
        <span class='footerStyle'>+375(29)3303120</span>
    </div>
    <div id='rightFooterBlock'>
        <span class='footerStyle'>Создание сайта</span>
        <br />
        <a href='http://airlab.by/' class='noBorder'><img src='images/airlab.png' class='noBorder' /></a>
    </div>
</footer>
</body>

</html>

