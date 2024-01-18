<?php
// Maximum Product of Two Elements in an Array
// Input: nums = [1,5,4,5]
// Output: 16
// Explanation: Choosing the indices i=1 and j=3 (indexed from 0), you will get the maximum value of (5-1)*(5-1) = 16.

function maxProduct($nums)
{
  // var_dump(count($nums));
  // exit;
  if (count($nums) == 2) {
    return (($nums[0] - 1) * ($nums[1] - 1));
  } else {
    for ($j = 0; $j < count($nums); $j++) {
      for ($i = 0; $i < count($nums) - 1; $i++) {
        if ($nums[$i] > $nums[$i + 1]) {
          $temp = $nums[$i + 1];
          $nums[$i + 1] = $nums[$i];
          $nums[$i] = $temp;
        }
      }
    }
    return ($nums[count($nums) - 1] - 1) * ($nums[count($nums) - 2] - 1);
  }
}

// maxProduct([1, 5, 4, 5, 7]);
// maxProduct([3, 7]);