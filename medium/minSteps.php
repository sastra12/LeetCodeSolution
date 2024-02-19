<?php

function minSteps($s, $t)
{
  $sum = 0;
  $arrS = [];
  $arrT = [];
  for ($i = 0; $i < strlen($s); $i++) {
    if (isset($arrS[$s[$i]])) {
      $arrS[$s[$i]] += 1;
    } else {
      $arrS[$s[$i]] = 1;
    }
  }

  for ($i = 0; $i < strlen($t); $i++) {
    if (isset($arrT[$t[$i]])) {
      $arrT[$t[$i]] += 1;
    } else {
      $arrT[$t[$i]] = 1;
    }
  }

  foreach ($arrS as $key => $value) {
    if (isset($arrT[$key])) {
      if ($value > $arrT[$key]) {
        $sum += $value - $arrT[$key];
      }
    } else if (!isset($arrT[$key])) {
      $sum += $value;
    }
  }
  return $sum;
}

// var_dump(minSteps("bab", "aba"));
// var_dump(minSteps("leetcode", "practice"));
// var_dump(minSteps("anagram", "mangaar"));
var_dump(minSteps("gctcxyuluxjuxnsvmomavutrrfb", "qijrjrhqqjxjtprybrzpyfyqtzf"));
