<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=lar", "root", "");

$query = "SELECT DISTINCT category FROM createform ORDER BY category ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>JOB PORTAL | LAR</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <link href="css/bootstrap-select.min.css" rel="stylesheet" />
  <script src="js/bootstrap-select.min.js"></script>
  <meta charset="UTF-8">

  <style>

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
height: 170px;
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
            height: 90px;">
        </div>
        <div class="btnContainer">
        <button class="btn">Back to Main Side</button>
        </div>
    </nav>

<!-- </header> -->

  <div class="container">
   <br />


   <h2 align="center">JOB PORTAL LAR</h2><br />
   
   <select name="multi_search_filter" id="multi_search_filter" class="btn btn-primary btn-lg" style="width:100%">
   <?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["category"].'">'.$row["category"].'</option>'; 
   }
   ?>
   </select>
   <input type="hidden" name="hidden_category" id="hidden_category" />
   <div style="clear:both"></div>
   <br />
   <br><br>
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
       <th>TITLE</th>
       <th>DESCRIPTION</th>
       <th>CATEGORY</th>
       <th>START DATE</th>
       <th>CLOSE DATE</th>
       <th>VIEW</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
   <br />
   <br />
   <br />
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();
 
 function load_data(query='')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }

 $('#multi_search_filter').change(function(){
  $('#hidden_category').val($('#multi_search_filter').val());
  var query = $('#hidden_category').val();
  load_data(query);
 });
 
});
</script>
