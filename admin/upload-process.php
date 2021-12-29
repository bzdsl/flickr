<?php

// if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
//     include "../config/config.php";

//     echo "<pre>";
//     print_r($_FILES['my_image']);
//     echo "</pre>";

//     $img_name = $_FILES['my_image']['name'];
//     $img_size = $_FILES['my_image']['size'];
//     $tmp_name = $_FILES['my_image']['tmp_name'];
//     $error = $_FILES['my_image']['error'];

//     if ($error === 0) {
//         if ($img_size > 200000) {
//             $em = "Sorry, your file is too large.";
//             header("Location: upload-photo.php?error=$em");
//         } else {
//             $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
//             $img_ex_lc = strtolower($img_ex);
//             $allowed_exs = array("jpg", "jpeg", "png");

//             if (in_array($img_ex_lc, $allowed_exs)) {
//                 $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
//                 $img_upload_path = 'img/' . $new_img_name;
//                 move_uploaded_file($tmp_name, $img_upload_path);

//                 // Insert into Database
//                 $sql = "INSERT INTO images(image_url) 
// 				        VALUES('$new_img_name')";
//                 mysqli_query($conn, $sql);
//                 header("Location:../you.php");
//             } else {
//                 $em = "You can't upload files of this type";
//                 header("Location: upload-photo.php?error=$em");
//             }
//         }
//     } else {
//         $em = "unknown error occurred!";
//         header("Location: upload-photo.php?error=$em");
//     }
// } else {
//     header("Location: upload-photo.php");
// }

// Include the database configuration file
include '../config/config.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        // if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        // Insert image file name into database
        $sql = "INSERT into image (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())";
        $insert = mysqli_query($conn, $sql);
        if ($insert) {
            $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
            echo "<script type='text/javascript'>alert('$statusMsg');</script>";
            header("Location: upload-photo.php?Message=" . urlencode($statusMsg));
        } else {
            $statusMsg = "File upload failed, please try again.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
