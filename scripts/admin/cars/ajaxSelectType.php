<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 19.04.2018
 * Time: 10:27
 */

include("../../connect.php");

$id = $mysqli->real_escape_string($_POST['id']);
$type = $mysqli->real_escape_string($_POST['type']);

if($type == 2) {
    $carResult = $mysqli->query("SELECT * FROM rent_cars WHERE id = '".$id."'");
    $car = $carResult->fetch_assoc();

    echo "
        <br /><br />
        <label for='placesInput'>Количество мест:</label>
        <br />
        <input id='placesInput' value='".$car['places']."' />
    ";
} else {
    echo "empty";
}