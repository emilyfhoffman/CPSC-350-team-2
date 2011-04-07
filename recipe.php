<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dish in a Flash</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
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
		
		//figure out if we need to insert a new rating.
		if (isset($_POST['rating'])){
			$rating = $_POST['rating'];
			$query = "INSERT INTO ratings VALUES ('$email','$id','$rating');";
			$result = mysqli_query($db, $query);
		}
		
		$query = "SELECT recipe_id FROM ratings WHERE recipe_id = '$id';";
		$result = mysqli_query($db, $query);
		echo "<strong>Average Rating:</strong>";
		
		//display the average rating
		if(mysqli_num_rows($result) > 0){
			$query = "SELECT ROUND(AVG(rating),1) avg FROM ratings WHERE recipe_id = '$id';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$avg = $row['avg'];
			echo "  $avg";
		}else{
			echo "  not yet rated!"; 
		}
		echo "<br/><br/>";
			
		
		
		echo "<strong>Comments</strong><br/><br/>";
		$query = "SELECT * FROM comments WHERE recipe_id = '$id';";
		$result = mysqli_query($db,$query);
		$current_user = '';
		while($row = mysqli_fetch_array($result)){
			$date = $row['date'];
			$comment = $row['comment'];
			$email = $row['email_address'];
			echo "Comment from ".$email." on ".$date.":<br/>".$comment."<br/><br/>";
		}
		
		echo " <form method = 'post' action = 'recipe.php?id=$id'>
			
		<table>
			<tr><td>E-mail</td><td>
			<input type='text' id='Email' name='Email' value ='Enter your email address'/>
		</td>
	<tr><td>

		<tr><td>Comment</td><td>

			<textarea name='Comment' id='Comment' cols='40'rows='5' 
			onFocus='if(this.innerText == 'Enter your Comment here...') 
			{this.innerText = '';}' 
			onBlur='if (this.innerText == '') 
			{this.innerText = 'Enter your Comment here...';}' >Enter your Comment here...</textarea><br>

		</td>
		</td>
	</table>
	<br/>
	<tr><td>Rating</td></tr>
	<tr><td><input type='radio' name = 'rating' value = '1'>1
			<input type='radio' name = 'rating' value = '2'>2
			<input type='radio' name = 'rating' value = '3'>3
			<input type='radio' name = 'rating' value = '4'>4
			<input type='radio' name = 'rating' value = '5'>5</td></tr><br/>
	<br/>
	<tr><td><input type='submit' value='Submit' /></td></tr>
	
	</form>
			
 ";
	?>
    </div>
  </div>
	<?php include('header_right.php'); ?>
</div>
</body>
</html>