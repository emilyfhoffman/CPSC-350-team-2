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
      <div id="header_slogan">Insert Catchy Slogan</div>
    </div>
    <div id="left_content">
	
	<!--included two new forms - Search form and Select Search Parameter radio buttons
		this passes info along to search.php so that it can execute with proper params.-->
	<h4>Browse Dishes!</h4>
	<h4>Choose a dish type by which to browse...</h4>
	<form name="browseform" method = "post" action = "browsing.php">
	
	<Select name = 'dish_type'>
	<option>drink</option>
	<option>dessert</option>
	<option>main dish</option>
	<option>breakfast</option>
	<option>appetizer</option>
	<option>side dish</option>
	<option>Other</option>
	<option>ALL</option>
	<input type = "submit" class = "formbutton" value="GO!"/>
	
	</form>
	<table>
	<tr><th>Recipe Name</th></tr>
	<?php
		include('db_connect.php');
		$browse_by = $_POST['dish_type'];
		if($browse_by != NULL){
			if($browse_by == 'ALL'){
				$query = "SELECT id,recipe_name FROM recipes;";
			}else{
				$query = "SELECT id,recipe_name FROM recipes WHERE dish_type = '$browse_by';";
			}
			$result = mysqli_query($db, $query);
			while($row = mysqli_fetch_array($result)){
				$name = $row['recipe_name'];
				$id = $row['id'];
				echo "<tr><td><a href=\"recipe.php?id=$id\">$name</a></td></tr>";
			}
		}
	?>
	
	</table>
	
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</body>
</html>