<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 19.04.2018
 * Time: 12:37
 */

include("../../connect.php");

$type = $mysqli->real_escape_string($_POST['type']);
$name = $mysqli->real_escape_string($_POST['name']);
$year = $mysqli->real_escape_string($_POST['year']);
$engine = $mysqli->real_escape_string($_POST['engine']);
$consumption = $mysqli->real_escape_string($_POST['consumption']);
$transmission = $mysqli->real_escape_string($_POST['transmission']);
$body = $mysqli->real_escape_string($_POST['body']);
$places = $mysqli->real_escape_string($_POST['places']);
$description = $mysqli->real_escape_string($_POST['description']);
$hour_1 = $mysqli->real_escape_string($_POST['hour_1']);
$day_1 = $mysqli->real_escape_string($_POST['day_1']);
$days_2 = $mysqli->real_escape_string($_POST['days_2']);
$days_3_10 = $mysqli->real_escape_string($_POST['days_3_10']);
$days_10_20 = $mysqli->real_escape_string($_POST['days_10_20']);
$days_20_30 = $mysqli->real_escape_string($_POST['days_20_30']);
$min_term = $mysqli->real_escape_string($_POST['min_term']);

if($type == 2 and empty($places)) {
    echo "places";
} else {
    if($mysqli->query("INSERT INTO rent_cars (car_type, name, year, engine, consumption, transmission, body, description, 1_hour, 1_day, 2_days, 3_10_days, 10_20_days, 20_30_days, min_term) VALUES ('".$type."', '".$name."', '".$year."', '".$engine."', '".$consumption."', '".$transmission."', '".$body."', '".$description."', '".$hour_1."', '".$day_1."', '".$days_2."', '".$days_3_10."', '".$days_10_20."', '".$days_20_30."', '".$min_term."')")) {
        echo "ok";
    } else {
        echo "failed";
    }
}