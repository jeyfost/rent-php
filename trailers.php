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
    <meta name='keywords' content='аренда квартиры могилёв, квартира, аренда, жилье, квартира могилёв, жильё могилёв, аренда жилья могилёв, квартира по суткам могилёв, квартира по часам могилёв, проживание могилёв, квартира в центре могилёва, жильё в центре могилёва, аренда квартиры в центре могилёва, аренда жилья в центре могилёва, hotel mogilev, apartment mogilev, apartment rent mogilev, rent mogilev, place to stop mogilev, аренда автомобилей, аренда автомобилей могилев, аренда машин, аренда машин могилев, прокат автомобилей могилев, прокат автомобилей, прокат машин, прокат машин могилев, аренда, прокат, car mogilev, car rent mogilev, квартира на сутки могилёв, снять квартиру на сутки могилев, квартира по суткам могилев, снять квартиру на сутки могилёв, квартира на час, могилёв почасовые квартиры, гостиница на час могилев, квартира на ночь могилев, дешевые гостиницы могилев, недорогие гостиницы могилёв, гостиницы цены могилев, гостиницы эконом могилёв, частные гостиницы могилёв, мини гостиницы могилев, номер в гостинице могилев, отель на час могилев, гостиницы эконом класса могилев, мини отели могилев, посуточная аренда квартир могилев, номер на час, посуточно могилёв, квартира в аренду могилев, квартира на сутки могилев, гостиницы города могилева, квартира на ночь в могилеве, гостиница на час, почасовые гостиницы, снять квартиру на час, дешевые гостиницы, квартира на ночь, снять квартиру на сутки, почасовой отель, гостиница на ночь, почасовые квартиры, почасовая аренда квартир'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <title>Аренда квартир и автомобилей в Могилёве</title>

    <script type='text/javascript' src='js/jquery-1.8.3.min.js'></script>
    <script type='text/javascript' src='js/menu.js'></script>
    <script type='text/javascript' src='js/sliderTrailers.js'></script>
    <script type='text/javascript' src='js/autoslideTrailers.js'></script>

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
                <div id='point4Active'>
                    <div class='pointText'>
                        <span class='menuTextWhite'>Прицепы</span>
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
    <div id='sliderTrailers'>
        <div id='sliderContentTrailers'>
            <div id='slideWrapTrailers'>
                <div class='slideItem'>
                    <img src='images/trailers/trailer11.jpg' class='noBorder' id='flat1img' />
                </div>
                <div class='slideItem'>
                    <img src='images/trailers/trailer12.jpg' class='noBorder' id='flat2img' />
                </div>
                <div class='slideItem'>
                    <img src='images/trailers/trailer13.jpg' class='noBorder' id='flat3img' />
                </div>
            </div>
            <div id='sliderButtonsBGTrailers'>
                <div id='slideSwitchContainerTrailers'>
                    <div class='slideSwitch' id='switch1' name='active' style='cursor: default; background-color: #62aab8;'>
                        <img src='images/trailers/preview/trailer11.jpg' class='noBorder' id='switch1B' />
                    </div>
                    <div class='slideSwitch' id='switch2' name='notActive' style=''>
                        <img src='images/trailers/preview/trailer12.jpg' class='noBorder' id='switch2B' />
                    </div>
                    <div class='slideSwitch'  id='switch3' name='notActive' style=''>
                        <img src='images/trailers/preview/trailer13.jpg' class='noBorder' id='switch3B' />
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
    <center><img src='images/horizontalLine.png' class='noBorder line' /></center>
    <div id='greetingsText' style='font-size: 16px;'>
        <b class='blue'>Прицеп для легкового автомобиля</b>
        <br /><br />
        Год выпуска: 2016
        <br />
        Габариты кузова ДхШхВ (мм): 2745х1447х1450
        <br />
        Высота борта (мм): 261
        <br />
        Погрузочная высота (мм): 600
        <br />
        Колея (мм): 1760
        <br />
        Полная масса прицепа (кг): 750
        <br />
        Снаряженная масса (кг): 260
        <br />
        Грузоподъемность (кг): 500
        <br />
        Нагрузка на сцепное устройство (кг): 50
        <br />
        Нагрузка на ось (кг): 750
        <br />
        Тип подвески: рессорная с амортизаторами
        <br />
        Количество осей: 1
        <br />
        Тип колеса: R13
        <br />
        Тягово-сцепное устройство: сцепная головка под шар ф50
        <br />
        Стоимость: <b class='blue'>договорная</b>
        <br /><br />
        <b class='blue'>Возможен наличный и безналичный расчёт.</b>
        <br /><br />
        Для удобства погрузки/выгрузки снегоходов, квадроциклов и иных грузов платформа имеет возможность опрокидывания назад. Внутри платформы предусмотрены петли для крепления груза. Передний и задний борта откидные на петлях, боковые борта на болтовых соединениях. Прицеп комплектуется высоким тентом с аэродинамическим скосом и клапаном в задней и боковой части на жестком каркасе.
        <br /><br />
        Для проката автоприцепа требуется <b class='blue'>паспорт гражданина РБ</b> и <b class='blue'>водительское удостоверение категории «В»</b>.
        <br /><br />
        Заказывайте и бронируйте прицепы по телефонам: <b class='blue'>+375(29)2383828</b> и <b class='blue'>+375(29)3303120</b>.
        <br /><br />
        Желаем приятной поездки!
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
