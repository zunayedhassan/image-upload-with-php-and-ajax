<?php
require_once 'CommonTools.php';

session_start();

$target_dir     = "../uploads/";
$target_file    = $target_dir . basename($_FILES["file"]["name"]);
$isUploadOk     = TRUE;
$imageFileType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check          = getimagesize($_FILES["file"]["tmp_name"]);

if ($check !== false) {
    $isUploadOk = TRUE;
}
else {
    $isUploadOk = FALSE;
}

if ($isUploadOk) {
    $tempFileName = $_FILES["file"]["tmp_name"];
    
    if (move_uploaded_file ($tempFileName , $target_file)) {
        CommonTools::REFRESH_GALLERY();
    }
}


