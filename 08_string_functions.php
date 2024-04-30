<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/
$string = 'ofdkaskdpaskdas';

//string length
echo strlen($string);

//find character position

echo strpos($string, 'o');

//find the position of the last occurence of a substring
echo strrpos($string, 'o');


//reverse a string

echo strrev($string);

//convert to lowerCase
echo strtolower($string);

//conver to uppercase

echo strtoupper($string);

//capitalize
echo ucwords($string);


//replace

echo str_replace('word', 'ofd', $string);

//return portion of string

echo substr($string, 0, 4);

//starts with === str_starts_with($string, string that it will check)
//ends with === str_ends_with($string, string that it will check)

