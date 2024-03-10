<?php
// Check if All Characters Have Equal Number of Occurrences
// Given a string s, return true if s is a good string, or false otherwise.
// A string s is good if all the characters that appear in s have the same number of occurrences (i.e., the same frequency).
// Example 1:
// Input: s = "abacbc"
// Output: true
// Explanation: The characters that appear in s are 'a', 'b', and 'c'. All characters occur 2 times in s.

// Example 2:
// Input: s = "aaabb"
// Output: false
// Explanation: The characters that appear in s are 'a' and 'b'.
// 'a' occurs 3 times while 'b' occurs 2 times, which is not the same number of times.
function areOccurrencesEqual($s)
{
  $arr = [];
  for ($i = 0; $i < strlen($s); $i++) {
    if (isset($arr[$s[$i]])) {
      $arr[$s[$i]] += 1;
    } else {
      $arr[$s[$i]] = 1;
    }
  }

  $firstValue = reset($arr);
  $allsameValue = true;
  foreach ($arr as $value) {
    if ($value !== $firstValue) {
      $allsameValue = false;
      break;
    }
  }
  return $allsameValue;
}

var_dump(areOccurrencesEqual("abacbc"));
