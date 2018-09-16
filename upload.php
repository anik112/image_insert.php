<?php

require 'database.php'; // require database file

$dataTime = date("Y-m-d H:i:s"); // get current time and date

print_r($_FILES['image']); // print file
 
// check file submit
if(isset($_GET['submit']) && $_FILES['image']){
    $check = getimagesize($_FILES["image"]["tmp_name"]); // get image size
    // check if image selected
    if($check !== false){

        $image = $_FILES['image']['tmp_name']; // get image
        $imgContent = addslashes(file_get_contents($image)); // convart image into bainary file
        
        //Insert image content into database
        $insert = $db->prepare("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        // check image insert
        if($insert){
            echo "File uploaded successfully."; // show massage
        }else{
            echo "File upload failed, please try again."; // show massage
        } 
    }else{
        echo "Please select an image file to upload."; // show massage
    }
}


?>