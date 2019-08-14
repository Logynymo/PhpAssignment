<?php  
function messageOfTheMonth($month) {
	if ($month === "December" || $month === "January" || $month === "February") 
		return "It is $month, it's fucking freezing! did you remember your jacket?";
	
	elseif ($month === "March" || $month === "April" || $month === "May") 
		return "It is $month, so it is spring. The world is going green!";
	
	elseif ($month === "June" || $month === "Juli" || $month === "August") 
		return "It is $month, so it is Summer. Remember to enjoy the sun while it is here. ";

	elseif ($month === "September" || $month === "October" || $month === "November") 
		return "It is $month, so it is fall. Yes... you are allowed to jump into puddles...";
}
?>

<?php 
function oddOrEvenBgColor($backGround, $minute) {
	$minute = idate("i");
	if ($minute % 2 == 0)
		$backGround =
		
}
?>