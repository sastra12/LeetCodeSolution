<?php
// Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.
// Note that you must do this in-place without making a copy of the array.

// Example 1:

// Input: nums = [0,1,0,3,12]
// Output: [1,3,12,0,0]

// Example 2:
// Input: nums = [0]
// Output: [0]
function moveZeroes(&$nums)
{
  $qtyZeroes = 0;
  for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] == 0) {
      $qtyZeroes += 1;
    }
  }
  $nums = array_filter($nums, function ($value) {
    return $value !== 0;
  });

  return $nums;

  for ($i = 0; $i < $qtyZeroes; $i++) {
    array_push($nums, 0);
  }

  return $nums;
}

$nums = [0, 1, 0, 3, 12];
var_dump(moveZeroes($nums));
