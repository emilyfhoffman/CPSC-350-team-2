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
			//$id = $_POST['recipe_id'];
			$name = $_GET['name'];
			$collection = $db -> recipe;
			$query = array("recipe_name" => $name);
			$cursor = $collection -> find($query);
			foreach ($cursor as $obj) {
					echo 'Recipe Name: '.$obj['recipe_name'] .'<br/>'. '<br/>' ;
					echo 'Ingredients: '. '<br/>' .$obj['ingredients'] .'<br/>'. '<br/>';
					echo 'Instructions: '. '<br/>' .$obj['instructions'] .'<br/>'. '<br/>';
			}
			$collection = $db -> comments;
			$date = date('m-d-y',time());
			$comment = $_POST['comment'];
			$email = $_POST['Email'];
			if($email != '' and $comment != null){
				$formattedComment = str_replace("\n", "<br>", $comment);
				$commentInsert = array("email" => $email, "recipe_name" =>  $name, "comment" => $formattedComment, "date" => $date);
				$collection -> insert($commentInsert);
			}
			echo "<strong>Comments</strong><br/><br/>";
			$query = array("recipe_name" => $name);
			$cursor = $collection-> find($query);
			foreach ($cursor as $obj) {
				echo 'Email: '.$obj['email'] .'<br/>';
				echo 'Date: ' .$obj['date'] .'<br/>';
				echo 'Comment: '.$obj['comment'] .'<br/>'. '<br/>';
			}
				
				echo " <form method = 'post' action = \"recipe.php?name=$name\">
			
					<table>
					<tr><td>E-mail</td><td>
					<input type='text' id='Email' name='Email' value =''/>
				</td>
				<tr><td>

				<tr><td>Comment</td><td>

					<textarea name='comment' id='comment' cols='40'rows='5' 
					onFocus='if(this.innerText == '') 
					{this.innerText = '';}' 
					onBlur='if (this.innerText == '') 
					{this.innerText = ';}' ></textarea><br>

					</td>
					</td>
					</table>
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