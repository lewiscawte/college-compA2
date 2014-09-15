<?php
/**
 * Created by PhpStorm.
 * User: lewiscawte
 * Date: 15/09/14
 * Time: 09:13
 */

$values = array();
$x = 0;
$comps = 0;
$val = 0;
$min = 1;
$mid = ($min + $max) / 2;
$max = 1000000;

for( $x=1; $x<$max; $x++ ) {
    $array[$x] = $x;
//    echo "Adding " . $x . " to the array.\n";
}

// Needs loop
if ( $val === $mid ) {
    $this->found( $val );
    $comps++;
} elseif ( $val < $mid ) {
    $max = $mid;
} elseif ( $val > $mid ) {
    $min = $mid;
}

function found( $luckyNumb ) {
    echo "Congratulations!\n\n";
    echo "The Binary Sort found the number " . $val;
    echo "\nThis took " . $comps . " comparisons!\n";
}