<?php
require_once '../Admin/header.php';
// require_once '../Admin/AdminMenu.php'

 ?>

 <!-- Admin Menu starts -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="">
                <h3 style="margin-top: -5px;">Admin Dashboard</h3>
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-center top-nav">
            <a class="btn btn-light" href="http://localhost/Insurance-Management-System/DBMS/index.php" role="button">Logout</a>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="../Admin/Admin-Register.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Add new Admin <i class="fa fa-fw  "></i></a>
                </li>
                <li>
                    <a href="Agent-Register.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> Add new Agent <i class="fa fa-fw"></i></a>
                </li>
                <li>
                    <a href="../Admin/View/ViewAgentList.php"><i class="fa fa-fw fa-user-plus"></i> View agent List</a>
                </li>
                <li>
                    <a href="../Admin/View/ViewPolicy.php"><i class="fa fa-fw fa-paper-plane-o"></i> View policy record</a>
                </li>
                <li>
                    <a href="../Admin/Plan/PlanDetails.php"><i class="fa fa-fw fa fa-question-circle"></i> Modify plan</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
<style>
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    @media(min-width:768px) {
        body {
            margin-top: 50px;
        }

        /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
    }

    #wrapper {
        padding-left: 0;
    }

    #page-wrapper {
        width: 100%;
        padding: 0;
        background-color: #fff;
    }

    @media(min-width:768px) {
        #wrapper {
            padding-left: 225px;
        }

        #page-wrapper {
            padding: 22px 10px;
        }
    }

    /* Top Navigation */

    .top-nav {
        padding: 0 15px;
    }

    /* .top-nav>li {
    display: inline-block;
    float: left;
  } */


    .top-nav>li>a {
        padding-top: 20px;
        padding-bottom: 20px;
        line-height: 20px;
        color: #fff;
    }

    .top-nav>li>a:hover,
    .top-nav>li>a:focus,
    .top-nav>.open>a,
    .top-nav>.open>a:hover,
    .top-nav>.open>a:focus {
        color: #fff;
        background-color: #1a242f;
    }

    .top-nav>.open>.dropdown-menu {
        float: left;
        position: absolute;
        margin-top: 0;
        /*border: 1px solid rgba(0,0,0,.15);*/
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-color: #fff;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    .top-nav>.open>.dropdown-menu>li>a {
        white-space: normal;
    }

    /* Side Navigation */

    @media(min-width:768px) {
        .side-nav {
            position: fixed;
            top: 60px;
            left: 225px;
            width: 225px;
            margin-left: -225px;
            border: none;
            border-radius: 0;
            border-top: 1px rgba(0, 0, 0, .5) solid;
            overflow-y: auto;
            background-color: #222;
            /*background-color: #5A6B7D;*/
            bottom: 0;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        .side-nav>li>a {
            width: 225px;
            border-bottom: 1px rgba(0, 0, 0, .3) solid;
        }

        .side-nav li a:hover,
        .side-nav li a:focus {
            outline: none;
            background-color: #1a242f !important;
        }
    }

    .side-nav>li>ul {
        padding: 0;
        border-bottom: 1px rgba(0, 0, 0, .3) solid;
    }

    .side-nav>li>ul>li>a {
        display: block;
        padding: 10px 15px 10px 38px;
        text-decoration: none;
        /*color: #999;*/
        color: #fff;
    }

    .side-nav>li>ul>li>a:hover {
        color: #fff;
    }

    .navbar .nav>li>a>.label {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        position: absolute;
        top: 14px;
        right: 6px;
        font-size: 10px;
        font-weight: normal;
        min-width: 15px;
        min-height: 15px;
        line-height: 1.0em;
        text-align: center;
        padding: 2px;
    }

    .navbar .nav>li>a:hover>.label {
        top: 10px;
    }

    /* .navbar-brand {
  margin-left: 0px; 

} */

    .dash {
        margin: auto;
        padding-top: 10px;
    }

</style>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    })
</script>
 <!-- Admin menu ends -->

<div>
<h1>Agent Sign-Up</h1>

<form class="formm" action="includes/Agent-register-inc.php" method="post">
  <input type="number" name="Agency_code" placeholder="Agency_code (7 digit)" min="1000000" max="9999999" style="width: 160px;" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br><br>
  <input type="text" name="Name" placeholder="Name" required><br><br>
  <input type="number" name="Mobile_no" placeholder="Mobile Number" min="5000000000" max="9999999999" required><br><br>
  <input type="email" name="Email_id" placeholder="E-mail" required><br><br>
  <input type="text" name="Designation" placeholder="Designation"><br><br>
  <input type="text" name="City" placeholder="City"><br><br>
  <h6>Date of Birth:</h6><br>
  <input type="date" name="DOB" placeholder="Date of Birth"><br><br>
  <button type="submit" id="submit" name="submit">Register</button>
</form>

</div>
<style>
input[type=text],input[type=email],input[type=number],input[type=password],input[type=date],input[type=submit], select {
  width: 50%;
  padding: 12px 20px;
  margin-left: 420px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date] {
  margin-left: 420px;
}



#submit {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin-left:420px;
  margin-right: 200px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

h6{
  margin-left: 420px;
}
h1{
  margin-left: 600px;
}
#but{
  margin-left: 420px;
}
#but {
  background-color: #04AA6D;
  color: white;
  width: 50%;
  padding: 12px 20px;
  margin-left: 420px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  opacity: 0.9;
}

#but:hover {
  opacity: 1;
}


form {
    display: block;
    margin-left: -250px;
}
h1{
    margin-left: 300px;
}
</style>

<?php
require_once '../Admin/footer.php';
 ?>
