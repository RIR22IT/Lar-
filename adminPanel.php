<?php $db = mysqli_connect("localhost", "root", "", "lar") ?>

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
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="adminPanel.html" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Add</span>
        </a>
        <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>View</span>
        </a>
        <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        </div>
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
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
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

          <?php  
      
   		    $db = mysqli_connect("localhost", "root", "", "lar");
 
          $per_page_record = 3;  // Number of entries to show in a page.   
          // Look for a GET variable page if not found default is 1.        
          if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
          }    
          else {    
            $page=1;    
          }    
    
          $start_from = ($page-1) * $per_page_record;     
    
          $query = "SELECT * FROM createform LIMIT $start_from, $per_page_record";     
          $rs_result = mysqli_query ($db, $query);    
        ?>    


          <center><form method = "post">
            <div class="col-7">
              <input type="text" class="form-control"  name="title" placeholder="Title">
            </div><br>
          
            <div class="col-7">
              <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>
            </div><br>

            <div class="col-7">
              <select class="form-control" name="category">
                <option selected disabled="disabled">Category</option>
                <option>IT-Sware/DB/QA/Web/Graphics/GIS</option>
                <option>Office Admin/Secretary/Receptionist</option>
                <option>Media/Advert/Communication</option>
                <option>Apparel/Clothing</option>
                <option>International Development</option>
                <option>IT-HWare/Networks/Systems</option>
                <option>Civil Eng/Interior Design/Architecture</option>
                <option>Hotels/Restaurants/Food</option>
                <option>Ticketing/Airline/Marine</option>
                <option>KPO/BPO</option>
                <option>Accounting/Auditing/Finance</option>
                <option>IT-Telecoms</option>
                <option>Hospitality/Tourism</option>
                <option>Teaching/Academic/Library</option>
                <option>Imports/Exports</option>
                <option>Banking/Insurance</option>
                <option>Customer Relations/Public Relations</option>
                <option>Sports/Fitness/Recreation</option>
                <option>R&D/Science/Research</option>
                <option>All Vacancies</option>
                <option>Sales/Marketing/Merchandising</option>
                <option>Logistics/Warehouse/Transport</option>
                <option>Hospital/Nursing/Healthcare</option>
                <option>Agriculture/Dairy/Environment</option>
                <option>HR/Training</option>
                <option>Eng-Mech/Auto/Elec</option>
                <option>Legal/Law</option>
                <option>Security</option>
                <option>Corporate Management/Analysts</option>
                <option>Manufacturing/Operations</option>
                <option>Supervision/Quality Control</option>
                <option>Fashion/Design/Beauty</option>
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

            <div class="col-sm-10">
            <label for="img">Select image:</label>
            <input type="file" name="img" accept="image/*">
            </div><br>
          
            <div class="col-sm-10">
            <button type="submit" name="submit" value="Add" class="btn btn-primary">Submit</button>
            </div>

          </form><br><br><br>

          <h3>List</h3>

          <table class="table" style = "width: 80%">
		      <thead class="table-dark">
		      <tr>
			      <th>#</th>
            <th>IMAGE</th>
			      <th>TITLE</th>
			      <th>DESCRIPTION</th>
			      <th>CATEGORY</th>
            <th>START DATE</th>
            <th>CLOSE DATE</th>
            <th>ACTIONS</th>
		      </tr></thead>

          <?php  

		          $i = 1;
		          $qry = "select * from createform";
		          $run = $db -> query($qry);
		          if($run -> num_rows > 0){
			        while($row = $run -> fetch_assoc()){
			        $id = $row['id'];
	        ?>

          <?php     
  	          while ($row = mysqli_fetch_array($rs_result)) {    
              // Display each field of the records.    
  	      ?> 

        <tr> 
		      <td class="table-secondary"><?php echo $i++ ?></td>
		      <td class="table-secondary"><?php echo $row['title'] ?></td>
		      <td class="table-secondary"><?php echo $row['description'] ?></td>
          <td class="table-secondary"><?php echo $row['category'] ?></td>
		      <td class="table-secondary"><?php echo $row['startDate'] ?></td>
          <td class="table-secondary"><?php echo $row['closeDate'] ?></td>
		      <td class="table-secondary"><?php echo $row['img'] ?></td>
          <td class="table-secondary">
			    <button type="button" class="btn btn-warning"><a href="editStudent.php?id=<?php echo $id; ?>">Edit</a></button>
			    <button type="button" class="btn btn-danger"><a href="deleteStudent.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a></button>
		      </td>
	      </tr>

        <?php     
        };    
        ?> 

	      <?php  

		    }
		    }

	    ?>


      </table>
	
      <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM createform";     
        $rs_result = mysqli_query($db, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    	echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='adminPanel.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='adminPanel.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='adminPanel.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='adminPanel.php?page=".($page+1)."'>  Next </a>";   
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

<?php  

	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
    $category = $_POST['category'];
		$startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
		$img = $_POST['img'];
		
		$qry = "INSERT INTO createform VALUES (null, '$title', '$description', '$category', '$startDate', '$endDate', '$img',)";
		if(mysqli_query($db, $qry)){
			header('location: adminPanel.php');
		}else{
			echo mysqli_error($db);
		}
	}

?>
