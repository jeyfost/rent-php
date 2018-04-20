<?php
/**
 * Created by PhpStorm.
 * User: jeyfost
 * Date: 19.04.2018
 * Time: 16:15
 */

include("../../connect.php");
include("../image.php");

$req = false;
ob_start();

$photosCount = 0;
$errors = 0;

foreach ($_FILES['photos']['error'] as $key => $error) {
    if(!empty($_FILES['photos']['tmp_name'][$key])) {
        $photosCount++;

        if($error != UPLOAD_ERR_OK or substr($_FILES['photos']['type'][$key], 0, 5) != "image") {
            $errors++;
        }
    }
}

if($errors == 0) {
    $start = 0;
    $finish = 0;

    foreach ($_FILES['photos']['error'] as $key => $error) {
        if($error == UPLOAD_ERR_OK) {
            $previewTmpName = $_FILES['photos']['tmp_name'][$key];
            $previewName = randomName($previewTmpName);
            $previewDBName = $previewName.".".substr($_FILES['photos']['name'][$key], count($_FILES['photos']['name'][$key]) - 4, 4);
            $previewUploadDir = "../../../images/cars/preview/";
            $previewUpload = $previewUploadDir.$previewDBName;

            $photoTmpName = $_FILES['photos']['tmp_name'][$key];
            $photoName = randomName($photoTmpName);
            $photoDBName = $photoName.".".substr($_FILES['photos']['name'][$key], count($_FILES['photos']['name'][$key]) - 4, 4);
            $photoUploadDir = "../../../images/cars/";
            $photoUpload = $photoUploadDir.$photoDBName;

            $start++;

            if($mysqli->query("INSERT INTO rent_cars_photos (big, small) VALUES('".$previewDBName."', '".$photoDBName."')")) {
                resize($photoTmpName, 960, 444);
                copy($photoTmpName, $photoUpload);

                resize($previewTmpName, 40, 19);
                move_uploaded_file($previewTmpName, $previewUpload);

                $finish++;
            }
        }
    }

    if($start == $finish) {
        echo "ok";
    } else {
        if($finish == 0) {
            echo "failed";
        } else {
            echo "partly";
        }
    }
} else {
    echo "errors";
}

$req = ob_get_contents();
ob_end_clean();
echo json_encode($req);

exit;