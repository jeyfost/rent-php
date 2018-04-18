<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 18.04.2018
 * Time: 15:05
 */

include("../connect.php");

$id = $mysqli->real_escape_string($_POST['id']);

$textResult = $mysqli->query("SELECT text FROM rent_text WHERE page_id = '".$id."'");
$text = $textResult->fetch_array(MYSQLI_NUM);

echo $text[0];