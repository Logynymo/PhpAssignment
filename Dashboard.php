<?php $month = date("F");?>
<?php include "Include/dateFunction.php";?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="lige" id="container">
		<?php include "Include/Header-include.php";?>
		<?php include "Include/Nav-include.php";?>
		<br>
		<h1><strong>This is the Dashboard-page</strong></h1>
		<br>
		<br>
		<p>
			<?php "It is $month";?>
			<?php echo messageOfTheMonth($month);?>
		</p>


		<?php include "Include/Footer-include.php";?>
	</div>
</body>
</html>