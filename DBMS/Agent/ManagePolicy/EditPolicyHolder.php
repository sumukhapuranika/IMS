<?php
require_once '../header.php';
require '../../database.php';

$policy_no = $_GET['Policy_no'];
$name = $_GET['Name'];

$sql = "SELECT * FROM Policy_holder WHERE Policy_no = $policy_no AND Name = '$name'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        $row = mysqli_fetch_assoc($result); ?>


<!-- Agent Main Menu Starts -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/Insurance-Management-System/DBMS/Agent/MainMenu.php">Agent Menu</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="http://localhost/Insurance-Management-System/DBMS/index.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ManagePolicy.php">
              Manage Policy
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PolicyOptions/PlanPresentation.php">
              Plan Presentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PolicyOptions/SearchPolicyDetails.php">
              Search Policy Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PolicyOptions/CommissionReports.php">
              Commission Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PolicyOptions/BusinessReport.php">
              Business Report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PremiumPaymentRecord/PremiumPaymentRecord.php">
              Premium Payment Report
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
        <style>
          body {
            font-size: .875rem;
          }

          .feather {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
          }

          /*
 * Sidebar
 */

          .sidebar {
            position: fixed;
            top: 0;
            /* rtl:raw:
  right: 0;
  */
            bottom: 0;
            /* rtl:remove */
            left: 0;
            z-index: 100;
            /* Behind the navbar */
            padding: 48px 0 0;
            /* Height of navbar */
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
          }

          @media (max-width: 767.98px) {
            .sidebar {
              top: 5rem;
            }
          }

          .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
          }

          .sidebar .nav-link {
            font-weight: 500;
            color: #333;
          }

          .sidebar .nav-link .feather {
            margin-right: 4px;
            color: #727272;
          }

          .sidebar .nav-link.active {
            color: #2470dc;
          }

          .sidebar .nav-link:hover .feather,
          .sidebar .nav-link.active .feather {
            color: inherit;
          }

          .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
          }

          /*
 * Navbar
 */

          .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
          }

          .navbar .navbar-toggler {
            top: .25rem;
            right: 1rem;
          }

          .navbar .form-control {
            padding: .75rem 1rem;
            border-width: 0;
            border-radius: 0;
          }

          .form-control-dark {
            color: #fff;
            background-color: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .1);
          }

          .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
          }
          .container{
            margin-left: 20%;
          }
          a{
            text-decoration: none;
            color: white;
          }
        </style>

        <!-- Agent Main Menu Ends  -->


  <div class="container">
<h1>Update Policy Holder</h1>

    <h3>Holder's Details:</h3>
    <form class="" action="../includes/UpdatePolicyHolder-inc.php" method="post">
      <input hidden name="Policy_no" value="<?php echo $row['Policy_no'] ?>">
      Name:<input type="text" name="Name" placeholder="Name" value = "<?php echo $row['Name'] ?>" required>
      E-mail:<input type="email" name="Email_id" placeholder="Email_id" value = "<?php echo $row['Email_id'] ?>" required>
      Moblie_no:<input type="number" name="Mobile_no" placeholder="Mobile Number" min="5000000000" max="9999999999" value = "<?php echo $row['Mobile_no'] ?>" required>
      <h7> Date of Birth:</h7>
      <input type="date" name="DOB" placeholder="DOB" value = "<?php echo $row['DOB'] ?>" required>

      <h3> Address: </h3>
      House_no:<input type="text" name="House_no" placeholder="House Number" value = "<?php echo $row['House_no'] ?>">
      Colony:<input type="text" name="Colony" placeholder="Colony" value = "<?php echo $row['Colony'] ?>">
      City:<input type="text" name="City" placeholder="City" value = "<?php echo $row['City'] ?>">
      Pincode:<input type="number" name="Pincode" placeholder="Pincode" value = "<?php echo $row['Pincode'] ?>">

      <h3>Nominee:</h3>
        Nominee_name:<input type="text" name="Nominee_name" placeholder="Nominee Name" value = "<?php echo $row['Nominee_name'] ?>" required>
        Nominee_relation:<select name="Nominee_relation" required>
             <option value="" selected disabled>Nominee Relation</option>
             <option <?php if ($row['Nominee_relation']=="Parent") {
            echo 'selected';
        } ?> value="Parent">Parent</option>
             <option <?php if ($row['Nominee_relation']=="Child") {
            echo 'selected';
        } ?> value="Child">Child</option>
             <option <?php if ($row['Nominee_relation']=="Spouse") {
            echo 'selected';
        } ?> value="Spouse">Spouse</option>
             <option <?php if ($row['Nominee_relation']=="Grand child") {
            echo 'selected';
        } ?> value="Grand child">Grand Child</option>
             <option <?php if ($row['Nominee_relation']=="Relative") {
            echo 'selected';
        } ?> value="Relative">Relative</option>
             <option <?php if ($row['Nominee_relation']=="Friend") {
            echo 'selected';
        } ?> value="Friend">Friend</option>
        </select>

      <h3>Personal Details:</h3>
        Gender:<select name="Gender" required>
             <option value="" selected disabled>Select gender</option>
             <option <?php if ($row['Gender']=="MALE") {
            echo 'selected';
        } ?> value="MALE">Male</option>
             <option <?php if ($row['Gender']=="FEMALE") {
            echo 'selected';
        } ?> value="FEMALE">Female</option>
             <option <?php if ($row['Gender']=="OTHER") {
            echo 'selected';
        } ?> value="OTHER">Other</option>
        </select>
        Occupation:<input type="text" name="Occupation" placeholder="Occupation" value = "<?php echo $row['Occupation'] ?>">
        Edu_ql:<input type="text" name="Edu_ql" placeholder="Education Qualification" value = "<?php echo $row['Edu_ql'] ?>">


        <br> <br>
        <button type="submit" name="submit" class="btn btn-dark">Update Policy Holder Details</button>

    </form>
    <button class="btn btn-dark"><a href="http://localhost/Insurance-Management-System/DBMS/Agent/ManagePolicy/UpdatePolicy.php">Back</a></button>
  </div>

<?php
    } else {
        header("Location: UpdatePolicy.php?error=Policy_Does_Not_Exist");
        exit();
    }
require_once '../footer.php';
 ?>
