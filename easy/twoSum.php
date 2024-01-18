<?php
// Two Sum
function twoSum($nums, $target)
{
  for ($a = 0; $a < count($nums); $a++) {
    for ($i = $a + 1; $i < count($nums); $i++) {
      if ($nums[$a] + $nums[$i] == $target) {
        return [$a, $i];
      }
    }
  }
}
// twoSum([2, 7, 11, 15], 9);
// Output [0,1]

// Input: nums = [3,2,4], target = 6
// Output: [1,2]