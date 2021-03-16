<?php include ('database/connection.inc.php');?>

<?php  include('php_code.php'); ?>

<?php 
	if (isset($_GET['view'])) {
		$id = $_GET['view'];
		$update = true;
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
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
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

  .edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
  }

  .del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
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


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <center><h1 class="h3 mb-1 text-gray-800">View</h1></center><hr><br>

      <center>
      <form method = "post">
            <div class="col-15">
              <input type="text" class="form-control"  name="title"  value = "<?php echo $title; ?>" disabled>
            </div><br>

            <div class="col-15">
              <input type="text" class="form-control"  name="description" value = "<?php echo $description; ?>" disabled>
            </div><br>
            <div class="col-15">
			        <label>Start Date</label>
			          <input type="date" name="startDate" class="form-control" value="<?php echo $startDate; ?>" disabled>
		        </div><br>

            <div class="col-15">
			        <label>End Date</label>
			          <input type="date" name="endDate" class="form-control" value="<?php echo $endDate; ?>" disabled>
		        </div><br>
            <div class="col-15">
              <?php echo '<img src="upload/'.$img.'" width = "70px;" height = "70px;" alt = "Image">'?>
		        </div><br>

	  </form>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


</body>
</html>

