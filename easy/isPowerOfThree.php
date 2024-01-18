<?php

// Power of Three
// Example 1:
// Input: n = 27
// Output: true
// Explanation: 27 = 33

// Example 2:
// Input: n = 0
// Output: false
// Explanation: There is no x where 3x = 0.

// Example 3:
// Input: n = -1
// Output: false
// Explanation: There is no x where 3x = (-1).

function isPowerOfThree($n)
{
  if ($n <= 0) {
    return false;
  }
  while ($n > 1) {
    if ($n % 3 !== 0) {
      return false;
    }
    $n = $n / 3;
  }
  return true;
}
