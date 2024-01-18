<?php
// Find the Index of the First Occurrence in a String
// Given two strings needle and haystack, return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.
function findIndex($haystack, $needle)
{
  if ($haystack == $needle) {
    return 0;
  } else {
    for ($a = 0; $a < strlen($haystack); $a++) {
      if (substr($haystack, $a, strlen($needle)) == $needle && $a == 0) {
        return 0;
      } else if (substr($haystack, $a, strlen($needle)) == $needle) {
        return $a;
      }
    }
    return -1;
  }
}

// findIndex("hello", "ll");