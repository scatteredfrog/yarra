<?php
/**
 * Reverse an array programmatically.
 *
 * @param array $to_reverse
 *
 * @return array $new_array
 */
function yarra(array $to_reverse):array
{
    // First, we'll opy the array to ensure we have the correct number of elements.
    $new_array = $to_reverse;

    // Figure out how many elements there are in the array.

    // Subtract 1 to get the count to match the last element index.
    $arlen = count($to_reverse)-1;

    // Our technique: go halfway through the array while reversing opposing elements.
    $mid = (int) ($arlen / 2);

    for ($x = 0; $x <= $mid; $x++) {
        $new_array[$x] = $to_reverse[$arlen-$x];
        $new_array[$arlen-$x] = $to_reverse[$x];
    }

    // Here's where we will cheat a bit by using a built-in PHP sort routine -- but only so that 
    // the array is indexed in the proper order, rather than 0,7,1,6 etc.
    ksort($new_array);
    
    return $new_array;
}
