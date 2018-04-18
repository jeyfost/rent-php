<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 18.04.2018
 * Time: 15:10
 */

include("../../connect.php");

$id = $mysqli->real_escape_string($_POST['id']);
$text = $mysqli->real_escape_string($_POST['text']);

if($mysqli->query("UPDATE rent_text SET text = '".$text."' WHERE page_id = '".$id."'")) {
    echo "ok";
} else {
    echo "failed";
}