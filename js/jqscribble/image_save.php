<?php

// Generate random hash for the image
function generateRandomString($length = 5) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

// Get current date for the filename.
$currDate = date("Ymdgi");

$data = $_POST['imagedata'];
$filename = '../../drawings/' . $currDate . '_' . generateRandomString() . '.png';

//Need to remove the stuff at the beginning of the string
$data = substr($data, strpos($data, ",")+1);
$data = base64_decode($data);
$imgRes = imagecreatefromstring($data);
if($imgRes !== false && imagepng($imgRes, $filename) === true)
    echo "<img src='{$filename}' alt='User created image'/>";
