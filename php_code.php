<?php include ('database/connection.inc.php');

	// initialize variables
	$title = "";
	$description = "";
    $category = "";
	$startDate = "";
    $endDate = "";
	$img = [];
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
        $category = $_POST['category'];
		$startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
		$img = $_FILES['img']['name'];

         if(file_exists("upload/".$_FILES["img"]["name"]))
        {
           $store = $_FILES["img"]["name"];
           $_SESSION['status'] = "Image already exists. '.$store.'";
     
        }else{

		$qry = "INSERT INTO createform (title, description, category, startDate, endDate, img) VALUES ('$title', '$description', '$category', '$startDate', '$endDate', '$img')"; 
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully"; 
        if($run){
            move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
          }
          else{
            $_SESSION['success'] = "not added";
          }
         }
        }
		
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
		$description = $_POST['description'];
        $category = $_POST['category'];
		$startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
		
        mysqli_query($db, "UPDATE createform SET title='$title', description='$description', category='$category', startDate='$startDate', endDate='$endDate' WHERE id=$id");
        $_SESSION['message'] = "Updated successfully!"; 
        header('location: viewAdmin.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM createform WHERE id=$id");
        $_SESSION['message'] = "Deleted successfully!"; 
        header('location: viewAdmin.php');
    }
