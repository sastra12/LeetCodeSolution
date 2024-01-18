<?php

// 14. Longest Common Prefix
// Write a function to find the longest common prefix string amongst an array of strings.
// If there is no common prefix, return an empty string "".

// Example 1:
// Input: strs = ["flower","flow","flight"]
// Output: "fl"

// Example 2:
// Input: strs = ["dog","racecar","car"]
// Output: ""
// Explanation: There is no common prefix among the input strings.
function longestCommonPrefix($strs)
{
  $result = "";
  $limit = null;
  for ($a = 0; $a < count($strs); $a++) {
    if ($limit == null) {
      $limit = strlen($strs[$a]);
    } else if ($limit != null && strlen($strs[$a]) <  $limit) {
      $limit = strlen($strs[$a]);
    }
  }

  for ($i = 0; $i < $limit; $i++) {
    $currentChar = $strs[0][$i];
    for ($j = 1; $j < count($strs); $j++) {
      if ($currentChar !== $strs[$j][$i]) {
        break 2;
      }
    }
    $result .= $currentChar;
  }

  return ($result);
}
// longestCommonPrefix(["flower", "flower", "flower", "flower"]);
// longestCommonPrefix(["a"]);
// longestCommonPrefix(["cir", "car"]);
// longestCommonPrefix(["ab", "a"]);
// longestCommonPrefix(["flower", "flow", "flight"]);
// longestCommonPrefix(["dog", "racecar", "car"]);