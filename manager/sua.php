<?php
include '../config/config.php';

session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php");
}
$idkhach = $_GET['id'];
$errors = array(); // Initialize an error array. 

$query2 = mysqli_query($conn, "select * from tbl_user where id='$idkhach'");
$row2 = mysqli_fetch_array($query2);

if (isset($_POST['update_user'])) {


    $mk1 = $_POST['mang'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $age = $_POST['tuoi'];
    $sql = "UPDATE tbl_user SET pwd='$mk1', lname='$lname', email='$email', age='$age', fname='$fname'  WHERE id='$idkhach'";
    //#4
    mysqli_query($conn, $sql);
    $url = "thanhcong.php";
    header('location:' . $url);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


    <style>
        h2.header {
            width: 100%;
            color: #e9558b;
            font-size: 50px;
            margin: 60px auto 20px;
            text-align: center;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Sửa</title>
</head>

<body>
    <div>
        <div>
            <form method="POST" class="form" id="form-1">
                <center>
                    <div class="mb-3">
                        <label class="form-message"></label>
                        <div class="cauhoi">
                            <br>
                            <h4>Họ</h4>
                            <input style="width:100; font-size: 20px;" type="text" class="form-contr" name="lname" value="<?php echo $row2['lname']; ?>">
                            <br>
                            <h4>Tên</h4>
                            <input style="width:100; font-size: 20px;" type="text" class="form-contr" name="fname" value="<?php echo $row2['fname']; ?>">
                            <br>
                            <h4>Email</h4>
                            <input style="width:100; font-size: 20px;" type="email" class="form-contr" name="email" value="<?php echo $row2['email']; ?>">
                            <br>
                            <h4>Tuổi</h4>
                            <input style="width:100; font-size: 20px;" type="number" class="form-contr" name="tuoi" value="<?php echo $row2['age']; ?>">
                            <br>
                            <h4>Mật khẩu</h4>
                            <input style="width:100; font-size: 20px;" type="password" class="form-contr" name="mang" value="<?php echo $row2['pwd']; ?>">
                        </div>
                    </div>
                    <div class="footer">
                        <div class="footer_l">

                            <button name="update_user" class="btn" style="width:100; font-size: 20px;">Đổi</button>
                        </div>
                    </div>
                </center>
            </form>
        </div>
    </div>
</body>

</html>