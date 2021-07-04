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
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CodeWithRaja</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="https://Rajaraj.com/projects/" target="_blank">Latest Blog</a></li>
              <li><a class="dropdown-item" href="https://Rajaraj.com/projects/" target="_blank">Tech Blog</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="blog.php">Others</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php">Contact us</a>
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
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
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

  <div class="row mb-4 my-4">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Code</strong>
          <h3 class="mb-0">Latest Blog Post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This Section Contains all Latest Blog Posts.</p>
          <a href="blog.html" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/400x250/?ipad" alt="Error Code 404">
        </div>
      </div>
    </div>
    <div class="col-md-6 my-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Technology</strong>
          <h3 class="mb-0">Latest Tech news</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This Section Contains all Latest Tech news.
            additional content.</p>
          <a href="blog.html" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/400x250/?technology" alt="Error Code 404">
        </div>
      </div>
    </div>
  </div>


  <div class="row mb-2 my-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Science</strong>
          <h3 class="mb-0">Science News</h3>
          <div class="mb-1 text-muted">Feb 18</div>
          <p class="card-text mb-auto">My first look at my forever home: Perseverance sends home its first pictures of
            planet Mars.</p>
          <a href="https://rajaraj.com/mars-perseverance-rover-" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/400x250/?Science" alt="Error Code 404">
        </div>
      </div>
    </div>
    <div class="col-md-6 my-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">My Lifestyle</strong>
          <h3 class="mb-0">My Latest Trip</h3>
          <div class="mb-1 text-muted">March 01</div>
          <p class="mb-auto">This Section Contains all My Latest Trip.</p>
          <a href="https://rajaraj.com/my-trips/" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/400x250/?trip" alt="Error Code 404">
        </div>
      </div>
    </div>
  </div>


  <style>
    .jumbotron {
      border: 2px solid darkcyan;
    }
  </style>


  <div class="jumbotron bg-light text-center text-dark">
    <div class="container">
      <h1 class="display-6"><strong>CODING IS LIFE</strong></h1>
      <p class="lead" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">On stage at TechCrunch Disrupt in San
        Francisco, Mark Zuckerberg, Facebook co-founder and CEO,
        says that he still codes sometimes for fun. But there is a rule at Facebook, he says: “If you are checking in
        code, you have to maintain your code.”</p>
    </div>
  </div>


  <div class="album py-5 bg-light">
    <div class="container-fluid">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>

<footer class="bd-footer py-3 mt-3 bg-light">
  <div class="container py-3">
    <div class="row">
      <div class="col-lg-9 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
          <span class="fs-5"><strong>CodeWithRaja</strong></span>
        </a>
        <ul class="list-unstyled small text-muted">
          <li class="mb-2">Hey Guys This is <abbr title="CEO of Code Smashers">Raja raj</abbr> <a
              href="https://rajaraj.com/about/"> CEO Of Code Smashers</a> Founder & contributor <a
              href="https://github.com/Rajaraj1/">our contributors</a>.</li>
          <li class="mb-2">Code licensed <a href="https://github.com/Rajaraj1/CodeWithRaja_PHP.git" target="_blank"
              rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/"
              target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
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