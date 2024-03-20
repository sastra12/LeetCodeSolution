<?php
// Rank Transform of an Array
// Given an array of integers arr, replace each element with its rank.
// The rank represents how large the element is. The rank has the following rules:
// Rank is an integer starting from 1.
// The larger the element, the larger the rank. If two elements are equal, their rank must be the same.
// Rank should be as small as possible.
// Example 1:
// Input: arr = [40,10,20,30]
// Output: [4,1,2,3]
// Explanation: 40 is the largest element. 10 is the smallest. 20 is the second smallest. 30 is the third smallest.

// Example 2:
// Input: arr = [100,100,100]
// Output: [1,1,1]
// Explanation: Same elements share the same rank.

// Example 3:
// Input: arr = [37,12,28,9,100,56,80,5,12]
// Output: [5,3,4,2,8,6,7,1,3]
function arrayRankTransform($arr)
{
  $originalArray = $arr;
  sort($arr);
  $result = [];

  $currentKey = 1;
  // Iterasi melalui array
  $length = count($arr);
  for ($i = 0; $i < $length; $i++) {
    // Tambahkan pasangan kunci-nilai ke hasil
    $result[$arr[$i]] = $currentKey;

    // Periksa apakah nilai berikutnya sama dengan nilai saat ini
    if ($i < $length - 1 && $arr[$i + 1] != $arr[$i]) {
      // Jika tidak sama, naikkan kunci saat ini
      $currentKey++;
    }
  }
  $finalResult = [];
  foreach ($originalArray as $value) {
    if (isset($result[$value])) {
      $finalResult[] = $result[$value];
    }
  }
  return $finalResult;
}

var_dump(arrayRankTransform([37, 12, 28, 9, 100, 56, 80, 5, 12]));
