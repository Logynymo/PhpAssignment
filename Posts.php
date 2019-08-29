<?php include "Include/stringFunctions.php";?>
<?php include "Include/opgave4.php";?>
<?php include "form.php";?>


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
		<?php findBoyoInArray();?>
		<br><br>
		<div class="monthPosition">
			<?php assRayMonths(true);?>
		</div>
		<?php assRayMonths();?>

		<?php laererArray();?>
		<br><br>


		<p>
			Pick a color:
			<form action='' method='post' name='color'>
				<Select name='Colors'>
					<option value='bgRed' name='Red' <?php 
							if(isset($_POST['Colors']) &&
							  $_POST["Colors"] === "bgRed"){
								echo "selected";
							} ?>>Rød</option>
					<option value='bgGreen' name='Green' <?php 
							if(isset($_POST['Colors']) &&
							  $_POST["Colors"] === "bgGreen"){
								echo "selected";
							} ?>>Grøn</option>
					<option value='bgBlue' name='Blue' <?php 
							if(isset($_POST['Colors']) &&
							  $_POST["Colors"] === "bgBlue"){
								echo "selected";
							} ?>>Blå</option>
					<option value='bgGray' name='Gray' <?php 
							if(isset($_POST['Colors']) &&
							  $_POST["Colors"] === "bgGray"){
								echo "selected";
							} ?>>Grå</option>
				</select>
				<input type='submit' name='submitButton' class="<?php echo $_POST["Colors"]?>"></input>
			</form>
		</p>
		<?php include "Include/Footer-include.php";?>
	</div>
</body>
</html>