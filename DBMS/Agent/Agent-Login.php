<?php
session_start();
require_once 'C:\xampp\htdocs\Insurance-Management-System\DBMS\database.php';
if (!isset($_SESSION['sessionId'])) {
  if (!($_SERVER['REQUEST_URI'] == '/Insurance-Management-System/DBMS/Agent/Agent-Login.php')) {
    header('Location: http://localhost/Insurance-Management-System/DBMS');
  }
}
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Insurance Management System</title>
</head>

<body>
  <!-- <h1>Agent Login</h1>

<form class="" action="includes/Agent-Login-inc.php" method="post">
  <input type="number" name="Agency_code" placeholder="Agency Code" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="submit">Login</button>
</form>

</div>
<br><br>
<button type="button" name="Home"> <a href="../index.php">Home</a> </button> -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <div id="fullscreen_bg" class="fullscreen_bg" />

  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Agent Login</li>
      </ol>
    </nav>
    <h1 class="form-signin-heading text-muted">Agent Login</h1>
    <form class="form-signin" action="includes/Agent-Login-inc.php" method="post">
      <input type="number" class="form-control" name="Agency_code" placeholder="Agency Code" required>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
    </form>

  </div>
  <style>
    body {
      padding-top: 120px;
      padding-bottom: 40px;
      background-color: #eee;

    }

    .btn {
      outline: 0;
      border: none;
      border-top: none;
      border-bottom: none;
      border-left: none;
      border-right: none;
      box-shadow: inset 2px -3px rgba(0, 0, 0, 0.15);
    }

    .btn:focus {
      outline: 0;
      -webkit-outline: 0;
      -moz-outline: 0;
    }

    .fullscreen_bg {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-size: cover;
      background-position: 50% 50%;
      background-image: url('http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg');
      background-repeat: repeat;
    }

    .form-signin {
      max-width: 280px;
      padding: 15px;
      margin: 0 auto;
      margin-top: 50px;
    }

    .form-signin .form-signin-heading,
    .form-signin {
      margin-bottom: 10px;
    }

    .form-signin .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="number"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
      border-top-style: solid;
      border-right-style: solid;
      border-bottom-style: none;
      border-left-style: solid;
      border-color: #000;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      border-top-style: none;
      border-right-style: solid;
      border-bottom-style: solid;
      border-left-style: solid;
      border-color: rgb(0, 0, 0);
      border-top: 1px solid rgba(0, 0, 0, 0.08);
    }

    .form-signin-heading {
      color: #fff;
      text-align: center;
      text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    }
  </style>
</body>

</html>