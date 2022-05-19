<?php

require_once("db_connect.php");

$con = mysqli_connect($servername, $db_username, $db_password, $db_name);

// If no connection is made, kill the attempt and give an error message
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accommodations</title>
<link href="http://fonts.googleapis.com/css?family=Corben:bold">
<link href="http://fonts.googleapis.com/css?family=Nobile">
<link rel="stylesheet" type="text/css" href="../up-north-final/styles.css">
<link rel="stylesheet" type="text/css" href="../up-north-final/reset.css">



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<header>	
	<?php include "/home/stoutmartech/public_html/users/frun0124/up-north-final/includes/header.php"; 
?>
</header> <!-- Closes header -->
	
	
	<h1>Accommodations</h1>
	<br>
	<h1>Cabins</h1>
	<?php include "includes/variables.php";?>
	
	<div class="mytable">
	<?php
	
	 $sql ="SELECT LD.lodging_type_id, LD.lodging_description, LD.price, LD.description, LD.images, V.views_type, LT.lodging_type, S.sleeps FROM lodging_description AS LD ";
     $sql .="INNER JOIN views as V on LD.view_id = V.view_id ";
     $sql .="INNER JOIN sleep as S on LD.sleep_id = S.sleep_id ";
     $sql .="INNER JOIN lodging_type as LT on LD.lodging_id = LT.lodging_id ";
	 $sql .="WHERE LT.lodging_type = 'cabin'";
     $result = mysqli_query($con, $sql);
	
	// Check to see if access to table was successful or not
if (!$result){
     die("Access to Results Failed" . mysqli_error());
	 } else {
     //While loop to display the results
	
   /* echo "<div class='col'>;
    <p><b>Lodging Description:$item['lodging_description']</b><br>;
	<b>Price: </b><br>
	<b>Sleeps: </b><br>
	<b>View: </b><br>
	<b>Description: </b><br></p>";*/
	
	
	
	  echo "<table border='1'>
  <tr>
    <th><b>Lodging Description</b></th>
	<th><b>Price</b></th>
	<th><b>Sleeps</b>&nbsp;&nbsp;</th>
	<th><b>View</b></th>
	<th><b>Description</b></th>
	<th><b>Image</b></th>
  </tr>";
	
while($item = mysqli_fetch_array($result)){

	/*echo "<div class='row'>";
	echo "<div class='col'>";
    echo $item['lodging_description'] ;
    echo $item['price'] ;
    echo  $item['sleeps'] ;
    echo  $item['views_type'] ;
	echo $item['description'] ;
	echo "<img src='". $item['images'] ."'/><br>";

		
    echo "</div>";
	 echo "</div>";*/
	
	
	echo "<tr>";
    echo "<td>". $item['lodging_description'] ."</td>";
    echo "<td>". $item['price'] ."&nbsp;&nbsp;&nbsp;</td>";
    echo "<td>". $item['sleeps'] ."</td>";
    echo "<td>". $item['views_type'] ."&nbsp;&nbsp;</td>";
	echo "<td>". $item['description'] ."</td>";
	echo "<td>"."<img src='". $item['images'] ."'/><br></td>";
  "</tr><br>";
	 }
	 echo "</table>";  
}
	?>	
		<br><br>
	<h1>House</h1>
		

	<?php
	
	 $sql ="SELECT LD.lodging_type_id, LD.lodging_description, LD.price, LD.description, LD.images, V.views_type, LT.lodging_type, S.sleeps FROM lodging_description AS LD ";
     $sql .="INNER JOIN views as V on LD.view_id = V.view_id ";
     $sql .="INNER JOIN sleep as S on LD.sleep_id = S.sleep_id ";
     $sql .="INNER JOIN lodging_type as LT on LD.lodging_id = LT.lodging_id ";
	 $sql .="WHERE LT.lodging_type = 'house'";
     $result = mysqli_query($con, $sql);
	
	// Check to see if access to table was successful or not
if (!$result){
     die("Access to Results Failed" . mysqli_error());
	 } else {
     //While loop to display the results
	
	  echo "<table border='1'>
  <tr>
    <th><b>Lodging Description</b></th>
	<th><b>Price</b></th>
	<th><b>Sleeps</b>&nbsp;&nbsp;</th>
	<th><b>View</b></th>
	<th><b>Description</b></th>
	<th><b>Image</b></th>
  </tr><br>";
while($item = mysqli_fetch_array($result)){

	echo "<tr>";
    echo "<td>". $item['lodging_description'] ."</td>";
    echo "<td>". $item['price'] ."&nbsp;&nbsp;&nbsp;</td>";
    echo "<td>". $item['sleeps'] ."</td>";
    echo "<td>". $item['views_type'] ."&nbsp;&nbsp;</td>";
	echo "<td>". $item['description'] ."</td>";
	echo "<td>"."<img src='". $item['images'] ."'/><br></td>";
  "</tr><br>";
	 }
	 echo "</table>";  
}
	?>			
		
		<br><br>
	<h1>Up North Main Lodge</h1>
		
	<?php
	
	 $sql ="SELECT LD.lodging_type_id, LD.lodging_description, LD.price, LD.description, LD.images, V.views_type, LT.lodging_type, S.sleeps FROM lodging_description AS LD ";
     $sql .="INNER JOIN views as V on LD.view_id = V.view_id ";
     $sql .="INNER JOIN sleep as S on LD.sleep_id = S.sleep_id ";
     $sql .="INNER JOIN lodging_type as LT on LD.lodging_id = LT.lodging_id ";
	 $sql .="WHERE LT.lodging_type = 'Up North Main Lodge'";
     $result = mysqli_query($con, $sql);
	
	// Check to see if access to table was successful or not
if (!$result){
     die("Access to Results Failed" . mysqli_error());
	 } else {
     //While loop to display the results
	
	  echo "<table border='1'>
  <tr>
    <th><b>Lodging Description</b></th>
	<th><b>Price</b></th>
	<th><b>Sleeps</b>&nbsp;&nbsp;</th>
	<th><b>View</b></th>
	<th><b>Description</b></th>
	<th><b>Image</b></th>
  </tr>";
while($item = mysqli_fetch_array($result)){

	echo "<tr>";
    echo "<td>". $item['lodging_description'] ."</td>";
    echo "<td>". $item['price'] ."&nbsp;&nbsp;&nbsp;</td>";
    echo "<td>". $item['sleeps'] ."</td>";
    echo "<td>". $item['views_type'] ."&nbsp;&nbsp;</td>";
	echo "<td>". $item['description'] ."</td>";
	echo "<td>"."<img src='". $item['images'] ."'/><br></td>";
  "</tr>";
	 }
	 echo "</table>";  
}
	?>
		
		
		
		
		
		
		
		
<div class="container">
 	<?php include "/home/stoutmartech/public_html/users/frun0124/up-north-final/includes/footer.php"; 
    ?>
</div>
	</div>	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>