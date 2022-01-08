<?php
include "../config/config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['delete_id'];
    $url = $_POST['delete_url'];
    $title = $_POST['delete_title'];

    $sql2 = "DELETE FROM images WHERE id = '$id'";
    $query_run = mysqli_query($conn, $sql2);
    if ($query_run) {
        unlink("../img/upload/'" . $url);

        header("Location: ../admin.php");
    } else {
        header("Location: test.php");
    }
}
