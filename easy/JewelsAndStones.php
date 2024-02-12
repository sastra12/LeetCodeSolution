<?php
// You're given strings jewels representing the types of stones that are jewels, and stones representing the stones you have. Each character 
// in stones is a type of stone you have. You want to know how many of the stones you have are also jewels.
// Letters are case sensitive, so "a" is considered a different type of stone from "A".

// Example 1:
// Input: jewels = "aA", stones = "aAAbbbb"
// Output: 3

// Example 2:
// Input: jewels = "z", stones = "ZZ"
// Output: 0

function numJewelsInStones($jewels, $stones)
{
  $sum = 0;
  $newArr = [str_split($jewels), str_split($stones)];
  for ($i = 0; $i < count($newArr[0]); $i++) {
    for ($j = 0; $j < count($newArr[1]); $j++) {
      if ($newArr[0][$i] == $newArr[1][$j]) {
        $sum += 1;
      }
    }
  }
  return $sum;
}

var_dump(numJewelsInStones("aA", "aAAbbbb"));
