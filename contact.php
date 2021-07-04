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

  <?php
if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Inserstion Successful</strong> Your response has been recorded.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";}
?>

  <div class="container my-3">
    <form action="https://codewithraja.lovestoblog.com/contact.php" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div>
        <select class="form-select" aria-label="Default select example">
          <option selected>Your Query Related to</option>
          <option value="1">Hacking</option>
          <option value="2">Programming</option>
          <option value="3">Others</option>
        </select>
      </div>
      <p></p>
      <div class="mb-3">
        <label for="text" class="form-label">Write Your Query Here</label>
        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
      </div>

      <div>
        <label for="customRange1" class="form-label">Your IQ Level According to you</label>
        <input type="range" class="form-range" id="customRange1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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