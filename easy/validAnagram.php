<?php

// Valid Anagram
// Given two strings s and t, return true if t is an anagram of s, and false otherwise.
// An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

// Example 1:
// Input: s = "anagram", t = "nagaram"
// Output: true

// Example 2:
// Input: s = "rat", t = "car"
// Output: false

function isAnagram($s, $t)
{
  $newArrS = [];
  $newArrT = [];
  $status = false;
  if (strlen($s) == strlen($t)) {
    for ($i = 0; $i < strlen($s); $i++) {
      if (isset($newArrS[$s[$i]])) {
        $newArrS[$s[$i]] += 1;
      } else {
        $newArrS[$s[$i]] = 1;
      }
    }

    for ($j = 0; $j < strlen($t); $j++) {
      if (isset($newArrT[$t[$j]])) {
        $newArrT[$t[$j]] += 1;
      } else {
        $newArrT[$t[$j]] = 1;
      }
    }
  } else {
    return false;
  }

  foreach ($newArrS as $key1 => $value1) {
    if (isset($newArrT[$key1])) {
      if ($newArrT[$key1] == $value1) {
        $status = true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
  return $status;
}

var_dump(isAnagram("ab", "ba"));
var_dump(isAnagram("xaaddy", "xbbccy"));
var_dump(isAnagram("rat", "car"));
var_dump(isAnagram("anagram", "nagaram"));
