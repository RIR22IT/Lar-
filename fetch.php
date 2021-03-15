<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=lar", "root", "");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM createform 
 WHERE category IN (".$search_text.") 
 ORDER BY id DESC
 ";
}
else
{
 $query = "SELECT * FROM createform ORDER BY id DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["title"].'</td>
   <td>'.$row["description"].'</td>
   <td>'.$row["category"].'</td>
   <td>'.$row["startDate"].'</td>
   <td>'.$row["endDate"].'</td>
   <td><a href="">View</a>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;


?>