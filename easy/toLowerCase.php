<?php

function toLowerCase($s)
{
  $alphabets = [
    "A" => 'a',
    "B" => 'b',
    "C" => 'c',
    "D" => 'd',
    "E" => 'e',
    "F" => 'f',
    "G" => 'g',
    "H" => 'h',
    "I" => 'i',
    "J" => 'j',
    "K" => 'k',
    "L" => 'l',
    "M" => 'm',
    "N" => 'n',
    "O" => 'o',
    "P" => 'p',
    "Q" => 'q',
    "R" => 'r',
    "S" => 's',
    "T" => 't',
    "U" => 'u',
    "V" => 'v',
    "W" => 'w',
    "X" => 'x',
    "Y" => 'y',
    "Z" => 'z',
  ];
  $result = "";
  for ($i = 0; $i < strlen($s); $i++) {
    $currentChar = $s[$i];
    foreach ($alphabets as $alphabet) {
      if ($currentChar != $alphabet) {
        break;
      }
    }
    if (isset($alphabets[$currentChar])) {
      $result .= $alphabets[$currentChar];
    } else {
      $result .= $currentChar;
    }
  }
  return ($result);
}

toLowerCase("Hello");
toLowerCase("al&phaBET");
