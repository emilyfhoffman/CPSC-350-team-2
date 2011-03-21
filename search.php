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
		<form action="search.php" method="get" class="searchform">
		<p>
			<input type="text" id="searchq" name="searchText" />
			<input type="submit" class="formbutton" value="Search" />
		</p>
	</form>
	<h4>search by...</h4>
	<form name ="form1" Method ="Post" action = "search.php">
	<Select name = 'searchtype'>
	<option>name</option>
	<option>ingredient</option>
	</form>
	
	<?php
	   include("db_connect.php");
		/*get the info from searchpage.html*/
	   $search_type = $_POST['searchtype'];
	   $searchText = $_GET['searchText'];
	   /*prevent sql injection*/
	   $sanitized_text = mysqli_real_escape_string($db, $searchText);
	   /*determine what kind of search we're going to execute*/
	   if($search_type == NULL){
		if ($search_type == 'name'){
			$query = "SELECT * FROM recipes WHERE name LIKE '%$sanitized_text%'";
		}else if($search_type == 'ingredient'){
			$query = "SELECT * FROM recipes WHERE ingredients LIKE '%$sanitized_text%'";
		}
	   
	   echo "<table border='1'>";
	   $result = mysqli_query($db, $query);
	   /*display the results*/
	   while($row = mysqli_fetch_array($result)){
	   	$name = $row['recipe_name'];
		$id = $row['id'];
	   	echo "<tr><td>";
		echo "<a href=\"recipe.php?id=$id\">$name</a>";
		echo "</td></tr>";
		}
		echo "</table>";
	   }
  
	?>
    </div>
  </div>
	<?php include("header_right.php"); ?>
</div>
</body>
</body>
</html>
