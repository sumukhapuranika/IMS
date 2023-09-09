<?php
require_once '../header.php';
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
                    <a href="../Admin-Register.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Add new Admin <i class="fa fa-fw  "></i></a>
                </li>
                <li>
                    <a href="../../Agent/Agent-Register.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> Add new Agent <i class="fa fa-fw"></i></a>
                </li>
                <li>
                    <a href="../View/ViewAgentList.php"><i class="fa fa-fw fa-user-plus"></i> View agent List</a>
                </li>
                <li>
                    <a href="../View/ViewPolicy.php"><i class="fa fa-fw fa-paper-plane-o"></i> View policy record</a>
                </li>
                <li>
                    <a href="PlanDetails.php"><i class="fa fa-fw fa fa-question-circle"></i> Modify plan</a>
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



    <div class="container">
        <a href="http://localhost/Insurance-Management-System/DBMS/Admin/Plan/PlanDetails.php" id="back" class="btn btn-dark">Back</a>


        <h1>Add New Plan</h1>

        <table class="table">

    

        <form class="" action="../includes/AddNewPlan-inc.php" method="post">
            <input type="number" name="Plan_no" placeholder="Plan Number (3 digit)" min="100" max="999" style="width: 150px;" required>
            <input type="text" name="Name" placeholder="Name" required>
            <input type="number" name="MMA" placeholder="Maximum Maturity Age" required>
            <input type="number" name="min_SA" placeholder="Minimum Sum Assured" required>
            <input type="number" name="max_SA" placeholder="Maximum Sum Assured" required>
            <input type="number" name="min_age" placeholder="Minimum Age" required>
            <input type="number" name="max_age" placeholder="Maximum Age" required>
            <br><br>
            <h7> Mode: </h7>
            <input type="checkbox" name="Mode_Yearly" value=1>
            <label for="Mode_Yearly">Yearly </label>
            <input type="checkbox" name="Mode_Halfly" value=1>
            <label for="Mode_Halfly">Halfly </label>
            <input type="checkbox" name="Mode_Quartely" value=1>
            <label for="Mode_Quartely">Quartely </label>
            <input type="checkbox" name="Mode_Monthly" value=1>
            <label for="Mode_Monthly">Monthly </label>
            <input type="checkbox" name="Mode_Single" value=1>
            <label for="Mode_Single">Single Premium </label>
            <br><br>
            <h7> Type of Term: </h7>
            <input type="radio" id="Range" name="Type_term" value=0 checked>
            <label for="Range">Range</label>
            <input type="radio" id="Specific" name="Type_term" value=1>
            <label for="Specific">Specific</label>
            <br><br>
            <table class="table">
                <tr>
                    <td>
                        <h7> Term: </h7>
                    </td>
                    <td><input type="number" name="T1" required></td>
                    <td><input type="number" name="T2" required></td>
                    <td><input type="number" name="T3"></td>
                    <td><input type="number" name="T4"></td>
                </tr>
                <tr>
                    <td>
                        <h7> Premium Paying Term: </h7>
                    </td>
                    <td><input type="number" name="P1"></td>
                    <td><input type="number" name="P2"></td>
                    <td><input type="number" name="P3"></td>
                    <td><input type="number" name="P4"></td>
                </tr>
            </table>

            <br><br>
            <button type="submit" name="submit" class="btn btn-dark">Add Plan</button>
        </form>
        </table>
    </div>
    <style>
        #back {
            margin-top: 30px;
        }
    </style>


    <?php
    require_once '../footer.php';
    ?>