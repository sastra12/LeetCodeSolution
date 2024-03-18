<?php
// Find Lucky Integer in an Array
// Given an array of integers arr, a lucky integer is an integer that has a frequency in the array equal to its value.
// Return the largest lucky integer in the array. If there is no lucky integer return -1.
// Example 1:
// Input: arr = [2,2,3,4]
// Output: 2
// Explanation: The only lucky number in the array is 2 because frequency[2] == 2.

// Example 2:
// Input: arr = [1,2,2,3,3,3]
// Output: 3
// Explanation: 1, 2 and 3 are all lucky numbers, return the largest of them.

// Example 3:
// Input: arr = [2,2,2,3,3]
// Output: -1
// Explanation: There are no lucky numbers in the array.
function findLucky($arr)
{
  $newArr = [];

  foreach ($arr as $value) {
    if (isset($newArr[$value])) {
      $newArr[$value] += 1;
    } else {
      $newArr[$value] = 1;
    }
  }

  $maxValue = null;
  foreach ($newArr as $key => $value) {
    if ($key == $value && $maxValue == null) {
      $maxValue = $value;
    } elseif ($key == $value && $maxValue != null) {
      if ($maxValue < $value) {
        $maxValue = $value;
      }
    } elseif ($key != $value && $maxValue == null) {
      $maxValue = -1;
    }
  }
  return $maxValue;
}

var_dump(findLucky([2, 2, 3, 4]));
// var_dump(findLucky([1, 2, 2, 3, 3, 3]));
var_dump(findLucky([2, 2, 2, 3, 3]));
