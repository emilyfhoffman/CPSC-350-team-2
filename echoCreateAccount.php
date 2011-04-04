<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dish in a Flash</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="left_column">
    <div id="title">Dish in a <span> Flash</span></div>
    <div id="header">
      <div id="header_slogan">Need to find a recipe fast? Come to a Dish in a Flash!</div>
    </div>
    <div id="left_content">
      <h1>And You're Done!<br /><br/>
        <span>Thank you for creating an account with Dish in a Flash</span></h1> <br />
			<?php
  				include "db_connect.php";
  				$name = mysqli_real_escape_string($db, $_POST['username']);
  				$pw = $_POST['pw'];

   				$query = "INSERT INTO users (email_address, password) values('$name', sha('$pw'));";
   				$result = mysqli_query($db, $query);
   
   				echo "Thanks, $name, for creating an account";
   				echo "<br /><a href=\"index.php\">Continue back to the Home Page</a>";
			?>
    </div>
  </div>
    <?php include("header_right.php"); ?>
</div>
</body>
</html>