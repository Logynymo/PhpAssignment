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

<?php

function searchString() {

	$string = "the quick brown fox jumped over the lazy dog";
	$key = "dog";

	if ( strpos( $string, $key ) === false ) {
		echo ' The word ' . $key . ' was not found.';
	} else {
		echo ' The word ' . $key . ' was found.';
	}
}

?>

<?php

function pwGenerator() {

	$email = "halu@aspit.dk";
	//$pwString = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
	//$pwLength = 10;

	$bytes = openssl_random_pseudo_bytes( 20, $cstrong );
	$hex = bin2hex( $bytes );

	$hexCode = var_dump( $hex );
	//var_dump($cstrong);


}

?>

<?php

function palindromeChecker( $string ) {

	if ( strrev( $string ) === $string ) {
		return 1;
	} else {
		return 0;
	}
}
$original = "redivider";

if ( palindromeChecker( $original ) ) {
	echo "Palindrome";
} else {
	echo "Not a Palindrome";
}


?>