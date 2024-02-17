<?php
// You are given a large integer represented as an integer array digits, where each digits[i] is the ith digit of the integer. 
// The digits are ordered from most significant to least significant in left-to-right order. 
// The large integer does not contain any leading 0's.
// Increment the large integer by one and return the resulting array of digits.

// Example 1:
// Input: digits = [1,2,3]
// Output: [1,2,4]
// Explanation: The array represents the integer 123.
// Incrementing by one gives 123 + 1 = 124.
// Thus, the result should be [1,2,4].

// Example 2:
// Input: digits = [4,3,2,1]
// Output: [4,3,2,2]
// Explanation: The array represents the integer 4321.
// Incrementing by one gives 4321 + 1 = 4322.
// Thus, the result should be [4,3,2,2].

// Example 3:
// Input: digits = [9]
// Output: [1,0]
// Explanation: The array represents the integer 9.
// Incrementing by one gives 9 + 1 = 10.
// Thus, the result should be [1,0].

function plusOne($digits)
{
  $total = [];
  $remainder = null;
  $num1 = str_pad("1", 1 + (count($digits) - 1), "0", STR_PAD_LEFT);
  if (count($digits) > 1) {
    for ($i = count($digits) - 1; $i >= 0; $i--) {
      if ($i != 0) {
        if ($remainder == null) {
          $temp = (int) $digits[$i] + (int) $num1[$i];
          if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $total[$i] = $stringTemp[0];
            $remainder = null;
          } else {
            if ($temp > 9) {
              $stringTemp = (string) $temp;
              $total[$i] =  $stringTemp[1];
              $remainder = $stringTemp[0];
            }
          }
        } else if ($remainder != null) {
          $temp = $remainder + (int) $digits[$i] + (int) $num1[$i];
          if ($temp > 9) {
            $stringTemp = (string) $temp;
            $total[$i] =  $stringTemp[1];
            $remainder = $stringTemp[0];
          } else if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $total[$i] = $stringTemp[0];
            $remainder = null;
          }
        }
      } else if ($i == 0) {
        if ($remainder != null) {
          $temp = $remainder + (int) $digits[$i] + (int) $num1[$i];
          if ($temp > 9) {
            $stringTemp = (string) $temp;
            $total[$i] =  $stringTemp;
            $remainder = null;
          } else if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $total[$i] = $stringTemp[0];
            $remainder = null;
          }
        } else if ($remainder == null) {
          $temp = (int) $num1[$i] + (int) $digits[$i];
          if ($temp > 9) {
            $stringTemp = (string) $temp;
            $total[$i] =  $stringTemp;
            $remainder = null;
          } else if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $total[$i] = $stringTemp;
            $remainder = null;
          }
        }
      }
    }
  } else {
    $sum = (string) $digits[0] + 1;
    $total = array_map('intval', str_split($sum));
    return $total;
  }
  ksort($total);
  $total = array_map('intval', $total);
  return $total;
}

var_dump(plusOne([9]));
// var_dump(plusOne([4, 3, 2]));
