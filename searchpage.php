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
	<h4>Search</h4>
		<form action="search.php" method="get" class="searchform">
		<p>
			<input type="text" id="searchq" name="searchText" />
			<input type="submit" class="formbutton" value="Search" />
		</p>
	</form>
	<h4>Select Search Parameter</h4>
	<form name ="form1" Method ="Post" action = "search.php">
	<Input type = 'Radio' Name ='searchtype' value= 'name'>Search by recipe name
	<Input type = 'Radio' Name ='searchtype' value= 'ingredient'>Search by Ingredient
	</form>
	
    </div>
  </div>
	<?php //include("header_right.html"); ?>
</div>
</body>
</body>
</html>
