<?php
// Given two non-negative integers, num1 and num2 represented as string, return the sum of num1 and num2 as a string.
// You must solve the problem without using any built-in library for handling large integers (such as BigInteger). 
// You must also not convert the inputs to integers directly.

// Example 1:
// Input: num1 = "11", num2 = "123"
// Output: "134"

// Example 2:
// Input: num1 = "456", num2 = "77"
// Output: "533"

// Example 3:
// Input: num1 = "0", num2 = "0"
// Output: "0"

function addStrings($num1, $num2)
{
  $remainder = null;
  $total = "";
  $sum = [];
  $different = (strlen($num1) > strlen($num2)) ? strlen($num1) - strlen($num2) : strlen($num2) - strlen($num1);
  // buat menambahkan angka 0 di depan angka
  if ($different != 0) {
    if (strlen($num1) > strlen($num2)) {
      $num2 = str_pad($num2, strlen($num2) + $different, "0", STR_PAD_LEFT);
    } else {
      $num1 = str_pad($num1, strlen($num1) + $different, "0", STR_PAD_LEFT);
    }
  }

  if (strlen($num1) > 1 && strlen($num2) > 1) {
    for ($i = strlen($num1) - 1; $i >= 0; $i--) {
      if ($i != 0) {
        if ($remainder != null) {
          $temp = $remainder + (int) $num1[$i] + (int) $num2[$i];
          if ($temp > 9) {
            $stringTemp = (string) $temp;
            $sum[$i] =  $stringTemp[1];
            $remainder = $stringTemp[0];
          } else if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $sum[$i] = $stringTemp[0];
            $remainder = null;
          }
        } else if ($remainder == null) {
          $temp = (int) $num1[$i] + (int) $num2[$i];
          if ($temp > 9) {
            $stringTemp = (string) $temp;
            $sum[$i] =  $stringTemp[1];
            $remainder = $stringTemp[0];
          } else if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $sum[$i] = $stringTemp[0];
            $remainder = null;
          }
        }
      } else if ($i == 0) {
        if ($remainder != null) {
          $temp = $remainder + (int) $num1[$i] + (int) $num2[$i];
          if ($temp > 9) {
            $stringTemp = (string) $temp;
            $sum[$i] =  $stringTemp;
            $remainder = null;
          } else if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $sum[$i] = $stringTemp[0];
            $remainder = null;
          }
        } else if ($remainder == null) {
          $temp = (int) $num1[$i] + (int) $num2[$i];
          if ($temp > 9) {
            $stringTemp = (string) $temp;
            $sum[$i] =  $stringTemp;
            $remainder = null;
          } else if ($temp <= 9) {
            $stringTemp = (string) $temp;
            $sum[$i] = $stringTemp;
            $remainder = null;
          }
        }
      }
    }
  } else {
    $sumOneDigit = (int) $num1 + (int) $num2;
    $total .= $sumOneDigit;
    return $total;
  }
  ksort($sum);
  for ($i = 0; $i < count($sum); $i++) {
    $total .= $sum[$i];
  }
  return $total;
}

var_dump(addStrings("1", "1"));
var_dump(addStrings("1", "9"));
var_dump(addStrings("1", "99"));
var_dump(addStrings("9", "109"));
