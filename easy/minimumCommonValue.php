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
  // merubah value pada array menjadi key
  $newNums2 = array_flip($nums2);
  foreach ($nums1 as $key1 => $value1) {
    if (isset($newNums2[$value1])) {
      return $value1;
    }
  }
  return -1;
}
var_dump(getCommon([2, 4], [1, 2]));
var_dump(getCommon([1, 2], [2, 4]));


// var_dump(getCommon([1, 2, 3], [2, 4]));
// var_dump(getCommon([1, 2, 3, 6], [2, 3, 4, 5]));
