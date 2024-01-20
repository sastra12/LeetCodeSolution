<?php
// Example 1:
// Input: s = "A man, a plan, a canal: Panama"
// Output: true
// Explanation: "amanaplanacanalpanama" is a palindrome.

// Example 2:
// Input: s = "race a car"
// Output: false
// Explanation: "raceacar" is not a palindrome.

// Example 3:
// Input: s = " "
// Output: true
// Explanation: s is an empty string "" after removing non-alphanumeric characters.
// Since an empty string reads the same forward and backward, it is a palindrome.

function isPalindrome($s)
{
  if ($s == " ") {
    return true;
  } else {
    $s = str_replace(' ', '', strtolower(preg_replace("/[^A-Za-z0-9 ]/", '', $s)));
    $result = "";
    for ($i = strlen($s) - 1; $i >= 0; $i--) {
      $result .= $s[$i];
    }
    return $result == $s;
  }
}

var_dump(isPalindrome("A man, a plan, a canal: Panama"));
var_dump(isPalindrome(" "));
