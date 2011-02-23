<?php
   session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>DO SOMETHING, DARN YOU!!!</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<?php
  include("db_connect.php");

   $query = "select id, recipe_name from recipes order by recipe_name;";
   $result = mysqli_query($db, $query);
   while($row = mysqli_fetch_array($result)){
   	$name = $row['recipe_name'];
	$id = $row['id'];
   	echo "<a href=\"recipe.php?id=$id\">$name</a><br />";
   }
   
  
?>

</body>
</html>
