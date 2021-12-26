<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/admin-style.css">
    <style>
        .display {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        .alb {
            width: 200px;
            height: 200px;
            padding: 5px;
        }

        .alb img {
            width: 100%;
            height: 100%;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <!--------------------------------- NAVBAR ------------------------------------>
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="img/Flickr_logo.png" class="logo" alt=""></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="you.php">You</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="explore.php">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="print.php">Prints</a>
                    </li>
                </ul>
            </div>

            <form class="d-flex">
                <input class="form-control me-5" type="search" placeholder="Search" aria-label="Search">
                <a class="me-5" href="admin/upload-photo.php" target="_blank"><i class="fas fa-upload"></i></a>
                <a href="you.php"> <img class="avatar me-5 " src="img/hhh.PNG" alt=""></a>
                <a href="process-logout.php"><i class="fas fa-sign-out"></i></a>
            </form>

        </div>
    </nav>
    <?php require_once "config/config.php"; ?>
    <div class="container display">
        <?php
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn,  $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>

                <div class="alb">
                    <img src="img/<?php echo $images['image_url']; ?>">
                </div>

        <?php }
        } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>