<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 20.04.2018
 * Time: 11:35
 */

include("../../connect.php");

$photosCountResult = $mysqli->query("SELECT COUNT(id) FROM rent_cars_photos");
$photosCount = $photosCountResult->fetch_array(MYSQLI_NUM);

$success = 0;

$photoResult = $mysqli->query("SELECT * FROM rent_cars_photos");
while($photo = $photoResult->fetch_assoc()) {
    if($mysqli->query("DELETE FROM rent_cars_photos WHERE id = '".$photo['id']."'")) {
        unlink("../../../images/cars/".$photo['big']);
        unlink("../../../images/cars/preview/".$photo['small']);

        $success++;
    }
}

if($success == 0) {
    echo "failed";
} else {
    if($success == $photosCount[0]) {
        echo "ok";
    } else {
        echo "partly";
    }
}