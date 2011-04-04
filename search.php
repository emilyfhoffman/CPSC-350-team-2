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
      <div id="header_slogan">Need to find a recipe fast come to a Dish in a Flash!</div>
    </div>
    <div id="left_content">
	
	<h4>Search</h4>
		<form action="search.php" method="post" class="searchform">
		<p>
			<input type="text" id="searchText" name="searchText" />
			<input type="submit" class="formbutton" value="Search" />
		</p>
	<Select id="searchtype" name = 'searchtype'>
	<option value = 'name'>Recipe Name</option>
	<option value = 'ingredient'>Ingredient</option>

	<option value = 'email'>User Email</option>
	</Select>
	</form>
	
	<?php
	   include("db_connect.php");
		/*get the info from searchpage.html*/
	   $search_type = $_POST['searchtype'];
	   $searchText = $_POST['searchText'];
	   /*prevent sql injection*/
	   $sanitized_text = mysqli_real_escape_string($db, $searchText);
	   /*determine what kind of search we're going to execute*/
	   if($search_type != NULL){
		if ($search_type == 'name'){
			$query = "SELECT * FROM recipes WHERE recipe_name LIKE '%$sanitized_text%'";
		}else if($search_type == 'ingredient'){
			$query = "SELECT * FROM ingredients WHERE name LIKE '%$sanitized_text%'"; //need to change to include joins that displays the recipe name that contains that ingrident
		}else if($search_type == 'email'){
			$query = "SELECT * FROM users WHERE email_address LIKE '%$sanitized_text%'";
		}
	   echo "<table border='1'>";
	   $result = mysqli_query($db, $query);
	    /*display the results*/
	   while($row = mysqli_fetch_array($result)){
	   	echo "<tr><td>";
	   	if($search_type == 'email'){
	   		$user = $row['email_address'];
			echo "<a href=\"userPage.php?id=$user\">$user</a>";
	   	}else if($search_type == 'name'){
	   		$name = $row['recipe_name'];
			$id = $row['recipe_id'];
			echo "<a href=\"recipe.php?id=$id\">$name</a>";
			
		// need to change for display
		}else{
			$name = $row['name'];
			$id = $row['ingredient_id'];
			echo();
		}
		echo "</td></tr>";
		}
		echo "</table>";
	   }
  
	?>
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

	<?php
		include('db_connect.php');
		$browse_by = $_POST['dish_type'];
		if($browse_by != NULL){
			echo "<table border = '1'>";
			echo "<tr><th>Recipe Name</th></tr>";
			if($browse_by == 'ALL'){
				$query = "SELECT id,recipe_name FROM recipes order by recipe_name;";
			}else{
				$query = "SELECT id,recipe_name FROM recipes WHERE dish_type = '$browse_by' order by recipe_name;";
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
