<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 18.04.2018
 * Time: 16:55
 */

session_start();
include("../../scripts/connect.php");

if(!empty($_REQUEST['id'])) {
    $carCheckResult = $mysqli->query("SELECT COUNT(id) FROM rent_cars WHERE id = '".$mysqli->real_escape_string($_REQUEST['id'])."'");
    $carCheck = $carCheckResult->fetch_array(MYSQLI_NUM);

    if($carCheck[0] == 0) {
        header("Location: /admin/cars/");
    }
}

?>

<html>

<head>

    <meta charset="utf-8" />

    <title>Панель администрирования | Автомобили</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="/css/admin.css" />
    <link rel="stylesheet" href="/libs/font-awesome-4.7.0/css/font-awesome.css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/libs/notify/notify.js"></script>
    <script type="text/javascript" src="/js/admin/common.js"></script>
    <script type="text/javascript" src="/js/admin/cars/index.js"></script>

    <style>
        #page-preloader {position: fixed; left: 0; top: 0; right: 0; bottom: 0; background: #fff; z-index: 100500;}
        #page-preloader .spinner {width: 160px; height: 20px; position: absolute; left: 50%; top: 50%; background: url('/images/spinner.gif') no-repeat 50% 50%; margin: -80px 0 0 -10px;}
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
    <span class="headerFont">Редактирование автомобилей</span>
    <br /><br />
    <form method="post" id="carsForm">
        <label for="carSelect"></label>
        <select id="carSelect" onchange="window.location = '?id=' + this.options[this.selectedIndex].value">
            <option value="">- Выберите автомобиль -</option>
            <?php
                $carResult = $mysqli->query("SELECT * FROM rent_cars ORDER BY name");
                while ($car = $carResult->fetch_assoc()) {
                    echo "<option value='" . $car['id'] . "'";
                    if ($_REQUEST['id'] == $car['id']) {
                        echo " selected";
                    }
                    echo ">" . $car['name'] . "</option>";
                }
            ?>
        </select>
        <br/><br/>
        <input type='button' id='addCarSubmit' value='Добавить автомобиль' onmouseover='buttonHover("addCarSubmit", 1)' onmouseout='buttonHover("addCarSubmit", 0)' onclick='window.location.href = "/admin/cars/add.php"' class='button'/>

        <?php
            if(!empty($_REQUEST['id'])) {
                $carResult = $mysqli->query("SELECT * FROM rent_cars WHERE id = '".$mysqli->real_escape_string($_REQUEST['id'])."'");
                $car = $carResult->fetch_assoc();

                echo "
                    <br /><br /><br /><br />
                    <hr />
                    <br /><br />
                    <span class='headerFont'>Редактирование автомобиля <span style='color: #939393;'>&laquo;".$car['name']."&raquo;</span></span>
                    <br /><br />
                    <label for='typeSelect'>Тип автомобиля:</label>
                    <br />
                    <select id='typeSelect' onchange='carTypeSelect(\"".$car['id']."\")'>
                ";

                $carTypeResult = $mysqli->query("SELECT * FROM rent_cars_types");
                while($carType = $carTypeResult->fetch_assoc()) {
                    echo "<option value='".$carType['id']."'"; if($carType['id'] == $car['car_type']) {echo " selected";} echo ">".$carType['name']."</option>";
                }

                echo "
                    </select>
                    <br /><br />
                    <label for='nameInput'>Название автомобиля:</label>
                    <br />
                    <input id='nameInput' value='".$car['name']."' />
                    <br /><br />
                    <label for='yearInput'>Год выпуска:</label>
                    <br />
                    <input id='yearInput' value='".$car['year']."' />
                    <br /><br />
                    <label for='engineInput'>Тип двигателя:</label>
                    <br />
                    <input id='engineInput' value='".$car['engine']."' />
                    <br /><br />
                    <label for='consumptionInput'>Расход топлива:</label>
                    <br />
                    <input id='consumptionInput' value='".$car['consumption']."' />
                    <br /><br />
                    <label for='transmissionInput'>Трансмиссия:</label>
                    <br />
                    <input id='transmissionInput' name='transmission' value='".$car['transmission']."' />
                    <br /><br />
                    <label for='bodyInput'>Тип кузова:</label>
                    <br />
                    <input id='bodyInput' value='".$car['body']."' />
                    <div id='placesContainer'>
                ";

                if($car['car_type'] == 2) {
                    echo "
                        <br /><br />
                        <label for='placesInput'>Количество мест:</label>
                        <br />
                        <input id='placesInput' value='".$car['places']."' />
                    ";
                }

                echo "
                    </div>
                    <br /><br />
                    <label for='descriptionInput'>Дополнительное описание (не обязательно):</label>
                    <br />
                    <textarea id='descriptionInput' name='description' onkeydown='textAreaHeight(this)'>" . $car['description'] . "</textarea>
                    <br /><br />
                    <label for='1_hourInput'>Стоимость за 1 час, руб.:</label>
                    <br />
                    <input id='1_hourInput' value='".$car['1_hour']."' />
                    <br /><br />
                    <label for='1_dayInput'>Стоимость за 1 сутки, руб.:</label>
                    <br />
                    <input id='1_dayInput' value='".$car['1_day']."' />
                    <br /><br />
                    <label for='2_daysInput'>Стоимость за 2 суток, руб.:</label>
                    <br />
                    <input id='2_daysInput' value='".$car['2_days']."' />
                    <br /><br />
                    <label for='3_10_daysInput'>Стоимость за 3-10 суток, руб.:</label>
                    <br />
                    <input id='3_10_daysInput' value='".$car['3_10_days']."' />
                    <br /><br />
                    <label for='10_20_daysInput'>Стоимость за 10-20 суток, руб.:</label>
                    <br />
                    <input id='10_20_daysInput' value='".$car['10_20_days']."' />
                    <br /><br />
                    <label for='20_30_daysInput'>Стоимость за 20-30 суток, руб.:</label>
                    <br />
                    <input id='20_30_daysInput' value='".$car['20_30_days']."' />
                    <br /><br />
                    <label for='min_termInput'>Минимальное время аренды:</label>
                    <br />
                    <input id='min_termInput' value='".$car['min_term']."' />
                    <br /><br />
                    <div style='width: 100%;'>
                        <input type='button' id='editSubmit' value='Редактировать' onmouseover='buttonHover(\"editSubmit\", 1)' onmouseout='buttonHover(\"editSubmit\", 0)' onclick='editCar()' class='button relative' />
                        <input type='button' id='deleteSubmit' value='Удалить' onmouseover='buttonHoverRed(\"deleteSubmit\", 1)' onmouseout='buttonHoverRed(\"deleteSubmit\", 0)' onclick='deleteCar()' class='button relative' style='margin-left: 10px;' />
                        <div class='clear'></div>
                    </div>
                ";
            }
        ?>
    </form>
</div>

</body>

</html>