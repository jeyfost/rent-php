<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 06.04.2018
 * Time: 11:27
 */
?>

<!doctype html>

<html>

<head>

    <meta charset="windows-1251">
    <meta name='description' content='Аренда квартир и автомобилей в Могилёве.'>
    <meta name='keywords' content='аренда квартиры могилёв, квартира, аренда, жилье, квартира могилёв, жильё могилёв, аренда жилья могилёв, квартира по суткам могилёв, квартира по часам могилёв, проживание могилёв, квартира в центре могилёва, жильё в центре могилёва, аренда квартиры в центре могилёва, аренда жилья в центре могилёва, hotel mogilev, apartment mogilev, apartment rent mogilev, rent mogilev, place to stop mogilev, аренда автомобилей, аренда автомобилей могилев, аренда машин, аренда машин могилев, прокат автомобилей могилев, прокат автомобилей, прокат машин, прокат машин могилев, аренда, прокат, car mogilev, car rent mogilev'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <title>Аренда автомобилей в Могилёве</title>

    <script type='text/javascript' src='js/jquery-1.8.3.min.js'></script>
    <script type='text/javascript' src='js/menu.js'></script>

    <!-- Yandex.Metrika counter -->
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
    <!-- /Yandex.Metrika counter -->

</head>

<body onload='pageResize()'>
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
                <div id='point2' onmouseover='changePoint("point2Text", 1)' onmouseout='changePoint("point2Text", 0)'>
                    <div class='pointText'>
                        <span class='menuTextGrey' id='point2Text'>Квартиры</span>
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
                <div id='point5Active'>
                    <div class='pointText'>
                        <span class='menuTextWhite'>Контакты</span>
                    </div>
                </div>
            </a>
        </menu>
    </div>
</header>

<div id='pageContacts'>
    <center>
        <span class='headerStyle'>Контакты</span>
        <img src='images/horizontalLine.png' class='noBorder' />
    </center>
    <br />
    <div style='margin-left: 20px;'>
        Телефон Velcom:<span style='color: #62aab8; margin-left: 20px;'>+375(29)3303120</span>
        <br /><br />
        Телефон МТС:<span style='color: #62aab8; margin-left: 37px;'>+375(29)2383828</span>
        <br /><br />
        Email:<a href='mailto:palpalpal@tut.by' style='margin-left: 90px;' class='noBorder'><span class='originalDecoratedFont' style='color: #62aab8;'>palpalpal@tut.by</span></a>
        <br /><br />
        <div id='maps'>
            <span class='sliderHeaderStyle'>Однокомнатная квартира:</span>
            <br /><br />
            <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=_HwpoYxLxdLiO4pdGLh06fXqe_YtN3AM&width=600&height=450"></script>
            <!--
            <br /><br />
            <span class='sliderHeaderStyle'>Трехкомнатная квартира:</span>
            <br /><br />
            <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=nNBXaMCFVeWI7UBtGj4IrkSF02nPplQM&width=600&height=450"></script>
            -->
        </div>
    </div>
</div>

<footer>
    <img src='images/horizontalLine.png' class='noBorder' />
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
