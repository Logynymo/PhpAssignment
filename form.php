<?php

function landingPageColors() {
	if ( isset( $_POST[ 'Colors' ] ) &&
		$_POST[ "Colors" ] === "bgRed" ) {
		echo "Røde";
	} elseif ( isset( $_POST[ 'Colors' ] ) &&
		$_POST[ "Colors" ] === "bgGreen" ) {
		echo "Grønne";
	}
	elseif ( isset( $_POST[ 'Colors' ] ) &&
		$_POST[ "Colors" ] === "bgBlue" ) {
		echo "Blå";
	}
	elseif ( isset( $_POST[ 'Colors' ] ) &&
		$_POST[ "Colors" ] === "bgGray" ) {
		echo "Grå";
	}
}
?>