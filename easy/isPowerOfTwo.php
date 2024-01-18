<?php

// Power of Two
// Example 1:
// Input: n = 1
// Output: true
// Explanation: 2 pangkat 0 = 1

// Example 2:
// Input: n = 16
// Output: true
// Explanation: 2 pangkat 4 = 16
// Example 3:

// Input: n = 3
// Output: false

function isPowerOfTwo($n)
{
  if ($n <= 0) {
    return (false);
  }
  while ($n > 1) {
    if ($n % 2 != 0) {
      return (false);
    }
    $n = $n / 2;
  }
  return (true);
}

// isPowerOfTwo(1);
// isPowerOfTwo(4);
// isPowerOfTwo(6);
