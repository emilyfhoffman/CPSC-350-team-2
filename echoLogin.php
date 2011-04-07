<?php
	Session_Start();
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
      <h1>Login Complete<br /><br/>
        <span>Thank you for logging in</span></h1> 
			<?php
  				include "db_connect.php";
  				$name = $_POST['username'];
  				$pw = $_POST['pw'];
   				$query = "select * from users WHERE email_address = '$name' AND password = sha('$pw');";
   				$result = mysqli_query($db, $query);
   				if ($row = mysqli_fetch_array($result)) {
   		
   					echo "<p>Thanks for logging in, $name</p>\n";
   					echo "<p><a href=\"index.php\">Continue back to Home Page</a></p>";
                			$_SESSION['name'] = $name;
   				}
   				else {
   					echo "<p>Incorrect username or password</p>\n";
   					echo  "<h1>Log In</h1>\n  <form method=\"post\" action=\"echoLogin.php\">";
    					echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
        				echo "<label for=\"pw\">Password:</label><input type=\"password\" id=\"pw\" name=\"pw\" /><br />";
        				echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></form> <p><a href=\"createAccount.php\">Create Account</a></p>";
    				}
			?>
    </div>
  </div>
    <?php include("header_right.php"); ?>
</div>
</body>
</html>