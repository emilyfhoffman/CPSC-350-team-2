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

<?php
   //include('header.html');
   include('db_connect.php');
   $name = $_POST['recipe_name'];
   $dish_type = $_POST['dish_type'];
   $ingredients = $_POST['ingredients'];
   $instructions = $_POST['instructions'];
?>

<div id="container">
  <div id="left_column">
    <div id="title">Recipe <span> Added</span></div>
    <div id="header">
      <div id="header_slogan">Need to find a recipe fast come to a Dish in a Flash!</div>
    </div>
    <div id="left_content">
      <h1>Your Recipe Has Been Added<br />
        <span>The Following:</span></h1>
        
      <p>Thank you for adding your recipe so everyone can view and enjoy!</p>
      
      	<table>
      	
      	<tr><td>Recipe Name</td><td>
				<?php echo $name; ?>
		<tr><td>Cuisine</td><td>
				<?php echo $dish_type; ?>
		<tr><td>Main Ingredients</td><td>
				<?php echo $ingredients; ?> 
		<tr><td>Instructions</td><td>
				<?php echo $instructions; ?> 
		<!--<tr><td>Results of Query</td><td>-->
				<?php 
					$id_array = array();
					$ingredients_array = explode("\n", $ingredients);
					$index = 0;
					foreach($ingredients_array as $ingredient){
						if(!mysqli_fetch_array(mysqli_query($db, "SELECT name FROM ingredients WHERE name = '$ingredient';"))){
							$query = "INSERT INTO ingredients (name) VALUES ('$ingredient');";
							mysqli_query($db, $query);
						}
						$query = "SELECT ingredient_id FROM ingredients WHERE name = '$ingredient'";
						$row = mysqli_fetch_array(mysqli_query($db, $query));
						$id_array[$index] = $row['ingredient_id'];
						$index = $index + 1;
					}
					
					//All ingredients are in the Ingredients table, and $id_array now contains all of their id's

					$formatted_instructions = str_replace("\n","<br>",$instructions);
					$user = $_SESSION['name'];
					$query = "INSERT INTO recipes (email_address, recipe_name, instructions, dish_type) VALUES ('$user','$name','$formatted_instructions','$dish_type');";
					$results = mysqli_query($db,$query);

					$query = "SELECT * FROM recipes WHERE email_address = '$user' AND recipe_name = '$name';";
					$row = mysqli_fetch_array(mysqli_query($db, $query));
					$recipe_id = $_row['recipe_id'];
					
					foreach($id_array as $ingredient_id){
						$query = "INSERT INTO recipe_to_ingredient (recipe_id, ingredient_id) VALUES ('$recipe_id', '$ingredient_id');";
						mysqli_query($db, $query);
					}
				?>
		</table>
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</html>