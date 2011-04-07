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
<div id="container">
  <div id="left_column">
    <div id="title">Dish in a <span> Flash</span></div>
    <div id="header">
      <div id="header_slogan"> Need to find a recipe fast come to a Dish in a Flash! </div>
    </div>
    <div id="left_content">


	<?php
	  include("db_connect.php");

	   $id = $_GET['id'];
	   $query = "select * from recipes where recipe_id = $id;";
	   $result = mysqli_query($db, $query);
	   $query = "select i.name from ingredients i natural join recipes r natural join recipe_to_ingredient ri where r.recipe_id = $id;";
	   $result2 = mysqli_query($db, $query);
	   $ingredients = "";
	   while($row = mysqli_fetch_array($result2)){
	   		$ingredients .= $row['name']."<br/>";
	   }
	   $row = mysqli_fetch_array($result);
	   	$name = $row['recipe_name'];
		$instructions = $row['instructions'];
		$dish_type = $row['dist_type'];
	   	echo "<h1>$name</h1> <br />";
		echo "$dish_type <br />";
		echo "$ingredients <br />";
		echo "$instructions <br/><br/>";
		
		$date = date('Y-m-d',time());
		//echo $date;
		$comment = $_POST['comment'];
		$email = $_POST['Email'];
		if($email != '' and $comment != null){
			$formattedComment = str_replace("\n", "<br>", $comment);
			$query = "INSERT INTO comments VALUES ('','$email','$id','$formattedComment','$date');";
			$result = mysqli_query($db,$query);
		}
	
		
		echo "<strong>Comments</strong><br/>";
		$query = "SELECT * FROM comments WHERE recipe_id = '$id';";
		$result = mysqli_query($db,$query);
		while($row = mysqli_fetch_array($result)){
			$date = $row['date'];
			$comment = $row['comment'];
			$email = $row['email_address'];
			echo "Comment from ".$email." on ".$date.":<br/>".$comment."<br/><br/>";
		}
		echo "<form method = 'post' action = 'recipe.php?id=$id'>";
?>
	<table>
	<tr><td>E-mail</td><td>
			<input type="text" id="Email" name="Email" />
		</td>
	<tr><td>

	<tr><td>Comment</td><td>
			<textarea name="comment" id="comment" cols="40" rows="5" 
			value="Enter your comments here, separated by commas..." 
			onFocus="if(this.value == 'Enter your instructions here...') 
			{this.value = '';}" 
			onBlur="if (this.value == '') 
			{this.value = 'Enter your istructions here...';}" />
			</textarea><br>
		</td>
	</table>
	<tr><td><input type="submit" value="Submit" /></td></tr>
	</form>
	
    </div>
  </div>
	<?php include('header_right.php'); ?>
</div>
</body>
</html>