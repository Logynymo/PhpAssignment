<?php

function findBoyoInArray() {

	$delimiter = "|"; //Delimiter for imploding, exploding and ucwords
	$find = "matwix";
	$elever = array(

		"matwix",
		"patwix",
		"madwix",
		"bobwix",
		"tobwix",
		"jacwix" );

	$tempImplode = implode( $delimiter, $elever );

	$find = ucwords( $find );

	$newStudentArray = ucwords( $tempImplode, $delimiter );


	$newStudentArray = explode( $delimiter, $newStudentArray );


	if ( in_array( $find, $newStudentArray ) ) {

		echo " \n Keyword found on number: " . array_search( $find, $newStudentArray ) . " in the array";
	} else {
		echo nl2br( "Keyword not found." );
	}
}
?>

<?php

function assRayMonths() {
	$months = array( "Januar" => "31", "Februar" => "28", "Marts" => "31", "April" => "30", "Maj" => "31", "Juni" => "30", "Juli" => "31", "August" => "31", "September" => "30", "October" => "31", "November" => "30", "December" => "31" );

	foreach() {
		
	}
	?>

}