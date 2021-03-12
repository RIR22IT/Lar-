<?php include ('database/connection.inc.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="w3.css" rel="stylesheet"/>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style>

    .navbar {
    transition: all 0.4s;
    background-color: #2690c5;
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
</style>
</head>
<body>

<!-- Navbar-->
<!-- <header class="header"> -->
    <nav class="navbar navbar-expand-lg fixed-top py -0">
        <div class="container">
        <a href="#" class="navbar-brand text-uppercase font-weight-bold">
        <img src="images/LAR-logo.png" alt="Lar logo"
        style="
            width: 150px;
            height: 150px;"></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Portfolio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- </header> -->

<br><br><br><br><br><br><br><br><hr><br>
<form>
    <center><select>
        <option disabled selected>Select the category</option>
        <?php
        
            include "connection.inc.php";
            $qry = mysqli_query($db,"SELECT category From createform");

            while($row = mysqli_fetch_array($qry))
            {
                echo "<option value='". $row['category'] ."'>" .$row['category'] ."</option>";
            }
        
        ?>
    </select>
    <input type="submit" name="search" value="Find">


    <div><center>
    <br><table class="table" style = "width: 80%">
		      <thead class="table-dark">
		      <tr>
			<th>TITLE</th>
			<th>DESCRIPTION</th>
			<th>CATEGORY</th>
            <th>START DATE</th>
            <th>CLOSE DATE</th>
            <th>VIEW</th>
		      </tr></thead>

          <?php  

                   

                    $i = 1;
                    $qry = "select * from createform ";
                    $run = $db -> query($qry);
                    if($run -> num_rows > 0){
                    while($row = $run -> fetch_assoc()){
                    $id = $row['id'];
                 
                    
	        ?>

        <tr> 
		      <td class="table-secondary"><?php echo $row['title'] ?></td>
		      <td class="table-secondary"><?php echo $row['description'] ?></td>
          <td class="table-secondary"><?php echo $row['category'] ?></td>
		      <td class="table-secondary"><?php echo $row['startDate'] ?></td>
          <td class="table-secondary"><?php echo $row['endDate'] ?></td>
          <td class="table-secondary"><?php echo $row['img'] ?></td>
	      </tr>

        <?php     
        }; 
        ?> 

	    <?php  
        
    }   
	    ?>

        
      </table>
	
</div>


</form>


    <script src="jquery.min.js"></script>
    <script src="ddtf.js"></script>
    <script>
    $(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
    });
    </script>
    
</body>
</html>