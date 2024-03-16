<?php
// Ransom Note
// Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.
// Each letter in magazine can only be used once in ransomNote.
// Example 1:
// Input: ransomNote = "a", magazine = "b"
// Output: false

// Example 2:
// Input: ransomNote = "aa", magazine = "ab"
// Output: false

// Example 3:
// Input: ransomNote = "aa", magazine = "aab"
// Output: true
function canConstruct($ransomNote, $magazine)
{
  $newRansomNote = [];
  $newMagazine = [];
  // jumlahkan jumlah tiap huruf pada ransom note
  foreach (str_split($ransomNote) as $value) {
    if (isset($newRansomNote[$value])) {
      $newRansomNote[$value] += 1;
    } else {
      $newRansomNote[$value] = 1;
    }
  }

  // jumlahkan jumlah tiap huruf pada magazine
  foreach (str_split($magazine) as $value) {
    if (isset($newMagazine[$value])) {
      $newMagazine[$value] += 1;
    } else {
      $newMagazine[$value] = 1;
    }
  }

  foreach ($newRansomNote as $key => $value) {
    if (!isset($newMagazine[$key]) || $newMagazine[$key] < $value) {
      return false;
    }
  }
  return true;
}

var_dump(canConstruct("a", "b"));
var_dump(canConstruct("aa", "aab"));
