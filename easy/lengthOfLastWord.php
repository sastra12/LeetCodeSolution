<?php

// Length of Last Word
// Example 1:

// Input: s = "Hello World"
// Output: 5
// Explanation: The last word is "World" with length 5.
// Example 2:

// Input: s = "   fly me   to   the moon  "
// Output: 4
// Explanation: The last word is "moon" with length 4.
// Example 3:

// Input: s = "luffy is still joyboy"
// Output: 6
// Explanation: The last word is "joyboy" with length 6.
function lengthOfLastWord($s)
{
  $newArr = explode(' ', trim($s, " "));
  $LastIndex = count($newArr) - 1;
  return strlen($newArr[$LastIndex]);
}

// lengthOfLastWord("Hello World");
// lengthOfLastWord("   fly me   to   the moon  ");
