<?php

function palindrome($x)
{
  $array = str_split($x);
  $newArr = [];
  for ($a = count($array) - 1; $a >= 0; $a--) {
    array_push($newArr, $array[$a]);
  }

  if ($array === $newArr) {
    echo "true";
  } else {
    echo "false";
  }
}

// palindrome(30);
// palindrome(121);