<?php 
$insert = false;
$servername = "sql210.byetcluster.com";
$username = "epiz_27899752";
$password = "Fp7XBzix5YehPk";
$database = "epiz_27899752_form";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//     echo "Connection is Successful";
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_POST["email"];
$password = $_POST["password"];
$text = $_POST["text"];

// Sql query to be executed
$sql = "INSERT INTO `form` (`email`, `password`,`text`) VALUES ('$email', '$password','$text')";
$result = mysqli_query($conn, $sql);

 
if($result){ 
    $insert = true;
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
} 
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeWithRaja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <title>CodeWithRaja</title>


    <style>
        /* .container-fluid {
        border: 2px solid black;
        background-color: #fff;
    } */

        .nav {
            /* background-color: darkcyan; */
        }

        .nav-link {
            color: black;
        }

        .nav-link:hover {
            color: white;
            background-color: sandybrown;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CodeWithRaja</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://Rajaraj.com"> Visit Code Smashers</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://Rajaraj.com/projects/" target="_blank">Latest
                                    Blog</a></li>
                            <li><a class="dropdown-item" href="https://Rajaraj.com/projects/" target="_blank">Tech
                                    Blog</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://Rajaraj.com/projects/" target="_blank">Others</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride=" carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/ipad.jpeg" class="d-block w-100" alt="ipad.jpeg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hey Guys This is Raja raj</h5>
                    <p>Welcome to CodeWithRaja.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/lapiGirl.jpeg" class="d-block w-100" alt="lapiGirl.jpeg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hey Guys This is Raja raj</h5>
                    <p>Welcome to CodeWithRaja.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/iphone4.jpeg" class="d-block w-100" alt="iphone4.jpeg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hey Guys This is Raja raj</h5>
                    <p>Welcome to CodeWithRaja.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container my-3">
        <h2 style="color: blue; text-align: center; text-decoration: underline;" id="WHOAMI"><b>WHOAMI</b></h2>
        <br>
        <p></p>
        <img class="img"
            style="border: 3px dashed black; border-color: black red green yellow; margin-left: 10px; margin-top: -30px; max-width: 300px; max-height: 300;"
            src="images/Raja.jpg" alt="Error Code 404">
    </div>

    <div class="container">
        <style>
            .container {
                text-align: center;

            }
        </style>
        <ul>
            <p>I AM <a href="https://rajaraj.com/about/" style="text-decoration: none;">RAJA RAJ</a>.
                <br>
            <p></p>
            I Am A CSE Student In Chandigarh University(CU).
            <br>
            <p></p>
            I Am Here To Help You All In Coding Ethical-Hacking.
            <br>
            <p></p>
            If You Are Interested In Coding Ethical-Hacking Then Visit Our Blog Section Daily.
            <br>
            <p></p>
            If You have Any Query Related Coding Ethical-Hacking Then Please Let Me Know In Comment Box I Will Surely
            help You All
            </p>
            <br>

        </ul>
    </div>
</body>

<footer class="bd-footer py-3 mt-3 bg-light">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-9 mb-3">
                <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
                    aria-label="Bootstrap">
                    <span class="fs-5"><strong>CodeWithRaja</strong></span>
                </a>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2">Hey Guys This is <abbr title="CEO of Code Smashers">Raja raj</abbr> <a
                            href="https://rajaraj.com/about/"> CEO Of Code Smashers </a></li>
                    <li class="mb-2">Code licensed <a href="https://github.com/Rajaraj1/CodeWithRaja_PHP.git"
                            target="_blank" rel="license noopener">MIT</a>, docs <a
                            href="https://creativecommons.org/licenses/by/3.0/" target="_blank"
                            rel="license noopener">CC BY 3.0</a>.</li>
                    <li class="mb-2">Currently v5.0.2.</li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php">Home</a></li>
                    <li class="mb-2"><a href="about.php">About us</a></li>
                    <li class="mb-2"><a href="https://Rajaraj.com/projects/">Blog</a></li>
                    <li class="mb-2"><a href="contact.php">Contact us</a></li>
                    <li class="mb-2"><a href="https://Rajaraj.com">Code Smashers</a></li>
                    <li class="mb-2"><a href="https://github.com/Rajaraj1/">Our Github Page</a>.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <h5>Copyright © 2021 Rajaraj.com</h5>
        <h5>All Rights Reserved.</h5>
    </div>
</footer>

</html>