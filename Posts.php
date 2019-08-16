<?php include "Include/stringFunctions.php";?>
<?php include "Include/opgave4.php";?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="container">
		<?php include "Include/Header-include.php";?>
		<?php include "Include/Nav-include.php";?>
		<br>
		<h1><strong>This is the posts page</strong></h1>
		<br><br><br>
		<?php stringToUppercase();?>
		<br><br>
		<?php ucFirstLetter();?>
		<br><br>
		<?php ucEveryFirstWord();?>
		<br><br>
		<?php searchString();?>
		<br><br>
		<?php pwGenerator();?>
		<br><br>
		<?php palindromeChecker();?>
		<br><br>
		<?php findBoyoInArray()?>
		<br><br>
		<div class="monthPosition">
		<?php assRayMonths(true)?>	
		</div>
		<?php assRayMonths()?>
		<?php include "Include/Footer-include.php";?>
	</div>


</body>
</html>