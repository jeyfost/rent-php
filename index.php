<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 06.04.2018
 * Time: 11:24
 */
?>

<!doctype html>

<html>

<head>

    <meta charset="utf-8">
    <meta name='description' content='Аренда квартир и автомобилей в Могилёве.'>
    <meta name='keywords' content='аренда квартиры могилёв, квартира, аренда, жилье, квартира могилёв, жильё могилёв, аренда жилья могилёв, квартира по суткам могилёв, квартира по часам могилёв, проживание могилёв, квартира в центре могилёва, жильё в центре могилёва, аренда квартиры в центре могилёва, аренда жилья в центре могилёва, hotel mogilev, apartment mogilev, apartment rent mogilev, rent mogilev, place to stop mogilev, аренда автомобилей, аренда автомобилей могилев, аренда машин, аренда машин могилев, прокат автомобилей могилев, прокат автомобилей, прокат машин, прокат машин могилев, аренда, прокат, car mogilev, car rent mogilev, квартира на сутки могилёв, снять квартиру на сутки могилев, квартира по суткам могилев, снять квартиру на сутки могилёв, квартира на час, могилёв почасовые квартиры, гостиница на час могилев, квартира на ночь могилев, дешевые гостиницы могилев, недорогие гостиницы могилёв, гостиницы цены могилев, гостиницы эконом могилёв, частные гостиницы могилёв, мини гостиницы могилев, номер в гостинице могилев, отель на час могилев, гостиницы эконом класса могилев, мини отели могилев, посуточная аренда квартир могилев, номер на час, посуточно могилёв, квартира в аренду могилев, квартира на сутки могилев, гостиницы города могилева, квартира на ночь в могилеве, гостиница на час, почасовые гостиницы, снять квартиру на час, дешевые гостиницы, квартира на ночь, снять квартиру на сутки, почасовой отель, гостиница на ночь, почасовые квартиры, почасовая аренда квартир'>

    <title>Аренда квартир и автомобилей в Могилёве</title>

    <link rel='stylesheet' type='text/css' href='/css/main.css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript' src='/js/menu.js'></script>
    <script type='text/javascript' src='/js/index.js'></script>

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
                <div id='point1Active'>
                    <div class='pointText'>
                        <span class='menuTextWhite'>Главная</span>
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
    <div id='greetingsBlock'>
        <div id='greetingsHeader'>
            <span class='headerStyle'>Добро пожаловать!</span>
        </div>
        <br />
        <img src='/images/horizontalLine.png' class='noBorder line' />
        <div id='greetingsText' style='text-align: center;'>
            <span style='font-size: 17px;'>Апартаменты и автомобили «У ПАЛЫЧА» — прекрасный выбор для гостей города Могилева! Мы работаем для Вас и нам важен Ваш комфорт и наша репутация! ПАЛЫЧ всегда рад Вам!</span>
            <br /><br />
            <span style='font-size: 17px;'>Все фотографиии и описание апартаментов и автомобилей «У ПАЛЫЧА» соответствуют действительности.</span>
        </div>
        <img src='/images/horizontalLine.png' class='noBorder line' />
        <br />
    </div>
    <div id='categoriesBlock'>
        <div class="categoryBlock">
            <div class="categoryHeader">
                <a href="/appartments/"><span class="headerStyleTransition" style="font-size: 18px;" id="flatFont" onmouseover="categoryHover('flat', 'flatFont', 1)" onmouseout="categoryHover('flat', 'flatFont', 0)">Аренда квартир на сутки</span></a>
            </div>
            <br />
            <div class="categoryIMG">
                <a href="/apartments/"><img src="/images/flat.jpg" id="flat" onmouseover="categoryHover('flat', 'flatFont', 1)" onmouseout="categoryHover('flat', 'flatFont', 0)" /></a>
            </div>
        </div>
        <div class="categoryBlock">
            <div class="categoryHeader">
                <a href="/cars/"><span class="headerStyleTransition" style="font-size: 18px;" id="carFont" onmouseover="categoryHover('car', 'carFont', 1)" onmouseout="categoryHover('car', 'carFont', 0)">Прокат автомобилей без водителя</span></a>
            </div>
            <br />
            <div class="categoryIMG">
                <a href="/cars/"><img src="/images/car.jpg" id="car" onmouseover="categoryHover('car', 'carFont', 1)" onmouseout="categoryHover('car', 'carFont', 0)" /></a>
            </div>
        </div>
        <div class="categoryBlock">
            <div class="categoryHeader">
                <a href="/cars/"><span class="headerStyleTransition" style="font-size: 18px;" id="busFont" onmouseover="categoryHover('bus', 'busFont', 1)" onmouseout="categoryHover('bus', 'busFont', 0)">Прокат микроавтобусов без водителя</span></a>
            </div>
            <br />
            <div class="categoryIMG">
                <a href="/cars/"><img src="/images/bus.jpg" id="bus" onmouseover="categoryHover('bus', 'busFont', 1)" onmouseout="categoryHover('bus', 'busFont', 0)" /></a>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div id='buttonsBlock'>
            <a href='/apartments/' class='noBorder'>
                <div class='sliderButton'>
                    <img src='/images/roundButton.png' class='noBorder' />
                    <span class='headerStyleTransition'>&nbsp;&nbsp;&nbsp;&nbsp;Квартиры</span>
                </div>
            </a>
            <div id='sliderButtonsDivider'></div>
            <a href='/cars/' class='noBorder'>
                <div class='sliderButton'>
                    <img src='/images/roundButton.png' class='noBorder' />
                    <span class='headerStyleTransition'>&nbsp;&nbsp;&nbsp;&nbsp;Автомобили</span>
                </div>
            </a>
        </div>
        <br /><br /><br />
        <center><span class='headerStyle'>Наши партнеры</span></center>
        <br /><br />
        <a href='http://palyana.by/' target='_blank' class='noBorder'><img src='/images/palyana.png' class='noBorder' style='position: relative; float: left;' /></a>
        <div style='position: relative; float: left; text-align: left; margin: 4px auto auto 15px;'><span class='greetingsText'>База отдыха на берегу Чигиринского водохранилища в 55 км от г. Могилева</span><br /> <a href='http://palyana.by/' target='_blank' class='noBorder'><b class='blueLink'>www.palyana.by</b></a></div>
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

