<?php include('Database/connection.inc.php'); ?>

<?php 
if(!$db){
	die('error in db' . mysqli_error($db));
}else{

	$id = $_GET['id'];
	$qry = "select * from createform where id = $id";
		$run = $db -> query($qry);
		if($run -> num_rows > 0){
			while($row = $run -> fetch_assoc()){
				$title = $row['title'];
				$description = $row['description'];
				$category = $row['category'];
				$startDate = $row['startDate'];
				$endDate = $row['endDate'];
        $img = $row['img'];
		}
	}

}

?>

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
          <center><h1 class="h3 mb-1 text-gray-800">Update Advertisement</h1></center><hr><br>

          <center><form method = "post">
            <div class="col-7">
              <input type="text" class="form-control"  name="title" placeholder="Title" value = "<?php echo $title; ?>">
            </div><br>

            <div class="col-7">
              <input type="text" class="form-control"  name="description" placeholder="Description" value = "<?php echo $description; ?>">
            </div><br>
        
            <div class="col-7">
            <label for="cat">Category</label>
              <select class="form-control" id = "cat" name="category">
                <option value="IT-Sware/DB/QA/Web/Graphics/GIS"
                  <?php
                    if($category == 'IT-Sware/DB/QA/Web/Graphics/GIS')
                    {
                      echo "selected";
                    }
                  ?>
                >IT-Sware/DB/QA/Web/Graphics/GIS</option>
                <option value="Office Admin/Secretary/Receptionist"
                  <?php
                    if($category == 'Office Admin/Secretary/Receptionist')
                    {
                      echo "selected";
                    }
                  ?>
                >Office Admin/Secretary/Receptionist</option>
                <option value="Media/Advert/Communication"
                  <?php
                    if($category == 'Media/Advert/Communication')
                    {
                      echo "selected";
                    }
                  ?>
                >Media/Advert/Communication</option>
                <option value="Apparel/Clothing"
                  <?php
                    if($category == 'Apparel/Clothing')
                    {
                      echo "selected";
                    }
                  ?>
                >Apparel/Clothing</option>
                <optio value="International Development"
                  <?php
                    if($category == 'International Development')
                    {
                      echo "selected";
                    }
                  ?>
                >International Development</option>
                <option value="IT-HWare/Networks/Systems"
                  <?php
                    if($category == 'IT-HWare/Networks/Systems')
                    {
                      echo "selected";
                    }
                  ?>
                >IT-HWare/Networks/Systems</option>
                <option value="Civil Eng/Interior Design/Architecture"
                  <?php
                    if($category == 'Civil Eng/Interior Design/Architecture')
                    {
                      echo "selected";
                    }
                  ?>
                >Civil Eng/Interior Design/Architecture</option>
                <option value="Hotels/Restaurants/Food"
                  <?php
                    if($category == 'Hotels/Restaurants/Food')
                    {
                      echo "selected";
                    }
                  ?>
                >Hotels/Restaurants/Food</option>
                <option value="Ticketing/Airline/Marine"
                  <?php
                    if($category == 'Ticketing/Airline/Marine')
                    {
                      echo "selected";
                    }
                  ?>
                >Ticketing/Airline/Marine</option>
                <option value="KPO/BPO"
                  <?php
                    if($category == 'KPO/BPO')
                    {
                      echo "selected";
                    }
                  ?>
                >KPO/BPO</option>
                <option value="Accounting/Auditing/Finance"
                  <?php
                    if($category == 'Accounting/Auditing/Finance')
                    {
                      echo "selected";
                    }
                  ?>
                >Accounting/Auditing/Finance</option>
                <option value="IT-Telecoms"
                  <?php
                    if($category == 'IT-Telecoms')
                    {
                      echo "selected";
                    }
                  ?>
                >IT-Telecoms</option>
                <option value="Hospitality/Tourism"
                  <?php
                    if($category == 'Hospitality/Tourism')
                    {
                      echo "selected";
                    }
                  ?>
                >Hospitality/Tourism</option>
                <option value="Teaching/Academic/Library"
                  <?php
                    if($category == 'Teaching/Academic/Library')
                    {
                      echo "selected";
                    }
                  ?>
                >Teaching/Academic/Library</option>
                <option value="Imports/Exports"
                  <?php
                    if($category == 'Imports/Exports')
                    {
                      echo "selected";
                    }
                  ?>
                >Imports/Exports</option>
                <option value="Banking/Insurance"
                  <?php
                    if($category == 'Banking/Insurance')
                    {
                      echo "selected";
                    }
                  ?>
                >Banking/Insurance</option>
                <option value="Customer Relations/Public Relations"
                  <?php
                    if($category == 'Customer Relations/Public Relations')
                    {
                      echo "selected";
                    }
                  ?>
                >Customer Relations/Public Relations</option>
                <option value="Sports/Fitness/Recreation"
                  <?php
                    if($category == 'Sports/Fitness/Recreation')
                    {
                      echo "selected";
                    }
                  ?>
                >Sports/Fitness/Recreation</option>
                <option value="R&D/Science/Research"
                  <?php
                    if($category == 'R&D/Science/Research')
                    {
                      echo "selected";
                    }
                  ?>
                >R&D/Science/Research</option>
                <option value="Sales/Marketing/Merchandising"
                  <?php
                    if($category == 'Sales/Marketing/Merchandising')
                    {
                      echo "selected";
                    }
                  ?>
                >Sales/Marketing/Merchandising</option>
                <option value="Logistics/Warehouse/Transport"
                  <?php
                    if($category == 'Logistics/Warehouse/Transport')
                    {
                      echo "selected";
                    }
                  ?>
                >Logistics/Warehouse/Transport</option>
                <option value="Hospital/Nursing/Healthcare"
                  <?php
                    if($category == 'Hospital/Nursing/Healthcare')
                    {
                      echo "selected";
                    }
                  ?>
                >Hospital/Nursing/Healthcare</option>
                <option value="Agriculture/Dairy/Environment"
                  <?php
                    if($category == 'Agriculture/Dairy/Environment')
                    {
                      echo "selected";
                    }
                  ?>
                >Agriculture/Dairy/Environment</option>
                <option value="HR/Training"
                  <?php
                    if($category == 'HR/Training')
                    {
                      echo "selected";
                    }
                  ?>
                >HR/Training</option>
                <option value="Eng-Mech/Auto/Elec"
                  <?php
                    if($category == 'Eng-Mech/Auto/Elec')
                    {
                      echo "selected";
                    }
                  ?>
                >Eng-Mech/Auto/Elec</option>
                <option value="Legal/Law"
                  <?php
                    if($category == 'Legal/Law')
                    {
                      echo "selected";
                    }
                  ?>
                >Legal/Law</option>
                <option value="Security"
                  <?php
                    if($category == 'Security')
                    {
                      echo "selected";
                    }
                  ?>
                >Security</option>
                <option value="Corporate Management/Analysts"
                  <?php
                    if($category == 'Corporate Management/Analysts')
                    {
                      echo "selected";
                    }
                  ?>
                >Corporate Management/Analysts</option>
                <option value="Manufacturing/Operations"
                  <?php
                    if($category == 'Manufacturing/Operations')
                    {
                      echo "selected";
                    }
                  ?>
                >Manufacturing/Operations</option>
                <option value="Supervision/Quality Control"
                  <?php
                    if($category == 'Supervision/Quality Control')
                    {
                      echo "selected";
                    }
                  ?>
                >Supervision/Quality Control</option>
                <option value="Fashion/Design/Beauty"
                  <?php
                    if($category == 'Fashion/Design/Beauty')
                    {
                      echo "selected";
                    }
                  ?>
                >Fashion/Design/Beauty</option>
              </select>
            </div><br>

            <div class="col-sm-7">
            <label>Start Date:</label>
            <input class="form-control" type="date"  name="startDate" value = "<?php echo $startDate; ?>">
            </div><br>

            <div class="col-sm-7">
            <label>Close Date:</label>
            <input class="form-control" type="date" name="endDate" value = "<?php echo $endDate; ?>">
            </div><br>

            <div class="col-sm-7">
            <label for="img">Select image:</label>
            <input type="file" name="img" id = "img" class = "form-control" value = "<?php echo $img; ?>">
            </div><br>

            <div class="col-sm-10">
            <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
            </div>

          </form><br><br><br>

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

<?php  

	if(isset($_POST['update'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$category = $_POST['category'];
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
    $img = $_POST['img'];
		
		$qry = "UPDATE createform SET title = '$title', description = '$description', category = '$category', startDate = '$startDate', endDate = '$endDate', img = '$img' WHERE id = $id";
	
	}

?>

