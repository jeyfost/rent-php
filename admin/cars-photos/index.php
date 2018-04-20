<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 19.04.2018
 * Time: 15:29
 */

session_start();
include("../../scripts/connect.php");

?>

<html>

<head>

    <meta charset="utf-8" />

    <title>Панель администрирования | Фотографии автомобилей</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="/css/admin.css" />
    <link rel="stylesheet" href="/libs/font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="/libs/lightview/css/lightview/lightview.css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/libs/notify/notify.js"></script>
    <script type="text/javascript" src="/libs/lightview/js/lightview/lightview.js"></script>
    <script type="text/javascript" src="/js/admin/common.js"></script>
    <script type="text/javascript" src="/js/admin/cars-photos/index.js"></script>

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
        <div class="menuPoint">
            <i class="fa fa-car" aria-hidden="true"></i><span> Автомобили</span>
        </div>
    </a>
    <a href="/admin/cars-photos/">
        <div class="menuPointActive">
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
    <span class="headerFont">Редактирование фотографий автомобилей</span>
    <br /><br />
    <form method="post" id="photosForm" enctype="multipart/form-data">
        <label for="photosInput">Выберите новые фотографии:<br /><b>(Итоговый размер фотографий на сайте: 960x444)</b></label>
        <br />
        <input type="file" class="file" multiple="multiple" id="photosInput" name="photos[]" />
        <br /><br />
        <input type='button' id='addSubmit' value='Добавить фотографии' onmouseover='buttonHover("addSubmit", 1)' onmouseout='buttonHover("addSubmit", 0)' onclick='addPhotos()' class='button' />
    </form>
    <br /><hr /><br />
    <span>Фотографии:</span>
    <br /><br />
    <div id="additionalPhotosContainer">
        <?php
            $photoResult = $mysqli->query("SELECT * FROM rent_cars_photos");
            while($photo = $photoResult->fetch_assoc()) {
                echo "
                    <div class='photoPreview'>
                        <a href='/images/cars/".$photo['big']."' class='lightview' data-lightview-group='cars-photos' data-lightview-options='skin: \"light\"'>
                            <img src='/images/cars/".$photo['big']."' style='width: 100px;' />
                        </a>
                        <br />
                        <span onclick='deletePhoto(\"".$photo['id']."\")'>Удалить</span>
                    </div>
                ";
            }
        ?>
    </div>
    <br />
    <form method="post" name="deleteForm">
        <input type='button' id='deleteSubmit' value='Удалить все фотографии' onmouseover='buttonHoverRed("deleteSubmit", 1)' onmouseout='buttonHoverRed("deleteSubmit", 0)' onclick='deleteAllPhotos()' class='button' />
    </form>
</div>

</body>

</html>