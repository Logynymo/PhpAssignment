<?php

function findBoyoInArray() {
	$delimiter = "|";
	$find = "matwix";
	$elever = array(

		"matwix",
		"patwix",
		"madwix",
		"bobwix",
		"tobwix",
		"jacwix" );
	$tempImplode = implode($delimiter, $elever);

//	echo $tempImplode;
  	ucwords($tempImplode, $delimiter);
	echo $tempImplode;
	$newStudentArray = explode($delimiter, $tempImplode);
		print_r($newStudentArray);

	/*if ( in_array( $find, $newStudentArray ) ) {

		echo " \n Personen er fundet og er nr: " . array_search( $find, $newStudentArray ) . " i array'et";
	} else {
		echo nl2br( "F i chatten boys" );
	}*/
	
}
?>