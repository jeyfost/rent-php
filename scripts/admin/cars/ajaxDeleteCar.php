<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 19.04.2018
 * Time: 11:41
 */

include("../../connect.php");

$id = $mysqli->real_escape_string($_POST['id']);

if($mysqli->query("DELETE FROM rent_cars WHERE id = '".$id."'")) {
    echo "ok";
} else {
    echo "failed";
}