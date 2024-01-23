<?php
// Counting Words With a Given Prefix
// You are given an array of strings words and a string pref.
// Return the number of strings in words that contain pref as a prefix.
// A prefix of a string s is any leading contiguous substring of s.

// Example 1:
// Input: words = ["pay","attention","practice","attend"], pref = "at"
// Output: 2
// Explanation: The 2 strings that contain "at" as a prefix are: "attention" and "attend".

// Example 2:
// Input: words = ["leetcode","win","loops","success"], pref = "code"
// Output: 0
// Explanation: There are no strings that contain "code" as a prefix.

function prefixCount($words, $pref)
{
  $totalPrefix = 0;
  foreach ($words as $key => $value) {
    if (strlen($pref) <= strlen($value)) {
      if (substr($value, 0, strlen($pref)) == $pref) {
        $totalPrefix += 1;
      }
    }
  }
  return ($totalPrefix == 0) ? 0 : $totalPrefix;
}

var_dump(prefixCount(["pay", "attention", "practice", "attend"], "at"));
var_dump(prefixCount(["leetcode", "win", "loops", "success"], "code"));
