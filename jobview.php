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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
      
form {
    width: 100%;
    margin: 50px auto;
    text-align: left;
    padding: 20px;  
    border-radius: 5px;
    color: black;
  }

  .navbar {
transition: all 0.4s;
background-image: url('images/lloo.jpg');
background-position: top;
background-attachment: fixed;
}

.navbar .nav-link {
color: #fff;
}

.navbar .nav-link:hover,
.navbar .nav-link:focus {
color: #fff;
text-decoration: none;
}

.navbar .navbar-brand {
color: #fff;
}


/* Change navbar styling on scroll */
.navbar.active {
background: #fff;
box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.active .nav-link {
color: #555;
}

.navbar.active .nav-link:hover,
.navbar.active .nav-link:focus {
color: #555;
text-decoration: none;
}

.navbar.active .navbar-brand {
color: #555;
}
/* .img{
height: 100px;
} */
/* header styling */

.container{
height: 150px;
width: 100%;
}
/* Change navbar styling on small viewports */
@media (max-width: 991.98px) {
.navbar {
    background: #fff;
}

.navbar .navbar-brand, .navbar .nav-link {
    color: #555;
}
}

.btnContainer .btn {
  position: absolute;
  top: 50%;
  left: 90%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #337ab7;
  color: #ffffff;
  font-size: 16px;
  padding: 10px 30px;
  cursor: pointer;
  border-radius: 40px;
  text-align: center;
}

.btnContainer .btn:hover {
  background-color: #ffffff;
  color: #000000;
}
    </style>

</head>
<body>

        <!-- <header class="header"> -->
    <nav class="navbar navbar-expand-lg fixed-top py -0">
        <div class="container" style="float: left; margin: 0px 20px 0px 0px;">
        <br><img src="images/LARlogo2.png" alt="Lar logo"
        style="
            width: 125px;
            height: 90px;
            margin-right: 990px;
            margin-bottom: 20px;">
        </div>
        <div class="btnContainer">
        <button class="btn">Back to Main Side</button>
        </div>
    </nav>


        <!-- Begin Page Content -->
        <div class="container">
          <!-- Page Heading -->
      <br><br><br><br><br><br><br>

      <center>
      <form method = "post">

            <div class="col-15">
			        <label style="font-size:25px; font-family: 'Syne Mono', monospace;">Start Date: <?php echo $startDate; ?></label>
			          
              <label style="font-size:25px; font-family: 'Syne Mono', monospace;">&emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  End Date: <?php echo $endDate; ?></label>
			          
		        </div><br><br>

            <!-- <div class="col-15">
			        
		        </div><br> -->

            <div class="col-15" style="font-size:25px; font-family: 'Syne Mono', monospace;">
              <center><b><?php echo $title; ?></b></center>
            </div>

            <div class="col-15" style="font-size:25px; font-family: 'Syne Mono', monospace;">
              <?php echo $description; ?>
            </div><br>
            
            <div class="col-15">
              <?php echo '<img src="upload/'.$img.'" width = "100%" height = "auto" alt = "Image">'?>
		        </div><br>

            <div class="col-sm-10">
			      <button type = "submit" name="apply" class="btn btn-primary">Apply</button>
		        </div>

	  </form>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


</body>
</html>

