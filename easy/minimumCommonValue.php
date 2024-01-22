<?php
// Example 1:
// Input: nums1 = [1,2,3], nums2 = [2,4]
// Output: 2
// Explanation: The smallest element common to both arrays is 2, so we return 2.

// Example 2:
// Input: nums1 = [1,2,3,6], nums2 = [2,3,4,5]
// Output: 2
// Explanation: There are two common elements in the array 2 and 3 out of which 2 is the smallest, so 2 is returned.

function getCommon($nums1, $nums2)
{
  // $nums2 = array_flip($nums2);
  // var_dump($nums2);
  // exit;
  foreach ($nums1 as $key => $value) {
    if (isset($nums2[$key]) == $value) {
      return $value;
    }
  }

  return -1;
}

var_dump(getCommon([2, 4], [1, 2]));
var_dump(getCommon([1, 2], [2, 4]));
// var_dump(getCommon([1, 2, 3], [2, 4]));
// var_dump(getCommon([1, 2, 3, 6], [2, 3, 4, 5]));
