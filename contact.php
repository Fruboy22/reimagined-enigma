<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us Page</title>
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
	
	<div id="wrapper-contact">
	
		<div id="contact-content">
		<h1>Contact Us</h1>	<br><br>
			
	
<div class="container">
 <form method="post" action="contact-summary.php"> 
     <label for="firstname">First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
    
    <label for="lname">Email Address:</label>
    <input type="text" id="email" name="email" placeholder="Your Email.."><br><br>
    
    <label for="lname">Phone Number:</label>
    <input type="text" id="phone" name="phone" placeholder="Your Phone.."><br><br>

    <label for="accommodation">Accommodation Type:</label>
    <select id="accommodation" name="accommodation">
          <option value="house">House</option>
          <option value="up north">Up North Main Lodge</option>
          <option value="cabin"selected="selected">Cabin</option>
    </select><br><br>
	 
  <label for="comments">Comments:</label>
   <textarea rows="3" cols="100" name="comments" placeholder="Additional Comments/Inquiries"></textarea><br><br>
    <input type="submit" value="Submit">
	</form>
	</div><!-- Closes container -->
		</div> <!-- Closes contact-content -->
	
	
	</div> <!-- Closes wrapper-content -->	
	
	
	
	
	
	
	
<div class="container">
 	<?php include "/home/stoutmartech/public_html/users/frun0124/up-north-final/includes/footer.php"; 
?>
</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
