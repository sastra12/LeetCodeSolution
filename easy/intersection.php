<?php
// Intersection of Two Arrays
// Given two integer arrays nums1 and nums2, return an array of their intersection. 
// Each element in the result must be unique and you may return the result in any order.
// Example 1:
// Input: nums1 = [1,2,2,1], nums2 = [2,2]
// Output: [2]

// Example 2:
// Input: nums1 = [4,9,5], nums2 = [9,4,9,8,4]
// Output: [9,4]
// Explanation: [4,9] is also accepted.
function intersection($nums1, $nums2)
{
  $numbers = [];
  foreach ($nums2 as $value2) {
    foreach ($nums1 as $value1) {
      if ($value2 == $value1) {
        if (isset($numbers[$value2])) {
          break 1;
        } else {
          $numbers[$value2] = $value2;
        }
      }
    }
  }
  return $numbers;
}

var_dump(intersection([1, 2, 2, 1], [2, 2]));
var_dump(intersection([4, 9, 5], [9, 4, 9, 8, 4]));
