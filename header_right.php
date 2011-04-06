<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dish in a Flash</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="right_column">
  <?php
  	if (isset($_SESSION['name'])) {
  		echo "<div class=\"domain\"><a href=\"logout.php\">Log Out</a></div>";
  	} else {
  		echo "<div class=\"domain\"><a href=\"login.php\">Log In</a></div>";
  	}
  ?>
    <div id="menucolumn">
      <div class="menu_list">
        <ul>
          <li><a href="index.php">HOME PAGE</a></li>
          <li><a href="addRecipe.php">ADD RECIPES</a></li>
          <li><a href="search.php">SEARCH RECIPES</a></li>
		<li><a href="browsing.php">BROWSE RECIPES</a></li>
        </ul>
      </div>
    </div>
    <div id="right_content">
      <h2>HIGHEST RATED RECIPES</h2>
      <ol>
      	<?php
      		include("db_connect.php");
        	$query = "SELECT rec.recipe_id, rec.recipe_name, ROUND(AVG(rat.rating),1) as rating FROM recipes rec 
			LEFT JOIN ratings rat ON rec.recipe_id=rat.recipe_id 
			WHERE rec.recipe_name LIKE '%$sanitized_text%' GROUP BY rec.recipe_id ORDER BY rating DESC LIMIT 5";
			
			$result = mysqli_query($db, $query);
	
			while($row = mysqli_fetch_array($result)){
	   			echo "<li>";
	   			$name = $row['recipe_name'];
				$id = $row['recipe_id'];
				$avg = $row['rating'];
				echo "<a href=\"recipe.php?id=$id\">$name</a></td><td>$avg";
				
				echo "</li>";
			}
			
			echo "</table>";
      
    	?>
    	
      </ol>
     </div>
  </div>
    <div id="footer">Copyright Dish in a Flash- Designed by Team 2 Session 2</a></div>
</div>
</body>
</html>