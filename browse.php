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
	<Input type = 'Radio' Name ='searchtype' value= 'drinks'>Browse Drinks<br />
	<Input type = 'Radio' Name ='searchtype' value= 'desserts'>Browse Desserts<br />
	<Input type = 'Radio' Name ='searchtype' value= 'main dish'>Browse Main Dishes<br />
	<Input type = 'Radio' Name ='searchtype' value= 'breakfast'>Browse Breakfasts<br />
	<Input type = 'Radio' Name ='searchtype' value= 'appetizer'>Browse Appetizers<br />
	<Input type = 'Radio' Name ='searchtype' value= 'side dish'>Browse Side Dishes<br />
	<input type = "submit" class = "formbutton" value="GO!"/>
	</form>
	
    </div>
  </div>
	<?php include("header_right.html"); ?>
</div>
</body>
</body>
</html>