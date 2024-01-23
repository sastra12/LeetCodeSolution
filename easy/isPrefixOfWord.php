<?php

function isPrefixOfWord($sentence, $searchWord)
{
  $arrSentence = explode(" ", $sentence);
  foreach ($arrSentence as $key => $value) {
    if (strlen($searchWord) <= strlen($value)) {
      if (substr($value, 0, strlen($searchWord)) == $searchWord) {
        return $key + 1;
      }
    }
  }
  return -1;
}
var_dump(isPrefixOfWord("i love eating burger", "burg"));
var_dump(isPrefixOfWord("i am tired", "you"));
var_dump(isPrefixOfWord("this problem is an easy problem", "pro"));
