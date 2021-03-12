<?php include('Database/connection.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN FORM</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-users-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>ADMIN PANEL</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="adminPanel.php">
          <i class="fas fa-plus-square"></i>
          <span>Add</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="viewAdmin.php">
          <i class="fas fa-eye"></i>
          <span>View</span>
        </a>
      </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
             
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="images/admin-img.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <center><h1 class="h3 mb-1 text-gray-800">Create Advertisement</h1></center><hr><br>

          <center><form method = "post" action = "viewAdmin.php" enctype = "multipart/form-data">
            <div class="col-7">
              <input type="text" class="form-control"  name="title" placeholder="Title">
            </div><br>

            <div class="col-7">
              <input type="text" class="form-control"  name="description" placeholder="Description">
            </div><br>

            <!-- <div class="col-7">
              <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>
            </div><br> -->

            <div class="col-7">
              <label for="cat">Category</label>
              <select class="form-control" id = "cat" name="category">
                <!-- <option selected disabled="disabled">Category</option> -->
                <option value="IT-Sware/DB/QA/Web/Graphics/GIS">IT-Sware/DB/QA/Web/Graphics/GIS</option>
                <option value="Office Admin/Secretary/Receptionist">Office Admin/Secretary/Receptionist</option>
                <option value="Media/Advert/Communication">Media/Advert/Communication</option>
                <option value="Apparel/Clothing">Apparel/Clothing</option>
                <option value="International Development">International Development</option>
                <option value="IT-HWare/Networks/Systems">IT-HWare/Networks/Systems</option>
                <option value="Civil Eng/Interior Design/Architecture">Civil Eng/Interior Design/Architecture</option>
                <option value="Hotels/Restaurants/Food">Hotels/Restaurants/Food</option>
                <option value="Ticketing/Airline/Marine">Ticketing/Airline/Marine</option>
                <option value="KPO/BPO">KPO/BPO</option>
                <option value="Accounting/Auditing/Finance">Accounting/Auditing/Finance</option>
                <option value="IT-Telecoms">IT-Telecoms</option>
                <option value="Hospitality/Tourism">Hospitality/Tourism</option>
                <option value="Teaching/Academic/Library">Teaching/Academic/Library</option>
                <option value="Imports/Exports">Imports/Exports</option>
                <option value="Banking/Insurance">Banking/Insurance</option>
                <option value="Customer Relations/Public Relations">Customer Relations/Public Relations</option>
                <option value="Sports/Fitness/Recreation">Sports/Fitness/Recreation</option>
                <option value="R&D/Science/Research">R&D/Science/Research</option>
                <option value="Sales/Marketing/Merchandising">Sales/Marketing/Merchandising</option>
                <option value="Logistics/Warehouse/Transport">Logistics/Warehouse/Transport</option>
                <option value="Hospital/Nursing/Healthcare">Hospital/Nursing/Healthcare</option>
                <option value="Agriculture/Dairy/Environment">Agriculture/Dairy/Environment</option>
                <option value="HR/Training">HR/Training</option>
                <option value="Eng-Mech/Auto/Elec">Eng-Mech/Auto/Elec</option>
                <option value="Legal/Law">Legal/Law</option>
                <option value="Security">Security</option>
                <option value="Corporate Management/Analysts">Corporate Management/Analysts</option>
                <option value="Manufacturing/Operations">Manufacturing/Operations</option>
                <option value="Supervision/Quality Control">Supervision/Quality Control</option>
                <option value="Fashion/Design/Beauty">Fashion/Design/Beauty</option>
              </select>
            </div><br>

            <div class="col-sm-7">
            <label>Start Date:</label>
            <input class="form-control" type="date"  name="startDate">
            </div><br>

            <div class="col-sm-7">
            <label>Close Date:</label>
            <input class="form-control" type="date" name="endDate">
            </div><br>

            <div class="col-sm-7">
            <label for="img">Select image:</label>
            <input type="file" name="img" id = "img" class = "form-control" required>
            </div><br>

            <div class="col-sm-10">
            <button type="submit" name="submit" value="Add" class="btn btn-primary">Submit</button>
            </div>

          </form><br><br><br>

          <div class = "card-body">
            <?php 
              if(isset($_SESSION['success']) && $_SESSION['success'] !='')
              {
                echo '<h2 class = "bg-primary text-white"> '.$_SESSION['success'].'</h2>';
                unset($_SESSION['success']);
              }

              if(isset($_SESSION['status']) && $_SESSION['status'] !='')
              {
                echo '<h2 class = "bg-primary text-white"> '.$_SESSION['status'].'</h2>';
                unset($_SESSION['status']);
              }

            ?>
          </div>

          <!-- Content Row -->
          <div class="row">

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
