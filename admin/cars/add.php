<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 19.04.2018
 * Time: 11:51
 */

session_start();
include("../../scripts/connect.php");

?>

<html>

<head>

    <meta charset="utf-8" />

    <title>Панель администрирования | Добавление автомобилей</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="/css/admin.css" />
    <link rel="stylesheet" href="/libs/font-awesome-4.7.0/css/font-awesome.css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/libs/notify/notify.js"></script>
    <script type="text/javascript" src="/js/admin/common.js"></script>
    <script type="text/javascript" src="/js/admin/cars/add.js"></script>

    <style>
        #page-preloader {position: fixed; left: 0; top: 0; right: 0; bottom: 0; background: #fff; z-index: 100500;}
        #page-preloader .spinner {width: 160px; height: 20px; position: absolute; left: 50%; top: 50%; background: url('/images/spinner.gif') no-repeat 50% 50%; margin: -16px 0 0 -16px;}
    </style>

    <script type="text/javascript">
        $(window).on('load', function () {
            const $preloader = $('#page-preloader'), $spinner = $preloader.find('.spinner');
            $spinner.delay(500).fadeOut();
            $preloader.delay(850).fadeOut();
        });
    </script>

    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter --><!-- /Google Analytics counter -->
</head>

<body>

<div id="page-preloader"><span class="spinner"></span></div>

<div id="topLine">
    <div id="logo">
        <a href="/"><span><i class="fa fa-home" aria-hidden="true"></i> <?= $_SERVER['HTTP_HOST'] ?></span></a>
    </div>
    <a href="/admin/admin.php"><span class="headerText">Панель администрирвания</span></a>
    <div id="exit" onclick="exit()">
        <span>Выйти <i class="fa fa-sign-out" aria-hidden="true"></i></span>
    </div>
</div>
<div id="leftMenu">
    <a href="/admin/pages/">
        <div class="menuPoint">
            <i class="fa fa-file-text-o" aria-hidden="true"></i><span> Страницы</span>
        </div>
    </a>
    <a href="/admin/text/">
        <div class="menuPoint">
            <i class="fa fa-text-width" aria-hidden="true"></i><span> Текст</span>
        </div>
    </a>
    <a href="/admin/apartments/">
        <div class="menuPoint">
            <i class="fa fa-building-o" aria-hidden="true"></i><span> Квартиры</span>
        </div>
    </a>
    <a href="/admin/cars/">
        <div class="menuPointActive">
            <i class="fa fa-car" aria-hidden="true"></i><span> Автомобили</span>
        </div>
    </a>
    <a href="/admin/cars-photos/">
        <div class="menuPoint">
            <i class="fa fa-camera" aria-hidden="true"></i><span> Фото автомобилей</span>
        </div>
    </a>
    <a href="/admin/trailers/">
        <div class="menuPoint">
            <i class="fa fa-truck" aria-hidden="true"></i><span> Прицепы</span>
        </div>
    </a>
    <a href="/admin/security/">
        <div class="menuPoint">
            <i class="fa fa-shield" aria-hidden="true"></i><span> Безопасность</span>
        </div>
    </a>
</div>

<div id="content">
    <span class="headerFont">Добавление автомобилей</span>
    <br /><br />
    <form method="post" id="carsForm">
        <label for='typeSelect'>Тип автомобиля:</label>
        <br />
        <select id='typeSelect' onchange='carTypeSelect()'>
            <?php
                $carTypeResult = $mysqli->query("SELECT * FROM rent_cars_types");
                while($carType = $carTypeResult->fetch_assoc()) {
                    echo "<option value='".$carType['id']."'"; if($carType['id'] == 1) {echo " selected";} echo ">".$carType['name']."</option>";
                }
            ?>
        </select>
        <br /><br />
        <label for='nameInput'>Название автомобиля:</label>
        <br />
        <input id='nameInput' />
        <br /><br />
        <label for='yearInput'>Год выпуска:</label>
        <br />
        <input id='yearInput' />
        <br /><br />
        <label for='engineInput'>Тип двигателя:</label>
        <br />
        <input id='engineInput' />
        <br /><br />
        <label for='consumptionInput'>Расход топлива:</label>
        <br />
        <input id='consumptionInput' />
        <br /><br />
        <label for='transmissionInput'>Трансмиссия:</label>
        <br />
        <input id='transmissionInput' name='transmission' />
        <br /><br />
        <label for='bodyInput'>Тип кузова:</label>
        <br />
        <input id='bodyInput' name='body' />
        <div id='placesContainer'></div>
        <br /><br />
        <label for='descriptionInput'>Дополнительное описание (не обязательно):</label>
        <br />
        <textarea id='descriptionInput' name='description' onkeydown='textAreaHeight(this)'></textarea>
        <br /><br />
        <label for='1_hourInput'>Стоимость за 1 час, руб.:</label>
        <br />
        <input id='1_hourInput' />
        <br /><br />
        <label for='1_dayInput'>Стоимость за 1 сутки, руб.:</label>
        <br />
        <input id='1_dayInput' />
        <br /><br />
        <label for='2_daysInput'>Стоимость за 2 суток, руб.:</label>
        <br />
        <input id='2_daysInput' />
        <br /><br />
        <label for='3_10_daysInput'>Стоимость за 3-10 суток, руб.:</label>
        <br />
        <input id='3_10_daysInput' />
        <br /><br />
        <label for='10_20_daysInput'>Стоимость за 10-20 суток, руб.:</label>
        <br />
        <input id='10_20_daysInput' />
        <br /><br />
        <label for='20_30_daysInput'>Стоимость за 20-30 суток, руб.:</label>
        <br />
        <input id='20_30_daysInput' />
        <br /><br />
        <label for='min_termInput'>Минимальное время аренды:</label>
        <br />
        <input id='min_termInput' />
        <br /><br />
        <input type='button' id='addSubmit' value='Добавить' onmouseover='buttonHover("addSubmit", 1)' onmouseout='buttonHover("addSubmit", 0)' onclick='addCar()' class='button' />

    </form>
</div>

</body>

</html>