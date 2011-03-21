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
	   $query = "select * from recipes where id = $id;";
	   $result = mysqli_query($db, $query);
	   $row = mysqli_fetch_array($result);
	   	$name = $row['recipe_name'];
		$ingredients = $row['ingredients'];
		$instructions = $row['instructions'];
		$dish_type = $row['dist_type'];
	   	echo "<h1>$name</h1> <br />";
		echo "$dish_type <br />";
		echo "$ingredients <br />";
		echo "$instructions";
   
  
	?>
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</html>