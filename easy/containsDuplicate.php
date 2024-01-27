<?php

// Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct. 

// Example 1:
// Input: nums = [1,2,3,1]
// Output: true

// Example 2:
// Input: nums = [1,2,3,4]
// Output: false

// Example 3:
// Input: nums = [1,1,1,3,3,4,3,2,4,2]
// Output: true

function containsDuplicate($nums)
{
  $newArr = [];
  $state = false;
  foreach ($nums as $value) {
    if (isset($newArr[$value])) {
      $newArr[$value] += 1;
    } else {
      $newArr[$value] = 1;
    }
  }
  foreach ($newArr as $key => $value) {
    if ($value > 1) {
      $state = true;
      return $state;
    }
  }
  return $state;
}
var_dump(containsDuplicate([1, 2, 3, 4, 1, 1]));
var_dump(containsDuplicate([1, 2, 3, 4]));
