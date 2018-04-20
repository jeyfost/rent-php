<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 20.04.2018
 * Time: 11:00
 */

include("../../connect.php");

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