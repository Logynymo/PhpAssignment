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

function assRayMonths( $short = false ) {
  $months = array( "Januar" => 31, "Februar" => 28, "Marts" => 31, "April" => 30, "Maj" => 31, "Juni" => 30, "Juli" => 31, "August" => 31, "September" => 30, "October" => 31, "November" => 30, "December" => 31 );

  echo "<table>";

  foreach ( $months as $month => $days ) {


    if ( !$short ) {


      if ( $days > 30 ) {
        echo "<tr>";
        echo "<td>$month: </td>";
        echo "<td>$days dage</td>";
        echo "</tr>";

      }

    } else {
      if ( $days < 31 ) {
        echo "<tr>";
        echo "<td>$month: </td>";
        echo "<td>$days dage</td>";
        echo "</tr>";
      }
    }
  }
  echo "</table>";
}
?>
<?php
function laererArray(){
$laerere = array(
	  array(
		"fornavn" => "Hanne",
		"efternavn" => "Lund",
		"fag" => "Visualisering"
	  ),
	  array(
		"fornavn" => "Jens",
		"efternavn" => "Clausen",
		"fag" => "Softwarekonstruktion"
	  ),
	  array(
		"fornavn" => "Ronni",
		"efternavn" => "Hansen",
		"fag" => "Teknik"
	  ),
	  array(
		"fornavn" => "Jonas",
		"efternavn" => "Rasmussen",
		"fag" => "AspIT-Lab"
	  )
);

	echo '<pre>',print_r($laerere,2),'</pre>';
}
?>