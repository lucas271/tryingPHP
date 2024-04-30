<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/


$arrayNumbers = [1,2,3,4,5,6,7,8];


$arrayString = ['orange', 'black', 'yellow'];

echo count($arrayString);
echo in_array('orange', $arrayString);


array_push($arrayString, 'pen');
array_unshift($arrayString, 'number1');


array_pop($arrayString);
array_shift($arrayString);


$chucked_array = array_chunk($arrayString, 2);


$everything_array = array_merge($arrayString, $arrayNumbers);//you can use spread operator too.


$associative_array = array_combine($arrayNumbers, $arrayString);

//you can create a numbered associative array using array_keys
//you can flip the keys and values with array_flip.


$new_numbers = range(1, 10);


$doubled_new_numbers = array_map(fn($value) => $value * 2, $new_numbers);


$remove_greater_than_15 = array_filter($doubled_new_numbers, fn($value) => $value <= 15);


$sum_everything = array_reduce($remove_greater_than_15, fn($pv, $cv) => $pv + $cv, 0);  