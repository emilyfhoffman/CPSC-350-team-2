<?php
  session_start();
  
  if(!isset($_SESSION['name'])){
    header('Location: login.php');
  }
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
    <div id="title">Add A <span> Recipe</span></div>
    <div id="header">
      <div id="header_slogan">Need to find a recipe fast come to a Dish in a Flash!</div>
    </div>
    <div id="left_content">
      <h1>Form to Add Recipe<br />
        <span>Add below:</span></h1>
        
      <p>Please add a recipe so everyone can view and enjoy!</p>
      
      <form method = "post" action = "echoAddRecipe.php">
      	<table>
      	
		<tr><td>Recipe Name</td><td><input type="text" name="recipe_name" id="name" size="20"value="Name of recipe"/>
		    </td></tr>
		    
		<tr><td>Cuisine</td><td>
			<select name ="dish_type">
			<option>breakfast</option>
			<option>appetizer</option>
			<option>main dish</option>
			<option>side dish</option>
			<option>dessert</option>
			<option>drink</option>
			</select></td></tr>
			
		<tr><td>Ingredients</td><td>

			<textarea name="ingredients" id="ingredients" cols="40" rows="5" 
			onFocus="if(this.innerText == 'Enter your ingredients here, separated by commas...') 
			{this.innerText = '';}" 
			onBlur="if (this.innerText == '') 
			{this.innerText = 'Enter your ingredients here, separated by commas...';}" >Enter your ingredients here, separated by commas...</textarea><br>

		</td>

		<tr><td>Instructions</td><td>

			<textarea name="instructions" id="instructions" cols="40" rows="5" 
			onFocus="if(this.innerText == 'Enter your instructions here...') 
			{this.innerText = '';}" 
			onBlur="if (this.innerText == '') 
			{this.innerText = 'Enter your instructions here...';}" >Enter your instructions here...</textarea><br>

		</td>
		
		<tr><td>Submit</td><td><input type="submit" value="Submit" />
		    
		</table>
      </form>
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</html>