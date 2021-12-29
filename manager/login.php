<?php
session_start();
if (isset($_POST['sign-in']) && $_POST['username'] != '' && $_POST['password'] != '') {
    $t1 = $_POST['username'];
    $t2 = $_POST['password'];
    include '../config/config.php';

    $sql = "SELECT * FROM admin WHERE username = '$t1' AND password = '$t2'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['login'] = $t1;
        header('location: manager.php');
        die();
    } else {
        $error = "Email or password is not correct";
        header("location:index.php?error=$error");
    }
} else {
    $error2 = "Can't connect";
    header("location:index.php?error=$error2");
}
?>
<?php
function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>

