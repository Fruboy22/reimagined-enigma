<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
	
	
	
	
<div id="wrapper-contact">
	
		<div id="contact-content">
		<h1>Contact Summary</h1>	<br><br>
			
			
		<?php include "includes/variables.php";?>
			<br>
		    <br>
			
		<?php
			if(empty($fname)){
				echo "Please enter Your First Name";
			}
			elseif(empty($lname)) {
				echo "Please enter Your Last Name";
			}
			elseif(empty($email)){
				echo "Please enter Your Email Address";
			}
			elseif(empty($phone)){
				echo "Please enter Your Phone Number";
			}
			else {
			echo " <h2>Thank you, $fname $lname for showing intrest in Up North Lodge & Resort.</h2>";
			
			echo "<br>";
				
			echo "<label>First Name: <b>$fname</b></label><br>";
			echo "<label>Last Name: <b>$lname</b></label><br>";
			echo "<label>Email Address: <b>$email</b></label><br>";
			echo "<label>Phone Number: <b>$phone</b></label><br>";
			}

echo "<br>";
  
if(empty($accommodation)){
    echo 'This line is printed, because the $accomodation is empty.';
}
	if(empty($comments)){
		echo 'This line is printed, because the $comments is empty.';
}
	
	?>
			</div> <!-- Closes contact-content -->
	
	
	</div> <!-- Closes wrapper-contact -->
			
			
			
			
			
			
			
			
			
			
			
	
	<div class="container">
 	<?php include "/home/stoutmartech/public_html/users/frun0124/up-north-final/includes/footer.php"; 
?>
</div>
	
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>