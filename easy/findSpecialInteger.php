<?php
// Element Appearing More Than 25% In Sorted Array
// Given an integer array sorted in non-decreasing order, there is exactly one integer in the array that occurs more than 25% of the time, 
// return that integer.
// Example 1:
// Input: arr = [1,2,2,6,6,6,6,7,10]
// Output: 6

// Example 2:
// Input: arr = [1,1]
// Output: 1
function findSpecialInteger($arr)
{
  // berapa persentasinya
  $limit = 1 / 4 * count($arr);
  $newArr = [];
  foreach ($arr as $value) {
    if (isset($newArr[$value])) {
      $newArr[$value] += 1;
    } else {
      $newArr[$value] = 1;
    }
  }
  // cari value dengan persentasi lebih dari limit
  foreach ($newArr as  $key => $value) {
    if ($value > $limit) {
      return $key;
    }
  }
}

var_dump(findSpecialInteger([1, 2, 2, 6, 6, 6, 6, 7, 10]));
