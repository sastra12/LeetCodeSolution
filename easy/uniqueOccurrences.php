<?php
// Unique Number of Occurrences
// Given an array of integers arr, return true if the number of occurrences of each value in the array is unique or false otherwise.
// Example 1:
// Input: arr = [1,2,2,1,1,3]
// Output: true
// Explanation: The value 1 has 3 occurrences, 2 has 2 and 3 has 1. No two values have the same number of occurrences.

// Example 2:
// Input: arr = [1,2]
// Output: false

// Example 3:
// Input: arr = [-3,0,1,-3,1,1,1,-3,10,0]
// Output: true
function uniqueOccurrences($arr)
{
  $newArr = [];
  foreach ($arr as $value) {
    if (isset($newArr[$value])) {
      $newArr[$value] += 1;
    } else {
      $newArr[$value] = 1;
    }
  }
  $bool = true;
  foreach ($newArr as $key1 => $value1) {
    foreach ($newArr as $key2 => $value2) {
      if ($key1 != $key2) {
        if ($value1 == $value2) {
          $bool = false;
          break 2;
        }
      }
    }
  }
  return $bool;
}

var_dump(uniqueOccurrences([1, 2, 2, 1, 1, 3]));
var_dump(uniqueOccurrences([1, 2]));
