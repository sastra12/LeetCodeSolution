<?php
// Find First and Last Position of Element in Sorted Array
// Given an array of integers nums sorted in non-decreasing order, find the starting and ending position of a given target value.
// If target is not found in the array, return [-1, -1].
// You must write an algorithm with O(log n) runtime complexity.

// Example 1:
// Input: nums = [5,7,7,8,8,10], target = 8
// Output: [3,4]

// Example 2:
// Input: nums = [5,7,7,8,8,10], target = 6
// Output: [-1,-1]

// Example 3:
// Input: nums = [], target = 0
// Output: [-1,-1]

function searchRange($nums, $target)
{
  $position = [];
  if (count($nums) != 1) {
    foreach ($nums as $key => $value) {
      if ($value == $target) {
        $position[] = $key;
      }
    }
  } else if (count($nums) == 1 && $nums[0] == $target) {
    $position = [0, 0];
  } else {
    $position = [];
  }

  if (count($position) == 1) {
    $position = [$position[0], $position[0]];
  } else if (count($position) >= 2) {
    $lastIndex = count($position) - 1;
    $position = [$position[0], $position[$lastIndex]];
  }
  return (empty($position)) ? [-1, -1] : $position;
}

// var_dump(searchRange([5, 7, 7, 8, 8, 10], 8));
// var_dump(searchRange([5, 7, 7, 8, 8, 10], 6));
// var_dump(searchRange([1], 1));
// var_dump(searchRange([1], 0));
var_dump(searchRange([1, 3], 1));
