<?php

if (isset($_POST['submit'])) {
    include "../config/config.php";
    $id = $_GET['id'];
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";
    $filename = $_POST['filename'];
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 7000000) { //7mb
            $em = "Sorry, your file is too large.";
            header("Location: upload-photo.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = $filename . "." . uniqid("", true) . '.' . $img_ex_lc;
                $img_upload_path = '../img/upload/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO images(image_url,title,idkhach) 
				        VALUES('$new_img_name','$filename','$id')";
                mysqli_query($conn, $sql);
                $url = "../admin.php?id=" . $id . "";
                header('location:' . $url);
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }
} else {
    header("Location: upload-photo.php?error");
}
