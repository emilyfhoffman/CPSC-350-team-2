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
      
      <form method = "post" action = "echoAddRecipe.php">
      	<table>
      	
      	<tr><td>Recipe Name</td><td>
				<?php
					echo $name;
				?>
					
		<tr><td>Cuisine</td><td>
				<?php
					echo $dish_type;
				?>
					
		<tr><td>Main Ingredients</td><td>
				<?php
					echo $ingredients;	
				?>
					
		<tr><td>Instructions</td><td>
				<?php
					echo $instructions;
				?>
				
		<!--<tr><td>Results of Query</td><td>-->
				<?php
				
					$formatted_ingredients = str_replace("\n","<br>",$ingredients);
					$formatted_instructions = str_replace("\n","<br>",$instructions);
					$query = "INSERT INTO recipes (recipe_name, ingredients, instructions, dish_type) VALUES ('$name','$formatted_ingredients','$formatted_instructions','$dish_type');";
					$results = mysqli_query($db,$query);
		
				?>
				
				
		</table>
      </form>
    </div>
  </div>
  <div id="right_column">
    <div class="domain">http://www.dishInAFlash.com</div>
    <div id="menucolumn">
      <div class="menu_list">
        <ul>
          <li><a href="index.html">HOME PAGE</a></li>
          <li><a href="addRecipe.php">ADD RECIPES</a></li>
          <li><a href="search.php">SEARCH RECIPES</a></li>
          <li><a href="http://www.free-css.com/">REVIEW RECIPES</a></li>
          <li><a href="http://www.free-css.com/">ADD COMMENTS</a></li>
          <li><a href="http://www.free-css.com/">SETTINGS</a></li>
        </ul>
      </div>
    </div>
    <div id="right_content">
      <h2>HIGHEST RATED RECIPES</h2>
      <ul>
        <li><a href="http://www.free-css.com/">Highest Rated Recipe</a></li>
        <li><a href="http://www.free-css.com/">Second Highest</a></li>
        <li><a href="http://www.free-css.com/">Third Highest</a></li>
        <li><a href="http://www.free-css.com/">Fourth</a></li>
        <li><a href="http://www.free-css.com/">Fifth</a></li>
      </ul>
      <h2>RECIPE OF THE WEEK </h2>
      <p><img src="images/photo3.jpg" alt="" width="183" height="70" /></p>
      <p><strong>Recipe Name (24-12-2020</strong>)<br />
        Decsription for awesome recipe.</p>
      <p><a target="_blank" href="http://validator.w3.org/check?uri=referer"><img height="31" alt="" src="http://www.w3.org/Icons/valid-xhtml10" width="88" vspace="8" border="0" /></a><a target="_blank" href="http://jigsaw.w3.org/css-validator/check/referer"><img alt="" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" vspace="8" border="0" /></a></p>
    </div>
    <div id="contact"> <strong>QUICK CONTACT</strong> <img src="images/contact.png" alt="" width="46" height="73" /><br />
      Tel: 000-200-0022<br />
      Fax: 001-100-0011<br />
      Email: info [at] templatemo.com<br />
    </div>
  </div>
  <div id="footer">Copyright © Your Company Name - Designed by <a href="http://www.templatemo.com">TemplateMo.com</a></div>
</div>
</body>
</html>