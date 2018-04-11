<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 06.04.2018
 * Time: 11:26
 */

include("../scripts/connect.php");

$pagerResult = $mysqli->query("SELECT * FROM rent_pages WHERE url = 'cars'");
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
    <script type='text/javascript' src='/js/autoslide.js'></script>

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
                <div id='point3Active'>
                    <div class='pointText'>
                        <span class='menuTextWhite'>Автомобили</span>
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
                    <img src='/images/cars/car11.jpg' class='noBorder' id='flat1img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car12.jpg' class='noBorder' id='flat2img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car13.jpg' class='noBorder' id='flat3img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car14.jpg' class='noBorder' id='flat4img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car15.jpg' class='noBorder' id='flat5img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car16.jpg' class='noBorder' id='flat6img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car17.jpg' class='noBorder' id='flat7img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car18.jpg' class='noBorder' id='flat8img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car19.jpg' class='noBorder' id='flat9img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car20.jpg' class='noBorder' id='flat10img' />
                </div>
                <div class='slideItem'>
                    <img src='/images/cars/car21.jpg' class='noBorder' id='flat11img' />
                </div>
            </div>
            <div id='sliderButtonsBGCars'>
                <div id='slideSwitchContainer'>
                    <div class='slideSwitch' id='switch1' name='active' style='cursor: default; background-color: #62aab8;'>
                        <img src='/images/cars/preview/car11.jpg' class='noBorder' id='switch1B' />
                    </div>
                    <div class='slideSwitch' id='switch2' name='notActive' style=''>
                        <img src='/images/cars/preview/car12.jpg' class='noBorder' id='switch2B' />
                    </div>
                    <div class='slideSwitch'  id='switch3' name='notActive' style=''>
                        <img src='/images/cars/preview/car13.jpg' class='noBorder' id='switch3B' />
                    </div>
                    <div class='slideSwitch' id='switch4' name='notActive' style=''>
                        <img src='/images/cars/preview/car14.jpg' class='noBorder' id='switch4B' />
                    </div>
                    <div class='slideSwitch'  id='switch5' name='notActive' style=''>
                        <img src='/images/cars/preview/car15.jpg' class='noBorder' id='switch5B' />
                    </div>
                    <div class='slideSwitch'  id='switch6' name='notActive' style=''>
                        <img src='/images/cars/preview/car16.jpg' class='noBorder' id='switch6B' />
                    </div>
                    <div class='slideSwitch' id='switch7' name='notActive' style=''>
                        <img src='/images/cars/preview/car17.jpg' class='noBorder' id='switch7B' />
                    </div>
                    <div class='slideSwitch'  id='switch8' name='notActive' style=''>
                        <img src='/images/cars/preview/car18.jpg' class='noBorder' id='switch8B' />
                    </div>
                    <div class='slideSwitch'  id='switch9' name='notActive' style=''>
                        <img src='/images/cars/preview/car19.jpg' class='noBorder' id='switch9B' />
                    </div>
                    <div class='slideSwitch'  id='switch10' name='notActive' style=''>
                        <img src='/images/cars/preview/car20.jpg' class='noBorder' id='switch10B' />
                    </div>
                    <div class='slideSwitch'  id='switch11' name='notActive' style=''>
                        <img src='/images/cars/preview/car21.jpg' class='noBorder' id='switch11B' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id='greetingsBlockInner'>
    <div id='greetingsHeader'>
        <span class='headerStyle'>Об автомобилях</span>
    </div>
    <center><img src='/images/horizontalLine.png' class='noBorder line' /></center>
    <div id='greetingsText'>
        <br />
        <div style="width: 49.5%; float: left;">
            <div class="carsHeader menuTextGrey">Легковые автомобили</div>
            <br /><br />
            <?php
                $i = 0;

                $carResult = $mysqli->query("SELECT * FROM rent_cars WHERE car_type = '1' ORDER BY id DESC");
                while($car = $carResult->fetch_assoc()) {
                    $i++;

                    echo "
                        <div class='carContainer"; if($i % 2 != 0) {echo " borderRight";} echo "'>
                            <center><b class='blue'>".$car['name']."</b></center>
                            <br /><br />
                            <b>Год выпуска</b>: ".$car['year']."
                            <br />
                            <b>Тип двигателя</b>: ".$car['engine']."
                            <br />
                            <b>Расход топлива</b>: ".$car['consumption']."
                            <br />
                            <b>Коробка передач</b>: ".$car['transmission']."
                            <br />
                            <b>Тип кузова</b>: ".$car['body'];

                        if($car['places'] != "0") {
                            echo "<b>Тип кузова</b>: ".$car['places'];
                        }

                        if(!empty($car['description'])) {
                            echo "<br />><br />".$car['description'];
                        }

                        echo "
                            <br /><br>
                            <center><b>Стоимость:</b></center>
                            <table class='carTable'>
                                <thead>
                                <tr>
                                    <td class='colorCell'>Кол-во суток</td>
                                    <td class='colorCell'>Цена, руб.</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1 час</td>
                                    <td class='blue'>".$car['1_hour']."</td>
                                </tr>
                                <tr>
                                    <td>1 сутки</td>
                                    <td class='blue'>".$car['1_day']."</td>
                                </tr>
                                <tr>
                                    <td>2 суток</td>
                                    <td class='blue'>".$car['2_days']."</td>
                                </tr>
                                <tr>
                                    <td>3-10 суток</td>
                                    <td class='blue'>".$car['3_10_days']."</td>
                                </tr>
                                <tr>
                                    <td>10-20 суток</td>
                                    <td class='blue'>".$car['10_20_days']."</td>
                                </tr>
                                <tr>
                                    <td>20-30 суток</td>
                                    <td class='blue'>".$car['20_30_days']."</td>
                                </tr>
                                <tr>
                                    <td colspan='2'><b>* Минимальный срок аренды:<br /><span class='blue'>".$car['min_term']."</span></b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    ";

                        if($i % 2 == 0) {
                            echo "<br /><br /><br />";
                        }
                }
            ?>
        </div>
        <div style="width: 49.5%; float: right;" class="borderLeft">
            <div class="carsHeader menuTextGrey">Микроавтобусы</div>
            <br /><br />
            <?php
                $carResult = $mysqli->query("SELECT * FROM rent_cars WHERE car_type = '2' ORDER BY id DESC");
                while($car = $carResult->fetch_assoc()) {
                    echo "
                        <div class='carContainer' style='width: 100%;'>
                            <center><b class='blue'>".$car['name']."</b></center>
                            <br /><br />
                            <b>Год выпуска</b>: ".$car['year']."
                            <br />
                            <b>Тип двигателя</b>: ".$car['engine']."
                            <br />
                            <b>Расход топлива</b>: ".$car['consumption']."
                            <br />
                            <b>Коробка передач</b>: ".$car['transmission']."
                            <br />
                            <b>Тип кузова</b>: ".$car['body']."
                            <br />
                            <b>Количество мест:</b> ".$car['places']."
                    ";

                    if(!empty($car['description'])) {
                        echo "<br /><br />".$car['description'];
                    }

                    echo "
                            <br /><br />
                            <center><b>Стоимость:</b></center>
                            <table class='carTable'>
                                <thead>
                                <tr>
                                    <td class='colorCell'>Кол-во суток</td>
                                    <td class='colorCell'>Цена, руб.</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1 час</td>
                                    <td class='blue'>".$car['1_hour']."</td>
                                </tr>
                                <tr>
                                    <td>1 сутки</td>
                                    <td class='blue'>".$car['1_day']."</td>
                                </tr>
                                <tr>
                                    <td>2 суток</td>
                                    <td class='blue'>".$car['2_days']."</td>
                                </tr>
                                <tr>
                                    <td>3-10 суток</td>
                                    <td class='blue'>".$car['3_10_days']."</td>
                                </tr>
                                <tr>
                                    <td>10-20 суток</td>
                                    <td class='blue'>".$car['10_20_days']."</td>
                                </tr>
                                <tr>
                                    <td>20-30 суток</td>
                                    <td class='blue'>".$car['20_30_days']."</td>
                                </tr>
                                <tr>
                                    <td colspan='2'><b>* Минимальный срок аренды: <span class='blue'>".$car['min_term']."</span></b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    ";
                }
            ?>
            <br /><br />
            <div class='carContainer' style="width: 100%;">
                <center><b class='blue'>Mercedes-Benz Sprinter 212</b></center>
                <br /><br />
                <b>Год выпуска</b>: 1999
                <br />
                <b>Тип двигателя</b>: дизель
                <br />
                <b>Расход топлива</b>: от 8 л. на 100 км
                <br />
                <b>Коробка передач</b>: МКПП
                <br />
                <b>Тип кузова</b>: автобус легковой категория &laquo;В&raquo;
                <br />
                <b>Количество мест:</b> 9 (3+2+2+1+1)
                <br /><br />
                <table class="carTable">
                    <thead>
                    <tr>
                        <td class="colorCell">Тарифы</td>
                        <td class="colorCell">Цена, руб/сутки</td>
                        <td class="colorCell">Включенный километраж, км</td>
                        <td class="colorCell">Назначение</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Рабочий</td>
                        <td class="blue">90</td>
                        <td>до 500</td>
                        <td>Путешествие на дальние расстояния, поездки на море, на экскурсии, трансфер, бизнес.</td>
                    </tr>
                    <tr>
                        <td>Выходного дня</td>
                        <td class="blue">80</td>
                        <td>до 350</td>
                        <td>Отдых, поездка в деревню на выходные, на природу.</td>
                    </tr>
                    <tr>
                        <td>Дачный</td>
                        <td class="blue">70</td>
                        <td>до 250</td>
                        <td>Отдых, посещение дач.</td>
                    </tr>
                    <tr>
                        <td>Городской</td>
                        <td class="blue">60</td>
                        <td>до 100</td>
                        <td>Коммерческие цели, покупки, экскурсии по Могилёву.</td>
                    </tr>
                    </tbody>
                </table>
                <p>При пробеге свыше включенного километража в сутки взимается плата - 10 коп/км.</p>
                <ul>
                    <li>При заказе микроавтобуса на прокат <span class="blue">от 5 дней</span> вы гарантировано получите <span class="blue">скидку в 5%</span></li>
                    <li>При заказе микроавтобуса на прокат <span class="blue">от 10 дней</span> вы гарантировано получите <span class="blue">скидку в 10%</span></li>
                    <li>При заказе микроавтобуса на прокат <span class="blue">от 20 дней</span> вы гарантировано получите <span class="blue">скидку в 15%</span></li>
                </ul>
                <p><span class="blue">Выбирайте прокат микроавтобуса</span> — аренда без водителя, и Вы ощутите удобства в путешествиях, поездках на дальние расстояния. Использовать прокат микроавтобусов при проведении свадеб и других семейных и корпоративных торжеств — это лучшее ваше решение!  При неоднократном обращении к нам за услугой прокат микроавтобуса <span class="blue">мы готовы предложить вам скидку 5%</span>.</p>
                <p>Гибкий график для сдачи и приема авто в аренду.</p>
            </div>
        </div>
        <div style="clear: both;"></div>
        <br /><br /><br />
        <center><b class='blue' style='font-size: 16px;'>Возможен наличный и безналичный расчёт.</b><br /><span style='text-transform: uppercase; font-weight: bold; fontsize: 16px;' class='blue'>Внимание!</span><span style='font-size: 16px;'> Выбор модели автомобиля, продолжительность и окончательная стоимость аренды автомобиля зависят только от Вас.</span></center>
        <br /><br /><hr style='opacity: .2;' /><br />
        <center>
            <span class='blue' style='text-transform: uppercase; font-size: 18px;'>ГЛАВНЫМИ ПРЕИМУЩЕСТВАМИ ЭТИХ АВТОМОБИЛЕЙ ЯВЛЯЕТСЯ ЭКОНОМИЧНОСТЬ, ПРАКТИЧНОСТЬ И ПРЕКРАСНЫЕ ХОДОВЫЕ ВОЗМОЖНОСТИ.</span>
        </center>
        <br /><br />
        <?php
            $textResult = $mysqli->query("SELECT text FROM rent_text WHERE id = '2'");
            $text = $textResult->fetch_array(MYSQLI_NUM);

            echo $text[0];
        ?>
        <br /><br />
        <p>Заказывайте и бронируйте автомобили по телефонам: <b class='blue'>+375(29)2383828</b> и <b class='blue'>+375(29)3303120</b>.</p>
        <p>Желаем приятной поездки!</p>
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

