<<<<<<< HEAD
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
      
      <form method = "post" action = "echoAddRecipe.php">
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
					$formatted_ingredients = str_replace("\n","<br>",$ingredients);
					$formatted_instructions = str_replace("\n","<br>",$instructions);
					$user = $_SESSION['name'];
					$query = "INSERT INTO recipes (email_address, recipe_name, ingredients, instructions, dish_type) VALUES ('$user','$name','$formatted_ingredients','$formatted_instructions','$dish_type');";
					$results = mysqli_query($db,$query);
					$row = mysqli_fetch_array($result);
					$id = $row['id'];

					$target ="recipe_images/$id.jpg";
     
					move_uploaded_file($_FILES['image']['tmp_name'], $target);
				?>
		</table>
      </form>
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</html>