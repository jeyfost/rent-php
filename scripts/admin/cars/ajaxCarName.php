<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 19.04.2018
 * Time: 11:39
 */

include("../../connect.php");

$id = $mysqli->real_escape_string($_POST['id']);

$nameResult = $mysqli->query("SELECT name FROM rent_cars WHERE id = '".$id."'");
$name = $nameResult->fetch_array(MYSQLI_NUM);

echo $name[0];