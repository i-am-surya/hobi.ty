<?php

include('security.php');

if(!$_SESSION['username'])
{
    header('location:index.php');
}

include('includes/header.php');
include('includes/sidebar.php');


?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">
    <?php
    include('includes/topbar.php');
    ?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>

      <!-- Content Row 1 -->
      <div class="row">

        <!-- No.of Admins Card -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Admins</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    
                    <?php
                      require 'database/dbconfig.php';

                      $query = "SELECT id FROM register WHERE usertype='admin' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row. ' </h3>';
                    ?>

                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user-cog fa-2x text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Total Interests Card -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Interests</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php
                      require 'database/dbconfig.php';

                      $query = "SELECT id FROM interests ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row. ' </h3>';
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-wrench fa-2x text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Total Sub-Interests Card -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sub-Interests</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                        <?php
                          require 'database/dbconfig.php';

                          $query = "SELECT id FROM interests_list ORDER BY id";
                          $query_run = mysqli_query($connection, $query);

                          $row = mysqli_num_rows($query_run);

                          echo '<h3> '.$row. ' </h3>';
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Total Events Card -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Events</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php
                    require 'database/dbconfig.php';

                    $query = "SELECT id FROM events ORDER BY id";
                    $query_run = mysqli_query($connection, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h3> '.$row. ' </h3>';
                  ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- End of row 1 -->
      </div> 

      <!-- Content Row 2 -->
      <div class="row">

        <!-- Total Districts -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Districts</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php
                      require 'database/dbconfig.php';

                      $query = "SELECT id FROM locations ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row. ' </h3>';
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-map-marker-alt fa-2x text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Total Users -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Users</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php
                      require 'database/dbconfig.php';

                      $query = "SELECT id FROM register WHERE usertype = 'user' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row. ' </h3>';
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-id-card fa-2x text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


      <!-- End of Row 2-->
      </div>


    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->



  <?php

  include('includes/scripts.php');
  include('includes/footer.php');

  ?>