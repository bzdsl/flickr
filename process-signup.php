<?php
require_once "config/config.php";

if (isset($_POST['btnSignUp'])) {
    header("location: signup.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql01 = "SELECT * FROM tbl_user WHERE email = '$email'";

    $result01 = mysqli_query($conn, $sql01);
    if (mysqli_num_rows($result01) > 0) {
        $error1 = "Email is existed";
        header("location:signup.php?error=$error1");
    } else {
        $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);
        $sql02 = "INSERT INTO tbl_user(fname,lname,age,email,pwd) VALUES ('$fname','$lname','$age','$email','$pwd_hash')";
        $result02 = mysqli_query($conn, $sql02);
        if ($result02 == true) {
            $successed = "Sign up successed";
            header("location:signup.php?signupsuccessed='$successed'");
        } else {
            $error01 = "Cant not insert record. Please redo";
            header("location: signup.php?error:$error01");
        }

        //$sql02 = "INSERT INTO tbl_user (fname, lname, age,email,pwd) VALUES (?, ?, ?, ?, ?)";

        //if ($stmt = mysqli_prepare($conn, $sql02)) {
        // Bind variables to the prepared statement as parameters
        //    mysqli_stmt_bind_param($stmt, "sssss", $param_fname, $param_lname, $param_age, $param_email, $param_pwd);

        // Set parameters
        //   $param_fname = $fname;
        //   $param_lname = $lname;
        //   $param_age = $age;
        //   $param_email = $email;
        //   $param_pwd = $password_hash($pwd,PASSWORD_DEFAULT); // Creates a password hash

        // Attempt to execute the prepared statement
        //   if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        //      $successed = "Sign up successed";
        //      header("location:signup.php?signupsuccessed=$successed");
        // } else {
        //     $error01 = "Cant not insert record. Please redo";
        //     header("location: signup.php?error:$error01");
        // }

        // Close statement
        //  mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
