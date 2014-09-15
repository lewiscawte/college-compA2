<?php

$array = array(
	70, 19, 6, 5, 20, 1
);

$x = 0;
$count = count($array);

	for( $x = 0; $x < ($count-1); $x++ ) {
		if( $array[$x] > $array[$x+1] ) {
			$tmp = $array[$x];
			$array[$x] = $array[$x+1];
			$array[$x+1] = $tmp;
		}
		var_dump( $array );
	}
}
