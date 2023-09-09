<?php
session_start();
if (isset($_SESSION['sessionId']) || isset($_SESSION['sessionId2'])) {
  session_unset();
  session_destroy();
  session_set_cookie_params(0);
}
?>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Insurance Management System</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Insurance Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Admin/Admin-Login.php">Admin</a></li>
              <li><a class="dropdown-item" href="Agent/Agent-Login.php">Agent</a></li>
              <li><a class="dropdown-item disabled" href="#">Customer</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
        <img src="../IMS-logos.jpeg" alt="logo" class="logo">
      </div>
    </div>
  </nav>
  <h1><b> Insurance Management System </b></h1>
  <br>
  <!-- <div class="">
    <h7>Choose login mode:</h7> <br>
    <button type="button" name=""><a href="Admin/Admin-Login.php"> Admin Mode </a></button>
    <button type="button" name=""><a href="Agent/Agent-Login.php"> Agent Mode </a></button>
  </div> -->
  <!-- <img src="background.jpg" alt="backgroundimage" class="background"> -->
</body>


</html>
<style>
  .logo {
    height: 3%;
    width: 3%;
  }
</style>