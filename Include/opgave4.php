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

	$find = ucwords($find);
	
	$newStudentArray = ucwords( $tempImplode, $delimiter );


	$newStudentArray = explode( $delimiter, $newStudentArray );


	if ( in_array( $find, $newStudentArray ) ) {

		echo " \n Keyword found on number: " . array_search( $find, $newStudentArray ) . " in the array";
	} else {
		echo nl2br( "Keyword not found." );
	}
}
?>