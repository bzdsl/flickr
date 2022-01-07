<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Roboto', sans-serif;
        }

        #navTopP {
            height: 50px;
            background: rgba(10, 10, 10, 0.925)
        }

        .logo {
            width: 80px;
            margin-left: 25px;
        }
    </style>
</head>

<body>
    <nav id="navTopP" class="navbar navbar-dark navbar-expand-md bg-gradientg py-0 fixed-top ">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="../admin.php"><img class="logo" src="../img/Flickr_logo.png" alt=""></a>
            </div>
        </div>
    </nav>

    <form action="upload-process.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="Titles">

        <input type="file" name="my_image">

        <input type="submit" name="submit" value="Upload">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>