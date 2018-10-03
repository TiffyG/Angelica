<?php
include ("connection.php");

$img_pagename = $_POST['pagename'];
$target_dir = "C:\PhpStorm\Angelica\images\Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $img_location = 'Uploads/'.basename( $_FILES["fileToUpload"]["name"]);
        $sql = $conn->query("INSERT INTO `images` (url, pagename) VALUES ('$img_location', '$img_pagename')");
    }
echo "<button><a href='welcome.php?action=logout'>Back</button>";