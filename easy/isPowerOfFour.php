<?php
// Power of Four
// Example 1:
// Input: n = 16
// Output: true

// Example 2:
// Input: n = 5
// Output: false

// Example 3:
// Input: n = 1
// Output: true

function isPowerOfFour($n)
{
  if ($n <= 0) {
    return false;
  }

  while ($n > 1) {
    if ($n % 4 !== 0) {
      return false;
    }
    $n = $n / 4;
  }

  return true;
}

// isPowerOfFour(16);