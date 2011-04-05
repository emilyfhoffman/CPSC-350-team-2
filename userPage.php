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
      <div id="header_slogan"> Need to find a recipe fast come to a Dish in a Flash! </div>
    </div>
    <div id="left_content">
	<?php
	  include("db_connect.php");

	    $id = $_GET['id'];
	    $query = "select * from users where email_address = '$id';";
	    $result = mysqli_query($db, $query);
	    $row = mysqli_fetch_array($result);
	   	$address = $row['email_address'];
	   	echo "<h1>$address</h1> </br>";

	    $query2 = "select * from recipes r inner join users u on r.email_address = u.email_address where u.email_address = '$id';";
	    $result2 = mysqli_query($db, $query2);
	    
	    //Table start
	    echo "<table border ='1'>";
	   
	    echo "<th>Recipes from this user</th>";
	   
	    while($row2 = mysqli_fetch_array($result2)){
	   		echo "<tr><td>";
   			$name = $row2['recipe_name'];
			$id2 = $row2['recipe_id'];
			echo "<a href=\"recipe.php?id=$id2\">$name</a>";
			echo "</td></tr>";
	   
		}
	   
		echo "</table>";
   
  
	?>
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</html>