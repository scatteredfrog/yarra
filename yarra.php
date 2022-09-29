<?php
function yarra(array $to_reverse):array {
    // First, we'll opy the array to ensure we have the correct number of elements
	$new_array = $to_reverse;

    // Figure out how many elements there are in the array
    $arlen = count($to_reverse)-1; // subtract 1 to get the count to match the last element index
	$mid = (int) ($arlen / 2); // Our technique: go halfway through the array while reversing opposing elements

    for ($x = 0; $x <= $mid; $x++) {
		$new_array[$x] = $to_reverse[$arlen-$x];
		$new_array[$arlen-$x] = $to_reverse[$x];
	}

    // Here's where we will cheat a bit by using a built-in PHP sort routine -- but only so that 
    // the array is indexed in the proper order, rather than 0,7,1,6 etc.
    ksort($new_array);
    
	return $new_array;
}