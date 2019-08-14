<?php

function stringToUppercase() {
	$str = "the quick brown fox jumped over the lazy dog";
	$str = strtoupper( $str );
	echo $str;
}

?>

<?php

function ucFirstLetter() {
	$str = "the quick brown fox jumped over the lazy dog";
	$str = ucfirst( $str );
	echo $str;
}

?>

<?php

function ucEveryFirstWord() {
	$str = "the quick brown fox jumped over the lazy dog";
	$str = ucwords( $str );
	echo $str;
}

?>