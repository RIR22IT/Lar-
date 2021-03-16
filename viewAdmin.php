<?php include ('database/connection.inc.php');?>
<?php  include('php_code.php'); ?>

<!DOCTYPE html>
<html>
<head>

  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
      
  form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

  .msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
  }
  </style>

</head>
<body id="page-top">

      <!-- Page Wrapper -->
  <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminPanel.php">
    <div class="sidebar-brand-icon">
      <i class="fas fa-users-cog"></i>
    </div>
    <div class="sidebar-brand-text mx-3">ADMIN</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="adminPanel.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>ADMIN PANEL</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
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
                <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <center><h1 class="h3 mb-1 text-gray-800">View Advertisements</h1></center><br>

        <center>
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
		    <thead class="table-dark">
		    <tr>
            <th>#</th>
			      <th>TITLE</th>
            <th>DESCRIPTION</th>
			      <th>CATEGORY</th>
            <th>START DATE</th>
			      <th>END DATE</th>
            <th>IMG</th>
			      <th>EDIT</th>
            <th>DELETE</th>
		    </tr>
	      </thead>

        <?php  
		    $i = 1;
		    $qry = "select * from createform";
		    $run = $db -> query($qry);
		    if($run -> num_rows > 0){
			  while($row = $run -> fetch_assoc()){
			  $id = $row['id'];
	      ?>
	
		    <tr>
          <td><?php echo $i++ ?></td>
			    <td><?php echo $row['title']; ?></td>
			    <td><?php echo $row['description']; ?></td>
          <td><?php echo $row['category']; ?></td>
		    	<td><?php echo $row['startDate']; ?></td>
          <td><?php echo $row['endDate']; ?></td>
          <td><?php echo '<img src="upload/' .$row['img'].'" width = "70px;" height = "60px;" alt = "Image">'?></td>
			    <td>
				  <a href="editAdminForm.php?edit=<?php echo $row['id']; ?>" class="edit_btn" ><i class="fas fa-edit" style="color:grey"></i></a>
			    </td>
			    <td>
				  <a href="php_code.php?del=<?php echo $row['id']; ?>" class="del_btn"><i class="fa fa-trash" style="color:grey"></i></a>
			    </td>
		      </tr>

        <?php     
        ?> 

	      <?php  
         }
		    }
	    ?>

      </table></div></center>

      <?php if (isset($_SESSION['message'])): ?>
	    <div class="msg">
		  <?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		  ?>
	    </div>
      <?php endif ?>
      
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
          <a class="btn btn-primary" href="newlogin.php">Logout</a>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->


</body>
</html>

