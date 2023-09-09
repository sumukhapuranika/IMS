<?php
require_once '../header.php';
require '../../database.php';
?>

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

  .container {
    white-space: nowrap;
    size: auto;
    size: portrait;
    size: landscape;
    height: auto;
  }
  table,h1{
    margin-left:111px
  }
</style>

<!-- Agent Main Menu Ends  -->

<div class="container">

  <table border="1" class="table">
    <h1>Plan Presentation</h1>

    <tr>
      <th> Plan_no</th>
      <th> Name</th>
      <th> MMA</th>
      <th> min_SA</th>
      <th> max_SA</th>
      <th> min_age</th>
      <th> max_age</th>
      <th> MODE</th>
      <th> Term</th>
      <th> PPT </th>
    </tr>
    <?php
    $sql = "SELECT * FROM Plan";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr scope="col">
          <td><?php echo $row['Plan_no'] ?></td>
          <td><?php echo $row['Name'] ?></td>
          <td><?php echo $row['MMA'] ?></td>
          <td><?php echo $row['min_SA'] ?></td>
          <td><?php echo $row['max_SA'] ?></td>
          <td><?php echo $row['min_age'] ?></td>
          <td><?php echo $row['max_age'] ?></td>
          <td><?php if ($row['MODE_YEARLY'] == 1) {
                echo 'Yearly |';
              }
              if ($row['MODE_HALFLY'] == 1) {
                echo 'Halfly |';
              }
              if ($row['MODE_QUARTELY'] == 1) {
                echo 'Quartely |';
              }
              if ($row['MODE_MONTHLY'] == 1) {
                echo 'Monthly |';
              }
              if ($row['MODE_SINGLE'] == 1) {
                echo 'Single';
              } ?></td>
          <td><?php echo $row['T1'], "-", $row['T2'], "-", $row['T3'], "-", $row['T4'] ?></td>
          <td><?php echo $row['P1'], "-", $row['P2'], "-", $row['P3'], "-", $row['P4'] ?></td>
        </tr>
      <?php
      }
    } else {
      ?>
  </table> <?php
            echo "No results found";
          }
            ?>
</table>
</div>


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ManagePolicy/ManagePolicy.php">
              Manage Policy
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="PlanPresentation.php">
              Plan Presentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="SearchPolicyDetails.php">
              Search Policy Details
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="CommissionReports.php">
              Commission Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="BusinessReport.php">
              Business Report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../PremiumPaymentRecord/PremiumPaymentRecord.php">
              Premium Payment Report
            </a>
          </li>
        </ul>
<?php
require_once '../footer.php';
?>