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
          <!--<li><a href="http://www.free-css.com/">REVIEW RECIPES</a></li>
          <li><a href="http://www.free-css.com/">ADD COMMENTS</a></li>
          <li><a href="http://www.free-css.com/">SETTINGS</a></li>-->
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
      <!--<p><a target="_blank" href="http://validator.w3.org/check?uri=referer"><img height="31" alt="" src="http://www.w3.org/Icons/valid-xhtml10" width="88" vspace="8" border="0" /></a><a target="_blank" href="http://jigsaw.w3.org/css-validator/check/referer"><img alt="" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" vspace="8" border="0" /></a></p>-->
    </div>
    <!--<div id="contact"> <strong>QUICK CONTACT</strong> <img src="images/contact.png" alt="" width="46" height="73" /><br />
      Tel: 000-200-0022<br />
      Fax: 001-100-0011<br />
      Email: info [at] templatemo.com<br />
    </div>-->
  </div>
    <div id="footer">Copyright Dish in a Flash- Designed by <a href="http://www.zacharski.org/courses/spring-2011/cs-350-applications-of-databases/teams/">Team 2 Session 2</a></div>
</div>
</body>
</html>