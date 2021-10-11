<?php

function insertion_sort($my_array){
    for ($i=0; $i<count($my_array);$i++){
        $val = $my_array[$i];
        $j = $i-1;
        while($j>=0 && $my_array[$j] > $val){
            $my_array[$j+1] = $my_array[$j];
            $j--;
        }
        $my_array[$j+1] = $val;
    }
    return $my_array;
}

$test_array = array(2, 3, 1, 7, 8);
echo "The original array is: \n";
echo implode(', ', $test_array);
echo "<br>";
echo "\n The sorted array in increasing order is: \n";
echo implode(', ', insertion_sort($test_array));
// print_r(insertion_sort($test_array));

?>