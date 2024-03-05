<?php
// Sorting the Sentence
// A sentence is a list of words that are separated by a single space with no leading or trailing spaces. Each word consists of lowercase and uppercase English letters.
// A sentence can be shuffled by appending the 1-indexed word position to each word then rearranging the words in the sentence.
// For example, the sentence "This is a sentence" can be shuffled as "sentence4 a3 is2 This1" or "is2 sentence4 This1 a3".
// Given a shuffled sentence s containing no more than 9 words, reconstruct and return the original sentence.
// Example 1:
// Input: s = "is2 sentence4 This1 a3"
// Output: "This is a sentence"
// Explanation: Sort the words in s to their original positions "This1 is2 a3 sentence4", then remove the numbers.

// Example 2:
// Input: s = "Myself2 Me1 I4 and3"
// Output: "Me Myself and I"
// Explanation: Sort the words in s to their original positions "Me1 Myself2 and3 I4", then remove the numbers.
function sortSentence($s)
{
  $arr = [];
  $finalWords = [];
  $words = explode(' ', $s);
  foreach ($words as $key => $value) {
    $numberPosition = substr($value, -1);
    $arr[$key] = $numberPosition;
  }

  sort($arr);

  foreach ($arr as $value2) {
    foreach ($words as $key1 => $value1) {
      $numberPosition = substr($value1, -1);
      if ($numberPosition ==  $value2) {
        $word = substr($value1, 0, -1);
        $finalWords[$key1] = $word;
      }
    }
  }
  return implode(" ", $finalWords);
}

var_dump(sortSentence("is2 sentence4 This1 a3"));
