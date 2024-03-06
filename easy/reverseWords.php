<?php
// Reverse Words in a String III
// Given a string s, reverse the order of characters in each word within a sentence while still preserving whitespace and initial word order.
// Example 1:
// Input: s = "Let's take LeetCode contest"
// Output: "s'teL ekat edoCteeL tsetnoc"

// Example 2:
// Input: s = "Mr Ding"
// Output: "rM gniD"
function reverseWords($s)
{
  $str = "";
  $stringToArray = explode(" ", $s);
  for ($i = 0; $i < count($stringToArray); $i++) {
    for ($j = strlen($stringToArray[$i]) - 1; $j >= 0; $j--) {
      $str .=  $stringToArray[$i][$j];
    }
    if ($i != count($stringToArray) - 1) {
      $str .= " ";
    }
  }
  return $str;
}

var_dump(reverseWords("Let's take LeetCode contest"));
