<?php
// Add Digits
// Given an integer num, repeatedly add all its digits until the result has only one digit, and return it.
// Example 1:
// Input: num = 38
// Output: 2
// Explanation: The process is
// 38 --> 3 + 8 --> 11
// 11 --> 1 + 1 --> 2 
// Since 2 has only one digit, return it.

// Example 2:
// Input: num = 0
// Output: 0
function addDigits($num)
{
  $number = str_split($num);
  while (count($number) > 1) {
    $sum = 0;
    foreach ($number as $value) {
      $sum += (int) $value;
    }
    $number = str_split($sum);
  }
  return (int) $number[0];
}

var_dump(addDigits(38));
// var_dump(addDigits(99));
