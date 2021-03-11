<?php $db = mysqli_connect("localhost", "root", "", "lar");

if(!$db){
	die('error in db' . mysqli_error($db));
}

$id = $_GET['id'];

$qry = "DELETE FROM createform WHERE id = $id";
if(mysqli_query($db, $qry)){
	header('location: adminPanel.php');
}else{
	echo mysqli_error($db);
}

?>