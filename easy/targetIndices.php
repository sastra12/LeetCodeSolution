<?php
// Find Target Indices After Sorting Array
// You are given a 0-indexed integer array nums and a target element target.
// A target index is an index i such that nums[i] == target.
// Return a list of the target indices of nums after sorting nums in non-decreasing order. If there are no target indices, return an empty list. The returned list must be sorted in increasing order.
// Example 1:
// Input: nums = [1,2,5,2,3], target = 2
// Output: [1,2]
// Explanation: After sorting, nums is [1,2,2,3,5].
// The indices where nums[i] == 2 are 1 and 2.

// Example 2:
// Input: nums = [1,2,5,2,3], target = 3
// Output: [3]
// Explanation: After sorting, nums is [1,2,2,3,5].
// The index where nums[i] == 3 is 3.

// Example 3:
// Input: nums = [1,2,5,2,3], target = 5
// Output: [4]
// Explanation: After sorting, nums is [1,2,2,3,5].
// The index where nums[i] == 5 is 4.
function targetIndices($nums, $target)
{
  $position = [];
  for ($i = 0; $i < count($nums) - 1; $i++) {
    for ($j = 0; $j < count($nums) - $i - 1; $j++) {
      if ($nums[$j] > $nums[$j + 1]) {
        $temp = $nums[$j];
        $nums[$j] = $nums[$j + 1];
        $nums[$j + 1] = $temp;
      }
    }
  }
  foreach ($nums as $key => $value) {
    if ($value == $target) {
      $position[] = $key;
    }
  }

  return $position;
}

var_dump(targetIndices([1, 2, 5, 2, 3], 2));
