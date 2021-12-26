<?php
session_start();
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    require_once "config/config.php";
    $sql = "SELECT * FROM tbl_user WHERE email ='$email'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pwd_hash = $row['pwd'];
        if (password_verify($pwd, $pwd_hash)) {
            $_SESSION['loggedin'] = $email;
            header("location: admin.php");
        } else {
            $error = "Email or password is not correct";
            header("location: login.php?error=$error");
        }
    } else {
        $error = "Email is not exist";
        header("location: login.php?error=$error");
    }
    mysqli_close($conn);
} else {
    header("location:login.php?error");
}
