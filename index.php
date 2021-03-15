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
 </head>
 <body>
  <div class="container">
   <br />


   <h2 align="center">JOB PORTAL LAR</h2><br />
   
   <select name="multi_search_filter" id="multi_search_filter" class="btn btn-primary btn-lg" >
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
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>TITLE</th>
       <th>DESCRIPTION</th>
       <th>CATEGORY</th>
       <th>START DATE</th>
       <th>CLOSE DATE</th>
       <th>ACTION</th>
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
