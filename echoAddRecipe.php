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
    
      		<?php 
					$collection = $db -> recipe;
					$formatted_ingredients = str_replace("\n","<br>",$ingredients);
					$formatted_instructions = str_replace("\n","<br>",$instructions);
					$queryName = array("recipe_name" => $name);
					$nameEcho = $collection -> find($queryName);
					$check = $nameEcho -> count();
					if($check == 0){
						echo "<h1>Your Recipe Has Been Added </h1><br />";
						echo "<p>Thank you for adding your recipe so everyone can view and enjoy!</p>";
					$recipeInsert = array("recipe_name" =>  $name, "ingredients" => $formatted_ingredients, "instructions" =>  $formatted_instructions);
					$collection -> insert($recipeInsert);
					$query = array("recipe_name" => $name);
					$recipeEcho = $collection-> find($query);
					foreach ($recipeEcho as $obj) {
						echo 'Name: ' .$obj['recipe_name'] .'<br/>'. '<br/>';
						echo 'Ingredients: ' . '<br/>'.$obj['ingredients'] .'<br/>'. '<br/>';
						echo 'Instructions: '. '<br/>' .$obj['instructions'] .'<br/>'. '<br/>';
					}
					}else{
					echo "<h1>Recipe name already exists </h1><br />";
        
					echo "<p>Please choose a different name other than $name!</p>";
					echo "<a href='addRecipe.php'>Click here to add another recipe</a>";
					}
					
			?>
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</html>