<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 20.04.2018
 * Time: 11:25
 */

include("../../connect.php");

$id = $mysqli->real_escape_string($_POST['id']);

$photoCheckResult = $mysqli->query("SELECT COUNT(id) FROM rent_cars_photos WHERE id = '".$id."'");
$photoCheck = $photoCheckResult->fetch_array(MYSQLI_NUM);

if($photoCheck[0] == 1) {
    $photoResult = $mysqli->query("SELECT * FROM rent_cars_photos WHERE id = '".$id."'");
    $photo = $photoResult->fetch_assoc();

    if($mysqli->query("DELETE FROM rent_cars_photos WHERE id = '".$id."'")) {
        unlink("../../../images/cars/".$photo['big']);
        unlink("../../../images/cars/preview/".$photo['small']);

        echo "ok";
    } else {
        echo "failed";
    }
} else {
    echo "id";
}